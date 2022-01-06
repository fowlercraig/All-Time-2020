<div x-show="notification" class="fixed bg-black bg-opacity-90 z-50 w-full sm:max-w-lg bottom-0 right-0 shadow-2xl md:m-4">
  <div class="p-8 space-y-4">
    <div class="prose prose-sm text-white">
      @field('notification')
    </div>
    <div class="flex space-x-2 items-center">
      @include('components.cta',[
        'class' =>'',
        'href'  =>'https://www.toasttab.com/alltime/v3',
        'text'  =>'Order Online' 
      ])
      <a href="https://resy.com/cities/la/all-time" id="resyButton-footer">Book your All Time reservation on Resy</a>
    </div>
    <button @click="notification = false" class="text-white border-b text-sm">or just close this</button>
  </div>
</div>