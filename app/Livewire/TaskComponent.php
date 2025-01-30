<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Task;
use Illuminate\Support\Facades\Auth;


class TaskComponent extends Component
{
    public $tasks = [];
    public $title;
    public $description;
    public $modal = false;

    public function mount(){
        $this->tasks = $this->getTasks();
    }

   
    public function getTask(){
      return Task::where('user_id', Auth::user()->id)->get();
    }
   
    public function openCreateModal()
    {
        $this->clearFields();
        $this->modal = true;
    }

    private function clearFields()
    {
        // Clear fields logic here
    }

    public function closeCreateModal()
    {
       
        $this->modal = false;
    }

    public function createTask()
    {

        $this->validate([
            'title' => 'required|string|max:225',
            'description' => 'required|string|max:1000',
        ]);

        $task = new Task();
        $task->title = $this->title;
        $task->description = $this->description;
        $task->user_id = Auth::user()->id;
        $task->save();
        $this->clearFields();
        $this->closeCreateModal();
        $this->tasks = $this->getTasks();
      
    }

    public function updateTask(Task $task)
    {
        $this->title = $task->title;
        $this->description = $task->description;
        $this->modal = true;
       
    }
    
}

