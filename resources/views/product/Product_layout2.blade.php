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
  div.column {
    width: 16.5%;
  }
}

/* On screens that are 600px wide or less, make the columns stack on top of each other instead of next to each other */
@media screen and (max-width: 700px) {
  div.column {
    width: 100%;
  }
}
</style>
{{-- Third lane --}}
<div class="row mb-9">
    <div class="col-md-12">
        <div class="card1">
            <div class="card-header" style="background-color:orange;">
                <div class="row mb-">
                    <div class="col-md-11" style="font-family: 'Merienda One', sans-serif;">
                        <h5>Best_<b>Dresses</b></h5>
                    </div>
                <div class="float-right" style="font-family: 'Merienda One', sans-serif;">
                    <h6>See More ></h6>
                </div>
            </div>
            </div>
            <div class="card-body">
                <div class="row">
                @foreach ($products->take(6) as $item)
                <div class="column">
                    <div class="card">
                        <a href="{{route('product.show',$item->id)}}"><img class="card-img-top" src="https://ke.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/73/532942/1.jpg?6958" alt="" />
                        </a>
                        <p class="h6"><small class="text-muted"><b style="color: black;">Butterflies Hand composite</b></small></p>
                        <p class="h5 m-1">Ksh782.00</p>
                        <p class="h5 m-1" style="font-size: 17px; color:grey;"><s>Ksh782.00</s></p>
                    </div>
                </div>
                @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
