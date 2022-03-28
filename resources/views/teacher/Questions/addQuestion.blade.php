@extends('addingPanel')

@section('addingContent')
    <div class="card-header">New question</div>

    <div class="card-body">
        <form method="POST" action="{{ route('addQuestion') }}">
            @csrf

            <div class="row mb-3">
                <label for="question" class="col-md-4 col-form-label text-md-end">Question</label>

                <div class="col-md-6">
                    <input id="question" type="text" class="form-control @error('question') is-invalid @enderror"
                           name="question" value="{{ old('question') }}" required autocomplete="question" autofocus>

                    @error('question')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="answer1" class="col-md-4 col-form-label text-md-end">Answer1</label>

                <div class="col-md-6">
                    <input id="answer1" type="text" class="form-control @error('answer1') is-invalid @enderror"
                           name="answer1" value="{{ old('answer1') }}" required autocomplete="answer1" autofocus>

                    @error('answer1')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="answer2" class="col-md-4 col-form-label text-md-end">Answer2</label>

                <div class="col-md-6">
                    <input id="answer2" type="text" class="form-control @error('answer2') is-invalid @enderror"
                           name="answer2" value="{{ old('answer2') }}" required autocomplete="answer2" autofocus>

                    @error('answer2')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="answer3" class="col-md-4 col-form-label text-md-end">Answer3</label>

                <div class="col-md-6">
                    <input id="answer3" type="text" class="form-control @error('answer3') is-invalid @enderror"
                           name="answer3" value="{{ old('answer3') }}" required autocomplete="answer3" autofocus>

                    @error('answer3')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="answer4" class="col-md-4 col-form-label text-md-end">Answer4</label>

                <div class="col-md-6">
                    <input id="answer4" type="text" class="form-control @error('answer4') is-invalid @enderror"
                           name="answer4" value="{{ old('answer4') }}" required autocomplete="answer4" autofocus>

                    @error('answer4')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="correct"
                       class="col-md-4 col-form-label text-md-end">Correct answer</label>

                <div class="col-md-6">
                    <select class="form-select" id="correct" name="correct">
                        <option selected value="1">Answer 1</option>
                        <option value="2">Answer 2</option>
                        <option value="3">Answer 3</option>
                        <option value="4">Answer 4</option>
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
