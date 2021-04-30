@include('Backend.Shops.navbar')
@include('Backend.Admin.datatables')
        <!-- Begin Page Content -->
        <div class="container-fluid px-lg-4">
        <div class="row">
          <div class="col-md-12 mt-lg-4 mt-4">
		</div>
                    <div class="col-md-12">
                        <div class="row">
									    <?php
                                        ?>
                                    <div class="col-sm-3">
										<div class="card" style="background-color: #e9383888; ">
											<div class="card-body">
												<h6 class="card-title mb-4"><i class="fa fa-cart-arrow-down fa-3x" aria-hidden="true"></i> <b>Orders</b> </h6>
												<h1 class="display-5 mt-1 mb-3">{{$order}}</h1>
												<div class="mb-1">
													<span class="text-success"> <i class="mdi mdi-arrow-bottom-right"></i> 6.65% </span>
													<span class="text-muted">Since last week</span>
												</div>
											</div>
										</div>
									</div>
								</div>
                            </div>
                    <!-- column -->
                    <div class="col-md-12 mt-4">
                        <div class="card">
                            <div class="card-body">
                                <!-- title -->
                                <div class="d-md-flex align-items-center">
                                    <div>
                                        <h4 class="card-title">My Store</h4>
                                        <h5 class="card-subtitle">ALL Orders</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table id="tables" class="table v-middle">
                                    <thead>
                                        <tr class="bg-light">
                                            <th class="border-top-0">Products</th>
                                            <th class="border-top-0">Image</th>
                                            <th class="border-top-0">Grant Total</th>
                                            <th class="border-top-0">Quantity</th>
                                            <th class="border-top-0">Order Date</th>
                                            <th class="border-top-0">Status</th>
                                            <th class="border-top-0">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($orders as $item)
                                        <tr>
                                            <input type="hidden" value="{{$item->id}}">
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="">
                                                        <h4 class="m-b-0 font-16">{{$item->id}}</h4>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><img src="/public/img/{{$item->image_path}}"width="30px" height="30px" alt=""></td>
                                            <td>{{$item->grant_total}}</td>
                                            <td>
                                                <label class="label label-danger">{{$item->item_count}}</label>
                                            </td>
                                            <td>{{$item->created_at}}</td>
                                            <td>
                                                <a href="#" class="btn btn-success btn-sm active" tabindex="-1" role="button" aria-disabled="true">{{$item->status}}</a>
                                            </td>
                                            <td>
                                            <a href=""></a>
                                            <form action="{{route('order.update',$item->id)}}" method="POST">
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-success btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Process order"><i class="fa fa-edit">Process order</i></button>
                                            </form>
                                                {{-- <button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button> --}}
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>`
        </div>
		</div>
        <!-- /#page-content-wrapper -->

    </div>
    <script>
        $(document).ready(function() {
        $('#tables').DataTable();
        } );
    </script>

    <!-- /#wrapper -->
