<x-side title="Sistema de Vendas">

  <h1>Registration Client</h1>
      <div class="container">
          <div class="row">
            <div class="col-md-6 offset-md-3">            
                <form action="/client/registration" method="POST">
                  @csrf
                  <div class="mb-3">
                    <label class="form-label">Name Client</label>
                    <input type="text" class="form-control" name="name">   
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" name="email">
                  </div>
                  <div class="mb-3">
                      <label class="form-label">Age</label>
                      <input type="text" class="form-control" name="phone">
                    </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
          </div>
        </div>        
        
</x-side>
        