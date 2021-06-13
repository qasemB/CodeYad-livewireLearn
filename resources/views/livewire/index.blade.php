<div dir="rtl" class="container">
    <style>
        body{
            background: url("/poster.jpg") no-repeat;
            background-position: center;
            background-size: cover;
            width: 100%;
            height: 100vh;
        }

        .title_top{
            border-radius: 5px;
            background: rgba(0, 0, 0, 0.5);
            backdrop-filter: blur(3px);
            -webkit-backdrop-filter: blur(3px);
            border: 3px solid white;
        }

        .btn{
            width: 150px
        }

    </style>

    <h1 class="title_top text-center text-white py-4 my-4">{{$title}}</h1>
    <h5 class="title_top text-center text-warning py-4 my-4">{{$title2}}</h5>
    <div class="text-center">
        <a href="/task/1" class="btn btn-success  py-2">کارها</a>
        <a href="/posts" class="btn btn-success py-2">پست ها</a>
    </div>

    <div class="d-flex align-items-center justify-content-center mt-2">
        <span class="{{$clockColor ? 'bg-dark' : 'bg-primary'}} text-light p-3 rounded">
            now : {{now('Asia/Tehran')->format('H:i:s')}}
        </span>
    </div>
    <div class="d-flex align-items-center justify-content-center mt-2">
        <span class="bg-danger text-light p-3 rounded" wire:offline>
            شما آفلاین هستید
        </span>
    </div>
    <div class="text-center mt-5">
        <button class="btn btn-primary" wire:click.prefetch="changeColor">نمایش</button>
    </div>

    <livewire:alert/>

</div>
