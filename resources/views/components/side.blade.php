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
                <li><a class="dropdown-item" href="home"><img src="https://img.icons8.com/material-outlined/48/000000/home--v4.png"/>Home</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="/employee"><img src="https://img.icons8.com/ios/50/000000/men-age-group-5.png"/>Cadastrar Funcionário</a></li>
                <li><a class="dropdown-item" href="/products">
                  <img src="https://img.icons8.com/external-wanicon-lineal-wanicon/64/000000/external-product-advertising-wanicon-lineal-wanicon.png"/>Cadastrar Produto</a></li>
                <li><a class="dropdown-item" href="/client"><img src="https://img.icons8.com/ios/50/000000/client-management.png"/>Cadastrar Cliente</a></li>
                <li><a class="dropdown-item" href="/sales"><img src="https://img.icons8.com/ios/50/000000/sell.png"/>Vender</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="/reportclient"><img src="https://img.icons8.com/dotty/45/000000/report-file.png"/>Relatório Vendas Por Clientes</a></li>
                <li><a class="dropdown-item" href="/reportemployee"><img src="https://img.icons8.com/dotty/45/000000/report-file.png"/>Relatório Vendas Por Funcionário</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="/log"><img src="https://img.icons8.com/ios/50/000000/log.png"/>Log de Atividades</a></li>
                <li><a class="dropdown-item" href="/login"><img src="https://img.icons8.com/material-outlined/48/000000/emergency-exit.png"/>Sair</a></li>                
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
