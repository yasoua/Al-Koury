<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car_Maintenance extends Model
{
    public function Type()
    {
        return $this->hasMany(Maintenance_Type::class, 'last_updated_by');
    }

    public function lastUpdatedBy()
    {
        return $this->belongsTo(User::class, 'last_updated_by');
    }

    public function addedBy()
    {
        return $this->belongsTo(User::class, 'added_by');
    }
    use HasFactory;
}
