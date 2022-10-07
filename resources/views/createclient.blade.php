<x-side title="Portifolio Guilherme Barbosa Lima">

  <h1>Registration Client</h1>
      <div class="container">
          <div class="row">
            <div class="col-md-6 offset-md-3">            
                <form action="/client/registration" method="POST">
                  @csrf
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Name Client</label>
                    <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp">   
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" id="exampleInputPassword1">
                  </div>
                  <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Age</label>
                      <input type="text" class="form-control" name="phone" id="exampleInputPassword1">
                    </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
          </div>
        </div>        
        
</x-side>
        