
<div dir="rtl" class="main_div">
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
            backdrop-filter: blur(3px);
            overflow: auto;
        }
        .main_div .container ul{
            list-style-type: none;padding:0.5rem;margin: 0;
        }
        .main_div .container ul li{
            background: rgba(218, 112, 214, 0.582); padding: 0.5rem 1rem;border-radius: 3px; box-shadow: 0 0 3px purple; margin: 0.5rem 0;
            position: relative
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
        .loader {
            border: 4px solid transparent; /* Light grey */
            border-top: 4px solid #b7ecec; /* Blue */
            border-radius: 50%;
            width: 40px;
            height: 40px;
            animation: spin 2s linear infinite;
            position: absolute;
            right: 2px;
            top: 2px;
            }

            @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
    </style>

    <div class="container">
        <div class="loader" wire:loading wire:target="title"></div>
        <h1 class="text-center" wire:loading.class="text-danger">سلام دوستان عزیزم</h1>
        <form wire:submit.prevent="save">
            <div class="action_content mt-2">
                <button class="btn mx-1 btn-success" type="submit" wire:loading.remove> add </button>
                <input type="text" class="form-control mx-1" placeholder="عنوان" wire:model="title">
            </div>
            @error('title')
                <small class="text-danger text-center d-block">{{$message}}</small>
            @enderror
            <textarea class="form-control mt-1" placeholder="متن پیام" wire:model="content"></textarea>
            @error('content')
                <small class="text-danger text-center d-block">{{$message}}</small>
            @enderror
            <input type="file" class="form-control mt-1" wire:model="photo">
            @error('photo')
                <small class="text-danger text-center d-block">{{$message}}</small>
            @enderror
        </form>
       <ul>
           @foreach ($allPosts as $post)
           <li>
               <h3 class="text-right">{{$post->title}}</h3>
               <p class="text-right">
                   {{$post->content}}
                   <img src="{{$post->image}}" width="100" alt="">
               </p>
            </li>
            @endforeach

       </ul>
    </div>
</div>
