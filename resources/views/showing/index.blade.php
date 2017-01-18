@extends('layout')
@include('includes.header')

@section('title', 'Showing')
@section('content')




        @if (session('status'))
             <div class="flash-success"> <span>This is a success message <button class="flash--will-close" @click="$emit('close')"></button></span></div>
                {{ session('status') }}
        @endif

        @if ($posts->isEmpty())
            <p> There are no showings</p>
        @else
            @foreach ($posts as $post)
                <div class="panel panel-default">
                    <div class="panel-heading">{!! $post->title !!}</div>
                    <div class="panel-body">
                        {!! mb_substr($post->description,0,500) !!}
                        <h4 class="b-red-highlight--round">{!! $post->rating !!}<h4/>
                          <p>{!! $post->category!!}</p>

                    </div>
                </div>
            @endforeach
        @endif
    </div>

@endsection
