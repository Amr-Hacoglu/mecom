<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //
    public function AdminDashboard(){

        return view('admin.index');

    }// End Method

    //here when we create admin_login.blade.php page

    public function AdminLogin(){
        return view('admin.admin_login');
    } // End Mehtod 


    public function AdminDestroy(Request $request){
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/admin/login'); //when we login with admin, then when we logout with admin it will return you to admin/login page
    } // End Mehtod 
}
