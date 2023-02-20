<?php

namespace App\Http\Controllers\Datatable;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServerSideController extends Controller
{
    // INDEX Function
    public function index()
    {
        return view('pages.datatable.advanced');
    }

    // CREATE Function
    public function create()
    {
        //
    }

    // STORE Function
    public function store(Request $request)
    {
        //
    }

    // SHOW Function
    public function show($id)
    {
        //
    }

    // EDIT Function
    public function edit($id)
    {
        //
    }

    // UPDATE Function
    public function update(Request $request, $id)
    {
        //
    }

    // DESTROY Function
    public function destroy($id)
    {
        //
    }
}
