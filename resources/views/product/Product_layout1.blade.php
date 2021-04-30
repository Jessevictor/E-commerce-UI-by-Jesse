<style>
    /* On screens that are 992px wide or less, go from four columns to two columns */
@media screen and (max-width: 10000px) {
  div.column {
    width: 1.6%;
  }
}

/* On screens that are 600px wide or less, make the columns stack on top of each other instead of next to each other */
@media screen and (max-width: 700px) {
  div.column {
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

</style>
{{-- Third lane --}}
<div class="row mb-8">
    <div class="col-md-12">
        <div class="card-1 w-10">
            <div class="card-header" style="background-color:orange">
                <div class="row mb-0">
                    <div class="col-md-11" style="font-family: 'Merienda One', sans-serif;">
                        <h5>Snickers<b>Monday</b></h5>
                    </div>
                <div class="float-right" style="font-family: 'Merienda One', sans-serif;">
                    <a href=""><h6>See More ></h6></a>
                </div>
            </div>
        </div>

                <div class="row">
                    @foreach ($products->take(6) as $item)
                    <div class="column">
                        <div class="card">
                           <a href="{{route('product.show',$item->id)}}"><img class="card-img-top" src="https://ke.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/68/971813/1.jpg?6713" width="300px" alt="" />
                            </a><p class="h6"><small class="text-muted"><b  style="color: black;">Butterflies Hand composite</b> </small></p>
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
