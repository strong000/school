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
 <div class="single-pro-review-area mt-t-30 mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-payment-inner-st">
                            <ul id="myTabedu1" class="tab-review-design">
                                <li class="active"><a href="#description">Data Teacher</a></li>
                            </ul>
                            <div id="myTabContent" class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade active in" id="description">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div id="dropzone1" class="pro-ad">
                                                    <div class="data-table-area mg-b-15">
                                                        <div class="container-fluid">
                                                            <div class="row">
                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                    <div class="sparkline13-list">
                                                                        <div class="sparkline13-graph">
                                                                            <div class="datatable-dashv1-list custom-datatable-overright">
                                                                                <div id="toolbar">
                                                                                    <select class="form-control dt-tb">
                                                                                        <option value="">Export Basic</option>
                                                                                        <option value="all">Export All</option>
                                                                                        <option value="selected">Export Selected</option>
                                                                                    </select>
                                                                                    <br>
                                                                                    <a href="{{ route('teacher_create') }}" type="button" class="btn btn-custon-four btn-success"><i class="fa fa-check edu-checked-pro" aria-hidden="true"></i> Add Teacher </a>
                                                                                </div>
                                                                                <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                                                                    data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                                                                    <thead>
                                                                                        <tr>
                                                                                            <th data-field="state" data-checkbox="true"></th>
                                                                                            <th data-field="id">No</th>
                                                                                            <th data-field="name" data-editable="true">Name</th>
                                                                                            <th data-field="email" data-editable="true">Age</th>
                                                                                            <th data-field="phone" data-editable="true">Address</th>
                                                                                            <th data-field="task" data-editable="true">Born Date</th>
                                                                                            <th data-field="action">Action</th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                        @php($i = 1)
                                                                                        @foreach($teachers as $teacher)
                                                                                            <tr>
                                                                                                <td></td>
                                                                                                <td>{{ $i }}</td>
                                                                                                <td>{{ $teacher->name }}</td>
                                                                                                <td>{{ $teacher->age }}</td>
                                                                                                <td>{{ $teacher->address }}</td>
                                                                                                <td>{{ $teacher->date_born }}</td>
                                                                                                <td>
                                                                                                    <a class="btn btn-custon-rounded-four btn-warning" href="{{ route('teacher_edit', $teacher->id) }}"><i class="fa fa-exclamation-triangle edu-warning-danger" aria-hidden="true">Edit</i></a>
                                                                                                    <a class="btn btn-custon-rounded-four btn-danger" href="{{ route('teacher_delete', $teacher->id) }}"><i class="fa fa-times edu-danger-error" aria-hidden="true">Delete</i></a>
                                                                                                </td>
                                                                                            </tr>
                                                                                        @php($i++)
                                                                                        @endforeach
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Static Table End -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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