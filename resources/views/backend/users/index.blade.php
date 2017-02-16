@extends('layout')
@include('includes.header')
@section('title', 'All users')
@section('content')


                <h2> All users </h2>

								@if (session('status'))
		                <div class="flash-success">
		                    {{ session('status') }}
		                </div>
		            @endif

            @if ($users->isEmpty())
                <p> There is no user.</p>
            @else
                <table class="table">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
												<th>Role</th>
                        <th>Email</th>
                        <th>Joined at</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{!! $user->id !!}</td>
                            <td>
                                <a href="{!! action('Admin\UsersController@edit', $user->id) !!}">{!! $user->name !!} </a>
                            </td>
                            <td>{!! $user->role !!}</td>
														<td>{!! $user->email !!}</td>
                            <td>{!! $user->created_at !!}</td>
                            <td>{!! $user->created_at !!}</td>
                            <td>
															{{ Form::open(array('url' => 'admin/users/' . $user->id, 'class' => 'pull-right')) }}
																	{{ Form::hidden('_method', 'DELETE') }}
																	{{ Form::submit('Delete this user', array('class' => 'btn btn-warning')) }}
															{{ Form::close() }}
														</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @endif
@endsection
