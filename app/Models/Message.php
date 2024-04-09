<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Message extends Model
{
    use HasFactory;

    protected $fillable = ['message_text'];

    public function contacts(): BelongsToMany
    {
        return $this->belongsToMany(Contact::class)
            ->using(ContactMessage::class)
            ->withPivot(['confirmation_code', 'confirmation_date', 'status']);
    }
}
