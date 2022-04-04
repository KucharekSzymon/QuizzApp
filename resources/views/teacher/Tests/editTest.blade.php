@extends('addingPanel')

@section('addingContent')
    <div class="card-header">Test edit</div>

    <div class="card-body">
        <form method="POST" action="{{ route('saveTest', $temp->id) }}">
            @csrf

            <div class="row mb-3">
                <label for="title" class="col-md-4 col-form-label text-md-end">Title</label>

                <div class="col-md-6">
                    <input id="title" type="text" class="form-control @error('title') is-invalid @enderror"
                           name="title" value="{{ $temp->title }}" required autocomplete="title" autofocus>

                    @error('title')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="threshold" class="col-md-4 col-form-label text-md-end">Threshold</label>

                <div class="col-md-6">
                    <input id="threshold" type="text" class="form-control @error('threshold') is-invalid @enderror"
                           name="threshold" value="{{ $temp->threshold }}" required autocomplete="threshold" autofocus>

                    @error('threshold')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
            </div>
                <div class="row mb-3">
                    <label class="col-md-4 col-form-label text-md-end">Questions in test</label>
                    <ul class="list-group text-center">
                        @foreach($questionsin as $questionin)
                            <a href="#" class="list-group-item list-group-item-action">
                                {{$questionin['question']}}
                            </a>
                        @endforeach
                    </ul>
                </div>
            <div class="row mb-3">
                <label class="col-md-4 col-form-label text-md-end">Users in test</label>
                <ul class="list-group text-center">
                    @foreach($usersin as $userin)
                        <a href="#" class="list-group-item list-group-item-action">
                            {{$userin['name']}} {{$userin['surrname']}}
                        </a>
                    @endforeach
                </ul>
            </div>
            <div class="row mb-3">
                <label class="col-md-4 col-form-label text-md-end">Classes in test</label>
                <ul class="list-group text-center">
                    @foreach($classesin as $classin)
                        <a href="#" class="list-group-item list-group-item-action">
                            {{$classin['name']}}
                        </a>
                    @endforeach
                </ul>
            </div>
            @if(!$questions->isEmpty())
                <div class="row-md-3">
                    <label for="questions[]"
                           class="col-md-4 col-form-label text-md-end">Add question</label>
                    <select multiple class="form-select" name="questions[]">
                        @foreach($questions as $question)
                            <option value="{{$question['id']}}">{{$question['question']}}</option>
                        @endforeach
                    </select>
                </div>
            @endif
            @if(!$users->isEmpty())
            <div class="row-md-3">
                <label for="users[]"
                       class="col-md-4 col-form-label text-md-end">Add user</label>
                <select multiple class="form-select" name="users[]">
                    @foreach($users as $user)
                        <option value="{{$user['id']}}">{{$user['name']}} {{$user['surrname']}}</option>
                    @endforeach
                </select>
            </div>
            @endif
            @if(!$classes->isEmpty())
            <div class="row-md-3">
                <label for="classes[]"
                       class="col-md-4 col-form-label text-md-end">Add class</label>
                <select multiple class="form-select" name="classes[]">
                    @foreach($classes as $class)
                        <option value="{{$class['id']}}">{{$class['name']}}</option>
                    @endforeach
                </select>
            </div>
            @endif




            <div class="row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        Save
                    </button>
                </div>
            </div>
        </form>
    </div>
    </div>
@endsection
