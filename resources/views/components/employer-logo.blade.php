@props(['width' => 90, 'height' => 90])

<img src="https://loremflickr.com/{{ $width }}/{{ $height }}/tokyo?random={{ rand(0, 100) }}" alt="" class="rounded-xl">
