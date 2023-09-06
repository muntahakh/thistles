@extends('layouts.app')

@section('drop_zone')
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/min/dropzone.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/min/dropzone.min.css">
@endsection

@section('content')

<div class="eula-background">

    <div class="container-fluid main-home-content pt-5">
        <div class="back-icon">
            <a href="{{route('q1')}}"><img src="{{asset('svg/back.svg')}}" alt="return_back"> Back</a>
        </div>
            <div class="content-center">
                <div class="center-text">
                    <h1 class="pt-2">2. Reports</h1>
                    <p class="text-green">7% Complete</p>
                </div>

                {{-- flash messages --}}
                @if(session('success'))
                <div class="container d-flex justify-content-center" style="width: 45%">
                    <div class="success" id="alert-message">
                        {{ session('success') }}
                    </div>
                </div>
                @endif
                @if(session('error'))
                <div class="container d-flex justify-content-center" style="width: 70%">
                    <div class="error" id="alert-message">
                        {{ session('error') }}
                    </div>
                </div>
                @endif

                <div class="reports-container">
                    <p class="text-center">Note: Please upload Occupational Therapist Report, School Report,
                        Behaviour-Management-Ractitionerst Report, and Other Reports.
                    </p>
                @foreach ($documents as $document)
                    @foreach ($reports as $report)
                    <div class="fileupload-card">
                        <div class="row">
                            <div class="col-2 mx-3 pt-3">
                                <img src="{{ asset('svg/fi-sr-document.svg')}}"  alt="">
                            </div>
                            <div class="col-7">
                                <label for="file" class="fw-bold pt-2">{{$report ? $report->file_name : '' }}</label>
                                <p>{{$document ? $document->file_size : '' }}</p>
                            </div>
                            <div class="col-2 pt-3">
                                <a href="{{route('document.delete', ['id'=>$document->id ])}}" class="cursor-pointer">
                                    <img src="{{asset('svg/fi-rr-cross-small.svg')}}" alt=""></a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                @endforeach



                <form method="post" action="{{ route('document.upload') }}" enctype="multipart/form-data"
                                class="dropzone" id="myDropzone">
                    @csrf
                     <div class="dz-default dz-message">
                        <button class="dz-button" type="button">Drag and drop your documents here.</button>
                    </div>
                </form>

                <script>

                    Dropzone.autoDiscover = false;
                    const myDropzone = new Dropzone("#myDropzone", {
                    paramName: "file",
                    autoProcessQueue: true,
                    maxFiles: 1,
                    init: function () {
                        this.on("success", function (file, response) {
                        file.previewElement.style.display = "none";

                        document.querySelector("#myDropzone .dz-message").style.display = "block";
                        console.log(response);
                        });
                        this.on("error", function (file, response) {
                        console.log(response);
                        });
                        this.on("addedfile", function (file) {
                        if (this.files.length > this.options.maxFiles) {
                            const exceededFile = this.files[0];
                            this.removeFile(exceededFile);

                        }
                        });

                        this.on("addedfile", function (file) {
                        if (this.getQueuedFiles().length > 0) {
                            this.processQueue();

                        }
                        });
                    },
                    });


                </script>

                <form method="POST" action="{{route('document.upload')}}" enctype="multipart/form-data" id="fileform">
                        @csrf
                        <input type="file" name="file" id="document-input">

                        <p class="custom-select-file text-center">Select a file from the device</p>

                            <script>
                                const fileInput1 = document.getElementById('document-input');
                                const customButton1 = document.querySelector('.custom-select-file');
                                fileInput1.style.display = 'none';

                                customButton1.addEventListener('click', () => {
                                    fileInput1.click();
                                });
                                fileInput1.addEventListener('change', () => {
                                    document.getElementById('fileform').submit();
                                });

                            </script>
                </form>

                <a href="{{route('q3')}}"><button type="button" class="btn-pink">Next Question</button></a>

                <div class="signin-link pt-3">
                    <p>Need a break and continue later? <a href="{{route('save_progress' , ['qno'=> 'documents'])}}" >Save progress</a></p>
                </div>
            </div>

    </div>
            </div>

    </div>

@endsection
