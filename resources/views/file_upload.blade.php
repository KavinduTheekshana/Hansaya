@extends('layouts.back')

@section('content')


<!-- Page Container START -->
<div class="page-container">


    <!-- Content Wrapper START -->
    <div class="main-content">
        <div class="page-header">
            <h2 class="header-title">File Upload</h2>
            <div class="header-sub-title">
                <nav class="breadcrumb breadcrumb-dash">
                    <a href="#" class="breadcrumb-item"><i class="anticon anticon-home m-r-5"></i>Home</a>
                    <span class="breadcrumb-item active">File Upload</span>
                </nav>
            </div>
        </div>

        @if (session('status'))
        <div class="alert alert-success">
            <div class="d-flex align-items-center justify-content-start">
                <span class="alert-icon">
                    <i class="anticon anticon-check-o"></i>
                </span>
                <span>{{ session('status') }}</span>
            </div>
        </div>
        @endif


        <div class="card">
            <div class="card-body">
                <h4>File Browser</h4>

                <div class="m-t-25">
                    <div class="row">
                        <div class="col-md-7">
                            <form action="{{route('fileUpload')}}" method="post" enctype="multipart/form-data">
                                @csrf

                                @if ($message = Session::get('success'))
                                <div class="alert alert-success">
                                    <strong>{{ $message }}</strong>
                                </div>
                                @endif

                                @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endif


                                <div class="custom-file">
                                    <input type="file" name="file" class="custom-file-input" id="chooseFile">
                                    <label class="custom-file-label" for="customFile">Choose PDF file</label>
                                </div>
                                <br>
                                <br>

                                <div class="form-group">
                                    <label for="formGroupExampleInput">Example label</label>
                                    <div class="m-b-15">
                                        <select class="select2" name="grade">
                                            <option value="0">All</option>
                                            <option value="6">Grade 6</option>
                                            <option value="7">Grade 7</option>
                                            <option value="8">Grade 8</option>
                                            <option value="9">Grade 9</option>
                                            <option value="10">Grade 10</option>
                                            <option value="11">Grade 11</option>
                                        </select>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary">Upload</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>





    </div>
    <!-- Content Wrapper END -->



    @endsection