<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Complaint;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function dashboard()
    {
        $users = User::all();
        $complaints = Complaint::all();
        return view('dashboard')->with([
            'users' => $users,
            'complaints' => $complaints
        ]);

    }

    public function adminview()
    {
        $users = User::all();
        return view('user-view')->with([
            'users' => $users
        ]);
    }

    public function complaint()
    {
        $complaints = Complaint::where('user_id', auth()->user()->id)->get();
        return view('view')->with('complaints', $complaints);
    }

    public function delete($id)
    {
        $delete = Complaint::find($id)->delete();
        return redirect()->route('dashboard')->with('alert', 'Complaint deleted');
    }

    public function about()
    {
        return view('about');
    }

    public function complaintview()
    {
        $complaints = Complaint::all();
        
        return view('complaintview')->with([
            'complaints' => $complaints,
            
        ]);
    }
}
