<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eventgallery extends Model
{
    use HasFactory;
    protected $primarykey = "id ";
    protected $timestamp =  false;
    protected $guarded = [];

    public function  events()
    {
        return $this->belongsTo(Event::class, 'event_id', 'id');
    }
}
