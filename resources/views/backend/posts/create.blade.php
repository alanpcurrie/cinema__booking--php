@extends('layout')
@include('includes.header')
@section('title', 'Create A New Post')

@section('content')


            <form class="admin-form" method="post">

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
                    <legend>Create a new movie post</legend>

                    <div>
                            <p>Movie entry</p>
                            <p>
                                    <label for="title">Movie Title</label>
                                    <input type="text" id="title" name="title" autofocus>
                            </p>
                            <p>
                                    <label for="blurb">Movie Blurb</label>
                                    <input type="text id"="blurb" name="blurb">
                            </p>
                            <p>
                                    <label for="Description">Movie Description</label>
                                    <input type="text" id="description" name="description">
                            </p>

                            <p>
                                    <label for="age-rating">Age Rating</label>
                                    <input type="text" id="rating" name="rating">
                            </p>
                            {{-- <p>
                                    <label for="Location">Location</label>
                                    <input type="text" id="location" name="location">
                            </p> --}}
                            <p>
                                    <label for="categories">Categories</label>
                                    <select id="category" name="categories[]" multiple>
                                     @foreach($categories as $category)
                                         <option value="{!! $category->id !!}">
                                             {!! $category->name !!}
                                         </option>
                                     @endforeach
                                    </select>
                            </p>
                            <p><div class="m-upload-area">
                                <div class="m-dropZone">Drag Image Files Here</div>
                                </div>
                            </p>
                        <p>
                            <button type="submit" value="submit" class="a-button__large--full-width " >Save
                            </button>
                            <button type="reset" value="reset" class="a-button__large--full-width " >Cancel
                            </button>
                        </p>

                </fieldset>
            </form>

@endsection
