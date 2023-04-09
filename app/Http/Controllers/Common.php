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
        $user = new Users();
        $user->first_name = "abhishek test";
        $user->last_name = "biranje test";
        $user->save();
        echo "User created successfully";
    }
}
