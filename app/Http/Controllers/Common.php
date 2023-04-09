<?php

namespace App\Http\Controllers;
use App\DataTables\UsersDataTable;


use Illuminate\Http\Request;
use App\Models\Users;
class Common extends Controller
{
    public function index(Request $request){
        echo $request->name;
    }
    
    public function table(UsersDataTable $dataTable)
    {
        return $dataTable->render('users.index');
    }
    public function createUser(){
        return view("users.create");
    }
    public function storeUser(Request $request){
        $user = new Users();
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->save();
        return redirect()->back();
    }
}
