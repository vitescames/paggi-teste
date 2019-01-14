@extends('template.app')

@section('content')

    <h1>Criar Cartão</h1>

    <form id="form_create_credit_card">
        <input type="hidden" id="base_url" value="<?php echo url('/'); ?>"/>
        <div class="form-group">
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
        <button type="submit" class="btn btn-primary">Crie meu cartão!</button>
    </form>

@endsection

@section('scripts')
    <script src="{{asset('js/credit-card.js')}}"></script>
@endsection