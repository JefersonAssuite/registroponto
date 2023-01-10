@extends('layout.main')

@section('title','Cadastre-se')

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
      <h1>Cadastre-se</h1>

   
    <form action="/events" method="POST" enctype="multipart/form-data">
        @csrf
        

        <div class="form-group">
        <label for="title">Contato:</label>
        <input type="text" class="form-control" id="tel" name="tel" placeholder="Telefone:">
        </div>

        <div class="form-group">
            <label for="date">Data de Nascimento:</label>
            <input type="date" class="form-control" id="dataNasc" name="dataNasc" placeholder="Data de Nascimento:">
        </div>

        <div class="form-group">
            <label for="title"> E-mail: </label>
            <input type="email" id="email" name="email" class="form-control" placeholder="E-mail">
        </div>

        <div class="form-group">
        <label for="title">Senha:</label>
        <input type="password" id="senha" name="senha" class="form-control" placeholder="Senha:">
        </div>

       <!-- <div class="form-group">
            <label for="title">Empresa:</label>
            <select name="empresa" id="empresa" class="form-control">
            <option value="0"> Tel</option>
            <option value="1">Supremonet</option>
        </div>-->
        </br>
        <input type="submit" id="btn-form" class="btn btn-primary" value="Cadastrar Usuário">

    </form>


</div>

@endsection