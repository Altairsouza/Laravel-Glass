<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\User;
class EventController extends Controller
{
    public function store(request  $request){

        $event = new Event;

        $event->nome = $request->nome;
        $event->senha = $request->senha;
        $event->email = $request->email;
        $event->sexo = $request->sexo;
        $event->data = $request->data;
        $event->endereco = $request->endereco;
        $event->numero = $request->num;
        $event->estado = $request->estado;
        $event->cidade = $request->cidade;
        $event->urgencia = $request->grau;
        $event->mensagem = $request->mensagem;
        if(isset($request->checkbox)){
            $event->checkbox = true;
        }else{
            $event->checkbox = false;
        }

        $event->cor = $request->cor;
        $event->quantidade = $request->qtd;
        $event->total = $request->tot;

        $user = auth()->user();

        $event->user_id = $user->id;

        $event->save();

        return redirect('/')->with('msg','Compra realizada com sucesso!');
    }

public function index(){

        $events = Event::all();

        return view('listaContato/listaContato', ['events'=>$events]);

}





    public function show($id) {


        $event = Event::findOrFail($id);
        

        return view('listaContato.show',['event'=>$event]);
    }

    public function dashboard(){
        $user = auth()->user();


        $events = $user->events;

       

        return view('dashboard.dashboard', ['events'=>$events]);
    }


    public function destroy($id) {

        Event::findOrFail($id)->delete();

        return redirect('/dashboard')->with('msg', 'Evento excluído com sucesso!');

    }

    public function edit($id) {

        $event = Event::findOrFail($id);

        return view('dashboard.edit', ['event' => $event]);

    }

  

    public function update(Request $request) {

        

    

        Event::findOrFail($request->id)->update($request->all());

        return redirect('/dashboard')->with('msg', 'Evento editado com sucesso!');

    }
    
}

