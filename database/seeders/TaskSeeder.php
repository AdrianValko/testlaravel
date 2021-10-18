<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tasks = [
            1 => [
                'content' => 'Kosit dvor',
                'owner' => 'Lukas'
            ],
            2 => [
                'content' => 'Uprac riad',
                'owner' => 'Peter'
            ],
        ];
        foreach ($tasks as $id => $taskData) {
            $task = Task::find($id);
            if(!$task) {
                $newTask = new Task();
                $newTask->id = $id;
                $newTask->content = $taskData['content'];
                $newTask->owner = $taskData['owner'];
                $newTask->save();
            }
        }

    }
}
