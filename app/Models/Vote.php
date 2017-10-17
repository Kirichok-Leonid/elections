<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    protected $table = 'votes';
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'question_id', 'delegate_id', 'status'
    ];

    /**
     * Set relation to Delegate model
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function delegates()
    {
        return $this->belongsTo(Delegate::class, 'delegate_id', 'id');
    }

    /**
     * Set relation to Question model
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function question()
    {
        return $this->belongsTo(Question::class, 'question_id', 'id');
    }
}
