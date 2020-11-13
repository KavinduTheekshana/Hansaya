@extends('layouts.back')

@section('content')


<!-- Page Container START -->
<div class="page-container">


    <!-- Content Wrapper START -->
    <div class="main-content">
        <div class="page-header no-gutters">
            <div class="row align-items-md-center">
                <div class="col-md-6">
                    <div class="media m-v-10">
                        <div class="avatar avatar-cyan avatar-icon avatar-square">
                            <i class="anticon anticon-star"></i>
                        </div>
                        <div class="media-body m-l-15">
                            <h6 class="mb-0">All Members ({{$userscount}})</h6>
                            <span class="text-gray font-size-13">Hansaya Team</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="text-md-right m-v-10">
                        <div class="btn-group">
                            <button id="list-view-btn" type="button" class="btn btn-default btn-icon">
                            <i class="anticon anticon-appstore"></i>
                            </button>
                            <button id="card-view-btn" type="button" class="btn btn-default btn-icon active">
                                <i class="anticon anticon-ordered-list"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>





        <div class="row">
            <div class="col-lg-11 mx-auto">

                @if (session('statusactive'))
                <div class="alert alert-success">
                    <div class="d-flex align-items-center justify-content-start">
                        <span class="alert-icon">
                            <i class="anticon anticon-check-o"></i>
                        </span>
                        <span>{{ session('statusactive') }}</span>
                    </div>
                </div>
                @endif

                @if (session('statusdiactive'))
                <div class="alert alert-warning">
                    <div class="d-flex align-items-center justify-content-start">
                        <span class="alert-icon">
                            <i class="anticon anticon-check-o"></i>
                        </span>
                        <span>{{ session('statusdiactive') }}</span>
                    </div>
                </div>
                @endif


                <div class="alert alert-danger d-none" id="progress_user_delete">
                    <div class="d-flex align-items-center justify-content-start">
                        <span class="alert-icon">
                            <i class="anticon anticon-check-o"></i>
                        </span>
                        <span>User Delete Sucessfully</span>
                    </div>
                </div>


                <!-- Card View -->
                <div class="row d-none" id="list-view">

                    @foreach($users as $user)
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="m-t-20 text-center">
                                    <div class="avatar avatar-image" style="height: 100px; width: 100px;">
                                        <img src="{{$user->profile}}" alt="">
                                    </div>
                                    <h4 class="m-t-30">{{$user->name}}</h4>
                                    <p style="margin-top: 0px; margin-bottom: 0px;">{{$user->phone}}</p>
                                    <p style="margin-top: 0px; margin-bottom: 0px;">Grade : {{$user->grade}}</p>
                                </div>

                                <div class="text-center m-t-30">
                                    <a href="profile.html" class="viewmodal btn btn-primary btn-tone" data-toggle="modal" data-target="#exampleModalCenter" data-modelname="{{$user->name}}" data-modelphone="{{$user->phone}}" data-modelemail="{{$user->email}}" data-modelgrade="{{$user->grade}}" data-modeldob="{{$user->dob}}" data-modelschool="{{$user->school}}" data-modelprofile="{{$user->profile}}">
                                        <i class="anticon anticon-eye"></i>
                                        <span class="m-l-5">View</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    @endforeach



                </div>


                <div class="row " id="card-view">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="data-table" class="table">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Image</th>
                                                <th>Grade</th>
                                                <th>Phone</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($users as $user)
                                            <tr>
                                                <td>{{$user->name}}</td>
                                                <td>
                                                    <div class="avatar avatar-image">
                                                        <img src="{{$user->profile}}" alt="">
                                                    </div>


                                                </td>
                                                <td>Grade: {{$user->grade}}</td>
                                                <td>{{$user->phone}}</td>
                                                <td>
                                                    @if($user->status)
                                                    <span class="badge badge-success">Active</span>
                                                    @else
                                                    <span class="badge badge-warning">Diactivated</span>
                                                    @endif

                                                </td>
                                                <td>
                                                    @if($user->status)
                                                    <a href="user_diactivate/{{$user->id}}"  class="user_diactivate btn btn-icon btn-warning" style="padding: 8px;">
                                                        <i class="anticon anticon-lock"></i>
