<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<form action="{{ route('questions.submit')}}" method="post" id="file__form" enctype="multipart/form-data">
    @csrf

    <div class="form-group">
        @if ($list['data']['question']['questions'] !== null && trim($list['data']['question']['questions']) !== '')
        <p class="text-blue">Question: {!! $list['data']['question']['questions'] !!}</p>
        @endif
    </div> <!-- form group -->

    <div class="fileupload-card custom-select-file">
        <div class="row">
            <div class="col-3 mx-3 pt-3">
                <img src="{{ asset('svg/fi-sr-document.svg')}}"  alt="">
            </div>
            <div class="col-8 ">
                <label for="file" class="fw-bold pt-3">{{$answer->file_name ?? 'upload-file.docx' }}</label>
            </div>
        </div>
    </div>
    <input type="file" name="file" id="document-input">


    <script>
        const fileInput1 = document.getElementById('document-input');
        const customButton1 = document.querySelector('.custom-select-file');
        const form1 = document.getElementById('fileform');
        const submitButton = document.getElementById('form-submit');
        fileInput1.style.display = 'none';

        customButton1.addEventListener('click', () => {
            fileInput1.click();
        });

        submitButton.addEventListener('click', () => {
            form1.submit();
        });

    </script>

<input type="hidden" name="quesId" value="{{$list['data']['question']['id']}}">
<input type="hidden" value="{{ url($list['url'] ?? '/compiled')}}" name="url">

    @if(session('error'))
        <div class="text-red error-fs" id="alert-message">
            *{{ session('error') }}
        </div>
    @endif

<button type="submit" id="form-submit" class="btn-pink form-button-pink">Next Question</button>
</form> <!-- main form -->
