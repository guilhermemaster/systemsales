<x-layout title="Sistema de Vendas">

  <div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <h1>Sistema de Vendas</h1>
          <form action="/logar" method="POST">
            @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input type="email" class="form-control" name="name">   
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" class="form-control" name="password">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
      </div>
    </div>
  </div>



</x-layout>
