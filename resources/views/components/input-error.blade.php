@props(['messages'])

@if ($messages)
   
    <ul {{ $attributes->merge(['class' => 'text-sm text-red-600 dark:text-red-400 space-y-1']) }}>
        @foreach ((array) $messages as $message)
            <li class="bg-red-100 border-red-600 p-2">{{ $message }}</li>
        @endforeach
    </ul>
   
@endif
