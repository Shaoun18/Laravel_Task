<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index(){
        return view('user.add');
    }
    public function create(Request $request){
        Customer::newuser($request);
        return redirect('/add-user')->with('message','User Info Create Successfully.');
    }
    public function manage(){
        return view('user.manage',['users'=>Customer::all()]);
    }
    public function edit($id){
        return view('user.edit', ['user' => Customer::find($id)]);
    }
    public function update(Request $request, $id){
        Customer::updateuser($request,$id);
        return redirect('manage-user')->with('message','User Info Updated Successfully.');
    }
    public function delete($id){
        Customer::deleteuser($id);
        return redirect('manage-user')->with('message','User Deleted Successfully.');
    }
}
