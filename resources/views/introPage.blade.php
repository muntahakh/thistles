@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<div class="eula-background">

    <div class="container-fluid main-home-content">
        <div class="back-icon">
            <a href=""><img src="{{asset('svg/back.svg')}}" alt="return_back"> Back</a>
        </div>
            <div class="content-center top-heading">
                <div class="center-text">
                    <h1 class="pt-2">4. Long term goals</h1>


                    <div class="modal-container">
                        <div class="interior">
                        <a class="btn" class="modal-links" href="#open-modal"> Basic CSS-Only Modal</a>
                        </div>
                    </div>

                    <div id="open-modal" class="modal-window">
                        <div>
                        <a href="#" title="Close" class="modal-close">Close</a>
                        <h1>INTRODUCTORY PAGES</h1>
                        <p>Getting started</p>
                        <br>
                        <p>Welcome to Tengu, our online NDIS Reassessment Writer for school leavers from Special
                            Developmental Schools or Specialist Schools.</p>

                        <p>Leaving school is a critical time in any person’s life.  And for people with disability who are leaving
                            Special Developmental Schools or Specialist Schools, the funding provided by NDIS will need to be
                            reassessed.  Generally, you will require significantly more NDIS funding to help you to build the
                            capacities you need to take the next step, and to support you during the hours that you were
                            previously in school.  Tengu is here to help you access that funding.</p>

                        <p>Using cutting edge artificial intelligence, Tengu has been programmed specifically to help school
                            leavers from Special Developmental Schools or Specialist Schools to apply for sufficient NDIS funds
                            for the next stage of their lives.</p>

                        <p>Simply complete our questionnaire and Tengu will generate a long form, properly structured Report
                            for you and your support coordinator to review, finalise, and provide to the NDIS as part of your
                            Change of Circumstances application or annual Reassessment. </p>

                        <p><b>We recommend that you use Tengu in conjunction with your support coordinator. </b> If you can, we
                            suggest that you complete the questionnaire first, generate the Report, and then take it to your
                            support coordinator to review, discuss and finalise, before you submit it to the NDIA.  This will help
                            your support coordinator by reducing the amount of time that they need to spend in preparing the
                            Report.  It may also help to reduce the number of hours that your support coordinator will need to
                            charge you. </p>

                        <p>That said, depending on your circumstances, alternatively you may find it helpful to go through the
                            questionnaire together with your support co-ordinator, discuss your answers with them, and
                            complete the form together. </p>

                        <p>If you do not have a support coordinator, then Thistles can help you to find one.  Please email
                            <a href="mailto:info@thistles.com.au">info@thistles.com.au</a></p>

                        </div>
                    </div>


                </div>

                </div>
            </div>


        </div>
            </div>

    </div>


</div>
@endsection
