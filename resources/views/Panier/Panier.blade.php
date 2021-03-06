@extends('layouts.app')

@section('content')
<div> 
    @include('layouts.SidBar')
</div>
  
<div class="container px-1 my clearfix">
    <!-- Shopping cart table -->
    <div class="card">
        <div class="card-header">
            <h2>Shopping Cart</h2>
        </div>
        <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered m-0">
                <thead>
                  <tr>
                    <!-- Set columns width -->
                    <th class="text-center py-3 px-4" style="min-width: 400px;">Product Name &amp; Details</th>
                    <th class="text-right py-3 px-4" style="width: 100px;">Price</th>
                    <th class="text-center py-3 px-4" style="width: 120px;">Quantity</th>
                    <th class="text-right py-3 px-4" style="width: 100px;">Total</th>
                    <th class="text-center align-middle py-3 px-0" style="width: 40px;"><a href="#" class="shop-tooltip float-none text-light" title="" data-original-title="Clear cart"><i class="ino ion-md-trash"></i></a></th>
                  </tr>
                </thead>
                <tbody>
        
                  @foreach ($Details as $Key => $detail)
                  <tr>
                    <td class="p-4">

                      <div class="media align-items-center">
                        <img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="d-block ui-w-40 ui-bordered mr-4" alt="">
                        <div class="media-body">
                          <a href="#" class="d-block text-dark">{{$detail->nom_produit}}</a>
                          <small>
                            <span class="text-muted">Color:</span>
                            <span class="ui-product-color ui-product-color-sm align-text-bottom" style="background:#e81e2c;"></span> &nbsp;
                            <span class="text-muted">Size: </span> EU 37 &nbsp;
                            <span class="text-muted">Ships from: </span> China
                          </small>
                        </div>
                      </div>
                    </td>

                    <td class="text-right font-weight-semibold align-middle p-4">{{$detail->prix}}</td>
                   
                    <td class="align-middle p-4"><input type="text" class="form-control text-center" value="{{$detail->Quantite}}"></td>
                   
                    <td class="text-right font-weight-semibold align-middle p-4">$115.1</td>
                   
                    <td class="text-center align-middle px-0">
                      <a href="#" class="shop-tooltip close float-none text-danger" title="Delete detail {{ $detail->nom_produit }}"
                        onclick="event.preventDefault(); document.querySelector('#delete-detail-form').submit()"  >??</a>
                        <form action="{{ route('details.destroy', ['detail' => $detail->id]) }}" method="post" id="delete-detail-form">@csrf @method('DELETE')</form>
                
                      
                      </tr>
               @endforeach
        
                </tbody>
              </table>
            </div>
            <!-- / Shopping cart table -->
        
            <div class="d-flex flex-wrap justify-content-between align-items-center pb-4">
              <div class="mt-4">
                <label class="text-muted font-weight-normal">Promocode</label>
                <input type="text" placeholder="ABC" class="form-control">
              </div>
              <div class="d-flex">
                <div class="text-right mt-4 mr-5">
                  <label class="text-muted font-weight-normal m-0">Discount</label>
                  <div class="text-large"><strong>$20</strong></div>
                </div>
                <div class="text-right mt-4">
                  <label class="text-muted font-weight-normal m-0">Total price</label>
                  <div class="text-large"><strong>$1164.65</strong></div>
                </div>
              </div>
            </div>
        
            <div class="float-right">
                <a href="/" class="btn btn-secondary btn-lg " role="button" >Back to shopping</a>
                <a href="/home" class="btn btn-primary btn-lg " role="button" >Checkout</a>
             
            </div>
        
          </div>
      </div>
  </div>


    </div><!-- container Finish -->
</div>
</div>

    <script src="{{asset('js/jquery-331.min.js')}}"></script>
    <script src="{{asset('js/bootstrap-337.min.js')}}"></script>

@endsection