<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
        <link rel="stylesheet" href="/css/app.css">
        <link rel="stylesheet" href="/css/editemployee.css">

    </head>
    <body>
        <header></header>
        <form>
            <h1>Novo Colaborador</h1>
            <div class="name">
                <div class="title">
                    <label>Nome</label>
                    <input type="text" required>
                </div>
                <div class="title">
                    <label>Sobrenome</label>
                    <input type="text"  required>
                </div>
            </div>
            <div class="function">
                <label>cargo</label>
                <select value="cargo" id="meuSelect" required>
                    <script>
                        var select = document.getElementById("meuSelect");
                        var dados = ["Opção 1", "Opção 2", "Opção 3"];
                    
                        for (var i = 0; i < dados.length; i++) {
                          var option = document.createElement("option");
                          option.value = "opcao" + (i + 1);
                          option.text = dados[i];
                          select.appendChild(option);
                        }
                      </script>
                </select>

            </div>
            <div class="info">
                <div class="title">
                    <label>Salário</label>
                    <input type="number" required>
                </div>
                <div class="title">
                    <label>Data da promoção</label>
                    <input type="date" required></input>
                </div>
            </div>
            <div class="actions">
                <button class="button" type="submit">Salvar</button>
                <a href="/">cancelar</a>
            </div>
        </form>
    </body>
</html>