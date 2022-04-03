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
                <ul class="list-group text-center">
                    @foreach($users as $user)
                        @if($user['Role'] != 1)
                            <a href="#" class="list-group-item list-group-item-action">
                                {{$user['name']}} {{$user['surrname']}}
                            </a>
                        @endif
                    @endforeach
                </ul>
            </div>

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
