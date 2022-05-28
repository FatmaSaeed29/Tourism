<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\passenger;
use App\Models\ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
        return view('index');
    }

    public function ShowLogin(){
        return view('login');
    }

    public function ShowRegister(){
        return view('register');
    }

    public function login(Request $request){
        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ]);

        if (!
        Auth::guard('web')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->back()->withInput($request->only('email'))->withErrors(['password' => 'Password is incorrect']);;
        } 
        return redirect()->route('home'); 
    }

    public function logout(){
        auth()->guard()->logout();
        return redirect()->route('login');
    }

    public function register(Request $request){
     
        //validation
        $request->validate([
            'name'=>'required|max:50',
            'email'=>'required|email|unique:users,email',
            'password'=>'required|confirmed|min:8'
        ]);

         //store data in database
         $passenger=
         [
             'name' => $request->name,
             'email' => $request->email,
             'password' => bcrypt($request->password)
         ];
         User::create($passenger);
         return redirect('/');
         //$password = $request->password;
         $passwordEnc=Hash::make($passenger->password);
          DB::insert('insert into Passengers (Name , Email , Password) values(?,?,?)', [$passenger , $passenger ,  $passwordEnc]);

         //make user as logged in

         $userId = DB::getpdo()->lastinsertId();
         $result = DB::select('select * from Passengers where id = ?' [$userId]);
         $user = null;
         if($result){
             $user = $result[0];
         }

         if($user == null){
             return back()->with(['erorr'=> 'unexpected erorr happned during registration'])->withinput();
             }
             session([
                 'loggedIn'=> true,
                 'userId' =>$userId,
                 'user'=> $user

             ]);

         return dd($request->all());    
    }



    // public function book(Request $request){
     
    //     //validation
    //     $request->validate([
    //         'name'=>'required|max:50',
    //         'email'=>'required|email|unique:users,email',
    //         'password'=>'required|confirmed|min:8'
    //     ]);

    //      //store data in database
    //      $passenger=
    //      [
    //          'name' => $request->name,
    //          'email' => $request->email,
    //          'password' => bcrypt($request->password)
    //      ];
    //      User::create($passenger);
    //      return redirect('/');
    //      //$password = $request->password;
    //      $passwordEnc=Hash::make($passenger->password);
    //       DB::insert('insert into Passengers (Name , Email , Password) values(?,?,?)', [$passenger , $passenger ,  $passwordEnc]);

    //      //make user as logged in

    //      $userId = DB::getpdo()->lastinsertId();
    //      $result = DB::select('select * from Passengers where id = ?' [$userId]);
    //      $user = null;
    //      if($result){
    //          $user = $result[0];
    //      }

    //      if($user == null){
    //          return back()->with(['erorr'=> 'unexpected erorr happned during registration'])->withinput();
    //          }
    //          session([
    //              'loggedIn'=> true,
    //              'userId' =>$userId,
    //              'user'=> $user

    //          ]);

    //      return dd($request->all());    
    // }



}
