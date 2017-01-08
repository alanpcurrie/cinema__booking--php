@extends('layout')
@include('includes.header')
@section('title', 'Edit A Post')

@section('content')

  <form class="form-horizontal" method="post">

    @foreach ($errors->all() as $error)
        <p class="alert alert-danger">{{ $error }}</p>
    @endforeach

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <input type="hidden" name="_token" value="{!! csrf_token() !!}">

    <fieldset>
      <legend>Edit a post</legend>

        <label for="title">Movie Title</label>
          <input type="text" class="form-control" id="title" placeholder="Title" name="title" value="{{ $post->title }}">

          <label for="blurb">blurb</label>
            <textarea rows="3" id="blurb" name="blurb">{!! $post->blurb !!}</textarea>


        <label for="Description">description</label>
            <textarea rows="3" id="description" name="description">{!! $post->description !!}</textarea>

            <label for="Age Rating">Age Rating</label>
              <input type="text" id="rating" name="rating" {!! $post->rating !!}>

          <label for="select">Categories</label>
              <select  id="categories" name="categories[]" multiple>
                  @foreach($categories as $category)
                      <option value="{!! $category->id !!}"  @if(in_array($category->id, $selectedCategories))
                              selected="selected" @endif >{!! $category->name !!}
                      </option>
                  @endforeach
              </select>

              <button type="submit" value="submit" class="a-button__large--full-width " >Save</button>
              <button type="reset" value="reset" class="a-button__large--full-width " >Cancel</button>


              </fieldset>
          </form>

@endsection
