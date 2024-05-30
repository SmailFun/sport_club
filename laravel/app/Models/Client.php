<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = ['first_name', 'last_name', 'email', 'phone', 'date_of_birth'];

    public function memberships()
    {
        return $this->hasMany(Membership::class);
    }

    public function attendances()
    {
        return $this->hasMany(Attendance::class);
    }

    public function classes()
    {
        return $this->belongsToMany(ClassModel::class, 'class_registrations');
    }
}
