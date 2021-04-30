<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3pro.css">
<style>
    .menu-container {
    width:200%;
    margin: 20 auto;
    padding: 10px ;
}
.menu {
    margin-top: 100px;
    width: 189px;
    font-weight: 300;
    font-size: 13px;
    line-height: 12px;
    position: relative;
    padding: 0 0 0 0px;
    margin: 0%;
    background-color: rgb(255, 254, 253);
    height: 350px;
}
.menu a, .menu a:link, .menu a:visited, .menu a:focus, span {
    color: Black;
    text-decoration: none;
}
.menu a:hover {
    color:transparent;
    text-decoration: none;
}
.menu > li {
    display: block;
    margin-left: -4px;
    border-left: 1px grey;
    box-shadow: -1px 0 0 rgba(0, 0, 0, 0.1);
}
.menu > li > a {
    padding:10px 8px;
    display: block;
}
.menu > li:hover > a {
    color: orange;
}
.menu > li:hover {
    background-color: transparent;
}
/* Megadrop width dropdown */
 .menu > li > .megadrop {
   background-color: #fff;
    visibility: hidden;
    position: absolute;
    list-style: none;
    top: 0px;
    left: 270px;
    width: 910px;
    min-height: 100%;
    text-align: left;
    margin-top:33px;
    padding: 0;
    z-index: 99;
    border-bottom-left-radius: 5px;
    border-bottom-right-radius: 5px;
    overflow: hidden;
    border-top: transparent;
    border-right: transparent;
    border-bottom:transparent;
}
.menu > li:hover .megadrop {
    opacity: 1;
    visibility: visible;
    margin-top: 0px;
}
.menu ul li:hover:after {
    color: #090d0e;
}
.menu .col {
    width: 25.1%;
    float: left;
    color:rgb(248, 242, 242);
    margin: 0 0 0 2.2%;
}
.menu .col ul {
    padding: 02;
    margin: 0;
}
.menu .col ul li {
    padding: 2;
    list-style: none;
    font-size: 11px;
}
.menu .col h2 {
    font-size: 12px;
    /* padding: 2px 0; */
    font-weight: bold;
    margin: 10px 0 10px 0;
    color: black;
    /* background: #eee; */
}
.menu .col ul li a {
    display: block;
    padding: 0 0 15px 0;
    color: black;
}
.menu .col ul li a:hover {
    color: orange;
    text-decoration: underline;
}
.menu > li > ul li ul, .menu li >ul li, .menu > li > .megadrop, .menu > li > ul, .menu > li {
    transition: all 0.2s ease-in-out;
    -moz-transition: all 0.2s ease-in-out;
    -webkit-transition: all 0.2s ease-in-out;
    -ms-transition: all 0.2s ease-in-out;
    -o-transition: all 0.2s ease-in-outs;
}
@media screen and (max-width: 1200px) {
  div.Size {
    display: none;
  }
}
</style>
<div class="Size">
<div class="col-sm-3">
    <div>
        <ul class="menu">
          <li><a href="#"><i class="fa fa-apple fa-lg"></i><b> Supermarket</b> </a>
            <div class="megadrop">

              <div class="col">
                <h2>FOOD CUPBOARD</h2>
                <hr>
                <ul>
                  <li><a href="#">Cooking Ingridients</a>
                  </li>
                  <li><a href="#">Snacks, Crisps & Nuts</a>
                  </li>
                  <li><a href="#">Grains & Rice</a>
                  </li>
                  <li><a href="#">Suger & Flour</a>
                  </li>
                  <li><a href="#">Breakfast Cerials</a>
                  </li>
                  <li><a href="#">Candy & Chocolate</a>
                  </li>
                  <li><a href="#">Margarine, Jams, Honey & Sreads</a>
                  </li>
                </ul>
              </div>
              <div class="col">
                <h2>DRINKS</h2>
                <hr>
                <ul>
                  <li><a href="#">Beer, Wine & Spirits</a>
                  </li>
                  <li><a href="#">Carbonated Drinks</a>
                  </li>
                  <li><a href="#">Dairy</a>
                  </li>
                  <li><a href="#">Juice & NonCarbonated Drinks</a>
                  </li>
                  <li><a href="#">Syrup & Cordials</a>
                  </li>
                  <li><a href="#">Water</a>
                  </li>
                </ul>
              </div>
              <div class="col">
                <h2>HOUSEHOLDS SUPPLIES</h2>
                <hr>
                <ul>
                  <li><a href="#">Air Freshner</a>
                  </li>
                  <li><a href="#">Bathroom Cleaners</a>
                  </li>
                  <li><a href="#">Bulb & Battries</a>
                  </li>
                  <li><a href="#">Floor Cleaner</a>
                  </li>
                  <li><a href="#">Kitchen Cleaner</a>
                  </li>
                  <li><a href="#">Laundry</a>
                  </li>
                  <li><a href="#">Papers & roles</a>
                  </li>
                </ul>
              </div>
            </div>
          </li>
          <li><a href="#"><i class="fa fa-android fa-lg"></i><b>    Phones & Tablets</b> </a>
            <div class="megadrop">
              <div class="col">
                <h2>MOBILE PHONES</h2>
                <hr>
                <ul>
                  <li><a href="#">Smartphones</a>
                  </li>
                </ul>
              </div>
              <div class="col">
                <h2>TABLETS</h2>
                <hr>
                <ul>
                  <li><a href="#">Ipad</a>
                  </li>
                </ul>
              </div>
            </div>
          </li>
          <li><a href="#"><i class="fa fa-eye fa-lg"></i><b> Fashion</b></a>

            <div class="megadrop">

              <div class="col">
                <h2>Wome`s Fashion</h2>
                <hr>
                <ul>
                  <li><a href="#">Sub-menu 1</a>
                  </li>
                  <li><a href="#">Sub-menu 2</a>
                  </li>
                  <li><a href="#">Sub-menu 3</a>
                  </li>
                </ul>
              </div>
              <div class="col">
                <h2>Men`s Fashion</h2>
                <hr>
                <ul>
                  <li><a href="#">Sub-menu 1</a>
                  </li>
                  <li><a href="#">Sub-menu 2</a>
                  </li>
                  <li><a href="#">Sub-menu 3</a>
                  </li>
                </ul>
              </div>
              <div class="col">
                <h2>Kid`s Fasion</h2>
                <hr>
                <ul>
                  <li><a href="#">Sub-menu 1</a>
                  </li>
                  <li><a href="#">Sub-menu 2</a>
                  </li>
                  <li><a href="#">Sub-menu 3</a>
                  </li>
                </ul>
              </div>

               <div class="col" style="float: right;">
                <h2>Baby</h2>
                <hr>
                <ul>
                  <li><a href="#">Sub-menu 1</a>
                  </li>
                  <li><a href="#">Sub-menu 2</a>
                  </li>
                  <li><a href="#">Sub-menu 3</a>
                  </li>
                </ul>
              </div>
            </div>
          </li>

          <li><a href="#"><i class="fa fa-plug fa-lg"></i><b> Electronics</b></a>

            <div class="megadrop">

              <div class="col">
                <h2>Wome`s Fashion</h2>
                <hr>
                <ul>
                  <li><a href="#">Sub-menu 1</a>
                  </li>
                  <li><a href="#">Sub-menu 2</a>
                  </li>
                  <li><a href="#">Sub-menu 3</a>
                  </li>
                </ul>
              </div>
              <div class="col">
                <h2>Men`s Fashion</h2>
                <hr>
                <ul>
                  <li><a href="#">Sub-menu 1</a>
                  </li>
                  <li><a href="#">Sub-menu 2</a>
                  </li>
                  <li><a href="#">Sub-menu 3</a>
                  </li>
                </ul>
              </div>
              <div class="col">
                <h2>Kid`s Fasion</h2>
                <hr>
                <ul>
                  <li><a href="#">Sub-menu 1</a>
                  </li>
                  <li><a href="#">Sub-menu 2</a>
                  </li>
                  <li><a href="#">Sub-menu 3</a>
                  </li>
                </ul>
              </div>

               <div class="col" style="float: right;">
                <h2>Baby</h2>
                <hr>
                <ul>
                  <li><a href="#">Sub-menu 1</a>
                  </li>
                  <li><a href="#">Sub-menu 2</a>
                  </li>
                  <li><a href="#">Sub-menu 3</a>
                  </li>
                </ul>
              </div>
            </div>
          </li>
          <li><a href="#"><i class="fa fa-home fa-lg"></i><b> Home & Office</b></a>

            <div class="megadrop">
              <div class="col">
                <h2>Wome`s Fashion</h2>
                <hr>
                <ul>
                  <li><a href="#">Sub-menu 1</a>
                  </li>
                  <li><a href="#">Sub-menu 2</a>
                  </li>
                  <li><a href="#">Sub-menu 3</a>
                  </li>
                </ul>
              </div>
              <div class="col">
                <h2>Men`s Fashion</h2>
                <hr>
                <ul>
                  <li><a href="#">Sub-menu 1</a>
                  </li>
                  <li><a href="#">Sub-menu 2</a>
                  </li>
                  <li><a href="#">Sub-menu 3</a>
                  </li>
                </ul>
              </div>
              <div class="col">
                <h2>Kid`s Fasion</h2>
                <hr>
                <ul>
                  <li><a href="#">Sub-menu 1</a>
                  </li>
                  <li><a href="#">Sub-menu 2</a>
                  </li>
                  <li><a href="#">Sub-menu 3</a>
                  </li>
                </ul>
              </div>

               <div class="col" style="float: right;">
                <h2>Baby</h2>
                <hr>
                <ul>
                  <li><a href="#">Sub-menu 1</a>
                  </li>
                  <li><a href="#">Sub-menu 2</a>
                  </li>
                  <li><a href="#">Sub-menu 3</a>
                  </li>
                </ul>
              </div>
            </div>
          </li>

          <li><a href="#"><i class="fa fa-gamepad fa-lg"></i><b> Gaming</b></a>

            <div class="megadrop">
              <div class="col">
                <h2>Wome`s Fashion</h2>
                <hr>
                <ul>
                  <li><a href="#">Sub-menu 1</a>
                  </li>
                  <li><a href="#">Sub-menu 2</a>
                  </li>
                  <li><a href="#">Sub-menu 3</a>
                  </li>
                </ul>
              </div>
              <div class="col">
                <h2>Men`s Fashion</h2>
                <hr>
                <ul>
                  <li><a href="#">Sub-menu 1</a>
                  </li>
                  <li><a href="#">Sub-menu 2</a>
                  </li>
                  <li><a href="#">Sub-menu 3</a>
                  </li>
                </ul>
              </div>
              <div class="col">
                <h2>Kid`s Fasion</h2>
                <hr>
                <ul>
                  <li><a href="#">Sub-menu 1</a>
                  </li>
                  <li><a href="#">Sub-menu 2</a>
                  </li>
                  <li><a href="#">Sub-menu 3</a>
                  </li>
                </ul>
              </div>

               <div class="col" style="float: right;">
                <h2>Baby</h2>
                <hr>
                <ul>
                  <li><a href="#">Sub-menu 1</a>
                  </li>
                  <li><a href="#">Sub-menu 2</a>
                  </li>
                  <li><a href="#">Sub-menu 3</a>
                  </li>
                </ul>
              </div>
            </div>
          </li>

          <li><a href="#"><i class="fa fa-child fa-lg"></i><b> Baby Products</b></a>

            <div class="megadrop">
              <div class="col">
                <h2>Wome`s Fashion</h2>
                <hr>
                <ul>
                  <li><a href="#">Sub-menu 1</a>
                  </li>
                  <li><a href="#">Sub-menu 2</a>
                  </li>
                  <li><a href="#">Sub-menu 3</a>
                  </li>
                </ul>
              </div>
              <div class="col">
                <h2>Men`s Fashion</h2>
                <hr>
                <ul>
                  <li><a href="#">Sub-menu 1</a>
                  </li>
                  <li><a href="#">Sub-menu 2</a>
                  </li>
                  <li><a href="#">Sub-menu 3</a>
                  </li>
                </ul>
              </div>
              <div class="col">
                <h2>Kid`s Fasion</h2>
                <hr>
                <ul>
                  <li><a href="#">Sub-menu 1</a>
                  </li>
                  <li><a href="#">Sub-menu 2</a>
                  </li>
                  <li><a href="#">Sub-menu 3</a>
                  </li>
                </ul>
              </div>

               <div class="col" style="float: right;">
                <h2>Baby</h2>
                <hr>
                <ul>
                  <li><a href="#">Sub-menu 1</a>
                  </li>
                  <li><a href="#">Sub-menu 2</a>
                  </li>
                  <li><a href="#">Sub-menu 3</a>
                  </li>
                </ul>
              </div>
            </div>
          </li>
          <li><a href="#"><i class="fa fa-desktop fa-lg"></i><b> Computing</b></a>

            <div class="megadrop">
              <div class="col">
                <h2>Wome`s Fashion</h2>
                <hr>
                <ul>
                  <li><a href="#">Sub-menu 1</a>
                  </li>
                  <li><a href="#">Sub-menu 2</a>
                  </li>
                  <li><a href="#">Sub-menu 3</a>
                  </li>
                </ul>
              </div>
              <div class="col">
                <h2>Men`s Fashion</h2>
                <hr>
                <ul>
                  <li><a href="#">Sub-menu 1</a>
                  </li>
                  <li><a href="#">Sub-menu 2</a>
                  </li>
                  <li><a href="#">Sub-menu 3</a>
                  </li>
                </ul>
              </div>
              <div class="col">
                <h2>Kid`s Fasion</h2>
                <hr>
                <ul>
                  <li><a href="#">Sub-menu 1</a>
                  </li>
                  <li><a href="#">Sub-menu 2</a>
                  </li>
                  <li><a href="#">Sub-menu 3</a>
                  </li>
                </ul>
              </div>

               <div class="col" style="float: right;">
                <h2>Baby</h2>
                <hr>
                <ul>
                  <li><a href="#">Sub-menu 1</a>
                  </li>
                  <li><a href="#">Sub-menu 2</a>
                  </li>
                  <li><a href="#">Sub-menu 3</a>
                  </li>
                </ul>
              </div>
            </div>
          </li>
          <li><a href="{{route('shops.login')}}"><i class="fa fa-money fa-lg"></i><b> Sell</b></a></li>
        </ul>
      </div>
</div>
</div>

