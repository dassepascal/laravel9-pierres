<?php

namespace App\Observers;

use App\Models\Stone;
use Cocur\Slugify\Slugify;
use Illuminate\Support\Str;

class StoneObserver
{
    /**
     * Handle the Stone "created" event.
     *
     * @param  \App\Models\Stone  $stone
     * @return void
     */
    public function created(Stone $stone)
    {
        // $instance = new Slugify();
        // $stone->slug = $instance->slugify($stone->name);

        $stone->slug = Str::slug($stone->name,'-');
        $stone->save();

    }

    /**
     * Handle the Stone "updated" event.
     *
     * @param  \App\Models\Stone  $stone
     * @return void
     */
    public function updated(Stone $stone)
    {
        $stone->slug = Str::slug($stone->name,'-');
        $stone->saveQuietly();
    }

    /**
     * Handle the Stone "deleted" event.
     *
     * @param  \App\Models\Stone  $stone
     * @return void
     */
    public function deleted(Stone $stone)
    {
        //
    }

    /**
     * Handle the Stone "restored" event.
     *
     * @param  \App\Models\Stone  $stone
     * @return void
     */
    public function restored(Stone $stone)
    {
        //
    }

    /**
     * Handle the Stone "force deleted" event.
     *
     * @param  \App\Models\Stone  $stone
     * @return void
     */
    public function forceDeleted(Stone $stone)
    {
        //
    }
}
