<div>
    <div class="flex justify-center pb-4 px-4">
        <h2 class="text-lg pb-4">Add steps for task</h2>
        <span wire:click="increment" class="px-2 py-1 cursor-pointer">+</span>

        @for ($i = 0; $i < $steps; $i++)
            <div class="flex">
                <input type="text">
            </div>
        @endfor
    </div>
</div>
