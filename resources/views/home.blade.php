@extends('layouts.app')

@section('background')
    {{-- Image Background --}}
      <div class="image-container">
        <div class="text-container">
          <h1 class="overlay-h1 text-center">Welcome to our NDIS submission tool for school leavers!</h1>
          <h5 class="text-pink fw-bold text-center">Scroll Down to Learn More</h5>
        <div class="scroll-down pt-4">
          <a href="/home" class="arrow-icon"><img src="{{ asset('svg/arrow.svg') }}" alt="arrow"></a>
        </div>
      </div>
        <img src="{{ asset('Images/background.png') }}" alt="bg-img">
      </div>
@endsection

@section('content')

<div class="container-wrap">

{{-- Section Answer Our Questions --}}
<div class="container-fluid my-5">
  <div class="row ">

    {{-- Image --}}
  <div class="col-sm-12 col-md-6 col-lg-6 p-3">
    <div class="d-flex justify-content-center align-items-center">
      <img src="{{ asset('Images/content.png') }}" alt="content" class="img-fluid" width="90%" height="70vh">
    </div>
  </div>

  {{-- Text --}}
  <div class="col-sm-12 col-md-6 col-lg-6 p-5">
    <div class="text-section ">
      <h2 class="h2 fw-bold pb-5">Answer Our Questions</h2>
      <p>Simply follow the prompts and answer our questions, providing as much information as possible,
      and our tool will use generative artificial intelligence to write a detailed NDIS submission to assist with
      your Re-assessment for when your child leaves school.</p>
      <p class="pb-3">If you want, you can then amend your submission further by hand before you provide to NDIS.</p>
      <div class="outline-button">
        <a href="/register">Get Started</a>
      </div>
    </div>
  </div>

  </div>
</div>
{{-- Section We cover everything --}}

<div class="container-fluid my-4">

  <div class="row">
    {{-- Text --}}
    <div class="col-sm-12 col-md-12 col-lg-6 p-5">
      <div class="text-section">
        <h2 class="h2 fw-bold pb-5">We Cover Everything</h2>
        <p>Our submission covers all relevant areas, including goals, your current supports, supports for everyday
          activities, supports for occasional activities, daily schedule, assistive technology, and more. Out tool
          will even review your specialist reports and incorporate them as appropriate into your submission.</p>
        <p class="pb-3">It may take some time to input all of the relevant data for your submission, so we have
          included a feature which enables you to save your work and return to it later as required.</p>
        <div class="outline-button">
          <a href="/register">Get Started</a>
        </div>
      </div>
    </div>

    {{-- Image --}}
  <div class="col-sm-12 col-md-12 col-lg-6 p-5">
    <div class="d-flex justify-content-center align-items-center">
      <img src="{{ asset('Images/content-2.png') }}" alt="content" class="img-fluid" width="90%" height="70vh">
    </div>
  </div>


  </div>

</div>

{{-- Who this tool is to  --}}
<div class="container my-4 pt-5">
  <div class="row">
    <div class="col-md-12">
      <div class="text-section-2">
        <h2 class="fw-bold text-center pb-4" >Who this tool is for</h2>
        <p class="text-center">This tool has been designed for parents of children with disabilities who already have an NDIS package
          and who are in the their final year of special education. It has been designed to assist you to present
          a full, clear and compelling case to NDIS for the additional funding that your child will need when they
          leave school.</p>
        </div>
      </div>
  </div>
</div>

<div class="container-fluid p-5">
  <div class="col-md-12">
    <img src="{{ asset('Images/content-3.png') }}" alt="content" class="img-fluid">
  </div>
</div>

@include('layouts.footer')
</div>
@endsection
