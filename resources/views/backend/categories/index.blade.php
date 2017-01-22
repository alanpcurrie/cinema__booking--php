@extends('layout')
@include('includes.header')
@section('title', 'All categories')
@section('content')

                <h2> All categories </h2>

            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            @if ($categories->isEmpty())
                <p> There is no category.</p>
            @else
                <table class="table">
                    <tbody>
                    @foreach($categories as $category)
                        <tr>
                            <td>{!! $category->name !!}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @endif

@endsection
