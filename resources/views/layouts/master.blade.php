<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->
<head><base href="">
    <title>{{ $app_setting->website_title }}</title>
    <meta charset="utf-8" />
    <meta name="description" content="The most advanced Bootstrap Admin Theme on Themeforest trusted by 94,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue &amp; Laravel versions. Grab your copy now and get life-time updates for free." />
    <meta name="keywords" content="Metronic, bootstrap, bootstrap 5, Angular, VueJs, React, Laravel, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Metronic - Bootstrap 5 HTML, VueJS, React, Angular &amp; Laravel Admin Dashboard Theme" />
    <meta property="og:url" content="https://keenthemes.com/metronic" />
    <meta property="og:site_name" content="Keenthemes | Metronic" />
    <link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
    <link rel="shortcut icon" href="{{ asset('fastui/media/logos/favicon.ico')}}" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Page Vendor Stylesheets(used by this page)-->
    <link href="{{ asset('fastui/plugins/custom/fullcalendar/fullcalendar.bundle.css')}}" rel="stylesheet" type="text/css" />
    <!--end::Page Vendor Stylesheets-->
    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    <link href="{{ asset('fastui/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('fastui/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->
    @yield('custom-css')
</head>
<!--end::Head-->
<!--begin::Body-->
<body id="kt_body" style="background-image: url()" class="header-fixed header-tablet-and-mobile-fixed aside-fixed aside-secondary-enabled">
<!--begin::Main-->
<!--begin::Root-->
<div class="d-flex flex-column flex-root">
    <!--begin::Page-->
    <div class="page d-flex flex-row flex-column-fluid">
        <!--begin::Aside-->
        <div id="kt_aside" class="aside aside-extended" data-kt-drawer="true" data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="auto" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_toggle">
            <!--begin::Primary-->
            <div class="aside-primary d-flex flex-column align-items-lg-center flex-row-auto">
                <!--begin::Logo-->
                <div class="aside-logo d-none d-lg-flex flex-column align-items-center flex-column-auto py-10" id="kt_aside_logo">
                    <a href="{{ url('/') }}">
                        <img alt="Logo" src="{{ asset('fastui/media/logos/logo-demo7.svg')}}" class="h-35px" />
                    </a>
                </div>
                <!--end::Logo-->
                <!--begin::Nav-->
                <div class="aside-nav d-flex flex-column align-items-center flex-column-fluid w-100 pt-5 pt-lg-0" id="kt_aside_nav">
                    <!--begin::Wrapper-->
                    <div class="hover-scroll-y mb-10" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto" data-kt-scroll-wrappers="#kt_aside_nav" data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer" data-kt-scroll-offset="0px">
                        <!--begin::Nav-->
                        <ul class="nav flex-column">
                            <!--begin::Nav item-->
                            <li class="nav-item mb-2" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="right" data-bs-dismiss="click" title="Projects">
                                <!--begin::Nav link-->
                                <a class="nav-link btn btn-icon btn-active-color-primary btn-color-gray-400 btn-active-light active" data-bs-toggle="tab" href="#kt_aside_nav_tab_projects">
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                                    <span class="svg-icon svg-icon-2x">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<rect x="2" y="2" width="9" height="9" rx="2" fill="black" />
													<rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="black" />
													<rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="black" />
													<rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="black" />
												</svg>
											</span>
                                    <!--end::Svg Icon-->
                                </a>
                                <!--end::Nav link-->
                            </li>
                            <!--end::Nav item-->
                            <!--begin::Nav item-->
                            <li class="nav-item mb-2" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="right" data-bs-dismiss="click" title="Menu">
                                <!--begin::Nav link-->
                                <a class="nav-link btn btn-icon btn-active-color-primary btn-color-gray-400 btn-active-light" data-bs-toggle="tab" href="#kt_aside_nav_tab_menu">
                                    <!--begin::Svg Icon | path: icons/duotune/finance/fin006.svg-->
                                    <span class="svg-icon svg-icon-2x">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<path opacity="0.3" d="M20 15H4C2.9 15 2 14.1 2 13V7C2 6.4 2.4 6 3 6H21C21.6 6 22 6.4 22 7V13C22 14.1 21.1 15 20 15ZM13 12H11C10.5 12 10 12.4 10 13V16C10 16.5 10.4 17 11 17H13C13.6 17 14 16.6 14 16V13C14 12.4 13.6 12 13 12Z" fill="black" />
													<path d="M14 6V5H10V6H8V5C8 3.9 8.9 3 10 3H14C15.1 3 16 3.9 16 5V6H14ZM20 15H14V16C14 16.6 13.5 17 13 17H11C10.5 17 10 16.6 10 16V15H4C3.6 15 3.3 14.9 3 14.7V18C3 19.1 3.9 20 5 20H19C20.1 20 21 19.1 21 18V14.7C20.7 14.9 20.4 15 20 15Z" fill="black" />
												</svg>
											</span>
                                    <!--end::Svg Icon-->
                                </a>
                                <!--end::Nav link-->
                            </li>
                            <!--end::Nav item-->
                            <!--begin::Nav item-->
                            <li class="nav-item mb-2" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="right" data-bs-dismiss="click" title="Subscription">
                                <!--begin::Nav link-->
                                <a class="nav-link btn btn-icon btn-active-color-primary btn-color-gray-400 btn-active-light" data-bs-toggle="tab" href="#kt_aside_nav_tab_subscription">
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen032.svg-->
                                    <span class="svg-icon svg-icon-2x">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<rect x="8" y="9" width="3" height="10" rx="1.5" fill="black" />
													<rect opacity="0.5" x="13" y="5" width="3" height="14" rx="1.5" fill="black" />
													<rect x="18" y="11" width="3" height="8" rx="1.5" fill="black" />
													<rect x="3" y="13" width="3" height="6" rx="1.5" fill="black" />
												</svg>
											</span>
                                    <!--end::Svg Icon-->
                                </a>
                                <!--end::Nav link-->
                            </li>
                            <!--end::Nav item-->
                            <!--begin::Nav item-->
                            <li class="nav-item mb-2" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="right" data-bs-dismiss="click" title="Tasks">
                                <!--begin::Nav link-->
                                <a class="nav-link btn btn-icon btn-active-color-primary btn-color-gray-400 btn-active-light" data-bs-toggle="tab" href="#kt_aside_nav_tab_tasks">
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen048.svg-->
                                    <span class="svg-icon svg-icon-2x">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<path opacity="0.3" d="M20.5543 4.37824L12.1798 2.02473C12.0626 1.99176 11.9376 1.99176 11.8203 2.02473L3.44572 4.37824C3.18118 4.45258 3 4.6807 3 4.93945V13.569C3 14.6914 3.48509 15.8404 4.4417 16.984C5.17231 17.8575 6.18314 18.7345 7.446 19.5909C9.56752 21.0295 11.6566 21.912 11.7445 21.9488C11.8258 21.9829 11.9129 22 12.0001 22C12.0872 22 12.1744 21.983 12.2557 21.9488C12.3435 21.912 14.4326 21.0295 16.5541 19.5909C17.8169 18.7345 18.8277 17.8575 19.5584 16.984C20.515 15.8404 21 14.6914 21 13.569V4.93945C21 4.6807 20.8189 4.45258 20.5543 4.37824Z" fill="black" />
													<path d="M10.5606 11.3042L9.57283 10.3018C9.28174 10.0065 8.80522 10.0065 8.51412 10.3018C8.22897 10.5912 8.22897 11.0559 8.51412 11.3452L10.4182 13.2773C10.8099 13.6747 11.451 13.6747 11.8427 13.2773L15.4859 9.58051C15.771 9.29117 15.771 8.82648 15.4859 8.53714C15.1948 8.24176 14.7183 8.24176 14.4272 8.53714L11.7002 11.3042C11.3869 11.6221 10.874 11.6221 10.5606 11.3042Z" fill="black" />
												</svg>
											</span>
                                    <!--end::Svg Icon-->
                                </a>
                                <!--end::Nav link-->
                            </li>
                            <!--end::Nav item-->
                            <!--begin::Nav item-->
                            <li class="nav-item mb-2" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="right" data-bs-dismiss="click" title="Notifications">
                                <!--begin::Nav link-->
                                <a class="nav-link btn btn-icon btn-active-color-primary btn-color-gray-400 btn-active-light" data-bs-toggle="tab" href="#kt_aside_nav_tab_notifications">
                                    <!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
                                    <span class="svg-icon svg-icon-2x">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<path opacity="0.3" d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z" fill="black" />
													<path d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z" fill="black" />
												</svg>
											</span>
                                    <!--end::Svg Icon-->
                                </a>
                                <!--end::Nav link-->
                            </li>
                            <!--end::Nav item-->
                            <!--begin::Nav item-->
                            <li class="nav-item mb-2" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="right" data-bs-dismiss="click" title="Authors">
                                <!--begin::Nav link-->
                                <a class="nav-link btn btn-icon btn-active-color-primary btn-color-gray-400 btn-active-light" data-bs-toggle="tab" href="#kt_aside_nav_tab_authors">
                                    <!--begin::Svg Icon | path: icons/duotune/files/fil005.svg-->
                                    <span class="svg-icon svg-icon-2x">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<path opacity="0.3" d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM16 13H13V10C13 9.4 12.6 9 12 9C11.4 9 11 9.4 11 10V13H8C7.4 13 7 13.4 7 14C7 14.6 7.4 15 8 15H11V18C11 18.6 11.4 19 12 19C12.6 19 13 18.6 13 18V15H16C16.6 15 17 14.6 17 14C17 13.4 16.6 13 16 13Z" fill="black" />
													<path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="black" />
												</svg>
											</span>
                                    <!--end::Svg Icon-->
                                </a>
                                <!--end::Nav link-->
                            </li>
                            <!--end::Nav item-->
                        </ul>
                        <!--end::Tabs-->
                    </div>
                    <!--end::Nav-->
                </div>
                <!--end::Nav-->
                <!--begin::Footer-->
                <div class="aside-footer d-flex flex-column align-items-center flex-column-auto" id="kt_aside_footer">
                    <!--begin::Quick links-->
                    <div class="d-flex align-items-center mb-2">
                        <!--begin::Menu wrapper-->
                        <div class="btn btn-icon btn-active-color-primary btn-color-gray-400 btn-active-light" data-kt-menu-trigger="click" data-kt-menu-overflow="true" data-kt-menu-placement="top-start" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-dismiss="click" title="Quick links">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen022.svg-->
                            <span class="svg-icon svg-icon-2 svg-icon-lg-1">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
											<path d="M11.2929 2.70711C11.6834 2.31658 12.3166 2.31658 12.7071 2.70711L15.2929 5.29289C15.6834 5.68342 15.6834 6.31658 15.2929 6.70711L12.7071 9.29289C12.3166 9.68342 11.6834 9.68342 11.2929 9.29289L8.70711 6.70711C8.31658 6.31658 8.31658 5.68342 8.70711 5.29289L11.2929 2.70711Z" fill="black" />
											<path d="M11.2929 14.7071C11.6834 14.3166 12.3166 14.3166 12.7071 14.7071L15.2929 17.2929C15.6834 17.6834 15.6834 18.3166 15.2929 18.7071L12.7071 21.2929C12.3166 21.6834 11.6834 21.6834 11.2929 21.2929L8.70711 18.7071C8.31658 18.3166 8.31658 17.6834 8.70711 17.2929L11.2929 14.7071Z" fill="black" />
											<path opacity="0.3" d="M5.29289 8.70711C5.68342 8.31658 6.31658 8.31658 6.70711 8.70711L9.29289 11.2929C9.68342 11.6834 9.68342 12.3166 9.29289 12.7071L6.70711 15.2929C6.31658 15.6834 5.68342 15.6834 5.29289 15.2929L2.70711 12.7071C2.31658 12.3166 2.31658 11.6834 2.70711 11.2929L5.29289 8.70711Z" fill="black" />
											<path opacity="0.3" d="M17.2929 8.70711C17.6834 8.31658 18.3166 8.31658 18.7071 8.70711L21.2929 11.2929C21.6834 11.6834 21.6834 12.3166 21.2929 12.7071L18.7071 15.2929C18.3166 15.6834 17.6834 15.6834 17.2929 15.2929L14.7071 12.7071C14.3166 12.3166 14.3166 11.6834 14.7071 11.2929L17.2929 8.70711Z" fill="black" />
										</svg>
									</span>
                            <!--end::Svg Icon-->
                        </div>

                        <!--end::Menu wrapper-->
                    </div>
                    <!--end::Quick links-->
                    <!--begin::Activities-->
                    <div class="d-flex align-items-center mb-3">
                        <!--begin::Drawer toggle-->
                        <div class="btn btn-icon btn-active-color-primary btn-color-gray-400 btn-active-light" data-kt-menu-trigger="click" data-kt-menu-overflow="true" data-kt-menu-placement="top-start" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-dismiss="click" title="Activity Logs" id="kt_activities_toggle">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen032.svg-->
                            <span class="svg-icon svg-icon-2 svg-icon-lg-1">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
											<rect x="8" y="9" width="3" height="10" rx="1.5" fill="black" />
											<rect opacity="0.5" x="13" y="5" width="3" height="14" rx="1.5" fill="black" />
											<rect x="18" y="11" width="3" height="8" rx="1.5" fill="black" />
											<rect x="3" y="13" width="3" height="6" rx="1.5" fill="black" />
										</svg>
									</span>
                            <!--end::Svg Icon-->
                        </div>
                        <!--end::drawer toggle-->
                    </div>
                    <!--end::Activities-->
                    <!--begin::Notifications-->
                    <div class="d-flex align-items-center mb-2">
                        <!--begin::Menu wrapper-->
                        <div class="btn btn-icon btn-active-color-primary btn-color-gray-400 btn-active-light" data-kt-menu-trigger="click" data-kt-menu-overflow="true" data-kt-menu-placement="top-start" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-dismiss="click" title="Notifications">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                            <span class="svg-icon svg-icon-2 svg-icon-lg-1">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
											<rect x="2" y="2" width="9" height="9" rx="2" fill="black" />
											<rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="black" />
											<rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="black" />
											<rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="black" />
										</svg>
									</span>
                            <!--end::Svg Icon-->
                        </div>
                        <!--begin::Menu-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column w-350px w-lg-375px" data-kt-menu="true">
                            <!--yield-->

                        </div>
                        <!--end::Menu-->
                        <!--end::Menu wrapper-->
                    </div>
                    <!--end::Notifications-->
                    <!--begin::User-->
                    <div class="d-flex align-items-center mb-10" id="kt_header_user_menu_toggle">
                        <!--begin::Menu wrapper-->
                        <div class="cursor-pointer symbol symbol-40px" data-kt-menu-trigger="click" data-kt-menu-overflow="true" data-kt-menu-placement="top-start" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-dismiss="click" title="User profile">
                            <img src="assets/media/avatars/150-26.jpg" alt="image" />
                        </div>
                        <!--begin::Menu-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-primary fw-bold py-4 fs-6 w-275px" data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <div class="menu-content d-flex align-items-center px-3">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-50px me-5">
                                        <img alt="Logo" src="assets/media/avatars/150-26.jpg" />
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Username-->
                                    <div class="d-flex flex-column">
                                        <div class="fw-bolder d-flex align-items-center fs-5">Max Smith
                                            <span class="badge badge-light-success fw-bolder fs-8 px-2 py-1 ms-2">Pro</span></div>
                                        <a href="#" class="fw-bold text-muted text-hover-primary fs-7">max@kt.com</a>
                                    </div>
                                    <!--end::Username-->
                                </div>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu separator-->
                            <div class="separator my-2"></div>
                            <!--end::Menu separator-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-5">
                                <a href="../../demo7/dist/account/overview.html" class="menu-link px-5">My Profile</a>
                            </div>
                            <!--end::Menu item-->

                            <!--begin::Menu separator-->
                            <div class="separator my-2"></div>
                            <!--end::Menu separator-->

                            <!--begin::Menu item-->
                            <div class="menu-item px-5">
                                <a href="../../demo7/dist/authentication/flows/basic/sign-in.html" class="menu-link px-5">Sign Out</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu separator-->
                            <div class="separator my-2"></div>
                            <!--end::Menu separator-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-5">
                                <div class="menu-content px-5">
                                    <label class="form-check form-switch form-check-custom form-check-solid pulse pulse-success" for="kt_user_menu_dark_mode_toggle">
                                        <input class="form-check-input w-30px h-20px" type="checkbox" value="1" name="mode" id="kt_user_menu_dark_mode_toggle" data-kt-url="../../demo7/dist/index.html" />
                                        <span class="pulse-ring ms-n1"></span>
                                        <span class="form-check-label text-gray-600 fs-7">Dark Mode</span>
                                    </label>
                                </div>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu-->
                        <!--end::Menu wrapper-->
                    </div>
                    <!--end::User-->
                </div>
                <!--end::Footer-->
            </div>
            <!--end::Primary-->
            <!--begin::Secondary-->
            <div class="aside-secondary d-flex flex-row-fluid">
                <!--begin::Workspace-->
                <div class="aside-workspace my-5 p-5" id="kt_aside_wordspace">
                    <div class="d-flex h-100 flex-column">
                        <!--begin::Wrapper-->
                        <div class="flex-column-fluid hover-scroll-y" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-wrappers="#kt_aside_wordspace" data-kt-scroll-dependencies="#kt_aside_secondary_footer" data-kt-scroll-offset="0px">
                            <!--begin::Tab content-->
                            <div class="tab-content">
                                <!--begin::Tab pane-->
                                <div class="tab-pane fade active show" id="kt_aside_nav_tab_projects" role="tabpanel">
                                    <!--begin::Wrapper-->
                                    <div class="m-0">
                                        <!--begin::Toolbar-->
                                        <div class="d-flex mb-10">
                                            <!--begin::Search-->
                                            <div id="kt_header_search" class="d-flex align-items-center w-lg-400px" data-kt-search-keypress="true" data-kt-search-min-length="2" data-kt-search-enter="enter" data-kt-search-layout="menu" data-kt-menu-trigger="auto" data-kt-menu-permanent="true" data-kt-menu-placement="bottom-start">
                                                <!--begin::Form-->
                                                <form data-kt-search-element="form" class="w-100 position-relative mb-5 mb-lg-0" autocomplete="off">
                                                    <!--begin::Hidden input(Added to disable form autocomplete)-->
                                                    <input type="hidden" />
                                                    <!--end::Hidden input-->
                                                    <!--begin::Icon-->
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                                                    <span class="svg-icon svg-icon-2 svg-icon-lg-1 svg-icon-gray-500 position-absolute top-50 translate-middle-y ms-5">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="black" />
																	<path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="black" />
																</svg>
															</span>
                                                    <!--end::Svg Icon-->
                                                    <!--end::Icon-->
                                                    <!--begin::Input-->
                                                    <input type="text" class="form-control form-control-solid ps-15" name="search" value="" placeholder="Search..." data-kt-search-element="input" />
                                                    <!--end::Input-->
                                                    <!--begin::Spinner-->
                                                    <span class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5" data-kt-search-element="spinner">
																<span class="spinner-border h-15px w-15px align-middle text-gray-400"></span>
															</span>
                                                    <!--end::Spinner-->
                                                    <!--begin::Reset-->
                                                    <span class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-4" data-kt-search-element="clear">
																<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
																<span class="svg-icon svg-icon-2 svg-icon-lg-1 me-0">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
																		<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
																	</svg>
																</span>
                                                        <!--end::Svg Icon-->
															</span>
                                                    <!--end::Reset-->
                                                </form>
                                                <!--end::Form-->

                                            </div>
                                            <!--end::Search-->
                                            <!--begin::Filter-->
                                            <div class="flex-shrink-0 ms-2">
                                                <!--begin::Menu toggle-->
                                                <button type="button" class="btn btn-icon btn-bg-light btn-active-icon-primary btn-color-gray-400" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen031.svg-->
                                                    <span class="svg-icon svg-icon-2">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<path d="M19.0759 3H4.72777C3.95892 3 3.47768 3.83148 3.86067 4.49814L8.56967 12.6949C9.17923 13.7559 9.5 14.9582 9.5 16.1819V19.5072C9.5 20.2189 10.2223 20.7028 10.8805 20.432L13.8805 19.1977C14.2553 19.0435 14.5 18.6783 14.5 18.273V13.8372C14.5 12.8089 14.8171 11.8056 15.408 10.964L19.8943 4.57465C20.3596 3.912 19.8856 3 19.0759 3Z" fill="black" />
																</svg>
															</span>
                                                    <!--end::Svg Icon-->
                                                </button>
                                                <!--end::Menu toggle-->

                                            </div>
                                            <!--end::Filter-->
                                        </div>
                                        <!--end::Toolbar-->
                                        <!--begin::Projects-->
                                        <div class="m-0">
                                            <!--begin::Heading-->
                                            <h1 class="text-gray-800 fw-bold mb-6 mx-5">Projects</h1>
                                            <!--end::Heading-->
                                            <!--begin::Items-->
                                            <div class="mb-10">
                                                <!--begin::Item-->
                                                <a href="../../demo7/dist/pages/projects/project.html" class="custom-list d-flex align-items-center px-5 py-4">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40px me-5">
																<span class="symbol-label">
																	<img src="assets/media/svg/brand-logos/bebo.svg" class="h-50 align-self-center" alt="" />
																</span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Description-->
                                                    <div class="d-flex flex-column flex-grow-1">
                                                        <!--begin::Title-->
                                                        <h5 class="custom-list-title fw-bold text-gray-800 mb-1">Briviba SaaS</h5>
                                                        <!--end::Title-->
                                                        <!--begin::Link-->
                                                        <span class="text-gray-400 fw-bold">By James</span>
                                                        <!--end::Link-->
                                                    </div>
                                                    <!--begin::Description-->
                                                </a>
                                                <!--end::Item-->

                                            </div>
                                            <!--end::Items-->
                                        </div>
                                        <!--end::Projects-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Tab pane-->
                                <!--begin::Tab pane-->
                                <div class="tab-pane fade" id="kt_aside_nav_tab_menu" role="tabpanel">
                                    <!--begin::Menu-->
                                    <div class="menu menu-column menu-fit menu-rounded menu-title-gray-600 menu-icon-gray-400 menu-state-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500 fw-bold fs-5 px-6 my-5 my-lg-0" id="kt_aside_menu" data-kt-menu="true">
                                        <div id="kt_aside_menu_wrapper" class="menu-fit">
                                            <div class="menu-item">
                                                <div class="menu-content pb-2">
                                                    <span class="menu-section text-muted text-uppercase fs-8 ls-1">Dashboard</span>
                                                </div>
                                            </div>
                                            <div class="menu-item">
                                                <a class="menu-link active" href="../../demo7/dist/index.html">
															<span class="menu-icon">
																<!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
																<span class="svg-icon svg-icon-2">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<rect x="2" y="2" width="9" height="9" rx="2" fill="black" />
																		<rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="black" />
																		<rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="black" />
																		<rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="black" />
																	</svg>
																</span>
                                                                <!--end::Svg Icon-->
															</span>
                                                    <span class="menu-title">Default</span>
                                                </a>
                                            </div>
                                            <div class="menu-item">
                                                <a class="menu-link" href="../../demo7/dist/landing.html">
															<span class="menu-icon">
																<!--begin::Svg Icon | path: icons/duotune/communication/com001.svg-->
																<span class="svg-icon svg-icon-2">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<path opacity="0.3" d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" fill="black" />
																		<path d="M19 10.4C19 10.3 19 10.2 19 10C19 8.9 18.1 8 17 8H16.9C15.6 6.2 14.6 4.29995 13.9 2.19995C13.3 2.09995 12.6 2 12 2C11.9 2 11.8 2 11.7 2C12.4 4.6 13.5 7.10005 15.1 9.30005C15 9.50005 15 9.7 15 10C15 11.1 15.9 12 17 12C17.1 12 17.3 12 17.4 11.9C18.6 13 19.9 14 21.4 14.8C21.4 14.8 21.5 14.8 21.5 14.9C21.7 14.2 21.8 13.5 21.9 12.7C20.9 12.1 19.9 11.3 19 10.4Z" fill="black" />
																		<path d="M12 15C11 13.1 10.2 11.2 9.60001 9.19995C9.90001 8.89995 10 8.4 10 8C10 7.1 9.40001 6.39998 8.70001 6.09998C8.40001 4.99998 8.20001 3.90005 8.00001 2.80005C7.30001 3.10005 6.70001 3.40002 6.20001 3.90002C6.40001 4.80002 6.50001 5.6 6.80001 6.5C6.40001 6.9 6.10001 7.4 6.10001 8C6.10001 9 6.80001 9.8 7.80001 10C8.30001 11.6 9.00001 13.2 9.70001 14.7C7.10001 13.2 4.70001 11.5 2.40001 9.5C2.20001 10.3 2.10001 11.1 2.10001 11.9C4.60001 13.9 7.30001 15.7 10.1 17.2C10.2 18.2 11 19 12 19C12.6 20 13.2 20.9 13.9 21.8C14.6 21.7 15.3 21.5 15.9 21.2C15.4 20.5 14.9 19.8 14.4 19.1C15.5 19.5 16.5 19.9 17.6 20.2C18.3 19.8 18.9 19.2 19.4 18.6C17.6 18.1 15.7 17.5 14 16.7C13.9 15.8 13.1 15 12 15Z" fill="black" />
																	</svg>
																</span>
                                                                <!--end::Svg Icon-->
															</span>
                                                    <span class="menu-title">Landing Page</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Menu-->
                                </div>
                                <!--end::Tab pane-->


                            </div>
                            <!--end::Tab content-->
                        </div>
                        <!--end::Wrapper-->
                        <!--begin::Footer-->
                        <div class="flex-column-auto pt-10 px-5" id="kt_aside_secondary_footer">
                            <a href="../../demo7/dist/documentation/getting-started.html" class="btn btn-bg-light btn-color-gray-600 btn-flex btn-active-color-primary flex-center w-100" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-dark" data-bs-trigger="hover" data-bs-offset="0,5" data-bs-dismiss-="click" title="200+ in-house components and 3rd-party plugins">
                                <span class="btn-label">Docs &amp; Components</span>
                                <!--begin::Svg Icon | path: icons/duotune/general/gen005.svg-->
                                <span class="svg-icon btn-icon svg-icon-4 ms-2">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
												<path opacity="0.3" d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM15 17C15 16.4 14.6 16 14 16H8C7.4 16 7 16.4 7 17C7 17.6 7.4 18 8 18H14C14.6 18 15 17.6 15 17ZM17 12C17 11.4 16.6 11 16 11H8C7.4 11 7 11.4 7 12C7 12.6 7.4 13 8 13H16C16.6 13 17 12.6 17 12ZM17 7C17 6.4 16.6 6 16 6H8C7.4 6 7 6.4 7 7C7 7.6 7.4 8 8 8H16C16.6 8 17 7.6 17 7Z" fill="black" />
												<path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="black" />
											</svg>
										</span>
                                <!--end::Svg Icon-->
                            </a>
                        </div>
                        <!--end::Footer-->
                    </div>
                </div>
                <!--end::Workspace-->
            </div>
            <!--end::Secondary-->
            <!--begin::Aside Toggle-->
            <button class="btn btn-sm btn-icon bg-body btn-color-gray-700 btn-active-primary position-absolute translate-middle start-100 end-0 bottom-0 shadow-sm d-none d-lg-flex" data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body" data-kt-toggle-name="aside-minimize" style="margin-bottom: 1.35rem">
                <!--begin::Svg Icon | path: icons/duotune/arrows/arr063.svg-->
                <span class="svg-icon svg-icon-2 rotate-180">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
								<rect opacity="0.5" x="6" y="11" width="13" height="2" rx="1" fill="black" />
								<path d="M8.56569 11.4343L12.75 7.25C13.1642 6.83579 13.1642 6.16421 12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75L5.70711 11.2929C5.31658 11.6834 5.31658 12.3166 5.70711 12.7071L11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25C13.1642 17.8358 13.1642 17.1642 12.75 16.75L8.56569 12.5657C8.25327 12.2533 8.25327 11.7467 8.56569 11.4343Z" fill="black" />
							</svg>
						</span>
                <!--end::Svg Icon-->
            </button>
            <!--end::Aside Toggle-->
        </div>
        <!--end::Aside-->
        <!--begin::Wrapper-->
        <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
            <!--begin::Header-->
            <div id="kt_header" class="header" data-kt-sticky="true" data-kt-sticky-name="header" data-kt-sticky-offset="{default: '200px', lg: '300px'}">
                <!--begin::Container-->
                <div class="container-xxl d-flex align-items-center justify-content-between" id="kt_header_container">
                    <!--begin::Page title-->
                    <div class="page-title d-flex flex-column align-items-start justify-content-center flex-wrap me-lg-2 pb-2 pb-lg-0" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', lg: '#kt_header_container'}">
                        <!--begin::Heading-->
                        <h1 class="text-dark fw-bolder my-0 fs-2">Dashboard</h1>
                        <!--end::Heading-->
                        <!--begin::Breadcrumb-->
                        <ul class="breadcrumb fw-bold fs-base my-1">
                            <li class="breadcrumb-item text-muted">
                                <a href="../../demo7/dist/index.html" class="text-muted">Home</a>
                            </li>
                            <li class="breadcrumb-item text-dark">Default</li>
                        </ul>
                        <!--end::Breadcrumb-->
                    </div>
                    <!--end::Page title=-->
                    <!--begin::Wrapper-->
                    <div class="d-flex d-lg-none align-items-center ms-n2 me-2">
                        <!--begin::Aside mobile toggle-->
                        <div class="btn btn-icon btn-active-icon-primary" id="kt_aside_toggle">
                            <!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
                            <span class="svg-icon svg-icon-2x">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
											<path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z" fill="black" />
											<path opacity="0.3" d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z" fill="black" />
										</svg>
									</span>
                            <!--end::Svg Icon-->
                        </div>
                        <!--end::Aside mobile toggle-->
                        <!--begin::Logo-->
                        <a href="../../demo7/dist/index.html" class="d-flex align-items-center">
                            <img alt="Logo" src="assets/media/logos/logo-demo7.svg" class="h-30px" />
                        </a>
                        <!--end::Logo-->
                    </div>
                    <!--end::Wrapper-->
                    <!--begin::Toolbar wrapper-->
                    <div class="d-flex flex-shrink-0">
                        <!--begin::Invite user-->
                        <div class="d-flex ms-3">
                            <a href="#" class="btn btn-flex flex-center bg-body btn-color-gray-700 btn-active-color-primary w-40px w-md-auto h-40px px-0 px-md-6" tooltip="New Member" data-bs-toggle="modal" data-bs-target="#kt_modal_invite_friends">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                                <span class="svg-icon svg-icon-2 svg-icon-primary me-0 me-md-2">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
												<rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="black" />
												<rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="black" />
											</svg>
										</span>
                                <!--end::Svg Icon-->
                                <span class="d-none d-md-inline">New Member</span>
                            </a>
                        </div>
                        <!--end::Invite user-->
                        <!--begin::Create app-->
                        <div class="d-flex ms-3">
                            <a href="#" class="btn btn-flex flex-center bg-body btn-color-gray-700 btn-active-color-primary w-40px w-md-auto h-40px px-0 px-md-6" tooltip="New App" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app" id="kt_toolbar_primary_button">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen005.svg-->
                                <span class="svg-icon svg-icon-2 svg-icon-primary me-0 me-md-2">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
												<path opacity="0.3" d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM15 17C15 16.4 14.6 16 14 16H8C7.4 16 7 16.4 7 17C7 17.6 7.4 18 8 18H14C14.6 18 15 17.6 15 17ZM17 12C17 11.4 16.6 11 16 11H8C7.4 11 7 11.4 7 12C7 12.6 7.4 13 8 13H16C16.6 13 17 12.6 17 12ZM17 7C17 6.4 16.6 6 16 6H8C7.4 6 7 6.4 7 7C7 7.6 7.4 8 8 8H16C16.6 8 17 7.6 17 7Z" fill="black" />
												<path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="black" />
											</svg>
										</span>
                                <!--end::Svg Icon-->
                                <span class="d-none d-md-inline">New App</span>
                            </a>
                        </div>
                        <!--end::Create app-->
                        <!--begin::Chat-->
                        <div class="d-flex align-items-center ms-3">
                            <!--begin::Menu wrapper-->
                            <div class="btn btn-icon btn-primary w-40px h-40px pulse pulse-white" id="kt_drawer_chat_toggle">
                                <!--begin::Svg Icon | path: icons/duotune/communication/com012.svg-->
                                <span class="svg-icon svg-icon-2">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
												<path opacity="0.3" d="M20 3H4C2.89543 3 2 3.89543 2 5V16C2 17.1046 2.89543 18 4 18H4.5C5.05228 18 5.5 18.4477 5.5 19V21.5052C5.5 22.1441 6.21212 22.5253 6.74376 22.1708L11.4885 19.0077C12.4741 18.3506 13.6321 18 14.8167 18H20C21.1046 18 22 17.1046 22 16V5C22 3.89543 21.1046 3 20 3Z" fill="black" />
												<rect x="6" y="12" width="7" height="2" rx="1" fill="black" />
												<rect x="6" y="7" width="12" height="2" rx="1" fill="black" />
											</svg>
										</span>
                                <!--end::Svg Icon-->
                                <span class="pulse-ring"></span>
                            </div>
                            <!--end::Menu wrapper-->
                        </div>
                        <!--end::Chat-->
                    </div>
                    <!--end::Toolbar wrapper-->
                </div>
                <!--end::Container-->
            </div>
            <!--end::Header-->
            <!--begin::Content-->
            <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                <!--Main Content goes here yield-->
            </div>
            <!--end::Content-->
            <!--begin::Footer-->
            <div class="footer py-4 d-flex flex-lg-column" id="kt_footer">
                <!--begin::Container-->
                <div class="container-xxl d-flex flex-column flex-md-row flex-stack">
                    <!--begin::Copyright-->
                    <div class="text-dark order-2 order-md-1">
                        <span class="text-gray-400 fw-bold me-1">Powered by</span>
                        <a href="https://keenthemes.com" target="_blank" class="text-muted text-hover-primary fw-bold me-2 fs-6">Keenthemes</a>
                    </div>
                    <!--end::Copyright-->
                    <!--begin::Menu-->
                    <ul class="menu menu-gray-600 menu-hover-primary fw-bold order-1">
                        <li class="menu-item">
                            <a href="https://keenthemes.com" target="_blank" class="menu-link px-2">About</a>
                        </li>
                        <li class="menu-item">
                            <a href="https://keenthemes.com/support" target="_blank" class="menu-link px-2">Support</a>
                        </li>
                        <li class="menu-item">
                            <a href="https://1.envato.market/EA4JP" target="_blank" class="menu-link px-2">Purchase</a>
                        </li>
                    </ul>
                    <!--end::Menu-->
                </div>
                <!--end::Container-->
            </div>
            <!--end::Footer-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Page-->
