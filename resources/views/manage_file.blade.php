@extends('layouts.back')

@section('content')


<!-- Page Container START -->
<div class="page-container">


    <!-- Content Wrapper START -->



    <!-- Content Wrapper START -->
    <div class="main-content">

    <div class="alert alert-danger d-none" id="progress_user_delete">
                    <div class="d-flex align-items-center justify-content-start">
                        <span class="alert-icon">
                            <i class="anticon anticon-check-o"></i>
                        </span>
                        <span>File Delete Sucessfully</span>
                    </div>
                </div>


        <div class="file-manager-wrapper">
            <div class="file-manager-nav">
                <div class="d-flex flex-column justify-content-between h-100">
                    <div class="p-t-20">
                        <ul class="menu nav flex-column">
                            <li class="nav-item">
                                <a href="#" class="btnpdffilelist nav-link active" onclick="pdffilelist();">
                                    <i class="anticon anticon-file-pdf text-danger"></i>
                                    <span class="text-danger">PDF</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="btnwordfilelist nav-link" onclick="wordfilelist();">
                                    <i class="anticon anticon-file-word text-primary"></i>
                                    <span class="text-primary">Word</span>
                                </a>
                            </li>



                        </ul>
                    </div>
                    <!-- <div class="m-b-30 m-h-25">
                                    <div class="d-flex justify-content-between">
                                        <span class="text-gray">Free Space</span>
                                        <span class="text-gray">30%</span>
                                    </div>
                                    <div class="progress progress-sm m-t-10">
                                        <div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="m-t-15">
                                        <button class="btn btn-default w-100">
                                            <i class="anticon anticon-upload"></i>
                                            <span class="m-l-5">Upgrade</span>
                                        </button>
                                    </div>
                                </div> -->
                </div>
            </div>
            <div class="file-manager-content">
                <div class="file-manager-content-body">


                    <div class="file-manager-content-files">
                        <div class="unselect-bg"></div>
                        <h5 class="relative">Files</h5>
                        <!-- PDF  -->

                        <div class="pdffilelist file-wrapper m-t-20">
                            @foreach($pdffiles as $pdffile)
                            <div class="file vertical" onclick="pdffilelistitem('{{$pdffile->id}}','{{$pdffile->name}}','{{$pdffile->extension}}','{{$pdffile->file_size}}','{{$pdffile->author}}','{{$pdffile->created_at}}','{{$pdffile->file_path}}');">
                                <div class="font-size-40">
                                    <i class="anticon anticon-file-pdf text-danger"></i>
                                </div>
                                <div class="m-t-10">
                                    <h6 class="mb-0">{{$pdffile->name}}</h6>
                                    <span class="font-size-13 text-muted">{{$pdffile->file_size}}</span>
                                    <br>
                                    <span class="font-size-13 text-muted">
                                        @if($pdffile->grade=='0')
                                        All
                                        @else
                                        Grade : {{$pdffile->grade}}
                                        @endif
                                    </span>
                                </div>
                            </div>
                            @endforeach
                        </div>



                        <!-- WORD -->

                        <div class="wordfilelist file-wrapper m-t-20 d-none">
                            @foreach($wordfiles as $wordfile)
                            <div class="file vertical" onclick="wordfilelistitem('{{$wordfile->id}}','{{$wordfile->name}}','{{$wordfile->extension}}','{{$wordfile->file_size}}','{{$wordfile->author}}','{{$wordfile->created_at}}','{{$wordfile->file_path}}');">
                                <div class="font-size-40">
                                    <i class="anticon anticon-file-word text-primary"></i>
                                </div>
                                <div class="m-t-10">
                                    <h6 class="mb-0">{{$wordfile->name}}</h6>
                                    <span class="font-size-13 text-muted">{{$wordfile->file_size}}</span>
                                    <br>
                                    <span class="font-size-13 text-muted">
                                        @if($wordfile->grade=='0')
                                        All
                                        @else
                                        Grade : {{$wordfile->grade}}
                                        @endif
                                    </span>
                                </div>
                            </div>
                            @endforeach
                        </div>




                    </div>


                    <div class="file-manager-content-details">



                        <div class="content-details d-none">
                            <div class="p-h-25 p-v-15 d-flex justify-content-between align-items-center border-bottom">
                                <h5 class="m-b-0" id="filename">App Flow.pdf</h5>
                                <div class="content-details-close">
                                    <a class="text-dark" href="javascript:void(0);">
                                        <i class="anticon anticon-right-circle"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="m-b-10">
                                <div class="d-flex justify-content-around display-3 align-items-center content-details-file">
                                    <i class="pdficondetails anticon anticon-file-pdf text-danger d-none"></i>
                                    <i class="wordicondetails anticon anticon-file-word text-primary d-none"></i>
                                </div>
                            </div>

                            <ul class="nav nav-tabs nav-justified" id="myTab" role="">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#tab-details">Details</a>
                                </li>

                            </ul>
                            <div class="tab-content m-t-15" id="myTabContent">
                                <div class="tab-pane fade show active" id="tab-details">
                                    <div class="p-h-25 p-v-15">
                                        <dl class="row m-b-10">
                                            <dt class="col-5 text-dark">Name:</dt>
                                            <dd class="col-7" id="ddname">pasdasddf</dd>
                                        </dl>
                                        <dl class="row m-b-10">
                                            <dt class="col-5 text-dark">Type:</dt>
                                            <dd class="col-7" id="ddextension">pasdasddf</dd>
                                        </dl>
                                        <dl class="row m-b-10">
                                            <dt class="col-5 text-dark">Size:</dt>
                                            <dd class="col-7" id="ddsize">19.8MB</dd>
                                        </dl>
                                        <dl class="row m-b-10">
                                            <dt class="col-5 text-dark">Created:</dt>
                                            <dd class="col-7" id="ddcreated">Feb 17, 2019</dd>
                                        </dl>
                                        <dl class="row m-b-10">
                                            <dt class="col-5 text-dark">Author:</dt>
                                            <dd class="col-7" id="ddauthor">Erin Gonzales</dd>
                                        </dl>
                                        <br>
                                        <a href="#" download id="trigger-loading-1" class="btn btn-success m-r-5" style="width: 100%;">
                                            <i class="anticon anticon-cloud-download m-r-5"></i>
                                            <span>Download</span>
                                        </a>
                                        <br>
                                        <br>
                                        @if(auth()->user()->is_admin)
                                        <a href="#" onclick="" id="deletebuttonlink" download id="trigger-loading-1" class="btn btn-danger m-r-5" style="width: 100%;">
                                        <i class="anticon anticon-delete m-r-5"></i>
                                            <span>Delete</span>
                                        </a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>




                        <div class="content-details-no-data">
                            <div class="text-center">
                                <img class="img-fluid opacity-04" src="assets/images/others/file-manager.png" alt="">
                                <p class="text-muted m-t-20">Select folder or file to view details</p>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>





