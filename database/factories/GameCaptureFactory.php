<?php

namespace Database\Factories;

use App\Enums\GameCaptureType;
use App\Models\Game;
use Illuminate\Database\Eloquent\Factories\Factory;

class GameCaptureFactory extends Factory
{
    public function definition(): array
    {
        $game = Game::factory()->create();

        return [
            'title' => fake()->name(),
            'game_id' => $game->id,
            'type' => fake()->randomElement(GameCaptureType::class)->value,
            'filekey' => fake()->uuid(),
            'comments' => fake()->text(),
        ];
    }
}
