<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Karya extends Model
{
    protected $table = 'karya';

    protected $primaryKey = 'id';

    protected $fillable = [
        'title',
        'thumbnail',
        'link_prompt',
        'link_karya',
        'reader_target',
        'language',
        'status'
    ];
    /**
     * Get all of the genre for the Karya
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function genre_karya()
    {
        return $this->hasMany(KaryaGenre::class, 'karya_id', 'id');
    }

    /**
     * Get all of the user for the Karya
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function user_karya()
    {
        return $this->hasMany(UserKarya::class, 'user_id', 'id');
    }
    
}
