<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'events';


    /**
     * One to many relation with  workshops
     */
    public function workshops()
    {
        return $this->hasMany('App\Models\Workshop', 'event_id');
    }
}
