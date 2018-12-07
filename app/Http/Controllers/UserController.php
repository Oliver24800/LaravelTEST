<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controllers;
use Illuminate\Support\Facades\URL;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class UserController extends Controller
{
    public function store(request $request)
                   {
                   //    print_r($request->input());
                       echo $name=$request->input('name');
                       echo $email=$request->input('email');
                       echo $password=$request->input('password');

                       echo DB::insert('insert into user(id,name,email,password) values(?,?,?,?)',[null,$name,$email,$password]);

                   }

                    public function logs(request $request)
                       {


                            $email=$request->input('email');
                            $password=$request->input('password');

                          $data= DB::select('select id from user where email=? and password =?' ,[$email,$password]);

                    if(count($data))
                        {
                        echo "Succesful login!";
                       }
                       else {
                        echo "Wrong Email/Password try again!";
                       }
                       }

}
?>