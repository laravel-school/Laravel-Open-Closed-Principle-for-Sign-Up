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

        $authRepository = new JoinRepository(new JoinByEmail());

        $authRepository->store($request);

        return redirect()->route('join')->with('success', 'You have joined successfully.');
    }
}