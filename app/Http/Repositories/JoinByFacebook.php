<?php
namespace App\Http\Repositories;

use App\Http\Interfaces\JoinInterface;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class JoinByFacebook implements JoinInterface
{
    public function store(Request $request)
    {
        // Collect data from user's facebook

        // Store into table

        // Trigger an email to sign up user

        return $user;
    }
}