<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
        crossorigin="anonymous"></script>
    <title>cadastrar</title>
</head>

<body>
    <div class="container-flex">
        <div class="container">
            <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
                <a href="#" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                    <svg class="bi me-2" width="40" height="32">
                        <use xlink:href="#bootstrap"></use>
                    </svg>
                    <span class="fs-4">Clientes</span>
                </a>
                <ul class="nav nav-pills">
                    <li class="nav-item"><a href="../cadastrar/index.html" class="nav-link" aria-current="page">CADASTRO</a></li>
                    <li class="nav-item"><a href="../consultar/index.html" class="nav-link">CONSULTA</a></li>
                </ul>
            </header>
        </div>
        <aside class="container">
            <h1 class="lead">Editar agendamentos de potenciais clientes</h1>
        </aside>
        <main class="container" style="margin: 10vh auto;">
            <form action="" method="post">
                <fieldset>
                    <div class="mb-3">
                        <label for="nameInput" class="form-label">nome</label>
                        <input type="text" class="form-control" id="nameInput" placeholder="Nome completo" autocapitalize="words" style="text-transform: capitalize;">
                    </div>
                </fieldset>
                <fieldset>
                    <div class="mb-3">
                        <label for="phoneInput" class="form-label">telefone</label>
                        <input type="tel" class="form-control" id="phoneInput" placeholder="Telefone ou celular">
                    </div>
                </fieldset>
                <fieldset>
                    <div class="mb-3">
                        <label for="originInput" class="form-label">origem</label>
                        <select class="form-select" id="originInput" aria-label="Selecione uma origem">
                            <option value="cel" selected>celular</option>
                            <option value="tel">fixo</option>
                            <option value="whatsapp">whatsapp</option>
                            <option value="facebook">facebook</option>
                            <option value="instagram">instagram</option>
                            <option value="gmn">Google Meu Negocio</option>
                        </select>
                    </div>
                </fieldset>
                <fieldset>
                    <div class="mb-3">
                        <label for="dateInput" class="form-label">data de contato</label>
                        <input type="date" class="form-control" id="dateInput">
                    </div>
                </fieldset>
                <fieldset>
                    <div class="mb-3">
                        <label for="obsInput" class="form-label">observações</label>
                        <textarea class="form-control" id="obsInput" rows="4" maxlength="250"></textarea>
                      </div>
                </fieldset>
                <div class="col-12">
                    <button class="btn btn-primary" type="submit">buscar</button>
                    <button class="btn btn-primary" type="submit">editar</button>
                </div>
            </form>
        </main>
    </div>
</body>

</html>