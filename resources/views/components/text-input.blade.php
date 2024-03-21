@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300 dark:border-gray-700 dark:bg-gray-200 dark:text-gray-900 focus:border-green-400 dark:focus:border-green-400 focus:ring-green-400 dark:focus:ring-green-400 rounded-md shadow-sm']) !!}>
