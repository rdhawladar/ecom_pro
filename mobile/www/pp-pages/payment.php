
<div class="page" data-name="payment-saved-card">
  <div class="navbar">
    <div class="navbar-inner sliding">
      <div class="left">
        <a href="#" class="link back">
          <i class="icon icon-back"></i>
          <span class="ios-only">Payment Saved Card</span>
        </a>
      </div>
      <div class="title">Payment</div>
    </div>
  </div>
  <div class="page-content">
      <div class="container-fluid payment">
            <div class="row">
                <div class="col-xs-12">
                    <h4 class="pull-left m-20"><b>Payment</b></h4>
                    <p class="pull-right m-10">Edit</p>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="total-payable">
                        <p class="d-inline-block">Total Payable</p>
                        <span class="pull-right price red">$968</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <h4 class="m-20"><b>Pay With</b></h4>
                    <div class="pay-with">
                        <div data-space-between="10" data-slides-per-view="3" class="swiper-container swiper-init demo-swiper">
                          <div class="swiper-pagination"></div>
                          <div class="swiper-wrapper">
                            <?php for($i=1; $i<=5; $i++) { ?>
                            <div class="swiper-slide carousel-partial">
                              <img src="images/amazon.svg" class="img-responsive pay-with-img">
                            </div>
                          <?php } ?>
                          </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row payment-setting">
                <div class="col-xs-12">
                    <h4 class="d-inline-block m-20">
                      <a href="#payment-tab-1" class="tab-link tab-link-active">Saved Card</a></h4> &nbsp; &nbsp; &nbsp; <span>
                      <a href="#payment-tab-2" class="tab-link">Add New Card</a></span>
                    <div class="tabs-swipeable-wrap">
                      <div class="tabs">
                        <div id="payment-tab-1" class="tab tab-active">
                              <div class="saved-card total-payable">
                                  <p>...xxxx 4568</p>
                              </div>
                              <div class="active-card total-payable">
                                  <p>...xxxx 6545</p>
                              </div>
                        </div>
                        <div id="payment-tab-2" class="tab">
                           <div class="invalid-card total-payable">
                              <p>You card is not valid. Try another card.</p>
                          </div>
                          <div class="row">
                              <div class="col-xs-12">
                                  <input class="input-default" type="text" placeholder="xxxx-xxxx-xxxx-3423"/>
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-xs-8">
                                  <input class="input-default" type="text" placeholder="DD-MM-YY"/>
                              </div>
                              <div class="col-xs-4">
                                  <input class="input-default" type="text" placeholder="CVV"/>
                              </div>
                          </div>
                          <div class="m-10 list">
                              <label class="item-checkbox item-content">
                              <input type="checkbox" name="checkbox" value="Books" checked="checked"/>
                              <i class="icon icon-checkbox"></i>
                              <div class="item-inner">
                                  <div class="item-title">Books</div>
                              </div>
                              </label>
                          </div>
                        </div>
                      </div>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-xs-6">
                    <a href="#" class="col button button-round button-fill">Make Payment</a>
                </div>
            </div>


      </div>
  </div>
</div>