</a>
                                                    @else
                                                    <a href="user_activate/{{$user->id}}" class="user_activate btn btn-icon btn-success" style="padding: 8px;">
                                                        <i class="anticon anticon-unlock"></i>
</a>
                                                    @endif
                                                    <button onclick="sweet('{{$user->id}}')" class="btn btn-icon btn-danger">
                                                        <i class="anticon anticon-delete"></i>
                                                    </button>

                                                    <button type="button" class="viewmodal btn btn-icon btn-secondary" data-toggle="modal" data-target="#exampleModalCenter" data-modelname="{{$user->name}}" data-modelphone="{{$user->phone}}" data-modelemail="{{$user->email}}" data-modelgrade="{{$user->grade}}" data-modeldob="{{$user->dob}}" data-modelschool="{{$user->school}}" data-modelprofile="{{$user->profile}}">
                                                        <i class="anticon anticon-eye"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            @endforeach

                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Name</th>
                                                <th>Image</th>
                                                <th>Grade</th>
                                                <th>Phone</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                    </table>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Content Wrapper END -->


    <script>
        function sweet(id) {

            swal({
                    title: "Are you sure?",
                    text: "Once deleted, you will not be able to recover this imaginary file!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,

                })
                .then((willDelete) => {
                    if (willDelete) {

                        $.ajax({
                            url: "{{ url('user_delete')}}" + '/' + id,
                            type: "GET",
                            success: function() {

                                swal({
                                    title: "Success!",
                                    text: "Poof! Your imaginary file has been deleted!",
                                    type: "success",
                                }).then(
                                    function() {
                                        location.reload();
                                        $('#progress_user_delete').removeClass("d-none");
                                    });

                                $('#progress_user_delete').removeClass("d-none");
                            },
                            error: function() {
                                swal({
                                    title: 'Opps...',
                                    text: 'data.message',
                                    type: 'error',
                                    timer: '1500'
                                })
                            }

                        })


                        // swal("Poof! Your imaginary file has been deleted!", {
                        //     icon: "success",
                        // });
                    } else {
                        swal("Your imaginary file is safe!", {
                            icon: "info",
                        });

                    }
                });
        };
    </script>







    <!-- Modal -->
    <div class="modal fade bd-example-modal-lg" id="exampleModalCenter">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Student Details</h5>
                    <button type="button" class="close" data-dismiss="modal">
                        <i class="anticon anticon-close"></i>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="avatar avatar-image avatar-lg" style="width: 100px; height: 100px;">
                        <img id="modelprofile" src="..." alt="">
                    </div>
                    <br>
                    <br><br>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Name</label>
                            <input type="text" class="form-control" id="modelname" placeholder="Name" readonly>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Phone</label>
                            <input type="text" class="form-control" id="modelphone" placeholder="Phone" readonly>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputAddress">Email</label>
                        <input type="text" class="form-control" id="modelemail" placeholder="Email" readonly>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Grade</label>
                            <input type="text" class="form-control" id="modelgrade" placeholder="Grade" readonly>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Date Of Birth</label>
                            <input type="text" class="form-control" id="modeldob" placeholder="Date Of Birth" readonly>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputAddress">School</label>
                        <input type="text" class="form-control" id="modelschool" placeholder="School" readonly>
                    </div>


                </div>

            </div>
        </div>
    </div>


    <script>
        $('#data-table').DataTable();
    </script>


    <script>
        $('.viewmodal').on('click', function(e) {
            e.preventDefault();
            document.getElementById('modelname').value = $(this).data('modelname');
            document.getElementById('modelphone').value = $(this).data('modelphone');
            document.getElementById('modelemail').value = $(this).data('modelemail');
            document.getElementById('modelgrade').value = $(this).data('modelgrade');
            document.getElementById('modeldob').value = $(this).data('modeldob');
            document.getElementById('modelschool').value = $(this).data('modelschool');
            document.getElementById('modelprofile').src = $(this).data('modelprofile');


        });
    </script>
    @endsection