<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Karya;
use App\User;

class UserKarya extends Model
{
    protected $table = 'user_karya';

    /**
     * Get the user that owns the UserKarya
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    /**
     * Get the karya that owns the UserKarya
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function karya()
    {
        return $this->belongsTo(Karya::class, 'karya_id', 'id');
    }
}
