@extends('layouts.app')

@section('signup-content')
<div class="form-bg-info">
<center>
    <div class="container">
        <div class="row ">
            <div class="col-md-12 col-sm-12 ">
                {{-- Back to home icon --}}
                <div class="backTohome">
                    <a href="/">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path d="M10.5999 12.71C10.5061 12.617 10.4317 12.5064 10.381 12.3846C10.3302 12.2627 10.3041 12.132 10.3041 12C10.3041 11.868 10.3302 11.7373 10.381 11.6154C10.4317 11.4936 10.5061 11.383 10.5999 11.29L15.1899 6.71C15.2836 6.61704 15.358 6.50644 15.4088 6.38458C15.4595 6.26272 15.4857 6.13201 15.4857 6C15.4857 5.86799 15.4595 5.73728 15.4088 5.61542C15.358 5.49356 15.2836 5.38296 15.1899 5.29C15.0025 5.10375 14.749 4.99921 14.4849 4.99921C14.2207 4.99921 13.9672 5.10375 13.7799 5.29L9.18986 9.88C8.62806 10.4425 8.3125 11.205 8.3125 12C8.3125 12.795 8.62806 13.5575 9.18986 14.12L13.7799 18.71C13.9661 18.8947 14.2175 18.9989 14.4799 19C14.6115 19.0008 14.7419 18.9755 14.8638 18.9258C14.9856 18.876 15.0964 18.8027 15.1899 18.71C15.2836 18.617 15.358 18.5064 15.4088 18.3846C15.4595 18.2627 15.4857 18.132 15.4857 18C15.4857 17.868 15.4595 17.7373 15.4088 17.6154C15.358 17.4936 15.2836 17.383 15.1899 17.29L10.5999 12.71Z" fill="#141414"/>
                    </svg>
                    </a>
                </div>
                {{-- <div class="center-text"> --}}
                    <img src="{{ asset('Images/thistles_logo.png') }}" class="img-fluid pt-5" alt="">
                    <h1 class="pt-2">Background Information</h1>
                {{-- </div> --}}
            </div>
        </div>
        <form action="{{route('add.userDetails')}}" method="post">
            @csrf
            <div class="row">
                    <div class="col-md-6 col-sm-12 mt-3">
                        <div class="form-container">

                            <div class="form-group">
                                <label for="name">Full Name:</label>
                                <input type="name" class="form-fields" name="full_name" value="{{isset($userDetails) ? $userDetails->full_name : ''}}" placeholder="Enter individual's full name" required>
                            </div>

                            <div class="form-group">
                                <label for="name">Address:</label>
                                <input type="text" class="form-fields" name="address" value="{{isset($userDetails) ? $userDetails->address : ''}}" placeholder="Enter address" required>
                            </div>

                            <div class="form-group">
                                <label for="date__of_birth">Date of Birth:</label>
                                <input type="text" class="form-fields" name="date_of_birth" value="{{isset($userDetails) ? $userDetails->date_of_birth : ''}}" placeholder="Enter date of birth" required>
                            </div>

                            <div class="form-group">
                                <label for="phone_number">Phone Number:</label>
                                <input type="text" class="form-fields" name="phone_number" value="{{isset($userDetails) ? $userDetails->phone_number : ''}}" placeholder="Enter phone number" required>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-12 mt-3">
                        <div class="form-container">
                            <div class="form-group">
                                <label for="Type of Disability">Type of disability:</label>
                                <input type="text" class="form-fields" name="type_of_disability" value="{{isset($userDetails) ? $userDetails->type_of_disability : ''}}" placeholder="Enter type of disability" required>
                            </div>

                            <div class="form-group">
                                <label for="ndis_nominee">NDIS Nominee:</label>
                                <input type="text" class="form-fields" name="ndis_nominee" value="{{isset($userDetails) ? $userDetails->ndis_nominee : ''}}" placeholder="Enter ndis nominee if you have any" >
                            </div>

                            <div class="form-group">
                                <label for="ndis_number">NDIS Number:</label>
                                <input type="text" class="form-fields" name="ndis_number" value="{{isset($userDetails) ? $userDetails->ndis_number : ''}}" placeholder="Enter ndis number" >
                            </div>

                            <div class="form-group">
                                <label for="support_coordinator">Support Co ordinator:</label>
                                <input type="text" class="form-fields" name="support_coordinator" value="{{isset($userDetails) ? $userDetails->support_coordinator : ''}}"  placeholder="Enter support coordinator if you have any" >
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row d-flex justify-content-center">
                    <div class="col-md-4 col-sm-8">
                        <button type="submit" class="btn-pink">Update Details</button>
                    </div>
                </div>
            </form>
    </div>
</center>
</div>
@endsection



