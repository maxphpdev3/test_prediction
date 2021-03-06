<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class MatchResult extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'home_club_goals',
        'away_club_goals'
    ];

    /**
     * Get match for result.
     *
     * @return BelongsTo
     */
    public function leagues(): BelongsTo
    {
        return $this->belongsTo(Calendar::class, 'result_id', 'id');
    }
}
