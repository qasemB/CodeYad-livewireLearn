
<div class="main_div">
    <style>
        body{
            background: url("/poster.jpg") no-repeat;
            background-position: center;
            background-size: cover;
            width: 100vw;
            height: 100vh;
        }

        .main_div{
            display: flex;position: fixed;width: 100vw;height: 100vh ;left: 0;top:0;justify-content: center;align-items: center
        }
        .main_div .container{
            border: 3px solid purple; border-radius: 5px; box-shadow: 0 0 5px black;width:80vw; height: 80vh;
            background: rgba(255, 255, 255, 0.5);
            backdrop-filter: blur(3px)
        }
        .main_div .container ul{
            list-style-type: none;padding:0.5rem;margin: 0
        }
        .main_div .container ul li{
            background: rgba(218, 112, 214, 0.582); padding: 0.5rem 1rem; text-align: center;border-radius: 3px; box-shadow: 0 0 3px purple; margin: 0.5rem 0;
            position: relative;
        }
        .main_div .container ul li .btn_box{
           position: absolute;
           left: 5px;
           top: 4px;
        }
        .main_div .container ul li .btn_box .btn{
            width: 32px;
            height: 32px;
            font-size: 0.75rem;
            text-align: center;
            padding: 0
        }
        .main_div .action_content{
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>

    <div class="container">
        <h1 class="text-center">{{$user->name}}</h1>
        <div class="action_content mt-2">
            <button class="btn mx-1 {{$editId ? 'btn-warning' : 'btn-success'}}"  wire:click="{{$editId ? 'updateTask' : 'addNewTask' }}">
                {{$editId ? 'edit' : 'add'}}
            </button>
            <input type="text" class="form-control mx-1" wire:model="new_task">
        </div>
       <ul>
           @foreach ($tasks as $task)
           <li>
               <div class="btn_box">
                <button class="btn btn-sm btn-danger delete_btn rounded-circle" wire:click="deleteTask({{$task->id}})" >del</button>
                <button class="btn btn-sm btn-warning edit_btn rounded-circle" wire:click="goToEdit({{$task->id}})" >edit</button>
               </div>
               {{$task->task}}
            </li>
           @endforeach
       </ul>
       {{$tasks->links('livewire.pagination-links')}}
    </div>
</div>
