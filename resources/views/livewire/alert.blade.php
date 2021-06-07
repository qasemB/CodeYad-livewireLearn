<div>
    @if ($isOpen)
    <div
    class="justify-content-center align-items-center d-flex"
    style=" width: 100% ;
            height: 100vh;
            background: rgba(0, 0, 0, 0.9);
            position: fixed; top: 0;
            left: 0;">

        <div style="width: 350px; height: 200px; background: white; border-radius: 5px;">
            <h4 class="text-center py-3 text-danger">به کدیاد خوش اومدی</h4>
            <h6 class="text-center py-3 text-secondary">کدیاد ، دنیای یادگیری کد</h6>
            <div class="text-center py-3">
                <button class="btn btn-info px-2" wire:click="$set('isOpen' , false)">بزن بریم</button>
            </div>
        </div>
    </div>
    @endif

</div>
