<?php

declare(strict_types=1);

use Filagora\Example\PackagePlugin;
use Filament\Panel;

it('merges the package config', function () {
    expect(config('filagora-example.navigation_group'))->toBe('Example');
});

it('registers on a panel', function () {
    $panel = Panel::make()->id('admin')->plugin(PackagePlugin::make());

    expect($panel->hasPlugin('filagora-example'))->toBeTrue();
});
