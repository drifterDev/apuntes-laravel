<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Task as TaskModel;

class Task extends Component
{
    public $tasks;
    public TaskModel $task;
    protected $rules = ['task.title' => 'required|max:40'];

    // Se ejecuta una unica vez al inicio
    public function mount()
    {
        $this->tasks = TaskModel::get();
        $this->task = new TaskModel();
    }

    public function render()
    {
        return view('livewire.task');
    }

    public function save()
    {
        dd($this->task);
    }
}
