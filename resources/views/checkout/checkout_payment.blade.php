@extends('front.master-payments')
@section('content')
  <!-- offer block end  --> 
 <br>
  

        {{--  --}}
        <main class="main">
        	<div class="page-header text-center" style="background-image: url('{{asset('theme/assets/images/page-header-bg.jpg')}}')">
        		<div class="container">
        			<h1 class="page-title">Checkout<span>Shop</span></h1>
        		</div><!-- End .container -->
        	</div><!-- End .page-header -->
            <nav aria-label="breadcrumb" class="breadcrumb-nav">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{url('/')}}/shopping-cart">Shopping Cart</a></li>
                        <li class="breadcrumb-item"><a href="{{url('/')}}/shopping-cart">Checkout</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Choose Payment Method</li>
                    </ol>
                </div><!-- End .container -->
            </nav><!-- End .breadcrumb-nav -->

            <div class="page-content">
            	<div class="checkout">
	                <div class="container">
            			<div class="checkout-discount">
            				<form action="#">
        						<input type="text" class="form-control" required id="checkout-discount-input">
            					<label for="checkout-discount-input" class="text-truncate">Have a coupon? <span>Click here to enter your code</span></label>
            				</form>
            			</div><!-- End .checkout-discount -->
            			{{-- <form action="#"> --}}
		                	<div class="row">
		                		<div class="col-lg-9">
		                			<h2 class="checkout-title">Billing Details</h2><!-- End .checkout-title -->
		                				<div class="row">
		                					<div class="col-sm-6">
		                						<label>First Name *</label>
		                						<input type="text" class="form-control" required>
		                					</div><!-- End .col-sm-6 -->

		                					<div class="col-sm-6">
		                						<label>Last Name *</label>
		                						<input type="text" class="form-control" required>
		                					</div><!-- End .col-sm-6 -->
		                				</div><!-- End .row -->

	            						<label>Company Name (Optional)</label>
	            						<input type="text" class="form-control">

	            						<label>Country *</label>
	            						<input type="text" class="form-control" required>

	            						<label>Street address *</label>
	            						<input type="text" class="form-control" placeholder="House number and Street name" required>
	            						<input type="text" class="form-control" placeholder="Appartments, suite, unit etc ..." required>

	            						<div class="row">
		                					<div class="col-sm-6">
		                						<label>Town / City *</label>
		                						<input type="text" class="form-control" required>
		                					</div><!-- End .col-sm-6 -->

		                					<div class="col-sm-6">
		                						<label>State / County *</label>
		                						<input type="text" class="form-control" required>
		                					</div><!-- End .col-sm-6 -->
		                				</div><!-- End .row -->

		                				<div class="row">
		                					<div class="col-sm-6">
		                						<label>Postcode / ZIP *</label>
		                						<input type="text" class="form-control" required>
		                					</div><!-- End .col-sm-6 -->

		                					<div class="col-sm-6">
		                						<label>Phone *</label>
		                						<input type="tel" class="form-control" required>
		                					</div><!-- End .col-sm-6 -->
		                				</div><!-- End .row -->

	                					<label>Email address *</label>
	        							<input type="email" class="form-control" required>

	        							<div class="custom-control custom-checkbox">
											<input type="checkbox" class="custom-control-input" id="checkout-create-acc">
											<label class="custom-control-label" for="checkout-create-acc">Create an account?</label>
										</div><!-- End .custom-checkbox -->

										<div class="custom-control custom-checkbox">
											<input type="checkbox" class="custom-control-input" id="checkout-diff-address">
											<label class="custom-control-label" for="checkout-diff-address">Ship to a different address?</label>
										</div><!-- End .custom-checkbox -->

	                					<label>Order notes (optional)</label>
	        							<textarea class="form-control" cols="30" rows="4" placeholder="Notes about your order, e.g. special notes for delivery"></textarea>
		                		</div><!-- End .col-lg-9 -->
		                		<aside class="col-lg-3">
		                			<div class="summary">
		                				<h3 class="summary-title">Your Order #{{$OrderNumberNumber}}</h3><!-- End .summary-title -->

		                				<table class="table table-summary">
		                					<thead>
		                						<tr>
		                							<th>Product</th>
		                							<th>Total</th>
		                						</tr>
		                					</thead>

		                					<tbody>
                                                @foreach($CartItems as $CartItem)
                                                <?php 
                                                                $Products = DB::table('product')->where('id',$CartItem->id)->get();
                                                ?>
                                                @foreach($Products as $Product)
		                						<tr>
		                							<td><a href="{{url('/')}}/product/{{$Product->slung}}">{{$Product->name}} <strong>x</strong> {{$CartItem->qty}}</a></td>
		                							<td>KES {{$CartItem->price}}</td>
		                						</tr>
                                                @endforeach
                                                @endforeach

		                						
		                						<tr class="summary-subtotal">
		                							<td>Subtotal:</td>
		                							<td>{{Cart::subtotal()}}</td>
		                						</tr><!-- End .summary-subtotal -->
		                						<tr>
		                							<td>Shipping:</td>
		                							<td>KES {{$Shipping}}</td>
		                						</tr>
		                						<tr class="summary-total">
		                							<td>Total:</td>
		                							<td>KES
                                                        <?php 
                                                          //remove comma   
                                                          $Subtotal = Cart::subtotal();
                                                          $PrepSubtotal = str_replace(',', '', $Subtotal);
                                                          $WholeSubtotal = ceil($PrepSubtotal);
                                                          $TheTotal = $WholeSubtotal + $Shipping;
                                                          echo $TheTotal;
                                                        ?>
                                                     </td>
		                						</tr><!-- End .summary-total -->
		                					</tbody>
		                				</table><!-- End .table table-summary -->

		                				<div class="accordion-summary" id="accordion-payment">
										    <div class="card">
										        <div class="card-header" id="heading-1">
										            <h2 class="card-title">
										                <a role="button" data-toggle="collapse" href="#collapse-1" aria-expanded="true" aria-controls="collapse-1">
										                    M-PESA PayBill
										                </a>
										            </h2>
										        </div><!-- End .card-header -->
										        <div id="collapse-1" class="collapse" aria-labelledby="heading-1" data-parent="#accordion-payment">
										            <div class="card-body">
										                {{--  --}}
                                                        <p>
                                                        <ul style="color:#333333"> 
                                                            <li style="border-bottom:1px solid #666666">Go to your MPESA menu</li>
                                                            <li style="border-bottom:1px solid #666666">Select Lipa Na MPESA</li>
                                                            <li style="border-bottom:1px solid #666666">Select PayBill</li>
                                                            <?php $SettingsTill = DB::table('sitesettings')->get(); ?>
                                                            @foreach($SettingsTill as $set)
                                                            <li style="border-bottom:1px solid #666666">Enter the Business Number <strong>{{$set->till}}</strong> </li>
                                                            @endforeach
                                                            <!-- Invoice Number -->
                                                            <li style="border-bottom:1px solid #666666">Enter Account Number <strong>{{$InvoiceNumber}}</strong></li>
                                                            <!-- Invoice Number -->
                                                            <li style="border-bottom:1px solid #666666">Enter Amount KSH 
                                                              <strong>
                                                              <?php
                                                                if(Session::has('campaign')){
                                                                    $cost = Cart::total();
                                                                    $percentage = 10;
                                                                    $PrepeTotalCart = str_replace( ',', '', $cost );
                                                                    $FormatTotalCart = round($PrepeTotalCart, 0);
                                                                    $discount = ($percentage / 100) * $FormatTotalCart;
                                                                    $TotalCart = ($FormatTotalCart - $discount);
                                                                }else{
                                                                    $cost = Cart::total();
                                                                    $percentage = 10;
                                                                    $PrepeTotalCart = str_replace( ',', '', $cost );
                                                                    $FormatTotalCart = round($PrepeTotalCart, 0);
                                                                    $TotalCart = $FormatTotalCart;
                                                                }
    
                                                                  $PrepeTotalCart = str_replace( ',', '', $TotalCart );
                                                                  $FormatTotalCart = round($PrepeTotalCart, 0);
                                                                  $ShippingFee = $Shipping;
                                                                  $TotalCost = $FormatTotalCart+$ShippingFee;
                                                                  echo $TotalCost;
                                                                
                                                              ?>
                                                              </strong>
                                                            </li>
                                                            <li style="border-bottom:1px solid #666666">Then press ok to confirm</li>
                                                            <li style="border-bottom:1px solid #666666">Enter the transaction code below</li>
                                                            <li style="border-bottom:1px solid #666666">Click verify to verify payment</li>
                                                            <form method="POST" action="#" id="verify">
                                                              {{ csrf_field() }}
                                                              <input type="hidden" name="invoice" value="{{$InvoiceNumber}}">
                                                                    <?php
                                                                        if(Session::has('campaign')){
                                                                            $cost = Cart::total();
                                                                            $percentage = 10;
                                                                            $PrepeTotalCart = str_replace( ',', '', $cost );
                                                                            $FormatTotalCart = round($PrepeTotalCart, 0);
                                                                            $discount = ($percentage / 100) * $FormatTotalCart;
                                                                            $TotalCart = ($FormatTotalCart - $discount);
                                                                        }else{
                                                                            $cost = Cart::total();
                                                                            $percentage = 10;
                                                                            $PrepeTotalCart = str_replace( ',', '', $cost );
                                                                            $FormatTotalCart = round($PrepeTotalCart, 0);
                                                                            $TotalCart = $FormatTotalCart;
                                                                        }
            
                                                                        $PrepeTotalCart = str_replace( ',', '', $TotalCart );
                                                                        $FormatTotalCart = round($PrepeTotalCart, 0);
                                                                        $ShippingFee = $Shipping;
                                                                        $TotalCost = $FormatTotalCart+$ShippingFee;
                                                                        
                                                                    
                                                                    ?>
                                                              <input type="hidden" name="amount" value="{{$TotalCost}}">
                                                              <div class="col-md-12">
                                                                  <div class="form-group">
                                                                      <p for="email">Enter Your MPESA Transaction Code <span>*</span></p>
                                                                      <input type="text" name="TransactionID" class="form-control" required placeholder="NJL4E9WJ96" id="email" autocomplete="off">
                                                                  </div>
                                                                <div class="pull-left"><button id="veryfyID" class="btn btn-outline-primary-2 btn-order btn-block" type="submit"> Veryfy Payment &nbsp;<i class="fa fa-arrow-right"></i> </button></div>
                                                              </div>
                                                            </form>
    
                                                        </ul>
                                                        </p>
                                                        {{--  --}}
										            </div><!-- End .card-body -->
										        </div><!-- End .collapse -->
										    </div><!-- End .card -->

										    <div class="card">
										        <div class="card-header" id="heading-2">
										            <h2 class="card-title">
										                <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
										                    Lipa na M-Pesa online
										                </a>
										            </h2>
										        </div><!-- End .card-header -->
										        <div id="collapse-2" class="collapse" aria-labelledby="heading-2" data-parent="#accordion-payment">
										            <div class="card-body">
										                {{--  --}}
                                                        <form method="POST" action="#" id="verify">
                                                            {{ csrf_field() }}
                                                            <input type="hidden" name="invoice" value="{{$InvoiceNumber}}">
                                                                  <?php
                                                                      if(Session::has('campaign')){
                                                                          $cost = Cart::total();
                                                                          $percentage = 10;
                                                                          $PrepeTotalCart = str_replace( ',', '', $cost );
                                                                          $FormatTotalCart = round($PrepeTotalCart, 0);
                                                                          $discount = ($percentage / 100) * $FormatTotalCart;
                                                                          $TotalCart = ($FormatTotalCart - $discount);
                                                                      }else{
                                                                          $cost = Cart::total();
                                                                          $percentage = 10;
                                                                          $PrepeTotalCart = str_replace( ',', '', $cost );
                                                                          $FormatTotalCart = round($PrepeTotalCart, 0);
                                                                          $TotalCart = $FormatTotalCart;
                                                                      }
          
                                                                      $PrepeTotalCart = str_replace( ',', '', $TotalCart );
                                                                      $FormatTotalCart = round($PrepeTotalCart, 0);
                                                                      $ShippingFee = $Shipping;
                                                                      $TotalCost = $FormatTotalCart+$ShippingFee;
                                                                      
                                                                  
                                                                  ?>
                                                            <input type="hidden" name="amount" value="{{$TotalCost}}">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <p for="email">Enter Your MPESA Phone Number <span>*</span></p>
                                                                    <input type="text" name="TransactionID" class="form-control" required placeholder="NJL4E9WJ96" id="email" autocomplete="off">
                                                                </div>
                                                              <div class="pull-left"><button id="veryfyID" class="btn btn-outline-primary-2 btn-order btn-block" type="submit"> Pay Now &nbsp;<i class="fa fa-arrow-right"></i> </button></div>
                                                            </div>
                                                          </form>
                                                        {{--  --}}
										            </div><!-- End .card-body -->
										        </div><!-- End .collapse -->
										    </div><!-- End .card -->

										    <div class="card">
										        <div class="card-header" id="heading-3">
										            <h2 class="card-title">
										                <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-3" aria-expanded="false" aria-controls="collapse-3">
										                    Cash on delivery
										                </a>
										            </h2>
										        </div><!-- End .card-header -->
										        <div id="collapse-3" class="collapse" aria-labelledby="heading-3" data-parent="#accordion-payment">
										            <div class="card-body">Quisque volutpat mattis eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. 
										            </div><!-- End .card-body -->
										        </div><!-- End .collapse -->
										    </div><!-- End .card -->

										    <div class="card">
										        <div class="card-header" id="heading-4">
										            <h2 class="card-title">
										                <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-4" aria-expanded="false" aria-controls="collapse-4">
										                    PayPal <small class="float-right paypal-link">What is PayPal?</small>
										                </a>
										            </h2>
										        </div><!-- End .card-header -->
										        <div id="collapse-4" class="collapse" aria-labelledby="heading-4" data-parent="#accordion-payment">
										            <div class="card-body">
										                Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum.
										            </div><!-- End .card-body -->
										        </div><!-- End .collapse -->
										    </div><!-- End .card -->

										    <div class="card">
										        <div class="card-header" id="heading-5">
										            <h2 class="card-title">
										                <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-5" aria-expanded="false" aria-controls="collapse-5">
										                    Credit Card (Stripe)
										                    <img src="assets/images/payments-summary.png" alt="payments cards">
										                </a>
										            </h2>
										        </div><!-- End .card-header -->
										        <div id="collapse-5" class="collapse" aria-labelledby="heading-5" data-parent="#accordion-payment">
										            <div class="card-body"> Donec nec justo eget felis facilisis fermentum.Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Lorem ipsum dolor sit ame.
										            </div><!-- End .card-body -->
										        </div><!-- End .collapse -->
										    </div><!-- End .card -->
										</div><!-- End .accordion -->

		                				<button type="submit" class="btn btn-outline-primary-2 btn-order btn-block">
		                					<span class="btn-text">Place Order</span>
		                					<span class="btn-hover-text">Proceed to Checkout</span>
		                				</button>
		                			</div><!-- End .summary -->
		                		</aside><!-- End .col-lg-3 -->
		                	</div><!-- End .row -->
            			{{-- </form> --}}
	                </div><!-- End .container -->
                </div><!-- End .checkout -->
            </div><!-- End .page-content -->
        </main><!-- End .main -->
        {{--  --}}
     


@endsection