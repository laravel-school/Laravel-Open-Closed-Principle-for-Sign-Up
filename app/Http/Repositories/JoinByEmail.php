<?php
namespace App\Http\Repositories;

use App\Http\Interfaces\JoinInterface;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class JoinByEmail implements JoinInterface
{
    public function store(Request $request)
    {
        $name = $request->first_name . ' ' . $request->last_name;

        $user = User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'name' => $name,
            'slug' => Str::slug($name, '-'),
            'is_public' => 1,
            'usertype' => User::USERTYPE['regular'],
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'activate' => User::ACTIVATE['inactive'],
            'flag' => 0,
            'activationcode' => Str::random(32)
        ]);

        // Trigger an email to sign up user

        return $user;
    }
}