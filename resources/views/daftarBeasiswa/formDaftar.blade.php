@extends('layouts.app')
@section('title', 'Daftar Beasiswa')
@section('background', 'bg-white')
@section('content')
<form action="{{route('store-daftar-beasiswa')}}" method="POST">
    @csrf
    <div class="text-center" style="background-color: #0D285F; padding:115px;">
        <div>
            <h1 class="font-bold font-sans text-4xl text-white">PENDAFTARAN</h1>
        </div>
    </div>
    <div class="w-3/4 border rounded-lg mx-auto my-24 shadow-2xl bg-white" style="margin-top: -80px;">
        <div class="my-10 w-3/4 mx-auto">
            <div class="mb-10">
                <label class="text-xl p-1 tracking-wide" for="email">Email<span style="color:red">*</span></label>
                <input class="block w-full px-4 py-3 text-black border border-gray-300 bg-neutral-400 rounded leading-tight focus:outline-none " id="email" name="email" type="email" value="{{$user->email}}" readonly>
                @error('email')
                <div class="text-red-600  pl-2">{{ $message }}</ @enderror </div>
                    <div class="mb-10">
                        <label class="text-xl p-1 tracking-wide" for="nama">Nama Mahasiswa (sesuai data di CIS)<span style="color:red">*</span></label>
                        <input class="block w-full px-4 py-3 text-black border border-gray-300 bg-neutral-400 rounded leading-tight focus:outline-none" id="nama" name="nama" type="text" value="{{$userDetail->nama}}" readonly>

                    </div>
                    <div class="mb-10">
                        <label class="text-xl p-1 tracking-wide" for="nim">NIM (sesuai data di CIS)<span style="color:red">*</span></label>
                        <input class="block w-full px-4 py-3 text-black border border-gray-300 bg-neutral-400 rounded leading-tight focus:outline-none " id="nim" name="nim" type="text" value="{{$userDetail->nim}}" readonly>
                    </div>
                    <div class="mb-10">
                        <label class="text-xl p-1 tracking-wide" for="prodi">Prodi<span style="color:red">*</span></label>
                        <input class="block w-full px-4 py-3 text-black border border-gray-300 bg-neutral-400 rounded leading-tight focus:outline-none" id="prodi" name="prodi" type="text" value="{{$userDetail->prodi}}" readonly>
                    </div>
                    <div class="mb-10">
                        <label class="text-xl p-1 tracking-wide" for="tipe">Jenis Beasiswa<span style="color:red">*</span></label>
                        <select id="tipe" name="tipe" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected disabled="disabled">Pilih Beasiswa yang Tersedia</option>
                            @foreach($beasiswa as $key )
                            <option value='{{$key->title}}'>{{$key->title}}</option>
                            @endforeach
                            @error('tipe')
                            <div class="text-red-600  pl-2">{{ $message }}</ @enderror </select>
                            </div>
                            <div class="mb-10">
                                <label class="text-xl p-1 tracking-wide" for="emailPribadi">Alamat Email Pribadi<span style="color:red">*</span></label>
                                <input class="block w-full px-4 py-3 text-black border border-gray-300 bg-gray-100 rounded leading-tight focus:outline-none focus:bg-white hover:shadow-md" id="emailPribadi" name="emailPribadi" type="email" placeholder="masukkan email pribadi anda">
                                @error('emailPribadi')
                                <div class="text-red-600  pl-2">{{ $message }}</ @enderror </div>
                                    <div class="mb-10">
                                        <label class="text-xl p-1 tracking-wide" for="hp">No. Handphone<span style="color:red">*</span></label>
                                        <input class="block w-full px-4 py-3 text-black border border-gray-300 bg-gray-100 rounded leading-tight focus:outline-none focus:bg-white hover:shadow-md" id="hp" name="hp" type="text" placeholder="masukkan no. handphone anda">
                                        @error('hp')
                                        <div class="text-red-600  pl-2">{{ $message }}</ @enderror </div>
                                            <div class="mb-10">
                                                <label class="text-xl p-1 tracking-wide" for="tgl">Tanggal Lahir<span style="color:red">*</span></label>
                                                <input class="block w-full px-4 py-3 text-black border border-gray-300 bg-gray-100 rounded leading-tight focus:outline-none focus:bg-white hover:shadow-md" id="tgl" name="tgl" type="date">
                                                @error('tgl')
                                                <div class="text-red-600  pl-2">{{ $message }}</ @enderror </div>
                                                    <div class="mb-10">
                                                        <label class="text-xl p-1 tracking-wide" for="ipk">IPK<span style="color:red">*</span></label>
                                                        <input class="block w-full px-4 py-3 text-black border border-gray-300 bg-gray-100 rounded leading-tight focus:outline-none " id="ipk" name="ipk" type="text" value="{{$userIP}}" readonly placeholder="masukkan IPK anda">
                                                        {{-- <p class=" px-1 py-1 text-sm">format: 3.04</p> --}}
                                                        @error('ipk')
                                                        <div class="text-red-600  pl-2">{{ $message }}</ @enderror </div>
                                                            <div class="mb-10">
                                                                <label class="text-xl p-1 tracking-wide" for="live">Alamat Tempat Tinggal<span style="color:red">*</span></label>
                                                                <input class="block w-full px-4 py-3 text-black border border-gray-300 bg-gray-100 rounded leading-tight focus:outline-none focus:bg-white hover:shadow-md" id="live" name="live" type="text" placeholder="masukkan alamat tempat tinggal anda">
                                                                @error('live')
                                                                <div class="text-red-600  pl-2">{{ $message }}</ @enderror </div>
                                                                    <div class="mb-10">
                                                                        <label class="text-xl p-1 tracking-wide" for="ktm">Softcopy KTM (pdf)<span style="color:red">*</span></label>
                                                                        <input class="block w-full px-4 py-3 text-black border border-gray-300 bg-gray-100 rounded leading-tight focus:outline-none focus:bg-white hover:shadow-md" id="ktm" name="ktm" type="file">
                                                                    </div>
                                                                    <div class="mb-10">
                                                                        <label class="text-xl p-1 tracking-wide" for="ktp">Softcopy KTP (pdf)<span style="color:red">*</span></label>
                                                                        <input class="block w-full px-4 py-3 text-black border border-gray-300 bg-gray-100 rounded leading-tight focus:outline-none focus:bg-white hover:shadow-md" id="ktp" name="ktp" type="file">

                                                                    </div>
                                                                    <div class="mb-10">
                                                                        <label class="text-xl p-1 tracking-wide" for="kks">Transkrip Nilai (pdf)<span style="color:red">*</span></label>
                                                                        <input class="block w-full px-4 py-3 text-black border border-gray-300 bg-gray-100 rounded leading-tight focus:outline-none focus:bg-white hover:shadow-md" id="kks" name="kks" type="file">
                                                                    </div>
                                                                    <div class="mb-10">
                                                                        <label class="text-lg p-1 tracking-wide" for="sptmb">Softcopy Surat Pernyataan Tidak Menerima Beasiswa Lain Bermaterai 10000 (pdf)<span style="color:red">*</span></label>
                                                                        <input class="block w-full px-4 py-3 text-black border border-gray-300 bg-gray-200 rounded leading-tight focus:outline-none focus:bg-white hover:shadow-md" id="sptmb" name="sptmb" type="file">

                                                                    </div>
                                                                    <div class="flex items-center">
                                                                        <input checked id="checked-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                                        <label for="checked-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Saya menyatakan dan menjamin kebenaran data yang telah saya input<span style="color:red">*</span></label>
                                                                    </div>
                                                                    <p><span style="color:red">*</span>)wajib diisi</p>
                                                                    <div class="mt-10">
                                                                        <button class="bg-blue-500 mx-1 px-5 py-2 text-white font-semibold rounded" type="submit">Submit</button>
                                                                    </div>

                                                                </div>
                                                            </div>
</form>

@endsection