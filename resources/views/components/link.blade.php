@php
    $classes="text-xs text-gray-500 hover:text-gray-900 font-bold";
@endphp
{{--$attributes va detectar los atributos que le mandemos y le hacemos un merge (unimos)--}}
<a {{ $attributes->merge(['class'=>$classes, 'href'=>$enlace]) }}>
    {{ $slot }}
</a>