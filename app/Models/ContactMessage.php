<?php

namespace App\Models;

use App\Observers\ContactMessageObserver;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Support\Str;

#[ObservedBy(ContactMessageObserver::class)]
class ContactMessage extends Pivot
{
//    public static function booted(): void
//    {
//        static::creating(function ($record) {
//            $record->confirmation_code = Str::random(6);
//            $record->status = 'inactive';
//        });
//    }
}
