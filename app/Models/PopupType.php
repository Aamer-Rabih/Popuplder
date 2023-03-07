<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PopupType extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    ];

    //
    public function popups()
    {
    	return $this->hasMany('App\Models\Popup');
    }

    public function questions()
    {
    	return $this->hasMany('App\Models\QuestionPopup');
    }

    public function contents()
    {
    	return $this->hasMany('App\Models\ContentPopup');
    }
}
