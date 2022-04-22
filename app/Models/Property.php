<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Property extends Model
{
    protected $fillable = ['name', 'description', 'status', 'zone', 'type', 'city', 'price', 'phone', 'image', 'parking', 'room', 'bathroom'];

    // public function user()
    // {
    //     return $this->belongsTo(User::class);
    // }

    // You have to create this relationship before your listing can work
    public function property()
    {
        return $this->hasOne(Property::class, 'id');
    }
    
    use HasFactory;
}