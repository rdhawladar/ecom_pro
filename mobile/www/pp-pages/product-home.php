
<div class="page" data-name="product-home">
  <div class="page-content">
      <div class="wrapper">
        <!-- Page Content Holder -->
        <div id="content">
            <div class="container">
                <div class="well well-sm">
                    <div>
                      <strong class="text-left"> Trendy Now</strong>
                      <span class="pull-right">More than 500 products found.</span>
                    </div>
                </div>
                  <div class="com-sm-12">
                <div id="products" class="row list-group">
                    
                  <?php 
                    for($i=1; $i<8; $i++) {
                ?>
                      <div class="item col-xs-6">
                          <div class="thumbnail">
                            <a href="#" class="btn btn-discount btn-danger">-10%</a>
                              <img class="group list-group-image" src="images/mobile.jpg" alt="" />
                              <img class="group hover-icon-eye" src="images/details.svg" alt="" />
                              <img class="group hover-icon-cart" src="images/add_to_cart.svg" alt="" />
                              <div class="caption">
                                  <div class="row">
                                      <div class="col-xs-8">
                                          <h5 class="group inner list-group-item-heading">Product title</h5>
                                          <span>$21.000</span>
                                      </div>
                                      <div class="col-xs-4">
                                        <img class="pull-right heart" src="images/favourite.svg">
                                          
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                <?php                 
                    }
                  ?>
                  </div>
                </div>
            </div>
            <br><br><br>
        </div>
    </div>
  </div>
</div>
