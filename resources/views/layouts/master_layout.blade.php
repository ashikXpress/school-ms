<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="description" content="Responsive Admin Template" />
    <meta name="author" content="SmartUniversity" />
    <title>Smart University | Bootstrap Responsive Admin Template</title>
    <!-- google font -->
   @include('layouts.assets._styles')
</head>
<!-- END HEAD -->

<body
    class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white white-sidebar-color logo-indigo">
<div class="page-wrapper">
    <!-- start header -->
    @include('layouts.assets._top_bar')
    <!-- end header -->
    <!-- start color quick setting -->
    <div class="quick-setting-main">
        <button class="control-sidebar-btn btn" data-toggle="control-sidebar"><i
                class="fa fa-cog fa-spin"></i></button>
        <div class="quick-setting display-none">
            <ul id="themecolors">
                <li>
                    <p class="selector-title">Main Layouts</p>
                </li>
                <li class="complete">
                    <div class="theme-color layout-theme">
                        <a href="#" data-theme="light"><span class="head"></span><span class="cont"></span></a>
                        <a href="http://radixtouch.in/templates/admin/smart/source/dark/index.html" data-theme="dark"><span class="head"></span><span
                                class="cont"></span></a>
                    </div>
                </li>
                <li>
                    <p class="selector-title">Sidebar Color</p>
                </li>
                <li class="complete">
                    <div class="theme-color sidebar-theme">
                        <a href="#" data-theme="white"><span class="head"></span><span class="cont"></span></a>
                        <a href="#" data-theme="dark"><span class="head"></span><span class="cont"></span></a>
                        <a href="#" data-theme="blue"><span class="head"></span><span class="cont"></span></a>
                        <a href="#" data-theme="indigo"><span class="head"></span><span class="cont"></span></a>
                        <a href="#" data-theme="cyan"><span class="head"></span><span class="cont"></span></a>
                        <a href="#" data-theme="green"><span class="head"></span><span class="cont"></span></a>
                        <a href="#" data-theme="red"><span class="head"></span><span class="cont"></span></a>
                    </div>
                </li>
                <li>
                    <p class="selector-title">Header Brand color</p>
                </li>
                <li class="theme-option">
                    <div class="theme-color logo-theme">
                        <a href="#" data-theme="logo-white"><span class="head"></span><span class="cont"></span></a>
                        <a href="#" data-theme="logo-dark"><span class="head"></span><span class="cont"></span></a>
                        <a href="#" data-theme="logo-blue"><span class="head"></span><span class="cont"></span></a>
                        <a href="#" data-theme="logo-indigo"><span class="head"></span><span
                                class="cont"></span></a>
                        <a href="#" data-theme="logo-cyan"><span class="head"></span><span class="cont"></span></a>
                        <a href="#" data-theme="logo-green"><span class="head"></span><span class="cont"></span></a>
                        <a href="#" data-theme="logo-red"><span class="head"></span><span class="cont"></span></a>
                    </div>
                </li>
                <li>
                    <p class="selector-title">Header color</p>
                </li>
                <li class="theme-option">
                    <div class="theme-color header-theme">
                        <a href="#" data-theme="header-white"><span class="head"></span><span
                                class="cont"></span></a>
                        <a href="#" data-theme="header-dark"><span class="head"></span><span
                                class="cont"></span></a>
                        <a href="#" data-theme="header-blue"><span class="head"></span><span
                                class="cont"></span></a>
                        <a href="#" data-theme="header-indigo"><span class="head"></span><span
                                class="cont"></span></a>
                        <a href="#" data-theme="header-cyan"><span class="head"></span><span
                                class="cont"></span></a>
                        <a href="#" data-theme="header-green"><span class="head"></span><span
                                class="cont"></span></a>
                        <a href="#" data-theme="header-red"><span class="head"></span><span class="cont"></span></a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <!-- end color quick setting -->
    <!-- start page container -->
    <div class="page-container">
        <!-- start sidebar menu -->
        @include('layouts.assets._side_bar')
        <!-- end sidebar menu -->
        <!-- start page content -->
        <div class="page-content-wrapper">
            <div class="page-content">
              @yield('content')
            </div>
        </div>
        <!-- end page content -->
        <!-- start chat sidebar -->
        <div class="chat-sidebar-container" data-close-on-body-click="false">
            <div class="chat-sidebar">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a href="#quick_sidebar_tab_1" class="nav-link active tab-icon" data-toggle="tab"> <i
                                class="material-icons">chat</i>Chat
                            <span class="badge badge-danger">4</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#quick_sidebar_tab_3" class="nav-link tab-icon" data-toggle="tab"> <i
                                class="material-icons">settings</i>
                            Settings
                        </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <!-- Start Doctor Chat -->
                    <div class="tab-pane active chat-sidebar-chat in active show" role="tabpanel"
                         id="quick_sidebar_tab_1">
                        <div class="chat-sidebar-list">
                            <div class="chat-sidebar-chat-users slimscroll-style" data-rail-color="#ddd"
                                 data-wrapper-class="chat-sidebar-list">
                                <div class="chat-header">
                                    <h5 class="list-heading">Online</h5>
                                </div>
                                <ul class="media-list list-items">
                                    <li class="media"><img class="media-object" src="{{asset('admin/assets/img/prof/prof3.jpg')}}"
                                                           width="35" height="35" alt="...">
                                        <i class="online dot"></i>
                                        <div class="media-body">
                                            <h5 class="media-heading">John Deo</h5>
                                            <div class="media-heading-sub">Spine Surgeon</div>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <div class="media-status">
                                            <span class="badge badge-success">5</span>
                                        </div> <img class="media-object" src="{{asset('admin/assets/img/prof/prof1.jpg')}}"
                                                    width="35" height="35" alt="...">
                                        <i class="busy dot"></i>
                                        <div class="media-body">
                                            <h5 class="media-heading">Rajesh</h5>
                                            <div class="media-heading-sub">Director</div>
                                        </div>
                                    </li>
                                    <li class="media"><img class="media-object" src="{{asset('admin/assets/img/prof/prof5.jpg')}}"
                                                           width="35" height="35" alt="...">
                                        <i class="away dot"></i>
                                        <div class="media-body">
                                            <h5 class="media-heading">Jacob Ryan</h5>
                                            <div class="media-heading-sub">Ortho Surgeon</div>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <div class="media-status">
                                            <span class="badge badge-danger">8</span>
                                        </div> <img class="media-object" src="{{asset('admin/assets/img/prof/prof4.jpg')}}"
                                                    width="35" height="35" alt="...">
                                        <i class="online dot"></i>
                                        <div class="media-body">
                                            <h5 class="media-heading">Kehn Anderson</h5>
                                            <div class="media-heading-sub">CEO</div>
                                        </div>
                                    </li>
                                    <li class="media"><img class="media-object" src="{{asset('admin/assets/img/prof/prof2.jpg')}}"
                                                           width="35" height="35" alt="...">
                                        <i class="busy dot"></i>
                                        <div class="media-body">
                                            <h5 class="media-heading">Sarah Smith</h5>
                                            <div class="media-heading-sub">Anaesthetics</div>
                                        </div>
                                    </li>
                                    <li class="media"><img class="media-object" src="{{asset('admin/assets/img/prof/prof7.jpg')}}"
                                                           width="35" height="35" alt="...">
                                        <i class="online dot"></i>
                                        <div class="media-body">
                                            <h5 class="media-heading">Vlad Cardella</h5>
                                            <div class="media-heading-sub">Cardiologist</div>
                                        </div>
                                    </li>
                                </ul>
                                <div class="chat-header">
                                    <h5 class="list-heading">Offline</h5>
                                </div>
                                <ul class="media-list list-items">
                                    <li class="media">
                                        <div class="media-status">
                                            <span class="badge badge-warning">4</span>
                                        </div> <img class="media-object" src="{{asset('admin/assets/img/prof/prof6.jpg')}}"
                                                    width="35" height="35" alt="...">
                                        <i class="offline dot"></i>
                                        <div class="media-body">
                                            <h5 class="media-heading">Jennifer Maklen</h5>
                                            <div class="media-heading-sub">Nurse</div>
                                            <div class="media-heading-small">Last seen 01:20 AM</div>
                                        </div>
                                    </li>
                                    <li class="media"><img class="media-object" src="{{asset('admin/assets/img/prof/prof8.jpg')}}"
                                                           width="35" height="35" alt="...">
                                        <i class="offline dot"></i>
                                        <div class="media-body">
                                            <h5 class="media-heading">Lina Smith</h5>
                                            <div class="media-heading-sub">Ortho Surgeon</div>
                                            <div class="media-heading-small">Last seen 11:14 PM</div>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <div class="media-status">
                                            <span class="badge badge-success">9</span>
                                        </div> <img class="media-object" src="{{asset('admin/assets/img/prof/prof9.jpg')}}"
                                                    width="35" height="35" alt="...">
                                        <i class="offline dot"></i>
                                        <div class="media-body">
                                            <h5 class="media-heading">Jeff Adam</h5>
                                            <div class="media-heading-sub">Compounder</div>
                                            <div class="media-heading-small">Last seen 3:31 PM</div>
                                        </div>
                                    </li>
                                    <li class="media"><img class="media-object" src="{{asset('admin/assets/img/prof/prof10.jpg')}}"
                                                           width="35" height="35" alt="...">
                                        <i class="offline dot"></i>
                                        <div class="media-body">
                                            <h5 class="media-heading">Anjelina Cardella</h5>
                                            <div class="media-heading-sub">Physiotherapist</div>
                                            <div class="media-heading-small">Last seen 7:45 PM</div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Doctor Chat -->
                    <!-- Start Setting Panel -->
                    <div class="tab-pane chat-sidebar-settings" role="tabpanel" id="quick_sidebar_tab_3">
                        <div class="chat-sidebar-settings-list slimscroll-style">
                            <div class="chat-header">
                                <h5 class="list-heading">Layout Settings</h5>
                            </div>
                            <div class="chatpane inner-content ">
                                <div class="settings-list">
                                    <div class="setting-item">
                                        <div class="setting-text">Sidebar Position</div>
                                        <div class="setting-set">
                                            <select
                                                class="sidebar-pos-option form-control input-inline input-sm input-small ">
                                                <option value="left" selected="selected">Left</option>
                                                <option value="right">Right</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="setting-item">
                                        <div class="setting-text">Header</div>
                                        <div class="setting-set">
                                            <select
                                                class="page-header-option form-control input-inline input-sm input-small ">
                                                <option value="fixed" selected="selected">Fixed</option>
                                                <option value="default">Default</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="setting-item">
                                        <div class="setting-text">Footer</div>
                                        <div class="setting-set">
                                            <select
                                                class="page-footer-option form-control input-inline input-sm input-small ">
                                                <option value="fixed">Fixed</option>
                                                <option value="default" selected="selected">Default</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="chat-header">
                                    <h5 class="list-heading">Account Settings</h5>
                                </div>
                                <div class="settings-list">
                                    <div class="setting-item">
                                        <div class="setting-text">Notifications</div>
                                        <div class="setting-set">
                                            <div class="switch">
                                                <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
                                                       for="switch-1">
                                                    <input type="checkbox" id="switch-1" class="mdl-switch__input"
                                                           checked>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="setting-item">
                                        <div class="setting-text">Show Online</div>
                                        <div class="setting-set">
                                            <div class="switch">
                                                <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
                                                       for="switch-7">
                                                    <input type="checkbox" id="switch-7" class="mdl-switch__input"
                                                           checked>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="setting-item">
                                        <div class="setting-text">Status</div>
                                        <div class="setting-set">
                                            <div class="switch">
                                                <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
                                                       for="switch-2">
                                                    <input type="checkbox" id="switch-2" class="mdl-switch__input"
                                                           checked>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="setting-item">
                                        <div class="setting-text">2 Steps Verification</div>
                                        <div class="setting-set">
                                            <div class="switch">
                                                <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
                                                       for="switch-3">
                                                    <input type="checkbox" id="switch-3" class="mdl-switch__input"
                                                           checked>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="chat-header">
                                    <h5 class="list-heading">General Settings</h5>
                                </div>
                                <div class="settings-list">
                                    <div class="setting-item">
                                        <div class="setting-text">Location</div>
                                        <div class="setting-set">
                                            <div class="switch">
                                                <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
                                                       for="switch-4">
                                                    <input type="checkbox" id="switch-4" class="mdl-switch__input"
                                                           checked>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="setting-item">
                                        <div class="setting-text">Save Histry</div>
                                        <div class="setting-set">
                                            <div class="switch">
                                                <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
                                                       for="switch-5">
                                                    <input type="checkbox" id="switch-5" class="mdl-switch__input"
                                                           checked>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="setting-item">
                                        <div class="setting-text">Auto Updates</div>
                                        <div class="setting-set">
                                            <div class="switch">
                                                <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
                                                       for="switch-6">
                                                    <input type="checkbox" id="switch-6" class="mdl-switch__input"
                                                           checked>
                                                </label>
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
        <!-- end chat sidebar -->
    </div>
    <!-- end page container -->
    <!-- start footer -->
    @include('layouts.assets._footer')
    <!-- end footer -->
</div>
<!-- start js include path -->
@include('layouts.assets._scripts')
<!-- end js include path -->
</body>
</html>
