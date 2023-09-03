<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function index(Request $request)
    {
        return Invoice::all();
    }
    public function create(Request $request)
    {
        $invoice = new Invoice();
        $invoice->description = $request->description;
        $invoice->value = $request->value;
        $invoice->user_id = $request->user_id;
        $invoice->address_id = $request->address_id;
        $invoice->save();
        return $invoice;
    }
    public function create_v2(Request $request)
    {
        $data = $request->only(['description', 'value', 'user_id', 'address_id']);
        $invoice = Invoice::create($data);
        return $invoice;
    }

    public function findOne(Request $request)
    {
        $invoice =  Invoice::find($request->id);
        $invoice['user'] = $invoice->user;
        $invoice['address'] = $invoice->address;
        return $invoice;
    }

    public function findOneAddress(Request $request)
    {
        return Invoice::find($request->id)->address;
    }
    public function findOneUser(Request $request)
    {
        return Invoice::find($request->id)->user;
    }
}
