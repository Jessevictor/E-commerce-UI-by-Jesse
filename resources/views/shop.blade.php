<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" media="screen and (min-width: 300px)" href="widescreen.css">
     <link rel="stylesheet" media="screen and (max-width: 600px)" href="smallscreen.css">
    <title>Document</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> --}}
  </head>
    <link rel="stylesheet" href="your-stylesheet.css"/>
    <script type="text/javascript" src="jquery.min.js"></script>
    <script type="text/javascript" src="restive.min.js"></script>
</head>
<style>
</style>
<body>

<div class="row mb-4">
    <div class="col-md-8">
        <a href='https://pngtree.com/so/ramadan-kareem'></a>
    </div>
    <div class="col-md-1">
    </div>
    <div class="col-md-1">
    </div>
    <div class="col-md-2">
    </div>
</div>
<br>
@include('layouts.app')
<!--Section: Block Content-->
<section>
    <!--Carousel Wrapper-->
    <div class="container-fluid">
                <div class="row mb-5">
                    @include('mengamenu')
                    <div class="col-md-8 example">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="https://ke.jumia.is/cms/2021/W16/KE_JAS_RB_S.jpg" class="d-block w-100" height="350px" alt="" />
                                    <div class="carousel-caption d-none d-md-block">
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="https://ke.jumia.is/cms/2021/W16/CP/KE_Cross_BrandsWk_Generic_0421_S.jpg" class="d-block w-100" height="350px"  alt="" />
                                    <div class="carousel-caption d-none d-md-block">
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="https://ke.jumia.is/cms/2021/SubCampaigns/W16/Fashion/KE_Phones_BrandWk_Nokia_0421_S.jpg" class="d-block w-100" height="350px"  alt="" />
                                    <div class="carousel-caption d-none d-md-block">

                                    </div>
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                    </div>


                <!--/Carousel Wrapper-->

            <!--Section: Block Content-->

                </div>
                @include('product.product_view')

                @include('product.product_category')

                @include('product.Best_products')
                <br>
                <br>
                @include('product.Product_layout1')
                @include('product.Product_layout2')

                {{-- @include('product.Details_view') --}}
                <br>
            </div>
    @include('body.footer')

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

</section>
  </body>
</html>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type="text/javascript">
        $(document).ready(function () {
              $('body').restive(options);
        });
  </script>
