<x-side title="Sistema de Vendas">

    <div class="container text-center">  
        <div class="row">          
            <div class="col-6 offset-3 mt-5">
                    <div class="card">
                        <h5 class="card-header">Featured</h5>
                        <div class="card-body">
                            <h5 class="card-title">System Sales</h5>
                            <p class="card-text">Organize Suas Vendas</p>          
                    </div>
                </div>
            </div>
        </div>
    </div> 
    <script>      
        homeLocate = {{Js::from($home)}};
        statusLocate = {{Js::from($status)}};
        statusSales = {{Js::from($salesProduct)}};

        if(!homeLocate){
        if(statusLocate){
            alert("Cadastrado com Sucesso");
        }else{
            alert("Erro ao Cadastrar");
                if(!statusSales){
                    alert("Quantidade de Produtos Insuficiente");
                }        
        }
        }          
    </script>
    
</x-side>
    