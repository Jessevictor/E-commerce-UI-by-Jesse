<style>
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
.card{
    box-shadow: 0 6px 10px rgba(0,0,0,.08), 0 0 6px rgba(0,0,0,.05);
    transition: .3s transform cubic-bezier(.155,1.105,.295,1.12),.3s box-shadow,.3s -webkit-transform cubic-bezier(.155,1.105,.295,1.12);
    cursor: pointer;
}

.card:hover{
     transform: scale(1.05);
     box-shadow: 0 10px 20px rgba(0,0,0,.12), 0 4px 8px rgba(0,0,0,.06);
}

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
</style>
{{-- Third lane --}}
<div class="row mb-5">
    <div class="col-md-12">
        <div class="card-1">
            <div class="card-header" style="background-color:rgb(225, 223, 223);">
                <div class="row mb-0">
                    <div class="col-md-11">
                        <h5>Snickers Monda</h5>
                    </div>
                <div class="float-right">
                    <a href="{{route('all')}}"><h6>See More ></h6></a>
                </div>
            </div>
        </div>

            <div class="card-body">
                <div class="row">
                    @foreach ($products->take(6) as $item)
                    <div class="col-md-2">
                        <div class="card">
                           <a href="{{route('product.show',$item->id)}}"><img class="card-img-top" src="https://ke.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/68/971813/1.jpg?6713" alt="" />
                            </a><p class="h6"><small class="text-muted"> Butterflies Hand composite</small></p>
                            <p class="h5 m-1"> $782.00</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
</div>
