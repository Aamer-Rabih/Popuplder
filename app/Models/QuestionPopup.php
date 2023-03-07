<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionPopup extends Model
{
    use HasFactory;

    protected $fillable = [
        'content', 'type_id',
    ];

    //
    public function type()
    {
        return $this->belongsTo('App\Models\PopupType');
    }      
}
