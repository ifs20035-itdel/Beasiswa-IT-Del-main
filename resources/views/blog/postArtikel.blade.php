<div class="flex justify-center">
    @foreach($arrayOfArticle as $key => $value)
      @php
        $img = "imgArt";
      @endphp
  <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadowm m-2">
        <div class="grid grid-cols-1">
          <div class="bg-blue-300 px-3 py-2">
            <img src="{{$value->thumbnail}}" alt="{{$img.=$value->id_article}}" height="300">
            <div class="font-bold pt-2">
              <a href="">
              <h5 class="mb-2 text-2xl font-bold tracking-tight text-black">{{$value->title}}</h5>
              </a>
            </div> 
          </div>
          <div class="px-3 mx-1">
            <p class="py-2">{{limit_text($value->caption,12)}}</p>
          </div>
            <form class=" w-full mx-2 my-5 " action="{{route('article',$value->id_article) }}" method="GET">
            <button class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-[#F49D1A] dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="submit">
              Read more
              <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
          </button>
            </form>
        </div>
      </div>
    @endforeach
</div>
<div class=" m-auto pb-5">
  {!! $arrayOfArticle->appends(Request::except('page'))->render() !!}
</div>