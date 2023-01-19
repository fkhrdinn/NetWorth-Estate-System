<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Validation\Validator;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\View\View
     */
    public function edit(Request $request)
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     *
     * @param  \App\Http\Requests\ProfileUpdateRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request)
    {
        User::where('id', auth()->user()->id)
        ->update([
            'name' => $request->name,
            'email' => $request->email,
            'telephone_number' => $request->telephone,
            'address' => $request->address
        ]);

        toast('Profile has been updated successfully.','success')->autoClose(5000)->hideCloseButton();

        return Redirect::route('profile.edit');
    }

    /**
     * Delete the user's account.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        $validated = Hash::check($request->currentPassword, Auth()->user()->password);

        $request->validate([
            'currentPassword' => ['required'],
        ]);

        if($validated)
        {
            $user = $request->user();

            Auth::logout();

            $user->delete();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
            
            return redirect()->route('index')->with('success', 'success');
        }

        if(!$validated)
        {
            toast('Password is incorrect.','error')->autoClose(5000)->hideCloseButton();
            return redirect()->route('profile.edit');
        }

        
    }
}
