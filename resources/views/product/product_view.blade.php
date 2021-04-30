<style>
    /* Create four equal columns that floats next to each other */
    .column {
      float: left;
      width: 23%;
      padding: 20px;
    }

    /* Clear floats after the columns */
    .row:after {
      content: "";
      display: table;
      clear: both;
    }
        /* On screens that are 992px wide or less, go from four columns to two columns */
        @media screen and (max-width: 8599px) {
      .column {
        width: 16.5%;
      }
    }

    /* On screens that are 600px wide or less, make the columns stack on top of each other instead of next to each other */
    @media screen and (max-width: 700px) {
      .column {
        width: 100%;
      }
    }

    </style>
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
<div class="row mb-8">
    <div class="col-md-12">
        <div class="card-1 w-100">
            <div class="card-header" style="background-color:orange">
                <div class="row mb-0">
                    <div class="col-md-11" style="font-family: 'Merienda One', sans-serif;">
                        <h5>Products<b>Best</b></h5>
                    </div>
                <div class="float-right" style="font-family: 'Merienda One', sans-serif;">
                    <a href="{{route('all')}}"><h6>See More ></h6></a>
                </div>
            </div>
        </div>

            <div class="card-body">
                <div class="row">
                    @foreach ($subcategories->take(6) as $product)
                    <div class="Column">
                        <div class="card">
                            <a href="{{route('product.related',$product->slug)}}">
                                <img class="card-img-top" src="/images/{{$product->image_path}}" alt="" />
                            </a>
                            <br>
                            <p class="h6" style="text-align: center;"><small class="text-muted"  ><b>{{$product->subcat_name}}</b></small></p>
                            <p class="h5 m-1"> {{$product->price}}</p>
                             <form action="{{route('add.cart',$product->id)}}" method="GET">
                            {{ csrf_field() }}
                            <input type="hidden" value="{{ $product->id }}" id="id" name="id">
                            <input type="hidden" value="{{ $product->name }}" id="naame" name="naame">
                            <input type="hidden" value="{{ $product->price }}" id="price" name="price">
                            <input type="hidden" value="{{ $product->image_path }}" id="img" name="img">
                            <input type="hidden" value="{{ $product->slug }}" id="slug" name="slug">
                            <input type="hidden" value="1" id="quantity" name="quantity">
                            </form>
                        </div>
                    </div>
                    @endforeach
                </div>
             </div>
