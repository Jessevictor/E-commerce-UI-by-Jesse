
<style>
    /* Clear floats after the columns */
    .row:after {
      content: "";
      display: table;
      clear: both;
    }

  /* On screens that are 992px wide or less, go from four columns to two columns */
@media screen and (max-width: 700px) {
  .column {
    flex: 50%;
  }
}

/* On screens that are 600px wide or less, make the columns stack on top of each other instead of next to each other */
@media screen and (max-width: 200px) {
  .row {
    flex-direction: column;
  }
}
    </style>
{{-- Third lane --}}
<div class="row mb-1">
    <div class="col-md-12">
        <div class="card-1">
            <div class="card-header" style="background-color: orange; width:100%;">
                <div class="row mb-0">
                    <div class="col-md-11" style="font-family: 'Merienda One', sans-serif;">
                        <h5>Best<b>Products</b> </h5>
                    </div>
                <div class="float-right" style="font-family: 'Merienda One', sans-serif;">
                  <a href="{{route('all')}}"><h6>See More ></h6></a>
                </div>
            </div>
            </div>
                <div class="row">
                   @foreach ($sales as $item)
                   <div class="column">
                    <div class="card">
                        <a href="{{route('product.show',$item->id)}}"><img class="card-img-top" src="/images/{{$item->image_path}}" alt="" />
                        </a>
                        <p class="h6"><small class="text-muted"><b  style="color: black; Font-size:0.8vw">Butterflies Hand composite</b></small></p>
                        <p class="h5 m-1">Ksh782.00</p>
                        <p class="h5 " style="font-size: 0.6vw; color:grey;"><s>Ksh782.00</s></p>
                    </div>
                </div>
                   @endforeach
                </div>
        </div>
    </div>
</div>
