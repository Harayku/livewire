<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class player extends Model
{
    /** @use HasFactory<\Database\Factories\PlayerFactory> */
    use HasFactory;

    protected $guarded = [];

    public function position()
    {
        return $this->hasMany(position::class);
    }

        public function imageUrl()
    {
        if($this->image) {
            return Storage::url($this->image);
        }

        return null;
    }
}
