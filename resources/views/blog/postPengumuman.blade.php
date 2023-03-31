<div class="mt-5 ml-5">
    @foreach($announcements as $key => $value)
    <form action="{{route('article',$value->id_article) }}" method="GET">
        <li>           
            <button class="text-lg pt-2 text-blue-600/100" type="submit">{{$value->title}}</button>
            <p class="text-sm font-serif  ">&nbsp &nbsp &nbsp {{ $value->created_at}}</p>
        </li>
    </form>
    @endforeach
</div>