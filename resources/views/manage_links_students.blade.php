@extends('layouts.back')

@section('content')





<!-- Page Container START -->
<div class="page-container">


    <!-- Content Wrapper START -->




    <div class="main-content">


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


        <div class="alert alert-danger d-none" id="progress_user_delete">
                    <div class="d-flex align-items-center justify-content-start">
                        <span class="alert-icon">
                            <i class="anticon anticon-check-o"></i>
                        </span>
                        <span>Link Delete Sucessfully</span>
                    </div>
                </div>

        <div class="mail-wrapper">
            <div class="mail-nav" id="mail-nav">
                <div class="p-h-25 m-t-25">
                    <div class="p-b-15 d-md-none d-inline-block">
                        <a class="text-dark font-size-18 mail-close-nav" href="javascript:void(0);">
                            <i class="anticon anticon-menu-fold"></i>
                        </a>
                    </div>
      
                </div>
                <div class="p-v-15">
                    <ul class="menu nav flex-column">
                        <li class="nav-item">
                            <a href="#" id="btnsentlinkid" class="btnsentlinkid nav-link active" onclick="btnsentlink()">
                                <i class="anticon anticon-inbox"></i>
                                <span>Inbox</span>
                            </a>
                        </li>
                    </ul>

                </div>
            </div>



            <div id="mail-list" class="mail-list mail-content">
                <div class="p-h-10 p-v-5 d-md-none d-inline-block">
                    <a class="text-dark font-size-18 mail-open-nav" href="javascript:void(0);">
                        <i class="anticon anticon-menu-unfold"></i>
                    </a>
                </div>
                <div class="row d-flex align-items-center justify-content-between p-10">


                </div>
                <div>
                    <h5 class="m-b-20">Sent Links</h5>

                    @foreach($links as $link)
                    <div class="mail-list" onclick="singllink('{{$link->id}}','{{$link->link}}','{{$link->grade}}','{{$link->created_at}}')">
                        <table class="table list-info">
                            <tr>
                                <td class="list-sender">
                                    <div class="media align-items-center">
                                        <div class="avatar avatar-image avatar-sm">
                                            <img src="{{ auth()->user()->profile }}" alt="">
                                        </div>
                                        <h6 class="m-l-10 m-b-0">Grade: {{$link->grade}}</h6>
                                    </div>
                                </td>
                                <td class="list-content">
                                    <div class="list-msg">
                                        <span class="list-title">{{$link->created_at}}</span>
                                        <span class="m-h-5 d-none d-lg-inline-block"> - </span>
                                        <span class="list-text text-gray">
                                            @if (strlen(strip_tags($link->link)) > 70)
                                            {!! substr(strip_tags($link->link), 0, 70) !!} ...
                                            @else
                                            {!! substr(strip_tags($link->link), 0, 70) !!}
                                            @endif
                                        </span>
                                    </div>
                                </td>

                            </tr>
                        </table>
                    </div>
                    @endforeach






                </div>

            </div>




            <!-- content  -->

            <div id="mail-content" class="mail-content mailcontentnew d-none">
                <div class="d-lg-flex align-items-center justify-content-between">
                    <div class="media align-items-center m-b-15">
                        <a id="back" class="text-gray m-r-15 font-size-18" href="javascript:void(0);" onclick="btnsentlink()">
                            <i class="anticon anticon-left-circle"></i>
                        </a>
                        <div class="avatar avatar-image">
                            <img src="{{ auth()->user()->profile }}" alt="">
                        </div>
                        <div class="m-l-10">
                            <h6 class="m-b-0">{{ auth()->user()->name }}</h6>
                            <!-- <span class="text-muted font-size-13">To: nathan@themenate.com</span> -->
                        </div>
                    </div>
                    <div class="d-flex align-items-center m-b-15 p-l-30">
                        <span id="timeanddate" class="text-gray m-r-15">12:06PM</span>

                        <a id="deletebuttonlink" onclick="" href="#" class="text-gray font-size-18 m-r-20">
                            <i class="far fa-trash-alt"></i>
                        </a>
                    </div>
                </div>
                <div class="m-t-30 p-h-30">
                    <h4 id="titlecontent">All flight trooper</h4>
                    <div class="m-t-30">
                        <!-- <p id="linkcontentbody">Hi Erin,</p> -->
                        <p id="linkcontentbody">This is a <b>bold</b> paragraph.</p>
                        <!-- <div id="linkcontentbody"></div> -->

                    </div>
                    <div class="m-t-30">

                    </div>
                </div>
            </div>





            <div id="mail-compose" class="mail-compose mail-content d-none">
                <div class="p-b-15 m-r-15 d-md-none d-inline-block">
                    <a class="text-dark font-size-18 mail-open-nav" href="javascript:void(0);">
                        <i class="anticon anticon-menu-unfold"></i>
                    </a>
                </div>
                <h5 class="m-b-20">Create Link</h5>
                <form action="{{route('save_link')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="formGroupExampleInput">Grade</label>
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


                    <div class="form-group">
                        <label for="formGroupExampleInput">Add Your Link Here</label>
                        <textarea name="link"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Sent Invite Link</button>


                </form>

            </div>





        </div>
    </div>
    <!-- Content Wrapper END -->


    <!-- Content Wrapper END -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/froala-editor@latest/js/froala_editor.pkgd.min.js"></script>

    <script>
        new FroalaEditor('textarea');
    </script>


    <script type="text/javascript">
        function btncreatelink() {
            $('.mail-compose').removeClass('d-none');
            $('.mail-list').addClass('d-none');
            $('.btnsentlinkid').removeClass('active');
            $('.mailcontentnew').addClass('d-none');

        }

        function btnsentlink() {
            $('.mail-list').removeClass('d-none');
            $('.mail-compose').addClass('d-none');
            $('.btnsentlinkid').addClass('active');
            $('.mailcontentnew').addClass('d-none');

        }

        function singllink(id,link, grade, time) {
            $('.mailcontentnew').removeClass('d-none');
            $('.mail-compose').addClass('d-none');
            $('.mail-list').addClass('d-none');
            $('.btnsentlinkid').removeClass('active');
            $('#timeanddate').text(time);
            $('#titlecontent').text("For Grade " + grade + " Students");
            // $('#linkcontentbody').text(link);

            $("#linkcontentbody").html(function() {
                return link;
            });
            // $parth = "sweet("+id+")";
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
                            url: "{{ url('link_delete')}}" + '/' + id,
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