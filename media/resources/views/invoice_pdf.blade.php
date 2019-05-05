<!DOCTYPE html>
<html>
<head>



        <link rel="stylesheet" href="{{ asset('invoice/app.css') }}">

<style>

table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

        <div class="container">
                <div class="invoice">
                  <div class="row">
                    <div class="col-7">
                      <h1><strong>Mediatheque</strong></h1>
                    </div>
                    <div class="col-5">
                      <h1 class="document-type display-4">Invoice</h1>
                    <p class="text-right"><strong>{{$invoice->id }}</strong><br>
                      
                    </p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-7">
                      <p>
                      <strong>{{$media->name}}</strong><br>
                      {{$media->adresse}}<br>
                      {{$media->phone}}
                      </p>
                    </div>
                    <div class="col-5">
                      <br><br><br>
                      <p>
                        <strong>{{$admin->name}}</strong><br>
                     
                      </p>
                    </div>
                  </div>
                  <br>
                  <br>
                  <h6>date {{$invoice->date}}</h6>
                  <br>
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>Product id </th>
                        <th>Quantity</th>
                        <th>Option</th>
                        <th>price</th>
                        <th>TVA</th>
                        <th>Total</th>
                      </tr>
                    </thead>
                    <tbody>
                      
                        @foreach ($order_details as $item)
              
                        <tr>
                        <td>{{$item->product_id}}</td>
                        <td>{{$item->quantity}}</td>
                        @if ($item->option_id==1)
                            
                        <td>Buy</td>
              
                        @else
              
                        <td>Rent</td>
              
                        @endif
                       
                        <td class="text-right">{{$item->price}}</td>
                        <td>10%</td>
                        <td class="text-right">{{$item->price * $item->quantity}}</td>
                         </tr>    
                        @endforeach
                        
                  
                    </tbody>
                  </table>
                  <div class="row">
                    <div class="col-8">
                    </div>
                    <div class="col-4">
                      <table class="table table-sm text-right">
                        <tr>
                          <td><strong>Total </strong></td>
                        <td class="text-right">{{$total}}</td>
                        </tr>
                      </table>
                    </div>
                  </div>
                  
                  <p class="conditions">
                  condition condition conditions<br>
                  condition condition condition <br>
                <br><br>
                condition condition conditions<br>
                condition condition<br>
                
                </p>
                  
                  <br>
                  <br>
                  <br>
                  <br>
                  
                  <p class="bottom-page text-right">
                    mediatheque media <br>
                   
                  </p>
                </div>
              </div>
              
              


</body>
</html>