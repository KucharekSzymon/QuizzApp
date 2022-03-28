@extends('userPanel')
@section('userContent')
    <h5 class="card-title">List of actions</h5>
    <hr>
    <a href="/teacher/tests">
        <button type="button" class="btn btn-outline-dark">Tests</button>
    </a>
    <a href="/teacher/questions">
        <button type="button" class="btn btn-outline-dark">Questions</button>
    </a>
    <a href="/teacher/classes">
        <button type="button" class="btn btn-outline-dark">Classes</button>
    </a>
    <a href="/teacher/users">
        <button type="button" class="btn btn-outline-dark">Users</button>
    </a>
@endsection
