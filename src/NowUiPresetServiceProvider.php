<?php

namespace LaravelFrontendPresets\NowUiPreset;

use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\Console\PresetCommand;
use Laravel\Ui\UiCommand; 
use Laravel\Ui\AuthCommand;

class NowUiPresetServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        UiCommand::macro('nowui', function ($command) {
            NowUiPreset::install();
            
            $command->info('Now Ui scaffolding installed successfully.');
        });
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
