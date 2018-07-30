
<div class="page" data-name="payment-saved-card">
  <div class="navbar">
    <div class="navbar-inner sliding">
      <div class="left">
        <a href="#" class="link back">
          <i class="icon icon-back"></i>
          <span class="ios-only">Payment Saved Card</span>
        </a>
      </div>
      <div class="title">About</div>
    </div>
  </div>
  <div class="page-content">
      <div class="container-fluid">
          <h2><b>My Cart</b></h2>
          <?php for ($i=0; $i <= 2 ; $i++) { ?>
            <div class="col-xs-12 cart-items">
                <div class="row">
                    <div class="items">
                      <div class="col-xs-5">
                          <img src="images/mobile.jpg" class="img-responsive">
                      </div>
                      <div class="col-xs-7">
                        <div class="row">
                            <div class="col-xs-8">
                                <p class="item-details">Apple iPhone 7 Plus, GSM Unlocked, 32GB - Rose  Gold (Certified Refurbished )</p>
                                <img src="images/amazon.svg" class="img-responsive vendor-img">
                            </div>
                            <div class="col-xs-4 text-right">
                                <span class="cross">X</span>
                            </div>
                          
                        </div>
                        <div class="row">
                            <div class="col-xs-8">
                                <div class="input-group input-group-sm qnt-input">
                                  
                                  <i class="glyphicon glyphicon-minus input-group-addon"></i>
                                  <input type="number" class="form-control" min="1" value="1" aria-describedby="sizing-addon3">
                                  <i class="glyphicon glyphicon-plus input-group-addon"></i>
                                </div>
                            </div>
                            <div class="col-xs-4">
                                <span class="price pull-right"><b>$750</b></span>
                            </div>
                          
                        </div>
                        
                      </div>
                    </div>
                </div>
            </div>
          <?php } ?>


      </div>
      <div class="container cart-footer">  
          <div class="row">
              <div class="col-xs-12">
                  <div class="row">
                      <div class="col-xs-6">
                          <img src="images/demo.jpg" class="img-responsive">
                          <p>Price Total</p><br>
                          <p class="price">$356</p>
                      </div>
                      <div class="col-xs-6 text-right">
                          <a href="#" class="col button button-round button-fill">Add Address</a>
                      </div>
                    
                  </div>
                  <br><br>
              </div>
          </div>
      </div>
  </div>
</div>