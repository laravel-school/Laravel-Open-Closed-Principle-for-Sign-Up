<?php
namespace App\Http\Interfaces;

use Illuminate\Http\Request;

interface JoinInterface
{
    public function store(Request $request);
}