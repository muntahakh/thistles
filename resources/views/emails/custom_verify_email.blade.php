<link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
<style>
    *{
        font-family: Inter, sans-serif;
    }
    .container{
        width: 100%;
        height: auto;
        margin: 0 auto;
        display: grid;
        justify-items: center;
        align-items: center;
        text-align: center;
        padding-top: 2%;
    }
    .email-heading{
        display: grid;
        line-height: 140%;
    }
    .email-heading h1{
        font-size: 32px;
        font-weight: 700;
        font-style: normal;
        text-align: center;
        line-height: 150%;
    }
    .email-heading p{
        font-size: 18px;
        font-style: normal;
        text-align: center;
        color:var(--neutrals-n-200, #6D6D6D);
    }
    .email-heading a{
        font-size: 18px;
        text-decoration: none;
        text-align: center;
        color: #15B5B0;
    }
    .email-container{
        width: 70%;
        display: grid;
        justify-content: center;
        align-items: center;
        text-align: center;
        margin: 0 auto;
    }

    .email-container p{
        font-family: Inter;
        font-size: 16px;
        font-style: normal;
        font-weight: 400;
        line-height: 150%;
        text-align: center;
        color: var(--neutrals-n-200, #6D6D6D);
        padding-top: 2%
    }
    .buttons{
        width: 100%;
        display: grid;
        justify-content: center;
        align-items: center;
        line-height: 150%;
    }
    .button-pink{
        width: 100%;
        height: 60px;
        border:1px #D0358C solid;
        border-radius: 8px;
        background-color: #D0358C;
        color: white;
        font-family: Inter;
        font-size: 18px;
        font-weight: 500;
        text-decoration: none;
        text-align: center;
        display: grid;
        justify-content: center;
        align-items: center;
        padding-top: 3%;
    }
    .button-pink:hover{
        border:1px #D0358C solid;
        background-color: #ffffff;
        color:#D0358C;
        transition: background-color 0.3s ease;
        font-weight: bold;
    }
    .button-white{
        width: 100%;
        height: 60px;
        border:1px #ffffff solid;
        border-radius: 8px;
        background-color: #ffffff;
        color:#D0358C;
        font-family: Inter;
        font-size: 18px;
        font-weight: 700;
        text-decoration: none;
        text-align: center;
        display: grid;
        justify-content: center;
        align-items: center;
        padding-top: 3%;
    }
</style>

<div class="container">
    {{-- Email template --}}
    <div class="logo-fixed">
        <img src="{{ asset('Images/thistles_logo.png') }}" alt="">
    </div>
    <div class="email-heading">
        <h1 class="pt-2 fw-bold">Verify This Email Address</h1>
        <p>We sent a confirmation email for: </p>
        <a href="">{{$userEmail}}</a>
    </div>
    <div class="email-container">

        <p>Dear User {{ucfirst($userName)}},</p>

        <p>Thank you for signing up with Thistles! We're excited to have you on board.</p>

        <p>To ensure the security of your account and access to all our services, we need to verify your
            email address.</p>

        <p>Please click the button below to complete the verification process. Once the link opens,
            your email address will be automatically verified, and you will gain full access to your account.</p>

        <p>Thank you for choosing Thistles!</p>
        <p>Best regards, Thistles Team</p>
        <div class="buttons">
            <a href="{{ route('verification.verify', ['id' => $userId, 'hash' => $userVerificationToken]) }}" class="button-pink">Verify Email</a>
            <a href="" class="button-white">Need Support?</a>
        </div>
    </div>

    <div class="email-container">
        <p>If you did not sign up for Thistles, please disregard this email. Your account will remain inactive.</p>

        <p>If you experience any issues during the verification process or have any questions,
            feel free to contact our support team at [Support Email/Phone Number].
        </p>

    </div>

</div>
