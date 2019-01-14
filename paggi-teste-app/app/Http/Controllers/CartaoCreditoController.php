<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Helpers\PaggiSdk\PaggiAPI;
use App\Http\Helpers\PaggiSdk\Resources\CartaoCreditoPaggiResource;
use Session;
use Redirect;

class CartaoCreditoController extends Controller {

    private $paggi;

    public function __construct () {
        $this->paggi = new PaggiAPI();
    }

    public function addCartaoCreditoView(){
        return view('cartao-credito.criar', [
            //'teste' => "teste"
        ]);
    }

    public function updateCartaoCreditoView(){
        if(isset($_GET['id'])){
            return view('cartao-credito.atualizar', [
                'id_clicado' => $_GET['id']
            ]);
        } else{
            return view('cartao-credito.atualizar', [
                'id_clicado' => ''
            ]);
        }
    }

    public function updateCartaoCreditoAction(){
        $cartao = $this->paggi
        ->cartoesCredito()
        ->updateCreditCard(Session::get('id_buscado'), $_POST['card_number'], $_POST['cvv_card'], $_POST['holder_card']);

        echo "Cartão de crédito de ID " . Session::get('id_buscado') .  " atualizado!";
    }

    public function addCartaoCreditoAction(){
        $cartao = $this->paggi
        ->cartoesCredito()
        ->addCreditCard($_POST['card_number'], $_POST['cvv_card'], $_POST['holder_card']);
    }

    public function deletarCartaoCreditoAction(){
        $cartao = $this->paggi
        ->cartoesCredito()
        ->deleteCreditCard($_POST['id_credit_card']);

        return Redirect::to(url('/') . '/cartaoCredito/listar');
    }

    public function listarCartoesCredito(){
        $retorno = $this->paggi
        ->cartoesCredito()
        ->getListCreditCards();

        return view('cartao-credito.lista', [
            'cartoes' => $retorno
        ]);
    }

    public function getCartaoCredito(){

        Session::put('id_buscado', $_GET['id_credit_card']);

        $cartao = $this->paggi
        ->cartoesCredito()
        ->getCreditCardById($_GET['id_credit_card']);

        echo json_encode($cartao);
    }

}