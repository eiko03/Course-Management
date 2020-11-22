<div class="content-wrapper">
    <div>
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Users</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active">Users</li>
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

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">All Users</h3>

                                <div class="card-tools">
                                    <div class="input-group input-group-sm" style="width: 150px;">
                                        <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0" style="height: 300px;">
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>User</th>
                                        <th>Email</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $user)
                                    <tr >

                                        <td id="id">{{$user->id}}</td>
                                        <td id="name">{{$user->name}}</td>
                                        <td id="email">{{$user->email}}</td>
                                    </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>

                    <div class="col-lg-6">

                        <div class="card card-info">
                            <div class="card-header">
                                <h3 class="card-title">New User Form</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form class="form-horizontal" id="ann" method="POST" action="{{ route('users_post') }}">
                                @csrf
                                <div class="card-body" style="height: 239px;">
                                    <div class="form-group row">
                                        <label for="name" class="col-sm-2 col-form-label">Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="name" name="name" required autocomplete="name"  placeholder="Name" >
                                            <span class="invalid-feedback d-block" role="alert"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="email" id="email" placeholder="Email"  required>
                                                <span class="invalid-feedback d-block" role="alert" ></span>
                                            </div>

                                        </div>

                                    <div class="form-group row">

                                        <label for="password" class="col-sm-2 col-form-label">Password</label>
                                        <div class="col-sm-10">
                                            <input type="password" class="form-control" id="password" name="password" placeholder="Password"  required>
                                            <span class="invalid-feedback d-block" role="alert" ></span>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-info" >Add User</button>
                                </div>
                                <!-- /.card-footer -->
                            </form> <script type="application/javascript" src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
            <script type="application/javascript">

             $(document).ready(function(){

                           $('#ann').on('submit',function(e){
                               e.preventDefault();
                               $.ajax({
                                   type:"POST",
                                   url:"/admin/users/",

                                   data: $('#ann').serialize(),
                                   success:function (response) {

                                       console.log(response)
                                       alertify.alert('Success', 'User Added Successfully');
                                       $('#name').val("");
                                       $('#email').val("");
                                       $('#password').val("");
                                   },
                                   error:function(error){
                                       console.log(error)
                                       alertify.alert('Sorry', 'User Was Not Added');
                                   }
                               });
                           });


                        });
                    </script>

                        </div>

                    </div>

                </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /.content -->

    </div>






</div>
