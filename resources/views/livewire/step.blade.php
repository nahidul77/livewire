<div>
    <div class="flex justify-center pb-4 px-4">
        <h2 class="text-lg pb-4">Add steps for task</h2>
        <span wire:click="increment" class="px-2 py-1 cursor-pointer">+</span>

        @foreach ($steps as $step)
            <div class="flex" wire:key="{{ $step }}">
                <input name="step[]" type="text" placeholder="Step {{ $loop->index + 1 }}"> <button
                    wire:click="remove({{ $step }})">-</button>
            </div>
        @endforeach
    </div>
</div>
