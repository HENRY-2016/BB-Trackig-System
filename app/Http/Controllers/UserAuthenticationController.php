<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UsersModel; 

class UserAuthenticationController extends Controller
{
    //
    function userLogIn (Request $request)
    {
        $UserType = $request->type;
        $UserName = $request->name;
        $Password = $request->password;

        $data = UsersModel::where('UserName',$UserName)
        ->where('Password',$Password)
        ->where('Contact',$UserType)
        ->get(['UserName','Contact','Password']);

        $length = count ($data);
        if ($length == 0) 
        {//echo "No User Found";
            return redirect('/')
            ->with('error','Sorry No User Records Found');
            }

        elseif ($length !== 0)
        {
            $DbUserName =  $data[0]["UserName"];
            $DbPassword =  $data[0]["Password"];
            $DbUserType =  $data[0]["Contact"];


            if (($DbUserName === $UserName) && ($DbPassword === $Password))
            {
                $request->session()->put('user',$DbUserName);
                $request->session()->put('userType',$UserType);
                return redirect('BuildingsCrud');
            }
        }
        
    }
}