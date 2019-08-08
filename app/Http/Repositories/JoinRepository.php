<?php

namespace App\Http\Repositories;

use App\Http\Interfaces\JoinInterface;
use Illuminate\Http\Request;

class JoinRepository
{
    protected $joinInterface;

    public function __construct(JoinInterface $joinInterface)
    {
        $this->joinInterface = $joinInterface;
    }

    public function store(Request $request)
    {
        $this->joinInterface->store($request);
    }
}