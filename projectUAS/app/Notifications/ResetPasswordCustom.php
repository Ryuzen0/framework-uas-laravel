<?php

namespace app\Notifications;
use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Notifications\Messages\MailMessage;

class ResetPasswordCustom extends ResetPassword
{
    public function toMail($notifiable)
    {
        $resetUrl = url(route('password.reset', [
            'token' => $this->token,
            'email' => $notifiable->email,
        ], false));

        return (new MailMessage)
            ->subject('Reset Your Tulip Restaurant Password')
            ->view('emails.reset-password', [
                'url' => $resetUrl,
                'user' => $notifiable
            ]);
    }
}
