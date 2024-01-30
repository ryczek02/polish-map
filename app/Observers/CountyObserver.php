<?php

namespace App\Observers;

use App\Models\County;

class CountyObserver
{
    /**
     * Handle the County "created" event.
     */
    public function created(County $county): void
    {
        //
    }

    /**
     * Handle the County "updated" event.
     */
    public function updated(County $county): void
    {
        //
    }

    /**
     * Handle the County "deleted" event.
     */
    public function deleted(County $county): void
    {
        //
    }

    /**
     * Handle the County "restored" event.
     */
    public function restored(County $county): void
    {
        //
    }

    /**
     * Handle the County "force deleted" event.
     */
    public function forceDeleted(County $county): void
    {
        //
    }
}
