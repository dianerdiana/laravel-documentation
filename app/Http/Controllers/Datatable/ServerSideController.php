<?php

namespace App\Http\Controllers\Datatable;

use App\Http\Controllers\Controller;
use App\Models\User\User;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class ServerSideController extends Controller
{
  protected $user;

  public function __construct(User $user)
  {
    $this->user = $user;
  }

  // INDEX Function
  public function index(Request $request)
  {
    if ($request->ajax()) {
      $builder  = $this->user->with(['role', 'plan']);

      return DataTables::eloquent($builder)->toJson();
    }

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
