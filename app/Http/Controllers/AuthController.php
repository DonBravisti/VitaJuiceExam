<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    public function registration(Request $data)
    {
        $validatedata = $data->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(User::where('email', $validatedata['email'])->exists();)
        {
            return ['succes' => false, 'message' => 'уйди'];
        }

        $user = User:create($validatedata);

        if($user)
        {
            $user->save();
            auth()->login($user);
            return ['success' => true, 'message' => 'милости просим'];
        }

        return ['succes' => false, 'message' => 'уйди. ниче не вышло'];
    }
}
