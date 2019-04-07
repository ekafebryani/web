@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-item-center">
                        <h1>{{ $question->title }}</h1>
                        <div class="ml-auto">
                            <a href="{{ route('questions.index') }}" class="btn btn-outline-secondary">Back to all Question</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <h4>{{ $question->body }}</h4>
                      <div class="float-right">
                        <span class="text-muted">Answered {{ $question->created_date }}</span>
            <div class="media mt-2">
                            <a href="{{ $question->user->url }}" class="pr-2">
                            <img src="{{ $question->user->avatar }}">
                            </a>
                            <div class="media-body mt-1">
                                <a href="{{ $question->user->url }}">{{ $question->user->name }}</a>
                                </div>
                            </div>
                        </div>
                      </div>
                    </div>
                    <br>
        <div class="col-md-13">
          <div class="card">
            <div class="card-body">
              <div class="card-title">
                <h3>{{ $question->answers_count . " " . str_plural('Answer', $question->answers_count) }}</h3>
                  </div>
                  <hr>
                  @foreach ($question->answers as $answer)
                  <div class="media">
                      <div class="media-body">
                          {!! $answer->body_html !!}
                          <div class="float-right">
                              <span class="text-muted">Answered {{ $question->created_date }}</span>
                              <div class="media mt-2">
                                  <a href="{{ $question->user->url }}" class="pr-2">
                                  <img src="{{ $question->user->avatar }}">
                                  </a>
                                  <div class="media-body mt-1">
                                      <a href="{{ $question->user->url }}">{{ $answer->user->name }}</a>

                          </div>

                        </div>

                      </div>
                        </div>

                      </div>
                      <hr>
                      @endforeach
                    </div>
                  </div>
                </div>
              </div>

                </div>
            </div>
        </div>
    </div>

@endsection
