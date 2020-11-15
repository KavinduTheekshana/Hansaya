@extends('layouts.back')

@section('content')


<!-- Page Container START -->
<div class="page-container">


    <!-- Content Wrapper START -->



    <!-- Content Wrapper START -->
    <div class="main-content">




        <div class="file-manager-wrapper">
            <div class="file-manager-content" style="float: left; width: calc(100% - 0px);">
                <div class="file-manager-content-body">
                    <div class="file-manager-content-files">
                        <div class="unselect-bg"></div>
                        <div class="pdffilelist file-wrapper m-t-20">
                            @foreach($wordfiles as $pdffile)
                            <div class="file vertical">
                                <a href="{{$pdffile->file_path}}">
                                    <div class="font-size-40">
                                        <i class="anticon anticon-file-word text-primary"></i>
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
                                </a>
                            </div>
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>





</div>
<!-- Content Wrapper END -->






@endsection