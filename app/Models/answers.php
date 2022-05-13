<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class answers extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'question_id',
        'question_option_id'
    ];
    public function user() {
        return $this->belongsTo('App\Models\User', 'user_id');
    }
    public function question_options()
        {
        return $this->belongsTo('App\Models\question_options', 'user_id');
        }
}
