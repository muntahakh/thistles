<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<form action="{{ route('questions.submit')}}" method="post" id="file__form" enctype="multipart/form-data">
    @csrf

    <div class="form-group">
        @if ($list['data']['question']['questions'] !== null && trim($list['data']['question']['questions']) !== '')
        <p class="ques-font">Question: {!! $list['data']['question']['questions'] !!}</p>
        @endif
    </div>

    <!-- form group -->
    <div class="form-group">
        <textarea class="text-area big pt-3" id="statement-answer" placeholder="Your answer here" name="answer" cols="50" rows="20">{{$answer->answer ?? ''}}</textarea>
    </div> <!-- form group -->

    <!-- form group -->
    <div class="fileupload-card custom-select-file" id="statement-upload">
        <div class="row">
            <div class="col-3 mx-3 pt-3">
                <img src="{{ asset('svg/fi-sr-document.svg')}}"  alt="">
            </div>
            <div class="col-8 ">
                <label for="file" class="fw-bold pt-3">{{$answer->file_name ?? 'upload-file.docx' }}</label>
            </div>
        </div>
    </div>

    <button type="button" onclick="showStatementInput()" id="show-statement-button" class="button-white" >Or upload a document instead</button>

    <script>
        function showStatementInput(){
            var statementUpload = document.getElementById('statement-upload');
            var statementInput = document.getElementById('statement-answer');
            var statementButton = document.getElementById('show-statement-button');


            if(statementButton.innerHTML === "Write statement instead"){
                statementUpload.style.display ='none';
                statementInput.style.display ='block';
                statementButton.innerHTML = "Or upload a document instead";
            }
            else{
                statementUpload.style.display ='block';
                statementInput.style.display ='none';
                statementButton.innerHTML = "Write statement instead";
            }

        }
    </script>

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

    <div class="submit-illustrative-exp">
        <p><button type="submit" id="form-submit" class="btn-pink form-button-pink">Next Question</button>&nbsp;&nbsp;
        @if ($list['data']['question']['instructions'] !== null && trim($list['data']['question']['instructions']) !== '')
            Want some illustrative examples of what to write?
            <a href="#open-modal" class="modal-btn-width save_progress text-decoration-none fw-bold">Click here</a>
            </p>
        @endif
    </div>

</form> <!-- main form -->
{{-- Illustrative example Modal  --}}
<div id="open-modal" class="modal-window">
    <div class="intro-pages">
        <a href="#" title="Close" class="modal-close text-decoration-none">X</a>
        <h3>Illustrative Examples</h3><br><br>
        <i>You can copy and paste any relevant examples straight into the
            questionnaire if that will assist</i>
        <p id="textCopy">{!! $list['data']['question']['instructions'] !!}</p>
        <button class="outline-button" id="copyButton" onclick="copyText()">Copy Text</button>
    </div>
</div>


<script>
    function copyText() {
      var copyText = document.getElementById("textCopy");
      var range = document.createRange();
      var closeModalOnCopyText = document.getElementById('open-modal');
      range.selectNode(copyText);
      window.getSelection().removeAllRanges();
      window.getSelection().addRange(range);
      document.execCommand("copy");
      console.log(copyText.value);
      copyButton.innerHTML = "Copied";
      setTimeout(function(){
        closeModalOnCopyText.style.display = 'none';
        copyButton.innerHTML = "Copy text";
      }, 2000);
    }
  </script>
