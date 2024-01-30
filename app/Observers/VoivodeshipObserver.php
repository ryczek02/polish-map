<?php

namespace App\Observers;

use App\Models\Voivodeship;

class VoivodeshipObserver
{
    /**
     * Handle the Voivodeship "created" event.
     */
    public function created(Voivodeship $voivodeship): void
    {
        //
    }

    /**
     * Handle the Voivodeship "updated" event.
     */
    public function updated(Voivodeship $voivodeship): void
    {
        //
    }

    /**
     * Handle the Voivodeship "deleted" event.
     */
    public function deleted(Voivodeship $voivodeship): void
    {
        //
    }

    /**
     * Handle the Voivodeship "restored" event.
     */
    public function restored(Voivodeship $voivodeship): void
    {
        //
    }

    /**
     * Handle the Voivodeship "force deleted" event.
     */
    public function forceDeleted(Voivodeship $voivodeship): void
    {
        //
    }
}
