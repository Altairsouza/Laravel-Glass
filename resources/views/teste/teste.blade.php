<form method="POST" id="fcontato" action="/teste" >
@csrf
    <fieldset id="usuario">
        <legend>Identificação do Usuário </legend>
        <p><label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" size="20" maxlength="30" placeholder="nome completo" />
        </p>

        <p><label for="senha">Senha:</label>
            <input type="password" name="senha" id="senha" size="8" maxlength="8" placeholder="8 dígitos" />
        </p>

        <p> <label for="email">E-mail:</label>
            <input type="email" name="email" id="email" size="20"maxlength="40" placeholder="capiroto@gmail.com" />
        </p>
    </fieldset>
        <fieldset id="sexo">
            <legend>Sexo</legend>
            <input type="radio" name="sexo" id="sexo" value="masculino" checked />
            <label for="sexo"> Masculino</label><br />


            <input type="radio" name="sexo" id="sexo" value="feminino" />
            <label for="sexo"> Feminino</label>

        </fieldset>

    <input type="submit" src="/img/botao-enviar.png"/>

    </form>
