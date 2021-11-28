<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\KaryaGenre;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Genre extends Model
{
    protected $table = 'genre';

    /**
     * Get all of the karya for the Genre
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function karya(): HasMany
    {
        return $this->hasMany(KaryaGenre::class, 'genre_id', 'id');
    }
}
