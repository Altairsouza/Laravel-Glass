@extends('layouts.main')

@section('content')
    <script>
        function calc_total(){
            var qtd = parseInt(document.getElementById("qtd").value);
            tot = qtd * 1500;
            document.getElementById('tot').value = tot;
        }
    </script>


    <form method="POST" id="fcontato" action="/faleConosco" oninput="calc_total();"><!-- onunput= entrada para calcular todos os oculos logo em cima vou criar um script local -->
     @csrf
        <!-- post é um pouco mais lento e mais segunro o get é mais rapido e menos seguro e action to falando pra onde vai enviar esses dados -->
        <fieldset id="usuario">
            <legend>Identificação do Usuário </legend>
            <p><label for="nome">Nome:</label>
                <input type="text" name="nome" id="nome" size="20"
                                                      maxlength="30" placeholder="nome completo" required /></p>
            <p><label for="senha">Senha:</label>
                <input type="password" name="senha" id="senha" size="8"
                                                        maxlength="8" placeholder="8 dígitos" required /></p>
            <p> <label for="email">E-mail:</label>
                <input type="email" name="email" id="email" size="20"
                                                          maxlength="40" placeholder="capiroto@gmail.com" required /></p>
            <fieldset id="sexo">
                <legend>Sexo</legend>
                <input type="radio" name="sexo" id="sexo" value="masculino" checked />
                <label for="sexo"> Masculino</label><br />


                <input type="radio" name="sexo" id="sexo" value="feminino" />
                <label for="sexo"> Feminino</label>
            </fieldset>
            <p><label for="data">Data de Nascimento: </label>
                <input type="date" name="data" id="data" required /></p>
       
        <fieldset id="endereco">

            <legend>Endereço do Usuário</legend>
            <p><label for="endereco">Logradouro:</label>
                <input type="text" name="endereco" id="endereco" size="13"

                                                            maxlength="80" placeholder="rua, av , trav" required></p>
            <p> <label for="num">Número:</label>
                <input type="number" name="num" id="num" min="0" max="99999" required>
            </p>
            <label for="estado">Estado:</label>
            <select name="estado" id="estado">
                <option value="0">Selecione o Estado</option>
                <option value="DF" selected>Distrito Federal</option> <!-- selected ja deixa df marcado -->
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

            <select name="cidade" id="cidade">
                <option  value="Rio Branco" selected>Rio Branco</option>
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
            <p><label for="grau">Grau de Urgência:</label>min
                <input type="range" name="grau" id="grau" min="0" max="10" step="2" /> max </p><!-- range serve como uma barra para escolher a porcetagem step serve pra usar como vai ser a contagem exemplo: 2em2 ou 1em1 -->
            <p> <label for="mensagem"> Mensagem:</label>
                <textarea name="mensagem" id="mensagem" cols="45" rows="5" placeholder="deixa aqui sua mensagem" required></textarea></p><!-- cols é a quantidade de colunas e rows é a quantidade de linhas -->

        </fieldset>
        <fieldset id="pedido">
            <legend>
                Quero um Google Glass



            </legend>
            <p><input type="checkbox" name="checkbox" id="checkbox"  checked/><!-- checked ja deixa a caixa marcada -->
                <label for="checkbox"> Gostaria de adquirir um Google Glass quando disponível</label> </p>


            <p><label for="cor"> Cor:</label>
                <input type="color" name="cor" id="cor" value="#0000ff" required/></p>



            <p><label for="qtd"> Quantidade:</label>
                <input type="number" name="qtd" id="qtd" min="0" max="5" required/></p>




            <p><label for="tot"> Preço Total: R$</label>
                <input type="text" name="tot" id="tot" placeholder="total a pagar" readonly/></p><!-- readonly serve pra somente leitura -->
        </fieldset>
        <!--  <input type="submit" value="Enviar"/>  uma forma simples de criar botao-->


        <input type="submit" src="/img/botao-enviar.png"/>
    </form>

</div>


@endsection