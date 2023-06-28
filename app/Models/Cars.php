<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cars extends Model
{
    public function specification()
    {
        return $this->belongsTo(Specification::class, 'specification_ids');
    }
    public function status()
    {
        return $this->belongsTo(Status::class, 'status_id');
    }
    public function plate_governorate_id()
    {
        return $this->belongsTo(Governorate::class, 'plate_governorate_id');
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
