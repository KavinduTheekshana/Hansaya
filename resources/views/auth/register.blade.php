<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Enlink - Admin Dashboard Template</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/logo/favicon.png">

    <!-- page css -->

    <!-- Core css -->
    <link href="assets/css/app.min.css" rel="stylesheet">
    <!-- page css -->
    <link href="assets/vendors/select2/select2.css" rel="stylesheet">
    <link href="assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet">

</head>

<body>
    <div class="app">
        <div class="container-fluid">
            <div class="d-flex full-height p-v-20 flex-column justify-content-between">
                <div class="d-none d-md-flex p-h-40">
                    <a href="/"><img src="images/logo.png" height="50px" alt=""></a>
                </div>
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-6 d-none d-md-block">
                            <img class="img-fluid" src="assets/images/3634171.png" alt="">
                        </div>
                        <div class="m-l-auto col-md-5">
                            <div class="card">
                                <div class="card-body">
                                    <h2 class="m-t-20">Sign Up</h2>
                                    <p class="m-b-30">Enter your credential to get access</p>
                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf
                                        <div class="form-group">
                                            <label class="font-weight-semibold" for="userName">Name:</label>
                                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Name" required autocomplete="name" autofocus>

                                            @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label class="font-weight-semibold" for="email">Email:</label>
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email" required autocomplete="email">

                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label class="font-weight-semibold" for="phone">Phone:</label>
                                            <input id="phone" type="tel" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" placeholder="Phone" required autocomplete="phone">

                                            @error('phone')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <!-- <div class="form-group">
                                            <label class="font-weight-semibold" for="phone">Grade:</label>
                                            <select class="form-control card-body" name="state">
                                                <option value="6">Grade 6</option>
                                                <option value="7">Grade 7</option>
                                                <option value="8">Grade 8</option>
                                                <option value="9">Grade 9</option>
                                                <option value="10">Grade 10</option>
                                                <option value="11">Grade 11</option>
                                            </select>
                                        </div> -->
                                        <div class="form-group">
                                            <label class="font-weight-semibold" for="password">Password:</label>
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="new-password">

                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label class="font-weight-semibold" for="confirmPassword">Confirm Password:</label>
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="Confirm Password" autocomplete="new-password">
                                        </div>
                                        <div class="form-group">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <span class="font-size-13 text-muted">
                                                    You Already Registerd?
                                                    <a class="small" href="login"> Sign In</a>
                                                </span>
                                                <button class="btn btn-primary">Sign Up</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-none d-md-flex  p-h-40 justify-content-between">
                    <span class="">© 2020 CreatX Software. | Created by Kavindu Theekshana</span>

                </div>
            </div>
        </div>
    </div>


    <!-- Core Vendors JS -->
    <script src="assets/js/vendors.min.js"></script>

    <!-- page js -->
    <script src="assets/vendors/select2/select2.min.js"></script>
    <script src="assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <script src="assets/vendors/quill/quill.min.js"></script>
    <script src="assets/js/pages/form-elements.js"></script>

    <!-- Core JS -->
    <script src="assets/js/app.min.js"></script>

</body>

</html>