@extends('site.template')
@section('title', 'Página de Contato')
@section('content')

<section>
    <div class="container contato">
        <h1>Pagina de Contato</h1>
        <div style="width: 300px; margin: auto; padding: 10px;" class="form border">
            <img class="rounded mx-auto d-block" style="width: 200px; margin: 5px;" src="{{ asset('image/contato.png') }}" alt="Contato">
            <div class="form-group">
                <label for="name">Nome:</label>
                <input class="form-control" id="name" name="name" type="text" placeholder="Digite seu nome.">
            </div>
            <div class="form-group">
                <label for="mail">E-mail:</label>
                <input type="email" id="mail" name="mail" class="form-control" placeholder="Digite seu e-mail.">
            </div>
            <div class="form-group">
                <label for="message">Mensagem:</label></br>
                <textarea name="message" id="message" cols="29" rows="10"></textarea>
            </div>
        </div>
    </div>
</section>

@stop