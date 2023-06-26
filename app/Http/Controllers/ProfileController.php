<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\View\View;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;

class ProfileController extends Controller
{
    public function __construct() {
        // $currentHost = (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'];

        $this->middleware('auth');
    }

    /**
     * Display the user's profile form.
     */
    public function index(): View
    {
        return view('profile.personal_infos');
    }

    /**
     * Display the other contents list.
     * 
     * @param  $entity
     * @return Illuminate\View\View
     */
    public function entity($entity): View
    {
        return view('profile.personal_infos');
    }

    /**
     * Display the other content details.
     * 
     * @param  $entity
     * @param  $id
     * @return Illuminate\View\View
     */
    public function entityDatas($request, $id): View
    {
        return view('profile.personal_infos');
    }

    /**
     * Update the user's profile information.
     */
    public function update(Request $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.personal_infos')->with('status', 'profile-updated');
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

        return Redirect::back()->with('success_message', 'Image modifiée !');
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
