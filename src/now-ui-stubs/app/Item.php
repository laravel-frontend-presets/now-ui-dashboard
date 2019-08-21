<?php

namespace App;

use App\Tag;
use App\Category;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'excerpt' , 'description', 'picture', 'category_id', 'status', 'date', 'show_on_homepage', 'options'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'options' => 'array',
    ];

    /**
     * Get the category of the item
     *
     * @return \App\Category
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Get the tags of the item
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    /**
     * Get the path to the picture
     *
     * @return string
     */
    public function path()
    {
        return "/storage/{$this->picture}";
    }
}
