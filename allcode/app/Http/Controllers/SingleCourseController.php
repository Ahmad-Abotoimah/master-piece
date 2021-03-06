<?php

namespace App\Http\Controllers;

use App\Models\Cources;
use App\Models\Tickets;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SingleCourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $courses = Cources::all();
        return view('frontend.courses',['courses'=>$courses]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Application|Factory|View
     */
    public function show($id): View|Factory|Application
    {
        $course = Cources::find($id);
        $tickets = Tickets::all()->where('course_id',$id)->count();
        $seats = $course->course_seats-$tickets;
        $seats==0?$course->status = 'full':'';
        return view('frontend.courseDetails',['course'=>$course,'seats'=>$seats,'tickets'=>$tickets]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param $num
     *
     */
    public function edit($filter)
    {
        if($filter!=0){
            if($filter=='adults' || $filter=='kids'){
                $courses = Cources::all()->where('type',$filter);
            }else{
                $courses  = Cources::paginate($filter);
            }
            return view('frontend.courses',['courses'=>$courses]);
        }else{
            return redirect('singleCourse');
        }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
