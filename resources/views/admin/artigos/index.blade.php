@extends('layouts.app')

@section('content')

  <pagina tamanho="12">
    
    <painel titulo="Lista de Artigos">

      <migalhas v-bind:lista="{{$listaMigalhas}}"></migalhas>

      <modallink tipo="button" nome="meuModalTeste" titulo="Criar" css=""></modallink>

      <tabela-lista
        v-bind:titulos="['#','Título','Descrição']"
        v-bind:itens="[[1,'PHP OO','Curso de PHP OO'],[2,'Vue JS','Curso de Vue JS']]"
        criar="#criar" detalhe="#detalhe" editar="#editar" deletar="#deletar" token="7887522323"

        ></tabela-lista>

    </painel>

  </pagina>

  <modal nome="meuModalTeste">
    <painel titulo="Adicionar">

      <formulario css="" action="#" method="put" enctype="multipart/form-data" token="12345">
        
        <div class="form-group">
          <label for="titulo">Título</label>
          <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Título">
        </div>

        <div class="form-group">
          <label for="descricao">Descrição</label>
          <input type="text" class="form-control" id="descricao" name="descricao" placeholder="Descrição">
        </div>

        <button class="btn btn-info">Adicionar</button>
        
      </formulario>
    
    </painel>

  </modal>

@endsection
