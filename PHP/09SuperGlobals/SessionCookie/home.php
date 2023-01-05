<?php  
include("header.php"); 
// include("header.php"); 
// include("header.php"); 
// include("header1.php"); 
// include("header.php"); 
if (isset($_POST['prod1_addtocart'])) {
    $_SESSION['CartData'] = array("prod1"=>array("prod1_title"=>$_REQUEST['prod1_title'],"prod1_price"=>$_REQUEST['prod1_price'],"prod1_quantity"=>$_REQUEST['prod1_quantity'],"prod1_image"=>$_REQUEST['prod1_image'])) ;
}  
?>
<p>if we are going to use include for get other page data it will includes multiple time for the same.</p>
<p>include will generate warning dnts stop the execution</p>

<div class="container">
  <hr />
</div>

<div class="container">
  <div class="row">

    <div class="col-md-4 mb-3">
      <div class="card h-100">
        <div class="d-flex justify-content-between position-absolute w-100">
          <div class="label-new">
            <span class="text-white bg-success small d-flex align-items-center px-2 py-1">
              <i class="fa fa-star" aria-hidden="true"></i>
              <span class="ml-1">New</span>
            </span>
          </div>
          <div class="label-sale">
            <span class="text-white bg-primary small d-flex align-items-center px-2 py-1">
              <i class="fa fa-tag" aria-hidden="true"></i>
              <span class="ml-1">Sale</span>
            </span>
          </div>
        </div>
        <a href="#">
          <img src="https://picsum.photos/700/550" class="card-img-top" alt="Product">
        </a>
        <div class="card-body px-2 pb-2 pt-1">
          <div class="d-flex justify-content-between">
            <div>
              <p class="h4 text-primary">$129,99</p>
            </div>
            <div>
              <a href="#" class="text-secondary lead" data-toggle="tooltip" data-placement="left" title="Compare">
                <i class="fa fa-line-chart" aria-hidden="true"></i>
              </a>
            </div>
          </div>
          <p class="text-warning d-flex align-items-center mb-2">
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
          </p>
          <p class="mb-0">
            <strong>
              <a href="#" class="text-secondary">Product Title</a>
            </strong>
          </p>
          <p class="mb-1">
            <small>
              <a href="#" class="text-secondary">Brands</a>
            </small>
          </p>
          <div class="d-flex mb-3 justify-content-between">
            <div>
              <p class="mb-0 small"><b>UPC: </b> 2310010</p>
              <p class="mb-0 small"><b>PART#: </b> 2121</p>
              <p class="mb-0 small"><b>MPN#: </b> mpn22651</p>
            </div>
            <div class="text-right">
              <p class="mb-0 small"><b>Free Shipping</b></p>
              <p class="mb-0 small"><b>MSRP: </b> $119.99</p>
              <p class="mb-0 small"><b>REG: </b> $19.99</p>
              <p class="mb-0 small text-primary">
                <span class="font-weight-bold">Save</span> $20.00 (16%)
              </p>
            </div>
          </div>
          <div class="d-flex justify-content-between">
            <div class="col px-0">
                <form method="post">
                    <input type="text" value="product1" name="prod1_title" id="">
                    <input type="text" value="$119.99" name="prod1_price" id="">
                    <input type="text" value="1" name="prod1_quantity" id="">
                    <input type="text" value="https://picsum.photos/700/550" name="prod1_image" id="">
                    <input type="submit" value="Add to cart" name="prod1_addtocart" id="prod1_addtocart">
                </form>
              <button class="btn btn-outline-primary btn-block">
                Add To Cart 
                <i class="fa fa-shopping-basket" aria-hidden="true"></i>
              </button>
            </div>
            <div class="ml-2">
              <a href="#" class="btn btn-outline-success" data-toggle="tooltip" data-placement="left" title="Add to Wishlist">
                <i class="fa fa-heart" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-4 mb-3">
      <div class="card h-100">
        <div class="labels d-flex justify-content-between position-absolute w-100">
          <div class="label-new">
          </div>
          <div class="label-sale">
            <span class="text-white bg-primary small d-flex align-items-center px-2 py-1">
              <i class="fa fa-tag" aria-hidden="true"></i>
              <span class="ml-1">Sale</span>
            </span>
          </div>
        </div>
        <a href="#">
          <img src="https://picsum.photos/700/550" class="card-img-top" alt="Product">
        </a>
        <div class="card-body px-2 pb-2 pt-1 d-flex flex-column">
          <div class="d-flex justify-content-between">
            <div>
              <p class="h4 text-primary">$130,00</p>
            </div>
            <div>
              <a href="#" class="text-secondary lead" data-toggle="tooltip" data-placement="left" title="Compare">
                <i class="fa fa-line-chart" aria-hidden="true"></i>
              </a>
            </div>
          </div>
          <p class="text-warning d-flex align-items-center mb-2">
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
          </p>
          <p class="mb-0">
            <strong>
              <a href="#" class="text-secondary">Product Title</a>
            </strong>
          </p>
          <p class="mb-1">
            <small>
              <a href="#" class="text-secondary">Brands</a>
            </small>
          </p>
          <div class="d-flex mb-3 justify-content-between">
            <div>
              <p class="mb-0 small"><b>PART#: </b> 2121</p>
              <p class="mb-0 small"><b>MPN#: </b> mpn22651</p>
            </div>
            <div class="text-right">
              <p class="mb-0 small"><b>MSRP: </b> $119.99</p>
              <p class="mb-0 small"><b>REG: </b> $19.99</p>
            </div>
          </div>
          <div class="d-flex justify-content-between mt-auto">
            <div class="col px-0">
              <button class="btn btn-outline-primary btn-block">
                Add To Cart 
                <i class="fa fa-shopping-basket" aria-hidden="true"></i>
              </button>
            </div>
            <div class="ml-2">
              <a href="#" class="btn btn-outline-success" data-toggle="tooltip" data-placement="left" title="Add to Wishlist">
                <i class="fa fa-heart" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-4 mb-3">
      <div class="card h-100">
        <div class="labels d-flex justify-content-between position-absolute w-100">
          <div class="label-new">
            <span class="text-white bg-success small d-flex align-items-center px-2 py-1">
              <i class="fa fa-star" aria-hidden="true"></i>
              <span class="ml-1">New</span>
            </span>
          </div>
          <div class="label-sale">
            <span class="text-white bg-primary small d-flex align-items-center px-2 py-1">
              <i class="fa fa-tag" aria-hidden="true"></i>
              <span class="ml-1">Sale</span>
            </span>
          </div>
        </div>
        <a href="#">
          <img src="https://picsum.photos/700/550" class="card-img-top" alt="Product">
        </a>
        <div class="card-body px-2 pb-2 pt-1">
          <div class="d-flex justify-content-between">
            <div>
              <p class="h4 text-primary">$150,20</p>
            </div>
            <div>
              <a href="#" class="text-secondary lead" data-toggle="tooltip" data-placement="left" title="Compare">
                <i class="fa fa-line-chart" aria-hidden="true"></i>
              </a>
            </div>
          </div>
          <p class="text-warning d-flex align-items-center mb-2">
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
          </p>
          <p class="mb-0">
            <strong>
              <a href="#" class="text-secondary">Product Title</a>
            </strong>
          </p>
          <p class="mb-1">
            <small>
              <a href="#" class="text-secondary">Brands</a>
            </small>
          </p>
          <div class="d-flex mb-3 justify-content-between">
            <div>
              <p class="mb-0 small"><b>UPC: </b> 2310010</p>
              <p class="mb-0 small"><b>PART#: </b> 2121</p>
              <p class="mb-0 small"><b>MPN#: </b> mpn22651</p>
            </div>
            <div class="text-right">
              <p class="mb-0 small"><b>Free Shipping</b></p>
              <p class="mb-0 small"><b>MSRP: </b> $119.99</p>
              <p class="mb-0 small"><b>REG: </b> $19.99</p>
              <p class="mb-0 small text-primary">
                <span class="font-weight-bold">Save</span> $20.00 (16%)
              </p>
            </div>
          </div>
          <div class="d-flex justify-content-between">
            <div class="col px-0">
              <button class="btn btn-outline-primary btn-block">
                Add To Cart 
                <i class="fa fa-shopping-basket" aria-hidden="true"></i>
              </button>
            </div>
            <div class="ml-2">
              <a href="#" class="btn btn-outline-success" data-toggle="tooltip" data-placement="left" title="Add to Wishlist">
                <i class="fa fa-heart" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>


<div class="container">
  <hr />
</div>

</body>
</html>