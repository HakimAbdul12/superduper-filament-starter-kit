<?php

namespace App\Models;

use App\Models\Student;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class School extends Model
{
    use HasFactory;
    use HasUuids;

    protected $fillable = [
        'name',
    ];

    public function members(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }

    public function students(): BelongsToMany
    {
        return $this->belongsToMany(Student::class);
    }
}
