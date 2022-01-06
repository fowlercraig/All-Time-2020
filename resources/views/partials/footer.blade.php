<footer class="content-info">
  @include('partials.navigation')
  <div class="py-4 border-t border-gray-100 font-brand uppercase">
    <div class="px-4 max-w-full text-xs">
      <div class="flex justify-center space-x-4">
        <a class="underline" href="mailto:hello@alltimelosangeles.com">Get in Touch</a>
        <span>© {{ $siteName }}</span>
      </div>
    </div>
  </div>
</footer>

<div 
  :class="{ '': subscribe, 'hidden': !subscribe }"
  @click.away="subscribe = false"
  class="fixed w-full max-w-lg top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 z-50 shadow-xl bg-white">
  <div class="p-4 sm:p-8 xl:p-16 relative">
    <button @click="subscribe = false" class="absolute right-0 top-0 block m-4 opacity-50 hover:opacity-100">
      @svg('images.icons.cross', 'w-6 h-6', ['aria-label' => 'Close Button'])
    </button>
    <div class="text-center text-sm uppercase md:text-xl mb-3">Subscribe to our newsletter</div>
    <div class="klaviyo-form-JMYRi4 w-full"></div>
  </div>
</div>

<script async type="text/javascript" src="https://static.klaviyo.com/onsite/js/klaviyo.js?company_id=n5CVUT"></script>
<script src="https://widgets.resy.com/embed.js"></script>
<script>
  resyWidget.addButton(document.getElementById('resyButton-footer'), {
    "venueId":2134,
    "apiKey":"AcYRG5lexa6B23Z9l7fq4UKRGb2878y6",
    "replace":true,
  });
  resyWidget.addButton(document.getElementById('resyButton-header'), {
    "venueId":2134,
    "apiKey":"AcYRG5lexa6B23Z9l7fq4UKRGb2878y6",
    "replace":true,
  });
</script>