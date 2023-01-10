@extends('layout.main')

@section('title','Pagina Entrar')

@section('content')

<div id="logar-sistema" class="col-md-12">
    
    <div id="entrar" class="card col-md-12">
    <h1> Acesse o Sistema</h1>
        <form action="#" method="POST">
            <p id="texto">E-mail:</p>
            <input type="email" id="email" class="form-control" placeholder="Digite seu E-mail:"></br></br>

            <p id="texto">Senha:</p>
            <input type="password" id="senha" class="form-control" placeholder="Digite sua Senha: "></br>

            <input type="submit" class="btn btn-primary" id="btn-entrar" value="Entrar">
            
        </form>
        
    </div>
</div>

<div class="col-md-12" >
    <h1>Novidades:</h1>

</div>

@endsection