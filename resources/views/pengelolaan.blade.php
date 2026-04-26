@extends('layouts.app')

@section('title', 'Pengelolaan | TugasBapakKau')

@section('content')
    <div class="hero-text">
        <h1>Pengelolaan Tugas</h1>
        <p>
            Semua tugas dikumpulkan di sini agar kepanikan tidak tersebar secara acak. Setidaknya stresmu sekarang punya struktur.
        </p>
    </div>

    @foreach ($tugas as $item)
        <div class="card">
            <h3>{{ $item['judul'] }}</h3>
            <p>{{ $item['matkul'] }}</p>

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
                    <span>Status</span>
                    <strong>{{ $item['status'] }}</strong>
                </div>
            </div>
        </div>
    @endforeach
@endsection