</div>
<!-- Content Wrapper END -->


<script type="text/javascript">
    function pdffilelist() {
        $('.pdffilelist').removeClass('d-none');
        $('.wordfilelist').addClass('d-none');
        $('.btnpdffilelist').addClass('active');
        $('.btnwordfilelist').removeClass('active');
    }

    function wordfilelist() {
        $('.wordfilelist').removeClass('d-none');
        $('.pdffilelist').addClass('d-none');
        $('.btnwordfilelist').addClass('active');
        $('.btnpdffilelist').removeClass('active');
    }

    function pdffilelistitem(id,name, extension, size, author, created_at, parth) {
        $('.pdficondetails').removeClass('d-none');
        $('.wordicondetails').addClass('d-none');
        $('.content-details').removeClass('d-none');
        $('#ddextension').text(extension);
        $('#ddname').text(name);
        $('#ddsize').text(size);
        $('#ddcreated').text(created_at);
        $('#ddauthor').text(author);
        $('#filename').text(name);
        $("#trigger-loading-1").attr("href", parth);
        $("#deletebuttonlink").attr("onclick", "sweet("+id+")");
    }

    function wordfilelistitem(id,name, extension, size, author, created_at, parth) {
        $('.wordicondetails').removeClass('d-none');
        $('.pdficondetails').addClass('d-none');
        $('.content-details').removeClass('d-none');
        $('#ddextension').text(extension);
        $('#ddname').text(name);
        $('#ddsize').text(size);
        $('#ddcreated').text(created_at);
        $('#ddauthor').text(author);
        $('#filename').text(name);
        $("#trigger-loading-1").attr("href", parth);
        $("#deletebuttonlink").attr("onclick", "sweet("+id+")");
    }
</script>


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
                            url: "{{ url('file_delete')}}" + '/' + id,
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




@endsection