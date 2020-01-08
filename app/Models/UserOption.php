<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserOption extends Model
{
    protected $fillable = ['result_id', 'question', 'user_option', 'correct_option'];

    public function result()
    {
        return $this->belongsTo(Result::class);
    }
}
