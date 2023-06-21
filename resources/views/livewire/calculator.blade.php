<div>
    <div class="flex flex-col items-center">
        <div class="flex justify-center items-center gap-4 p-16 mx-auto">
            <input type="number" wire:model='number1' placeholder="Number 1">
            <select name="" id="" wire:model='action' class="w-24">
                <option>+</option>
                <option>-</option>
                <option>*</option>
                <option>/</option>
                <option>%</option>
            </select>
            <input type="number" wire:model='number2' placeholder="Number 2">
            <button wire:click='calculate' class="bg-blue-800 hover:bg-blue-900 text-white py-2 px-4 rounded disabled:cursor-not-allowed disabled:bg-opacity-90 {{$disabled ? 'disabled' : ''}}">=</button>
        </div>
        <p class="text-lg font-extrabold">Result = {{$result}}</p>
    </div>
</div>
