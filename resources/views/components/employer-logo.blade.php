@props(['employer','width' => 90, 'height' => 90])

{{--<img src="https://loremflickr.com/{{ $width }}/{{ $height }}/tokyo?random={{ rand(0, 100) }}" alt="" class="rounded-xl">--}}
<img src="{{ asset($employer->logo) }}" width="{{$width}}" alt="" class="rounded-xl">
