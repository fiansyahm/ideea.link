@extends('template-admin')

@section('navbar_menu_rating', 'bg-primary text-white')

@section('main')
<div class="container my-5">
    <h1 class="mt-4 text-center">Daftar Rating Admin</h1>
    {{-- buat dalam bentuk tabel berdasarkan peringkatnya --}}
    <table class="table table-striped" id="ratingTable">
        <thead>
            <tr>
                <th scope="col">Kode Produk</th>
                <th scope="col">Pesanan Selesai</th>
                <th scope="col">Pesanan Belum Selesai</th>
                <th scope="col">Rating</th>
            </tr>
        </thead>

        <tbody>
            @foreach($list_top_admin as $key => $value)
            <tr>
                {{-- Logic to identify the last key --}}
                @php
                    $lastKey = $key === array_key_last($list_top_admin);
                @endphp

                {{-- jika dia list top admin terbawah maka beri warna merah --}}
                @if($lastKey)
                <td style="background-color: red; color: white;">{{$key}}</td>
                @else
                <td>{{$key}}</td>
                @endif
                <td>
                    <a href="/order/selesai/{{$key}}" class="btn btn-success mr-2">{{$value['count']}}</a>
                </td>
                <td>
                    <a href="/order/pending/{{$key}}" class="btn btn-danger mr-2">{{$value['unrated']}}</a>
                </td>
                {{-- rating= rating - (pesanan belum selesai*5) --}}
                <td>{{$value['rating']}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{-- buatkan js yang merefresh halaman ini setiap 30 detik sekali ke url /rating --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Mendapatkan referensi tabel
            const table = document.getElementById('ratingTable');
            
            // Mengubah rows menjadi array untuk dapat diurutkan
            const rows = Array.from(table.getElementsByTagName('tr'));
            
            // Menghapus header dari array rows
            const header = rows.shift();
            
            // Mengurutkan rows berdasarkan nilai rating
            rows.sort(function(rowA, rowB) {
                const ratingA = parseFloat(rowA.getElementsByTagName('td')[3].textContent);
                const ratingB = parseFloat(rowB.getElementsByTagName('td')[3].textContent);
                return ratingB - ratingA;
            });
            
            // Menyusun ulang tabel berdasarkan urutan yang dihasilkan
            table.appendChild(header); // Memasukkan kembali header ke tabel
            rows.forEach(row => table.appendChild(row)); // Memasukkan setiap row yang sudah diurutkan
            
            // Set interval untuk mereload halaman setiap 30 detik ke URL /rating
            setInterval(function() {
                window.location.href = "/rating";
            }, 30000);
        });
    </script>
</div>
@endsection
