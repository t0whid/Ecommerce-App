

@extends('master')
@section("content")
<div class="custom-product">
  <div class="trending-wrapper">
  <div class="col-sm-10">
            <div class="justify-content-center">
            <h4>Result for Products</h4>
            
            <a class="btn btn-success" href="ordernow">Order Now</a> <br> <br>
           
            </div>
            
            @foreach($products as $item)
            
            <div class=" row searched-item cart-list-devider">
             <div class="col-sm-3 pb-2">
                <a href="detail/{{$item->id}}">
                    <img class="trending-image" src="{{$item->gallery}}">
                  </a>
             </div>
             
             <div class="col-sm-4">
                    <div class="">
                      <h2>{{$item->name}}</h2>
                    </div>
             </div>
             
             <div class="col-sm-3 mt-5">
                <a href="/removecart/{{$item->cart_id}}" class="btn btn-warning" >Remove from Cart</a>
              </div>
            </div>
            
            
            @endforeach
          </div>
        
          <a class="btn btn-success" href="ordernow">Order Now</a> <br> <br>

     </div>
</div>
@endsection 