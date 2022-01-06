@extract([
  'href'   => $href   ?? '#',
  'text'   => $text   ?? 'Need Text Here',
  'class'  => $class  ?? ''
])

<a href="{!! $href !!}" class="w-full h-12 group overflow-hidden block {!! $class !!}" target="_blank">
  <span class="bg-brand uppercase text-white h-12 w-full flex items-center px-6 transition ease duration-200 transform group-hover:-translate-y-full">
    <span class="mx-auto">{!! $text !!}</span>
  </span>
  <span class="bg-yellow-700 uppercase text-white h-12 w-full flex items-center px-6 transition ease duration-200 transform group-hover:-translate-y-full">
    <span class="mx-auto">{!! $text !!}</span>
  </span>
</a>