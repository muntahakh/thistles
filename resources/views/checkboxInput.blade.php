
<form action="{{ route('questions.submit')}}" method="post" id="file__form" enctype="multipart/form-data">
    @csrf

    <div class="form-group">
        @if ($list['data']['question']['questions'] !== null && trim($list['data']['question']['questions']) !== '')
        <p class="text-blue">Question: {{$list['data']['question']['questions']}}</p>
        @endif
    </div> <!-- form group -->

    <div class="form-group form-checkbox">

        <p class="text-blue pt-2">Yes</p>
        <input type="checkbox" name="checkboxanswer" class="form-check" value="Yes">

        <p class="text-blue pt-2">No</p>
        <input type="checkbox" name="checkboxanswer" class="form-check" value="No">

    </div> <!-- form group -->

        <script>
            $(document).ready(function() {
                $('.form-check').click(function() {
                    if ($(this).is(':checked')) {

                        $('.form-check').not(this).prop('checked', false);
                    }
                });
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
