@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <h1>Halo, {{ $username }}!</h1>
    <p class="subtitle">Berikut ringkasan tugasmu.</p>

    <div class="stats">
        <div class="stat-card">
            <span class="stat-number">{{ $total }}</span>
            <span class="stat-label">Total Tugas</span>
        </div>
        <div class="stat-card selesai">
            <span class="stat-number">{{ $selesai }}</span>
            <span class="stat-label">Selesai</span>
        </div>
        <div class="stat-card dikerjakan">
            <span class="stat-number">{{ $dikerjakan }}</span>
            <span class="stat-label">Dikerjakan</span>
        </div>
        <div class="stat-card belum">
            <span class="stat-number">{{ $belumDimulai }}</span>
            <span class="stat-label">Belum Dimulai</span>
        </div>
    </div>

    <div class="section-header">
        <h2>Tugas Terbaru</h2>
        <a href="{{ route('tasks') }}">Lihat semua &rarr;</a>
    </div>

    @foreach ($tugasTerbaru as $item)
        @include('partials.task-item', ['item' => $item])
    @endforeach
@endsection