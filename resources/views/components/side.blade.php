<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    @vite(['resources/js/app.js'])  
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        
</head>
<body>
  
  <nav class="navbar navbar-expand-lg bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="/home">System Sales</a>        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">             
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Menu
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="home">Home</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="/employee">Cadastrar Funcionário</a></li>
                <li><a class="dropdown-item" href="/products">Cadastrar Produto</a></li>
                <li><a class="dropdown-item" href="/client">Cadastrar Cliente</a></li>
                <li><a class="dropdown-item" href="/sales">Vender</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="/reportclient">Relatório Vendas Por Clientes</a></li>
                <li><a class="dropdown-item" href="/reportemployee">Relatório Vendas Por Funcionário</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="/log">Log de Atividades</a></li>
                <li><a class="dropdown-item" href="/login">Sair</a></li>                
              </ul>
            </li>             
          </ul>         
        </div>
      </div>
    </nav>

  <div class="container text-center">  
    <div class="row">
      <div class="col-12">
        {{ $slot }}
      </div>
    </div>
  </div> 

</body>
</html>
