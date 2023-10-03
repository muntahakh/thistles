<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
   <form action="{{ route('questions.submit')}}" method="post" id="file__form" enctype="multipart/form-data">
    @csrf

    <div class="form-group">
        @if ($list['data']['question']['questions'] !== null && trim($list['data']['question']['questions']) !== '')
        <p class="text-blue">Question: {!! $list['data']['question']['questions'] !!}</p>
        @endif
    </div> <!-- form group -->


    <div class="form-group">

        <div class="form-icon">
            <textarea class="text-area big pt-3" placeholder="e.ag. Lorem ipsum" name="answer" cols="50" rows="20">{{$answer->answer ?? ''}}</textarea>
            <a href="#" data-toggle="popover" title="{{$list['data']['question']['instructions']}}" data-placement="top" data-content="Some content inside the popover">
                <img src="{{ asset('svg/fi-rr-interrogation.svg')}}" alt=""></a>
        </div>

    </div> <!-- form group -->

    <div class="form-group">
        <input type="text" class="form-field" name="cost" placeholder="Please enter cost" value="{{$answer->cost ?? ''}}">
    </div>

    <input type="hidden" name="quesId" value="{{$list['data']['question']['id']}}">
    <input type="hidden" name="headId" value="{{$list['data']['heading']['id']}}">
    <input type="hidden" value="{{ url($list['url'] ?? '/compiled')}}" name="url">

        @if(session('error'))
            <div class="text-red error-fs" id="alert-message">
                *{{ session('error') }}
            </div>
        @endif

    <button type="submit" id="form-submit" class="btn-pink form-button-pink">Next Question</button>
</form> <!-- main form -->
