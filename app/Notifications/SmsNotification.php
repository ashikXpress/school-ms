<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Messages\NexmoMessage;
use Illuminate\Notifications\Notification;

class SmsNotification extends Notification
{
    use Queueable;
    public $diary;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($diary)
    {
        $this->diary=$diary;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail','nexmo'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        $diary=$this->diary;
        return (new MailMessage)
                  ->line($diary->student->first_name.$diary->student->last_name)
                    ->line($diary->title)
                    ->line($diary->diary)
                    ->action('Notification Action', url('/'))
                    ->line('Thank you for using our school management system application!');

    }

    /**
     * Get the Nexmo / SMS representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return NexmoMessage
     */
    public function toNexmo($notifiable)
    {
        $diary=$this->diary;

        return (new NexmoMessage)

            ->content('Dear, '.$diary->student->first_name.$diary->student->last_name.' '.$diary->title.'. '.$diary->diary)
            ->unicode();
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
