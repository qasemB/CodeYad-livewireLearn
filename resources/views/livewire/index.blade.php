<div dir="rtl" class="container">
    <style>
        body{
            background: url("/poster.jpg") no-repeat;
            background-position: center;
            background-size: cover;
            width: 100vw;
            height: 100vh;
        }

        .title_top{
            border-radius: 5px;
            background: rgba(0, 0, 0, 0.5);
            backdrop-filter: blur(3px);
            -webkit-backdrop-filter: blur(3px);
            border: 3px solid white;
        }

    </style>

    <h1 class="title_top text-center text-white py-4 my-4">{{$title}}</h1>
    <h5 class="title_top text-center text-warning py-4 my-4">{{$title2}}</h5>
    <div class="text-center">
        <a href="/task/1" class="btn btn-success px-5 py-3">ورود</a>
    </div>
</div>
