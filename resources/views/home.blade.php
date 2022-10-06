<x-side title="Portifolio Guilherme Barbosa Lima">


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
    <p id="msg"> Cadastrado com Sucesso
    </p>
<script>      
       $statusLocate = {{Js::from($status)}};
       console.log($statusLocate);

       if($statusLocate){
        document.getElementById('msg').style.display = 'inline';
       }else{
        document.getElementById('msg').style.display = 'none';
       }  
</script>
 
    
</x-side>
    