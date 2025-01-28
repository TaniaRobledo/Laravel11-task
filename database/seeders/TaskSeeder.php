<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Task;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $task = new Task();
        $task->title='Task 1';
        $task->description='This is the task 1';
        $task->user_id=1;
        $task->save();
    }
}
