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
                    <h6>See More ></h6>
                </div>
            </div>
        </div>

            <div class="card-body">
                <div class="row">
                    <div class="column">
                        <div class="card">
                            <img class="card-img-top" src="https://ke.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/68/971813/1.jpg?6713" alt="" />
                            <p class="h6"><small class="text-muted"><b>Lorem, ipsum dolor</b></small></p>
                            <p class="h5 m-1">Ksh782.00</p>
                        </div>
                    </div>
                    <div class="column">
                        <div class="card">
                            <img class="card-img-top" src="https://ke.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/09/391992/1.jpg?7676" alt="" />

                            <p class="h6"><small class="text-muted"><b>Lorem, ipsum dolor</b></small></p>
                            <p class="h5 m-1">Ksh 782.00</p>
                        </div>
                    </div>
                    <div class="column">
                        <div class="card">
                            <img class="card-img-top" src="https://ke.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/06/871813/1.jpg?6659" alt="" />
                            <p class="h6"><small class="text-muted"><b>Lorem, ipsum dolor</b></small></p>
                            <p class="h5 m-1">Ksh 782.00</p>
                        </div>
                    </div>
                    <div class="column">
                        <div class="card">
                            <img class="card-img-top" src="https://ke.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/27/713803/1.jpg?5248" alt="" />
                            <p class="h6"><small class="text-muted"><b>Lorem, ipsum dolor</b></small></p>
                            <p class="h5 m-1">Ksh 782.00</p>
                        </div>
                    </div>
                    <div class="column">
                        <div class="card">
                            <img class="card-img-top" src="https://ke.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/49/181813/1.jpg?6771" alt="" />

                            <p class="h6"><small class="text-muted"><b>Lorem, ipsum dolor</b></small></p>
                            <p class="h5 m-1">Ksh 782.00</p>
                        </div>
                    </div>
                    <div class="column">
                        <div class="card">
                            <img class="card-img-top" src="https://ke.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/79/717043/1.jpg?9598" alt="" />
                            <p class="h6"><small class="text-muted"><b>Lorem, ipsum dolor</b></small></p>
                            <p class="h5 m-1">Ksh 782.00</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
