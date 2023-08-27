@extends('layouts.main')

@section('title','Criar Evento')

@section('content')

<div id="event-createe-container" class="col-md-6 offset-md-3">
    <h1>Crie um evento</h1>
    <form action="/events" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Evento</label>
            <input type="text" name="title" id="title" class="form-control" placeholder="Nome do Evento">
        </div>
        <div class="form-group">
            <label for="text">Cidade</label>
            <input type="text" name="city" id="city" class="form-control" placeholder="Cidade do Evento">
        </div>
        <div class="form-group">
            <label for="title">O evento é privado?</label>
            <select name="private" id="private">
                <option value="0">Não</option>       
                <option value="1">Sim</option>
            </select> 
        </div>
        <div class="form-group">
            <label for="title">Descrição</label>
            <textarea name="description" id="description" placeholder="O quê vai acontecer no evento?" class="form-control"></textarea>
        </div>
        <input type="submit" value="Criar evento" class="btn btn-primary">
    </form>
</div>

@endsection