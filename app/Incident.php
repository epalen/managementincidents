<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Incident extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'incidents';

    protected $fillable = [
        'name', 'category_id', 'status', 'priority', 'description'
    ];

    public function categories(){
        return $this->belongsTo('App\Category');
    }

    public function scopeSearch($query, $name)
    {
        return $query
            ->where('name', 'like', '%' .$name. '%');
    }
}
