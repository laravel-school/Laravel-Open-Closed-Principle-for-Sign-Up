<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Repositories\JoinByEmail;
use App\Http\Repositories\JoinRepository;
use App\Http\Repositories\AuthRepository;
use Illuminate\Http\Request;

class JoinController extends Controller
{
    public function store(Request $request)
    {
        // Put form validation

        $authRepository = new JoinRepository(new JoinByFacebook());
        	// use for facebook sign up

        // $authRepository = new JoinRepository(new JoinByEmail());
        	// use for join by email

        $authRepository->store($request);

        return redirect()->route('join')->with('success', 'You have joined successfully.');
    }
}