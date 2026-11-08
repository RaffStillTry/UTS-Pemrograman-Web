@extends('layouts.app')

@section('title', 'Tasks')

@section('content')
    <h1>Daftar Tugas</h1>
    <p class="subtitle">Total {{ count($tugas) }} tugas.</p>

    @foreach ($tugas as $item)
        @include('partials.task-item', ['item' => $item])
    @endforeach
@endsection