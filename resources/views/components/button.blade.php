<a {{ $attributes->merge(['class' => $type_class . 'type'.$type ]) }}>
    {{ $slot }}
</a>