<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Mensaje;

class MensajeController extends Controller
{
    public function sendMessages(){
    	$usuarios = User::all();
    	return view('send',array('usuarios' => $usuarios));
    }

    public function saveMessage(Request $request){
    	$mensaje = new Mensaje();
    	$mensaje->titulo = $request->input('titulo');
    	$mensaje->texto = $request->input('texto');
    	$mensaje->destinatario = $request->input('destinatario');
    	$mensaje->remitente = \Auth::user()->id;
    	$mensaje->save();
    	return redirect('home');
    }

    public function seeMessages(){
    	$destinatario = \Auth::user()->id;
    	$mensajes = Mensaje::all();
    	return view('see', array('mensajes' => $mensajes, 'destinatario' => $destinatario));
    }

    public function seeMessage($id){
    	$mensaje = Mensaje::findOrFail($id);
    	return view('seemessage', array('mensaje' => $mensaje));
    }
}
