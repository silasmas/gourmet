<?php

namespace App\Http\Controllers;

use App\Models\home;
use App\Models\achat;
use GuzzleHttp\Client;
use App\Models\reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StorehomeRequest;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\UpdatehomeRequest;
use Illuminate\Support\Facades\Redirect;
use GuzzleHttp\Exception\ClientException;

class HomeController extends Controller
{
    public static $client;

    public function __construct()
    {
        // Client used for accessing API
        $this::$client = new Client();
    }

    /**
     * Display a listing of the resource.
     */
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
    public function atelier()
    {
        return view('pages/atelier');
    }
    public function sommelerie()
    {
        return view('pages/sommelerie');
    }
    public function menu()
    {
        return view('pages/menu');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorehomeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(home $home)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(home $home)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatehomeRequest $request, home $home)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(home $home)
    {
        //
    }

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
    public function transactionMessage($orderNumber, $userId)
    {
        $achat = achat::where([['order_number', $orderNumber], ['user_id', $userId]])->first();

        if (is_null($achat)) {
            return Redirect::action('/kicoucou')->with('error_message', 'Aucun achat en cours !');
        }

        return view('transaction_message', [
            'message_content' => __('general.transaction_done'),
            'status_code' => (string) $achat->statut_id,
            'achat' => $achat->data,
        ]);
    }

    /**
     * GET: Transaction result
     *
     * @param $montant
     * @param $monnaie
     * @param $code
     * @param $user_id
     * @return \Illuminate\View\View
     */
    public function reservationEnvoyee($montant, $monnaie, $code, $user_id)
    {
        if ($code == '0') {
            reservation::create([
                'prix' => $montant,
                'monaie' => $monnaie,
                'user_id' => $user_id
            ]);

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
            if ($request->select_country == null or $request->other_phone_number == null) {
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
                        'amount' => $request->register_prix,
                        'currency' => $request->register_monnaie,
                        'callbackUrl' => (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/achat/store'
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
                        'date' => explode('/', $request->register_dateReservation)[2] . '-' . explode('/', $request->register_dateReservation)[1] . '-' . explode('/', $request->register_dateReservation)[0] . ' ' . explode('h', $request->register_heureReservation)[0] . ':' . explode('h', $request->register_heureReservation)[1] . ':00',
                        'nombre' => $request->register_nombre,
                        'prix' => $request->register_prix,
                        'monaie' => $request->register_monnaie,
                        'statut_id' => 1,
                    ]);

                    return Redirect::route('transaction.en_attente', [
                        'success_message' => $jsonRes->orderNumber . '-' . Auth::user()->id,
                    ]);
                }
            } catch (ClientException $e) {
                return view('transaction_message', [
                    'response_error' => json_decode($e->getResponse()->getBody()->getContents(), false),
                ]);
            }
        }

        if ($request->transaction_type_id == 2) {
            return Redirect::to('/kicoucou/reservation/' . $request->register_prix . '/' . $request->register_monnaie . '/' . Auth::user()->id);
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
    public function payerAvecCarte($montant, $monnaie, $user_id)
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
                    'callback_url' => (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/achat/store',
                    'approve_url' => (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/kicoucou/reservation_envoyee/' . $montant . '/' . $monnaie . '/0/' . $user_id,
                    'cancel_url' => (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/kicoucou/reservation_envoyee/' . $montant . '/' . $monnaie . '/1/' . $user_id,
                    'decline_url' => (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/kicoucou/reservation_envoyee/' . $montant . '/' . $monnaie . '/2/' . $user_id,
                ),
                'verify'  => false
            ]);
            $achat = json_decode($response->getBody(), false);

            if ($achat) {
                return redirect($achat->url)->with('order_number', $achat->orderNumber);

            } else {
                return redirect('/kicoucou')->with('error_message', __('notifications.error_while_processing'));
            }

        } catch (ClientException $e) {
            $response_error = json_decode($e->getResponse()->getBody()->getContents(), false);

            return redirect('/kicoucou')->with('error_message', $response_error->message);
        }
    }
}
