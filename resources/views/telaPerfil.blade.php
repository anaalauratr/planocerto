@extends('layout.navio')

@section('content')

<link rel="stylesheet" href="{{ asset('css/styles1.css') }}">
<div class="container" style="margin-top: 7%">
    <div style="display: flex; align-items: center; gap: 8px; margin-left: 1%">
    <i class="bi bi-person-circle" style="font-size: 25px; color: #95b634"></i>
    <h4 class="nome-plano" style="color: #95b634;">Ana Laura</h4>
</div>

    <div class="plano">
           
      <p> <span class="input-group-text icon-box" style="background-color: beige; color: #95b634">
            <i class="fa fa-envelope"> </i> EMAIL: ana@gmail
        </span></p>
        
         
        <a class="btn btn-success btn" href="{{ route('AtualizarNutricionista') }}" style=" align-items: center;"> <i class="bi bi-pencil"></i></a>

       
           
</div>
 </div>
@endsection




