<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DatabaseController extends Controller
{
    function login(){
        return view('login');
    }

    function adminLogin(){
        return view('adminLogin');
    }

    function register(){
        return view('register');
    }

    function registerNewUser(Request $req){
        $req->validate([
            'name' => "required | alphaNum",
            'uname' => "required | alphaNum",
            'email' => "required | email",
            'pass' => "required | alphaNum"
        ]);

        $name = $req->input('name');
        $uname = $req->input('uname');
        $email = $req->input('email');
        $pass = $req->input('pass');
        DB::insert('insert into users(name,uname,email,pass) values (?,?,?,?)',[$name,$uname,$email,$pass]);
        return redirect('/userHomePage');
    }

    function checkLogin(Request $req){
        $req->validate([
            'uname' => "required | alphaNum",
            'pass' => "required | alphaNum"
        ]);

        $uname = $req->get('uname');
        $pass = $req->get('pass');
        
        $login = DB::table('users')->where(['uname'=>$uname, 'pass'=>$pass])->get();

        if(count($login) > 0){
            return redirect('/userHomePage');
        }
        else{
            return back();
        }
    }

    function adminLoginCheck(Request $req){
        $req->validate([
            'adminId' => "required | alphaNum",
            'pass' => "required | alphaNum"
        ]);

        $adminId = $req->get('adminId');
        $pass = $req->get('pass');
        
        $login = DB::table('admins')->where(['adminId'=>$adminId, 'password'=>$pass])->get();

        if(count($login) > 0){
            return redirect('/adminPanel');
        }
        else{
            return back();
        }
    }

    function userPost(Request $req){
        $userPost = DB::table('posts')->get();
        $pages = DB::table('posts')->groupBy('posid')->count();
        $user = DB::table('users')->count();
        $serial = 0;
        return view('userPost',['userPost'=>$userPost,'pages'=>$pages,'user'=>$user,'serial'=>$serial]);
    }

    function userHomePage(Request $req){
        $postTable = DB::table('posts')->get();
        return view('userHomePage',['postTable'=>$postTable]);
    }

    function adminPanel(Request $req){
        $usersTable = DB::table('users')->get();
        $pages = DB::table('posts')->groupBy('posid')->count();
        $user = DB::table('users')->count();
        $serial = 0;
        return view('adminPanel',['usersTable'=>$usersTable,'pages'=>$pages,'user'=>$user,'serial'=>$serial]);
    }

    function adminPost(Request $req){
        $postTable = DB::table('posts')->get();
        $pages = DB::table('posts')->groupBy('posid')->count();
        $user = DB::table('users')->count();
        $serial = 0;
        return view('adminPost',['postTable'=>$postTable,'pages'=>$pages,'user'=>$user,'serial'=>$serial]);
    }

    function users(Request $req){
        $userTable = DB::table('users')->get();
        $pages = DB::table('posts')->groupBy('posid')->count();
        $user = DB::table('users')->count();
        $serial = 0;
        return view('users',['userTable'=>$userTable,'pages'=>$pages,'user'=>$user,'serial'=>$serial]);
    }

    function userInsert(){
        return view('userInsert');
    }

    function userPostInsert(Request $req){
        $req->validate([
            'title' => "required | alphaNum",
            'image' => "required | image | mimes:jpeg,png,jpg,gif"
        ]);
        $title = $req->input('title');
        $image = $req->file('image');
        $description = $req->input('editor1');
        $auhtor = "Nayab";
        if ($files = $image) {
            $destinationPath = './img/';
            $profileImage = $files->getClientOriginalName(). '.'.$files->getClientOriginalExtension();
            $files->move($destinationPath, $profileImage);
         }
        
        DB::insert('insert into posts(title,image,description,author) values (?,?,?,?)',[$title,$image,$description,$auhtor]);
        return redirect('/userPost');
    }

    function adminInsert(){
        return view('adminInsert');
    }

    function adminPostInsert(Request $req){
        $req->validate([
            'title' => "required | alphaNum",
            'image' => "required | image | mimes:jpeg,png,jpg,gif"
        ]);
        $title = $req->input('title');
        $image = $req->file('image');
        $description = $req->input('editor1');
        $auhtor = "Nayab";
        if ($files = $image) {
            $destinationPath = './img/';
            $profileImage = $files->getClientOriginalName(). '.'.$files->getClientOriginalExtension();
            $files->move($destinationPath, $profileImage);
         }
        
        DB::insert('insert into posts(title,image,description,author) values (?,?,?,?)',[$title,$image,$description,$auhtor]);
        return redirect('/adminPost');
    }

    function delete($posid){
        DB::delete('delete from posts where posid = ?',[$posid]);
        return redirect('/adminPost');
    }

    function deleteUserPost($posid){
        DB::delete('delete from posts where posid = ?',[$posid]);
        return redirect('/userPost');
    }

    function deleteUser($uid){
        DB::delete('delete from users where uid = ?',[$uid]);
        return redirect('/users');
    }

    function logout(){
        // Auth::logout();
        return redirect('login');
    }
}
