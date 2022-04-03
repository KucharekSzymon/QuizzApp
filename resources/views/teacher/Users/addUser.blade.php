@extends('addingPanel')

@section('addingContent')
    <div class="card-header">New user</div>

    <div class="card-body">
        <form method="POST" action="{{ route('addUser') }}">
            @csrf

            <div class="row mb-3">
                <label for="name" class="col-md-4 col-form-label text-md-end">Name</label>

                <div class="col-md-6">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                           name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                    @error('name')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <label for="surrname" class="col-md-4 col-form-label text-md-end">Surname</label>

                <div class="col-md-6">
                    <input id="surrname" type="text" class="form-control @error('surrname') is-invalid @enderror"
                           name="surrname" value="{{ old('surrname') }}" required autocomplete="surrname" autofocus>

                    @error('name')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="email" class="col-md-4 col-form-label text-md-end">E-mail adress</label>

                <div class="col-md-6">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                           value="{{ old('email') }}" required autocomplete="email">

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                <div class="col-md-6">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                           name="password" required autocomplete="new-password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="password-confirm"
                       class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                <div class="col-md-6">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                           required autocomplete="new-password">
                </div>
            </div>
            <div class="row mb-3">
                <label for="Role"
                       class="col-md-4 col-form-label text-md-end">Role</label>

                <div class="col-md-6">
                    <select class="form-select" id="Role" name="Role">
                        <option selected value="0">Student</option>
                        <option value="1">Teacher</option>
                    </select>
                </div>
            </div>

            <div class="row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        Add
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection
