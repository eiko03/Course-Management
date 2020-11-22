<div class="no">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Dashboard</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->

        <section class="content">
            <div class="container-fluid">

                 <div class="col-md-3 col-sm-6 col-12 ml-auto">
                        <div class="info-box bg-success">
                            <span class="info-box-icon"><i class="far fa-thumbs-up"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Total Rated</span>
                                <span class="info-box-number">{{$ratings}}</span>

                                <div class="progress">
                                    <div class="progress-bar" style="width: 70%"></div>
                                </div>

                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                    <div class="col-md-3 col-sm-6 col-12 ml-auto">
                        <div class="info-box bg-warning">
                            <span class="info-box-icon"><i class="far fa-calendar-alt"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Number of Courses</span>
                                <span class="info-box-number">{{$courses}}</span>

                                <div class="progress">
                                    <div class="progress-bar" style="width: 70%"></div>
                                </div>

                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                    <div class="col-md-3 col-sm-6 col-12 ml-auto">
                        <div class="info-box bg-danger">
                            <span class="info-box-icon"><i class="fas fa-comments"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Total Comments</span>
                                <span class="info-box-number">{{$comments}}</span>

                                <div class="progress">
                                    <div class="progress-bar" style="width: 70%"></div>
                                </div>

                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                </div>

            </div><!-- /.container-fluid -->
        </section>


        <!-- /.content -->

    </div>
