
<form action="{{ route('questions.submit')}}" method="post" id="file__form" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        @if ($list['data']['question']['questions'] !== null && trim($list['data']['question']['questions']) !== '')
        <p class="text-blue">Question: {!! $list['data']['question']['questions'] !!}</p>
        @endif
    </div> <!-- form group -->

    <div class="form-group form-checkbox justify-content-center">
        <input type="radio" name="radiobutton" value="Yes" <?php if (!empty($answer) && !empty($answer->answer) && $answer->answer === 'Yes') echo 'checked'; ?>>
        <p class="text-blue p-3">Yes</p>

        <input type="radio" name="radiobutton" value="No" <?php if (!empty($answer) && !empty($answer->answer) && $answer->answer === 'No') echo 'checked'; ?>>
        <p class="text-blue p-3">No</p>
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








