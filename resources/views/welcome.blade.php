@extends('layouts.app')

@section('content')
<div class="container">

    <header>
        <div class="banner">
            <img src="/banner/bannerheader.jpg" alt="" style="width: 1300px; height: auto;">
        </div>
    </header>


    <div class="row" style="margin-top: 50px;">
        <div class="col-md-5">
            <img src="/banner/online-medicine-concept_160901-152.jpg" style="border:1px solid #ccc" class="img-fluid" width="400" />
        </div>
        <div class="col-md-7">
            <h2 style="color: #007bff; font-weight: 700;">Create an account and Book your appointment</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <div class="mt-5">
                <a href="{{url('/register')}}"><button class="btn btn-primary">Register as Patient</button></a>
                <a href="{{url('/login')}}"><button class="btn btn-secondary">Login</button></a>
            </div>
        </div>
    </div>
    <hr>

<!-- search doctor -->
    <div class="card" style="margin-top:50px;">
        
        <div class="card-body">
            <div class="card-header">
                <h2 style="color: #007bff; font-weight: 700;">Find Doctor</h2>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-8">
                        <input type="text" name="date" class="form-control" id="datepicker" autocomplete="off" placeholder="Choose Day"/>
                    </div>
                    <div class="col-md-4">
                        <button class="btn btn-primary" type="submit">Find Doctor</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- display doctor -->

    <div class="card" style="margin-top:50px;">  
        <div class="card-body">
            <div class="card-header">
                <h2 style="color: #007bff; font-weight: 700;">List Doctors</h2>
            </div>
            <div class="card-body">
                <table class="table table-striped" style="text-align: center;">
                    <thead class="table-head">
                        <tr>
                            <th>#</th>
                            <th>Photo</th>
                            <th>Name</th>
                            <th>Expertise</th>
                            <th>Book</th>

                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($doctors as $doctor)
                        <tr>
                            <th scope="row">1</th>
                            <td><img src="{{asset('images')}}/{{$doctor->doctor->image}}" width="100" style="border-radius: 50%;" alt=""></td>
                            <td>{{$doctor->doctor->name}}</td>
                            <td>{{$doctor->doctor->department}}</td>
                            <td><button class="btn btn-primary">Book Appointment</button></td>
                        </tr>
                        @empty
                        <td>No Doctors Available</td>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>


</div>
@endsection
