<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function getImageAttribute($image)
    {
        return asset('storage/abouts/' . $image);
    }
    
    public function getUpdatedAtAttribute($date)
    {   
        return Carbon::parse($date)->format('d-M-Y');
    }
}
