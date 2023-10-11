<?php

namespace App\Listeners;

use App\Events\GenerateReportEvent;
use App\Models\User;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Http;

class GenerateReportListener implements ShouldQueue
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(GenerateReportEvent $event): void
    {
        $response = Http::timeout(1500)->post('http://167.99.36.48:7020/generate_report', ['responses' => $event->finalData , 'user_id' => $event->user_id]);

        if($response->successful()){

            $user = User::find($event->user_id);
            $user->sendDocumentationNotification();

        }

    }
}
