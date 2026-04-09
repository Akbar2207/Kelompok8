@extends('layouts.app')

@section('content')
<h2 class="text-2xl font-bold mb-4">Users</h2>

<div class="bg-white p-4 rounded shadow">
    <table class="w-full border">
        <thead class="bg-gray-100">
            <tr>
                <th class="p-2 border">No</th>
                <th class="p-2 border">Nama</th>
                <th class="p-2 border">Email</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="p-2 border">1</td>
                <td class="p-2 border">Afzal</td>
                <td class="p-2 border">afzal@email.com</td>
            </tr>
        </tbody>
        <tbody>
            <tr>
                <td class="p-2 border">2</td>
                <td class="p-2 border">Azmal</td>
                <td class="p-2 border">azmal@email.com</td>
            </tr>
        </tbody>
        <tbody>
            <tr>
                <td class="p-2 border">3</td>
                <td class="p-2 border">Geri</td>
                <td class="p-2 border">geri@email.com</td>
            </tr>
        </tbody>
    </table>
</div>
@endsection