<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'events';
    protected $fillable = [
        'event_name',
        'category',
        'date',
        'time',
        'duration',
        'image',
        'description',
        'venue',
        'address',
        'country',
        'city',
        'state',
        'zip',
        'ticket_name',
        'price',
        'total_ticket',
        'Status',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}