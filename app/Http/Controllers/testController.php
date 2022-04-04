<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\tests_classes;
use App\Models\test_questions;
use App\Models\tests_students;
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

        if($req->input('questions') != null){
            foreach ($req->input('questions') as $question) {
                $temp = new test_questions();
                $temp->test_id = $test->id;
                $temp->question_id = $question;
                $temp->save();
            }
        }
        if($req->input('users') != null){
            foreach ($req->input('users') as $user) {
                $temp = new tests_students();
                $temp->test_id = $test->id;
                $temp->user_id = $user;
                $temp->save();
            }
        }
        if($req->input('classes') != null){
            foreach ($req->input('classes') as $class) {
                $temp = new tests_classes();
                $temp->test_id = $test->id;
                $temp->classes_id = $class;
                $temp->save();
            }
        }
        return redirect('/teacher/tests');
    }
    public function delTest(int $id){
        $e = Test::find($id);
        $e->delete();
        return redirect('/teacher/tests');
    }
    public function editTest(int $id){
        $temp = Test::find($id);
        $questions = Question::all()->diff($temp->questions);
        $questionsin =  Question::all() -> diff($questions);

        return view('teacher.Tests.editTest',['temp' => $temp,'questions'=>$questions, 'questionsin'=>$questionsin]);
    }
    public function saveTest(Request $req, int $id)
    {
        $save = Test::find($id);
        $save->title = $req->input('title');
        $save->threshold = $req->input('threshold');
        if($req->input('questions') != null) {
            foreach ($req->input('questions') as $question) {
                $temp = new test_questions();
                $temp->test_id = $save->id;
                $temp->question_id = $question;
                $temp->save();
            }
        }
        $save->save();
        return redirect('teacher/tests');
    }
}
