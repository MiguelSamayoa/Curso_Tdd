<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Repository extends Model
{
    /** @use HasFactory<\Database\Factories\RepositoryFactory> */
    use HasFactory;

    protected $table = 'repositories';

    protected $dates = [
        'created_at',
        'updated_at'
    ];

    protected $fillable = [
        'title',
        'url',
        'description'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
