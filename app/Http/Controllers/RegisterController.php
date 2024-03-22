<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use App\Models\User; // Perhatikan penulisan kelas User
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;


class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'Register',
            'active' => 'register'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255', // Perhatikan penggunaan tanda pipe tunggal
            'username' => 'required|min:3|max:255|unique:users', // Perhatikan penggunaan tanda pipe tunggal
            'email' => 'required|email:dns|unique:users', // Perhatikan penggunaan tanda pipe tunggal
            'password' => 'required|min:3|max:255' // Perhatikan penggunaan tanda pipe tunggal
        ]);
        $validatedData['password'] = Hash::make($validatedData['password']);
        User::create($validatedData); // Perhatikan penulisan variabel $validatedData dengan $this->
        // $request->session()->flash('status', 'Task was successful!');

        return redirect('/login')->with('success','Registration successfull! Please login');
        
    }
}
