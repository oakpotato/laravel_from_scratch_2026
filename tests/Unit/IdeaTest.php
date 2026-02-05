<?php

use App\Models\Idea;
use App\Models\User;

test('it belongs to a user', function () {
    $Idea = Idea::factory()->create();

    expect($Idea->user)->toBeInstanceOf(User::class);
});

test('it can have steps', function () {
    $Idea = Idea::factory()->create();

    expect($Idea->steps)->toBeEmpty();

    $Idea->steps()->create([
        'description' => 'Do the thing',
    ]);

    expect($Idea->fresh()->steps)->toHaveCount(1);
});
