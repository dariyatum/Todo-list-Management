<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::first(); // Get first user

        if ($user) {
            $categories = [
                ['name' => 'Work', 'color' => '#667eea', 'description' => 'Work-related tasks and projects'],
                ['name' => 'Study', 'color' => '#28a745', 'description' => 'Learning and educational tasks'],
                ['name' => 'Personal', 'color' => '#17a2b8', 'description' => 'Personal errands and activities'],
                ['name' => 'Health', 'color' => '#dc3545', 'description' => 'Health, fitness, and wellness tasks'],
                ['name' => 'Shopping', 'color' => '#ffc107', 'description' => 'Shopping lists and errands'],
                ['name' => 'Finance', 'color' => '#fd7e14', 'description' => 'Financial tasks and budgeting'],
            ];

            foreach ($categories as $categoryData) {
                Category::create([
                    'name' => $categoryData['name'],
                    'color' => $categoryData['color'],
                    'description' => $categoryData['description'],
                    'user_id' => $user->id,
                ]);
            }

            $this->command->info('Categories seeded successfully!');
        }
    }
}