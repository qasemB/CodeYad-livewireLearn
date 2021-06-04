<?php

namespace App\Http\Livewire;

use App\Models\Task;
use App\Models\User;
use Livewire\Component;

class TasksComp extends Component
{

    public $user;
    public $new_task;
    public $task_Arr;
    public $editId = 0;

    public function updateTask()
    {
        if ($this->editId) {
            $task = Task::find($this->editId);
            $task->task = $this->new_task;
            $task->save();
            $this->task_Arr = Task::where('user_id', $this->user->id)->get();
            $this->editId = 0;
        }
    }

    public function goToEdit($id)
    {
        $task = Task::find($id);
        $this->new_task = $task->task;
        $this->editId = $task->id;
    }

    public function deleteTask($id)
    {
        Task::where('id', $id)->delete();
        $this->task_Arr = $this->task_Arr->where('id', '!=', $id);
    }

    public function addNewTask()
    {
        $newtask = new Task;
        $newtask->user_id = $this->user->id;
        $newtask->task = $this->new_task;
        $newtask->save();
        $this->task_Arr = Task::where('user_id', $this->user->id)->get();
    }

    public function mount($userId)
    {
        $this->user = User::find($userId);
        $this->task_Arr = Task::where('user_id', $userId)->get();
    }

    public function render()
    {
        return view('livewire.tasks-comp');
    }
}
