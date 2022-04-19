<!-- Walk as if you are kissing the Earth with your feet. - Thich Nhat Hanh -->
@props(['disabled' => false]) 
<button {{ $disabled ? 'disabled' : '' }} {{ $attributes->merge(['type' => 'submit','class' => 'bg-red-500 hover:bg-red-600 disabled:hover:bg-red-500 h-full px-5 py-2 text-xs font-bold tracking-wide text-white rounded-md disabled:opacity-50 disabled:cursor-not-allowed']) }}>
    {{ $slot }}
</button>   