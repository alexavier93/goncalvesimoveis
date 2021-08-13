<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContatoRequest;
use App\Mail\ContatoMail;
use App\Models\Message;
use Illuminate\Support\Facades\Mail;

class ContatoController extends Controller
{

    private $contato;

    public function __construct(Message $contato)
    {
        $this->contato = $contato;
    }

    public function index()
    {
 
        return view('contato.index');
  
    }

    public function enviaEmail(ContatoRequest $request)
    {
        $data = $request->all();

        //Mail::to('alexandre.xavier@outlook.com')->send(new ContatoMail($data));

        $this->contato->create($data);

        flash('Contato enviado com sucesso!')->success();
        return redirect()->route('contato.index');
  
    }

    public function sendMail(ContatoRequest $request)
    {
        $data = $request->all();

        //Mail::to('alexandre.xavier@outlook.com')->send(new ContatoMail($data));

        $this->contato->create($data);

        flash('Contato enviado com sucesso!')->success();
  
    }

}
