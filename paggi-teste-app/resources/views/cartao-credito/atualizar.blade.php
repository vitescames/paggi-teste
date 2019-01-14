@extends('template.app')

@section('content')

    <h1>Atualizar Cartão</h1>

    <form id="form_search_credit_card">

        <div class="form-group">
            <label for="number">Digite um ID válido do Cartão</label>
            <input type="number" name="id_credit_card" class="form-control" value="<?php echo $id_clicado; ?>">
        </div>

        <button type="submit" class="btn btn-primary">Buscar Cartão</button>

    </form>

    <form id="form_update_credit_card" style="display:none;">
        <input type="hidden" id="base_url" value="<?php echo url('/'); ?>"/>
        <div style="margin-top: 40px;" class="form-group">
            <label for="number">Número do Cartão</label>
            <input type="number" name="card_number" class="form-control" id="number">
        </div>
        <div class="form-group">
            <label for="holder">Titular do Cartão</label>
            <input type="text" name="holder_card" class="form-control" id="holder" >
        </div>
        <div class="form-group">
            <label for="cvv">CVV do Cartão</label>
            <input type="number" name="cvv_card" class="form-control" id="cvv">
        </div>
        <button type="submit" class="btn btn-primary">Atualize meu cartão!</button>
    </form>

@endsection

@section('scripts')
    <script src="{{asset('js/credit-card.js')}}"></script>
@endsection