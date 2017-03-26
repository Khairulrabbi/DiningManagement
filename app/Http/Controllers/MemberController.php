<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Member;
use App\User;

class MemberController extends Controller
{
    public function index() {
//        $results[] = Member::getMemberList()->get();
//        print_r($results);
        $users = Member::all();
        $users = User::all();
//        print_r($users);
//        exit();
//        $users = [
//            '0'=>[
//                'first_name'=>'Khairul',
//                'location'=>'Dhaka'
//            ],
//            '1'=>[
//                'first_name'=>'Subro',
//                'location'=>'Dhaka'
//            ]
//        ];
        
        return view('admin.members.index', compact('users'));
    }
    
    //Member Creation
    public function create() {
        
        return view('admin.members.create_member');
    }
    //Storing member
    public function store(Request $request) {
        Member::create($request->all());
    }
}
