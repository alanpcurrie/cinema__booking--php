@extends('layout')
@include('includes.header')
@section('title', 'All roles')
@section('content')


                <h2> All roles </h2>

            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            @if ($roles->isEmpty())
                <p> There is no role.</p>
            @else
                <table class="table">
                    <thead>
                    <tr>
                        <th>Name</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($roles as $role)
                        <tr>
                            <td>{!! $role->name !!}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @endif


@endsection
