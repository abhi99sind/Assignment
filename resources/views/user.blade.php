@extends('base')
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content m-5">
            <!-- Remove This Before You Start -->
            <p>Hello, {{Session::get('name')}}</p>

            <h2>Email: {{Session::get('email')}}</h2>
            <h2>Status Login : {{Session::get('login')}}</h2>
            <a href="/logout" class="btn btn-primary btn-lg">Logout</a>
        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
@endsection
