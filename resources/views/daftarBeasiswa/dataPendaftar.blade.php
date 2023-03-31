<html>
    <head>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    </head>
    <body>
        <h1 class="text-center text-4xl font-bold py-10">Data Pendaftar</h1>
        @if($registrars->isEmpty())
            <x-carbon-warning height="50px" color="red" class="w-1/4 m-auto mb-2" />
            <h1 class="text-center font-bold text-1xl border w-1/4 mx-auto my-7 py-2 rounded-xl bg-red-600 text-white">Tidak ada data yang dapat ditampilkan!</h1>
            @if(Auth::user())
                @if(Auth::user()->role == "Admin")
                    <div class="w-1/2 m-auto p-10 flex flex-col items-center">
                        @csrf
                        <a href="{{route('create-data-beasiswa', $year)}}" type="submit" class="bg-green-600 rounded-md px-3 py-2 text-white font-bold hover:shadow-slate-400 hover:bg-green-700 hover:shadow-md focus:ring-4 focus:outline-none focus:ring-green-500">Tambah Data</a>
                    </div> 
                @endif
            @endif
        @else
            <table class="border-collapse border border-slate-400 mx-auto mt-10 mb-5">
                <tr class="bg-green-400">
                    <th class="px-4 border border-slate-400 p-1">No</th>
                    <th class="px-28 border border-slate-400">@sortablelink('nama',"Nama")</th>
                    <th class="px-10 border border-slate-400">@sortablelink('nim',"NIM")</th>
                    <th class="px-12 border border-slate-400">@sortablelink('prodi',"Program Studi")</th>
                    <th class="px-10 border border-slate-400">@sortablelink('tipeBeasiswa',"Beasiswa")</th>
                </tr>
                @php
                    $id = 1;
                @endphp
                @foreach($registrars as $row=>$item)
                    <tr class="border text-center ">
                        <td class="border border-slate-400 p-2">{{$id}}</td>
                        <td class="border border-slate-400">{{$item->nama}}</td>
                        <td class="border border-slate-400">{{$item->nim}}</td>
                        <td class="border border-slate-400">{{$item->prodi}}</td>
                        <td class="border border-slate-400">{{$item->tipeBeasiswa}}</td>
                    </tr>
                    @php
                        $id++;
                    @endphp
                @endforeach
            </table>
            @if(Auth::user())
                @if(Auth::user()->role == "Admin")
                    {{-- <div class="w-3/4 m-auto flex flex-col items-end">
                        <a href="" type="submit" class="bg-green-600 rounded-md px-3 py-2 text-white font-bold hover:shadow-slate-400 hover:shadow-md hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-green-500 ">Tambah Data</a>
                    </div> --}}
                @endif
            @endif
        @endif
    </body>
</html>