</div>
<!--end::Root-->


<!--begin::Scrolltop-->
<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
    <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
    <span class="svg-icon">
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
					<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="black" />
					<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="black" />
				</svg>
			</span>
    <!--end::Svg Icon-->
</div>
<!--end::Scrolltop-->
<!--end::Main-->
<script>var hostUrl = "assets/";</script>
<!--begin::Javascript-->
<!--begin::Global Javascript Bundle(used by all pages)-->
<script src="{{ asset('fastui/plugins/global/plugins.bundle.js')}}"></script>
<script src="{{ asset('fastui/js/scripts.bundle.js')}}"></script>
<!--end::Global Javascript Bundle-->
<!--begin::Page Vendors Javascript(used by this page)-->
<script src="{{ asset('fastui/plugins/custom/fullcalendar/fullcalendar.bundle.js')}}"></script>
<!--end::Page Vendors Javascript-->
<!--begin::Page Custom Javascript(used by this page)-->
<script src="{{ asset('fastui/js/custom/widgets.js')}}"></script>
<script src="{{ asset('fastui/js/custom/apps/chat/chat.js')}}"></script>
<script src="{{ asset('fastui/js/custom/modals/create-app.js')}}"></script>
<script src="{{ asset('fastui/js/custom/modals/upgrade-plan.js')}}"></script>
<!--end::Page Custom Javascript-->
<!--end::Javascript-->
</body>
<!--end::Body-->
</html>
