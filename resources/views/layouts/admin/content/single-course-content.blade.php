<div class="content-wrapper">
    <div>
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Single Course</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active"><a href="{{ route('all-courses') }}">All Courses</a></li>
                            <li class="breadcrumb-item">{{$course_single->id}}</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">

            <div class="container-fluid">

                <div class="row">



                    <div class="col-lg-12">

                        <div class="card card-info">
                            <div class="card-header">
                                <h3 class="card-title">Course Details</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->

                                <div class="card-body ml-3">
                                    <div class= "row ">
                                        <label>Course No:</label>
                                    <h4>{{$course_single->id}}</h4> </div> <hr>
                                    <div class= "row ">
                                        <small>Course Published:</small>
                                    <small>{{$course_single->created_at}}</small> </div><hr>
                                    <div class= "row mt-2 mb-3">
                                    <h5>{{$course_single->course_title}}</h5></div>
                                    <div class= "row" >
                                    <p>
                                        {{$course_single->course_details}}
                                    </p></div>
                                    <div class="container">
                                        <h5>Course Content</h5><label>Average Rating:</label>
                                    @foreach ($r as $key => $value)
                                        {{ $value }}
                                    @endforeach<hr>
                                        <div class= "row mt-4" style="display: flex; align-items:center; flex-wrap:wrap;">
                                            <div class= "col " style="flex-basis: 50%; min-width:250px;">
                                                <div style="width: 83%; margin:auto; position: relative; border-radius:6px; overflow:hidden;">
                                                    <video width="100%" style="align-content: center;" controls>
                                                        <source src="/storage/{{$course_single->course_video}}" type="video/mp4">
                                                    </video>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card mt-3 mb-3 ml-2 mr-2" style="border: 0;"><label class="mt-3 mb-3 ml-2 mr-2">All Comments</label>
                                        <ul class="list-group list-group-flush">
                                            @foreach ($comments as $comment)
                                        <li class="list-group-item mt-3 mb-3 ml-2 mr-2" >{{$comment->comment}}</li>
                                            @endforeach
                                        </ul>
                                    </div>





                                    </div>
                                </div>
                                <!-- /.card-body -->




                        </div>


                    </div>

                </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /.content -->

    </div>






</div>
