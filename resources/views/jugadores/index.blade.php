@extends('layouts.app')
@section('title', "Guia de Jugadores")

@section('content')
<h1 class="text-3xl font-bold text-violet-800 mb-6">Guia de Jugadores</h1>

@if (session('success'))
  <div class="bg-green-100 text-green-700 p-2 mb-4">{{ session('success') }}</div>
@endif

<p class="mb-4">
  <a href="{{ route('jugadores.create') }}" class="bg-violet-600 text-white px-3 py-2 rounded">Nova jugadora</a>
</p>

<table class="w-full border-collapse border border-violet-300">
  <thead class="bg-violet-300">
  <tr>
    <th class="border border-violet-300 p-2">Nom</th>
    <th class="border border-violet-300 p-2">Equip</th>
    <th class="border border-violet-300 p-2">Posició</th>
  </tr>
  </thead>
  <tbody>
  @foreach($jugadores as $key => $jugadora)
    <tr class="hover:bg-violet-100">
      <td class="border border-violet-300 p-2">
        <a href="{{ route('jugadores.show', $key) }}" class="text-violet-900 hover:underline">{{ $jugadora['nom'] }}</a>
      </td>
      <td class="border border-violet-300 p-2 text-violet-600">{{ $jugadora['equip'] }}</td>
      <td class="border border-violet-300 p-2 text-violet-500">{{ $jugadora['posicio'] }}</td>
    </tr>
  @endforeach
  </tbody>
</table>
@endsection