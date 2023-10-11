@extends('layouts.app')

@section('content')
<div class="eula-background">

    <div class="container-fluid main-home-content">
        <div class="row">
            {{-- backgroud image --}}
            <div class="col-md-12 col-lg-8 col-sm-12 content-center">
                <div class="center-text">
                    <img src="{{ asset('Images/disabled student-rafiki 1.png') }}"  class="img-fluid home-img" alt="">
                    <h1 class="pt-2">Let’s Get Started</h1>
                    <div class="pt-4">
                        @if (!isset($answer))
                            <div class="modal-container">
                                <div class="interior">
                                    <a href="#open-modal" class="modal-btn-width"> <button class="btn-pink">Start Documentation</button></a>
                                </div>
                            </div>
                        @else
                            <a href="{{route('save_progress_start')}}">
                                <button type="submit" class="btn-pink">Start Documentation</button></a>
                        @endif
                    </div>
                </div>
            </div>

            {{-- Intro Pages Modal  --}}
            <div id="open-modal" class="modal-window">
                <div class="intro-pages">
                    <a href="#" title="Close" class="modal-close text-decoration-none">X</a>
                    <h3 class="red-text ">INTRODUCTORY PAGES</h3>

                    <div id="tab-content">

                        <p class="text-decoration-underline">Getting started</p>
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

                    <div class="intro-pages " id="tab-content1">

                        <p class="text-decoration-underline">Privacy</p>

                        <p>Tengu has been developed with your privacy top of mind.  For your safety, and to give you peace of
                            mind, we do not ask for, nor keep, any of your personal details such as your name, address, or NDIS
                            number.  Instead, you simply add those details to the Report offline, once we have written it for you.</p>

                        <p>For the same reason, we do not ask you to upload any of your confidential expert reports to Tengu.  </p>

                        <p>And importantly, once Tengu has generated your document, we do not keep a copy on our server
                            We are not in the business of data harvesting, sale, or exploitation. </p>

                        <p>Please note that Tengu uses ChatGPT as a plug in.  This means that any data that you input into
                            Tengu will be exposed to ChatGPT’s platform and subject to the privacy policy of OpenAi (the
                            developer of ChatGPT).  You can view OpenAi’s privacy policy <b><a href="https://openai.com/policies/privacy-policy" class="text-green">here</a></b>. The best way to mitigate any data security risks associated with
                            ChatGPT is not to input any identifiable personal information into Tengu such as names, addresses,
                            NDIS number, tax file number, or the like.  We have developed our questionnaire with this key
                            principle in mind. </p>

                        <p class="text-decoration-underline">Important notes</p>

                        <p>Please remember that the document generated by Tengu is only as good as the information that you
                            provide.  So, please do take time to answer the questions carefully, truthfully, and with sufficient
                            detail.  If you need help completing the questions, please email <a href="mailto:info@thistles.com.au">info@thistles.com.au</a> and we will
                            assist.</p>

                        <p>Whilst Tengu is immensely helpful as a tool to assist you, please note that the final responsibility for
                            the content and accuracy of the document is yours alone.  Please review the document generated by
                            Tengu carefully, together with your support coordinator or another qualified professional, and make
                            any necessary amendments.</p>

                        <p>Tengu is only suitable for School Leavers from Special Developmental Schools or Specialist Schools,
                            for their general ongoing funding requirements.  It should not be used for any other purposes.  In
                            particular, Tengu’s functionality does not extend to applications for funding for Specialist Disability
                            Accommodation or Supported Independent Living.</p>

                    </div>

                    <div class="intro-pages" id="tab-content2">

                        <p class="text-decoration-underline">Hints and tips</p>

                        <p>Here are some handy hints for how get the best out of Tengu and maximise the impact of your NDIS
                            submission:</p>

                        <ol class="text-green">
                            <li><b>Write in the first person:</b>  If you are completing the questionnaire on behalf of someone
                                else, such as your child, please write the responses as if you were them.  So say “I” rather
                                than “he”, “she”, or “they”, for example.</li>

                            <li><b>Reasonable and necessary:</b>  Bear in mind that any supports or services that NDIS funds must
                                be “reasonable and necessary”.  To be considered reasonable and necessary, a support or
                                service:
                                <ul>
                                    <li>must be related to your disability</li>
                                    <li>must not include day-to-day living costs not related to your disability support needs,
                                        such as groceries </li>
                                    <li>should represent value for money</li>
                                    <li>must be likely to be effective and work for you, and</li>
                                    <li>should consider support given to you by other government services, your family, carers,
                                        networks and the community. </li>
                                </ul>

                                <p>To find out more about the “reasonable and necessary” criteria from the NDIS website, click
                                    <b><a href="https://www.ndis.gov.au/understanding/supports-funded-ndis/reasonable-and-necessary-supports" class="text-green">here</a></b>.</p>
                            </li>

                            <li><b>Collect Medical and Other Relevant Documentation:</b> These could include medical records,
                                assessment reports, or letters from schools or allied health providers detailing your disability
                                and how it affects your daily life and functioning. This evidence should be recent, relevant,
                                and thorough.  And the more that you have, the better.</li>

                            <li><b>Cost Estimates:</b> Gather quotes or estimates for any supports, therapies, equipment, or
                                modifications you are requesting. Make sure to explain why these are reasonable and
                                necessary for your situation. </li>

                            <li><b>Tell a Story:</b> Instead of just providing facts and figures, tell your story. Describe your journey,
                                your struggles, and your victories. Make it personal and relatable.</li>

                            <li><b>Be Specific and Detailed:</b> The more details you can provide, the better, although please do
                                not disclose personal information that could identify you such as names, addresses,
                                telephone numbers or the like. Explain exactly how the disability affects you and why the
                                requested supports are needed.</li>

                            <li><b>Highlight the Long-term Benefits:</b> Explain how the supports will benefit you in the long term.
                                This could include increased independence, improved quality of life, or better prospects for
                                education or work.</li>
                        </ol>
                        <a href="{{route('start_documentation')}}"><button class="modal-btn" onclick="finish()">Finish</button></a>

                    </div>

                    <button class="modal-btn" id="nextButton" onclick="next()">Next</button>

                </div>
            </div>

            {{-- Documentation side bar guide --}}
            <div class="col-md-12 col-lg-4 col-sm-12 side-bar">

                    {{-- Documentation --}}
                <div class="container pt-5">
                    <h5 class="pt-3 fw-bold">Documentation Guidance</h5>
                    <p>Vulputate cursus bibendum urna vel volutpat. Imperdiet cras at amet amet ut posuere mauris
                    scelerisque. At in risus a enim morbi. Orci fermentum a interdum faucibus ultricies at amet eget.
                    Id nisi urna tincidunt duis. Sodales egestas in amet condimentum. Interdum et risus auctor netus luctus.
                    A pretium bibendum quis volutpat. </p>
                </div>

                    {{-- Meeting reminders --}}
                <div class="container">
                    <h5 class=" fw-bold">Meeting Reminders</h5>
                    <div class="meeting-card">
                        <div class="row">
                            <div class="col-4 meeting-card-date">
                                <span>05</span>
                                <h5>Sept</h5>
                                <p class="pt-1">2023</p>
                            </div>
                            <div class="col-8 pt-3">
                                <p>You have an interview meeting</p>
                                <p class="text-green">Ideal Funding Period </p>
                                <p>(July - December)</p>
                                <img src="{{asset('Images/Google_Calendar_icon_(2020) 1.png')}}" alt="">
                                <span class="text-lpink">From Your Google Calendar</span>
                            </div>
                        </div>

                    </div>
                </div>

                {{-- Assignrd co ordinators --}}
                <div class="container">
                    <h5 class="pt-3 fw-bold">Assigned Co-ordinator</h5>

                        <div class="meeting-card">
                            <div class="row">
                                <div class="col-4 meeting-card-date">
                                    <img src="{{ asset('Images/date.png')}}" class="img-fluid"  alt="">
                                </div>
                                <div class="col-8">
                                    <h5>Ms. Garry Dicki</h5>
                                    <c1>We have assigned a support <br>
                                        co-ordinator for you.</c1><br>
                                    <img src="{{asset('Images/fi-rr-phone-call.png')}}" alt="">
                                    <c1 class="text-lpink p-2">+61 332-944-8062</c1>
                                </div>
                            </div>
                        </div>
                </div>

                {{-- Quick Access --}}
                <div class="container">
                    <h5 class="pt-3 fw-bold">Quick Access</h5>
                        <div class="meeting-card">
                        <div class="row">
                            <div class="col-4 meeting-card-date">
                                <img src="{{ asset('Images/date2.png')}}" class="img-fluid"  alt="">
                            </div>
                            <div class="col-8">
                                <h5>Contact an NDIS-Specialist</h5>
                                <c1>Open Monday to Friday 8am to 8pm</c1><br>
                                <img src="{{asset('Images/fi-rr-phone-call.png')}}"alt="">
                                <c1 class="text-lpink p-2">1800 800 110</c1>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>

</div>

<script>
    function next() {
     // Get references to the paragraphs
     var paragraph1 = document.getElementById("tab-content");
     var paragraph2 = document.getElementById("tab-content1");
     var paragraph3 = document.getElementById("tab-content2");
     var nextButton = document.getElementById("nextButton")

     // Check the visibility of paragraph 1
     if (paragraph1.style.display === "block") {
         paragraph1.style.display = "none";
         // If paragraph 1 is currently visible, hide it and show paragraph 2
         paragraph2.style.display = "block";
         paragraph3.style.display = "none";

     } else if (paragraph2.style.display === "block") {
         paragraph2.style.display = "none";
         // If paragraph 2 is currently visible, hide it and show paragraph 3
         paragraph3.style.display = "block";
         paragraph1.style.display = "none";
         nextButton.style.display = "none";
     } else {
         // If neither paragraph 1 nor paragraph 2 is visible, show paragraph 1
         paragraph1.style.display = "block";
         paragraph2.style.display = "none";
         paragraph3.style.display = "none";
     }
 }


 </script>

@endsection
