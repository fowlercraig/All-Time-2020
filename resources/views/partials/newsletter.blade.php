<div 
  x-show="news" 
  x-transition:enter="transition ease-out duration-200 transform"
  x-transition:enter-start="opacity-0"
  x-transition:enter-end="opacity-100"
  x-transition:leave="transition ease-in duration-75 transform"
  x-transition:leave-start="opacity-100"
  x-transition:leave-end="opacity-0"
  class="fixed bottom-0 inset-x-0 px-4 pb-4 inset-0 flex items-center justify-center z-50">
  <!--
    Background overlay, show/hide based on modal state.

    Entering: "ease-out duration-300"
      From: "opacity-0"
      To: "opacity-100"
    Leaving: "ease-in duration-200"
      From: "opacity-100"
      To: "opacity-0"
  -->
  <div class="fixed inset-0 transition-opacity" @click="news = false">
    <div class="absolute inset-0 bg-orange opacity-75"></div>
  </div>

  <!--
    Modal panel, show/hide based on modal state.

    Entering: "ease-out duration-300"
      From: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
      To: "opacity-100 translate-y-0 sm:scale-100"
    Leaving: "ease-in duration-200"
      From: "opacity-100 translate-y-0 sm:scale-100"
      To: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
  -->
  <div class="relative bg-white shadow-xl overflow-hidden transform transition-all sm:max-w-2xl sm:w-full p-8 md:p-12 md:pb-10">
    <div class="block absolute top-0 right-0 pt-4 pr-4 z-50">
      <button @click="news = false" type="button" class="text-gray-400 hover:text-gray-500 focus:outline-none focus:text-gray-500 transition ease-in-out duration-150">
        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
        </svg>
      </button>
    </div>
    <div class="sm:flex sm:items-start">
      <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left w-full">
        <div class="mt-2">
          <div class="leading-6 text-grey-darkest">
            <div class="text-center text-sm uppercase md:text-xl mb-3">Subscribe to our newsletter</div>
            <div class="klaviyo-form-JMYRi4 w-full"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>