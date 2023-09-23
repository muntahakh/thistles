
@extends('layouts.app')
@section('content')


<div class="eula-background">

    <div class="container-fluid main-home-content">
        <div class="back-icon">
            <a href=""><img src="{{asset('svg/back.svg')}}" alt="return_back"> Back</a>
        </div>
            <div class="content-center questions-section">
                <div class="center-text">
                    <h1 class="pt-2">BACKGROUND</h1>
                    <div class="guidance-container">
                        <p class="guidance-notes"><b class="fw-bold">Guidance notes:</b>  The purpose of this part is to provide the NDIA with a brief overview of your life to
                            date, and how your life has been impacted by disability.  There is no need to provide a detailed
                            medical description of your disability.  The NDIA is more interested in how that disability affects your
                            life in the areas of mobility, communication, social interaction, self-management, learning, and self-
                            care.  Remember to describe yourself on a bad day, rather than when they are at your best. </p>
                    </div>
                </div>
                <div class="questions-container">
                    <form action="" method="post">
                        @csrf
                        <div class="form-group">
                        <p class="text-blue">Question: Describe the aids and equivalent that is required (including assistive technology)</p>
                        <div class="form-icon">
                            <textarea class="text-area big pt-3" placeholder="e.ag. Lorem ipsum" name="metadata" cols="50" rows="20" required></textarea>
                            {{-- <button type="button" class="" data-container="body" data-toggle="popover" data-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">

                              </button> --}}
                              {{-- <a href="#" data-toggle="popover" title="Popover Header" data-content="Some content inside the popover">
                                <img src="{{ asset('svg/fi-rr-interrogation.svg')}}" alt=""></a>
                              <script>
                                $(document).ready(function(){
                                  $('[data-toggle="popover"]').popover();
                                });
                                </script> --}}

                                    <a href="#" ><img class="custom-popover-trigger" src="{{ asset('svg/fi-rr-interrogation.svg')}}" alt=""></a>
                                    <div class="custom-popover">
                                      <h3>Popover Header</h3>
                                      <p>Some content inside the popover.</p>
                                    </div>

                                <script>
                                    document.addEventListener("DOMContentLoaded", function () {
                                    const popoverTrigger = document.querySelector(".custom-popover-trigger");
                                    const customPopover = document.querySelector(".custom-popover");

                                    popoverTrigger.addEventListener("click", function (e) {
                                    e.preventDefault();

                                    // Toggle the display of the custom popover
                                    if (customPopover.style.display === "block") {
                                        customPopover.style.display = "none";
                                    } else {
                                        customPopover.style.display = "block";
                                    }
                                    });

                                    // Close the popover when clicking outside of it
                                    document.addEventListener("click", function (event) {
                                    if (customPopover.style.display === "block" && event.target !== popoverTrigger && !customPopover.contains(event.target)) {
                                        customPopover.style.display = "none";
                                    }
                                    });
                                    });

                                </script>
                        </div>

                            @if(session('error'))
                                <div class="text-red error-fs" id="alert-message">
                                    *{{ session('error') }}
                                </div>
                            @endif
                        </div>
                        <input type="hidden" name="next_route" value="q15">
                        <input type="hidden" name="current_route" value="q14">
                        <button type="submit" class="btn-pink">Next Question</button>
                    </form>

                    <div class="signin-link pt-3">
                        <p>Need a break and continue later? <a href="" >Save progress</a></p>
                    </div>
                </div>
            </div>
        </div>
            </div>

    </div>


</div>

@endsection
