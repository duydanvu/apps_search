@extends('index')

@section('content')
    <script>
        var myVar = setInterval(loadData, 180000);
        function productMinute()
        {
            var time = $('#load_time').val();

            if ( time == 5){
                clearInterval(myVar);
                myVar = setInterval(loadData, 300000);
            }else if(time == 0){
                clearInterval(myVar);
                myVar = setInterval(loadData, 30000);
            }
            else if(time == 3){
                clearInterval(myVar);
                myVar = setInterval(loadData, 180000);
            }else{
                clearInterval(myVar);
                myVar = setInterval(loadData, 600000);
            }
        }

        function loadData() {
            var load = window.location.href="product/refresh";
        }
    </script>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-2">
                        <a class="btn btn-info btn-sm" href="product/refresh">
                            <i class="fax fa-refresh">
                            </i>
                            Refresh Data
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Product</li>
                        </ol>
                    </div>
                    <div class="col-sm-4">
                    </div>
                    <div class="col-sm-2">
                        Time load data
                        <select class="browser-default custom-select" name="load_time" id="load_time" onclick="productMinute()">
                            <option selected value="0">select time</option>
                            <option value="3">3 minute</option>
                            <option value="5">5 minute</option>
                            <option value="10">10 minute</option>
                        </select>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Product List</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                            <i class="fas fa-minus"></i></button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                            <i class="fas fa-times"></i></button>
                    </div>
                </div>
                <div class="card-body p-0">
                    <table class="table table-striped projects">
                        <thead>
                        <tr>
                            <th style="width: 1%">
                                Number
                            </th>
                            <th style="width: 20%">
                                Product ID
                            </th>
                            <th style="width: 30%">
                                Title
                            </th>
                            <th style="width: 30%">
                                Description
                            </th>
                            <th >
                                Image
                            </th>
                            <th >
                                Locales
                            </th>
                            <th style="width: 20%">
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $key = 1;
                        ?>
                        @foreach( $products ?? '' as  $ls)
                        <tr>
                            <td>
                                {{$key++}}
                            </td>
                            <td>
                                <a href="product/getdetail/{{$ls->product_id}}">{{$ls->product_id}}</a>
                            </td>
                            <td >
                                <p style="-webkit-line-clamp: 3;overflow : hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-box-orient: vertical">{{$ls->title}}</p>
                            </td>
                            <td style="-webkit-line-clamp: 3;overflow : hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-box-orient: vertical">
                                {{strip_tags($ls->description,'p') }}
                            </td>
                            <td >
                                <img style="height: 100px; width: 100px" src="{{$ls->image}}">
                            </td>
                            <td  >
                                {{$ls->locales}}
                            </td>
                            <td class="project-actions text-right">
                                <a class="btn btn-info btn-sm" href="product/getview/{{$ls->id}}">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                       View/Edit
                                </a>
                                <h2></h2>
                                <a class="btn btn-info btn-sm" href="product/getvariant/{{$ls->product_id}}">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    View Variant
                                </a>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection

