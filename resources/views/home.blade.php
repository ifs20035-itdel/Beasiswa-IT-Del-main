@extends('layouts.app')
@section('title','Home')
@section('background', 'bg-white')
@section('background-opc')
@section('content')

@csrf
<div id="hero" class="lg:flex items-center">
  <div class="px-5 sm:px-10 md:px-10 md:flex lg:block lg:w-1/2 lg:max-w-3xl lg:mr-8 lg:px-20">
    <div class="md:w-1/2 md:mr-10 lg:w-full lg:mr-0">            
      <h1 class="text-5xl font-extrabold tracking-tight text-black sm:text-5xl md:text-5xl lg:text-6xl xl:text-8xl">
        <span class="block xl:inline">Create The</span><br>
        <span class="block text-indigo-600 xl:inline">Best Future</span>
      </h1>
      <p class="mt-5 mx-auto text-base text-yellow-400 sm:max-w-md lg:text-xl md:max-w-3xl font-extrabold">Create Your Own Dream</p>
    </div>
  </div>

  <div class="mt-6 w-full flex-1 lg:mt-0">
    <img class="" src="{{url(asset('assets/landing-page.png'))}}" />
  </div>
</div>

<div class="absolute top-[522px] left-[373px] rounded-xxs bg-white shadow-[0px_10px_2px_rgba(0,_0,_0,_0.03),_0px_12px_16px_rgba(0,_0,_0,_0.1)] flex flex-row py-px pr-[1.015625px] pl-px items-center justify-center text-darkslategray-100 border-[1px] border-solid border-darkgray rounded-md">
          <div class="relative w-[379.33px] h-[410.89px] shrink-0">
            <img
              class="absolute top-[50px] left-[149px] rounded-base w-[82px] h-[82px] object-cover"
              alt=""
              src="{{url(asset('assets/icon-internal.png'))}}"
            />
            <div
              class="absolute top-[161.75px] left-[25px] flex flex-col pt-0 pb-[0.09375px] pr-[4.50311279296875px] pl-[4.6875px] items-center justify-start gap-[15.8px]"
            >
              <b class="relative text-2xl text-[#31506E]">Beasiswa Internal</b>
              <div
                class="relative text-base text-darkslategray-200 flex items-center justify-center w-[320.14px] text-[#31506E] text-center"
              >
                Beasiswa yang diberikan oleh Institut Teknologi Del dengan
                sasaran dan ketentuan yang ...
              </div>
            </div>
            <div
              class="absolute top-[calc(50%_+_109.95px)] left-[calc(50%_-_57.29px)] rounded flex flex-row pt-[8.5px] pb-[9px] pr-[21.181251525878906px] pl-[21.381248474121094px] items-start justify-start text-[17px] border-[1px] border-solid border-whitesmoke-200"
            >
              <a href="/beasiswaInternal"><b class="text-base text-[#31506E]">Read me</a>
            </div>
          </div>
          
          <div class="relative w-[379.33px] h-[410.89px] shrink-0 text-orange">
            <img
              class="absolute top-[51px] left-[148.67px] rounded-base w-[82px] h-[82px] object-cover"
              alt=""
              src="{{url(asset('assets/icon-eksternal.png'))}}"
            />
            <div class="absolute top-[161.75px] left-[25px] flex flex-col pt-0 pb-[0.09375px] pr-[6.51873779296875px] pl-[6.71875px] items-center justify-start gap-[15.8px]">
              <b class="text-2xl text-[#F49D1A]">Beasiswa Eksternal</b>
              <div
                class="relative text-base text-darkslategray-200 flex items-center justify-center w-[316.09px] text-center text-[#31506E]"
              >
                Beasiswa yang diperoleh dari luar kampus, namun dikelola oleh
                Institut Teknologi Del sesuai ketentuan yang ...
              </div>
            </div>
            <div
              class="absolute top-[calc(50%_+_109.95px)] left-[calc(50%_-_55.95px)] rounded flex flex-row pt-[8.5px] pb-[9px] pr-[17.845314025878906px] pl-[18.045310974121094px] items-start justify-start text-xl border-[1px] border-solid border-whitesmoke-200"
            >
            <a href="/beasiswaEksternal"><b class="text-base text-[#F49D1A]">Read me</b></a>
            </div>
          </div>
        </div>

  <!-- Container -->
  <div class="container my-24 px-12 mx-auto">

    <!-- Section: Design Block -->
    <section class="mb-32 text-[#0D285F]">
      <div class="px-6 py-12 md:mx-24 text-center lg:text-left">
        <div class="container mx-auto mt-40">
          <div class="grid lg:grid-cols-2 gap-12 flex items-center">
            <div class="mt-12 lg:mt-0">
              <h1 class="text-5xl md:text-6xl xl:text-7xl font-bold tracking-tight mb-12">
                Tentang <br /><span>Kami</span>
              </h1>
              <p class="text-lg">
              Insititut Teknonogi Del adalah sebuah perguruan tinggi swasta yang berkedudukan di desa Sitoluama, kecamatan Laguboti, Kabupaten Toba, Sumatra Utara, Indonesia yang didirikan oleh Luhut Binsar Panjaitan.
              </p>
            </div>
            <div class="mb-12 lg:mb-0">
              <div class="embed-responsive embed-responsive-16by9 relative w-full overflow-hidden rounded-lg shadow-lg"
                style="padding-top: 56.25%">
                <iframe class="embed-responsive-item absolute top-0 right-0 bottom-0 left-0 w-full h-full"
                  src="https://www.youtube.com/embed/iRuvHVWDpGk"
                  allowfullscreen="" data-gtm-yt-inspected-2340190_699="true" id="240632615"></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Section: Design Block -->
    
  </div>
  <!-- Container for demo purpose -->

