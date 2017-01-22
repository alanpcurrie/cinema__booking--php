@extends('layout')
@include('includes.header')
@section('title', 'Contact')

@section('content')
  <form method="post">

    @foreach ($errors->all() as $error)
    <div class="flash-error">{{ $error }}</div>
    @endforeach

        @if (session('status'))
            <div class="flash-success">
            {{ session('status') }}
            </div>
        @endif

          <input type="hidden" name="_token" value="{!! csrf_token() !!}">
        <fieldset>
            <legend>BOOK A MOVIE</legend>
                <label for="title" class="">Title</label>
	                <select name="title" id="title" name="title">
                      @foreach($posts as $post)
  	            				<option value="{{ $post->title}}">{{ $post->title }}</option>
                      @endforeach
	                 </select>

            <button type="submit" class="btn btn-primary">Submit</button>
        </fieldset>
  </form>
@endsection
