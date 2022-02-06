<button {{ $attributes->merge(['type' => 'submit', 'class' => 'hover:bg-orange-600 bg-orange-700 rounded text-base text-xs leading-none text-white p-4
uppercase focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-700']) }}>
    {{ $slot }}
</button>
