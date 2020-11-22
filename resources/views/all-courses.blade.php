@extends('core.app')

@section('content')
@csrf
    <!-- Navbar -->
    @include('layouts.admin.nav')
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    @include('layouts.admin.sidebar')
    <!-- /.Main Sidebar Container -->

    <!-- Content Wrapper. Contains page content -->
    @include('layouts.admin.content.all-courses-content')
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    @include('layouts.admin.controlbar')
    <!-- /.control-sidebar -->

    <!-- Admin Footer -->
    @include('layouts.admin.footer')

@endsection
