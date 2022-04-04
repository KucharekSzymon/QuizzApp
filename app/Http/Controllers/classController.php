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
/*        foreach($classes as $x){
            $users = $x->users;
        }*/
        //return $users;
        return view('teacher/Classes/classesList',['classes' => $classes]);
    }
    public function addClass(Request $req){
        $class = new Classes();
        $class->name = $req->input('name');
        $class->save();
        if($req->input('users') != null){
            foreach ($req->input('users') as $user) {
                $mUser = new students_classes();
                $mUser->classes_id = $class->id;
                $mUser->user_id = $user;
                $mUser->save();
            }
        }
        return redirect('/teacher/classes');
    }
/*    public function remfromClass(int $class_id, int $user_id){

        foreach (students_classes::all() as $torm){
            if($torm['user_id'] == $user_id)
                 $rm.append($torm);
        }

    }*/
    public function delClass(int $id){
        $e = Classes::find($id);
        //students_classes::find($id->classes_id)->delete();
        $e->delete();
        return redirect('/teacher/classes');
    }
    public function editClass(int $id){
        $temp = Classes::find($id);
        $users = User::all()->diff($temp->users)->where('Role' ,'=','0');
        $usersin =  User::all() -> diff(User::all()->diff($temp->users));
        return view('teacher/Classes/editClass',['temp' => $temp, 'users' => $users, 'usersin'=>$usersin]);
    }
    public function saveClass(Request $req, int $id)
    {
        $save = Classes::find($id);
        $save->name = $req->input('name');

        if($req->input('users') != null) {
            foreach ($req->input('users') as $user) {
                $temp = new students_classes();
                $temp->classes_id = $save->id;
                $temp->user_id = $user;
                $temp->save();
            }
        }

        $save->save();
        return redirect('teacher/classes');
    }
}
