<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
   <form action="{{ route('questions.submit')}}" method="post" id="file__form" enctype="multipart/form-data">
    @csrf

    <div class="form-group">
        @if ($list['data']['question']['questions'] !== null && trim($list['data']['question']['questions']) !== '')
        <p class="fw-bold ques-font">Question: {!! $list['data']['question']['questions'] !!}</p>
        @endif
    </div> <!-- form group -->


    <div class="form-group">

        <div class="form-icon">
            <textarea class="text-area big pt-3" placeholder="Your answer here" name="answer" cols="50" rows="20" required>{{$answer->answer ?? ''}}</textarea>
            <a href="#" data-toggle="popover" title="{{$list['data']['question']['instructions']}}" data-placement="top" data-content="Some content inside the popover">
                <img src="{{ asset('svg/fi-rr-interrogation.svg')}}" alt=""></a>
        </div>

    </div> <!-- form group -->

    <div class="form-group">
        <img src="{{ asset('svg/fi-rr-dollar.svg')}}" class="dollar-symbol" alt="">
        <input type="number" class="form-field cost-field" name="cost" placeholder="Please enter cost" value="{{$answer->cost ?? ''}}" required>
    </div>

    <input type="hidden" name="quesId" value="{{$list['data']['question']['id']}}">
    <input type="hidden" name="headId" value="{{$list['data']['heading']['id']}}">
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
        <h3>Illustrative Examples</h3>
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

