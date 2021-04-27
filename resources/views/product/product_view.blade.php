
<script>
    $('#carouselExample').on('slide.bs.carousel', function (e) {

var $e = $(e.relatedTarget);
var idx = $e.index();
var itemsPerSlide = 4;
var totalItems = $('.carousel-item').length;

if (idx >= totalItems-(itemsPerSlide-1)) {
    var it = itemsPerSlide - (totalItems - idx);
    for (var i=0; i<it; i++) {
        // append slides to end
        if (e.direction=="left") {
            $('.carousel-item').eq(i).appendTo('.carousel-inner');
        }
        else {
            $('.carousel-item').eq(0).appendTo('.carousel-inner');
        }
    }
}
});

</script>
<div class="row mb-5">
    <div class="col-md-12">
        <div class="card-1">
            <div class="card-header" style="background-color:rgb(225, 223, 223);">
                <div class="row mb-0">
                    <div class="col-md-10">
                        <h5>Snickers Monday</h5>
                    </div>
                <div class="float-right">
                    <h6>See More ></h6>
                </div>
            </div>
        </div>
<div class="card-body">
<div class="container-fluid">
    <div id="carouselExample" class="carousel slide" data-ride="carousel" data-interval="9000">
        <div class="carousel-inner row w-75 mx-auto" role="listbox">
            <div class="carousel-item col-md-3 active">
                <div class="card">
                    <img class="card-img-top" src="https://ke.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/68/971813/1.jpg?6713" alt="" />
                    <p class="h6"><small class="text-muted"><b>Lorem, ipsum dolor</b></small></p>
                    <p class="h5 m-1">Ksh 782.00</p>
                </div>
             </div>
            <div class="carousel-item col-md-3">
                <div class="card">
                    <img class="card-img-top" src="https://ke.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/68/971813/1.jpg?6713" alt="" />
                    <p class="h6"><small class="text-muted"><b>Lorem, ipsum dolor</b></small></p>
                    <p class="h5 m-1">Ksh 782.00</p>
                </div>            </div>
            <div class="carousel-item col-md-3">
                <div class="card">
                    <img class="card-img-top" src="https://ke.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/68/971813/1.jpg?6713" alt="" />
                    <p class="h6"><small class="text-muted"><b>Lorem, ipsum dolor</b></small></p>
                    <p class="h5 m-1">Ksh 782.00</p>
                </div>            </div>
            <div class="carousel-item col-md-3">
                <div class="card">
                    <img class="card-img-top" src="https://ke.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/68/971813/1.jpg?6713" alt="" />
                    <p class="h6"><small class="text-muted"><b>Lorem, ipsum dolor</b></small></p>
                    <p class="h5 m-1">Ksh 782.00</p>
                </div>            </div>
            <div class="carousel-item col-md-3">
                <div class="card">
                    <img class="card-img-top" src="https://ke.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/68/971813/1.jpg?6713" alt="" />
                    <p class="h6"><small class="text-muted"><b>Lorem, ipsum dolor</b></small></p>
                    <p class="h5 m-1">Ksh 782.00</p>
                </div>            </div>
            <div class="carousel-item col-md-3">
                <div class="card">
                    <img class="card-img-top" src="https://ke.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/68/971813/1.jpg?6713" alt="" />
                    <p class="h6"><small class="text-muted"><b>Lorem, ipsum dolor</b></small></p>
                    <p class="h5 m-1">Ksh 782.00</p>
                </div>            </div>
            <div class="carousel-item col-md-3">
                <div class="card">
                    <img class="card-img-top" src="https://ke.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/68/971813/1.jpg?6713" alt="" />
                    <p class="h6"><small class="text-muted"><b>Lorem, ipsum dolor</b></small></p>
                    <p class="h5 m-1">Ksh 782.00</p>
                </div>            </div>
            <div class="carousel-item col-md-3">
                <div class="card">
                    <img class="card-img-top" src="https://ke.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/68/971813/1.jpg?6713" alt="" />
                    <p class="h6"><small class="text-muted"><b>Lorem, ipsum dolor</b></small></p>
                    <p class="h5 m-1">Ksh 782.00</p>
                </div>            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
            <i class="fa fa-chevron-left fa-lg text-muted"></i>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next text-faded" href="#carouselExample" role="button" data-slide="next">
            <i class="fa fa-chevron-right fa-lg text-muted"></i>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
</div>
</div>
</div>
</div>
<style>
    @media (min-width: 768px) {

/* show 3 items */
.carousel-inner .active,
.carousel-inner .active + .carousel-item,
.carousel-inner .active + .carousel-item + .carousel-item,
.carousel-inner .active + .carousel-item + .carousel-item + .carousel-item  {
    display: block;
}

.carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left),
.carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left) + .carousel-item,
.carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left) + .carousel-item + .carousel-item,
.carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left) + .carousel-item + .carousel-item + .carousel-item {
    transition: none;
}

.carousel-inner .carousel-item-next,
.carousel-inner .carousel-item-prev {
  position: relative;
  transform: translate3d(0, 0, 0);
}

.carousel-inner .active.carousel-item + .carousel-item + .carousel-item + .carousel-item + .carousel-item {
    position: absolute;
    top: 0;
    right: -25%;
    z-index: -1;
    display: block;
    visibility: visible;
}

/* left or forward direction */
.active.carousel-item-left + .carousel-item-next.carousel-item-left,
.carousel-item-next.carousel-item-left + .carousel-item,
.carousel-item-next.carousel-item-left + .carousel-item + .carousel-item,
.carousel-item-next.carousel-item-left + .carousel-item + .carousel-item + .carousel-item,
.carousel-item-next.carousel-item-left + .carousel-item + .carousel-item + .carousel-item + .carousel-item {
    position: relative;
    transform: translate3d(-100%, 0, 0);
    visibility: visible;
}

/* farthest right hidden item must be abso position for animations */
.carousel-inner .carousel-item-prev.carousel-item-right {
    position: absolute;
    top: 0;
    left: 0;
    z-index: -1;
    display: block;
    visibility: visible;
}

/* right or prev direction */
.active.carousel-item-right + .carousel-item-prev.carousel-item-right,
.carousel-item-prev.carousel-item-right + .carousel-item,
.carousel-item-prev.carousel-item-right + .carousel-item + .carousel-item,
.carousel-item-prev.carousel-item-right + .carousel-item + .carousel-item + .carousel-item,
.carousel-item-prev.carousel-item-right + .carousel-item + .carousel-item + .carousel-item + .carousel-item {
    position: relative;
    transform: translate3d(100%, 0, 0);
    visibility: visible;
    display: block;
    visibility: visible;
}

}


</style>
