<?php

namespace App\Http\Controllers;

use App\Http\Resources\achat as ResourcesAchat;
use App\Http\Resources\platUser;
use App\Models\achat;
use App\Models\plaUser;
use App\Models\reservation;
use App\Models\User;
use Illuminate\View\View;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;

class ProfileController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Display the user's profile form.
     */
    public function index(): View
    {
        $reservations = reservation::where([['user_id', Auth::user()->id], ['date', '>=', now()]])->get();
        $order_plats = plaUser::where('user_id', Auth::user()->id)->get();
        $order_boissons = achat::where('user_id', Auth::user()->id)->get();
        $count_reservations = $reservations->count();
        $count_order_plats = $order_plats->count();
        $count_order_boissons = $order_boissons->count();

        return view('profile.personal_infos', [
            'count_reservations' => $count_reservations,
            'count_orders' => $count_order_plats + $count_order_boissons
        ]);
    }

    /**
     * Display the other contents list.
     * 
     * @param  $entity
     * @return Illuminate\View\View
     */
    public function entity($entity): View
    {
        $reservations = reservation::where('user_id', Auth::user()->id)->get();
        $order_plats = plaUser::where('user_id', Auth::user()->id)->get();
        $order_plat_collection = platUser::collection($order_plats);
        $order_boissons = achat::where('user_id', Auth::user()->id)->get();
        $order_boisson_collection = ResourcesAchat::collection($order_boissons);
        $orders = collect();
        $orders = $order_plat_collection->merge($order_boisson_collection);
        $count_reservations = reservation::where([['user_id', Auth::user()->id], ['date', '>=', now()]])->get()->count();
        $count_orders = $orders->count();

        if ($entity == 'reservation') {
            return view('profile.personal_infos', [
                'entity' => $entity,
                'reservations' => $reservations,
                'count_orders' => $count_orders
            ]);
        }

        if ($entity == 'order') {
            return view('profile.personal_infos', [
                'entity' => $entity,
                'orders' => $orders,
                'count_reservations' => $count_reservations
            ]);
        }
    }

    /**
     * Display the other content details.
     * 
     * @param  $entity
     * @param  $id
     * @return Illuminate\View\View
     */
    public function entityDatas($entity, $id): View
    {
        $reservations = reservation::where('user_id', Auth::user()->id)->get();
        $order_plats = plaUser::where('user_id', Auth::user()->id)->get();
        $order_plat_collection = platUser::collection($order_plats);
        $order_boissons = achat::where('user_id', Auth::user()->id)->get();
        $order_boisson_collection = ResourcesAchat::collection($order_boissons);
        $orders = collect();
        $orders = $order_plat_collection->merge($order_boisson_collection);
        $count_reservations = reservation::where([['user_id', Auth::user()->id], ['date', '>=', now()]])->get()->count();
        $count_orders = $orders->count();

        if ($entity == 'reservation') {
            return view('profile.personal_infos', [
                'entity' => $entity,
                'reservations' => $reservations,
                'count_orders' => $count_orders
            ]);
        }

        if ($entity == 'order') {
            return view('profile.personal_infos', [
                'entity' => $entity,
                'orders' => $orders,
                'count_reservations' => $count_reservations
            ]);
        }
    }

    /**
     * Update the user's profile information.
     */
    public function update(Request $request): RedirectResponse
    {
        // Get inputs
        $inputs = [
            'id' => $request->user_id,
            'name' => $request->register_name,
            'prenom' => $request->register_prenom,
            'sexe' => $request->register_sexe,
            'bithday' => $request->register_birthDate,
            'email' => $request->register_email,
            'phone' => $request->register_phone,
            'adresse' => $request->register_address,
            'password' => $request->register_password,
            'confirm_password' => $request->confirm_password
        ];

        $user = User::find($inputs['id']);

        if ($inputs['name'] != null AND $inputs['name'] != $user->name) {
            $user->update([
                'name' => $inputs['name'],
                'updated_at' => now(),
            ]);
        }

        if ($inputs['prenom'] != null AND $inputs['prenom'] != $user->prenom) {
            $user->update([
                'prenom' => $inputs['prenom'],
                'updated_at' => now(),
            ]);
        }

        if ($inputs['sexe'] != null AND $inputs['sexe'] != $user->sexe) {
            $user->update([
                'sexe' => $inputs['sexe'],
                'updated_at' => now(),
            ]);
        }

        if ($inputs['bithday'] != null AND $inputs['bithday'] != $user->bithday) {
            $user->update([
                'bithday' => $inputs['bithday'],
                'updated_at' => now(),
            ]);
        }

        if ($inputs['email'] != null AND $inputs['email'] != $user->email) {
            $user->update([
                'email' => $inputs['email'],
                'updated_at' => now(),
            ]);
        }

        if ($inputs['phone'] != null AND $inputs['phone'] != $user->phone) {
            $user->update([
                'phone' => $inputs['phone'],
                'updated_at' => now(),
            ]);
        }

        if ($inputs['adresse'] != null AND $inputs['adresse'] != $user->adresse) {
            $user->update([
                'adresse' => $inputs['adresse'],
                'updated_at' => now(),
            ]);
        }

        if ($inputs['password'] != null) {
            if ($inputs['confirm_password'] != $inputs['password'] OR $inputs['confirm_password'] == null) {
                return Redirect::back()->with('error_message', 'Veuillez bien confirmer le mot de passe');
            }

            if (preg_match('#^\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])\S*$#', $inputs['password']) == 0) {
                return Redirect::back()->with('error_message', 'Le mot de passe -> doit avoir au moins 8 caractères -> doit être alphanuméric -> doit avoir une lettre majuscule -> et au moins un caractère spécial');
            }

            $inputs['password'] = Hash::make($inputs['password']);

            $user->update([
                'password' => $inputs['password'],
                'updated_at' => now(),
            ]);
        }

        return Redirect::back()->with('success_message', 'Profil mis à jour');
    }

    /**
     * Update the user's avatar.
     * 
     * @param  \Illuminate\Http\Request  $request
     * @param  $id
     */
    public function updateAvatar(Request $request, $id): RedirectResponse
    {
        $inputs = [
            'user_id' => $request->user_id,
            'image_64' => $request->image_64
        ];
        // $extension = explode('/', explode(':', substr($inputs['image_64'], 0, strpos($inputs['image_64'], ';')))[1])[1];
        $replace = substr($inputs['image_64'], 0, strpos($inputs['image_64'], ',') + 1);
        // Find substring from replace here eg: data:image/png;base64,
        $image = str_replace($replace, '', $inputs['image_64']);
        $image = str_replace(' ', '+', $image);
        // Create image URL
		$image_url = '/images/users/' . $id . '/' . Str::random(50) . '.png';

		// Upload image
		Storage::url(Storage::disk('public')->put($image_url, base64_decode($image)));

		$user = User::find($id);

        $user->update([
            'avatar_url' => '/storage' . $image_url,
            'updated_at' => now()
        ]);

        return Redirect::back()->with('success_message', 'Photo modifiée');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
