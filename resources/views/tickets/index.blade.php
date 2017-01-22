@extends('layout')
@section('title', 'View all tickets')
@section('content')


                    <h2> Tickets </h2>

                @if ($tickets->isEmpty())
                    <p> There is no ticket.</p>
                @else
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach($tickets as $ticket)
                                <tr>
                                    <td>{!! $ticket->id !!}</td>
                                    <td>
                                        <a href="{!! action('TicketsController@show', $ticket->slug) !!}">{!! $ticket->title !!} </a>
                                    </td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif


@endsection
