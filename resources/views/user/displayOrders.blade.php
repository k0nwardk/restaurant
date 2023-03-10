<!DOCTYPE html>
<html lang="en">
<head>
  <title>display Order</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
     <!-- header -->
     @include('layouts.nav')
     <!-- Sidebar -->
     @include('layouts.sidedash')
         <!-- sidebar -->
         <div class="container-fluid">
            <div class="row g-3 my-2">
            <center>
                <div class="col-lg-6 mt-5">
                    <div class="card bg-white mb-3 text-center shadow p-3 mb-3 rounded h-50">
                        <div class="container-fluid mt-3">
                           <form action="{{ route('order_items') }}" method="POST">
                               @csrf {{-- select table --}}
                                
                                {{-- select item --}}
                                <div class="form-group ">
                                    <label for="item" class="form-label">
                                        <h4>Please Select Items</h4>
                                    </label>
                                    <div class="form-group column col-md-12">
                                        <select class="form-select" id="item_id" name="item_id" required>
                                            <option value="">Select Item</option>
                                            @foreach ($item as $s)
                                            <option value="{{$s->item_id}}">{{$s->i_name}} ---> {{$s->price}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="item" class="form-label">
                                        <h4>Quantity</h4>
                                    </label>
                                    <div class="form-group column col-md-12">
                                    <input id="quantity" class="input-group" type="number" name="quantity" value="">
                                    </div>
                                </div>
                                
                                    <div class="row" style="margin-left:30px ;">
                                        <div class="form-group col-md-4 ml-5">
                                            <input type="hidden" name="customer_id" value="{{ $customer_id }}">
                                           <button type="submit" class="btn btn-success" id="add" name="add">Add</button>
                                     </div>
                                </div>
                                </div>
                            </form>
                            
                        </div>
                    </div>
                </div>
            </center>
        </div>
        @if(1>0)
        <div class="card col-3">
            <div class="row">
                <div class="col-md">
                    <div class="card bg-white mb-3 text-center shadow p-3 mb-3 rounded">
                        <div class="container-fluid mt-3">
                            <div class="row">
                                <div class="col-md">
                                    <h4>Order Details</h4>
                                </div>
                                <div class="col-md">
                                    <table class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>Table No</th>
                                                <th>Item Name</th>
                                                <th>Quantity</th>
                                                <th>Price</th>
                                                <th>Total</th>
                                            </tr>
                                        </thead>
                                        <tbody id="table_data">
                                            <tr>
                                               {{ 1}}
                                            </tr>
                                        </tbody>
                                    </table>
                            </div>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>    
    
@endif
</div>
</body>
</html>
