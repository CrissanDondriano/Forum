<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login() {
        return view("auth.login");
    }

    public function registration() {
        return view("auth.registration");
    }

    public function registerUser(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|max:12'
        ]);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $respond = $user->save();
        
        if($respond) {
            return back()->with('success','You have registered successfully');
        } else {
            return back()->with('fail','Something went wrong');
        }

    }

    public function loginUser(Request $request) {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6|max:12'
        ]);

        $user = User::where('email', '=', $request->email)->first();

        if($user) { 
            if (Hash::check($request->password, $user->password)) {
                $request->session()->put('loginId', $user->id);
                return redirect('posts');
            } else {
                return back()->with('fail', 'Incorrect password');
            }
        } else {
            return back()->with('fail','No account found for this email');
        }
    }

    public function index()
    {
        $data = array();
        if(Session::has('loginId')){
            $data = User::where('id', '=' , Session::get('loginId'))->first();
        }
        return view('posts.index', compact('data'), ['posts' => Post::all()]);
    }

    public function logout(){
        if(Session::has('loginId')) {
            Session::pull('loginId');
            return redirect('login');
        }
    }

}
