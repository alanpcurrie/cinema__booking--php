@extends('layout')
@include('includes.header')

@section('title', 'Showing')
@section('content')


    <div class="container col-md-8 col-md-offset-2">

        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        @if ($posts->isEmpty())
            <p> There are no showings</p>
        @else
            @foreach ($posts as $post)
                <div class="panel panel-default">
                    <div class="panel-heading">{!! $post->title !!}</div>
                    <div class="panel-body">
                        {!! mb_substr($post->description,0,500) !!}
                        {!! $post->rating !!}

                    </div>
                </div>
            @endforeach
        @endif
    </div>

@endsection
