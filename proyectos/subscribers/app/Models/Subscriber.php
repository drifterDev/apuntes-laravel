<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Auth\MustVerifyEmail;

class Subscriber extends Model
{
    use HasFactory, MustVerifyEmail, Notifiable;

    protected $fillable = [
        'email',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
