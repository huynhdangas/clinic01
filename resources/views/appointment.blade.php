@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md 3">
            <div class="card">
                <div class="card-body">
                    <h4 class="text-center">Doctor Information</h4>
                    <img src="{{ asset('images/')}}/{{$user->image}}" width="100" style="border-radius: 50%;" alt="">
                    <br>
                    <p class="lead">Name: {{ucfirst($user->name)}}</p>
                    <p class="lead">Degree: {{$user->education}}</p>
                    <p class="lead">Expertise: {{$user->department}}</p>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <form action="" method="post">@csrf
                <div class="card">
                    <div class="card-header">{{ $date }}</div>

                    <div class="card-body">
                        <div class="row">
                            @foreach($times as $time)
                            <div class="col-md-3">
                                <label class="btn btn-outline-primary btn-block">
                                    <input type="radio" name="time" value="{{$time->time}}">
                                    <span>{{$time->time}}</span>
                                </label>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="card-footer">
                        <button class="btn btn-primary" type="submit" style="width: 100%;">Book Appointment</button>
                    </div>

                </div>
            </form>
        </div>
    </div>
</div>
@endsection
