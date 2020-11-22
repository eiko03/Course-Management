@extends('core.app')@section('content')

        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">All Courses</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active">All Courses</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>






<div class="content">

            <div class="container-fluid">

                <div class="row">



                    <div class="col-lg-12"><div class="card card-info">
                            <div class="card-header">
                                <h3 class="card-title">Course List</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->

                                <div class="card-body" >
                                    <div class= "row">
                                        @foreach ($courses as $course)
                                        <?php
                                        $string= $course->course_details;
                                         $string = (strlen($string) > 200) ? substr($string,0,199).'...' : $string; ?>
                                        <div class="card ml-4 mr-4 mb-3" style="width:100%; height= 15px">

                                            <h5 class="card-title form-group ml-4 mb-3 mt-3">
                                                <a href="/all-courses/{{$course -> id}} "> {{$course->course_title}}</a>
                                            </h5>
                                            <p class="card-text form-group ml-4 mb-3 mt-3">
                                                {{$string}}
                                            </p>

                                        </div>



                                        @endforeach

                                    </div>
                                    <div class="row"><div  class="col-12 d-flex justify-content-center">
                                        {{$courses->links()}}
                                </div></div>

                                    </div>
                                </div>
                                <!-- /.card-body -->




                        </div>
                    </div>
                    </div>
                    </div>
                    </div>
@endsection

