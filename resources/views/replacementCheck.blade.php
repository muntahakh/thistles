
<form action="{{ route('questions.submit')}}" method="post" id="file__form" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        @if ($list['data']['question']['questions'] !== null && trim($list['data']['question']['questions']) !== '')
        <p class="text-blue">Question: {!! $list['data']['question']['questions'] !!}</p>
        @endif
    </div> <!-- form group -->

    <div class="form-group ">
       <div class="radio-button form-checkbox justify-content-center">
            <input type="radio" name="radiobutton" value="Yes">
            <p class="text-blue">Yes</p>
       </div>
       <div class="radio-button form-checkbox justify-content-center">
            <input type="radio" name="radiobutton" value="No">
            <p class="text-blue">No</p>
       </div>
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








