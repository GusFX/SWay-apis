<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Model as Model;
// use Illuminate\Notifications\Notifiable;
// use Laravel\Sanctum\HasApiTokens;

class Occurrence extends Model
{

    protected $table= 'occurrences'
    // use HasApiTokens, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'lat',
        'long',
        'neighbourhood',
        'phone',
        'street',
        'postal_code',
        'date_hour',
        'description',
        'type',
        'user_id'
    ];
}
