<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;  
use Illuminate\Support\Facades\Auth;
use Validator;
use Hash;
use Session;
use App\Models\User;

class WeddingController extends Controller
{
    public function index(){
        return view('UserWedding.index');
    }

    public function about(){
        return view('UserWedding.about');
    }

    public function service(){
        return view('UserWedding.service');
    }

    public function home(){
        return view('UserWedding.alindex');
    }

    public function aboutal(){
        return view('UserWedding.about al');
    }

    public function serviceal(){
        return view('UserWedding.service al');
    }

    public function order(){
        $ordrs = Post::get();
        return view('UserWedding.order', compact('ordrs'));
    }

    public function profile(){
        return view('UserWedding.my profile');
    }

    public function planning(){
        return view('UserWedding.planning');
    }

    public function post(){
        return view('UserWedding.post');
    }

    public function tablepage(){
        $ordrs = Post::all();
        return view('admin.table', compact('ordrs'));
    }

    public function edit(Post $posts){
        $ordrs = Post::all();
        return view('admin.edit', ['posts' => $ordrs]);
    }

    public function view(Post $posts){
        return view('admin.view', ['posts' => $ordrs]);
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'gender' => 'required',
            'birth' => 'required',
            'age' => 'required',
            'date' => 'required',
            'service' => 'required',
            'budget' => 'required',
            'guest' => 'required',
            'sprequest' => 'required',
        ]);

        $ordr = new Post();
        $ordr->name = $request->name;
        $ordr->email = $request->email;
        $ordr->phone = $request->phone;
        $ordr->gender = $request->gender;
        $ordr->birth = $request->birth;
        $ordr->age = $request->age;
        $ordr->date = $request->date;
        $ordr->service = $request->service;
        $ordr->budget = $request->budget;
        $ordr->guest = $request->guest;
        $ordr->sprequest = $request->sprequest;
        $save = $ordr->save();

        return redirect()->route('UserWedding.home');
    }

    public function showFormLogin()
    {
        if (Auth::check()) { // true sekalian session field di users nanti bisa dipanggil via Auth
            //Login Success
            return redirect()->route('home');
        }
        return view('UserWedding.login');
    }
  
    public function login(Request $request)
    {
        $rules = [
            'email'                 => 'required|email',
            'password'              => 'required|string'
        ];
  
        $messages = [
            'email.required'        => 'Email wajib diisi',
            'email.email'           => 'Email tidak valid',
            'password.required'     => 'Password wajib diisi',
            'password.string'       => 'Password harus berupa string'
        ];
  
        $validator = Validator::make($request->all(), $rules, $messages);
  
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput($request->all);
        }
  
        $data = [
            'email'     => $request->input('email'),
            'password'  => $request->input('password'),
        ];
  
        Auth::attempt($data);
  
        if (Auth::check()) { // true sekalian session field di users nanti bisa dipanggil via Auth
            //Login Success
            return redirect()->route('home');
  
        } else { // false
  
            //Login Fail
            Session::flash('error', 'Email atau password salah');
            return redirect()->route('login');
        }
  
    }
  
    public function showFormRegister()
    {
        return view('UserWedding.signup');
    }
  
    public function signup(Request $request)
    {
        $rules = [
            'name'                  => 'required|min:3|max:35',
            'email'                 => 'required|email|unique:users,email',
            'password'              => 'required|confirmed'
        ];
  
        $messages = [
            'name.required'         => 'Nama Lengkap wajib diisi',
            'name.min'              => 'Nama lengkap minimal 3 karakter',
            'name.max'              => 'Nama lengkap maksimal 35 karakter',
            'email.required'        => 'Email wajib diisi',
            'email.email'           => 'Email tidak valid',
            'email.unique'          => 'Email sudah terdaftar',
            'password.required'     => 'Password wajib diisi',
            'password.confirmed'    => 'Password tidak sama dengan konfirmasi password'
        ];
  
        $validator = Validator::make($request->all(), $rules, $messages);
  
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput($request->all);
        }
  
        $user = new User;
        $user->name = ucwords(strtolower($request->name));
        $user->email = strtolower($request->email);
        $user->password = Hash::make($request->password);
        $user->email_verified_at = \Carbon\Carbon::now();
        $simpan = $user->save();
  
        if($simpan){
            Session::flash('success', 'Register berhasil! Silahkan login untuk mengakses data');
            return redirect()->route('login');
        } else {
            Session::flash('errors', ['' => 'Register gagal! Silahkan ulangi beberapa saat lagi']);
            return redirect()->route('signup');
        }
    }
  
    public function logout()
    {
        Auth::logout(); // menghapus session yang aktif
        return redirect()->route('login');
    }
  
  
}
