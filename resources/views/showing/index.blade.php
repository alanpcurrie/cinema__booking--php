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

                <h4>{!! $post->title !!}</h4>

                   <p>{!! mb_substr($post->description,0,500) !!}</p> 
                    <h4 class="b-red-highlight--round">{!! $post->rating !!}<h4/>
                      <p>{!! $post->category!!}</p>
            @endforeach
        @endif


@endsection
