@set($words, explode(',',get_field('marquee',5)))
<div class="stick top-0 sticky top-0 z-50">
  <div class="bg-brand py-2 -mx-4 flex text-center text-sm uppercase justify-center">
    JOIN US: <strong>ALL TIME x OUTSTANDING IN THE FIELD</strong> AT THE ECOLOGY CENTER! <a class="font-bold underline" href="https://outstandinginthefield.com/event-details/ecology-center/">Buy tickets here </a>
  </div>
  <header class="banner bg-white pl-2 sm:pl-0 sm:py-4 flex items-center justify-between sm:text-lg ">
    <div class="flex-1 flex overflow-hidden items-center space-x-4">
      <a href="/" title="{{ $siteName }}" class="uppercase flex-none">
        Almost Always Open
      </a>
      <div id="containerElem" class="hidden sm:flex items-center uppercase overflow-hidden w-full">
        <ul id="list" class="flex items-center space-x-1">
          @foreach($words as $word)
            <li class="list__item flex-none flex space-x-1">
              <span>{{ $word }}</span>
              <span>&larr;</span>
            </li>
          @endforeach
        </ul>
      </div>
    </div>
    <div class="flex-none flex items-center space-x-4 pl-4">
      <a class="text-3xl text-brand flex-none hidden md:block" target="_blank" href="https://www.instagram.com/freakinalltime/" title="instagram">@fab('instagram')</a>
      @include('components.cta',[
        'class' =>'',
        'href'  =>'https://www.toasttab.com/alltime/v3',
        'text'  =>'Order Online' 
      ])
      <a href="https://resy.com/cities/la/all-time" id="resyButton-header">Book your All Time reservation on Resy</a>
    </div>
  </header>
</div>

  <script>
    document.addEventListener('DOMContentLoaded', _ => {
      const items = [...document.getElementsByClassName('list__item')];
      const containerElem = document.getElementById('containerElem');
      const leftSideOfContainer = containerElem.getBoundingClientRect().left;
      const listElem = document.getElementById('list');
      let currentLeftValue = 0;
    
      window.setInterval(animationLoop, 50);
    
      function animationLoop() {
        const firstListItem = listElem.querySelector('.list__item:first-child');
        let rightSideOfFirstItem = firstListItem.getBoundingClientRect().right;
        if(rightSideOfFirstItem == leftSideOfContainer){
          currentLeftValue = -1;
          listElem.appendChild(firstListItem);
        }
        listElem.style.marginLeft = `${currentLeftValue}px`;
        currentLeftValue--;
      }
  });
  </script>