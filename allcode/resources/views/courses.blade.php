
@extends('layouts.admin')
@section('title')
    <h4 class="page-title">Courses</h4>
@endsection
@section('admin')
    <style>
        .print-table{
            display: none;
        }
        @media print {
            .row{
                display: none !important;
            }
            .print-table{
                display: block;
            }
        }
    </style>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row mb-2">
                                    <div class="col-sm-5">
                                        <a href={{route('course.create')}} class="btn btn-danger mb-2"><i class="mdi mdi-plus-circle me-2"></i> Add Courses</a>
                                    </div>
                                    <div class="col-sm-7">
                                        <div class="text-sm-end d-flex justify-content-end " >
                                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            <button type="button" class="btn btn-success mb-2 me-1"><i class="mdi mdi-cog-outline"></i></button>
                                            </a>
                                            <span class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="{{ route('course.show',5) }}">
                                                      5
                                                </a>
                                                <a class="dropdown-item" href="{{ route('course.show',10) }}">
                                                      10
                                                </a>
                                                <a class="dropdown-item" href="{{ route('course.show',20) }}">
                                                      20
                                                </a>
                                                <a class="dropdown-item" href="{{ route('course.show',50) }}">
                                                      50
                                                </a>
                                                <a class="dropdown-item" href="{{ route('course.show',100) }}">
                                                      100
                                                </a>
                                                <a class="dropdown-item" href="{{ route('course.show','all') }}">
                                                      all
                                                </a>


                                            </span>
                                            <button type="button" class="btn btn-light mb-2" onclick="function PrintAss() {
                                                window.print();
                                            }
                                            PrintAss()"><i class="mdi mdi-arrow-collapse-down"></i>print</button>
                                        </div>
                                    </div><!-- end col-->
                                </div>

                                <div class="table-responsive">
                                    <table class="table table-centered w-100 dt-responsive nowrap" id="products-datatable">
                                        <thead class="table-light">
                                        <tr>
{{--                                            <th class="all" style="width: 20px;">--}}
{{--                                                <div class="form-check">--}}
{{--                                                    <input type="checkbox" class="form-check-input" id="customCheck1">--}}
{{--                                                    <label class="form-check-label" for="customCheck1">&nbsp;</label>--}}
{{--                                                </div>--}}
{{--                                            </th>--}}
                                            <th>#</th>
                                            <th class="all">Course</th>
                                            <th>Description</th>
                                            <th>Added Date</th>
                                            <th>Updated Date</th>
                                            <th>Price</th>
                                            <th>Seats</th>
                                            <th>from</th>
                                            <th>to</th>
                                            <th style="width: 85px;">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($courses as $course)
                                        <tr>
                                            <td>{{$course->id}}</td>
                                            <td>
                                                <img src='{{$course->course_img}}' alt="contact-img" title="contact-img" class="rounded me-3" height="48" />
                                                <p class="m-0 d-inline-block align-middle font-16">
                                                    <span>{{$course->course_name}}</span>
                                                </p>
                                            </td>
                                            <td>
                                                {{$course->course_description}}
                                            </td>
                                            <td>
                                                {{$course->created_at}}
                                            </td>
                                            <td>
                                                {{$course->updated_at}}
                                            </td>

                                            <td>
                                                {{$course->course_price}}
                                            </td>
                                            <td>
                                                {{$course->course_seats}}
                                            </td>
                                            <td>
                                                {{$course->course_start_date}}
                                            </td>
                                            <td>
                                                {{$course->course_end_date}}
                                            </td>
{{--                                            <td>--}}
{{--                                                <span class="badge bg-success">Active</span>--}}
{{--                                            </td>--}}

                                            <td class="table-action">
                                                <a href="{{route('course.edit',$course->id)}}" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>

                                                <form method="post" action="{{route('course.destroy',$course->id)}}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" style="border: 0;background-color:#fff;"><i class="mdi mdi-delete"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div> <!-- end col -->
                </div>
                <!-- end row -->

            </div> <!-- End Content -->
    <div class="print-table">
        <table class="table table-centered w-100 dt-responsive nowrap" id="products-datatable">
            <thead class="table-light">
            <tr>
                {{--                                            <th class="all" style="width: 20px;">--}}
                {{--                                                <div class="form-check">--}}
                {{--                                                    <input type="checkbox" class="form-check-input" id="customCheck1">--}}
                {{--                                                    <label class="form-check-label" for="customCheck1">&nbsp;</label>--}}
                {{--                                                </div>--}}
                {{--                                            </th>--}}
                <th>#</th>
                <th class="all">Course</th>
                <th>Description</th>
                <th>Added Date</th>
                <th>Updated Date</th>
                <th>Price</th>
                <th>Seats</th>
                <th>from</th>
                <th>to</th>
            </tr>
            </thead>
            <tbody>
            @foreach($courses as $course)
                <tr>
                    <td>{{$course->id}}</td>
                    <td>
                        <img src='{{$course->course_img}}' alt="contact-img" title="contact-img" class="rounded me-3" height="48" />
                        <p class="m-0 d-inline-block align-middle font-16">
                            <span>{{$course->course_name}}</span>
                        </p>
                    </td>
                    <td>
                        {{$course->course_description}}
                    </td>
                    <td>
                        {{$course->created_at}}
                    </td>
                    <td>
                        {{$course->updated_at}}
                    </td>

                    <td>
                        {{$course->course_price}}
                    </td>
                    <td>
                        {{$course->course_seats}}
                    </td>
                    <td>
                        {{$course->course_start_date}}
                    </td>
                    <td>
                        {{$course->course_end_date}}
                    </td>
                    {{--                                            <td>--}}
                    {{--                                                <span class="badge bg-success">Active</span>--}}
                    {{--                                            </td>--}}

                   
                </tr>
            @endforeach

            </tbody>
        </table>
    </div>
                @endsection
