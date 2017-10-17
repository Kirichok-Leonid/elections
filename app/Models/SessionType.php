<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SessionType extends Model
{
    protected $table = 'session_types';
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name'
    ];

    /**
     * Set relation to Session model
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function sessions()
    {
       return $this->hasMany(Session::class, 'session_type_id', 'id');
    }
}
