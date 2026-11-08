@extends('layouts.app')

@section('title', 'Profile')

@section('content')
    <h1>Profile</h1>
    <p class="subtitle">Informasi akun pengguna.</p>

    <div class="profile-card">
        <div class="avatar">{{ strtoupper(substr($profil['nama'], 0, 1)) }}</div>

        <div class="profile-row">
            <span>Nama</span>
            <span>{{ $profil['nama'] }}</span>
        </div>
        <div class="profile-row">
            <span>NIM</span>
            <span>{{ $profil['nim'] }}</span>
        </div>
        <div class="profile-row">
            <span>Username</span>
            <span>{{ $username }}</span>
        </div>
        <div class="profile-row">
            <span>Status</span>
            <span>{{ $profil['status'] }}</span>
        </div>
        <div class="profile-row">
            <span>Program Studi</span>
            <span>{{ $profil['prodi'] }}</span>
        </div>
    </div>
@endsection