<!-- Section 2 -->
<!-- <section class="bg-white md:px-0">
  <div class="container items-center max-w-6xl mx-auto xl:px-5">
    <div class="flex flex-wrap items-center sm:-mx-3">
      <div class="w-full md:w-1/2 md:px-3">
        <div class="w-full pb-6 space-y-6 sm:max-w-md lg:max-w-lg md:space-y-4 lg:space-y-8 xl:space-y-9 sm:pr-5 lg:pr-0 md:pb-0">
          <h1 class="text-4xl font-extrabold tracking-tight text-black sm:text-5xl md:text-4xl lg:text-5xl xl:text-6xl">
            <span class="block xl:inline">Create the</span><br>
            <span class="block text-indigo-600 xl:inline">Best Future</span>
          </h1>
          <p class="mx-auto text-base text-gray-500 sm:max-w-md lg:text-xl md:max-w-3xl">Create Your Own Dream</p>
        </div>
      </div>
      <div class="w-full md:w-1/2">
        <div class="w-full h-auto overflow-hidden">
            <img src="{{url(asset('assets/landing-page.png'))}}">
          </div>
      </div>
    </div>
  </div>
</section> -->

<!-- Component Code -->

<!-- <div class="relative h-screen w-full flex items-center justify-start text-left bg-cover bg-center" style="background-image:url(https://images.unsplash.com/photo-1551434678-e076c223a692?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2850&q=80);">
  <div class="absolute top-0 right-0 bottom-0 left-0 bg-gray-900 opacity-75"></div>
  
  <main class="px-10 lg:px-24 z-10">
        <div class="text-left">
          <h2 class="text-4xl tracking-tight leading-10 font-extrabold sm:text-5xl text-black sm:leading-none md:text-6xl">
            Create the<br>
            <span class="text-indigo-600">Best Future</span>
          </h2>
          <p class="mt-3 text-black sm:mt-5 sm:max-w-xl md:mt-5 text-lg font-light">
          Create Your Own Dream
          </p>
        </div>
      </main>
  
</div>

Credit: Componentity.com -->
<!-- <a href="https://componentity.com" target="_blank" class="block">
  <img src="http://codenawis.com/componentity/wp-content/uploads/2020/08/logo-componentity-%E2%80%93-9.png" class="w-48 mx-auto my-5">
</a> -->

<!-- <div style="height:1600px">
    <img src="{{asset('assets/DashboardBg.jpg')}}" alt="theme" class=" object-cover absolute z-0" style=" top:0; width:100%; height:80vh" >
    <div class="absolute z-10 top-40 pl-12">
      <h1 class="text-6xl text-black drop-shadow-lg pt-5 -z-0"> <b>Create</b> Best Future, <br> </h1>
      <h1 class="text-6xl text-black drop-shadow-lg pt-5 -z-0"><b>Create</b> Your Own Dream</h1>
      <h5 class="text-2xl text-black drop-shadow-lg pt-5 font-mono -z-0">Selamat Datang ke Web Portal Beasiswa Institut Teknologi Del!</h5>
    </div>
    <div class="absolute z-10 pl-5 flex mx-20 p-5 rounded-md" style="margin-top: 550px">
      <div class="w-full bg-gray-100 py-5 px-10 rounded-md">
        <h1 class="font-bold tracking-wider text-3xl mb-2">BERITA TERBARU</h1>
        @include('blog.postArtikel')
      </div>
      <div class="border w-3/4">
        <h1 class="font-bold tracking-wider text-3xl ml-3 my-2">PENGUMUMAN</h1>
        @include('blog.postPengumuman')
      </div>
    </div>
    <div class="absolute z-10 pl-5  mx-20 p-5 rounded-md" style="margin-top: 1150px ">
      <h1 class="px-10 my-4 text-3xl font-bold ">Program yang Tersedia</h1>
      @include('daftarBeasiswa.beasiswaCard')
    </div>
</div> -->

