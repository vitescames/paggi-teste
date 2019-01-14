@extends('template.app')

@section('content')

    <h1>Lista de Cartões</h1>

    <input type="hidden" id="base_url" value="<?php echo url('/'); ?>"/>

    <table class="table table-hover">
        <thead>
            <tr>
                <th>ID do Cartão</th>
                <th>Número do Cartão</th>
                <th>Nome do Titular</th>
                <th>CVV do Cartão</th>
            </tr>
        </thead>
        <tbody>
            @foreach($cartoes as $c)
                <tr>
                    <td>{{$c->id}}</td>
                    <td>{{$c->number}}</td>
                    <td>{{$c->holderName}}</td>
                    <td>{{$c->cvv}}</td>
                    <td><a href="#" data-toggle="modal" data-target="#myModal" onclick="$('#id_credit_card').val({{$c->id}})">Apagar</a></td>
                    <td><a href="<?php echo url('/'); ?>/cartaoCredito/atualizar?id={{$c->id}}" >Atualizar</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>

<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Apagar Cartão de Crédito</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        Tem certeza que deseja apagar o cartão?
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button>
        <form action="<?php echo url('/'); ?>/cartaoCredito/deletar" method="post">
            <input type="hidden" id="id_credit_card" name="id_credit_card" value=""/>
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <button type="submit" class="btn btn-danger">Apagar</button>
        </form>
      </div>

    </div>
  </div>
</div>

@endsection

@section('scripts')
    <script src="{{asset('js/credit-card.js')}}"></script>
@endsection