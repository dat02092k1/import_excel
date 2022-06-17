<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'school', 'district', 'class', 'name', 'day', 'month', 'year', 'gender', 'birthplace', 'ethnicity', 'live', 'tel', 'grade1', 'grade2',
        'grade3', 'grade4', 'grade5', 'sum5', 'priority', 'sumall', 'note'
    ];

}
