@extends('layouts.app')

@section('content')
<div class="eula-background">

    <div class="container-fluid main-home-content pt-5">


            <div class="content-center">
                <div class="center-text">
                    <h1 class="pt-2">2. Reports</h1>
                    <p class="text-green">7% Complete</p>
                </div>
                <div class="reports-container">
                    <form action="{{route('q3')}}" method="post">
                        @csrf

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


                        <div class="drop-zone pt-4" id="dropZone">
                            <p>Drag and drop your documents here.</p>
                        </div>

                        <script>
                            const dropZone = document.getElementById('dropZone');

                            dropZone.addEventListener('dragover', (e) => {
                              e.preventDefault();
                              dropZone.classList.add('highlight');
                            });

                            dropZone.addEventListener('dragleave', () => {
                              dropZone.classList.remove('highlight');
                            });

                            dropZone.addEventListener('drop', (e) => {
                              e.preventDefault();
                              dropZone.classList.remove('highlight');

                              const files = e.dataTransfer.files;
                              handleFiles(files);
                            });

                            function handleFiles(files) {
                              for (const file of files) {
                                console.log('File:', file.name);
                                // Here, you can perform actions with the dropped files
                              }
                            }
                        </script>

                        <div class="container p-3 text-center">
                            <label for="file" class="custom-input fw-bold text-lpink">Select a file from the device</label>
                            <input type="file" class="card-file" id="file-input1">

                            <script>
                                const fileInput = document.getElementById('file-input1');
                                const customButton = document.querySelector('.custom-input');

                                customButton.addEventListener('click', () => {
                                  fileInput.click();
                                });
                            </script>
                        </div>






                        <button type="submit" class="btn-pink">Next Question</button>
                    </form>

                    <div class="signin-link pt-3">
                        <p>Need a break and continue later? <a href="/" >Save progress</a></p>
                    </div>
                </div>
            </div>
        </div>
            </div>

    </div>


</div>

@endsection
