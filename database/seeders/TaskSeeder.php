<?php

namespace Database\Seeders;

use App\Models\Task;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::first();
        
        if ($user) {
            // Get categories for this user
            $categories = Category::where('user_id', $user->id)->get();
            $workCat = $categories->where('name', 'Work')->first();
            $studyCat = $categories->where('name', 'Study')->first();
            $personalCat = $categories->where('name', 'Personal')->first();
            $healthCat = $categories->where('name', 'Health')->first();

            $tasks = [
                [
                    'title' => 'Complete Project Documentation',
                    'description' => 'Write technical documentation for the to-do app including API documentation and user guide',
                    'priority' => 'high',
                    'due_date' => now()->addDays(3),
                    'due_time' => '17:00:00',
                    'category_id' => $workCat?->id,
                    'status' => 'pending',
                ],
                [
                    'title' => 'Setup Laravel Environment',
                    'description' => 'Install Laravel 11, configure database, and set up authentication',
                    'priority' => 'high',
                    'due_date' => now()->addDays(1),
                    'due_time' => '14:30:00',
                    'category_id' => $workCat?->id,
                    'status' => 'completed',
                    'completed_at' => now()->subDays(1),
                ],
                [
                    'title' => 'Design UI Mockups',
                    'description' => 'Create responsive designs for all pages in Figma',
                    'priority' => 'medium',
                    'due_date' => now()->addDays(5),
                    'due_time' => '12:00:00',
                    'category_id' => $workCat?->id,
                    'status' => 'pending',
                ],
                [
                    'title' => 'Study Laravel Eloquent',
                    'description' => 'Learn Eloquent ORM relationships and advanced queries',
                    'priority' => 'medium',
                    'due_date' => now()->addDays(7),
                    'due_time' => '20:00:00',
                    'category_id' => $studyCat?->id,
                    'status' => 'pending',
                ],
                [
                    'title' => 'Morning Workout',
                    'description' => '30 minutes cardio and 15 minutes stretching',
                    'priority' => 'low',
                    'due_date' => now()->addDays(1),
                    'due_time' => '07:00:00',
                    'category_id' => $healthCat?->id,
                    'status' => 'pending',
                ],
                [
                    'title' => 'Read Atomic Habits',
                    'description' => 'Read chapters 1-3 of Atomic Habits book',
                    'priority' => 'low',
                    'due_date' => now()->addDays(4),
                    'due_time' => '21:00:00',
                    'category_id' => $personalCat?->id,
                    'status' => 'pending',
                ],
                [
                    'title' => 'Team Meeting',
                    'description' => 'Weekly team sync to discuss project progress',
                    'priority' => 'high',
                    'due_date' => now()->addDays(2),
                    'due_time' => '10:00:00',
                    'category_id' => $workCat?->id,
                    'status' => 'pending',
                ],
                [
                    'title' => 'Grocery Shopping',
                    'description' => 'Buy vegetables, fruits, and other essentials',
                    'priority' => 'medium',
                    'due_date' => now()->addDays(3),
                    'due_time' => '18:00:00',
                    'category_id' => $categories->where('name', 'Shopping')->first()?->id,
                    'status' => 'pending',
                ],
                [
                    'title' => 'Pay Bills',
                    'description' => 'Pay electricity and internet bills',
                    'priority' => 'high',
                    'due_date' => now()->addDays(10),
                    'due_time' => '23:59:00',
                    'category_id' => $categories->where('name', 'Finance')->first()?->id,
                    'status' => 'pending',
                ],
                [
                    'title' => 'Meditation',
                    'description' => '15 minutes mindfulness meditation',
                    'priority' => 'low',
                    'due_date' => now()->addDays(1),
                    'due_time' => '08:00:00',
                    'category_id' => $healthCat?->id,
                    'status' => 'pending',
                ],
            ];

            foreach ($tasks as $taskData) {
                Task::create([
                    'title' => $taskData['title'],
                    'description' => $taskData['description'],
                    'priority' => $taskData['priority'],
                    'due_date' => $taskData['due_date'],
                    'due_time' => $taskData['due_time'],
                    'category_id' => $taskData['category_id'],
                    'status' => $taskData['status'],
                    'completed_at' => $taskData['completed_at'] ?? null,
                    'user_id' => $user->id,
                ]);
            }

            $this->command->info('Tasks seeded successfully!');
        }
    }
}