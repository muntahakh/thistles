
@component('mail::message')

<div class="container">



            {{-- Email template --}}
            <div class="logo-fixed">
                <img src="{{ asset('Images/thistles_logo.png') }}" class="img-fluid pt-3" alt="">
            </div>
            <div class="container text-center p-3">
                <h1 class="pt-2 fw-bold">Verify This Email Address</h1>
                <p>We sent a confirmation email for:</p>
                <a href="/">abc@gmail.com</a>
            </div>
            <div class="email-container">

                <p>Dear [User],</p>

                <p>Thank you for signing up with Thistles! We're excited to have you on board.</p>

                <p>To ensure the security of your account and access to all our services, we need to verify your
                    email address.</p>

                <p>Please click the button below to complete the verification process. Once the link opens,
                    your email address will be automatically verified, and you will gain full access to your account.</p>

                <p>Thank you for choosing Thistles!</p>
                <p>Best regards, Thistles Team</p>
                <div class="pt-2">

                    <a href="{{ route('verification.verify', ['id' => $user->id, 'hash' => $user->verification_token]) }}">
                        <button type="submit" class="btn-pink">Verify Email</button>
                    </a>
                    <a href=https://www.ndis.gov.au/understanding/supports-funded-ndis/reasonable-and-necessary-supports" class="forgot-password content-center">Need Support?</a>
                </div>
            </div>

            <div class="email-container">
                <p>If you did not sign up for Thistles, please disregard this email. Your account will remain inactive.</p>

                <p>If you experience any issues during the verification process or have any questions,
                    feel free to contact our support team at [Su@cannot ('update', $post)

                    @elsecannot ('create', $post)

                    @endcannotpport Email/Phone Number].</p>

            </div>






</div>

@endcomponent


