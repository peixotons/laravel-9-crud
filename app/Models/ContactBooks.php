<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactBooks extends Model
{
    use HasFactory;

    protected $table = 'contact_books';
    protected $primaryKey = 'id';
    protected $fillable = ['name_contact', 'email_contact', 'phone_contact', 'number', 'address', 'neighborhood', 'city', 'state', 'postcode'];
}
