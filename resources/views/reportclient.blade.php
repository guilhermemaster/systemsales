<x-side title="Portifolio Guilherme Barbosa Lima">

    <div class="container">
        <div class="jumbotron">
            <h1>Relatório Vendas Por Clientes</h1>
        </div> 

        <table class="table table-striped">
            <tr>
                <th>Cliente</th>
                <th>Nome Produto </th>
                <th>Quantidade Comprada</th>
            </tr>           
            @foreach ($sales as $sale)
            <tr>
                <td>{{ $sale->nomeClient }}</td>
                <td>{{ $sale->nomeproduto}}</td>
                <td>{{ $sale->amount }}</td>
            </tr>    
            @endforeach
        </table>
    </div>
    <canvas id="myChart" width="400" height="400"></canvas>
<script>
        sales = {{Js::from($sales)}};
        let nameClient = [];
        let contClient = [];
        for(let i = 0; i < sales.length; i++){        
            nameClient.push(sales[i].nomeClient);  
            contClient.push(sales[i].amount); 
        }
    
    const ctx = document.getElementById('myChart').getContext('2d');
    const myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: nameClient,
            datasets: [{
                label: 'Gráfico vendas',
                data: contClient,
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>

</x-side>
    