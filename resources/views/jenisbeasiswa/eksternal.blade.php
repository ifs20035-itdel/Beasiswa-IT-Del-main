@extends('layouts.app')
@section('title','Beasiswa Eksternal')
@section('background', 'bg-white')
@section('content')
    <h1 class="text-center font-bold text-5xl pt-10 pb-16">Beasiswa Eksternal</h1>
        @php
            $id = 1;
            // split the description and store it in an array
            foreach($sponsorship as $item){
                $list = explode(";", $item->description);
                $item->description = $list;
            }
        @endphp
        @foreach($sponsorship as $item)
            <div class="container w-3/4 m-auto px-10">
                <h1 class="text-3xl font-bold pb-5 ">{{$id}}. {{$item->title}}</h1>
                @if(
                    $item->image == "-"
                )
                @else
                    <img class="px-16" src="{{$item->image}}" alt="beasiswa">
                @endif
                <p class="px-10 py-3">
                    @foreach($item->description as $desc)
                        <p class="py-1 indent-8 px-10">{{$desc}}</p>
                    @endforeach
                </p>
                <hr class="my-5">
            </div>
            @php
                $id++;
            @endphp
        @endforeach
    <h1 class="w-3/4 m-auto font-bold text-3xl pb-10 px-10">Beasiswa yang Tersedia</h1>
    @if($eksternalBeasiswa->isEmpty())
            <h1 class="text-center font-bold text-1xl border w-1/4 mx-auto mb-10 py-2 rounded-xl bg-red-600 text-white">
                <x-carbon-warning height="50px" color="white" class="w-1/4 m-auto mb-2" />
                Tidak ada pendaftaran beasiswa yang tersedia untuk saat ini!
            </h1>
    @else
        <div class="flex px-10">
            @foreach($eksternalBeasiswa as $key => $value)
            <div class="w-1/4 m-auto pb-10">
                <div class="max-w-sm rounded overflow-hidden shadow-lg pt-5">
                    <a href="{{$value->registration_link}}">
                        <img class="w-full" src="{{$value->thumbnail}}" alt="Sunset in the mountains">
                    </a>
                    <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">
                        <a href="{{$value->registration_link}}">
                            {{$value->title}}
                        </a>
                    </div>
                    <p class="text-gray-700 text-base">
                        {{limit_text($value->caption, 20)}}
                    </p>
                    </div>
                    <form action="{{route('daftar-beasiswa')}}" method="GET" class="w-2/4 px-5 pt-4 pb-5">
                        <button class="inline-flex items-center text-white text-center font-semibold bg-blue-500 hover:bg-blue-700 px-4 py-1 rounded-md" type="submit">Daftar
                            <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                        </button>
                    </form>
                </div>
            </div>
            @endforeach
        </div>
    @endif
@endsection
