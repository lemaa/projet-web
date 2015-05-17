<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
  <meta charset="utf-8">

  <title>iShop | Virtual solution for all people</title>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- http://www.456bereastreet.com/archive/201209/tell_css_that_javascript_is_available_asap/ -->
  <script>
    document.documentElement.className = document.documentElement.className.replace(/(\s|^)no-js(\s|$)/, '$1js$2');
  </script>
  
  <!-- CSS Files -->
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="style.css">
  <link rel="shortcut icon" href="favicon.ico"> 
  <!--[if IE 7]>
    <link rel="stylesheet" href="css/font-awesome-ie7.min.css">
    <![endif]-->

  <!--[if lt IE 9]>
    <script src="js/html5shiv.min.js"></script>
    <![endif]-->
    <script src="js/modernizr.custom.js"></script>

  </head>
  <body id="layout">
    <div id="wrapper">

     <?php include("include/textwidget.php"); ?> <!-- Slideout of Text Widget  --> 
     
     <?php include("include/header.php"); ?> <!-- Commun Header of pages   --> 


     <div class="container">
      <section id="blogwrap">
        <div class="row-fluid">
          <div class="span8">
            <div class="blog-second-item single">
              <h3 class="post-title">Checkout</h3>

              <div class="accordion" id="checkout">
                <div class="accordion-group">
                  <div class="accordion-heading">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#checkout" href="#collapseOne">
                      Step 1: Login or Register Informations
                    </a>
                  </div>
                  <div id="collapseOne" class="accordion-body collapse in">
                    <div class="accordion-inner">
                     <p></p>
                     <div class="row-fluid">
                      <div class="span5">
                       <h5>Login your account</h5>
                       <form class="signin-form">
                        <input class="input-block-level" type="text" placeholder="Enter your email address" id="inputEmail" />
                        <input class="input-block-level" placeholder="Enter your password" type="password" id="inputPassword" />
                        <button class="btn btn-medium btn-general input-block-level" type="submit">Sign in your account</button>
                      </form>
                    </div>
                    <div class="span7">
                     <h5>New Customer?</h5>
                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p> 
                     <a class="btn btn-general" data-toggle="collapse" data-parent="#checkout" href="#collapseTwo">Register an account from Step 2</a>
                     <p></p>
                   </div>
                 </div>
               </div>
             </div>
           </div>
           <div class="accordion-group">
            <div class="accordion-heading">
              <a class="accordion-toggle" data-toggle="collapse" data-parent="#checkout" href="#collapseTwo">
                Step 2: Account & Billing Informations
              </a>
            </div>
            <div id="collapseTwo" class="accordion-body collapse">
              <div class="accordion-inner">
                <form class="register-form">
                  <label for="inputEmail"><span class="required">*</span> Your Personal Details</label>
                  <input class="input-block-level" type="text" placeholder="* Enter your first name" id="inputname" />
                  <input class="input-block-level" placeholder="* Enter your last name" type="text" id="inputlastname" />
                  <input class="input-block-level" placeholder="* Enter your email address" type="text" id="inputemail" />
                  <input class="input-block-level" placeholder="Enter your phone number" type="text" id="inputphone" />
                  <label for="inputEmail"><span class="required">*</span> Choose Password</label>
                  <input class="input-block-level" placeholder="* Enter your password" type="text" id="inputpassword" />
                  <input class="input-block-level" placeholder="* Enter your password again" type="text" id="inputrepassword" />
                  <button class="btn btn-medium btn-general input-block-level" data-toggle="collapse" type="submit">Register and go to Step 3!</button>
                  <label class="checkbox inline">
                    <input type="checkbox" id="inlineCheckbox4" value="option4"> <a href="#">I read and agree Privacy Policy</a>
                  </label>
                </form>
              </div>
            </div>
          </div>
          <div class="accordion-group">
            <div class="accordion-heading">
              <a class="accordion-toggle" data-toggle="collapse" data-parent="#checkout" href="#collapseThree">
                Step 3: Shipping Informations
              </a>
            </div>
            <div id="collapseThree" class="accordion-body collapse">
              <div class="accordion-inner">
                <form class="register-form">
                  <label for="inputEmail"><span class="required">*</span> Shipping Address Details</label>
                  <input class="input-block-level" type="text" placeholder="* Enter your address #1" id="inputaddress" />
                  <input class="input-block-level" placeholder="Enter your address #2" type="text" id="inputaddress1" />
                  <input class="input-block-level" placeholder="* Enter your city" type="text" id="inputcity" />
                  <input class="input-block-level" placeholder="* Enter your post code" type="text" id="inputcode" />
                  <label for="inputEmail"><span class="required">*</span> Country / Region / State</label>
                  <select class="span5">
                    <option>--- Select Country ---</option>
                    <option>Country #1</option>
                    <option>Country #2</option>
                    <option>Country #3</option>
                    <option>Country #4</option>
                    <option>Country #5</option>
                    <option>Country #6</option>
                    <option>Country #7</option>
                    <option>Country #8</option>
                    <option>Country #9</option>
                    <option>Country #10</option>
                  </select>
                  
                  <select class="span5">
                    <option>--- Select Region ---</option>
                    <option>Region #1</option>
                    <option>Region #2</option>
                    <option>Region #3</option>
                    <option>Region #4</option>
                    <option>Region #5</option>
                    <option>Region #6</option>
                    <option>Region #7</option>
                    <option>Region #8</option>
                    <option>Region #9</option>
                    <option>Region #10</option>
                  </select>
                </form>
              </div>
            </div>
          </div>
          <div class="accordion-group">
            <div class="accordion-heading">
              <a class="accordion-toggle" data-toggle="collapse" data-parent="#checkout" href="#collapseFour">
                Step 4: Payment Methods
              </a>
            </div>
            <div id="collapseFour" class="accordion-body collapse">
              <div class="accordion-inner">
                <p>Please select the preferred payment method to use on this order.</p>
                <label class="checkbox payment-method inline">
                  <input type="checkbox" id="inlineCheckbox1" value="option1"> PayPal
                </label>
                <label class="checkbox payment-method inline">
                  <input type="checkbox" id="inlineCheckbox2" value="option2"> Credit Card
                </label>
                <label class="checkbox payment-method inline">
                  <input type="checkbox" id="inlineCheckbox3" value="option3"> Google Checkout
                </label>
                
                <form class="form-inline">
                  <input class="input-block span4" placeholder="Enter your coupon code here" type="text" id="couponcode" />
                  <button type="submit" class="btn btn-general">APPLY COUPON</button>
                </form>
                <p></p>
              </div>
            </div>
          </div>
          <div class="accordion-group">
            <div class="accordion-heading">
              <a class="accordion-toggle" data-toggle="collapse" data-parent="#checkout" href="#collapseFive">
                Step 4: Confirm Your Orders
              </a>
            </div>
            <div id="collapseFive" class="accordion-body collapse">
              <div class="accordion-inner">
                <table class="table wishlist table-hover table-bordered">
                  <thead>
                   <tr>
                    <th class="span2">Image</th>
                    <th class="span3">Product Name</th>
                    <th class="span1">Quantity</th>
                    <th class="span3">Price</th>
                    <th class="span2">Total</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="image"><a href="product.html"><img title="product" alt="product" src="demos/01_store.jpg" width="100"></a></td>
                    <td class="product"><a href="product.html" title="Example Product">Lorem Ipsum Dolar sit amet</a> </td>
                    <td class="stock">1</td>
                    <td class="price"><s>£51.12</s> <b>£28.22</b></td>
                    <td class="price"><b>£28.22</b></td>
                  </tr>
                  
                  <tr>
                    <td class="image"><a href="product.html"><img title="product" alt="product" src="demos/03_store.jpg" width="100"></a></td>
                    <td class="product"><a href="product.html" title="Example Product">Lorem Ipsum Dolar sit amet</a> </td>
                    <td class="stock">2</td>
                    <td class="price"><s>£44.50</s> <b>£21.78</b></td>
                    <td class="price"><b>£21.78</b></td>
                  </tr>
                </tbody>
                <tfoot>
                  <tr>
                    <td class="price" colspan="4"><b>Sub-Total:</b></td>
                    <td class="total">£21.13</td>
                  </tr>
                  <tr>
                    <td class="price" colspan="4"><b>Coupon Discount:</b></td>
                    <td class="total">- £4.11</td>
                  </tr>
                  <tr>
                    <td class="price" colspan="4"><b>Shipping Rate:</b></td>
                    <td class="total">£12.29</td>
                  </tr>
                  <tr>
                    <td class="price" colspan="4"><b>Total:</b></td>
                    <td class="total">£77.21</td>
                  </tr>
                </tfoot>
              </table>
              <div class="right">
                <a href="cart.html" class="btn btn-primary btn-general">Confirm Order</a> <a href="shop.html" class="btn btn-primary btn-general">Continue Shopping</a>
              </div>
              <p></p>
            </div>
          </div>
        </div>
      </div>
      
      
    </div><!-- /blog-second-item -->
  </div><!-- end span8 -->
  
  <div id="sidebar" class="span4">
    
    <div class="widget">
      <div id="white">
        <form method="get" action="http://designingmedia.com/search" id="search">
          <input name="q" type="text" size="40" placeholder="Search..." />
        </form>
      </div>
    </div>  
  </div><!-- /span4 sidebar -->
  
</div><!-- /row-fluid -->
</section><!-- /container -->
</div><!-- /box -->


<?php include("include/nfooter.php"); ?> <!-- Commun Footer of pages   --> 


<div class="dmtop">Scroll to Top</div>
</div><!-- /wrapper -->

<!-- ALL PLUGINS -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.prettyPhoto.js"></script>
<script src="js/grid.js"></script>
<script src="js/pulloutpanel.min.js"></script>
<script src="js/superfish.js"></script>
<script src="js/jquery.fs.naver.min.js"></script>
<script src="js/jquery.flexslider.min.js"></script>
<script src="js/jquery.inview.js"></script>
<script src="js/jquery.isotope.min.js"></script>
<script src="js/custom.js"></script>

</body>

<!-- RabinsXP.com HTML5 Templates -->
</html>