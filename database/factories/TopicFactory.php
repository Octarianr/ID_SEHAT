<?php

namespace Database\Factories;

use App\Models\Topic;
use Illuminate\Database\Eloquent\Factories\Factory;

class TopicFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = Topic::class;
    
    public function definition()
    {
        return [
            'topic' => $this->faker->sentence(mt_rand(2, 6)),
            'content' => $this->faker->text(100, 300),
            'user_id' => mt_rand(1, 10),
        ];
    }
}
