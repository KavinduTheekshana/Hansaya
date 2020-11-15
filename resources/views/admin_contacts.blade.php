@extends('layouts.back')

@section('content')


<!-- Page Container START -->
<div class="page-container">


    <!-- Content Wrapper START -->
    <div class="main-content">
        <div class="page-header">
            <h2 class="header-title">Contacts</h2>
            <div class="header-sub-title">
                <nav class="breadcrumb breadcrumb-dash">
                    <a href="#" class="breadcrumb-item"><i class="anticon anticon-home m-r-5"></i>Home</a>
                    <span class="breadcrumb-item active">Contacts</span>
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
                <h4>Contacts Messagers</h4>


                <table id="data-table" class="table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($contatcs as $contatc)
                        <tr>
                            <td>{{$contatc->name}}</td>
                            <td>{{$contatc->email}}</td>
                            <td>{{$contatc->phone}}</td>
                            <td>{{$contatc->created_at}}</td>
                            

                            <td>
                                <button type="button" class="viewmodal btn btn-icon btn-secondary" data-toggle="modal" data-target="#exampleModalCenter" data-modelname="{{$contatc->name}}" data-modelphone="{{$contatc->phone}}" data-modelemail="{{$contatc->email}}" data-modelmessage="{{$contatc->message}}">
                                    <i class="anticon anticon-eye"></i>
                                </button>


                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                </table>




            </div>
        </div>




    </div>


    <!-- Modal -->
    <div class="modal fade bd-example-modal-lg" id="exampleModalCenter">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Message</h5>
                    <button type="button" class="close" data-dismiss="modal">
                        <i class="anticon anticon-close"></i>
                    </button>
                </div>
                <div class="modal-body">
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
                    



                    <div class="form-group">
                        <label for="formGroupExampleInput">Add Your Link Here</label>
                        <textarea id="modelmessage" name="link" cols="60" rows="10" readonly disabled></textarea>

                    </div>


                </div>

            </div>
        </div>
    </div>


    <!-- Content Wrapper END -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/froala-editor@latest/js/froala_editor.pkgd.min.js"></script>

    <!-- <script>
        new FroalaEditor('textarea');
    </script> -->


    <script>
        $('#data-table').DataTable();
    </script>


    <script>
        $('.viewmodal').on('click', function(e) {
            e.preventDefault();
            document.getElementById('modelname').value = $(this).data('modelname');
            document.getElementById('modelphone').value = $(this).data('modelphone');
            document.getElementById('modelemail').value = $(this).data('modelemail');
            document.getElementById('modelmessage').value = $(this).data('modelmessage');


        });
    </script>



    @endsection