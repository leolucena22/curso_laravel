@extends('layouts.main')

@section('title', 'Criar Evento')

@section('content')
    
    <div id="event-create-container" class="col-md-6 offset-md-3">

        <h1>Crie o seu evento</h1>

        <form action="/events" method="POST" enctype="multipart/form-data">

            @csrf

            <div class="form-group">
                <label for="image">Imagem do Evento</label>
                <input type="file" required class="form-control-file" id="image" name="image">
            </div>

            <div class="form-group">
                <label for="title">Evento:</label>
                <input type="text" class="form-control" id="title"  class="title" placeholder="Nome do evento" name="title">
            </div>

            <div class="form-group">
                <label for="date">Data do Evento:</label>
                <input type="date" class="form-control" id="date"  class="date" name="date">
            </div>

            <div class="form-group">
                <label for="title">Cidade:</label>
                <input type="text" class="form-control" id="city"  class="city" placeholder="Local do evento" name="city">
            </div>

            <div class="form-group">
                <label for="title">O evento é privado?</label>
                <select name="private" id="private" class="form-control">
                    <option value="0">Não</option>
                    <option value="1">Sim</option>
                </select>
            </div>

            <div class="form-group">
                <label for="title">Descrição: </label>
                <textarea name="description" id="description" class="form-control" placeholder="O que vai acontecer no evento?"></textarea>
            </div>


            <div class="form-group">
                <label for="title">Adicione itens de infraestrutura:</label>
                <div class="form-group">
                    <input type="checkbox" name="items[]" id="" value="Cadeiras"> Cadeiras
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" id="" value="Palco"> Palco
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" id="" value="Cerveja Grátis"> Cerveja Grátis
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" id="" value="Open Food"> Open Food
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" id="" value="Brindes"> Brindes
                </div>
            </div>

            <input type="submit" value="Criar Evento" class="btn btn-primary">

        </form>

    </div>    

@endsection