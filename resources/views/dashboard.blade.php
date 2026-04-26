@extends('layouts.app')

@section('title', 'Dashboard | TugasBapakKau')

@section('content')
    <div class="hero-text">
        <h1>Dashboard <span class="accent">{{ $username }}</span></h1>
        <p>
            Selamat datang di pusat pengawasan tugas. Di sinilah deadline, prioritas, dan sisa kewarasanmu dipantau dengan cukup rapi.
        </p>
    </div>

    <div class="stats">
        <div class="stat-box">
            <h3>Total Tugas</h3>
            <p>{{ count($tugas) }}</p>
        </div>

        <div class="stat-box">
            <h3>Belum Selesai</h3>
            <p>{{ collect($tugas)->where('status', 'Belum Selesai')->count() }}</p>
        </div>

        <div class="stat-box">
            <h3>Proses</h3>
            <p>{{ collect($tugas)->where('status', 'Proses')->count() }}</p>
        </div>

        <div class="stat-box">
            <h3>Selesai</h3>
            <p>{{ collect($tugas)->where('status', 'Selesai')->count() }}</p>
        </div>
    </div>

    <a href="{{ route('pengelolaan') }}" class="btn">Buka Pengelolaan</a>
    <a href="{{ route('profile', ['username' => $username]) }}" class="btn btn-secondary">Lihat Profile</a>

    <div class="section-title">
        <h2>Daftar Tugas Aktif</h2>
    </div>

    @foreach ($tugas as $item)
        <div class="card">
            <h3>{{ $item['matkul'] }}</h3>
            <p>{{ $item['judul'] }}</p>

            @php
                $statusClass = 'badge-warning';
                if ($item['status'] === 'Belum Selesai') $statusClass = 'badge-danger';
                if ($item['status'] === 'Selesai') $statusClass = 'badge-success';
            @endphp

            <span class="badge {{ $statusClass }}">{{ $item['status'] }}</span>

            <div class="meta-row">
                <div class="meta-pill">
                    <span>Deadline</span>
                    <strong>{{ $item['deadline'] }}</strong>
                </div>
                <div class="meta-pill">
                    <span>Prioritas</span>
                    <strong>{{ $item['prioritas'] }}</strong>
                </div>
                <div class="meta-pill">
                    <span>Mata Kuliah</span>
                    <strong>{{ $item['matkul'] }}</strong>
                </div>
            </div>
        </div>
    @endforeach
@endsection