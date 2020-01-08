<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    protected $fillable = ['name'];

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function getAllCategories()
    {
        return Category::all();
    }

    public function questions()
    {
        return $this->belongsToMany(Question::class);
    }

    public function getAllQuestions()
    {
        return Question::all();
    }

    public function results()
    {
        return $this->hasMany(Result::class);
    }
}
