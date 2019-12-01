<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css" />
<!-- icons -->
<link href="{{asset('admin/assets/fonts/simple-line-icons/simple-line-icons.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('admin/assets/fonts/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('admin/assets/fonts/material-design-icons/material-icon.css')}}" rel="stylesheet" type="text/css" />
<!--bootstrap -->
<link href="{{asset('admin/assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('admin/assets/plugins/summernote/summernote.css')}}" rel="stylesheet">
<!-- Material Design Lite CSS -->
<link rel="stylesheet" href="{{asset('admin/assets/plugins/material/material.min.css')}}">
<link rel="stylesheet" href="{{asset('admin/assets/css/material_style.css')}}">
<!-- inbox style -->
<link href="{{asset('admin/assets/css/pages/inbox.min.css')}}" rel="stylesheet" type="text/css" />
<!-- Theme Styles -->
<link href="{{asset('admin/assets/css/theme/light/theme_style.css')}}" rel="stylesheet" id="rt_style_components" type="text/css" />
<link href="{{asset('admin/assets/css/plugins.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('admin/assets/css/theme/light/style.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('admin/assets/css/responsive.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('admin/assets/css/theme/light/theme-color.css')}}" rel="stylesheet" type="text/css" />
<!-- favicon -->
<link rel="shortcut icon" href="http://radixtouch.in/templates/admin/smart/source/assets/img/favicon.ico" />
<link href="{{asset('admin/assets/plugins/bootstrap-datepicker/datepicker.css')}}" rel="stylesheet">
<link href="{{asset('admin/assets/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css')}}" rel="stylesheet"
      media="screen">
<link href="{{asset('admin/assets/plugins/select2/css/select2.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('admin/assets/plugins/select2/css/select2-bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
<!-- dropzone -->
<link href="{{asset('admin/assets/plugins/dropzone/dropzone.css')}}" rel="stylesheet" media="screen">
<!--tagsinput-->
<link href="{{asset('admin/assets/plugins/jquery-tags-input/jquery-tags-input.css')}}" rel="stylesheet">
<link href="{{asset('admin/assets/sweet2/sweetalert2.css')}}" rel="stylesheet">
<link href="{{asset('admin/assets/css/yearpicker.css')}}" rel="stylesheet">
<link href="{{asset('admin/assets/css/timepicker.min.css')}}" rel="stylesheet">
<link href="{{asset('admin/assets/css/jquery-ui.css')}}" rel="stylesheet">
<link href="{{asset('admin/assets/custom_date/datepicker.min.css')}}" rel="stylesheet">
<style>
    .btn-group>a>i {
        color: #ffffff;
    }
    input.form-control.formDatePicker {
        padding-left: 26px;
    }
    span.add-on {
        position: absolute;
        top: 45px;
        left: 21px;
    }

    .col-md-2.padd-less {
        margin-top: 31px;
    }

    .top-padd-less {
        padding-top: 39px;
    }

    label.padd-less-right {
        padding-right: 27px;
    }
    button.btn.btn-lg.btn-info.present-btn {
        margin-bottom: 20px;
    }

