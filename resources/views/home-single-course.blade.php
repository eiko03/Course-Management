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
                            <li class="breadcrumb-item active"><a href="/all-courses">All Courses</a></li>
                            <li class="breadcrumb-item">{{$course_single->id}}</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
<div class="card card-info">
                            <div class="card-header">
                                <h3 class="card-title">Course Details</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->

                                <div class="card-body ml-3">
                                    <div class= "row ">
                                        <label>Course No:</label>
                                    <h4>{{$course_single->id}}</h4>

                                </div><hr>
                                    <div class= "row ">
                                        <small>Course Published:</small>
                                    <small>{{$course_single->created_at}}</small> </div><hr>
                                    <div class= "row mt-2 mb-3">
                                    <h5>{{$course_single->course_title}}</h5></div>
                                    <div class= "row" >
                                    <p>
                                        {{$course_single->course_details}}
                                    </p></div>
                                    <div class="container"><hr>
                                        <h5>Course Content</h5>
                                    <label>Average Rating:</label>
                                    @foreach ($r as $key => $value)
                                        {{ $value }}
                                    @endforeach
                                       <form id="ann1" method="POST" action="/">
                                           @csrf
                                           <label>Rate This:</label>
                                           <input type="hidden" value="{{$course_single->id}}" name="course_id">
                                           <select id="sel_id" name="rating"  onchange="assubmit();">
                                            <option value=1 default>1</option>
                                            <option value=2>2 </option>
                                            <option value=3>3 </option>
                                            <option value=4>4 </option>
                                            <option value=5>5 </option>
                                            </select>
                                        </form>
                                        <script type="application/javascript" src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
                                        <script type="application/javascript">

             function assubmit(){$.ajax({
                                   type:"POST",
                                   url:"/",

                                   data: $('#ann1').serialize(),
                                   success:function (response) {

                                       console.log(response)
                                       alertify.alert('Success', 'Thanks For Rating');


                                   },
                                   error:function(error){
                                       console.log(error)
                                       alertify.alert('Sorry', 'Something Went Wrong');
                                   }
                               });}
                    </script>

                                        <hr>
                                        <div class= "row " style="display: flex; align-items:center; flex-wrap:wrap;">
                                            <div class= "col " style="flex-basis: 50%; min-width:250px;">
                                                <div style="width: 83%; margin:auto; position: relative; border-radius:6px; overflow:hidden;">
                                                    <video width="100%" style="align-content: center;" controls>
                                                        <source src="/storage/{{$course_single->course_video}}" type="video/mp4">
                                                    </video>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <form class="form-horizontal" id="ann" method="POST" action="{{ route('all-course') }}">
                                        @csrf
                                          <div class="form-group">
                                                <label for="comment">Put Comment</label>
                                                <textarea class="form-control" id="comment" name="comment" rows="3"></textarea>
                                                <input type="hidden" value="{{$course_single->id}}" name="course_id">
                                                <button type="submit" class="btn btn-primary mt-3">Add Comment</button>
                                            </div>
                                                                </form>
            <script type="application/javascript">

             $(document).ready(function(){

                           $('#ann').on('submit',function(e){
                               e.preventDefault();
                               $.ajax({
                                   type:"POST",
                                   url:"/all-courses",

                                   data: $('#ann').serialize(),
                                   success:function (response) {

                                       console.log(response)
                                       alertify.alert('Success', 'Comment Added Successfully');
                                       $('#comment').val("");

                                   },
                                   error:function(error){
                                       console.log(error)
                                       alertify.alert('Sorry', 'Comment Was Not Added');
                                   }
                               });
                           });


                        });
                    </script>
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




                        </div></div></div></div></div>


@endsection
