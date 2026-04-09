@extends('layouts.app')

@section('content')
<h2 class="text-2xl font-bold mb-6">Settings</h2>

<div class="grid grid-cols-1 md:grid-cols-2 gap-6">

    <div class="bg-white p-6 rounded-xl shadow">
        <h3 class="font-semibold text-lg mb-4">Profile</h3>
        
        <label class="block mb-2">Nama</label>
        <input type="text" class="w-full border rounded p-2 mb-3" placeholder="Masukkan nama">

        <label class="block mb-2">Email</label>
        <input type="email" class="w-full border rounded p-2 mb-3" placeholder="Masukkan email">

        <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
            Simpan
        </button>
    </div>

    <div class="bg-white p-6 rounded-xl shadow">
        <h3 class="font-semibold text-lg mb-4">Ganti Password</h3>
        
        <input type="password" class="w-full border rounded p-2 mb-3" placeholder="Password lama">
        <input type="password" class="w-full border rounded p-2 mb-3" placeholder="Password baru">
        <input type="password" class="w-full border rounded p-2 mb-3" placeholder="Konfirmasi password">

        <button class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">
            Update Password
        </button>
    </div>

    <div class="bg-white p-6 rounded-xl shadow">
        <h3 class="font-semibold text-lg mb-4">Tampilan</h3>

        <label class="flex items-center gap-2">
            <input type="checkbox">
            Dark Mode
        </label>
    </div>

    <div class="bg-white p-6 rounded-xl shadow">
        <h3 class="font-semibold text-lg mb-4"> Notifikasi</h3>

        <label class="flex items-center gap-2 mb-2">
            <input type="checkbox" checked>
            Email Notifikasi
        </label>

        <label class="flex items-center gap-2">
            <input type="checkbox">
            Push Notifikasi
        </label>
    </div>

</div>
@endsection