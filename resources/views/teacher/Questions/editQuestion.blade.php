@extends('addingPanel')

@section('addingContent')
    <div class="card-header">Question edit</div>

    <div class="card-body">
        <form method="POST" action="{{ route('saveQuestion', $temp->id) }}">
            @csrf

            <div class="row mb-3">
                <label for="question" class="col-md-4 col-form-label text-md-end">Question</label>

                <div class="col-md-6">
                    <input id="question" type="text" class="form-control @error('question') is-invalid @enderror"
                           name="question" value="{{ $temp->question }}" required autocomplete="question" autofocus>

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
                           name="answer1" value="{{ $temp->answ_1 }}" required autocomplete="answer1" autofocus>

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
                           name="answer2" value="{{ $temp->answ_2 }}" required autocomplete="answer2" autofocus>

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
                           name="answer3" value="{{ $temp->answ_3 }}" required autocomplete="answer3" autofocus>

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
                           name="answer4" value="{{ $temp->answ_4 }}" required autocomplete="answer4" autofocus>

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
                        <option @if($temp->correct == 1) selected @endif value="1">Answer 1</option>
                        <option @if($temp->correct == 2) selected @endif  value="2">Answer 2</option>
                        <option @if($temp->correct == 3) selected @endif  value="3">Answer 3</option>
                        <option @if($temp->correct == 4) selected @endif  value="4">Answer 4</option>
                    </select>
                </div>
            </div>

            <div class="row mb-3">
                <label for="tests[]"
                       class="col-md-4 col-form-label text-md-end">Tests</label>

                <div class="col-md-6">
                    <select multiple class="form-select" name="tests[]">
                        @foreach($tests as $test)
                            <option value="{{$test['id']}}">{{$test['title']}}</option>
                        @endforeach
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
