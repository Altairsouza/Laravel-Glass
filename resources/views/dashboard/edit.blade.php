@extends('layouts.main')

@section('content')

<script>
        function calc_total(){
            var qtd = parseInt(document.getElementById("quantidade").value);
            tot = qtd * 1500;
            document.getElementById('total').value = tot;
        }
    </script>

<form  action="/dashboard/update/{{ $event->id }}"   method="POST" id="fcontato"   oninput="calc_total();"><!-- onunput= entrada para calcular todos os oculos logo em cima vou criar um script local -->
     @csrf
     @method('PUT')
        <!-- post é um pouco mais lento e mais segunro o get é mais rapido e menos seguro e action to falando pra onde vai enviar esses dados -->
        <fieldset id="usuario">
            <legend>Identificação do Usuário </legend>
            <p><label for="nome">Nome:</label>
                <input type="text" name="nome" id="nome" size="20" maxlength="30" placeholder="nome completo" value="{{$event->nome}}" /></p>
                                                      
            <p><label for="senha">Senha:</label>
                <input type="password" name="senha" id="senha" size="8"
                                                        maxlength="8" placeholder="8 dígitos" value="{{$event->senha}}" /></p>
            <p> <label for="email">E-mail:</label>
                <input type="email" name="email" id="email" size="20"
                                                          maxlength="40" placeholder="capiroto@gmail.com" value="{{$event->email}}" /></p>
            <fieldset id="sexo">
                <legend>Sexo</legend>
                <select name="sexo" id="sexo">
    <option  value="0"> Feminino </option>
    <option value="1"  {{ $event->sexo == 1 ? "selected='selected'" : "" }}>masculino</option> 
        
</select>
</fieldset>
<legend>Endereço do Usuário</legend>
<p><label for="endereco">Logradouro:</label>
    <input type="text" name="endereco" id="endereco" size="13"

                                                maxlength="80" placeholder="rua, av , trav" value="{{$event->endereco}}"></p>
<p> <label for="numero">Número:</label>
    <input type="number" name="numero" id="numero" min="0" max="99" value="{{$event->numero}}">
</p>
<label for="estado">Estado:</label>
<select name="estado" id="estado">
    <option selected>{{$event->estado}}</option>
    <option value="DF" >Distrito Federal</option> <!-- selected ja deixa df marcado -->
    <optgroup label="Norte">
        <option value="AM">Amazonas</option>
        <option value="RR">Roraima</option>
        <option value="AP">Amapá</option>
        <option value="PA">Pará</option>
        <option value="TO">Tocantins</option>
        <option value="RO">Rondônia</option>
        <option value="AC">Acre</option>
    </optgroup>
    <optgroup label="Nordeste">
        <option value="MA">Maranhão</option>
        <option value="PI">Piauí</option>
        <option value="CE">Ceará</option>
        <option value="RN">Rio Grande do Norte</option>
        <option value="PE">Pernambuco</option>
        <option value="PB">Paraíba</option>
        <option value="SE">Sergipe</option>
        <option value="AL">Alagoas</option>
        <option value="BA">Bahia</option>
    </optgroup>
    <optgroup label="Centro-Oeste">
        <option value="GO">Goiás</option>
        <option value="MS">Mato Grosso do Sul</option>
        <option value="MT">Mato Grosso</option>
    </optgroup>
    <optgroup label="Sudeste">
        <option value="SP">São Paulo</option>
        <option value="RJ">Rio de Janeiro</option>
        <option value="MG">Minas Gerais</option>
        <option value="ES">Espirito Santo</option>
    </optgroup>
    <optgroup label="Sul">
        <option value="PR">Paraná</option>
        <option value="RS">Rio Grande do Sul</option>
        <option value="SC">Santa Catarina</option>
    </optgroup>
</select>
<label for="cidade">Cidade:</label>

<select name="cidade" id="cidade" >
<option selected>{{$event->cidade}}</option>
    <option  value="Rio Branco" >Rio Branco</option>
    <option value="Maceió">Maceió</option>
    <option value="Macapá">Macapá</option>
    <option value="Manaus">Manaus</option>
    <option value="Salvador">Salvador</option>
    <option value="Fortaleza">Fortaleza</option>
    <option value="Brasília">Brasília</option>
    <option value="Vitória">Vitória</option>
    <option value="Goiânia">Goiânia</option>
    <option value="São Luís">São Luís</option>
    <option value="Cuiabá">Cuiabá</option>
    <option value="Campo Grande">Campo Grande</option>
    <option value="Belo Horizonte">Belo Horizonte</option>
    <option value="Belém">Belém</option>
    <option value="João Pessoa">João Pessoa</option>
    <option value="Curitiba">Curitiba</option>
    <option value="Recife">Recife</option>
    <option value="Teresina">Teresina</option>
    <option value="Rio de Janeiro">Rio de Janeiro</option>
    <option value="Natal">Natal</option>
    <option value="Porto Alegre">Porto Alegre</option>
    <option value="Porto Velho">Porto Velho</option>
    <option value="Boa Vista">Boa Vista</option>
    <option value="Florianópolis">Florianópolis</option>
    <option value="São Paulo">São Paulo</option>
    <option value="Aracaju">Aracaju</option>
    <option value="Palmas">Palmas</option>
</select>
</fieldset>









<fieldset id="mensagem">
            <legend>
                Mensagem do Usuário
            </legend>
            
                <textarea name="mensagem" id="mensagem" cols="45" rows="5" placeholder="deixa aqui sua mensagem">{{$event->mensagem}}</textarea></p><!-- cols é a quantidade de colunas e rows é a quantidade de linhas -->

        </fieldset>
      











 <fieldset id="pedido">
            <legend>
                Quero um Google Glass
            </legend>
            


            <p><label for="cor"> Cor:</label>
                <input type="color" name="cor" id="cor" value="{{$event->cor}}"/></p>



                <p><label for="quantidade"> Quantidade:</label>
                <input type="number" name="quantidade" id="quantidade" min="0" max="5" value="{{$event->quantidade}}"/></p>




            <p><label for="total"> Preço Total: R$</label>
                <input type="text" name="total" id="total" placeholder="total a pagar" readonly value="{{$event->total}}"/></p><!-- readonly serve pra somente leitura -->
        </fieldset>









        <input type="submit" value="Editar dados"/>
    </form>

@endsection