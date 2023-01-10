@extends('layout.main')

@section('title','Pagina Entrar')

@section('content')
<div id="logar-sistema" class="col-md-12">
    
    <div id="entrar" class="card col-md-12">
    <h1> Acesse o Sistema</h1>
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <p id="texto">E-mail:</p>
                <x-jet-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
            <p id="texto">Senha:</p>
                <x-jet-input id="password" class="form-control" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
            @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        Esqueceu sua Senha?
                    </a>
                @endif
                </div>
               
                <x-jet-button class="btn btn-primary" id="btn-entrar"  >
                    Entrar
                </x-jet-button>
            </div>
        </form>
    </div>
</div>
@endsection
    