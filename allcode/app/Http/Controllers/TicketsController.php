<?php

namespace App\Http\Controllers;

use App\Models\Tickets;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class TicketsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tickets = Tickets::all();
        return view('tickets', compact('tickets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tickets  $tickets
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ticket = new Tickets();
        $ticket->course_id = $id;
        $ticket->user_id = auth()->user()->id;
        $ticket->save();
        Alert::success('Success', 'The Join Request Sent Successfully , The admin will return back to you as soon as possible');
        return redirect('/singleCourse');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tickets  $tickets
     * @return \Illuminate\Http\Response
     */
    public function edit(Tickets $tickets)
    {
        //
    }

    // \\filter 

    public function filterTickets($num)
    {
        if ($num == 'all') {
            return redirect('ticket');
        } else {
            $tickets = Tickets::paginate($num);
            return view('tickets', [
                'tickets' => $tickets
            ]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tickets  $tickets
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $ticket = Tickets::find($id);
        $ticket->status = $request->status;
        $ticket->save();
        if ($request->status == 'refused') {
            Alert::error('oops!', 'you refuse this student to join the class');
        } else {
            Alert::success('Nice!', 'you Accept this student to join the class');
        }

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tickets  $tickets
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ticket = Tickets::find($id);
        $ticket->delete();
        Alert::error('done!', 'you deleted this ticket');
        return back();
    }
}
