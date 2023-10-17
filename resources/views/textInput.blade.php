<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
   <form action="{{ route('questions.submit')}}" method="post" id="file__form" enctype="multipart/form-data">
    @csrf

    <div class="form-group">
        @if ($list['data']['question']['questions'] !== null && trim($list['data']['question']['questions']) !== '')
        <p class="fw-bold ques-font">Question: {!! $list['data']['question']['questions'] !!}</p>
        @endif
    </div>

    <!-- form group -->
    <div class="form-group">
        <textarea class="text-area big pt-3" placeholder="e.ag. Lorem ipsum" name="answer" cols="50" rows="20" required>{{$answer->answer ?? ''}}</textarea>
    </div> <!-- form group -->

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

    {{-- Illustrative example Modal  --}}
    <div id="open-modal" class="modal-window">
        <div class="intro-pages">
            <a href="#" title="Close" class="modal-close text-decoration-none">X</a>
            <h3>Illustrative Examples</h3>
            <p>{!! $list['data']['question']['instructions'] !!}</p>
        </div>
    </div>

</form> <!-- main form -->
