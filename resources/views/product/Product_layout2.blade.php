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
{{-- Third lane --}}
<div class="row mb-5">
    <div class="col-md-12">
        <div class="card1">
            <div class="card-header">
                <div class="row mb-0">
                    <div class="col-md-11">
                        <h5>Best_Dresses</h5>
                    </div>
                <div class="float-right">
                    <h6>See More ></h6>
                </div>
            </div>
            </div>
            <div class="card-body">
                <div class="row">
                @foreach ($products as $item)
                <div class="col-md-2">
                    <div class="card">
                        <a href="{{route('product.show',$item->id)}}"><img class="card-img-top" src="https://ke.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/73/532942/1.jpg?6958" alt="" />
                        </a>
                        <p class="h6"><small class="text-muted"> Butterflies Hand composite</small></p>
                        <p class="h5 m-1">$782.00</p>
                    </div>
                </div>
                @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
