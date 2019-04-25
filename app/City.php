<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table = 'cities';
    //protected $fillable = ['city_name', 'updated_at'];
    //protected $guarded = ['city_id', 'created_at'];
    
    public function country() {
        return $this->belongsTo('App\Country');
    }
}
