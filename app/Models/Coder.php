<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;

class Coder extends Model
{
    use HasFactory,LogsActivity;


    protected $fillable = [
        'name',
        'email',
        'number',
        'lang',
    ];

    protected $logAttributes = ['name', 'email','number','lang'];
}
