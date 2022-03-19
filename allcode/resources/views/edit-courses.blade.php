@extends('layouts.admin')
@section('title')
    <h4 class="page-title">Edit Course</h4>
@endsection
@section('admin')

    <form action='{{route('course.update',$course->id)}}' method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="simpleinput" class="form-label">Course Name</label>
            <input type="text" id="simpleinput" class="form-control"  name="course_name" required value={{$course->course_name}} >
        </div>
        <div class="mb-3">
            <label for="simpleinput" class="form-label">Course Price</label>
            <input type="text" id="simpleinput" class="form-control"  name="course_price" required value={{$course->course_price}}>
        </div>
        <div class="mb-3">
            <label for="simpleinput" class="form-label">Course Number Of Seats</label>
            <input type="text" id="simpleinput" class="form-control"   name="course_seats" required value={{$course->course_seats}}>
        </div>
        <div class="mb-3">
            <img class="rounded" src="{{$course->course_img}}" alt="img" height="48">
            <label for="example-fileinput" class="form-label">Course Poster</label>
            <input type="file" id="example-fileinput"
                   class="form-control" name="course_img" required value={{$course->course_img}}>
        </div>
        <div class="mb-3">
            <label for="example-textarea" class="form-label">Description</label>
            <textarea class="form-control" id="example-textarea"
                      rows="5"  name="course_description" required> {{$course->course_description}} </textarea>
        </div>
        <div class="mb-3">
            <label class="form-label">Date Range</label>
            <input type="text" class="form-control date" id="singledaterange" data-toggle="date-picker" data-cancel-class="btn-warning" name="course_date" required value={{old('course_date')}}>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
@endsection
