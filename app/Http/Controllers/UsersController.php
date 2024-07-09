<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\Users;

class UsersController extends Controller
{
    public function index() {
        $data = Users::all();
        return view('admin.datausers.user', ['active' => 'user'], compact('data'));
    }

    public function add() {
        return view('admin.datausers.add');
    }

    public function insertusers(Request $request) {
        $userData = $request->all();
        $userData['password'] = Hash::make($request->password);
        Users::create($userData);
        return redirect()->route('user');
    }

    public function change($id){
        $data = Users::find($id);

        return view('admin.datausers.change', compact('data'));
    }

    public function update(Request $request, $id){
        $data = Users::find($id);
        $data->update($request->all());
        return redirect()->route('user');
    }

    public function delete($id){
        $data = Users::whereId($id);
        $data->delete();
        return redirect()->route('user');
    }
}
