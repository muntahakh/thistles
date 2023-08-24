<?php

namespace App\Notifications;

use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Notifications\Messages\MailMessage;

class CustomVerifyEmail extends VerifyEmail
{
    public $userId;
    public $userName;
    public $userEmail;
    public $userVerificationToken;

    public function __construct($userId, $userName, $userEmail, $userVerificationToken)
    {
        $this->userId = $userId;
        $this->userName = $userName;
        $this->userEmail = $userEmail;
        $this->userVerificationToken = $userVerificationToken;
    }

    public function toMail($notifiable)
    {

        return (new MailMessage)
        ->subject('Thistles Verification Email')
        ->markdown('emails.custom_verify_email',[
        'userId' => $this->userId,
        'userName' => $this->userName,
        'userEmail' => $this->userEmail,
        'userVerificationToken'=> $this->userVerificationToken,
    ]);

    }
}
