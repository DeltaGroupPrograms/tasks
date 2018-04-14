<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Relationwork;
class Work extends Model
{
  public function relationworks(){
      return $this->hasMany(Relationwork::class);
  }
    protected $fillable = [
        'protitile', 'prokind', 'status','begindate','enddate','price'
    ];

}
