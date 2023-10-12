@extends('layouts.app')

@section('content')
<div class="eula-background">

    <div class="container-fluid main-home-content">
        <div class="row">
            {{-- backgroud image --}}
            <div class="col-md-8 col-sm-12 content-center">
                <div class="center-text">
                    <img src="{{ asset('Images/disabled winner-rafiki 1.png') }}"  class="img-fluid home-img" alt="">
                    <h1 class="pt-2">Well Done!</h1>
                </div>
                    <div class="fileupload-card col-md-6 col-sm-8">
                        <div class="row">
                            <div class="col-2 my-3">
                                <img src="{{ asset('svg/fi-sr-document.svg')}}"  alt="">
                            </div>
                            <div class="col-10">
                                <label for="file" class="fw-bold pt-2">{{$report->file_name}}</label>
                            </div>
                        </div>
                    </div>


                    <div class="pt-4 col-md-6 col-sm-8">
                        <button type="submit" class="btn-pink">Download My NDIS Document</button>
                    </div>

            </div>

            {{-- Documentation side bar guide --}}
            <div class="col-md-4 col-sm-12 side-bar">

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
                            <div class="col-4 meeting-card-date pt-2">
                                <c1>05</c1>
                                <h5>Sept</h5>
                                <c1>2023</c1>
                            </div>
                            <div class="col-8 pt-2">
                                <c1>You have an interview meeting</c1><br>
                                <c1 class="text-green">Ideal Funding Period <br>
                                    (July - December)</c1><br>
                                <img src="{{asset('Images/Google_Calendar_icon_(2020) 1.png')}}" alt="">
                                <c1 class="text-lpink p-2">From Your Google Calendar</c1>
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
                                <div class="col-8 meeting-card-content">
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

@endsection

