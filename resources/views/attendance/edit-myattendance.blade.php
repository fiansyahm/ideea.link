@extends('template-admin')
@section('navbar_menu_attendance', 'bg-primary text-white')
@section('main')
<div class="container">
    <h1 class="my-5">Edit User</h1>
    <form enctype="multipart/form-data" class="mx-5 mb-5" class="ps-checkout__form" action="/update-myattendance/{{$user->id}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="name" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="name" value="{{$user->name}}">
                @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Hanphone</label>
                <input type="name" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" placeholder="phone" value="{{$user->phone}}">
                @error('phone')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
             <div class="mb-3">
                <label for="division" class="form-label">Division</label>
                <input type="division" class="form-control @error('division') is-invalid @enderror" id="division" name="division" placeholder="division" value="{{$user->division}}">
                @error('division')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="attendance" class="form-label">Attendance</label>
                <!--<input type="attendance" class="form-control @error('attendance') is-invalid @enderror" id="attendance" name="attendance" placeholder="attendance" value="{{$user->attendance}}">-->
                <select class="form-select @error('attendance') is-invalid @enderror" id="attendance" name="attendance" placeholder="attendance" value="{{$user->attendance}}">
                  <!--<option selected>Open this select menu</option>-->
                  <option selected value="0">Izin</option>
                  <option value="1">Masuk</option>
                </select>
                
                @error('attendance')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary create-confirm">Submit</button>
        </form>
    
</div>
@endsection