@extends('layouts.app')
@section('title', 'Data Beasiswa')
@section('background', 'bg-white')
@section('content')
    <html>
        <head>
            <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        </head>
        <body>

            <h1 class="text-center text-4xl font-bold py-10">Data Penerima Beasiswa Tahun {{$year}}</h1>
            @if($data->isEmpty())
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
            @if(Auth::user())
                @if(Auth::user()->role == "Admin")
                    <div class="w-3/4 m-auto flex flex-col items-end">
                        @csrf
                        <a href="{{route('create-data-beasiswa', $year)}}" type="submit" class="bg-green-600 rounded-md px-3 py-2 text-white font-bold hover:shadow-slate-400 hover:shadow-md hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-green-500 ">Tambah Data</a>
                    </div>
                @endif
            @endif
            <table class="border-collapse border border-slate-400 mx-auto mt-10 mb-5">
                <tr class="bg-green-400">
                    <th class="px-4 border border-slate-400 p-1">No</th>
                    <th class="px-28 border border-slate-400">@sortablelink('nama',"Nama")</th>
                    <th class="px-10 border border-slate-400">@sortablelink('nim',"NIM")</th>
                    <th class="px-12 border border-slate-400">@sortablelink('id_prodi',"Program Studi")</th>
                    <th class="px-5 border border-slate-400">@sortablelink('angkatan',"Angkatan")</th>
                    <th class="px-10 border border-slate-400">@sortablelink('beasiswa',"Beasiswa")</th>
                    <th class="px-4 border border-slate-400">Tahun Penerimaan</th>
                    <th class="px-10 border-slate-400">@sortablelink('status',"Status")</th>
                    @if(Auth::user())
                        @if(Auth::user()->role == "Admin")
                            <th class="px-10 border border-slate-400">Aksi</th>
                        @endif
                    @endif
                </tr>
                @php
                    $id = 1;
                @endphp
                @foreach($data as $row=>$item)
                    <tr class="border text-center ">
                        <td class="border border-slate-400 p-2">{{$row+$data->firstItem()}}</td>
                        <td class="border border-slate-400">{{$item->nama}}</td>
                        <td class="border border-slate-400">{{$item->nim}}</td>
                        <td class="border border-slate-400">{{$item->nama_prodi}}</td>
                        <td class="border border-slate-400">{{$item->angkatan}}</td>
                        <td class="border border-slate-400">{{$item->beasiswa}}</td>
                        <td class="border border-slate-400">{{$item->tahun}}</td>
                        <td class="border border-slate-400">{{$item->status}}</td>
                        @if(Auth::user())
                            @if(Auth::user()->role == "Admin")
                                <td class="border border-slate-400">
                                    <form action="{{route('hapus-data-beasiswa',array($item->id,$year))}}" method="GET">
                                        <button type="submit" class="bg-red-700 px-4 py-1 rounded-md text-white font-bold uppercase konfirmasi " data-toggle="tooltip" title='Delete'>Hapus</button>
                                    </form>
                                </td>
                            @endif
                        @endif
                    </tr>
                @php
                    $id++;
                @endphp
                @endforeach
            </table>
            <div class="w-3/4 m-auto pb-5">
                {!! $data->appends(Request::except('page'))->render() !!}
            </div>
        </body>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
        <script type="text/javascript">
            $('.konfirmasi').click(function(event) {
                var form =  $(this).closest("form");
                event.preventDefault();
                swal({
                    title: `Yakin hapus data?`,
                    text: "Data yang sudah dihapus tidak bisa dilihat kembali.",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                    form.submit();
                    }
                });
            });
        </script>
    </html>
        @endif
@endsection