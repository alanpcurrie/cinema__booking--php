<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\TicketFormRequest;
use App\Ticket;
use App\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;


class TicketsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tickets = Ticket::all();
        return view('tickets.index', compact('tickets'));

    }




    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $posts = Post::all();

        return view('tickets.create', compact('posts'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     public function store(TicketFormRequest $request)
     {
         $slug = uniqid();
         $ticket = new Ticket(array(
             'title' => $request->get('title'),
             'slug' => $slug,
             //error handling still to implement for non logged in user
             'user_id'   => Auth::user()->id
         ));

         $ticket->save();

         return redirect('/contact')->with('status', 'Your ticket has been booked! Its unique id is: '.$slug);

     }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function show($slug)
 {
     $ticket = Ticket::whereSlug($slug)->firstOrFail();
     return view('tickets.show', compact('ticket'));

 }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
