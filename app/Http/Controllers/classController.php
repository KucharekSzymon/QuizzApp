<?php

namespace App\Http\Controllers;

use App\Models\students_classes;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Classes;

class classController extends Controller
{
    public function indexPage(){
        return redirect('login');
    }

    public  function classesList(){
        $classes = Classes::all();
        foreach($classes as $x){
            $users = $x->users;
        }
        //return $users;
        return view('teacher/Classes/classesList',['classes' => $classes,'users'=>$users]);
    }
    public function addClass(Request $req){
        $class = new Classes();
        $class->name = $req->input('name');
        $class->save();

        foreach ($req->input('users') as $user) {
            $mUser = new students_classes();
            $mUser->classes_id = $class->id;
            $mUser->user_id = $user;
            $mUser->save();
        }
        return redirect('/teacher/classes');
    }
    public function delClass(int $id){
        $e = Classes::find($id);
        $e->delete();
        return redirect('/teacher/classes');
    }
    public function editClass(int $id){
        $temp = Classes::find($id);
        return view('teacher/Classes/editClass',['temp' => $temp]);
    }
    public function saveClass(Request $req, int $id)
    {
        $save = Classes::find($id);
        $save->name = $req->input('name');

        $save->save();
        return redirect('teacher/classes');
    }
}
