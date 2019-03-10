@extends('layouts.master')

@section('title', 'Teacher')

@section('extra-css')
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
        ============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="/assets/css/font-awesome.min.css">
    <!-- owl.carousel CSS
        ============================================ -->
    <link rel="stylesheet" href="/assets/css/owl.carousel.css">
    <link rel="stylesheet" href="/assets/css/owl.theme.css">
    <link rel="stylesheet" href="/assets/css/owl.transitions.css">
    <!-- animate CSS
        ============================================ -->
    <link rel="stylesheet" href="/assets/css/animate.css">
    <!-- normalize CSS
        ============================================ -->
    <link rel="stylesheet" href="/assets/css/normalize.css">
    <!-- meanmenu icon CSS
        ============================================ -->
    <link rel="stylesheet" href="/assets/css/meanmenu.min.css">
    <!-- main CSS
        ============================================ -->
    <link rel="stylesheet" href="/assets/css/main.css">
    <!-- educate icon CSS
        ============================================ -->
    <link rel="stylesheet" href="/assets/css/educate-custon-icon.css">
    <!-- morrisjs CSS
        ============================================ -->
    <link rel="stylesheet" href="/assets/css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
        ============================================ -->
    <link rel="stylesheet" href="/assets/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
        ============================================ -->
    <link rel="stylesheet" href="/assets/css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="/assets/css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
        ============================================ -->
    <link rel="stylesheet" href="/assets/css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="/assets/css/calendar/fullcalendar.print.min.css">
    <!-- x-editor CSS
        ============================================ -->
    <link rel="stylesheet" href="/assets/css/editor/select2.css">
    <link rel="stylesheet" href="/assets/css/editor/datetimepicker.css">
    <link rel="stylesheet" href="/assets/css/editor/bootstrap-editable.css">
    <link rel="stylesheet" href="/assets/css/editor/x-editor-style.css">
    <!-- normalize CSS
        ============================================ -->
    <link rel="stylesheet" href="/assets/css/data-table/bootstrap-table.css">
    <link rel="stylesheet" href="/assets/css/data-table/bootstrap-editable.css">
    <!-- style CSS
        ============================================ -->
    <link rel="stylesheet" href="/assets/style.css">
    <!-- responsive CSS
        ============================================ -->
    <link rel="stylesheet" href="/assets/css/responsive.css">
    <!-- modernizr JS
        ============================================ -->
    <script src="/assets/js/vendor/modernizr-2.8.3.min.js"></script>
@endSection

@section('content')
            <br><br>
                <form role="form" method="POST" action="{{ route('teacher_save') }}">
                {!! csrf_field() !!}
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline12-list mt-b-30">
                            <div class="sparkline12-hd">
                                <div class="main-sparkline12-hd">
                                    <h1>Add New Teacher</h1>
                                </div>
                            </div>
                            <div class="sparkline12-graph">
                                <div class="input-knob-dial-wrap">
                                    <div class="row">
                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                            <div class="input-mask-title">
                                                <label>Name</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                            <div class="input-mark-inner mg-b-22">
                                                <input type="text" class="form-control" name="name" id="name">
                                                <span class="help-block">Teacher Name</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                            <div class="input-mask-title">
                                                <label>Age</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                            <div class="input-mark-inner mg-b-22">
                                                <input type="text" class="form-control" name="age" id="age">
                                                <span class="help-block">Teacher Age</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                            <div class="input-mask-title">
                                                <label>Address</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                            <div class="input-mark-inner mg-b-22">
                                                <input type="text" class="form-control" name="address" id="address">
                                                <span class="help-block">Teacher Address</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                            <div class="input-mask-title">
                                                <label>Born Date</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                            <div class="input-mark-inner mg-b-22">
                                                <input type="date" class="form-control" name="date_born" id="date_born">
                                                <span class="help-block">Teacher Born Date</span>
                                            </div>
                                        </div>
                                    <center>
                                        <button class="btn btn-primary mt-4 pr-4 pl-4" type="submit">Submit</button>
                                    </center>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            <br>
                    
@endsection

@section('extra-js')
     <!-- jquery
        ============================================ -->
    <script src="/assets/js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
        ============================================ -->
    <script src="/assets/js/bootstrap.min.js"></script>
    <!-- wow JS
        ============================================ -->
    <script src="/assets/js/wow.min.js"></script>
    <!-- price-slider JS
        ============================================ -->
    <script src="/assets/js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
        ============================================ -->
    <script src="/assets/js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
        ============================================ -->
    <script src="/assets/js/owl.carousel.min.js"></script>
    <!-- sticky JS
        ============================================ -->
    <script src="/assets/js/jquery.sticky.js"></script>
    <!-- scrollUp JS
        ============================================ -->
    <script src="/assets/js/jquery.scrollUp.min.js"></script>
    <!-- mCustomScrollbar JS
        ============================================ -->
    <script src="/assets/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="/assets/js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
        ============================================ -->
    <script src="/assets/js/metisMenu/metisMenu.min.js"></script>
    <script src="/assets/js/metisMenu/metisMenu-active.js"></script>
    <!-- data table JS
        ============================================ -->
    <script src="/assets/js/data-table/bootstrap-table.js"></script>
    <script src="/assets/js/data-table/tableExport.js"></script>
    <script src="/assets/js/data-table/data-table-active.js"></script>
    <script src="/assets/js/data-table/bootstrap-table-editable.js"></script>
    <script src="/assets/js/data-table/bootstrap-editable.js"></script>
    <script src="/assets/js/data-table/bootstrap-table-resizable.js"></script>
    <script src="/assets/js/data-table/colResizable-1.5.source.js"></script>
    <script src="/assets/js/data-table/bootstrap-table-export.js"></script>
    <!--  editable JS
        ============================================ -->
    <script src="/assets/js/editable/jquery.mockjax.js"></script>
    <script src="/assets/js/editable/mock-active.js"></script>
    <script src="/assets/js/editable/select2.js"></script>
    <script src="/assets/js/editable/moment.min.js"></script>
    <script src="/assets/js/editable/bootstrap-datetimepicker.js"></script>
    <script src="/assets/js/editable/bootstrap-editable.js"></script>
    <script src="/assets/js/editable/xediable-active.js"></script>
    <!-- Chart JS
        ============================================ -->
    <script src="/assets/js/chart/jquery.peity.min.js"></script>
    <script src="/assets/js/peity/peity-active.js"></script>
    <!-- tab JS
        ============================================ -->
    <script src="/assets/js/tab.js"></script>
    <!-- plugins JS
        ============================================ -->
    <script src="/assets/js/plugins.js"></script>
    <!-- main JS
        ============================================ -->
    <script src="/assets/js/main.js"></script>
    <!-- tawk chat JS
        ============================================ -->
    <script src="/assets/js/tawk-chat.js"></script>

@endsection