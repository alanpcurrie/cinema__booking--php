@extends('layout')
@include('includes.header')
@section('title', 'All posts')
@section('content')


                <h2> All posts </h2>
            </div>
            @if (session('status'))
                <div class="flash-success">
                    {{ session('status') }}
                </div>
            @endif
            @if ($posts->isEmpty())
                <p> There is no post.</p>
            @else
                <table class="table">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Slug</th>
                        <th>Created At</th>
                        <th>Updated At</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($posts as $post)
                        <tr>
                            <td>{!! $post->id !!}</td>
                            <td>
                                <a href="{!! action('Admin\PostsController@edit', $post->id) !!}">{!! $post->title !!} </a>
                            </td>
                            <td>{!! $post->slug !!}</td>
                            <td>{!! $post->created_at !!}</td>
                            <td>{!! $post->updated_at !!}</td>
                            <td>

															{{ Form::open(array('url' => 'admin/posts/' . $post->id, 'class' => 'pull-right')) }}
																	{{ Form::hidden('_method', 'DELETE') }}
																	{{ Form::submit('Delete this post', array('class' => 'btn btn-warning')) }}
															{{ Form::close() }}
                         </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @endif
