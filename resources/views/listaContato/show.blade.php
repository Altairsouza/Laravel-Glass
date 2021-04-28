@extends('layouts.main')

@section('title', 'Tudo Sobre Google Glass')
@section('content')










        <div id="listar" >
           <table>
           <thead>
                <tr>
                <th > Nome: {{$event->nome}}    </th> 
                <th> Email: {{$event->email}}    </th>
                <th> Sexo: {{$event->sexo}}    </th>
                <th> Data:  {{$event->data  }}     </th>
                <th> Logradouro: {{$event->endereco  }}     </th>
                <th>  Número: {{$event->numero }}     </th>
                <th> Estado: {{$event->estado}}        </th>
                <th> Cidade:{{$event->cidade}} </th>
                <th> Nível de urgencia: {{$event->urgencia}} </th>
                <th> Mensagem:{{$event->mensagem}} </th>
                <th> Checkbox:{{$event->checkbox}} </th>
                <th> Cor:{{$event->cor}} </th>
                <th> Quantidade:{{$event->quantidade}} </th>
                <th> Total:{{$event->total}} </th>
                
                </tr>

            </thead>
           </table>


       

        </div>
  
@endsection
