<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'portfolio',
        'address',
        'description',
        'designation',
        'about_title',
        'about_description',
        'about_subtitle',
        'hero_greeting',
        'hero_name',
        'hero_title',
        'hero_description',
        'contact_email',
        'contact_phone',
        'contact_address',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
