<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\PedidoRecibido;

class PedidoController extends Controller
{
    public function form() {
        return view('pedido_form');
    }

    public function enviar(Request $request) {
        $datos = $request->validate([
            'producto' => 'required|string',
            'cantidad' => 'required|integer|min:1',
            'nombre' => 'required|string|max:255',
            'telefono' => 'required|string|max:10',
            'email' => 'required|email',
            'direccion' => 'required|string',
        ]);

        Mail::to('eduardodlcruz05@hotmail.com')->send(new PedidoRecibido($datos));

        return back()->with('success', 'Pedido enviado correctamente.');
    }
}
