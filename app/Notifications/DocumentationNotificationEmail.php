<?php

namespace App\Notifications;

use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Notifications\Messages\MailMessage;

class DocumentationNotificationEmail extends VerifyEmail
{
    public $userId;
    public $userName;
    public $userEmail;

    public function __construct($userId, $userName, $userEmail)
    {
        $this->userId = $userId;
        $this->userName = $userName;
        $this->userEmail = $userEmail;

    }

    public function toMail($notifiable)
    {

        return (new MailMessage)
        ->subject('Documentation Email')
        ->markdown('emails.custom_documentation_notification_email',[
        'userId' => $this->userId,
        'userName' => $this->userName,
        'userEmail' => $this->userEmail,

    ]);

    }
}
