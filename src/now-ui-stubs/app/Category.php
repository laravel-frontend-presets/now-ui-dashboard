<?php

namespace App;

use App\Item;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'description'];

    /**
     * Get the items of the category
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function items()
    {
        return $this->hasMany(Item::class);
    }
}
