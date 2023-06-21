<div class="flex justify-center align-center gap-6 p-16">
    <button wire:click='dicrement' class="text-[40px] font-extrabold bg-blue-800 hover:bg-blue-900 text-white  px-7 rounded-full">-</button>
    <span class="text-[40px] font-extrabold">{{$count}}</span>
    <button wire:click='increment' class="text-[40px] font-extrabold bg-blue-800 hover:bg-blue-900 text-white  px-7 rounded-full">+</button>
</div>
