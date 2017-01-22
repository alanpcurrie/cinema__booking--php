@extends('layout')
@include('includes.header')
@section('name', 'Edit a user')

@section('content')


            <form class="" method="post">

                @foreach ($errors->all() as $error)
                    <p class="alert alert-danger">{{ $error }}</p>
                @endforeach

                @if (session('status'))
                    <div class="flash-success">
                        {{ session('status') }}
                    </div>
                @endif

                {!! csrf_field() !!}

                <fieldset>
                    <legend>Edit user</legend>

                        <label for="name" class="col-lg-2 control-label">Name</label>


                            <input type="text" class="form-control" id="name" placeholder="Name" name="name"
                                   value="{{ $user->name }}">



                        <label for="email" class="col-lg-2 control-label">Email</label>


                            <input type="email" class="form-control" id="email" placeholder="Email" name="email"
                                   value="{{ $user->email }}">



                        <label for="select" class="col-lg-2 control-label">Role</label>


                            <select class="form-control" id="role" name="role[]" multiple>
                                @foreach($roles as $role)
                                    <option value="{!! $role->name !!}"  @if(in_array($role->name, $selectedRoles))
                                    selected="selected" @endif >{!! $role->name !!}
                                    </option>
                                @endforeach
                            </select>



                        <label for="password" class="col-lg-2 control-label">Password</label>


                            <input type="password" class="form-control" name="password">



                        <label for="password" class="col-lg-2 control-label">Confirm password</label>


                            <input type="password" class="form-control" name="password_confirmation">



                            <button type="reset" class="btn btn-default">Cancel</button>
                            <button type="submit" class="btn btn-primary">Submit</button>

                </fieldset>
            </form>

@endsection
