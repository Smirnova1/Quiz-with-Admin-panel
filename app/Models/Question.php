<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    const TYPES = ['text', 'checkbox', 'radio'];

    protected $fillable = ['type', 'text'];

    public function topics()
    {
        return $this->belongsToMany(Topic::class);
    }

    public function getAllTopics()
    {
        return Topic::all();
    }

    public function options()
    {
        return $this->hasMany(Option::class);
    }

    public function getCorrectOptions()
    {
        return $this->options()->where('is_correct', true)->pluck('text')->join(', ');
    }

    public function hasCorrectAnswer()
    {
        if ($this->getCorrectOptions()) {
            return true;
        }

        return false;
    }
}
