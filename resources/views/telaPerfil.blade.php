@extends('layout.navio')

@section('content')

<link rel="stylesheet" href="{{ asset('css/styles1.css') }}">

<div class="container" style="margin-top: 6%; max-width: 640px;">

    <div class="profile-card">

        <div class="profile-avatar">
            <i class="bi bi-person-fill"></i>
        </div>

        <h4 class="profile-name">{{ auth()->user()->name }}</h4>

        <div class="profile-email">
            <i class="fa fa-envelope"></i>
            <span>{{ auth()->user()->email }}</span>
        </div>

        <a class="profile-edit-btn" href="{{ route('nutricionista.view', auth()->user()->id) }}">
            <i class="bi bi-pencil"></i> Editar perfil
        </a>

    </div>

</div>

@endsection