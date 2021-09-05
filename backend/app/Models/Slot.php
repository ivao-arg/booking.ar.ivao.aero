<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Slot extends Model
{
    protected $fillable = [
        'flightNumber',
        'origin',
        'destination',
        'type',
        'slotTime',
        'gate',
        'aircraft',
        'route',
        'bookingTime',
        'bookingStatus',
        'private'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    public function owner() {
        return $this->belongsTo(User::class, 'pilotId', 'id');
    }

    public function event() {
        return $this->belongsTo(Event::class, 'eventId', 'id');
    }
}