<!-- <div style="height:1600px">
    <img src="{{asset('assets/DashboardBg.jpg')}}" alt="theme" class=" object-cover absolute z-0" style=" top:0; width:100%; height:80vh" >
    <div class="absolute z-10 top-40 pl-12">
      <h1 class="text-6xl text-black drop-shadow-lg pt-5 -z-0"> <b>Create</b> Best Future, <br> </h1>
      <h1 class="text-6xl text-black drop-shadow-lg pt-5 -z-0"><b>Create</b> Your Own Dream</h1>
      <h5 class="text-2xl text-black drop-shadow-lg pt-5 font-mono -z-0">Selamat Datang ke Web Portal Beasiswa Institut Teknologi Del!</h5>
    </div>
    <div class="absolute z-10 pl-5 flex mx-20 p-5 rounded-md" style="margin-top: 550px">
      <div class="w-full bg-gray-100 py-5 px-10 rounded-md">
        <h1 class="font-bold tracking-wider text-3xl mb-2">BERITA TERBARU</h1>
        @include('blog.postArtikel')
      </div>
      <div class="border w-3/4">
        <h1 class="font-bold tracking-wider text-3xl ml-3 my-2">PENGUMUMAN</h1>
        @include('blog.postPengumuman')
      </div>
    </div>
    <div class="absolute z-10 pl-5  mx-20 p-5 rounded-md" style="margin-top: 1150px ">
      <h1 class="px-10 my-4 text-3xl font-bold ">Program yang Tersedia</h1>
      @include('daftarBeasiswa.beasiswaCard')
    </div>
</div> -->

<!-- <div class="flex items-center bg-indigo-100 w-screen min-h-screen" style="font-family: 'Muli', sans-serif;">
  <div class="container ml-auto mr-auto flex flex-wrap items-start">
    <div class="w-full pl-5 lg:pl-2 mb-4 mt-4">
      <h1 class="text-3xl lg:text-4xl text-gray-700 font-extrabold">
      BERITA
      </h1>
    </div>
    <div class="w-full md:w-1/2 lg:w-1/4 pl-5 pr-5 mb-5 lg:pl-2 lg:pr-2">
      <div class="bg-white rounded-lg m-h-64 p-2 transform hover:translate-y-2 hover:shadow-xl transition duration-300">
        <figure class="mb-2">
          <img src="{{asset('assets/DashboardBg.jpg')}}" alt="" class="h-64 ml-auto mr-auto" />
        </figure>
        <div class="rounded-lg p-4 bg-purple-700 flex flex-col">
          <div>
            <h5 class="text-white text-2xl font-bold leading-none">
              iPhone 11 Pro Max
            </h5>
            <span class="text-xs text-gray-400 leading-none">And then there was Pro.</span>
          </div>
          <div class="flex items-center">
            <div class="text-lg text-white font-light">
              $1099,00
            </div>
            <button href="javascript:;" class="rounded-full bg-purple-900 text-white hover:bg-white hover:text-purple-900 hover:shadow-xl focus:outline-none w-10 h-10 flex ml-auto transition duration-300">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="stroke-current m-auto">
                <line x1="12" y1="5" x2="12" y2="19"></line>
                <line x1="5" y1="12" x2="19" y2="12"></line>
              </svg>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> -->

<h1 class="text-5xl md:text-6xl md:ml-20 xl:text-7xl text-[#0D285F] font-bold tracking-tight">BERITA</span></h1>

<!-- TAMPIL BERITA -->
<div class="flex items-center justify-center my-10">
  <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadowm m-2">
    @include('blog.postArtikel')
  </div>
</div>

<div class="flex items-center justify-center my-10">
  <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadowm m-2">
      <a href="#">
          <img class="rounded-t-lg" src="{{asset('assets/DashboardBg.jpg')}}" alt="" />
      </a>
      <div class="p-5">
          <a href="#">
              <h5 class="mb-2 text-2xl font-bold tracking-tight text-black">Lorem Ipsum Beasiswa</h5>
          </a>
          <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
          <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-[#F49D1A] dark:hover:bg-blue-700 dark:focus:ring-blue-800">
              Read more
              <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
          </a>
      </div>
  </div>

  <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow m-2">
      <a href="#">
          <img class="rounded-t-lg" src="{{asset('assets/DashboardBg.jpg')}}" alt="" />
      </a>
      <div class="p-5">
          <a href="#">
              <h5 class="mb-2 text-2xl font-bold tracking-tight text-black">Lorem Ipsum Beasiswa</h5>
          </a>
          <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
          <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-[blue-700] rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-[#F49D1A] dark:hover:bg-blue-700 dark:focus:ring-blue-800">
              Read more
              <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
          </a>
      </div>
  </div>

  <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow m-2">
      <a href="#">
          <img class="rounded-t-lg" src="{{asset('assets/DashboardBg.jpg')}}" alt="" />
      </a>
      <div class="p-5">
          <a href="#">
              <h5 class="mb-2 text-2xl font-bold tracking-tight text-black">Lorem Ipsum Beasiswa</h5>
          </a>
          <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
          <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-[#F49D1A] dark:hover:bg-blue-700 dark:focus:ring-blue-800">
              Read more
              <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
          </a>
      </div>
  </div>
</div>
@endsection