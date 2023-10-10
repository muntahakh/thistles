<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<form action="{{ route('questions.submit')}}" method="post" id="file__form" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        @if ($list['data']['question']['questions'] !== null && trim($list['data']['question']['questions']) !== '')
        <p class="text-blue">Question: {!! $list['data']['question']['questions'] !!}</p>
        @endif
    </div> <!-- form group -->

    <div class="form-group form-checkbox justify-content-center">
        <p class="text-blue p-3">Yes</p>
        <input type="checkbox" name="checkboxanswer" class="form-check p-3" id="form-check-yes" value="Yes" <?php if (!empty($answer) && !empty($answer->answer) && $answer->answer === 'Yes') echo 'checked'; ?> onclick="handleCheckboxClick(this)">

        <p class="text-blue p-3">No</p>
        <input type="checkbox" name="checkboxanswer" class="form-check p-3" id="form-check-no" value="No" <?php if (!empty($answer) && !empty($answer->answer) && $answer->answer === 'No') echo 'checked'; ?> onclick="handleCheckboxClick(this)">
    </div>

    <script>
        function handleCheckboxClick(checkbox) {
            // Uncheck all checkboxes
            $('input[type="checkbox"]').prop('checked', false);

            // Check the clicked checkbox
            $(checkbox).prop('checked', true);
        }
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








