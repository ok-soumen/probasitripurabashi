<?php

namespace App\Models;

use App\Models\Gallery;
use Laravel\Prompts\Concerns\Events;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Thumbnail extends Model
{
    use HasFactory;
    protected $primarykey = "id ";
    protected $timestamp =  false;
    protected $guarded = [];

    // public function  events()
    // {
    //     return $this->belongsTo(Event::class, 'event_id', 'id');
    // }

    public function gallery()
    {
        return $this->hasMany(Gallery::class, 'thumbnail_id', 'id');
    }
}