.search-form-left-less {
        margin-left: 15px;
        margin-bottom: 20px;
    }
    .user-panel .image {
        width: 50px;
        height: 50px;
        object-fit: cover;

    }

    img.thumb-lg.custom-card {
        width: 75px;
        height: 75px;
        object-fit: cover;
    }



    .white-box.border-gray {
        background: #9675ce;
    }

    .user-bg .overlay-box {
        background: #9675ce;
        opacity: 1;

    }
    .user-bg {
        margin: 0px;
        overflow: hidden;
        position: relative;
    }

    .white-box {
       color:#fff;
        padding: 10px 8px;
        margin-top: 10px;
        margin-bottom: 15px;
        text-align: center;
    }

    .user-bg .overlay-box .user-content {
        padding: 0;
    }

    .user-btm-box {
        padding: 0;

    }



    .user-btm-box {
        text-align: left;
        padding: 0 0 0 14px;
    }

    .user-btm-box p span {
        padding: 0 0 0 8px;
        font-size: 11px;
    }
    h5.school-text {
        text-align: left;
        padding-left: 8px;
        font-size: 13px !important;
    }
    .user-btm-box p {
        margin: 0;
    }

    .user-btm-footer p {
        font-size: 10px;
        text-align: center;
        margin: 0;
        padding: 0;
        margin-left: -28px;
        color: #af1e1e;
    }

    .sign-head-master {
        font-size: 11px;
        position: relative;
    }

    .sign-head-master span {
        position: absolute;
        top: -3px;
        left: 50px;
        font-style: italic;
        color: #000;
    }

    .sign-head-master {
        font-size: 11px;
        position: relative;
        margin: 0 0 0 85px;
        padding: 10px 0 0 0;
    }
    .form-control:disabled, .form-control[readonly] {
        background-color: #ffffff;
        opacity: 1;
    }
    .select2-container--bootstrap .select2-results__option--highlighted[aria-selected] {
        background-color: #6673fc;
        color: #fff;
    }

    /*side bar css change*/

    .white-sidebar-color .sidemenu-container {
        background-color: #1a2226;
    }
    .white-sidebar-color .user-panel, .white-sidebar-color .txtOnline, .white-sidebar-color .sidemenu-container .sidemenu>li>a, .white-sidebar-color .sidemenu-closed.sidemenu-container-fixed .sidemenu-container:hover .sidemenu>li>a {
        color: #fff;
    }



    .white-sidebar-color .sidemenu-container .sidemenu>li.active.open>a, .white-sidebar-color .sidemenu-container .sidemenu>li.active>a, .white-sidebar-color .sidemenu-closed.sidemenu-container-fixed .sidemenu-container:hover .sidemenu>li.active.open>a, .white-sidebar-color .sidemenu-closed.sidemenu-container-fixed .sidemenu-container:hover .sidemenu>li.active>a {
        background-color: #1e282c;
        border-top-color: transparent;
        color: #4680ff;
    }
    .white-sidebar-color .sidemenu-container .sidemenu .sub-menu, .white-sidebar-color .sidemenu-closed.sidemenu-container-fixed .sidemenu-container:hover .sidemenu .sub-menu {
        background-color: #2c3b41;

    }

    .white-sidebar-color .sidemenu-container .sidemenu>li.open>a, .white-sidebar-color .sidemenu-container .sidemenu>li:hover>a, .white-sidebar-color .sidemenu-closed.sidemenu-container-fixed .sidemenu-container:hover .sidemenu>li.open>a, .white-sidebar-color .sidemenu-closed.sidemenu-container-fixed .sidemenu-container:hover .sidemenu>li:hover>a {
        background-color: #1e282c;
        border-top-color: transparent;
        color: #ffffff;
    }

    .white-sidebar-color .user-panel, .white-sidebar-color .txtOnline, .white-sidebar-color .sidemenu-container .sidemenu>li>a, .white-sidebar-color .sidemenu-closed.sidemenu-container-fixed .sidemenu-container:hover .sidemenu>li>a {
        color: #b8c7ce;
    }


    .white-sidebar-color .user-panel, .white-sidebar-color .txtOnline, .white-sidebar-color .sidemenu-container .sidemenu>li>a, .white-sidebar-color .sidemenu-closed.sidemenu-container-fixed .sidemenu-container:hover .sidemenu>li>a {
        color: #fff;
    }

    .white-sidebar-color .sidemenu-container .sidemenu>li.active.open>a, .white-sidebar-color .sidemenu-container .sidemenu>li.active>a, .white-sidebar-color .sidemenu-closed.sidemenu-container-fixed .sidemenu-container:hover .sidemenu>li.active.open>a, .white-sidebar-color .sidemenu-closed.sidemenu-container-fixed .sidemenu-container:hover .sidemenu>li.active>a {
        background-color: #1e282c;
        border-top-color: transparent;
        color: #ffffff;
    }
    .white-sidebar-color .user-panel, .white-sidebar-color .txtOnline, .white-sidebar-color .sidemenu-container .sidemenu>li>a, .white-sidebar-color .sidemenu-closed.sidemenu-container-fixed .sidemenu-container:hover .sidemenu>li>a {
        color: #8aa4af;
    }
    .white-sidebar-color .sidemenu-container .sidemenu .sub-menu>li>a, .white-sidebar-color .sidemenu-closed.sidemenu-container-fixed .sidemenu-container:hover .sidemenu .sub-menu>li>a {
        color: #8aa4af;
    }

    .user-panel .info p {
        margin: 5px 0;
        color: #fff;
        font-size: 13px;
    }

    span.txtOnline {
        color: #fff !important;
    }
    .btn-info {
        background-color: #6673fc !important;
        border: 1px solid #6673fc !important;
        color: #fff !important;
    }
    .btn-info:hover, .btn-info:focus, .btn-info:active, .btn-info.active, .btn-info.focus, .btn-info:active, .btn-info:focus, .btn-info:hover, .open > .dropdown-toggle.btn-info {
        background-color: #6673fc !important;
        border: 1px solid #6673fc !important;
        color: #fff !important;
    }
    .datepicker-panel>ul>li.picked, .datepicker-panel>ul>li.picked:hover {
        color: #fff;
    }


    .datepicker-panel>ul>li.highlighted {
        background-color: #6673fc;
        color: #fff;
    }
    .datepicker-panel>ul>li.highlighted:hover {
        background-color: #6673fc;
    }
    .datepicker-panel>ul>li:hover {
        background-color: #6673fc;
        color: #fff;
    }

    span.title {
        font-size: 13px;
    }
    button.btn.btn-info.btn-lg.m-r-20 {
        margin-left: -13px;
        padding: 12px 12px;
        font-size: 11px;
    }
    a.btn.btn-default.btn-lg {
        padding: 12px 12px;
        font-size: 11px;
    }
    @media print {
        .border-gray{
            background-color: #9675ce !important;
            -webkit-print-color-adjust: exact;
            color:white !important;
        }
        #idcard{
            position: absolute !important;
            left: 0 !important;
            top: 0 !important;
            width: auto;
            height: auto;
        }
        .school-text{
            -webkit-print-color-adjust: exact;
            color:white !important;
        }
        .user-btm-box p{
            -webkit-print-color-adjust: exact;
            color:white !important;
        }
        .user-btm-box p span{
            color:white !important;
        }
        .user-btm-footer p{
            color: #af1e1e !important;
        }

        .sign-head-master{
            color: #fff !important;
        }

        .white-box .border-gray{
            position: absolute !important;
            left: 0 !important;
            top: 0 !important;
            width: 420px !important;
            height: auto;
        }
    }

    @media print {
        .vendorListHeading th {
            color: white !important;
        }
    }
</style>
