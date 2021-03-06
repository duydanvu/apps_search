@extends ('index')
@section('content')
    <div class="content-wrapper">
        <section class="content content--main">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                    <button type="button" class="close" data-dismiss="alert">x</button>
                </div>
            @endif
            <div class="content-header ">
                <div class="row align-items-center">
                    <div class="col-md-7">
                        <H2> Search Setting</H2>
                    </div>
                    <div class="col-md-5 text-right">
                        <!--  <button class="btn btn-default" id="discard">Discard</button>-->
                        <button class="btn btn-primary" id="save">Save</button>
                    </div>
                </div>
            </div>

            <form action="/setting/save" method="post" id="config_form" class="form-horizontal">
                @csrf
                <div class="box box-list form-trigger-event" style="height: 650px">
                    <div class="box-body general-setting col-md-12">
                        <div class="row col-md-6" style="float: left" >
                            <div class="col-md-12" >
                                <div class="wrap-header2">
                                    <h3>Search Suggestion</h3>
                                </div>
                                <div class="form-group">
                                    {!! Form::label('showprice', 'Show Section  suggestions', ['class' => 'col-md-6 control-label'] )  !!}
                                    <div class="col-md-6">
                                        <div class="checkbox">
                                            <label>{!! Form::checkbox('general_suggestion_status','yes', $data['general_suggestion_status']) !!}</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    {!! Form::label('showprice', 'Show Section  Collections', ['class' => 'col-sm-6 control-label'] )  !!}
                                    <div class="col-sm-6">
                                        <div class="checkbox">
                                            <label>{!! Form::checkbox('general_categories_status','yes', $data['general_categories_status']) !!}</label>
                                        </div>
                                    </div>
                                </div>

{{--                                <div class="form-group">--}}
{{--                                    {!! Form::label('showprice', 'Show Section  Articles', ['class' => 'col-sm-6 control-label'] )  !!}--}}
{{--                                    <div class="col-sm-6">--}}
{{--                                        <div class="checkbox">--}}
{{--                                            <label>{!! Form::checkbox('general_articles_status','yes', $data['general_articles_status']) !!}</label>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                                <div class="form-group">--}}
{{--                                    {!! Form::label('showprice', 'Show price', ['class' => 'col-sm-6 control-label'] )  !!}--}}
{{--                                    <div class="col-sm-6">--}}
{{--                                        <div class="checkbox">--}}
{{--                                            <label>{!! Form::checkbox('general_suggestion_price','yes', $data['general_suggestion_price']) !!}</label>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

                                <div class="form-group">
                                    {!! Form::label('showdesc', 'Show Description', ['class' => 'col-sm-6 control-label'] )  !!}
                                    <div class="col-sm-6">
                                        <div class="checkbox">
                                            <label>{!! Form::checkbox('general_suggestion_derc','yes', $data['general_suggestion_derc']) !!}</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row col-md-6" style="float: left" >
                            <div class="col-md-12">
                                <div class="wrap-header2">
                                    <h3>Search Result</h3>
                                </div>
                                @php
                                    $perPage = ['1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5', '6' => '6', '7' => '7', '8' => '8', '9' => '9', '10' => '10'];
                                    $priceAction = ['show_zero_price' => 'Show zero price','hide_zero_price' => 'Hide zero price','show_custom_text' => 'Hide zero price, show text instead'];
                                    $sorting = ['title:asc' => 'Title: A-Z','title:desc' => 'Title: Z-A','created:desc' => 'Date: New to Old','created:asc' => 'Date: Old to New','sales_amount:desc' => 'Bestselling'];
                                @endphp

                                <div class="form-group">
                                    {!! Form::label('Maxtitle', 'Show Title', ['class' => 'col-sm-6 control-label'] )  !!}
                                    <div class="col-lg-6">
                                        <div class="checkbox">
                                            <label>{!! Form::checkbox('general_product_title','yes', $data['general_product_title']) !!}</label>
                                        </div>

                                    </div>
                                </div>

                                <div class="form-group">
                                    {!! Form::label('showsku', 'Show Description', ['class' => 'col-sm-6 control-label'] )  !!}
                                    <div class="col-sm-6">
                                        <div class="checkbox">
                                            <label>{!! Form::checkbox('general_product_derc','yes', $data['general_product_derc']) !!}</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    {!! Form::label('showprice', 'Show price', ['class' => 'col-sm-6 control-label'] )  !!}
                                    <div class="col-sm-6">
                                        <div class="checkbox">
                                            <label>{!! Form::checkbox('general_product_price','yes', $data['general_product_price']) !!}</label>
                                        </div>
                                    </div>
                                </div>
{{--                                <div class="form-group">--}}
{{--                                    {!! Form::label('showsku', 'Show reviews', ['class' => 'col-sm-6 control-label'] )  !!}--}}
{{--                                    <div class="col-sm-6">--}}
{{--                                        <div class="checkbox">--}}
{{--                                            <label>{!! Form::checkbox('general_product_reviews','yes', $data['general_product_reviews']) !!}</label>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}


                                <div class="form-group">
                                    {!! Form::label('forsample', 'Show vendor', ['class' => 'col-sm-6 control-label'] )  !!}
                                    <div class="col-lg-6">
                                        <div class="checkbox">
                                            <label>{!! Form::checkbox('general_product_vendor','yes', $data['general_product_vendor']) !!}</label>
                                        </div>

                                    </div>
                                </div>

                                <div class="form-group">
                                    {!! Form::label('forsample', 'Show button', ['class' => 'col-sm-4 control-label'] )  !!}
                                    <div class="col-lg-8">
                                        {!!  Form::select('general_product_button', ['none' => 'None', 'view_product' => 'View product','add_to_cart' => 'Add to cart'],  $data['general_product_button'], ['class' => 'form-control form-control-2x' ]) !!}
                                    </div>
                                </div>

{{--                                <div class="form-group">--}}
{{--                                    {!! Form::label('perpage', 'Products per row', ['class' => 'col-sm-4 control-label'] )  !!}--}}
{{--                                    <div class="col-lg-8">--}}
{{--                                        {!!  Form::select('general_product_per', ['2' => '2 ', '3' => '3 ','4' => '4 ','5' => '5 '],  $data['general_product_per'], ['class' => 'form-control form-control-2x' ]) !!}--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                            </div>
                        </div>
                    </div>
                </div>

            </form>

        </section>
    </div>
@endsection
@section('page-script')
    <script type="text/javascript">
        $('#save').click(function () {
            $('#config_form').submit();
        });
    </script>
@stop
