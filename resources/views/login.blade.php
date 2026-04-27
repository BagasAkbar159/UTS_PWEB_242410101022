@extends('layouts.app')

@section('title', 'Login | TugasBapakKau')


@section('content')
<div class="hero-text">
    <h1><span class="accent">TugasBapakKau</span></h1>
    <p>
        woyyy masokkkk, kerjakannn tugass muuu!!!!!
    </p>
</div>


<form action="{{ route('dashboard') }}" method="POST">
    @csrf
    <label for="username">Username</label>
    <input type="text" name="username" id="username" placeholder="Masukkan username..." required>
    
    <button type="submit" class="btn">Masuk ke Dashboard</button>
</form>

@include('components.tagline')
    {{-- <div class="empty-note">
        Tidak ada sistem login sungguhan di sini. Hanya simulasi akademik yang cukup untuk membuat hidup terasa resmi.
    </div> --}}
@endsection