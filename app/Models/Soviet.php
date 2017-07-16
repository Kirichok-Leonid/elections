<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Soviet extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'convocation'
    ];

    /**
     * Set relation to Session model
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function sessions()
    {
        return $this->hasMany(Session::class, 'session_id', 'id');
    }
}
