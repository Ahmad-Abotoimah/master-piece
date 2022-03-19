<?php

namespace App\Http\Controllers;

use App\Models\Cources;
use Illuminate\Contracts\Foundation\Application as ApplicationAlias;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use RealRashid\SweetAlert\Facades\Alert;

class CourcesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return ApplicationAlias|Factory|View
     */
    public function index(): View|Factory|ApplicationAlias
    {
        $courses = Cources::all();
        return view('courses',[
            'courses'=>$courses
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return ApplicationAlias|Factory|View
     */
    public function create(): View|Factory|ApplicationAlias
    {
        return view('create-courses');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return ApplicationAlias|RedirectResponse|Redirector
     */
    public function store(Request $request): Redirector|RedirectResponse|ApplicationAlias
    {

        $file = $request->course_img;
        $new_file = time().$file->getClientOriginalName();
        $file->move('assets/images/courses', $new_file);
        $pathOf = 'assets/images/courses/'.$new_file;

        $start_date =trim(explode('-',$request->course_date)[0]);
        $end_date =trim(explode('-',$request->course_date)[1]);
        $course = new Cources();
        return $this->saving($request, $course, $pathOf, $start_date, $end_date);
    }

    /**
     * Display the specified resource.
     *
     * @param $num
     *
     */
    public function show($num)
    {
        if($num=='all'){
            return redirect('course');
        }else{
            $courses = Cources::paginate($num);
            return view('courses',[
                'courses'=>$courses
            ]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param $id
     * @return ApplicationAlias|Factory|View
     */
    public function edit($id)
    {
        $course = Cources::find($id);

        return view('edit-courses',[
            'course'=>$course
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param
     * Cources $cources
     * @return ApplicationAlias|Redirector|RedirectResponse
     */
    public function update(Request $request,$id)
    {
        $course = Cources::find($id);
        $file = $request->course_img;
        $new_file = time().$file->getClientOriginalName();
        $file->move('assets/images/courses', $new_file);
        $pathOf = 'assets/images/courses/'.$new_file;

        $start_date =trim(explode('-',$request->course_date)[0]);
        $end_date =trim(explode('-',$request->course_date)[1]);
        return $this->saving($request, $course, $pathOf, $start_date, $end_date);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $id
     * @return RedirectResponse
     */
    public function destroy($id): RedirectResponse
    {
       $course = Cources::find($id);
        $course->delete();
        return back();
    }

    /**
     * @param Request $request
     * @param $course
     * @param string $pathOf
     * @param string $start_date
     * @param string $end_date
     * @return ApplicationAlias|RedirectResponse|Redirector
     */
    public function saving(Request $request, $course, string $pathOf, string $start_date, string $end_date): RedirectResponse|ApplicationAlias|Redirector
    {
        $course->course_name = $request->course_name;
        $course->course_description = $request->course_description;
        $course->course_seats = $request->course_seats;
        $course->course_img = $pathOf;
        $course->course_price = $request->course_price;
        $course->course_start_date = $start_date;
        $course->course_end_date = $end_date;
        $course->save();
        if ($course) {
            Alert::success('Success', 'You\'ve Successfully update on courses');
            return redirect('course');
        }
        else {
            Alert::error('Failed', 'update failed');
            return redirect('course');
        }
    }
//    public function showCourses(): View|Factory|ApplicationAlias
//    {
//        $courses = Cources::all();
//        return view('frontend.courses',['courses'=>$courses]);
//    }
//    public function showOneCourse($id)
//    {
//        $course = Cources::find($id);
//        return view('frontend.courses',['$course'=>$course]);
//    }

}
