@extends('app')
@section('content')
    <div class="container-xl">
        <div class="card text-center">
            <div class="card-header">
                <h1>User panel</h1>
            </div>
            <div class="card-body">
                @yield('userContent')
            </div>
            <div class="card-footer text-muted">
                v 1.40
            </div>
        </div>
    </div>
@endsection
