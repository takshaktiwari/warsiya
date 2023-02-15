<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Subject extends Model
{
    use HasFactory;
    protected $guarded = [];

    /**
     * The graded that belong to the Subject
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function grades(): BelongsToMany
    {
        return $this->belongsToMany(Grade::class);
    }
}
