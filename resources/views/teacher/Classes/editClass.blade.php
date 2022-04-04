@extends('addingPanel')

@section('addingContent')
    <div class="card-header">Class edit</div>

    <div class="card-body">
        <form method="POST" action="{{ route('saveClass', $temp->id) }}">
            @csrf

            <div class="row mb-3">
                <label for="name" class="col-md-4 col-form-label text-md-end">name</label>

                <div class="col-md-6">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                           name="name" value="{{ $temp->name }}" required autocomplete="name" autofocus>

                    @error('name')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
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
