<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'popup_id',
    ];

    //
    public function popup()
    {
        return $this->belongsTo('App\Models\Popup');
    }    
}
