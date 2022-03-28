@extends('addingPanel')

@section('addingContent')
    <div class="card-header">User edit</div>

    <div class="card-body">
        <form method="POST" action="{{ route('saveUser', $temp->id) }}">
            @csrf

            <div class="row mb-3">
                <label for="name" class="col-md-4 col-form-label text-md-end" val>Name</label>

                <div class="col-md-6">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $temp->name }}" required autocomplete="name" autofocus>

                    @error('name')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <label for="surrname" class="col-md-4 col-form-label text-md-end">Surrname</label>

                <div class="col-md-6">
                    <input id="surrname" type="text" class="form-control @error('surrname') is-invalid @enderror" name="surrname" value="{{ $temp->surrname }}" required autocomplete="surrname" autofocus>

                    @error('surrname')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="email" class="col-md-4 col-form-label text-md-end">E-mail address</label>

                <div class="col-md-6">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $temp->email }}" required autocomplete="email">

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="password" class="col-md-4 col-form-label text-md-end">Password</label>

                <div class="col-md-6">
                    <input value="{{ $temp->password }}" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="password-confirm" class="col-md-4 col-form-label text-md-end">Confirm password</label>

                <div class="col-md-6">
                    <input value="{{ $temp->password }}" id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                </div>
            </div>
            <div class="row mb-3">
                <label for="leave-password" class="col-md-4 col-form-label text-md-end">Don't change</label>

                <div class="col-md-6">
                        <input id="leave-password" type='checkbox' checked name="leave-password" value="yes" class="form-check">
                </div>
            </div>

            <div class="row mb-3">
                <label for="Role"
                       class="col-md-4 col-form-label text-md-end">Role</label>

                <div class="col-md-6">
                    <select class="form-select" id="Role" name="Role">
                        <option @if($temp->Role == 0)selected @endif value="0">Student</option>
                        <option  @if($temp->Role == 1)selected @endif value="1">Teacher</option>
                    </select>
                </div>
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
