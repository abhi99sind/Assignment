<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\User;
class UserController extends Controller
{
    public function index(){
        if(!Session::get('login')){
            return redirect('login')->with('alert','Hello');
        }
        else{
            return view('user');
        }
    }

    public function login(){
        return view('login');
    }

    public function loginPost(Request $request){

        $email = $request->email;
        $password = $request->password;

        $data = User::where('email',$email)->first();
        if($data){ //apakah email tersebut ada atau tidak
            if(Hash::check($password,$data->password)){
                Session::put('name',$data->name);
                Session::put('email',$data->email);
                Session::put('login',TRUE);
                return redirect('home_user');
            }
            else{
                return redirect('login')->with('alert','Password or Email incorrect');
            }
        }
        else{
            return redirect('login')->with('alert','Email does not exist');
        }
    }

    public function logout(){
        Session::flush();
        return redirect('login')->with('alert','logged out');
    }

    public function register(Request $request){
        return view('register');
    }

    public function registerPost(Request $request){
        $this->validate($request, [
            'name' => 'required|min:4',
            'email' => 'required|min:4|email|unique:users',
            'password' => 'required',
            'confirmation' => 'required|same:password',
            'mobile' => 'required|unique:users|max:11',
        ]);

        $data =  new User();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->mobile = $request->mobile;
        $data->password = bcrypt($request->password);
        $data->save();
        return redirect('login')->with('alert-success','Registeration Successful');
    }

}
