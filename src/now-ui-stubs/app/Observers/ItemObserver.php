<?php

namespace App\Observers;

use App\Item;
use Illuminate\Support\Facades\File;

class ItemObserver
{
    /**
     * Handle the User "deleting" event.
     *
     * @param  \App\Item  $item
     * @return void
     */
    public function deleting(Item  $item)
    {
        File::delete(storage_path("/app/public/{$item->picture}"));
        
        $item->tags()->detach();
    }

    /**
     * Handle the User "updating" event.
     *
     * @param  \App\Item  $item
     * @return void
     */
    public function updating(Item $item)
    {
        if ($item->picture != $item->getOriginal('picture')) {
            File::delete(storage_path("/app/public/{$item->getOriginal('picture')}"));
        }
    }
}
