@extends('layouts.app')
@section('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@stop
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <div class="d-flex align-items-center">
                            <h2>{{$question->title}}</h2>
                            <div class="ml-auto">
                                <a href="{{route('questions.index')}}" class="btn btn-outline-warning btn-lg">Back to all
                                    Questions</a>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="media">

                        <div class="d-flex flex-column vote-controls">
                            <a title="This question is usefull" class="vote-up" href="">
                                <i class="fa fa-caret-up fa-2x"></i>
                            </a>
                            <span class="votes-count">123</span>
                            <a title="This question is not usefull" class="vote-down off" href="">
                                <i class="fa fa-caret-down fa-2x"></i>
                            </a>
                            <a title="Click to mark as favorite question ( Click again ) to undo" class="favorite mt-2 favorited" href="">
                                <i class="fa fa-star fa-2x"></i>
                                <span class="favorites-count">123</span>
                            </a>
                        </div>

                        <div class="media-body">
                                {!! $question->body_html !!}
                            <div class="float-right">
                            <span class="text-muted">Asked: {{$question->created_date}}</span>
                            <div class="media mt-3">
                            <a href="{{$question->user->url}}" class="pr-3">
                            <img src="{{$question->user->avatar}}" alt="">
                            </a>
                            <div class="media-body">
                            <a href="{{$question->user->url}}">{{$question->user->name}}</a>
                            </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <h2>{{$question->answers_count .' '. str_plural('answer', $question->answers_count)}}</h2>
                    </div>
                    <hr>
                    @foreach($question->answers as $answer )
                    <div class="media">

                        <div class="d-flex flex-column vote-controls">
                            <a title="This answer is usefull" class="vote-up" href="">
                                <i class="fa fa-caret-up fa-2x"></i>
                            </a>
                            <span class="votes-count">123</span>
                            <a title="This answer is not usefull" class="vote-down off" href="">
                                <i class="fa fa-caret-down fa-2x"></i>
                            </a>
                            <a title="Mark this answer as best answer" class="vote-accepted mt-2 " href="">
                                <i class="fa fa-check fa-2x"></i>
                                <span class="favorites-count">123</span>
                            </a>
                        </div>

                        <div class="media-body">
                            {!! $answer->body_html !!}
                            <div class="float-right">
                                <span class="text-muted">Answered: {{$answer->created_date}}</span>
                                <div class="media mt-2">
                                    <a href="{{$answer->user->url}}" class="pr-2">
                                        <img src="{{$answer->user->avatar}}" alt="">
                                    </a>
                                    <div class="media-body mt-1">
                                        <a href="{{$answer->user->url}}">{{$answer->user->name}}</a>
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
@endsection
