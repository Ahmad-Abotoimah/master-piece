<?php

namespace App\Http\Controllers;

use App\Models\Cources;
use App\Models\User;
use App\Models\Tickets;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = User::all()->where('role', 'user');
        $tickets = Tickets::with('course', 'user')->get();
        $ticketpage = Tickets::with('course', 'user')->paginate(15);
        $courses = Cources::all();
        $money = 0;
        $previous_week = strtotime("-1 week +1 day");
        $start_week = strtotime("last sunday midnight", $previous_week);
        $end_week = strtotime("next saturday", $start_week);
        $start_week = date("Y-m-d", $start_week);
        $end_week = date("Y-m-d", $end_week);

        $prevTicket = Tickets::whereBetween('created_at', [$start_week, $end_week])->get();
        foreach ($tickets as $ticket) {
            $money += $ticket->course->course_price;
        }
        return view('home', compact('courses', 'tickets', 'users', 'money', 'prevTicket','ticketpage'));
    }
}
