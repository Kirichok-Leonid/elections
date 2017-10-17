<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $table = 'questions';
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'session_id', 'text', 'number', 'question_type_id', 'decision'
    ];

    /**
     * Set relation to Session model
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function session()
    {
        return $this->belongsTo(Session::class, 'session_id', 'id');
    }

    /**
     * Set relation to QuestionType model
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function questionType()
    {
        return $this->belongsTo(QuestionType::class, 'question_type_id', 'id');
    }

    /**
     * Set relation to Vote model
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function votes()
    {
        return $this->hasMany(Vote::class, 'session_id', 'id');
    }
}
