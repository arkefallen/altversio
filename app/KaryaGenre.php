<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Karya;
use App\Genre;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\Pivot;

class KaryaGenre extends Model
{
    protected $table = 'genre_karya';

    /**
     * Get the karya that owns the genre-karya
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function karya()
    {
        return $this->belongsTo(Karya::class, 'karya_id', 'id');
    }


    /**
     * Get the genre that owns the genre-karya
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function genre()
    {
        return $this->belongsTo(Genre::class, 'genre_id', 'id');
    }
}
