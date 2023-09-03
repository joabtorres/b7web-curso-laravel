<?php

namespace App\Http\Controllers;

use App\Models\Address;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    public function index(Request $request)
    {
        return (new Address)->all();
    }

    public function findOne(Request $request)
    {
        $address = (new Address)->find($request->id);
        $address['user'] = $address->user;
        return $address;
    }

    public function create(Request $request)
    {
        $address = new Address();
        $address->address = $request->address;
        $address->save();

        return $address;
    }

    public function create_v2(Request $request)
    {
        $data = $request->only(['address']);
        $address = Address::create($data);
        return $address;
    }
}
