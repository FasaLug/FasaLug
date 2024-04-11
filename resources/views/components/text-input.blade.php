@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'p-3 c bg-slate-200 outline-none rounded-md shadow-sm']) !!}>
