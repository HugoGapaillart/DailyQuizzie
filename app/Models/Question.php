<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     * 
     * @var array<int, string>
     */
    protected $fillable = [
        'theme_id',
        'question',
        'difficulty',
    ];

    /**
     * Get the theme that owns the question.
     * 
     * @return BelongsTo
     */
    public function theme(): BelongsTo
    {
        return $this->belongsTo(Theme::class);
    }

    /**
     * Get the answers for the question.
     * 
     * @return HasMany
     */
    public function answers(): HasMany
    {
        return $this->hasMany(Answer::class);
    }

    /**
     * The users that answered the question.
     * 
     * @return BelongsToMany
     */
    public function answered(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'user_answers')
            ->withPivot('answer_id')
            ->withTimestamps();
    }
}
