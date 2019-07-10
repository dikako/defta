<?php

namespace App\Http\Controllers;
use Validator;
use App\ModelUser;
use App\ModelData;
use App\ModelProvinces;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class User extends Controller
{
    //
    public function index(){
        if(!Session::get('login')){
            return redirect('login')->with('alert','Kamu harus login dulu');
        }
        else{


            return view('data');
        }
    }

    public function login(){
        return view('login');
    }

    public function loginPost(Request $request){

        $email = $request->email;
        $password = $request->password;

        $data = ModelUser::where('email',$email)->first();
        if($data){ //apakah email tersebut ada atau tidak
            if(Hash::check($password,$data->password)){
                Session::put('name',$data->name);
                 Session::put('level',$data->level);
                Session::put('email',$data->email);
                Session::put('login',TRUE);
                return redirect('data');
            }
            else{
                return redirect('login')->with('alert','Password atau Email, Salah !');
            }
        }
        else{
            return redirect('login')->with('alert','Password atau Email, Salah!');
        }
    }

    public function logout(){
        Session::flush();
        return redirect('login')->with('alert','Kamu sudah logout');
    }

    public function register(Request $request){
         $provinces = ModelProvinces::pluck('name', 'id'); 

    return view('register',compact('provinces'));
        //return view('register');
    }

    public function registerPost(Request $request){

 // set the rules to check
    $rules = ['idwilayah'=>'required|unique:users'];
    $validator = Validator::make($request->all(), $rules);
    if ($validator->fails()) {
       // handler errors
        return redirect('data')->with('alert-success','admin wilayah tersebut sudah ada');
       $erros = $validator->errors();
    }
    
        $this->validate($request, [
            'name' => 'required|min:4',
            'email' => 'required|min:4|email|unique:users',
            'password' => 'required',
            'confirmation' => 'required|same:password',
        ]);

        $data =  new ModelUser();
        $data->name = $request->name;
        $data->idwilayah = $request->idwilayah;
        $data->level = 11;
        $data->email = $request->email;
        $data->password = bcrypt($request->password);
        $data->save();
        return redirect('data')->with('alert-success','Kamu berhasil Register');
    }
}