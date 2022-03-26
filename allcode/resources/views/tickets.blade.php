
@extends('layouts.admin')
@section('title')
    <h4 class="page-title"> Tickets </h4>
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
                            <a href={{route('user.create')}} class="btn btn-danger mb-2"><i class="mdi mdi-plus-circle me-2"></i> Add User</a>
                        </div>
                        <div class="col-sm-7">
                            <div class="text-sm-end d-flex justify-content-end " >
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <button type="button" class="btn btn-success mb-2 me-1"><i class="mdi mdi-cog-outline"></i></button>
                                </a>
                                <span class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="{{ route('filterTickets',5) }}">
                                                      5
                                                </a>
                                                <a class="dropdown-item" href="{{ route('filterTickets',10) }}">
                                                      10
                                                </a>
                                                <a class="dropdown-item" href="{{ route('filterTickets',20) }}">
                                                      20
                                                </a>
                                                <a class="dropdown-item" href="{{ route('filterTickets',50) }}">
                                                      50
                                                </a>
                                                <a class="dropdown-item" href="{{ route('filterTickets',100) }}">
                                                      100
                                                </a>
                                                <a class="dropdown-item" href="{{ route('filterTickets','all') }}">
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
                                <th class="all">User</th>
                                <th>Course</th>
                                <th>Created at </th>
                                <th>status</th>
                                <th style="width: 85px;">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($tickets as $ticket)
                                <tr>
                                    <td>{{$ticket->id}}</td>
                                    <td>
                                       
                                        <p class="m-0 d-inline-block align-middle font-16">
                                            <span>{{$ticket->user_id}}</span>
                                        </p>
                                    </td>
                                    <td>
                                        {{$ticket->course_id}}
                                    </td>
                                    <td>
                                        {{$ticket->created_at}}
                                    </td>
                                    <td>
                                        {{$ticket->status}}
                                    </td>

                                   

                                    {{--                                            <td>--}}
                                    {{--                                                <span class="badge bg-success">Active</span>--}}
                                    {{--                                            </td>--}}

                                    <td class="table-action">
                                        <div class="btn-group">
                                        <form action="{{route('updateTickets',$ticket->id)}}" method="put">
                                               <input type="hidden" value="accepted" name="status">
                                               <button type="submit"  class="btn btn-primary"> Accept </button>
                                        </form>
                                        <form action="{{route('updateTickets',$ticket->id)}}" method="put">
                                               <input type="hidden" value="refused" name="status">
                                               <button  type="submit" class="btn btn-warning"> Refuse </button>
                                        </form>

                                        <form method="post" action="{{route('ticket.destroy',$ticket->id)}}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </div>
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
                <th class="all">User</th>
                <th>Course</th>
                <th>Created at </th>
                <th>status</th>
            </tr>
            </thead>
            <tbody>
            @foreach($tickets as $ticket)
                <tr>
                    <td>{{$ticket->id}}</td>
                    <td>
                       
                        <p class="m-0 d-inline-block align-middle font-16">
                            <span>{{$ticket->user_id}}</span>
                        </p>
                    </td>
                    <td>
                        {{$ticket->course_id}}
                    </td>
                    <td>
                        {{$ticket->created_at}}
                    </td>
                    <td>
                        {{$ticket->status}}
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
