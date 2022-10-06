<x-side title="Portifolio Guilherme Barbosa Lima">

<h1>Registration Employee</h1>
    <div class="container">
        <div class="row">
          <div class="col-md-6 offset-md-3">            
              <form action="/employee/registration" method="POST">
                @csrf
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email</label>
                  <input type="text" class="form-control" name="nome" id="exampleInputEmail1" aria-describedby="emailHelp">   
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input type="password" class="form-control" name="password" id="exampleInputPassword1">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
          </div>
        </div>
      </div>
    
    
</x-side>
    