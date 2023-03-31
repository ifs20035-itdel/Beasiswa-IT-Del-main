@extends('layouts.app')
@section('title','Beasiswa Internal')
@section('background', 'bg-white')
@section('content')
<div class="container w-4/4 m-auto px-10 pb-20" style="background-color: #0D285F">
    <h1 class="text-center font-bold text-5xl pt-12 pb-3 text-white">BEASISWA INTERNAL</h1>
    <p class="text-center italic text-white">beasiswa yang diberikan oleh Institut Teknologi Del dengan sasaran dan</p>
    <p class="text-center italic text-white pb-10">ketentuan yang beragam sesuai dengan jenis beasiswa.</p>

    <div class="flex flex-col space-y-3 rounded-3xl" style="background-color: white">
      <div class="flex justify-center mb-4 mt-4 pt-2">
        <img src="{{asset('Assets/beasiswa.png')}}"/>
        <h2 class="font-bold text-3xl pb-6 pt-6 text-center"><span style="color: #0D285F">BEASISWA</span> <span style="color: #F49D1A">PRESTASI </span></h2>  
      </div>
        <p class="pl-40">Beasiswa prestasi diberikan kepada mahasiswa dalam bentuk potongan SPP dengan aturan sebagai berikut:</p>
        <ul class="list-disc pl-6 space-y-1 pb-20 w-3/4 m-auto">
            
            <li style="color:#F49D1A" class="text-justify"><span class="text-black">Beasiswa prestasi Per Semester diberikan bagi semua mahasiswa pada tingkat 1, tingkat 2, tingkat 3, dan tingkat 4 kecuali mahasiswa pada semester terakhir masa studinya (semester 6 pada prodi DIII dan semester 8 pada prodi DIV dan S1).</span>
            </li>
            <li class="pb-5 text-justify" style="color:#F49D1A">
                <span class="text-black">Besar potongan SPP untuk penerima beasiswa prestasi per semester dapat dilihat pada tabel 1.</span>
            </li>
            <p class="text-center"><span class="font-bold">Tabel 1.</span> Potongan SPP</p>
            <div class="pb-8">
                <table class="table-auto border m-auto pb-4">
                    <thead class="border" style="background-color: #0D285F">
                        <tr>
                          <th  class="border px-5 py-3 text-white">NR Per Semester</th>
                          <th  class="border px-5 text-white">Potongan SPP</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td  class="border px-5 py-2">4.00</td>
                          <td  class="border px-5">100%</td>
                        </tr>
                        <tr class="even:bg-slate-200">
                          <td  class="border px-5 py-2">3.75-3.99</td>
                          <td  class="border px-5">50%</td>
                        </tr>
                        <tr>
                          <td  class="border px-5 py-2">3.50-3.74</td>
                          <td  class="border px-5">25%</td>
                        </tr>
                      </tbody>
                </table>
            </div>

                <li style="color:#F49D1A" class="text-justify"><span class="text-black">Mahasiswa penerima Beasiswa Prestasi harus memiliki perilaku terpuji dan dibuktikan dengan nilai
                  perilaku minimal AB.</span>
                </li>
                <li style="color:#F49D1A" class="text-justify"><span class="text-black">Kuota untuk mahasiswa penerima beasiswa prestasi persemester adalah sebanyak 20
                  (dua puluh) orang per angkatan dan maksimal 5(lima) orang untuk setiap program studi, sehingga
                  mahasiswa calon penerima beasiswa prestasi akan diranking berdasarkan nilai rata-rata, namun jika ditemukan kasus mahasiswa
                  dengan nilai rata-rata yang sama, sehinga melewati kuota 20 (dua puluh) orang maka akan diranking berdasarkan nilai indeks prestasi sementara, 
                  namun jika nilai indeks prestasi masih sama selanjutnya akan dipilih berdasarkan nilai perilaku.</span>
                </li>
                <li style="color:#F49D1A" class="text-justify">
                    <span class="text-black">Bagi mahasiswa yang sedang menerima beasiswa dari Yayasan Del maupun pihak lain tidak dapat menerima beasiswa prestasi.</span>
                </li>
            </ul>
    </div>
</div>
@endsection
