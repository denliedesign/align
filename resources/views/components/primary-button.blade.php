<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex btn btn-violet text-white px-4 shadow rounded mx-4']) }}>
    {{ $slot }}
</button>
