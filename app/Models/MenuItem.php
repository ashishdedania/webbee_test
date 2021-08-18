<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'menu_items';


    public function parent()
    {
        return $this->belongsTo('App\Models\MenuItem','parent_id')->where('parent_id',0)->with('parent');
    }

    public function children()
    {
        return $this->hasMany('App\Models\MenuItem','parent_id')->with('children');
    }
}
