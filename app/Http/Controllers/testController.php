<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;

class testController extends Controller
{
    public function indexPage(){
        return redirect('login');
    }

    public function testList(){
        $tests = Test::all();
        return view('teacher.Tests.testList', ['tests' => $tests]);
    }
    public function addTest(Request $req){
        $test = new Test();
        $test->title = $req->input('title');
        $test->threshold = $req->input('threshold');
        $test->save();
        return redirect('/teacher/tests');
    }
    public function delTest(int $id){
        $e = Test::find($id);
        $e->delete();
        return redirect('/teacher/tests');
    }
    public function editTest(int $id){
        $temp = Test::find($id);
        return view('teacher.Tests.editTest',['temp' => $temp]);
    }
    public function saveTest(Request $req, int $id)
    {
        $save = Test::find($id);
        $save->title = $req->input('title');
        $save->threshold = $req->input('threshold');

        $save->save();
        return redirect('teacher/tests');
    }
}
