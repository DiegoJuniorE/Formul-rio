<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Formulario</title>
</head>
<body>
    <div class="container">

    <h1>Formulário</h1>
    <form action="envio.php" method="get">

        <fieldset>
            <h3>Dados Pessoais</h3>
        <label for="Nome"></label>
        Nome: <input type="text" name="nome" id="Nome" required placeholder="Digite seu Nome" size="50" maxlength="13">
        
        <label for="idade">Idade</label>
        <input type="number" name="idade" id="idade" required placeholder="Escolha sua Idade"> <br> <br>
    
        <label for="email">Email</label>
        <input type="email" name="email" id="email" required placeholder="Digite seu Email">

        <label for="password">senha</label>
        <input type="password" name="senha" id="password" required placeholder="Digite sua Senha">

       <label for="color">Cor</label>
        <input type="color" color="cor" id="color" required placeholder="Escolha sua Cor">
        

        <label for="dat">Data Nascimento</label>
        <input type="date" name="dat" id="dat" required>

        <label for="hora">Hora</label>
        <input type="time" name="hora" id="hora" required> <br><br>

        <label for="arquivo">Arquivo</label>
        <input type="file" name="arquivo" id="arquivo"> 

        <label for="nivel">Nivel</label>
        <input type="range" name="nivel" id="nivel" min="1" max="4" step="1" required> <br><br>

        <label for="sexo">Masculino</label>
        <input type="radio" id="masc" value="masc" name="sexo">
        
        <label for="sexo"> Feminino</label>
        <input type="radio" id="fem" value="fem" name="sexo">

        <label for="sexo">Neutro</label>
        <input type="radio" id="neutro" value="neutro" name="sexo">
    </div>

    <div class="container">
        <fieldset>
        <h3>Dados Especificos</h3>

        <p>Hobby</p> 
        <label for="hobby">Gamer</label>
        <input type="checkbox" id="gamer" name="hobby" checked> <br>

        <label for="hobby">Esporte</label>
        <input type="checkbox" id="esporte" name="hobby"> 
        <br>

        <label for="hobby">Balada</label>
        <input type="checkbox" id="balada" name="hobby"> 
        <br><br>
            
        <label for="buscar">Buscar</label>
        <input type="search" id="buscar" name="buscar"> 
        <br> <br>

        <label for="cidade">Selecione sua Cidade</label>
        <br>

        <select id="cidade" name="city"> 
        <option>------------</option>
        <option value="bh">Belo Horizonte</option>
        <option value="sp">São Paulo</option>
        <option value="rj">Rio de Janeiro</option>
        </select>
        <br><br> <br>

        <label for="textarea"></label>
        <textarea name="areatexto" id="area" cols="50" rows="8" placeholder="Digite seu Comentário"></textarea>
        <br><br><br>


            <br><br><br>
        
        
        <input type="submit" value="Enviar" class="botao">
        <input type="reset" value="Limpar" class="botao">
        <button class="botao">Salvar</button>
    
        
    </fieldset>
    </fieldset>
    </form>
    </div>
    </div>

</body>
</html>
    
</body>
</html>