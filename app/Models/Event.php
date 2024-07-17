<?php

namespace App\Models;

//use App\Models\Thumbnail;
use App\Models\Eventgallery;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Event extends Model
{
    use HasFactory;
    protected $primarykey = "id ";
    protected $timestamp =  false;
    protected $guarded = [];


    public function  eventgallery()
    {
        return $this->hasMany(Eventgallery::class, 'event_id', 'id');
    }
}
