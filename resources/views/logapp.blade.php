<x-side title="Sistema de Vendas">

    <div class="container">
        <div class="jumbotron">
            <h1>Logs</h1>
        </div> 

        <table class="table table-striped">
            <tr>
                <th>Login</th>
                <th colspan="2">Description</th>
            </tr>
            @foreach ($logs as $log)
            <tr>
                <td>{{ $log->login }}</td>
                <td>{{ $log->description }}</td>
            </tr>    
            @endforeach
        </table>
    </div>

</x-side>
    