<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Track extends Model
{
    protected $table="track";
    
    protected $fillable=['name','location','image','phone','type','coursesnumber'];
    use HasFactory;
    public function courses()
    {
        return $this->hasMany(Course::class , 'track_id');
        
    }
}
