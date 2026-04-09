@extends('layouts.app')

@section('content')

<h2 class="text-2xl font-bold mb-4">Dashboard</h2>

<div class="grid grid-cols-3 gap-4">
    <div class="bg-white p-4 rounded shadow hover:shadow-lg transition">
        <h3>Total Pengguna</h3>
        <p class="text-xl font-bold">100</p>
    </div>

    <div class="bg-white p-4 rounded shadow hover:shadow-lg transition">
        <h3>Pesanan</h3>
        <p class="text-xl font-bold">250</p>
    </div>

    <div class="bg-white p-4 rounded shadow hover:shadow-lg transition">
        <h3>Pendapatan</h3>
        <p class="text-xl font-bold">Rp 5.000.000.000</p>
    </div>
</div>

<div class="mt-6 bg-white p-4 rounded shadow">
    <h3 class="font-bold mb-3">Aktivitas Terbaru</h3>
    <ul class="list-disc pl-5">
        <li>Pengguna baru mendaftar</li>
        <li>Pesanan baru masuk</li>
        <li>Data berhasil diperbarui</li>
    </ul>
</div>

<div class="mt-6 bg-white p-4 rounded shadow">
    <h3 class="font-bold mb-3">Statistik Cepat</h3>
    <div class="flex gap-4">
        <span class="bg-blue-100 text-blue-600 px-3 py-1 rounded">Pengguna Aktif</span>
        <span class="bg-green-100 text-green-600 px-3 py-1 rounded">Pesanan Selesai</span>
    </div>
</div>

@endsection