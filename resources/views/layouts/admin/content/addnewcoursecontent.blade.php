<div class="content-wrapper">
    <div>
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Add New Course</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active">Add New Course</li>
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
                                <h3 class="card-title">New Course</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form class="form-horizontal" id="video" enctype="multipart/form-data"
                             method="POST"  action="{{ route('add-new-course_post') }}" >
                                @csrf
                                <div class="card-body" style="height: 239px;">
                                    <div class="form-group row">
                                        <label for="course_title" class="col-sm-2 col-form-label">Course Title</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="course_title" name="course_title" required  autocomplete="off" placeholder="Course Title" >
                                            <span class="invalid-feedback d-block" role="alert"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                            <label for="course_details" class="col-sm-2 col-form-label">Course Details</label>
                                            <div class="col-sm-10">
                                                <textarea type="text" class="form-control" name="course_details" id="course_details" placeholder="Course Details"  required></textarea>
                                                <span class="invalid-feedback d-block" role="alert" ></span>
                                            </div>

                                        </div>

                                    <div class="form-group row">

                                        <label for="course_video" class="col-sm-2 col-form-label">Course Video</label>
                                        <div class="col-sm-10" style="border: 0">
                                            <input type="file" id="course_video" name="course_video"  accept="video/mp4,video/x-m4v,video/*" required>
                                            <span class="invalid-feedback d-block" role="alert" ></span>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" id="clc" class="btn btn-info" >Submit Course</button>

                                </div>
                                <!-- /.card-footer -->
                            </form>
                            <div class="progress"  >
                            <div  id="progress" style="display: none;" class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                            </div>

                        </div>


                    </div>

                </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /.content -->

    </div>






</div>
