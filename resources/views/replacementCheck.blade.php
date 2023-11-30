
<form action="{{ route('questions.submit')}}" method="post" id="file__form" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        @if ($list['data']['question']['questions'] !== null && trim($list['data']['question']['questions']) !== '')
        <center><p class="ques-font">Question: {!! $list['data']['question']['questions'] !!}</p></center>
        @endif
    </div> <!-- form group -->

    <center>
    <div class="form-group radio-checkbox">
        <input type="radio" name="radiobutton" value="Yes" <?php if (!empty($answer) && !empty($answer->answer) && $answer->answer === 'Yes') echo 'checked'; ?>>
        <p>Replacement</p>

        <input type="radio" name="radiobutton" value="No" <?php if (!empty($answer) && !empty($answer->answer) && $answer->answer === 'No') echo 'checked'; ?>>
        <p>New</p>
    </div>
    </center>


    <input type="hidden" name="quesId" value="{{$list['data']['question']['id']}}">
    <input type="hidden" name="headId" value="{{$list['data']['heading']['id']}}">
    <input type="hidden" value="{{ url($list['url'] ?? '/compiled')}}" name="url">

    @if(session('error'))
        <div class="text-red error-fs" id="alert-message">
            *{{ session('error') }}
        </div>
    @endif

    <div class="submit-illustrative-exp">
       @if ($list['data']['question']['instructions'] == null)
            <center><button type="submit" id="form-submit" class="btn-pink form-button-pink">Next Question</button></center>
            @else
            <p><button type="submit" id="form-submit" class="btn-pink form-button-pink">Next Question</button>&nbsp;&nbsp;
            @endif
        @if ($list['data']['question']['instructions'] !== null && trim($list['data']['question']['instructions']) !== '')
            Want some illustrative examples of what to write?
            <a href="#open-modal" onclick="showModal()" class="modal-btn-width save_progress text-decoration-none fw-bold">Click here</a>
            </p>
        @endif
    </div>

</form> <!-- main form -->

{{-- Illustrative example Modal  --}}
<div id="open-modal" class="modal-window">
    <div class="intro-pages">
        <a href="#" title="Close" class="modal-close text-decoration-none">X</a>
        <h3>Illustrative Examples</h3>
        <br>
        <i>You can copy and paste any relevant examples straight into the
            questionnaire if that will assist.</i>
        <p id="textCopy">{!! $list['data']['question']['instructions'] !!}</p>
        {{-- <button class="outline-button" id="copyButton" onclick="copyText()">Copy Text</button> --}}
    </div>
</div>


{{-- <script>
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
  </script> --}}








