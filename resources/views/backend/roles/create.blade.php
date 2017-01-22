@extends('layout')
@include('includes.header')
@section('title', 'Create A New Role')

@section('content')


            <form class="" method="post">

                @foreach ($errors->all() as $error)
                    <p class="flash-error">{{ $error }}</p>
                @endforeach

                @if (session('status'))
                    <div class="flash-success">
                        {{ session('status') }}
                    </div>
                @endif

                <input type="hidden" name="_token" value="{!! csrf_token() !!}">

                <fieldset>
                    <legend>Create a new role</legend>

                        <label for="name" class="col-lg-2 control-label">Name</label>

                            <input type="text" class="form-control" id="name" name="name">



                            <button type="reset" class="btn btn-default">Cancel</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
              
                </fieldset>
            </form>
@endsection
