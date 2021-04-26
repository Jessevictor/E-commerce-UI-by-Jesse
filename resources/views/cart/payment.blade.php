
<div class="container">

    <div class="row">
      <div class="col-md-8 order-md-2 mb-4">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
          <span class="text-muted">Your cart</span>
          <span class="badge badge-secondary badge-pill">3</span>
        </h4>
        <div class="card">
    </div>
    <thead>
        <li class="list-group-item d-flex justify-content-between lh-condensed">
            <div>
                <h6>Image</h6>
            </div>
            <h6>Name</h6>
            <h6>Quantity</h6>
            <h6> Price</h6>
            <h6>Delete</h6>
          </li>
    </thead>
        <ul class="list-group mb-3">
          <li class="list-group-item d-flex justify-content-between lh-condensed">
            <div>
                <img src="https://www.phonestablets.co.ke/images/products/2093/Mi-Smart-Band-5-2.jpg" width="30px"  height="30px" alt="Productimage">
            </div>
            <h6 class="my-0">Product name</h6>
            <input type="number" value="1" min="1" max="21" step=""/>
                     <span class="text-muted">Ksh12</span>
            <button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
          </li>
          <li class="list-group-item d-flex justify-content-between lh-condensed">
            <div>
                <img src="https://www.phonestablets.co.ke/images/products/2093/Mi-Smart-Band-5-2.jpg" width="30px"  height="30px" alt="Productimage">
            </div>
            <h6 class="my-0">Product name</h6>
            <input type="number" value="1" min="1" max="21" step=""/>
                     <span class="text-muted">Ksh12</span>
            <button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
          </li>
          <li class="list-group-item d-flex justify-content-between lh-condensed">
            <div>
                <img src="https://www.phonestablets.co.ke/images/products/2093/Mi-Smart-Band-5-2.jpg" width="30px"  height="30px" alt="Productimage">
            </div>
            <h6 class="my-0">Product name</h6>
            <input type="number" value="1" min="1" max="21" step=""/>
                     <span class="text-muted">Ksh12</span>
            <button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
          </li>
          <li class="list-group-item d-flex justify-content-between lh-condensed">
            <div>
                <img src="https://www.phonestablets.co.ke/images/products/2093/Mi-Smart-Band-5-2.jpg" width="30px"  height="30px" alt="Productimage">
            </div>
            <h6 class="my-0">Product name</h6>
            <input type="number" value="1" min="1" max="21" step=""/>
                     <span class="text-muted">Ksh12</span>
            <button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
          </li>
          <li class="list-group-item d-flex justify-content-between">
            <span>Total (USD)</span>
            <strong>$20</strong>
          </li>
        </ul>

        <form class="card p-2">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Promo code">
            <div class="input-group-append">
              <button type="submit" class="btn btn-secondary">Redeem</button>
            </div>
          </div>
        </form>
      </div>
      <div class="col-md-4 order-md-1">
        <h4 class="mb-3">Billing address</h4>
        <form class="needs-validation" novalidate>
            <div class="mb-3">
                <label for="email">User Name<span class="text-muted"></span></label>
                <input type="email" class="form-control" id="email" placeholder="you@example.com">
                <div class="invalid-feedback">
                  Please enter a valid email address for shipping updates.
                </div>
              </div>

          <div class="mb-3">
            <label for="email">Email <span class="text-muted">(Optional)</span></label>
            <input type="email" class="form-control" id="email" placeholder="you@example.com">
            <div class="invalid-feedback">
              Please enter a valid email address for shipping updates.
            </div>
          </div>

          <div class="mb-3">
            <label for="address">Address</label>
            <input type="text" class="form-control" id="address" placeholder="1234 Main St" required>
            <div class="invalid-feedback">
              Please enter your shipping address.
            </div>
          </div>

          <hr class="mb-4">
          <h4 class="mb-3">Payment</h4>

          <div class="d-block my-3">
            <div class="custom-control custom-radio">
              <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required>
              <label class="custom-control-label" for="credit">Mpesa</label>
            </div>
          </div>
           {{-- Phone --}}
           <div class="mb-4">
            <label for="address2">Phone Number <span class="text-muted"></span></label>
            <input type="text" class="form-control" id="address2" placeholder="eg.07xxxxx">
          </div>
          <hr class="mb-4">
          <button class="btn btn-primary btn-lg btn-block" type="submit">Place Order</button>
        </form>
      </div>
    </div>

    <footer class="my-5 pt-5 text-muted text-center text-small">
      <p class="mb-1">&copy; 2017-2019 Company Name</p>
      <ul class="list-inline">
        <li class="list-inline-item"><a href="#">Privacy</a></li>
        <li class="list-inline-item"><a href="#">Terms</a></li>
        <li class="list-inline-item"><a href="#">Support</a></li>
      </ul>
    </footer>
  </div>

