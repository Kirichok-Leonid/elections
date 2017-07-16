<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'number', 'soviet_id', 'session_type', 'date'
    ];

    /**
     * @var array
     */
    protected $dates = [
        'date'
    ];

    /**
     * Set relation to Soviet model
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function soviet()
    {
        return $this->belongsTo(Soviet::class, 'soviet_id', 'id');
    }

    /**
     * Set relation to SessionType model
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function sessionType()
    {
        return $this->belongsTo(SessionType::class, 'session_type_id', 'id');
    }
}
