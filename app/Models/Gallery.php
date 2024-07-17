<?php

namespace App\Models;

use App\Models\Thumbnail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Gallery extends Model
{
    use HasFactory;
    protected $primarykey = "id ";
    protected $timestamp =  false;
    protected $guarded = [];

    public function thumbnail()
    {
        return $this->belongsTo(Thumbnail::class, 'thumbnail_id', 'id');
    }
}
