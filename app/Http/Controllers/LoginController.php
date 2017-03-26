<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;

class LoginController extends Controller
{
    public function login() {
        
        return view('LoginPractice/login_create');
    }
    public function chkUser(Request $request) {
        $post_data = $request->all();
        extract($post_data);        
        $results = DB::table('users')
                   ->where('email', '=',"$email")
                   ->where('password', '=',md5($password))->first();
//        print_r(DB::getQueryLog()) ;
//        echo $results->email;
//        echo $results->password;
        if(!empty($results)) {
           return redirect('home');
        } else {
           return redirect('logins');
            
        }
//     if(!empty($results->email)) {
//         if(!empty($results->password)) {
//         
//             echo 'You are real member. You are Welcome';
//         }
//         
//     } else {
//         echo 'Try Again Later';
//     }
    }
}
