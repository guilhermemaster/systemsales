<x-side title="Portifolio Guilherme Barbosa Lima">

    <h1>Registration Sales</h1>
      <div class="container">
          <div class="row">
            <div class="col-md-6 offset-md-3">            
                <form action="/sales/registration" method="POST">
                  @csrf
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Name User</label>
                    <select class="form-select" aria-label="Default select example" name="userOption">
                        <option selected>Select</option>            
                        @foreach ($users as $user)             
                         <option value="{{ $user->id }}">{{ $user->nome }}</option>
                        @endforeach  
                    </select> 
                  </div>

                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Name Employee</label>
                    <select class="form-select" aria-label="Default select example" name="employeesOption">
                        <option selected>Select</option>            
                        @foreach ($employees as $employee)     
                            {{$employee}}
                         <option value="{{ $employee->id }}">{{ $employee->nome }}</option>
                        @endforeach  
                    </select>                        
                  </div>

                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Name Product</label>
                    <select class="form-select" aria-label="Default select example" name="productOption">
                        <option selected>Select</option>            
                        @foreach ($products as $product)             
                         <option value="{{ $product->id }}">{{ $product->nomeproduto }}</option>
                        @endforeach  
                    </select>                       
                  </div>

                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">The Amount</label>
                    <input type="number" class="form-control" name="theAmount" id="exampleInputPassword1">
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
          </div>
        </div>


  
        
                
             


        
                  
  </x-side>        