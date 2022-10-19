<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    private  $customer;
    public function getAllUser(){
        $this->customer = Customer::all();
        return response()->json($this->customer);
    }
}

// http://localhost:8000/api/get-user Api link address
