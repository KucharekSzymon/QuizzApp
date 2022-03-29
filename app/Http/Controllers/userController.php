<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use App\Models\User;
use App\Models\students_classes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class userController extends Controller
{
    public function indexPage(){
        return redirect('login');
    }

    public function userList(){
        $users = User::all();
        return view('teacher.Users.userList', ['users' => $users]);
    }
    public function addUser(Request $request){
        $student = new User;
        $student->name = $request->input('name');
        $student->surrname = $request->input('surrname');
        $student->email = $request->input('email');
        $student->password = bcrypt($request->input('password'));
        $student->Role = $request->input('Role');
        $student->save();
        return redirect('/teacher/users');
    }
    public function delUser(int $id){
        if($id != 1){
            $e = User::find($id);
            $e->delete();
        }
        return redirect('/teacher/users');
    }
    public function editUser(int $id){
        $temp = User::find($id);
        $classes = Classes::all();
        return view('teacher.Users.editUser',['temp' => $temp, 'classes'=>$classes]);
    }
    public function saveUser(Request $req, int $id){
        $save = User::find($id);
        $save->name = $req->input('name');
        $save->surrname = $req->input('surrname');
        $save->email = $req->input('email');
        $save->password = $req->input('password');
        $save->Role = $req->input('Role');
        if (!$req->has('leave-password')) {
            $save->password = bcrypt($req->input('password'));
        }
        else{
            $save->password = $req->input('password');
        }
        foreach ($req->input('classes') as $class) {
            $mClass = new students_classes();
            $mClass->user_id = $save->id;
            $mClass->classes_id = $class;
            $mClass->save();
        }
        $save->save();
        return redirect('teacher/users');
    }
}
