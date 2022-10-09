<x-side title="Sistema de Vendas">

  <h1>Registration Employee</h1>
    <div class="container">
        <div class="row">
          <div class="col-md-6 offset-md-3">            
              <form action="/products/registration" method="POST">
                @csrf
                <div class="mb-3">
                  <label class="form-label">Name Product</label>
                  <input type="text" class="form-control" name="nome">      
                </div>
                <div class="mb-3">
                  <label class="form-label">The Amount</label>
                  <input type="number" class="form-control" name="theAmount">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
          </div>
        </div>
      </div>
                
</x-side>        