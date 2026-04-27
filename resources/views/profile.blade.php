@extends('layouts.app')

@section('title', 'Profile | TugasBapakKau')

@section('content')
    <div class="hero-text">
        <h1>Profile Pengguna</h1>
        <p>
            Identitas akademikmu ditampilkan di sini dengan cukup elegan, agar beban tugas terasa sedikit lebih profesional.
        </p>
    </div>

    <div class="profile-grid">
        <div class="profile-avatar">
            <img src="{{ asset('images/logo.png') }}" alt="Avatar TugasBapakKau">
            <p style="margin-top: 14px; color: #d7d7d7; font-weight: bold;">{{ $username }}</p>
        </div>

        <div class="profile-info">
            <div class="profile-item">
                <span>Username</span>
                <strong>{{ $username }}</strong>
            </div>

            <div class="profile-item">
                <span>Role</span>
                <strong>Mahasiswa</strong>
            </div>

            <div class="profile-item">
                <span>Program Studi</span>
                <strong>Sistem Informasi</strong>
            </div>

            <div class="profile-item">
                <span>Email</span>
                <strong>{{ $username }}@unej.mail.ac.id</strong>
            </div>

            <div class="profile-item">
                <span>Bio</span>
                <strong>Pejuang deadline yang cukup sadar diri.</strong>
            </div>
        </div>
    </div>
@endsection