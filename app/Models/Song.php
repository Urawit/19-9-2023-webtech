<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\support\Str; 

class Song extends Model
{ 
    use HasFactory, SoftDeletes; // php: trait แปลว่า implement เรียบร้อยแล้ว

    public function artist():BelongsTo
    {
        return $this->belongsTo(Artist::class);
    }

    public function playlists():BelongsToMany
    {
        return $this->belongsToMany(Playlist::class);
    }

    public function getDurationToStringAttribute() {
        $minute = (int) ($this->duration / 60);
        $second = (int) ($this->duration % 60);
        $second = Str::padLeft($second, 2, '0');
        return "{$minute}:{$second}";
    }

}
