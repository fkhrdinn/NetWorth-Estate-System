<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\Validator;

class PasswordController extends Controller
{
    /**
     * Update the user's password.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request)
    {
        $validated = Hash::check($request->updatePassword, Auth()->user()->password);

        $request->validate([
            'updatePassword' => ['required'],
            'new_password' => ['required'],
            'password' => ['same:new_password']
        ]);

        $check = null;

        if($validated)
        {
            $check = $request->user()->update([
            'password' => Hash::make($request->password),
            ]);
        }
        

        if($check)
        {
            toast('Password has been updated successfully.','success')->autoClose(5000)->hideCloseButton();
        }
        if(!$validated)
        {
            toast('Password is incorrect.','error')->autoClose(5000)->hideCloseButton();
        }

        return redirect()->route('profile.edit');
    }
}
