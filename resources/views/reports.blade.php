@extends('layouts.app')

@section('drop_zone')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/min/dropzone.min.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.js"></script>
@endsection


@section('content')



<div class="eula-background">
    <div class="back-icon">
        <a href="{{route('q1')}}"><img src="{{asset('svg/back.svg')}}" alt="return_back"> Back</a>
    </div>
    <div class="container-fluid main-home-content pt-5">


            <div class="content-center">
                <div class="center-text">
                    <h1 class="pt-2">2. Reports</h1>
                    <p class="text-green">7% Complete</p>
                </div>
                <div class="reports-container">
                    {{-- <form action="{{route('q3')}}" method="post">
                        @csrf --}}

                        <div class="fileupload-card">
                            <div class="row">
                                <div class="col-2 my-3">
                                    <img src="{{ asset('svg/fi-sr-document.svg')}}"  alt="">
                                </div>
                                <div class="col-10">
                                    <label for="file" class="fw-bold pt-2">Occupational Therapist Report.pdf</label>
                                    <p>2MB</p>
                                    {{-- <input type="file" class="card-file" id="file-input"> --}}
                                </div>
                            </div>
                        </div>

                        <div class="fileupload-card">
                            <div class="row">
                                <div class="col-2 my-3">
                                    <img src="{{ asset('svg/fi-sr-document.svg')}}"  alt="">
                                </div>
                                <div class="col-10">
                                    <label for="file" class="fw-bold pt-2">School Report.pdf</label>
                                    <p>2MB</p>
                                    {{-- <input type="file" class="card-file" id="file-input"> --}}
                                </div>
                            </div>
                        </div>

                        <div class="fileupload-card">
                            <div class="row">
                                <div class="col-2 my-3">
                                    <img src="{{ asset('svg/fi-sr-document.svg')}}"  alt="">
                                </div>
                                <div class="col-10">
                                    <label for="file" class="fw-bold pt-2">Behaviour-management-ractitionerst Report.docx</label>
                                    <p>2MB</p>
                                    {{-- <input type="file" class="card-file" id="file-input"> --}}
                                </div>
                            </div>
                        </div>

                        <div class="fileupload-card">
                            <div class="row">
                                <div class="col-2 my-3">
                                    <img src="{{ asset('svg/fi-sr-document.svg')}}"  alt="">
                                </div>
                                <div class="col-10">
                                    <label for="file" class="fw-bold pt-2">OtherReport.docx</label>
                                    <p>2MB</p>
                                    {{-- <input type="file" class="card-file" id="file-input"> --}}
                                </div>
                            </div>
                        </div>


                        {{-- <div class="drop-zone pt-4" id="dropZone">
                            <p>Drag and drop your documents here.</p>
                        </div> --}}
                        <div class="container">

                            <form method="post" action="{{url('image/upload/store')}}" enctype="multipart/form-data"
                                          class="dropzone reports-container" id="dropzone">
                                @csrf
                            </form>
                        </div>
                        <script type="text/javascript">
                                Dropzone.options.dropzone =
                                 {
                                    maxFilesize: 12,
                                    renameFile: function(file) {
                                        var dt = new Date();
                                        var time = dt.getTime();
                                       return time+file.name;
                                    },
                                    acceptedFiles: ".jpeg,.jpg,.png,.gif,.pdf   ",
                                    addRemoveLinks: true,
                                    timeout: 50000,
                                    removedfile: function(file)
                                    {
                                        var name = file.upload.filename;
                                        $.ajax({
                                            headers: {
                                                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                                                    },
                                            type: 'POST',
                                            url: '{{ url("image/delete") }}',
                                            data: {filename: name},
                                            success: function (data){
                                                console.log("File has been successfully removed!!");
                                            },
                                            error: function(e) {
                                                console.log(e);
                                            }});
                                            var fileRef;
                                            return (fileRef = file.previewElement) != null ?
                                            fileRef.parentNode.removeChild(file.previewElement) : void 0;
                                    },

                                    success: function(file, response)
                                    {
                                        console.log(response);
                                    },
                                    error: function(file, response)
                                    {
                                       return false;
                                    }
                        };
                        </script>



                        <a href="{{route('q3')}}"><button type="submit" class="btn-pink">Next Question</button></a>
                    {{-- </form> --}}

                    <div class="signin-link pt-3">
                        <p>Need a break and continue later? <a href="{{route('save_progress' , ['qno'=> 'documents'])}}" >Save progress</a></p>
                    </div>
                </div>
            </div>
        </div>
            </div>

    </div>


</div>

@endsection
