<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Image;
class Document extends Model
{
    //
    public function image()
    {
    return $this->hasMany(Image::class);
    }
    protected $fillable = [
        'text', 'regdate'
    ];
}
