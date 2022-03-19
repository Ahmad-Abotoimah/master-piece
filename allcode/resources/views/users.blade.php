
@extends('layouts.admin')
@section('title')
    <h4 class="page-title">Users</h4>
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
                                                <a class="dropdown-item" href="{{ route('user.show',5) }}">
                                                      5
                                                </a>
                                                <a class="dropdown-item" href="{{ route('user.show',10) }}">
                                                      10
                                                </a>
                                                <a class="dropdown-item" href="{{ route('user.show',20) }}">
                                                      20
                                                </a>
                                                <a class="dropdown-item" href="{{ route('user.show',50) }}">
                                                      50
                                                </a>
                                                <a class="dropdown-item" href="{{ route('user.show',100) }}">
                                                      100
                                                </a>
                                                <a class="dropdown-item" href="{{ route('user.show','all') }}">
                                                      all
                                                </a>


                                            </span>
                                <button type="button" class="btn btn-light mb-2" onclick="function PrintAss() {
                                                window.print();
                                            }
                                            PrintAss()">print</button>
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
                                <th class="all">user</th>
                                <th>email</th>
                                <th>phone</th>
                                <th>Date Of Birth</th>
                                <th>Major</th>
                                <th>Status</th>
                                <th>Created At</th>
                                <th style="width: 85px;">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td>{{$user->id}}</td>
                                    <td>
                                        <img src={{"assets/images/userAvatar.png"}} alt="contact-img" title="contact-img" class="rounded me-3" height="48" />
                                        <p class="m-0 d-inline-block align-middle font-16">
                                            <span>{{$user->name}}</span>
                                        </p>
                                    </td>
                                    <td>
                                        {{$user->email}}
                                    </td>
                                    <td>
                                        {{$user->phone?$user->phone:'not added'}}
                                    </td>
                                    <td>
                                        {{$user->date_of_birth?$user->date_of_birth:"not added"}}
                                    </td>

                                    <td>
                                        {{$user->major?$user->major:"student"}}
                                    </td>
                                    <td>
                                        {{$user->Status?$user->status:"active"}}
                                    </td>
                                    <td>
                                        {{$user->created_at?$user->created_at:today}}
                                    </td>

                                    {{--                                            <td>--}}
                                    {{--                                                <span class="badge bg-success">Active</span>--}}
                                    {{--                                            </td>--}}

                                    <td class="table-action">
                                        <a href="{{route('user.edit',$user->id)}}" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>

                                        <form method="post" action="{{route('user.destroy',$user->id)}}">
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
                <th class="all">user</th>
                <th>email</th>
                <th>phone</th>
                <th>Date Of Birth</th>
                <th>Major</th>
                <th>Status</th>
                <th>Created At</th>
                <th style="width: 85px;">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>
                        <img src={{"assets/images/userAvatar.png"}} alt="contact-img" title="contact-img" class="rounded me-3" height="48" />
                        <p class="m-0 d-inline-block align-middle font-16">
                            <span>{{$user->name}}</span>
                        </p>
                    </td>
                    <td>
                        {{$user->email}}
                    </td>
                    <td>
                        {{$user->phone?$user->phone:'not added'}}
                    </td>
                    <td>
                        {{$user->date_of_birth?$user->date_of_birth:"not added"}}
                    </td>

                    <td>
                        {{$user->major?$user->major:"student"}}
                    </td>
                    <td>
                        {{$user->Status?$user->status:"active"}}
                    </td>
                    <td>
                        {{$user->created_at?$user->created_at:today}}
                    </td>

                    {{--                                            <td>--}}
                    {{--                                                <span class="badge bg-success">Active</span>--}}
                    {{--                                            </td>--}}

                    <td class="table-action">
                        <a href="{{route('user.edit',$user->id)}}" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>

                        <form method="post" action="{{route('user.destroy',$user->id)}}">
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
@endsection
