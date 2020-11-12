@extends('layouts.back')

@section('content')

<!-- Page Container START -->
<div class="page-container">


    <!-- Content Wrapper START -->
    <div class="main-content">
        <div class="page-header">
            <h2 class="header-title">Profile</h2>
            <div class="header-sub-title">
                <nav class="breadcrumb breadcrumb-dash">
                    <a href="#" class="breadcrumb-item"><i class="anticon anticon-home m-r-5"></i>Home</a>
                    <span class="breadcrumb-item active">Profile</span>
                </nav>
            </div>
        </div>
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-md-7">
                            <div class="d-md-flex align-items-center">
                                <div class="text-center text-sm-left ">
                                    <div class="avatar avatar-image" style="width: 150px; height:150px">
                                        <img src="{{$user->profile}}" alt="">
                                    </div>
                                </div>
                                <div class="text-center text-sm-left m-v-15 p-l-30">
                                    <h2 class="m-b-5">{{$user->name}}</h2>
                                    <p class="text-opacity font-size-13">{{$user->dob}}</p>
                                    <p class="text-dark m-b-20">{{$user->school}}</p>
                                    <!-- <button class="btn btn-primary btn-tone">Contact</button> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="row">
                                <div class="d-md-block d-none border-left col-1"></div>
                                <div class="col">
                                    <ul class="list-unstyled m-t-10">
                                        <li class="row">
                                            <p class="col-sm-4 col-4 font-weight-semibold text-dark m-b-5">
                                                <i class="m-r-10 text-primary anticon anticon-mail"></i>
                                                <span>Email: </span>
                                            </p>
                                            <p class="col font-weight-semibold"> {{$user->email}}</p>
                                        </li>
                                        <li class="row">
                                            <p class="col-sm-4 col-4 font-weight-semibold text-dark m-b-5">
                                                <i class="m-r-10 text-primary anticon anticon-phone"></i>
                                                <span>Phone: </span>
                                            </p>
                                            <p class="col font-weight-semibold"> {{$user->phone}}</p>
                                        </li>
                                        <li class="row">
                                            <p class="col-sm-4 col-5 font-weight-semibold text-dark m-b-5">
                                                <i class="m-r-10 text-primary anticon anticon-compass"></i>
                                                <span>Grade: </span>
                                            </p>
                                            <p class="col font-weight-semibold"> {{$user->grade}}</p>
                                        </li>
                                    </ul>
                                    <br>
                                    <p> Account Complete : {{$progress}}%</p>

                                    <div class="progress">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: {{$progress}}%" aria-valuenow="20" aria-valuemin="120" aria-valuemax="100"></div>
                                    </div>
                                    <!-- <div class="d-flex font-size-22 m-t-15">
                                                    <a href="" class="text-gray p-r-20">
                                                        <i class="anticon anticon-facebook"></i>
                                                    </a>        
                                                    <a href="" class="text-gray p-r-20">    
                                                        <i class="anticon anticon-twitter"></i>
                                                    </a>
                                                    <a href="" class="text-gray p-r-20">
                                                        <i class="anticon anticon-behance"></i>
                                                    </a> 
                                                    <a href="" class="text-gray p-r-20">   
                                                        <i class="anticon anticon-dribbble"></i>
                                                    </a>
                                                </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            @if (session('error'))
            <div class="alert alert-danger">
                <div class="d-flex justify-content-start">
                    <span class="alert-icon m-r-20 font-size-30">
                        <i class="anticon anticon-close-circle"></i>
                    </span>
                    <div>
                        <h5 class="alert-heading">Error</h5>
                        <p>{{ session('error') }}</p>
                    </div>
                </div>
            </div>
            @endif

            @if (session('status'))
            <div class="alert alert-success">
                <div class="d-flex justify-content-start">
                    <span class="alert-icon m-r-20 font-size-30">
                        <i class="anticon anticon-check-circle"></i>
                    </span>
                    <div>
                        <h5 class="alert-heading">Success Tips</h5>
                        <p>{{ session('status') }}</p>
                    </div>
                </div>
            </div>
            @endif


            <div class="row">
                <div class="container">
                    <div class="tab-content m-t-15">
                        <div class="tab-pane fade show active" id="tab-account">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Basic Infomation</h4>
                                </div>
                                <div class="card-body">
                                    <div class="media align-items-center">
                                        <div class="avatar avatar-image  m-h-10 m-r-15" style="height: 80px; width: 80px">
                                            <img src="{{$user->profile}}" alt="">
                                        </div>
                                        <div class="m-l-20 m-r-20">
                                            <h5 class="m-b-5 font-size-18">Change Profile Image</h5>
                                            <p class="opacity-07 font-size-13 m-b-0">
                                                Recommended Dimensions: <br>
                                                120x120 Max fil size: 5MB
                                            </p>
                                        </div>
                                        <div>
                                            <form role="form" action="updateprofilepicture" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <input type="text" name="id" value="{{$user->id}}" hidden>
                                                <input type="file" name="profile" class="btn btn-tone btn-primary"></input>
                                                <button type="submit" class="btn btn-primary m-t-0" style="margin-left: 10px;">Change</button>
                                            </form>
                                        </div>
                                    </div>
                                    <hr class="m-v-25">
                                    <form role="form" action="updateProfile" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <input type="text" name="id" value="{{$user->id}}" hidden>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label class="font-weight-semibold" for="userName">Name:</label>
                                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" value="{{$user->name}}" name="name" value="{{ old('name') }}" placeholder="Name" required autocomplete="name">

                                                @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="font-weight-semibold" for="email">Email:</label>
                                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" value="{{$user->email}}" name="email" value="{{ old('email') }}" placeholder="Email" required autocomplete="email" readonly>

                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-4">
                                                <label class="font-weight-semibold" for="phoneNumber">Phone Number:</label>
                                                <input id="phone" type="tel" class="form-control @error('phone') is-invalid @enderror" value="{{$user->phone}}" name="phone" value="{{ old('phone') }}" placeholder="Phone" required autocomplete="phone">

                                                @error('phone')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label class="font-weight-semibold" for="dob">Date of Birth:</label>
                                                <!-- <input id="dob" type="date" class="form-control @error('dob') is-invalid @enderror" name="dob" value="{{$user->dob}}" value="{{ old('dob') }}" placeholder="Date Of Birth" required autocomplete="dob"> -->
                                                <!-- <input type="text" class="form-control datepicker-input" placeholder="Pick a date"> -->

                                                <div class="input-affix m-b-10">
                                                    <i class="prefix-icon anticon anticon-calendar"></i>
                                                    <input id="dob" type="text" name="dob" class="form-control datepicker-input @error('dob') is-invalid @enderror" value="{{$user->dob}}" placeholder="Pick a date" autocomplete="dob">
                                                </div>

                                                @error('dob')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label class="font-weight-semibold" for="language">Grade</label>
                                                <select id="grade" class="form-control" name="grade">
                                                    <option value="{{$user->grade}}">{{$user->grade}}</option>
                                                    <option value="6">Grade 6</option>
                                                    <option value="7">Grade 7</option>
                                                    <option value="8">Grade 8</option>
                                                    <option value="9">Grade 9</option>
                                                    <option value="10">Grade 10</option>
                                                    <option value="11">Grade 11</option>
                                                </select>
                                            </div>

                                            <div class="form-group col-md-12">
                                                <label class="font-weight-semibold" for="fullAddress">School:</label>
                                                <input id="school" type="text" class="form-control @error('school') is-invalid @enderror" value="{{$user->school}}" name="school" value="{{ old('school') }}" placeholder="School" required autocomplete="school">

                                                @error('school')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>

                                            <div class="form-group col-md-3">
                                                <button class="btn btn-primary m-t-0">Change</button>
                                            </div>


                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Change Password</h4>
                                </div>
                                <div class="card-body">


                                    <form role="form" action="changePassword" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-row">
                                            <div class="form-group col-md-3">
                                                <label class="font-weight-semibold" for="oldPassword">Old Password:</label>
                                                <input id="current_password" type="text" class="form-control @error('current_password') is-invalid @enderror" name="current_password" value="{{ old('current_password') }}" placeholder="Current Password" required autocomplete="current_password">

                                                @error('current_password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label class="font-weight-semibold" for="newPassword">New Password:</label>
                                                <input id="new_password" type="text" class="form-control @error('new_password') is-invalid @enderror" name="new_password" value="{{ old('new_password') }}" placeholder="New Password" required autocomplete="new_password">

                                                @error('new_password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label class="font-weight-semibold" for="confirmPassword">Confirm Password:</label>
                                                <input id="new_password_confirmation" type="text" class="form-control @error('new_password_confirmation') is-invalid @enderror" name="new_password_confirmation" value="{{ old('new_password_confirmation') }}" placeholder="Password Confirm" required autocomplete="new_password_confirmation">
                                            </div>
                                            <div class="form-group col-md-3">
                                                <button class="btn btn-primary m-t-30">Change</button>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Content Wrapper END -->
    @endsection