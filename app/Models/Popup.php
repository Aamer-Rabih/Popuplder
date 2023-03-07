<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Page;

class Popup extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'color', 'location', 'height', 'width', 'type_id',
    ];

    //
    public function Pages()
    {
    	return $this->hasMany('App\Models\Page', 'popup_id');
    }

    //
    public function type()
    {
        return $this->belongsTo('App\Models\PopupType');
    }
}
