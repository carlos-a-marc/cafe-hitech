<?php

namespace App\Http\Controllers;

use App\Mail\NovaAssinatura;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AssinaturaController extends Controller
{
    public function index()
    {
        return view('site/home');
    }

    public function pedidoDeAssinatura(Request $request)
    {

        $name = $request->name;
        $mail = $request->mail;
        $phone = $request->phone;
        $street = $request->street;
        $number = $request->number;
        $nb = $request->nb;
        $city = $request->city;
        $state = $request->state;
        $plan = $request->plan;

        // Enviando
        Mail::to('emaildedestino@email.com')->send(new NovaAssinatura($name, $mail, $phone, $street, $number, $nb, $city, $state, $plan));

        $request->session()->flash('alert-success','Pedido de assinatura realizado com sucesso!');
        return redirect()->back();
    }
}
