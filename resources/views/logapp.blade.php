<x-side title="Portifolio Guilherme Barbosa Lima">

    <div class="container">
        <div class="jumbotron">
            <h1>Logs</h1>
        </div> 

        <table class="table table-striped">
            <tr>
                <th>Login</th>
                <th colspan="2">Description</th>
            </tr>
            <tr>
                <td>Ted</td>
                <td>8888-8888</td>
               
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
    