@if ($navigation)
  <ul class="md:flex items-center text-sm uppercase space-y-1 md:space-x-4 justify-center py-4 text-center md:text-left">
    @foreach ($navigation as $item)
      <li><a class="hover:underline" href="{{ $item->url }}">{{ $item->label }}</a></li>
    @endforeach
  </ul>
@endif