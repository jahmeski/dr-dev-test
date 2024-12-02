<div class="mt-2">
        <input type="{{ $type }}" name="{{ $name }}" id="{{ $id }}" wire:model.live="schedule"
               class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" {{ $required ? ' required' : '' }} value="{{ $currentValue }}">
    @if($validationErrors === true)
        <x-alert :type="'danger'">
            {{ $message }}
        </x-alert>
    @endif
</div>