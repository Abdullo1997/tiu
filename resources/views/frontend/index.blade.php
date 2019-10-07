@extends('layouts.main')
@section('content')
<h1 class="text-center font-weight-bold text-secondary">
    O'zbekiston Xalqaro Islom Akademiyasi
</h1>
<br>
<br>
<br>
   <div class="container">
        <div class="row ">
                <div class="col-md-6">
                    <a href="{{route('faculty.index')}}">
                        <div class="card bg-light">
                            <div class="box1">
                                <p class="text-danger bg-light"></p>
                                <span class=""> <i style="color: #fff;" class="fa fa-object-group text-secondary fa-10x"></i></span>
                                <br>
                                <h3 style="color: black;" class="text-center"><br><b>Faculty </b><br> <a></a></h3>
                            </div>
                        </div>
                    </a>

                </div>
                <div class="col-md-6">
                    <a href="{{route('group.index')}}">
                        <div class="card bg-light">
                            <div class="box1">
                            <p class="text-danger bg-light"> </p>
                            <div class="count">
                            </div>
                                <span class=""><i class="fa fa-users-cog fa-10x text-info" style="color: #fff"></i> </span>
                                <h3 style="color: black;" class="text-center"><br><b>Group</b><br><a></a></h3>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
    <div class="row mt-5">

        <div class="col-md-6">
            <a href="{{route('students.index')}}">
                <div class="card bg-light">
                    <div class="box1">
                        <p class="text-danger bg-light"></p>
                        <span class=""> <i style="color: #fff;" class="fa fa-user-graduate text-primary  fa-10x"></i></span>
                        <br>
                        <h3 style="color: black;" class="text-center"><br><b>Students </b><br> <a></a></h3>
                    </div>
                </div>
            </a>

        </div>
        <div class="col-md-6">
            <a href="{{route('teachers.index')}}">
                <div class="card bg-light">
                    <div class="box1">
                    <p class="text-danger bg-light"> </p>
                    <div class="count">
                    </div>
                        <span class=""><i class="fa fa-chalkboard-teacher text-success fa-10x" style="color: #fff"></i> </span>
                        <h3 style="color: black;" class="text-center"><br><b>Teachers</b><br><a></a></h3>
                    </div>
                </div>
            </a>
        </div>
    </div>

   </div>



@endsection
