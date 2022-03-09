<?php

namespace App\Listeners;

use App\Events\EmployeeRegistration;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
// use App\Models\EmployeeMaster;

class SendEmployeeRegistrationNotification
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\EmployeeRegistration  $event
     * @return void
     */
    public function handle(EmployeeRegistration $event)
    {   
        // dd($event);
        // $delay = now()->addSeconds(value:2);
        SendEmployeeRegistrationMailJob::dispatch($user);
        // ->delay($delay);
    }
}
