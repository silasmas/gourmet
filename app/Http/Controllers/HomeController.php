<?php

namespace App\Http\Controllers;

use App\Http\Resources\achat as ResourcesAchat;
use App\Models\achat;
use GuzzleHttp\Client;
use App\Models\reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Http\Resources\categorie as ResourcesCategorie;
use App\Http\Resources\platUser;
use App\Models\categorie;
use App\Models\plat;
use App\Models\plaUser;
use App\Models\sommelerie;
use App\Models\statut;
use Illuminate\Support\Facades\Redirect;
use GuzzleHttp\Exception\ClientException;

class HomeController extends Controller
{
    public static $client;

    public function __construct()
    {
        // Client used for accessing API
        $this->middleware('auth')->except(['index', 'about', 'kicoucou', 'menu', 'atelier', 'boisson']);
        $this::$client = new Client();
    }

    /*--------------------------------------------------------
                        PUBLIC METHODS
    --------------------------------------------------------*/
    public function index()
    {
        return view('pages.index');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function kicoucou()
    {
        return view('pages/kikoukou');
    }

    public function menu()
    {
        $categories_collection = categorie::all();
        $categories = ResourcesCategorie::collection($categories_collection);

        return view('pages/menu', compact('categories'));
    }

    public function atelier()
    {
        return view('pages/atelier');
    }

    public function boisson()
    {
        $categories_collection = categorie::all();
        $categories = ResourcesCategorie::collection($categories_collection);

        return view('pages/boisson', compact('categories'));
    }

    /*--------------------------------------------------------
                        ADMIN METHODS
    --------------------------------------------------------*/
    public function dashboard()
    {
        if (Auth::user()->is_admin == 0) {
            abort(403);

        } else {
            $boissons = sommelerie::limit(5)->orderByDesc('created_at')->get();
            $plats = plat::limit(5)->orderByDesc('created_at')->get();
            $categories = categorie::all();
            $order_plats = plaUser::limit(7)->orderByDesc('created_at')->get();
            $order_plat_collection = platUser::collection($order_plats);
            $order_boissons = achat::limit(7)->orderByDesc('created_at')->get();
            $order_boisson_collection = ResourcesAchat::collection($order_boissons);
            $orders = collect();
            $orders = $order_plat_collection->merge($order_boisson_collection);

            return view('dashboard.home', [
                'categories' => $categories,
                'boissons' => $boissons,
                'plats' => $plats,
                'orders' => $orders
            ]);
        }
    }

    public function dashboardEntity($entity)
    {
        if (Auth::user()->is_admin == 0) {
            abort(403);

        } else {
            $boissons = sommelerie::all();
            $plats = plat::all();
            $categories = categorie::all();
            $order_plats = plaUser::orderByDesc('created_at')->get();
            $order_plat_collection = platUser::collection($order_plats);
            $order_boissons = achat::orderByDesc('created_at')->get();
            $order_boisson_collection = ResourcesAchat::collection($order_boissons);
            $orders = collect();
            $orders = $order_plat_collection->merge($order_boisson_collection);

            if ($entity == 'categorie') {
                return view('dashboard.entity', [
                    'entity' => $entity,
                    'categories' => $categories
                ]);
            }

            if ($entity == 'plat') {
                return view('dashboard.entity', [
                    'entity' => $entity,
                    'categories' => $categories,
                    'plats' => $plats
                ]);
            }

            if ($entity == 'boisson') {
                return view('dashboard.entity', [
                    'entity' => $entity,
                    'categories' => $categories,
                    'boissons' => $boissons
                ]);
            }

            if ($entity == 'orders') {
                return view('dashboard.entity', [
                    'entity' => $entity,
                    'orders' => $orders
                ]);
            }
        }
    }

    public function dashboardEntityDatas($entity, $id)
    {
        if (Auth::user()->is_admin == 0) {
            abort(403);

        } else {
            $categorie_by_id = categorie::find($id);

            if (is_null($categorie_by_id)) {
                return Redirect::to('/admin/categorie')->with('error_message', 'Cette catégorie n\'existe pas !');
            }

            $boisson_by_id = sommelerie::find($id);

            if (is_null($boisson_by_id)) {
                return Redirect::to('/admin/boisson')->with('error_message', 'Cette boisson n\'existe pas !');
            }

            $plat_by_id = plat::find($id);

            if (is_null($plat_by_id)) {
                return Redirect::to('/admin/plat')->with('error_message', 'Ce plat n\'existe pas !');
            }

            $categories = categorie::all();
            $user_order_plats = plaUser::where('user_id', $id)->orderByDesc('created_at')->get();
            $user_order_plat_collection = platUser::collection($user_order_plats);
            $user_order_boissons = achat::where('user_id', $id)->orderByDesc('created_at')->get();
            $user_order_boisson_collection = ResourcesAchat::collection($user_order_boissons);
            $user_orders = collect();
            $user_orders = $user_order_plat_collection->merge($user_order_boisson_collection);

            if ($entity == 'categorie') {
                return view('dashboard.entity', [
                    'entity' => $entity,
                    'categorie' => $categorie_by_id
                ]);
            }

            if ($entity == 'plat') {
                return view('dashboard.entity', [
                    'entity' => $entity,
                    'categories' => $categories,
                    'plat' => $plat_by_id
                ]);
            }

            if ($entity == 'boisson') {
                return view('dashboard.entity', [
                    'entity' => $entity,
                    'categories' => $categories,
                    'boisson' => $boisson_by_id
                ]);
            }

            if ($entity == 'orders') {
                return view('dashboard.entity', [
                    'entity' => $entity,
                    'user_orders' => $user_orders
                ]);
            }
        }
    }

    public function registerDashboardEntity(Request $request, $entity)
    {
        if ($entity == 'categorie') {
            categorie::create([
                'nom' => $request->register_nom,
                'description' => $request->register_description
            ]);

            return Redirect::back()->with('success_message', 'Catégorie enregistrée');
        }

        if ($entity == 'boisson') {
            if ($request->categorie_id == null OR !is_numeric($request->categorie_id)) {
                return Redirect::back()->with('error_message', 'Veuillez sélectionner une catégorie !');
            }

            if (trim($request->register_nom) == null) {
                return Redirect::back()->with('error_message', 'Le nom est obligatoire');
            }

            if (trim($request->register_prix) == null OR trim($request->register_monnaie) == null) {
                return Redirect::back()->with('error_message', 'Le prix et la monnaie sont obligatoire');
            }

            // Register new sommelerie
            $sommelerie = sommelerie::create([
                'nom' => $request->register_nom,
                'prix' => $request->register_prix,
                'monaie' => $request->register_monnaie,
                'quantite' => $request->register_quantite != null ? $request->register_quantite : 1,
                'description' => $request->register_description,
                'categorie_id' => $request->categorie_id
            ]);
    
            if ($request->data_image_1 != null) {
                $replace = substr($request->data_image_1, 0, strpos($request->data_image_1, ',') + 1);
                // Find substring from replace here eg: data:image/png;base64,
                $image = str_replace($replace, '', $request->data_image_1);
                $image = str_replace(' ', '+', $image);
                // Create image URL
                $image_url = '/images/sommeleries/' . $sommelerie->id . '/' . Str::random(50) . '.png';
    
                // Upload image
                Storage::url(Storage::disk('public')->put($image_url, base64_decode($image)));
    
                $sommelerie->update([
                    'image' => '/storage' . $image_url,
                    'updated_at' => now()
                ]);
            }

            return Redirect::back()->with('success_message', 'Boisson enregistrée');
        }

        if ($entity == 'plat') {
            if ($request->categorie_id == null OR !is_numeric($request->categorie_id)) {
                return Redirect::back()->with('error_message', 'Veuillez sélectionner une catégorie !');
            }

            if (trim($request->register_nom) == null) {
                return Redirect::back()->with('error_message', 'Le nom est obligatoire');
            }

            if (trim($request->register_prix) == null OR trim($request->register_monnaie) == null) {
                return Redirect::back()->with('error_message', 'Le prix et la monnaie sont obligatoire');
            }

            // Register new plat
            $plat = plat::create([
                'nom' => $request->register_nom,
                'prix' => $request->register_prix,
                'monaie' => $request->register_monnaie,
                'quantite' => $request->register_quantite != null ? $request->register_quantite : 1,
                'description' => $request->register_description,
                'categorie_id' => $request->categorie_id
            ]);

            if ($request->data_image_1 != null) {
                $replace = substr($request->data_image_1, 0, strpos($request->data_image_1, ',') + 1);
                // Find substring from replace here eg: data:image/png;base64,
                $image = str_replace($replace, '', $request->data_image_1);
                $image = str_replace(' ', '+', $image);
                // Create image URL
                $image_url = '/images/plats/' . $plat->id . '/' . Str::random(50) . '.png';

                // Upload image
                Storage::url(Storage::disk('public')->put($image_url, base64_decode($image)));

                $plat->update([
                    'image' => '/storage' . $image_url,
                    'updated_at' => now()
                ]);
            }

            if ($request->data_image_2 != null) {
                $replace = substr($request->data_image_2, 0, strpos($request->data_image_2, ',') + 1);
                // Find substring from replace here eg: data:image/png;base64,
                $image = str_replace($replace, '', $request->data_image_2);
                $image = str_replace(' ', '+', $image);
                // Create image URL
                $image_url = '/images/plats/' . $plat->id . '/' . Str::random(50) . '.png';

                // Upload image
                Storage::url(Storage::disk('public')->put($image_url, base64_decode($image)));

                $plat->update([
                    'image2' => '/storage' . $image_url,
                    'updated_at' => now()
                ]);
            }

            if ($request->data_image_3 != null) {
                $replace = substr($request->data_image_3, 0, strpos($request->data_image_3, ',') + 1);
                // Find substring from replace here eg: data:image/png;base64,
                $image = str_replace($replace, '', $request->data_image_3);
                $image = str_replace(' ', '+', $image);
                // Create image URL
                $image_url = '/images/plats/' . $plat->id . '/' . Str::random(50) . '.png';

                // Upload image
                Storage::url(Storage::disk('public')->put($image_url, base64_decode($image)));

                $plat->update([
                    'image3' => '/storage' . $image_url,
                    'updated_at' => now()
                ]);
            }

            if ($request->data_image_4 != null) {
                $replace = substr($request->data_image_4, 0, strpos($request->data_image_4, ',') + 1);
                // Find substring from replace here eg: data:image/png;base64,
                $image = str_replace($replace, '', $request->data_image_4);
                $image = str_replace(' ', '+', $image);
                // Create image URL
                $image_url = '/images/plats/' . $plat->id . '/' . Str::random(50) . '.png';

                // Upload image
                Storage::url(Storage::disk('public')->put($image_url, base64_decode($image)));

                $plat->update([
                    'image4' => '/storage' . $image_url,
                    'updated_at' => now()
                ]);
            }

            return Redirect::back()->with('success_message', 'Plat enregistré');
        }
    }

    /*--------------------------------------------------------
                        PAYMENT METHODS
    --------------------------------------------------------*/
    /**
     * Display the message about transaction in waiting.
     *
     * @return \Illuminate\View\View
     */
    public function transactionEnAttente()
    {
        return view('transaction_message');
    }

    /**
     * Display the message about transaction done.
     *
     * @return \Illuminate\View\View
     */
    public function transactionMessage($entity, $orderNumber, $userId)
    {
        if ($entity == 'achat') {
            $achat = achat::where([['order_number', $orderNumber], ['user_id', $userId]])->first();
            $statut = statut::find($achat->statut_id);

            return view('transaction_message', [
                'message_content' => __('general.transaction_done'),
                'status_code' => (string) $achat->statut_id,
                'statut' => $statut->nom,
                'achat' => $achat,
            ]);
        }

        if ($entity == 'plat_user') {
            $plat_user = plaUser::where([['order_number', $orderNumber], ['user_id', $userId]])->first();
            $statut = statut::find($plat_user->statut_id);

            return view('transaction_message', [
                'message_content' => __('general.transaction_done'),
                'status_code' => (string) $plat_user->statut_id,
                'statut' => $statut->nom,
                'achat' => $plat_user,
            ]);
        }

        if ($entity == 'reservation') {
            $reservation = reservation::where([['order_number', $orderNumber], ['user_id', $userId]])->first();
            $statut = statut::find($reservation->statut_id);

            return view('transaction_message', [
                'message_content' => __('general.transaction_done'),
                'status_code' => (string) $reservation->statut_id,
                'statut' => $statut->nom,
                'achat' => $reservation,
            ]);
        }
    }

    /**
     * GET: Buying result
     *
     * @param $montant
     * @param $code
     * @param $user_id
     * @return \Illuminate\View\View
     */
    public function achatEnvoye($montant, $code, $user_id)
    {
        if ($code == '0') {
            $achat = achat::where('order_number', Session::get('order_number'))->first();

            if ($achat == null) {
                achat::create([
                    'montant' => $montant,
                    'order_number' => Session::get('order_number'),
                    'user_id' => $user_id
                ]);
            }

            return view('transaction_message', [
                'status_code' => $code,
                'message_content' => __('general.transaction_done'),
            ]);
        }

        if ($code == '1') {
            $achat = achat::where('order_number', Session::get('order_number'))->first();

            if ($achat != null) {
                $achat->update([
                    'status_id' => 2,
                    'updated_at' => now()
                ]);
            }

            return view('transaction_message', [
                'status_code' => $code,
                'message_content' => __('general.transaction_canceled'),
            ]);
        }

        if ($code == '2') {
            $achat = achat::where('order_number', Session::get('order_number'))->first();

            if ($achat != null) {
                $achat->update([
                    'status_id' => 2,
                    'updated_at' => now()
                ]);
            }

            return view('transaction_message', [
                'status_code' => $code,
                'message_content' => __('general.transaction_failed'),
            ]);
        }
    }

    /**
     * GET: Reservation result
     *
     * @param $entity
     * @param $montant
     * @param $code
     * @param $user_id
     * @return \Illuminate\View\View
     */
    public function donneeEnvoyee($entity, $montant, $code, $user_id)
    {
        if ($code == '0') {
            $reservation = reservation::where('order_number', Session::get('order_number'))->first();

            if ($reservation == null) {
                reservation::create([
                    'montant' => $montant,
                    'order_number' => Session::get('order_number'),
                    'user_id' => $user_id
                ]);
            }

            return view('transaction_message', [
                'status_code' => $code,
                'message_content' => __('general.transaction_done'),
                'entity' => $entity
            ]);
        }

        if ($code == '1') {
            $reservation = reservation::where('order_number', Session::get('order_number'))->first();

            if ($reservation != null) {
                $reservation->update([
                    'statut_id' => 2,
                    'updated_at' => now()
                ]);
            }

            return view('transaction_message', [
                'status_code' => $code,
                'message_content' => __('general.transaction_canceled'),
                'entity' => $entity
            ]);
        }

        if ($code == '2') {
            $reservation = reservation::where('order_number', Session::get('order_number'))->first();

            if ($reservation != null) {
                $reservation->update([
                    'statut_id' => 2,
                    'updated_at' => now()
                ]);
            }

            return view('transaction_message', [
                'status_code' => $code,
                'message_content' => __('general.transaction_failed'),
                'entity' => $entity
            ]);
        }
    }

    /**
     * POST: Register achat
     *
     * @param \Illuminate\Http\Request  $request
     * @param  $entity
     * @return \Illuminate\Http\RedirectResponse
     */
    public function acheter(Request $request, $entity)
    {
        $flexpay_gateway = 'https://backend.flexpay.cd/api/rest/v1/paymentService';

        if ($request->transaction_type_id == null) {
            return Redirect::back()->with('error_message', __('general.transaction_type_error'));
        }

        if ($request->transaction_type_id == 1) {
            if ($request->other_phone == null) {
                return Redirect::back()->with('error_message', __('validation.custom.phone.incorrect'));
            }

            $reference_code = 'REF-' . ((string) random_int(10000000, 99999999)) . '-' . Auth::user()->id;

            try {
                // Create response by sending request to FlexPay
                $flexpay_response = $this::$client->request('POST', $flexpay_gateway, [
                    'headers' => array(
                        'Authorization' => 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJcL2xvZ2luIiwicm9sZXMiOlsiTUVSQ0hBTlQiXSwiZXhwIjoxNzI2MTYxOTIzLCJzdWIiOiIyYzM2NzZkNDhkNGY4OTBhMGNiZjg4YmVjOTc1OTkyNyJ9.N7BBGQ2hNEeL_Q3gkvbyIQxcq71KtC_b0a4WsTKaMT8',
                        'Accept' => 'application/json'
                    ),
                    'json' => array(
                        'merchant' => 'PROXDOC',
                        'type' => $request->transaction_type_id,
                        'phone' => $request->other_phone,
                        'reference' => $reference_code,
                        'amount' => explode(' ', $request->register_prix)[0],
                        'currency' => explode(' ', $request->register_prix)[1],
                        'callbackUrl' => (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . ($entity == 'achat' ? '/achat/store' : '/plat_user/store')
                    ),
                    'verify'  => false
                ]);

                // Decode JSON from the FlexPay created response
                $jsonRes = json_decode($flexpay_response->getBody(), false);
                $code = $jsonRes->code;

                if ($code != '0') {
                    return Redirect::back()->with('error_message', __('general.transaction_failed'));

                } else {
                    if ($entity == 'achat') {
                        achat::create([
                            'user_id' => Auth::user()->id,
                            'sommelerie_id' => $request->boisson_id,
                            'reference' => $reference_code,
                            'order_number' => $jsonRes->orderNumber,
                            'montant' => explode(' ', $request->register_prix)[0],
                            'monaie' => explode(' ', $request->register_prix)[1],
                            'statut_id' => 1,
                            'customer_served' => $request->customer_served
                        ]);

                        return Redirect::route('transaction.en_attente', [
                            'success_message' => $jsonRes->orderNumber . '-' . Auth::user()->id . '-achat',
                        ]);
                    }

                    if ($entity == 'plat_user') {
                        plaUser::create([
                            'user_id' => Auth::user()->id,
                            'plat_id' => $request->plat_id,
                            'reference' => $reference_code,
                            'order_number' => $jsonRes->orderNumber,
                            'montant' => explode(' ', $request->register_prix)[0],
                            'monaie' => explode(' ', $request->register_prix)[1],
                            'statut_id' => 1,
                            'customer_served' => $request->customer_served,
                            'take_away' => $request->take_away
                        ]);

                        return Redirect::route('transaction.en_attente', [
                            'success_message' => $jsonRes->orderNumber . '-' . Auth::user()->id . '-plat_user',
                        ]);
                    }
                }

            } catch (ClientException $e) {
                return view('transaction_message', [
                    'response_error' => json_decode($e->getResponse()->getBody()->getContents(), false),
                ]);
            }
        }

        if ($request->transaction_type_id == 2) {
            if ($entity == 'achat') {
                return Redirect::to('/kicoucou/achat/' . explode(' ', $request->register_prix)[0] . '/' . explode(' ', $request->register_prix)[1] . '/' . Auth::user()->id);
            }

            if ($entity == 'plat_user') {
                return Redirect::to('/kicoucou/plat_user/' . explode(' ', $request->register_prix)[0] . '/' . explode(' ', $request->register_prix)[1] . '/' . Auth::user()->id);
            }
        }
    }

    /**
     * POST: Register reservation
     *
     * @param \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function reserver(Request $request)
    {
        $flexpay_gateway = 'https://backend.flexpay.cd/api/rest/v1/paymentService';

        if ($request->transaction_type_id == null) {
            return Redirect::back()->with('error_message', __('general.transaction_type_error'));
        }

        if ($request->transaction_type_id == 1) {
            if ($request->other_phone == null) {
                return Redirect::back()->with('error_message', __('validation.custom.phone.incorrect'));
            }

            $reference_code = 'REF-' . ((string) random_int(10000000, 99999999)) . '-' . Auth::user()->id;

            try {
                // Create response by sending request to FlexPay
                $flexpay_response = $this::$client->request('POST', $flexpay_gateway, [
                    'headers' => array(
                        'Authorization' => 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJcL2xvZ2luIiwicm9sZXMiOlsiTUVSQ0hBTlQiXSwiZXhwIjoxNzI2MTYxOTIzLCJzdWIiOiIyYzM2NzZkNDhkNGY4OTBhMGNiZjg4YmVjOTc1OTkyNyJ9.N7BBGQ2hNEeL_Q3gkvbyIQxcq71KtC_b0a4WsTKaMT8',
                        'Accept' => 'application/json'
                    ),
                    'json' => array(
                        'merchant' => 'PROXDOC',
                        'type' => $request->transaction_type_id,
                        'phone' => $request->other_phone,
                        'reference' => $reference_code,
                        'amount' => explode(' ', $request->register_prix)[0],
                        'currency' => explode(' ', $request->register_prix)[1],
                        'callbackUrl' => (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/reservation/store'
                    ),
                    'verify'  => false
                ]);

                // Decode JSON from the FlexPay created response
                $jsonRes = json_decode($flexpay_response->getBody(), false);
                $code = $jsonRes->code;

                if ($code != '0') {
                    return Redirect::back()->with('error_message', __('general.transaction_failed'));

                } else {
                    reservation::create([
                        'date' => $request->register_dateReservation . ' ' . explode('h', $request->register_heureReservation)[0] . ':' . explode('h', $request->register_heureReservation)[1] . ':00',
                        'reference' => $reference_code,
                        'order_number' => $jsonRes->orderNumber,
                        'nombre' => $request->register_nombre,
                        'montant' => explode(' ', $request->register_prix)[0],
                        'monaie' => explode(' ', $request->register_prix)[1],
                        'statut_id' => 1,
                        'user_id' => Auth::user()->id,
                    ]);

                    return Redirect::route('transaction.en_attente', [
                        'success_message' => $jsonRes->orderNumber . '-' . Auth::user()->id . '-reservation',
                    ]);
                }

            } catch (ClientException $e) {
                return view('transaction_message', [
                    'response_error' => json_decode($e->getResponse()->getBody()->getContents(), false),
                ]);
            }
        }

        if ($request->transaction_type_id == 2) {
            return Redirect::to('/kicoucou/reservation/' . explode(' ', $request->register_prix)[0] . '/' . explode(' ', $request->register_prix)[1] . '/' . Auth::user()->id);
        }
    }

    /**
     * GET: Run achat by bank card
     *
     * @param $montant
     * @param $monnaie
     * @param $user_id
     * @return \Illuminate\View\View
     */
    public function payerAvecCarte($entity, $montant, $monnaie, $user_id)
    {
        $reference_code = 'REF-' . ((string) random_int(10000000, 99999999)) . '-' . $user_id;
        $flexpay_gateway = 'https://cardpayment.flexpay.cd/v1.1/pay';

        try {
            // Create response by sending request to FlexPay
            $response = $this::$client->request('POST', $flexpay_gateway, [
                'headers' => array(
                    'Accept' => 'application/json'
                ),
                'json' => array(
                    'authorization' => 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJcL2xvZ2luIiwicm9sZXMiOlsiTUVSQ0hBTlQiXSwiZXhwIjoxNzI2MTYxOTIzLCJzdWIiOiIyYzM2NzZkNDhkNGY4OTBhMGNiZjg4YmVjOTc1OTkyNyJ9.N7BBGQ2hNEeL_Q3gkvbyIQxcq71KtC_b0a4WsTKaMT8',
                    'merchant' => 'PROXDOC',
                    'reference' => $reference_code,
                    'amount' => $montant,
                    'currency' => $monnaie,
                    'description' => __('general.bank_transaction_description'),
                    'callback_url' => (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . ($entity == 'reservation' ? '/reservation/store' : ($entity ==  'achat' ? '/achat/store' : '/plat_user/store')),
                    'approve_url' => (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/kicoucou/paiement_termine/' . $entity . '/' . $montant . '/0/' . $user_id,
                    'cancel_url' => (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/kicoucou/paiement_termine/' . $entity . '/' . $montant . '/1/' . $user_id,
                    'decline_url' => (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/kicoucou/paiement_termine/' . $entity . '/' . $montant . '/2/' . $user_id,
                ),
                'verify'  => false
            ]);

            if ($entity == 'achat') {
                $achat = json_decode($response->getBody(), false);
                $register = achat::create([
                    'montant' => $montant,
                    'order_number' => $achat->orderNumber,
                    'user_id' => $user_id
                ]);

                if ($register) {
                    return redirect($achat->url)->with('order_number', $achat->orderNumber);

                } else {
                    return redirect('/kicoucou')->with('error_message', __('general.error_while_processing'));
                }
            }

            if ($entity == 'plat_user') {
                $plat_user = json_decode($response->getBody(), false);
                $register = plaUser::create([
                    'montant' => $montant,
                    'order_number' => $plat_user->orderNumber,
                    'user_id' => $user_id
                ]);

                if ($register) {
                    return redirect($plat_user->url)->with('order_number', $plat_user->orderNumber);

                } else {
                    return redirect('/kicoucou')->with('error_message', __('general.error_while_processing'));
                }
            }

            if ($entity == 'reservation') {
                $reservation = json_decode($response->getBody(), false);
                $register = reservation::create([
                    'montant' => $montant,
                    'order_number' => $reservation->orderNumber,
                    'user_id' => $user_id
                ]);

                if ($register) {
                    return redirect($reservation->url)->with('order_number', $reservation->orderNumber);

                } else {
                    return redirect('/kicoucou')->with('error_message', __('general.error_while_processing'));
                }
            }

        } catch (ClientException $e) {
            $response_error = json_decode($e->getResponse()->getBody()->getContents(), false);

            return redirect('/kicoucou')->with('error_message', $response_error->message);
        }
    }
}
