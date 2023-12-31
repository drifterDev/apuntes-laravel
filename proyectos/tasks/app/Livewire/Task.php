<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Task as TaskModel;
use Livewire\Attributes\Validate;

class Task extends Component
{
    public $tasks;

    #[Validate('required|min:6|max:40')]
    public $title;

    public TaskModel $task;

    // protected $rules = [
    //     'title' => 'required|min:6|max:40',
    // ];

    // Se ejecuta una unica vez al inicio
    public function mount()
    {
        $this->title = '';
        $this->task = new TaskModel();
        $this->tasks = TaskModel::orderBy('id', 'asc')->get();
    }

    public function edit(TaskModel $task)
    {
        $this->task = $task;
        $this->title = $task->title;
    }

    public function delete(TaskModel $task)
    {
        $task->delete();
        $this->tasks = TaskModel::orderBy('id', 'asc')->get();
        session()->flash('message', 'Tarea eliminada correctamente');
    }

    public function done(TaskModel $task)
    {
        $task->update(['done' => !$task->done]);
        $this->tasks = TaskModel::orderBy('id', 'asc')->get();
    }

    public function save()
    {
        $this->validate();
        $this->task->title = $this->title;
        $this->task->save();
        $this->mount();
        session()->flash('message', 'Tarea guardada correctamente');
    }

    public function render()
    {
        return view('livewire.task');
    }
}
