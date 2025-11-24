@extends('layouts.app')
@section('title', "Guia de Partits")

@section('content')
<h1 class="text-3xl font-bold text-lime-800 mb-6">Guia de Partits</h1>

@if (session('success'))
<div class="bg-green-100 text-green-700 p-2 mb-4">{{ session('success') }}</div>
@endif

<p class="mb-4">
    <a href="{{ route('partits.create') }}" class="bg-lime-600 text-white px-3 py-2 rounded">Nou partit</a>
</p>

<table class="w-full border-collapse border border-lime-300">
    <thead class="bg-lime-700 text-white">
        <tr>
            <th class="border border-lime-800 p-2">Local</th>
            <th class="border border-lime-800 p-2">Visitant</th>
            <th class="border border-lime-800 p-2">Data</th>
            <th class="border border-lime-800 p-2">Resultat</th>
        </tr>
    </thead>
    <tbody>
        @foreach($partits as $key => $partit)
        <tr class="hover:bg-lime-200">
            <td class="border border-lime-700 p-2">
                <a href="{{ route('partits.show', $key) }}" class="text-lime-900 hover:underline bg-lime-100">{{ $partit['local'] }}</a>
            </td>
            <td class="border border-lime-700 p-2 text-lime-700">{{ $partit['visitant'] }}</td>
            <td class="border border-lime-700 p-2 bg-lime-300">{{ $partit['data'] }}</td>
            <td class="border border-lime-700 p-2 text-lime-600">{{ $partit['resultat'] }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection