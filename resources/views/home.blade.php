@vite('resources/css/app.css')

@include('components.navbar')

<!-- Image Slider -->
<div class="relative w-full mx-auto">
    <div class="relative overflow-hidden h-64 md:h-[41rem] lg">
      <div class="slide absolute inset-0 transition-shadow duration-800">
        <img src="{{ asset('images/wayang.jpg') }}" alt="Image 1" class="w-full h-full object-cover">
      </div>
      <div class="slide absolute inset-0 transition-shadow duration-800">
        <img src="{{ asset('images/wayang-2.png') }}" alt="Image 2" class="w-full h-full object-cover">
      </div>
      <div class="slide absolute inset-0 transition-shadow duration-800">
        <img src="{{ asset('images/wayang-3.jpg') }}" alt="Image 3" class="w-full h-full object-cover">
      </div>
    </div>
  
    <!-- Controls -->
    <div id="indicator-container" class="absolute flex justify-center space-x-2 bottom-4 w-full"></div>
</div>

<!-- Body -->
<div class="flex justify-between items-center space-x-4 px-8 py-8">
     <div class="w-1/2">
      <h1 class="text-4xl font-bold">Lorem ipsum dolor sit amet</h1>
      <p class="mt-4 text-lg text-gray-600">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque mi augue, fermentum eu quam quis, suscipit vehicula magna. Nam porttitor accumsan libero eget sodales. Quisque at nulla sit amet lectus imperdiet imperdiet convallis tempus nunc. Suspendisse interdum rutrum mauris at gravida. Duis eu nibh eleifend, tempor diam vitae, accumsan ligula. Nullam vel libero pulvinar, vehicula massa non, condimentum tellus. Sed tempus porttitor accumsan. Aliquam nunc odio, sodales eget turpis eu, bibendum molestie lectus. Donec nulla odio, imperdiet sit amet orci eu, hendrerit lobortis massa. Morbi pulvinar metus at arcu feugiat consequat. Duis et sem in est tincidunt eleifend ornare in nibh. Ut non nulla nec turpis lobortis dignissim. Mauris nec ipsum faucibus, porta ligula sed, sagittis turpis. Praesent et eros vel nisl finibus pellentesque. Suspendisse et dictum lectus.
      </p>
      <button class="mt-6 px-4 py-2 border border-gray-800 text-gray-800 hover:bg-gray-800 hover:text-white rounded-md">
        Detail
      </button>
    </div>
  
<!-- Right Content -->
<div class="w-1/2 text-right">
    <div class="mt-6 space-y-2">
        <img src="path-to-logo.png" alt="Logo" class="w-1/3 mx-auto justify-center">
        <p class="flex items-center justify-center space-x-2">
          <span>info.jakarta@kempinski.com</span>
        </p>
        <p class="flex items-center justify-center space-x-2">
          <span>+62 21 2358 3800</span>
        </p>
        <p class="flex items-center justify-center space-x-2">
          <span>Jakarta, Indonesia</span>
        </p>
    </div>
</div>
</div>

<div class="w-full">
    <div class="w-full relative mx-auto h-auto overflow-hidden">
        <img src="{{ asset('images/wayang-3.jpg') }}" alt="image" class="w-full h-auto relative z-0 transition-all duration-300 hover:scale-110">
    </div>
</div>


<script>
    const slides = document.querySelectorAll('.slide');
    const indicatorContainer = document.getElementById('indicator-container');
    let currentIndex = 0;
    const transitionTime = 3000;

    const createIndicators = () => {
        slides.forEach((_, index) => {
            const indicator = document.createElement('span');
            indicator.classList.add('indicator', 'w-2', 'h-2', 'rounded-full', 'cursor-pointer');
            
            indicator.addEventListener('click', () => changeSlide(index));

            indicatorContainer.appendChild(indicator);
        });
    };

    const changeSlide = (index) => {
        const indicators = document.querySelectorAll('.indicator');
        slides.forEach((slide, i) => {
            const isActive = i === index;
            slide.classList.toggle('translate-x-0', isActive);
            slide.classList.toggle('translate-x-full', !isActive);
            indicators[i].classList.toggle('bg-orange-200', isActive);
            indicators[i].classList.toggle('bg-orange-100', !isActive);
        });
        currentIndex = index; 
    };

    setInterval(() => {
        currentIndex = (currentIndex + 1) % slides.length;
        changeSlide(currentIndex);
    }, transitionTime);

    createIndicators();  
    changeSlide(currentIndex);

</script>
