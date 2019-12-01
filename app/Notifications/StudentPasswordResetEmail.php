<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class StudentPasswordResetEmail extends Notification
{
    use Queueable;
    public $token;
    public $student_obj;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($token,$student_obj)
    {
        $this->token=$token;
        $this->student_obj=$student_obj;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        $token=$this->token;
        $student_obj=$this->student_obj;

        return (new MailMessage)
                    ->line('Welcome')
                    ->action('Reset Password', route('student.password.reset.form',$token))
                    ->line('Thank you for using our application!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
