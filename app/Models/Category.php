<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name'];

    public function topics()
    {
        return $this->belongsToMany(Topic::class);
    }

    public function getAllTopics()
    {
        return Topic::all();
    }
}
