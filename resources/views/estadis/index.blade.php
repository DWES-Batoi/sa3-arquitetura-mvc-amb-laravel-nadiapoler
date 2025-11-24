@extends('layouts.app')
@section('title', "Guia d'Estadis")

@section('content')
<h1 class="text-3xl font-bold text-indigo-800 mb-6">Guia d'Estadis</h1>

@if (session('success'))
<div class="bg-green-100 text-green-700 p-2 mb-4">{{ session('success') }}</div>
@endif

<p class="mb-4">
    <a href="{{ route('estadis.create') }}" class="bg-indigo-600 text-white px-3 py-2 rounded">Nou estadi</a>
</p>

<table class="w-full border-collapse border border-gray-300">
    <thead class="bg-indigo-400 text-white">
        <tr>
            <th class="border border-indigo-800 p-2">Nom</th>
            <th class="border border-indigo-800 p-2">Ciutat</th>
            <th class="border border-indigo-800 p-2">Capacitat</th>
            <th class="border border-indigo-800 p-2">Equip principal</th>
        </tr>
    </thead>
    <tbody>
        @foreach($estadis as $key => $estadi)
        <tr class="hover:bg-indigo-100">
            <td class="border border-indigo-800 p-2">
                <a href="{{ route('estadis.show', $key) }}" class="text-indigo-800 hover:underline">{{ $estadi['nom'] }}</a>
            </td>
            <td class="border border-indigo-800  p-2">{{ $estadi['ciutat'] }}</td>
            <td class="border border-indigo-800  p-2 bg-indigo-200">{{ $estadi['capacitat'] }}</td>
            <td class="border border-indigo-800 p-2 text-indigo-500">{{ $estadi['equip'] }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection