<?php

namespace App\Observers;

use App\Models\ContactMessage;
use Illuminate\Support\Str;

class ContactMessageObserver
{
    /**
     * Handle the ContactMessage "creating" event.
     */
    public function creating(ContactMessage $contactMessage): void
    {
        $contactMessage->confirmation_code = Str::random(6);
        $contactMessage->status = 'inactive';
    }

}
