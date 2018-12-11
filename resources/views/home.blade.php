@extends('layouts.app')

@section('content')

    <pagina tamanho="10">
        
        <painel titulo="Dashboard">

            <migalhas v-bind:lista="{{$listaMigalhas}}"></migalhas>

            <div class="row">

                <div class="col-md-4">
                    <caixa qtd="80" titulo="Artigo" url="{{route('artigos.index')}}" cor="orange" icone="ion ion-pie-graph"></caixa>
                </div>

                <div class="col-md-4">
                    <caixa qtd="1500" titulo="Usuários" url="#" cor="#336699" icone="ion ion-person-stalker"></caixa>
                </div>

                <div class="col-md-4">
                    <caixa qtd="3" titulo="Autores" url="#" cor="#CC3333" icone="ion ion-person"></caixa>
                </div>

            </div>
        
        </painel>        

    </pagina>

@endsection
