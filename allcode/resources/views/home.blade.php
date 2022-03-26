@extends('layouts.admin')
@section('title')
    <h4 class="page-title">Dashboard</h4>
@endsection
@section('admin')
                <div class="row">
                    <div class="col-xl-5 col-lg-6">

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="card widget-flat">
                                    <div class="card-body">
                                        <div class="float-end">
                                            <i class="mdi mdi-account-multiple widget-icon"></i>
                                        </div>
                                        <h5 class="text-muted fw-normal mt-0" title="Number of Customers">Customers</h5>
                                        <h3 class="mt-3 mb-3">{{count($users)}}</h3>
                                        <p class="mb-0 text-muted">
                                            <span class="{{((count($users)/50000)*100)>50?'text-success me-2':'text-danger me-2'}} "><i class="mdi {{((count($users)/50000)*100)>50?'mdi-arrow-up-bold':'mdi-arrow-down-bold'}} "></i>{{((count($users)/50000)*100).'%'}}</span>
                                            <span class="text-nowrap">Of the target</span>
                                        </p>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->

                            <div class="col-sm-6">
                                <div class="card widget-flat">
                                    <div class="card-body">
                                        <div class="float-end">
                                            <i class="mdi mdi-cart-plus widget-icon bg-success-lighten text-success"></i>
                                        </div>
                                        <h5 class="text-muted fw-normal mt-0" title="Number of Orders">Tickets</h5>
                                        <h3 class="mt-3 mb-3">{{((count($tickets)/100000)*100)}}</h3>
                                        <p class="mb-0 text-muted">
                                            <span class="{{((count($tickets)/100000)*100)>50?'text-success me-2':'text-danger me-2'}} me-2"><i class="mdi {{((count($users)/100000)*100)>50?'mdi-arrow-up-bold':'mdi-arrow-down-bold'}} "></i>{{((count($tickets)/100000)*100).'%'}}</span>
                                            <span class="text-nowrap">Of the target</span>
                                        </p>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->
                        </div> <!-- end row -->

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="card widget-flat">
                                    <div class="card-body">
                                        <div class="float-end">
                                           
                                        </div>
                                        <h5 class="text-muted fw-normal mt-0" title="Average Revenue">Courses</h5>
                                        <h3 class="mt-3 mb-3">{{((count($courses)/100)*100)}}</h3>
                                        <p class="mb-0 text-muted">
                                            <span class="{{((count($users)/100)*100)>50?'text-success me-2':'text-danger me-2'}} "><i class="mdi {{((count($users)/100000)*100)>50?'mdi-arrow-up-bold':'mdi-arrow-down-bold'}}">{{((count($courses)/100)*100).'%'}}</i></span>
                                            <span class="text-nowrap">Of the target</span>
                                        </p>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->

                            <div class="col-sm-6">
                                <div class="card widget-flat">
                                    <div class="card-body">
                                        <div class="float-end">
                                            <i class="mdi mdi-pulse widget-icon"></i>
                                        </div>
                                        <h5 class="text-muted fw-normal mt-0" title="Growth">Money gotten</h5>
                                        <h3 class="mt-3 mb-3">{{$money}}</h3>
                                        <p class="mb-0 text-muted">
                                            <span class="{{(($money/1000000)*100)>50?'text-success me-2':'text-danger me-2'}} me-2"><i class="mdi {{(($money/1000000)*100)>50?'mdi-arrow-up-bold':'mdi-arrow-down-bold'}}"></i>{{(($money/1000000)*100)}}</span>
                                            <span class="text-nowrap">Of the target</span>
                                        </p>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->
                        </div> <!-- end row -->

                    </div> <!-- end col -->
                    <div class="col-xl-6 col-lg-12 order-lg-2 order-xl-1">
                        <div class="card">
                            <div class="card-body">
                                <a href="#" class="btn btn-sm btn-link float-end">Export
                                    <i class="mdi mdi-download ms-1"></i>
                                </a>
                                <h4 class="header-title mt-2 mb-3">last tickets</h4>

                                <div class="table-responsive">
                                    <table class="table table-centered table-nowrap table-hover mb-0">
                                        <tbody>
                                            @foreach($ticketpage as $ticket)
                                        <tr>
                                            <td>
                                                <h5 class="font-14 my-1 fw-normal">{{$ticket->course->course_name}}</h5>
                                                <span class="text-muted font-13">{{$ticket->created_at}}</span>
                                            </td>
                                            <td>
                                                <h5 class="font-14 my-1 fw-normal">{{$ticket->course->course_price}}</h5>
                                                <span class="text-muted font-13">Price</span>
                                            </td>
                                            <td>
                                                <h5 class="font-14 my-1 fw-normal">{{$ticket->course->course_seats}}</h5>
                                                <span class="text-muted font-13">Quantity</span>
                                            </td>
                                            <td>
                                                <h5 class="font-14 my-1 fw-normal">{{$ticket->user->name}}</h5>
                                                <span class="text-muted font-13">user</span>
                                            </td>
                                        </tr>
                                       @endforeach
                                        </tbody>
                                    </table>
                                </div> <!-- end table-responsive-->
                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div> <!-- end col-->


                </div>
                <!-- end row -->




                <!-- end row -->
            </div> <!-- End Content -->
@endsection
