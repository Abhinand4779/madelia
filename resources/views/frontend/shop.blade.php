<!DOCTYPE html>

<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]--><!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en-US" xml:lang="en-US" xmlns="http://www.w3.org/1999/xhtml"><!--<![endif]-->
<head>
<meta charset="utf-8"/>
<title>madeliadesigns</title>
<meta content="madeliadesigns" name="author"/>
<meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport"/>
<meta content="" name="description"/>
<meta content="" name="keywords"/>
<!-- font -->
<link href="/assets/css/xo2Q84RiLqR1.css?v=880" rel="stylesheet"/>
<link href="/assets/css/fxDjF2UjbT3M.css" rel="stylesheet"/>
<!-- css -->
<link href="/assets/css/rlqoxzRnhsHE.css?v=465" rel="stylesheet"/>
<link href="/assets/css/AOXgFhb8JAAw.css?v=823" rel="stylesheet"/>
<link href="/assets/css/DcIVa6uAXrCH.css?v=985" rel="stylesheet"/>
<link href="/assets/css/eiYo7M7TKBWA.css?v=658" rel="stylesheet"/>
<link href="/assets/css/JIHS5y7YJJPp.css?v=637" rel="stylesheet" type="text/css"/>
<script defer="" src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
<!-- Favicon and Touch Icons  -->
<link href="/assets/images/fo3dLCSUuNSadjsAJAGGdptbGXZIa7Jb5S-1778432057.png" rel="shortcut icon"/>
<link href="/assets/images/fo3dLCSUuNSadjsAJAGGdptbGXZIa7Jb5S-1778432057.png" rel="apple-touch-icon-precomposed"/>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet"/>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<style>
        




 .img-category-x {
            height: 243px !important;
        }

        @media (max-width: 768px) {
            .img-category-x {
                height: 164px !important;
            }
        }

        /* Wrapper for horizontal scroll */
        .table-wrapper {
            width: 100%;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
            padding-bottom: 10px;
            /* space for scrollbar */
        }

        /* Premium table design */
        .premium-table {
            width: 100%;
            min-width: 800px;
            border-collapse: separate;
            border-spacing: 0;
            font-family: 'Poppins', sans-serif;
            background: #ffffff;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.05);
            overflow: hidden;
        }

        /* Header styling */
        .premium-table thead {
            background: black;
            color: white;
            font-weight: 600;
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .premium-table th,
        .premium-table td {
            padding: 14px 20px;
            text-align: left;
            white-space: nowrap;
        }

        /* Body rows */
        .premium-table tbody tr {
            border-bottom: 1px solid #e5e7eb;
            transition: all 0.3s ease;
        }

        .premium-table tbody tr:hover {
            background: #f3f4f6;
            transform: scale(1.01);
        }

        /* Alternating row colors */
        .premium-table tbody tr:nth-child(even) {
            background: #f9fafb;
        }

        /* Status badges */
        .status {
            padding: 6px 12px;
            border-radius: 12px;
            font-size: 12px;
            font-weight: 500;
            text-transform: uppercase;
            display: inline-block;
        }

        .status.active {
            background: #22c55e33;
            color: #16a34a;
        }

        .status.inactive {
            background: #ef444433;
            color: #dc2626;
        }

        .status.pending {
            background: #f59e0b33;
            color: #b45309;
        }


        /* Scrollbar styling (optional) */
        .table-wrapper::-webkit-scrollbar {
            height: 6px;
        }

        .table-wrapper::-webkit-scrollbar-thumb {
            background: rgba(100, 100, 100, 0.3);
            border-radius: 10px;
        }

        /* Mobile responsive - scrollable */
        @media (max-width: 768px) {
            .premium-table {
                min-width: 600px;
            }
        }

        .btn-sm {
            max-width: 45px;
        }


        .card {
            box-shadow: 0rem .3125rem .3125rem -.15625rem rgba(0, 0, 0, .03), 0rem .1875rem .1875rem -.09375rem rgba(0, 0, 0, .02), 0rem .125rem .125rem -.0625rem rgba(0, 0, 0, .02), 0rem .0625rem .0625rem -.03125rem rgba(0, 0, 0, .03), 0rem .03125rem .03125rem rgba(0, 0, 0, .04), 0rem 0rem 0rem .0625rem rgba(0, 0, 0, .06) !important;
            border: none;
        }

        .card-body {
            flex-grow: 1;
            padding-inline-start: 1.875rem;
            padding-inline-end: 1.875rem;
            padding-top: 1.25rem;
            padding-bottom: 1.25rem;
        }

        .card-header {
            display: flex;
            min-height: 56px;
            align-items: center;
            justify-content: space-between;
            border-bottom: 1px solid #f1f1f4;
            padding-inline-start: 1.875rem;
            padding-inline-end: 1.875rem;
            padding-top: .75rem;
            padding-bottom: .75rem;
        }

        :root {
            --white: #ffffff;
        }

        .announcement-bar {
            padding-right: 65px;
            position: relative;
            transition: all 0.3s linear;
        }

        .announcement-bar .close-announcement-bar {
            cursor: pointer;
            position: absolute;
            font-size: 12px;
            right: 25px;
            height: 40px;
            display: flex;
            justify-content: center;
            align-items: center;
            width: 40px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--white);
        }

        .announcement-bar.not-hover .box-sw-announcement-bar:hover {
            animation-play-state: running !important;
        }

        .box-sw-announcement-bar {
            display: flex;
            -webkit-animation: slide-har 14s linear infinite;
            animation: slide-har 14s linear infinite;
            transition: animation-duration 300ms;
        }

        .box-sw-announcement-bar:hover {
            animation-play-state: paused;
        }

        .speed-1 {
            -webkit-animation: slide-har 40s linear infinite;
            animation: slide-har 40s linear infinite !important;
        }

        .speed-1:hover {
            animation-play-state: paused !important;
        }

        .run-reverse {
            animation-direction: reverse !important;
        }

        .wrap-announcement-bar {
            overflow: hidden;
        }

        .noti-bar-text {
            padding: 10px 0px;
        }

        .wrap-announcement-bar-2 {
            position: relative;
        }

        .wrap-announcement-bar-2 .tf-sw-top_bar {
            margin: 0px 20px;
        }

        .wrap-announcement-bar-2 .navigation-topbar {
            position: absolute;
            z-index: 1;
            top: 50%;
            transform: translateY(-50%);
            width: 30px;
            height: 30px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .wrap-announcement-bar-2 .navigation-topbar .icon {
            color: var(--white);
            font-size: 12px;
        }

        .wrap-announcement-bar-2 .navigation-topbar.nav-next-topbar {
            left: 0;
        }

        .wrap-announcement-bar-2 .navigation-topbar.nav-prev-topbar {
            right: 0;
        }

        @keyframes slide-har {
            0% {
                -webkit-transform: translateX(0%);
                transform: translateX(0%);
            }

            100% {
                -webkit-transform: translateX(-100%);
                transform: translateX(-100%);
            }
        }

        .announcement-bar-item {
            display: inline-block;
            padding-right: 46px;
            position: relative;
        }

        .announcement-bar-item p {
            font-size: 12px;
            padding: 10px 0px;
            font-weight: 600;
            color: var(--white);
            white-space: nowrap;
            padding-left: 23px;
        }

        .announcement-bar-item::after {
            height: 1px;
            width: 22px;
            background-color: var(--white);
            content: "";
            position: absolute;
            z-index: 1;
            top: 0;
            right: 0;
            bottom: 0;
            margin: auto;
        }

        .bg_dark {
            background-color: #000000;
        }

        .announcement-bar-black .announcement-bar-item p {
            color: var(--main);
        }

        .announcement-bar-black .announcement-bar-item::after {
            background-color: var(--main);
        }

        .announcement-bar-black .close-announcement-bar {
            color: var(--main);
        }
    </style>
<style>[wire\:loading], [wire\:loading\.delay], [wire\:loading\.inline-block], [wire\:loading\.inline], [wire\:loading\.block], [wire\:loading\.flex], [wire\:loading\.table], [wire\:loading\.grid], [wire\:loading\.inline-flex] {display: none;}[wire\:loading\.delay\.shortest], [wire\:loading\.delay\.shorter], [wire\:loading\.delay\.short], [wire\:loading\.delay\.long], [wire\:loading\.delay\.longer], [wire\:loading\.delay\.longest] {display:none;}[wire\:offline] {display: none;}[wire\:dirty]:not(textarea):not(input):not(select) {display: none;}input:-webkit-autofill, select:-webkit-autofill, textarea:-webkit-autofill {animation-duration: 50000s;animation-name: livewireautofill;}@keyframes livewireautofill { from {} }</style>
<script type="application/ld+json">
            {
              "@@context": "https://schema.org",
              "@@type": "Store",
              "name": "madeliadesigns",
              "image": "/assets/images/I9uMBss51oRgkCJSSWlcQGTPz9r4vqvquN-1778432057.png",
              "address": {
                "@@type": "PostalAddress",
                "streetAddress": "",
                "addressLocality": " ",
                "addressRegion": "",
                "postalCode": "",
                "addressCountry": "IN"
              },
              "telephone": "",
              "openingHours": "Mo-Sa 10:00-20:00",
              "url": ""
            }
    </script>
<!-- Meta Pixel Code -->
<script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '');
        fbq('track', 'PageView');
    </script>
<noscript>
<img height="1" src="https://www.facebook.com/tr?id=&amp;ev=PageView&amp;noscript=1" style="display:none" width="1"/>
</noscript>
<!-- End Meta Pixel Code-->
</head>
<body class="preload-wrapper popup-loader">
<!-- RTL -->
<!--<a href="javascript:void(0);" id="toggle-rtl" class="btn-style-2 radius-3"><span>RTL</span></a>-->
<!-- /RTL  -->
<!-- Scroll Top -->
<button id="scroll-top">
<svg fill="none" height="25" viewbox="0 0 24 25" width="24" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0_15741_24194)">
<path d="M3 11.9175L12 2.91748L21 11.9175H16.5V20.1675C16.5 20.3664 16.421 20.5572 16.2803 20.6978C16.1397 20.8385 15.9489 20.9175 15.75 20.9175H8.25C8.05109 20.9175 7.86032 20.8385 7.71967 20.6978C7.57902 20.5572 7.5 20.3664 7.5 20.1675V11.9175H3Z" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path>
</g>
<defs>
<clippath id="clip0_15741_24194">
<rect fill="white" height="24" transform="translate(0 0.66748)" width="24"></rect>
</clippath>
</defs>
</svg>
</button>
<!-- preload -->
<div class="preload preload-container">
<div class="preload-logo">
<div class="spinner"></div>
</div>
</div>
<!-- /preload -->
<div id="wrapper">
<!-- Top Bar-->
<!-- announcement-bar -->
<!-- /announcement-bar -->
<!-- /Top Bar -->
<!-- Header -->
<div wire:id="nV0V138hfmJqbpNBh6Gn" wire:initial-data='{"fingerprint":{"id":"nV0V138hfmJqbpNBh6Gn","name":"home.layout.header","locale":"en","path":"products","method":"GET","v":"acj"},"effects":{"listeners":["cartRefresh"]},"serverMemo":{"children":[],"errors":[],"htmlHash":"fdb5c104","data":{"custom_domains":["saariniindia","papaymart"],"domain":"madeliadesigns"},"dataMeta":[],"checksum":"79a2e49663a2ca52dea061e18efba8cd7bf20e0195ebe9fac2e7f31587e06d96"}}'>
<header class="header-default" id="header" style="border-bottom: 1px solid #ebebeb;">
<div class="container">
<div class="row wrapper-header align-items-center">
<div class="col-md-4 col-3 d-xl-none">
<a aria-controls="mobileMenu" class="mobile-menu" data-bs-toggle="offcanvas" href="#mobileMenu">
<i class="icon icon-categories"></i>
</a>
</div>
<div class="col-xl-3 col-md-4 col-6" style="display: flex;justify-content: center;">
<a href="">
<img alt="logo" class="logo" src="/assets/images/I9uMBss51oRgkCJSSWlcQGTPz9r4vqvquN-1778432057.png" style="width: 136px;"/>
</a>
</div>
<div class="col-xl-6 d-none d-xl-block">
<nav class="box-navigation text-center">
<ul class="box-nav-ul d-flex align-items-center justify-content-center">
<li class="menu-item"><a class="item-link" href="">HOME</a></li>
<li class="menu-item position-relative">
<a class="item-link" href="category_necklace-sets-and-chokers-HKCSS.html">
                                         NECKLACE SETS AND CHOKERS
                                     <i class="icon icon-arrow-down"></i>
</a>
<div class="sub-menu submenu-default">
<ul class="menu-list">
<li>
<a class="menu-heading" href="subcategory_chokers-OuqUe.html">
                                                         Chokers
                                                </a>
</li>
<li>
<a class="menu-heading" href="subcategory_necklace-WSrDs.html">
                                                         Necklace Sets
                                                </a>
</li>
</ul>
</div>
</li>
<li class="menu-item position-relative">
<a class="item-link" href="category_mangalsutra-0Brv3.html">
                                         MANGALSUTRA
                                     <i class="icon icon-arrow-down"></i>
</a>
<div class="sub-menu submenu-default">
<ul class="menu-list">
<li>
<a class="menu-heading" href="subcategory_mangalsutra-JCFWX.html">
                                                         Mangalsutra
                                                </a>
</li>
</ul>
</div>
</li>
<li class="menu-item position-relative">
<a class="item-link" href="category_harams-AUy1m.html">
                                         HARAMS
                                     <i class="icon icon-arrow-down"></i>
</a>
<div class="sub-menu submenu-default">
<ul class="menu-list">
<li>
<a class="menu-heading" href="subcategory_harams-eAVXI.html">
                                                         Harams
                                                </a>
</li>
</ul>
</div>
</li>
<li class="menu-item position-relative">
<a class="item-link" href="category_invisible-chains-and-pendants-tidrw.html">
                                         INVISIBLE CHAINS AND PENDANTS
                                     <i class="icon icon-arrow-down"></i>
</a>
<div class="sub-menu submenu-default">
<ul class="menu-list">
<li>
<a class="menu-heading" href="subcategory_invisible-chains-and-pendants-w0ONu.html">
                                                         Invisible Chains and Pendants
                                                </a>
</li>
</ul>
</div>
</li>
<li class="menu-item position-relative">
<a class="item-link" href="category_hair-accessories-ZsjhM.html">
                                         HAIR ACCESSORIES
                                     <i class="icon icon-arrow-down"></i>
</a>
<div class="sub-menu submenu-default">
<ul class="menu-list">
<li>
<a class="menu-heading" href="subcategory_artificial-jasmin-strings-BvwWy.html">
                                                         Artificial Jasmine Strings
                                                </a>
</li>
<li>
<a class="menu-heading" href="subcategory_artificial-kanakambaram-strings-XSjX6.html">
                                                         Artificial Kanakambaram Strings
                                                </a>
</li>
</ul>
</div>
</li>
<li class="menu-item position-relative">
<a class="item-link" href="category_saree-Q3IJM.html">
                                         SAREE
                                     <i class="icon icon-arrow-down"></i>
</a>
<div class="sub-menu submenu-default">
<ul class="menu-list">
<li>
<a class="menu-heading" href="subcategory_onam-saree-u9Mgb.html">
                                                         Onam Saree
                                                </a>
</li>
</ul>
</div>
</li>
</ul>
</nav>
</div>
<div class="col-xl-3 col-md-4 col-3">
<ul class="nav-icon d-flex justify-content-end align-items-center">
<li class="nav-search"><a class="nav-icon-item" data-bs-toggle="modal" href="#search">
<svg class="icon" fill="none" height="24" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
<path d="M11 19C15.4183 19 19 15.4183 19 11C19 6.58172 15.4183 3 11 3C6.58172 3 3 6.58172 3 11C3 15.4183 6.58172 19 11 19Z" stroke="#181818" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
<path d="M21.35 21.0004L17 16.6504" stroke="#181818" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
</svg>
</a></li>
<li class="nav-account">
<a class="nav-icon-item" href="#">
<svg class="icon" fill="none" height="24" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
<path d="M20 21V19C20 17.9391 19.5786 16.9217 18.8284 16.1716C18.0783 15.4214 17.0609 15 16 15H8C6.93913 15 5.92172 15.4214 5.17157 16.1716C4.42143 16.9217 4 17.9391 4 19V21" stroke="#181818" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
<path d="M12 11C14.2091 11 16 9.20914 16 7C16 4.79086 14.2091 3 12 3C9.79086 3 8 4.79086 8 7C8 9.20914 9.79086 11 12 11Z" stroke="#181818" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
</svg>
</a>
<div class="dropdown-account dropdown-login">
<div class="sub-top">
<a class="tf-btn btn-white btn-reset has-border" href="page_client-guest-login.html">Guest Login</a>
<a class="tf-btn btn-reset" href="page_login.html">Login</a>
<p class="text-center text-secondary-2">Don’t have an account? <a href="page_register.html">Register</a></p>
</div>
</div>
</li>
<li class="nav-wishlist"><a class="nav-icon-item" href="page_wishlist.html">
<svg class="icon" fill="none" height="24" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
<path d="M20.8401 4.60987C20.3294 4.09888 19.7229 3.69352 19.0555 3.41696C18.388 3.14039 17.6726 2.99805 16.9501 2.99805C16.2276 2.99805 15.5122 3.14039 14.8448 3.41696C14.1773 3.69352 13.5709 4.09888 13.0601 4.60987L12.0001 5.66987L10.9401 4.60987C9.90843 3.57818 8.50915 2.99858 7.05012 2.99858C5.59109 2.99858 4.19181 3.57818 3.16012 4.60987C2.12843 5.64156 1.54883 7.04084 1.54883 8.49987C1.54883 9.95891 2.12843 11.3582 3.16012 12.3899L4.22012 13.4499L12.0001 21.2299L19.7801 13.4499L20.8401 12.3899C21.3511 11.8791 21.7565 11.2727 22.033 10.6052C22.3096 9.93777 22.4519 9.22236 22.4519 8.49987C22.4519 7.77738 22.3096 7.06198 22.033 6.39452C21.7565 5.72706 21.3511 5.12063 20.8401 4.60987V4.60987Z" stroke="#181818" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
</svg>
</a>
</li>
<li class="nav-cart"><a class="nav-icon-item" data-bs-toggle="modal" href="#shoppingCart">
<svg class="icon" fill="none" height="24" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
<path d="M16.5078 10.8734V6.36686C16.5078 5.17166 16.033 4.02541 15.1879 3.18028C14.3428 2.33514 13.1965 1.86035 12.0013 1.86035C10.8061 1.86035 9.65985 2.33514 8.81472 3.18028C7.96958 4.02541 7.49479 5.17166 7.49479 6.36686V10.8734M4.11491 8.62012H19.8877L21.0143 22.1396H2.98828L4.11491 8.62012Z" stroke="#181818" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
</svg>
<span class="count-box">
                                     0
                                 </span></a>
</li>
</ul>
</div>
</div>
</div>
</header>
<!-- mobile menu -->
<div class="offcanvas offcanvas-start canvas-mb" id="mobileMenu">
<span aria-label="Close" class="icon-close icon-close-popup" data-bs-dismiss="offcanvas"></span>
<div class="mb-canvas-content">
<div class="mb-body">
<div class="mb-content-top">
<ul class="nav-ul-mb" id="wrapper-menu-navigation">
<li class="nav-mb-item active">
<a class="mb-menu-link" href="">Home</a>
</li>
<li class="nav-mb-item">
<a aria-controls="dropdown-menu-one" aria-expanded="true" class="collapsed mb-menu-link" data-bs-toggle="collapse" href="#dropdown-menu-1">
<span> Necklace Sets and Chokers</span>
<span class="btn-open-sub"></span>
</a>
<div class="collapse" id="dropdown-menu-1">
<ul class="sub-nav-menu">
<li><a class="menu-link-text active" href="subcategory_chokers-OuqUe.html">
                                                     Chokers
                                            </a>
</li>
<li><a class="menu-link-text active" href="subcategory_necklace-WSrDs.html">
                                                     Necklace Sets
                                            </a>
</li>
</ul>
</div>
</li>
<li class="nav-mb-item">
<a aria-controls="dropdown-menu-one" aria-expanded="true" class="collapsed mb-menu-link" data-bs-toggle="collapse" href="#dropdown-menu-2">
<span> Mangalsutra</span>
<span class="btn-open-sub"></span>
</a>
<div class="collapse" id="dropdown-menu-2">
<ul class="sub-nav-menu">
<li><a class="menu-link-text active" href="subcategory_mangalsutra-JCFWX.html">
                                                     Mangalsutra
                                            </a>
</li>
</ul>
</div>
</li>
<li class="nav-mb-item">
<a aria-controls="dropdown-menu-one" aria-expanded="true" class="collapsed mb-menu-link" data-bs-toggle="collapse" href="#dropdown-menu-3">
<span> Harams</span>
<span class="btn-open-sub"></span>
</a>
<div class="collapse" id="dropdown-menu-3">
<ul class="sub-nav-menu">
<li><a class="menu-link-text active" href="subcategory_harams-eAVXI.html">
                                                     Harams
                                            </a>
</li>
</ul>
</div>
</li>
<li class="nav-mb-item">
<a aria-controls="dropdown-menu-one" aria-expanded="true" class="collapsed mb-menu-link" data-bs-toggle="collapse" href="#dropdown-menu-4">
<span> Invisible Chains and Pendants</span>
<span class="btn-open-sub"></span>
</a>
<div class="collapse" id="dropdown-menu-4">
<ul class="sub-nav-menu">
<li><a class="menu-link-text active" href="subcategory_invisible-chains-and-pendants-w0ONu.html">
                                                     Invisible Chains and Pendants
                                            </a>
</li>
</ul>
</div>
</li>
<li class="nav-mb-item">
<a aria-controls="dropdown-menu-one" aria-expanded="true" class="collapsed mb-menu-link" data-bs-toggle="collapse" href="#dropdown-menu-5">
<span> Hair Accessories</span>
<span class="btn-open-sub"></span>
</a>
<div class="collapse" id="dropdown-menu-5">
<ul class="sub-nav-menu">
<li><a class="menu-link-text active" href="subcategory_artificial-jasmin-strings-BvwWy.html">
                                                     Artificial Jasmine Strings
                                            </a>
</li>
<li><a class="menu-link-text active" href="subcategory_artificial-kanakambaram-strings-XSjX6.html">
                                                     Artificial Kanakambaram Strings
                                            </a>
</li>
</ul>
</div>
</li>
<li class="nav-mb-item">
<a aria-controls="dropdown-menu-one" aria-expanded="true" class="collapsed mb-menu-link" data-bs-toggle="collapse" href="#dropdown-menu-6">
<span> Saree</span>
<span class="btn-open-sub"></span>
</a>
<div class="collapse" id="dropdown-menu-6">
<ul class="sub-nav-menu">
<li><a class="menu-link-text active" href="subcategory_onam-saree-u9Mgb.html">
                                                     Onam Saree
                                            </a>
</li>
</ul>
</div>
</li>
</ul>
</div>
<div class="mb-other-content">
<div class="group-icon">
<a class="site-nav-icon" href="page_wishlist.html">
<svg class="icon" fill="none" height="18" viewbox="0 0 24 24" width="18" xmlns="http://www.w3.org/2000/svg">
<path d="M20.8401 4.60987C20.3294 4.09888 19.7229 3.69352 19.0555 3.41696C18.388 3.14039 17.6726 2.99805 16.9501 2.99805C16.2276 2.99805 15.5122 3.14039 14.8448 3.41696C14.1773 3.69352 13.5709 4.09888 13.0601 4.60987L12.0001 5.66987L10.9401 4.60987C9.90843 3.57818 8.50915 2.99858 7.05012 2.99858C5.59109 2.99858 4.19181 3.57818 3.16012 4.60987C2.12843 5.64156 1.54883 7.04084 1.54883 8.49987C1.54883 9.95891 2.12843 11.3582 3.16012 12.3899L4.22012 13.4499L12.0001 21.2299L19.7801 13.4499L20.8401 12.3899C21.3511 11.8791 21.7565 11.2727 22.033 10.6052C22.3096 9.93777 22.4519 9.22236 22.4519 8.49987C22.4519 7.77738 22.3096 7.06198 22.033 6.39452C21.7565 5.72706 21.3511 5.12063 20.8401 4.60987V4.60987Z" stroke="#181818" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
</svg>
                             Wishlist
                         </a>
<a class="site-nav-icon" href="page_login.html">
<svg class="icon" fill="none" height="18" viewbox="0 0 24 24" width="18" xmlns="http://www.w3.org/2000/svg">
<path d="M20 21V19C20 17.9391 19.5786 16.9217 18.8284 16.1716C18.0783 15.4214 17.0609 15 16 15H8C6.93913 15 5.92172 15.4214 5.17157 16.1716C4.42143 16.9217 4 17.9391 4 19V21" stroke="#181818" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
<path d="M12 11C14.2091 11 16 9.20914 16 7C16 4.79086 14.2091 3 12 3C9.79086 3 8 4.79086 8 7C8 9.20914 9.79086 11 12 11Z" stroke="#181818" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
</svg>
                             Login
                         </a>
</div>
<div class="mb-notice">
<a class="text-need" href="tel:">Need Help?</a>
</div>
<div class="mb-contact">
<p class="text-caption-1"></p>
<a class="tf-btn-default text-btn-uppercase" href="tel:"><i class="icon-arrowUpRight"></i></a>
</div>
<ul class="mb-info">
<li>
<i class="icon icon-mail"></i>
<p><a class="__cf_email__" data-cfemail="94f9f5f0f1f8fdf5f0f1e7fdf3fae7f5e1d4f3f9f5fdf8baf7fbf9" href="/cdn-cgi/l/email-protection">[email protected]</a></p>
</li>
<li>
<i class="icon icon-phone"></i>
<p></p>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
<!-- /mobile menu -->
</div>
<!-- Livewire Component wire-end:nV0V138hfmJqbpNBh6Gn -->
<!-- /Header -->
<!-- Slider -->
<div wire:id="sFrIkaC8xk9EzNJUp9zG" wire:initial-data='{"fingerprint":{"id":"sFrIkaC8xk9EzNJUp9zG","name":"home.products","locale":"en","path":"products","method":"GET","v":"acj"},"effects":{"listeners":[]},"serverMemo":{"children":[],"errors":[],"htmlHash":"908fd61a","data":{"limit":12,"sort":""},"dataMeta":[],"checksum":"3758b5a5084b329ce71f6ba62bde657f3827862e622d2058768d654c0e5e8d6d"}}'>
<div class="page-title">
<div class="container-full">
<div class="row">
<div class="col-12">
<h3 class="text-center heading">
                            All Products
                        </h3>
<ul class="breadcrumbs d-flex align-items-center justify-content-center">
<li>
<a class="link" href="">Homepage</a>
</li>
<li>
<i class="icon-arrRight"></i>
</li>
<li>
                               All Products
                            </li>
</ul>
</div>
</div>
</div>
</div>
<section class="flat-spacing" x-data="{ isDesktop: window.innerWidth &gt;= 1024 }" x-init="
            window.addEventListener('resize', () => {
                isDesktop = window.innerWidth &gt;= 1024
            })
         ">
<div class="container">
<div :class="isDesktop ? 'tf-col-4' : 'tf-col-2'" class="tf-grid-layout wrapper-shop">
<!-- card product 7 -->
<div class="grid card-product" data-wow-delay="0.2s">
<div class="card-product-wrapper">
<a class="product-img" href="product_ruby-stone-pendant-necklace-set-UoPTd.html">
<img alt="image-product" class="lazyload img-product" data-src="/assets/images/i2UfhHDtkOAbD653QGRqQD2xwkeKGOK75y-1779970129.jpeg" src="/assets/images/i2UfhHDtkOAbD653QGRqQD2xwkeKGOK75y-1779970129.jpeg"/>
<img alt="image-product" class="lazyload img-hover" data-src="/assets/images/i2UfhHDtkOAbD653QGRqQD2xwkeKGOK75y-1779970129.jpeg" src="/assets/images/i2UfhHDtkOAbD653QGRqQD2xwkeKGOK75y-1779970129.jpeg"/>
</a>
<div class="variant-wrap size-list">
<ul class="variant-box">
<li class="size-item">
                                            Free  size
                                        </li>
</ul>
</div>
<div class="list-product-btn">
</div>
<div class="list-btn-main">
<a class="btn-main-product" href="product_ruby-stone-pendant-necklace-set-UoPTd.html">
                                    View Details
                                </a>
</div>
</div>
<div class="card-product-info">
<a class="title link" href="product_ruby-stone-pendant-necklace-set-UoPTd.html">
                                Ruby Stone Pendant Necklace Set
                            </a>
<span class="price">
                                                                AU$
                                25
                            </span>
<ul class="list-color-product">
</ul>
</div>
</div>
<!-- card product 7 -->
<div class="grid card-product" data-wow-delay="0.2s">
<div class="card-product-wrapper">
<a class="product-img" href="product_emerald-kemp-pendant-necklace-ov4jO.html">
<img alt="image-product" class="lazyload img-product" data-src="/assets/images/s1bchakf55wCbcX80U86JDz8OGLtnI7M1y-1779953968.jpeg" src="/assets/images/s1bchakf55wCbcX80U86JDz8OGLtnI7M1y-1779953968.jpeg"/>
<img alt="image-product" class="lazyload img-hover" data-src="/assets/images/s1bchakf55wCbcX80U86JDz8OGLtnI7M1y-1779953968.jpeg" src="/assets/images/s1bchakf55wCbcX80U86JDz8OGLtnI7M1y-1779953968.jpeg"/>
</a>
<div class="variant-wrap size-list">
<ul class="variant-box">
<li class="size-item">
                                            Free  size
                                        </li>
</ul>
</div>
<div class="list-product-btn">
</div>
<div class="list-btn-main">
<a class="btn-main-product" href="product_emerald-kemp-pendant-necklace-ov4jO.html">
                                    View Details
                                </a>
</div>
</div>
<div class="card-product-info">
<a class="title link" href="product_emerald-kemp-pendant-necklace-ov4jO.html">
                                Emerald Kemp Pendant Necklace
                            </a>
<span class="price">
                                                                AU$
                                25
                            </span>
<ul class="list-color-product">
</ul>
</div>
</div>
<!-- card product 7 -->
<div class="grid card-product" data-wow-delay="0.2s">
<div class="card-product-wrapper">
<a class="product-img" href="/product/ruby-drop-pendant-necklace-set-n7A2k">
<img alt="image-product" class="lazyload img-product" data-src="/assets/images/fiGnFAIu69oqpnIdKrdTNnJ8rxHHi4PzlG-1779954047.jpeg" src="/assets/images/fiGnFAIu69oqpnIdKrdTNnJ8rxHHi4PzlG-1779954047.jpeg"/>
<img alt="image-product" class="lazyload img-hover" data-src="/assets/images/fiGnFAIu69oqpnIdKrdTNnJ8rxHHi4PzlG-1779954047.jpeg" src="/assets/images/fiGnFAIu69oqpnIdKrdTNnJ8rxHHi4PzlG-1779954047.jpeg"/>
</a>
<div class="variant-wrap size-list">
<ul class="variant-box">
<li class="size-item">
                                            Free  size
                                        </li>
</ul>
</div>
<div class="list-product-btn">
</div>
<div class="list-btn-main">
<a class="btn-main-product" href="/product/ruby-drop-pendant-necklace-set-n7A2k">
                                    View Details
                                </a>
</div>
</div>
<div class="card-product-info">
<a class="title link" href="/product/ruby-drop-pendant-necklace-set-n7A2k">
                                Ruby Drop Pendant Necklace Set
                            </a>
<span class="price">
                                                                AU$
                                23
                            </span>
<ul class="list-color-product">
</ul>
</div>
</div>
<!-- card product 7 -->
<div class="grid card-product" data-wow-delay="0.2s">
<div class="card-product-wrapper">
<a class="product-img" href="/product/stone-pendant-necklace-set-fvzbv">
<img alt="image-product" class="lazyload img-product" data-src="/assets/images/VeRST2TTBLXCkdn0JnQh9mqTzCMAnOcGsK-1779954135.jpeg" src="/assets/images/VeRST2TTBLXCkdn0JnQh9mqTzCMAnOcGsK-1779954135.jpeg"/>
<img alt="image-product" class="lazyload img-hover" data-src="/assets/images/VeRST2TTBLXCkdn0JnQh9mqTzCMAnOcGsK-1779954135.jpeg" src="/assets/images/VeRST2TTBLXCkdn0JnQh9mqTzCMAnOcGsK-1779954135.jpeg"/>
</a>
<div class="variant-wrap size-list">
<ul class="variant-box">
<li class="size-item">
                                            Free  size
                                        </li>
</ul>
</div>
<div class="list-product-btn">
</div>
<div class="list-btn-main">
<a class="btn-main-product" href="/product/stone-pendant-necklace-set-fvzbv">
                                    View Details
                                </a>
</div>
</div>
<div class="card-product-info">
<a class="title link" href="/product/stone-pendant-necklace-set-fvzbv">
                                Stone Pendant Necklace Set
                            </a>
<span class="price">
                                                                AU$
                                25
                            </span>
<ul class="list-color-product">
</ul>
</div>
</div>
<!-- card product 7 -->
<div class="grid card-product" data-wow-delay="0.2s">
<div class="card-product-wrapper">
<a class="product-img" href="/product/meenakari-necklace-set-0zWc1">
<img alt="image-product" class="lazyload img-product" data-src="/assets/images/zuBu453DmHThL88lTrBNCdVyC03Ek8wXrJ-1779955097.jpeg" src="/assets/images/zuBu453DmHThL88lTrBNCdVyC03Ek8wXrJ-1779955097.jpeg"/>
<img alt="image-product" class="lazyload img-hover" data-src="/assets/images/zuBu453DmHThL88lTrBNCdVyC03Ek8wXrJ-1779955097.jpeg" src="/assets/images/zuBu453DmHThL88lTrBNCdVyC03Ek8wXrJ-1779955097.jpeg"/>
</a>
<div class="variant-wrap size-list">
<ul class="variant-box">
<li class="size-item">
                                            Free  size
                                        </li>
</ul>
</div>
<div class="list-product-btn">
</div>
<div class="list-btn-main">
<a class="btn-main-product" href="/product/meenakari-necklace-set-0zWc1">
                                    View Details
                                </a>
</div>
</div>
<div class="card-product-info">
<a class="title link" href="/product/meenakari-necklace-set-0zWc1">
                                Meenakari Necklace Set
                            </a>
<span class="price">
                                                                AU$
                                33
                            </span>
<ul class="list-color-product">
</ul>
</div>
</div>
<!-- card product 7 -->
<div class="grid card-product" data-wow-delay="0.2s">
<div class="card-product-wrapper">
<a class="product-img" href="/product/pearl-drop-kemp-necklace-set-xZVSZ">
<img alt="image-product" class="lazyload img-product" data-src="/assets/images/L5jsAafRQoSmfR52v0iRGyw3g5OJSTYxBk-1779955539.jpeg" src="/assets/images/L5jsAafRQoSmfR52v0iRGyw3g5OJSTYxBk-1779955539.jpeg"/>
<img alt="image-product" class="lazyload img-hover" data-src="/assets/images/L5jsAafRQoSmfR52v0iRGyw3g5OJSTYxBk-1779955539.jpeg" src="/assets/images/L5jsAafRQoSmfR52v0iRGyw3g5OJSTYxBk-1779955539.jpeg"/>
</a>
<div class="variant-wrap size-list">
<ul class="variant-box">
<li class="size-item">
                                            Free  size
                                        </li>
</ul>
</div>
<div class="list-product-btn">
</div>
<div class="list-btn-main">
<a class="btn-main-product" href="/product/pearl-drop-kemp-necklace-set-xZVSZ">
                                    View Details
                                </a>
</div>
</div>
<div class="card-product-info">
<a class="title link" href="/product/pearl-drop-kemp-necklace-set-xZVSZ">
                                Pearl Drop Kemp Necklace Set
                            </a>
<span class="price">
                                                                AU$
                                28
                            </span>
<ul class="list-color-product">
</ul>
</div>
</div>
<!-- card product 7 -->
<div class="grid card-product" data-wow-delay="0.2s">
<div class="card-product-wrapper">
<a class="product-img" href="/product/temple-style-short-haram-Lb34Z">
<img alt="image-product" class="lazyload img-product" data-src="/assets/images/F7IKnFzMuzBja2gxFPr5j18f9fo8UXnU6N-1779955698.jpeg" src="/assets/images/F7IKnFzMuzBja2gxFPr5j18f9fo8UXnU6N-1779955698.jpeg"/>
<img alt="image-product" class="lazyload img-hover" data-src="/assets/images/F7IKnFzMuzBja2gxFPr5j18f9fo8UXnU6N-1779955698.jpeg" src="/assets/images/F7IKnFzMuzBja2gxFPr5j18f9fo8UXnU6N-1779955698.jpeg"/>
</a>
<div class="variant-wrap size-list">
<ul class="variant-box">
<li class="size-item">
                                            Free  size
                                        </li>
</ul>
</div>
<div class="list-product-btn">
</div>
<div class="list-btn-main">
<a class="btn-main-product" href="/product/temple-style-short-haram-Lb34Z">
                                    View Details
                                </a>
</div>
</div>
<div class="card-product-info">
<a class="title link" href="/product/temple-style-short-haram-Lb34Z">
                                Temple Style Short Haram
                            </a>
<span class="price">
                                                                AU$
                                30
                            </span>
<ul class="list-color-product">
</ul>
</div>
</div>
<!-- card product 7 -->
<div class="grid card-product" data-wow-delay="0.2s">
<div class="card-product-wrapper">
<a class="product-img" href="/product/lakshmi-kasu-mala-JapNW">
<img alt="image-product" class="lazyload img-product" data-src="/assets/images/wmIZ2kSpigAJm0ktlAX7GAxClUzSMydMpO-1779955758.jpeg" src="/assets/images/wmIZ2kSpigAJm0ktlAX7GAxClUzSMydMpO-1779955758.jpeg"/>
<img alt="image-product" class="lazyload img-hover" data-src="/assets/images/wmIZ2kSpigAJm0ktlAX7GAxClUzSMydMpO-1779955758.jpeg" src="/assets/images/wmIZ2kSpigAJm0ktlAX7GAxClUzSMydMpO-1779955758.jpeg"/>
</a>
<div class="variant-wrap size-list">
<ul class="variant-box">
<li class="size-item">
                                            Free  size
                                        </li>
</ul>
</div>
<div class="list-product-btn">
</div>
<div class="list-btn-main">
<a class="btn-main-product" href="/product/lakshmi-kasu-mala-JapNW">
                                    View Details
                                </a>
</div>
</div>
<div class="card-product-info">
<a class="title link" href="/product/lakshmi-kasu-mala-JapNW">
                                Lakshmi Kasu Mala
                            </a>
<span class="price">
                                                                AU$
                                30
                            </span>
<ul class="list-color-product">
</ul>
</div>
</div>
<!-- card product 7 -->
<div class="grid card-product" data-wow-delay="0.2s">
<div class="card-product-wrapper">
<a class="product-img" href="/product/traditional-temple-necklace-set-zw613">
<img alt="image-product" class="lazyload img-product" data-src="/assets/images/pQUsDw70YqD70BbkejUU2bi4TJM5QIyNEv-1779955813.jpeg" src="/assets/images/pQUsDw70YqD70BbkejUU2bi4TJM5QIyNEv-1779955813.jpeg"/>
<img alt="image-product" class="lazyload img-hover" data-src="/assets/images/pQUsDw70YqD70BbkejUU2bi4TJM5QIyNEv-1779955813.jpeg" src="/assets/images/pQUsDw70YqD70BbkejUU2bi4TJM5QIyNEv-1779955813.jpeg"/>
</a>
<div class="variant-wrap size-list">
<ul class="variant-box">
<li class="size-item">
                                            Free  size
                                        </li>
</ul>
</div>
<div class="list-product-btn">
</div>
<div class="list-btn-main">
<a class="btn-main-product" href="/product/traditional-temple-necklace-set-zw613">
                                    View Details
                                </a>
</div>
</div>
<div class="card-product-info">
<a class="title link" href="/product/traditional-temple-necklace-set-zw613">
                                Traditional Temple Necklace Set
                            </a>
<span class="price">
                                                                AU$
                                28
                            </span>
<ul class="list-color-product">
</ul>
</div>
</div>
<!-- card product 7 -->
<div class="grid card-product" data-wow-delay="0.2s">
<div class="card-product-wrapper">
<a class="product-img" href="/product/temple-lakshmi-jewellery-U43il">
<img alt="image-product" class="lazyload img-product" data-src="/assets/images/3PONp5XADcLARglTJw3ben3Nt2PjCEzdQy-1779955938.jpeg" src="/assets/images/3PONp5XADcLARglTJw3ben3Nt2PjCEzdQy-1779955938.jpeg"/>
<img alt="image-product" class="lazyload img-hover" data-src="/assets/images/3PONp5XADcLARglTJw3ben3Nt2PjCEzdQy-1779955938.jpeg" src="/assets/images/3PONp5XADcLARglTJw3ben3Nt2PjCEzdQy-1779955938.jpeg"/>
</a>
<div class="variant-wrap size-list">
<ul class="variant-box">
<li class="size-item">
                                            Free  size
                                        </li>
</ul>
</div>
<div class="list-product-btn">
</div>
<div class="list-btn-main">
<a class="btn-main-product" href="/product/temple-lakshmi-jewellery-U43il">
                                    View Details
                                </a>
</div>
</div>
<div class="card-product-info">
<a class="title link" href="/product/temple-lakshmi-jewellery-U43il">
                                Temple Lakshmi Jewellery
                            </a>
<span class="price">
                                                                AU$
                                30
                            </span>
<ul class="list-color-product">
</ul>
</div>
</div>
<!-- card product 7 -->
<div class="grid card-product" data-wow-delay="0.2s">
<div class="card-product-wrapper">
<a class="product-img" href="/product/peacock-attigai-VteoJ">
<img alt="image-product" class="lazyload img-product" data-src="/assets/images/4IA8YL64Ku9w4fbftVsDRaSBggAD7BUtOF-1779956013.jpeg" src="/assets/images/4IA8YL64Ku9w4fbftVsDRaSBggAD7BUtOF-1779956013.jpeg"/>
<img alt="image-product" class="lazyload img-hover" data-src="/assets/images/4IA8YL64Ku9w4fbftVsDRaSBggAD7BUtOF-1779956013.jpeg" src="/assets/images/4IA8YL64Ku9w4fbftVsDRaSBggAD7BUtOF-1779956013.jpeg"/>
</a>
<div class="variant-wrap size-list">
<ul class="variant-box">
<li class="size-item">
                                            Free  size
                                        </li>
</ul>
</div>
<div class="list-product-btn">
</div>
<div class="list-btn-main">
<a class="btn-main-product" href="/product/peacock-attigai-VteoJ">
                                    View Details
                                </a>
</div>
</div>
<div class="card-product-info">
<a class="title link" href="/product/peacock-attigai-VteoJ">
                                Peacock Attigai
                            </a>
<span class="price">
                                                                AU$
                                30
                            </span>
<ul class="list-color-product">
</ul>
</div>
</div>
<!-- card product 7 -->
<div class="grid card-product" data-wow-delay="0.2s">
<div class="card-product-wrapper">
<a class="product-img" href="/product/american-diamond-zircon-necklace-set-with-colored-stones-710fa">
<img alt="image-product" class="lazyload img-product" data-src="/assets/images/9KMO3CJRAnO5COAat7tXy2rNDH7DiuKtEu-1779956067.jpeg" src="/assets/images/9KMO3CJRAnO5COAat7tXy2rNDH7DiuKtEu-1779956067.jpeg"/>
<img alt="image-product" class="lazyload img-hover" data-src="/assets/images/9KMO3CJRAnO5COAat7tXy2rNDH7DiuKtEu-1779956067.jpeg" src="/assets/images/9KMO3CJRAnO5COAat7tXy2rNDH7DiuKtEu-1779956067.jpeg"/>
</a>
<div class="variant-wrap size-list">
<ul class="variant-box">
<li class="size-item">
                                            Free  size
                                        </li>
</ul>
</div>
<div class="list-product-btn">
</div>
<div class="list-btn-main">
<a class="btn-main-product" href="/product/american-diamond-zircon-necklace-set-with-colored-stones-710fa">
                                    View Details
                                </a>
</div>
</div>
<div class="card-product-info">
<a class="title link" href="/product/american-diamond-zircon-necklace-set-with-colored-stones-710fa">
                                American Diamond Zircon Necklace Set with Colored Stones
                            </a>
<span class="price">
                                                                AU$
                                32
                            </span>
<ul class="list-color-product">
</ul>
</div>
</div>
</div>
<div class="pt-4 text-center wd-load view-more-button">
<button class="tf-loading btn-loadmore tf-btn btn-reset" style="" wire:click="$set('limit', '24')"><span class="text text-btn text-btn-uppercase">Load more</span></button>
</div>
</div>
</section>
</div>
<!-- Livewire Component wire-end:sFrIkaC8xk9EzNJUp9zG -->
<!-- /Iconbox -->
<!-- Footer -->
<footer class="footer" id="footer">
<div class="footer-wrap">
<div class="footer-body">
<div class="container">
<div class="row">
<div class="col-lg-4">
<div class="footer-infor">
<div class="footer-logo">
<a href="">
<img alt="" src="/assets/images/I9uMBss51oRgkCJSSWlcQGTPz9r4vqvquN-1778432057.png" style="height: 90px;"/>
</a>
</div>
<div class="footer-address">
<p>
</p>
<a class="tf-btn-default fw-6" href="#">
<i class="icon-arrowUpRight"></i></a>
</div>
<ul class="footer-info">
<li>
<i class="icon-mail"></i>
<p>
<a class="__cf_email__" data-cfemail="b5d8d4d1d0d9dcd4d1d0c6dcd2dbc6d4c0f5d2d8d4dcd99bd6dad8" href="/cdn-cgi/l/email-protection">[email protected]</a>
</p>
</li>
<li>
<i class="icon-phone"></i>
<p>
</p>
</li>
</ul>
<ul class="tf-social-icon">
<li><a class="social-instagram" href="https://www.instagram.com/madelia.designs.aus?utm_source=qr&amp;igsh=c3JqamR0cmY3MXVk"><i class="icon icon-instagram"></i></a></li>
</ul>
</div>
</div>
<div class="col-lg-4">
<div class="footer-menu">
<div class="footer-col-block">
<div class="footer-heading text-button footer-heading-mobile">
                                    Categories
                                </div>
<div class="tf-collapse-content">
<ul class="footer-menu-list">
<li class="text-caption-1">
<a class="footer-menu_item" href="category_necklace-sets-and-chokers-HKCSS.html">Necklace Sets and Chokers</a>
</li>
<li class="text-caption-1">
<a class="footer-menu_item" href="category_mangalsutra-0Brv3.html">Mangalsutra</a>
</li>
<li class="text-caption-1">
<a class="footer-menu_item" href="category_harams-AUy1m.html">Harams</a>
</li>
<li class="text-caption-1">
<a class="footer-menu_item" href="category_invisible-chains-and-pendants-tidrw.html">Invisible Chains and Pendants</a>
</li>
<li class="text-caption-1">
<a class="footer-menu_item" href="category_hair-accessories-ZsjhM.html">Hair Accessories</a>
</li>
<li class="text-caption-1">
<a class="footer-menu_item" href="category_saree-Q3IJM.html">Saree</a>
</li>
</ul>
</div>
</div>
<div class="footer-col-block">
<div class="footer-heading text-button footer-heading-mobile">
                                    Information
                                </div>
<div class="tf-collapse-content">
<ul class="footer-menu-list">
<li class="text-caption-1">
<a class="footer-menu_item" href="page_return-policy.html"> Return Policy</a>
</li>
<li class="text-caption-1">
<a class="footer-menu_item" href="page_shipping-policy.html"> Shipping Policy</a>
</li>
<li class="text-caption-1">
<a class="footer-menu_item" href="page_privacy-policy.html"> Privacy Policy</a>
</li>
</ul>
</div>
</div>
</div>
</div>
<div class="col-lg-4">
<div class="footer-col-block">
<div class="footer-heading text-button footer-heading-mobile">
                                Newletter
                            </div>
<div class="tf-collapse-content">
<div class="footer-newsletter">
<p class="text-caption-1">Sign up for our newsletter and get 10% off your first
                                        purchase</p>
<form @submit.prevent="submitForm" accept-charset="utf-8" class="form-newsletter subscribe-form" data-mailchimp="true" method="post" x-data="subscribeForm()">
<div class="subscribe-content">
<fieldset class="email">
<input aria-required="true" class="subscribe-email" name="email-form" placeholder="Enter your e-mail" tabindex="0" type="email" x-model="email"/>
</fieldset>
<div class="button-submit">
<button class="subscribe-button" type="submit">
<template x-if="!loading">
<i class="icon icon-arrowUpRight"></i>
</template>
<template x-if="loading">
<span class="animate-pulse">...</span>
</template>
</button>
</div>
</div>
<div class="subscribe-msg" x-text="message"></div>
</form>
<div class="tf-cart-checkbox">
<div class="tf-checkbox-wrapp">
<input checked="" class="" disabled="" id="footer-Form_agree" name="agree_checkbox" type="checkbox"/>
<div>
<i class="icon-check"></i>
</div>
</div>
<label class="text-caption-1" for="footer-Form_agree">
                                            By clicking subcribe, you agree to the <a class="fw-6 link" href="">Terms of Service</a> and <a class="fw-6 link" href="#">Privacy Policy</a>.
                                        </label>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="footer-bottom">
<div class="container">
<div class="row">
<div class="col-12">
<div class="footer-bottom-wrap">
<div class="left">
<p class="text-caption-1">
                                    © 2026 madeliadesigns. All Rights Reserved.
                                </p>
<div class="tf-cur justify-content-end">
</div>
</div>
<div style="display: flex;gap: 8px;">
<p class="text-caption-1">Payment:</p>
<ul>
<li>
<img alt="" src="" style="height: 65px;"/>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</footer>
<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>
    function subscribeForm() {
        return {
            email: '',
            message: '',
            loading: false,

            async submitForm() {
                this.loading = true;
                this.message = '';

                try {
                    const response = await fetch('/api/subscribe', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'Accept': 'application/json',
                            'X-CSRF-TOKEN': document.querySelector('meta[name=csrf-token]')?.content
                        },
                        body: JSON.stringify({
                            email: this.email
                        })
                    });

                    const data = await response.json();

                    if (response.ok) {
                        this.message = data.message ?? 'Subscribed successfully!';
                        this.email = '';
                    } else {
                        this.message = data.message ?? 'Subscription failed.';
                    }
                } catch (error) {
                    this.message = 'Something went wrong.';
                } finally {
                    this.loading = false;
                }
            }
        }
    }
</script>
<!-- /Footer -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" rel="stylesheet"/>
<div class="toast-container"></div>
<style>


    @keyframes fadeSlideIn {
  0% {
    opacity: 0;
    transform: translateX(calc(100% + 30px)) scale(0.95);
  }
  100% {
    opacity: 1;
    transform: translateX(0%) scale(1);
  }
}

@keyframes fadeSlideOut {
  0% {
    opacity: 1;
    transform: translateX(0%) scale(1);
  }
  100% {
    opacity: 0;
    transform: translateX(calc(100% + 30px)) scale(0.95);
  }
}

  .toast-container {
  position: fixed;
  top: 25px;
  right: 30px;
  display: flex;
  flex-direction: column;
  gap: 10px;
  z-index: 1000;
}

.toast {
  position: relative;
  width: 320px;
  border-radius: 12px;
  background: #fff;
  padding: 13px;
  box-shadow: 0 6px 20px -5px rgba(0, 0, 0, 0.1);
  border: 1px solid #e0e0e0;
  display: flex;
  overflow-x: hidden;
  align-items: center;
  transform: translateX(calc(100% + 30px));
  transition: all 0.5s cubic-bezier(0.68, -0.55, 0.265, 1.35);
}

.toast.active {
  animation: fadeSlideIn 0.5s ease forwards;
  transform: translateX(0%);
  display: inherit;
}

.toast.removing {
  animation: fadeSlideOut 0.4s ease forwards;
}

.toast .toast-content {
  display: flex;
  align-items: start;
}

.toast-content .icon {
  display: flex;
  align-items: center;
  justify-content: center;
  height: 35px;
  min-width: 35px;
  font-size: 35px;
  color: #fff;
}

.toast-content .message {
  display: flex;
  flex-direction: column;
  margin-left: 15px;
}

.message .text {
  font-size: 13px;
  font-weight: 400;
  color: #666666;
}

.message .text.text-1 {
  font-weight: 600;
  color: #333;
}

.toast .close {
  position: absolute;
  top: 10px;
  right: 15px;
  padding: 5px;
  cursor: pointer;
  opacity: 0.7;
}

.toast .close:hover {
  opacity: 1;
}

.toast .progress {
  position: absolute;
  bottom: 0;
  left: 0;
  height: 3px;
  width: 100%;
}

.toast .progress:before {
  content: "";
  position: absolute;
  bottom: 0;
  right: 0;
  height: 100%;
  width: 100%;
  background-color: #4070f4;
}

.progress.active:before {
  animation: progress 5s linear forwards;
}

@keyframes progress {
  100% {
    right: 100%;
  }
}

/* Toast Type Colors */
.toast.success .icon { color: rgb(25 135 84); }
.toast.error .icon { color: rgb(220 53 69); }
.toast.warning .icon { color: rgb(255 193 7); }
.toast.info .icon { color: rgb(13 202 240); }

.toast.success .progress:before { background: rgb(25 135 84); }
.toast.error .progress:before { background: rgb(220 53 69); }
.toast.warning .progress:before { background: rgb(255 193 7); }
.toast.info .progress:before { background: rgb(13 202 240); }


</style>
<script>

    function showToast(message, type = "success") {
        const toastContainer = document.querySelector(".toast-container");

        const toast = document.createElement("div");
        toast.classList.add("toast", type);
        toast.classList.add("asset-toast")

        toast.innerHTML = `
          <div class="toast-content">
            <i class="bi icon bi-${getIcon(type)}"></i>
            <div class="message">
              <span class="text text-1">${capitalize(type)}</span>
              <span class="text text-2">${message}</span>
            </div>
          </div>
          <i class="bi bi-x-lg close"></i>
          <div class="progress active"></div>
        `;

        toastContainer.appendChild(toast);
        let showToast = setTimeout(() => {
          void toast.offsetHeight;
          toast.classList.add("active");
        }, 1);

        const progress = toast.querySelector(".progress");
        const closeIcon = toast.querySelector(".close");

        // Auto-remove toast after 5s
        const timer1 = setTimeout(() => {
          toast.classList.remove("removing");
          toast.classList.remove("active");
        }, 5000);

        const timer2 = setTimeout(() => {
          toast.classList.remove("removing");
          progress.classList.remove("active");
          setTimeout(() => toast.remove(), 400);
        }, 5300);

        // Manual close
        closeIcon.addEventListener("click", () => {
          toast.classList.remove("active");
          clearTimeout(timer1);
          clearTimeout(timer2);
          clearTimeout(showToast);
          setTimeout(() => toast.remove(), 400);
        });
      }

      function getIcon(type) {
        switch (type) {
          case "success": return "check-circle-fill";
          case "error": return "x-circle-fill";
          case "warning": return "exclamation-triangle-fill";
          case "info": return "info-circle-fill";
          default: return "check-circle-fill";
        }
      }

      function capitalize(str) {
        return str.charAt(0).toUpperCase() + str.slice(1);
      }




      // Example Usage:
      

       window.addEventListener('notify:front', event => {
          showToast(event.detail.message, event.detail.type ?? 'success');
       })

</script>
<!-- toolbar-bottom -->
<div class="tf-toolbar-bottom">
<div class="toolbar-item">
<a href="">
<div class="toolbar-icon">
<svg class="icon" fill="none" height="20" viewbox="0 0 20 20" width="20" xmlns="http://www.w3.org/2000/svg">
<path d="M8.125 3.125H4.375C4.04348 3.125 3.72554 3.2567 3.49112 3.49112C3.2567 3.72554 3.125 4.04348 3.125 4.375V8.125C3.125 8.45652 3.2567 8.77446 3.49112 9.00888C3.72554 9.2433 4.04348 9.375 4.375 9.375H8.125C8.45652 9.375 8.77446 9.2433 9.00888 9.00888C9.2433 8.77446 9.375 8.45652 9.375 8.125V4.375C9.375 4.04348 9.2433 3.72554 9.00888 3.49112C8.77446 3.2567 8.45652 3.125 8.125 3.125ZM8.125 8.125H4.375V4.375H8.125V8.125ZM15.625 3.125H11.875C11.5435 3.125 11.2255 3.2567 10.9911 3.49112C10.7567 3.72554 10.625 4.04348 10.625 4.375V8.125C10.625 8.45652 10.7567 8.77446 10.9911 9.00888C11.2255 9.2433 11.5435 9.375 11.875 9.375H15.625C15.9565 9.375 16.2745 9.2433 16.5089 9.00888C16.7433 8.77446 16.875 8.45652 16.875 8.125V4.375C16.875 4.04348 16.7433 3.72554 16.5089 3.49112C16.2745 3.2567 15.9565 3.125 15.625 3.125ZM15.625 8.125H11.875V4.375H15.625V8.125ZM8.125 10.625H4.375C4.04348 10.625 3.72554 10.7567 3.49112 10.9911C3.2567 11.2255 3.125 11.5435 3.125 11.875V15.625C3.125 15.9565 3.2567 16.2745 3.49112 16.5089C3.72554 16.7433 4.04348 16.875 4.375 16.875H8.125C8.45652 16.875 8.77446 16.7433 9.00888 16.5089C9.2433 16.2745 9.375 15.9565 9.375 15.625V11.875C9.375 11.5435 9.2433 11.2255 9.00888 10.9911C8.77446 10.7567 8.45652 10.625 8.125 10.625ZM8.125 15.625H4.375V11.875H8.125V15.625ZM15.625 10.625H11.875C11.5435 10.625 11.2255 10.7567 10.9911 10.9911C10.7567 11.2255 10.625 11.5435 10.625 11.875V15.625C10.625 15.9565 10.7567 16.2745 10.9911 16.5089C11.2255 16.7433 11.5435 16.875 11.875 16.875H15.625C15.9565 16.875 16.2745 16.7433 16.5089 16.5089C16.7433 16.2745 16.875 15.9565 16.875 15.625V11.875C16.875 11.5435 16.7433 11.2255 16.5089 10.9911C16.2745 10.7567 15.9565 10.625 15.625 10.625ZM15.625 15.625H11.875V11.875H15.625V15.625Z" fill="#4D4E4F"></path>
</svg>
</div>
<div class="toolbar-label">Home</div>
</a>
</div>
<div class="toolbar-item">
<a href="page_my-account.html">
<div class="toolbar-icon">
<svg class="icon" fill="none" height="20" stroke="#4D4E4F" stroke-width="1.8" viewbox="0 0 24 24" width="20" xmlns="http://www.w3.org/2000/svg">
<circle cx="12" cy="7" r="4" stroke-linecap="round" stroke-linejoin="round"></circle>
<path d="M4 20c0-4 3.5-7 8-7s8 3 8 7" stroke-linecap="round" stroke-linejoin="round"></path>
</svg>
</div>
<div class="toolbar-label">User</div>
</a>
</div>
<div class="toolbar-item">
<a data-bs-toggle="modal" href="#search">
<div class="toolbar-icon">
<svg class="icon" fill="none" height="20" viewbox="0 0 20 20" width="20" xmlns="http://www.w3.org/2000/svg">
<path d="M17.9419 17.058L14.0302 13.1471C15.1639 11.7859 15.7293 10.04 15.6086 8.27263C15.488 6.50524 14.6906 4.85241 13.3823 3.65797C12.074 2.46353 10.3557 1.81944 8.58462 1.85969C6.81357 1.89994 5.12622 2.62143 3.87358 3.87407C2.62094 5.12671 1.89945 6.81406 1.8592 8.5851C1.81895 10.3561 2.46304 12.0745 3.65748 13.3828C4.85192 14.691 6.50475 15.4884 8.27214 15.6091C10.0395 15.7298 11.7854 15.1644 13.1466 14.0306L17.0575 17.9424C17.1156 18.0004 17.1845 18.0465 17.2604 18.0779C17.3363 18.1094 17.4176 18.1255 17.4997 18.1255C17.5818 18.1255 17.6631 18.1094 17.739 18.0779C17.8149 18.0465 17.8838 18.0004 17.9419 17.9424C17.9999 17.8843 18.046 17.8154 18.0774 17.7395C18.1089 17.6636 18.125 17.5823 18.125 17.5002C18.125 17.4181 18.1089 17.3367 18.0774 17.2609C18.046 17.185 17.9999 17.1161 17.9419 17.058ZM3.12469 8.75018C3.12469 7.63766 3.45459 6.55012 4.07267 5.6251C4.69076 4.70007 5.56926 3.9791 6.5971 3.55336C7.62493 3.12761 8.75593 3.01622 9.84707 3.23326C10.9382 3.4503 11.9405 3.98603 12.7272 4.7727C13.5138 5.55937 14.0496 6.56165 14.2666 7.6528C14.4837 8.74394 14.3723 9.87494 13.9465 10.9028C13.5208 11.9306 12.7998 12.8091 11.8748 13.4272C10.9497 14.0453 9.86221 14.3752 8.74969 14.3752C7.25836 14.3735 5.82858 13.7804 4.77404 12.7258C3.71951 11.6713 3.12634 10.2415 3.12469 8.75018Z" fill="#4D4E4F"></path>
</svg>
</div>
<div class="toolbar-label">Search</div>
</a>
</div>
<div class="toolbar-item">
<a href="page_wishlist.html">
<div class="toolbar-icon">
<svg class="icon" fill="none" height="20" viewbox="0 0 20 20" width="20" xmlns="http://www.w3.org/2000/svg">
<path d="M17.4215 4.45326C16.5724 3.60627 15.4225 3.12997 14.2231 3.1285C13.0238 3.12704 11.8727 3.60054 11.0215 4.44545L9.99965 5.39467L8.97699 4.44232C8.12602 3.59373 6.9728 3.11795 5.77103 3.11963C4.56926 3.12132 3.41738 3.60034 2.56879 4.45131C1.7202 5.30228 1.24441 6.4555 1.2461 7.65727C1.24778 8.85904 1.7268 10.0109 2.57777 10.8595L9.55824 17.9423C9.6164 18.0014 9.68572 18.0483 9.76217 18.0803C9.83862 18.1123 9.92067 18.1288 10.0036 18.1288C10.0864 18.1288 10.1685 18.1123 10.2449 18.0803C10.3214 18.0483 10.3907 18.0014 10.4489 17.9423L17.4215 10.8595C18.2707 10.0098 18.7477 8.85768 18.7477 7.65639C18.7477 6.45509 18.2707 5.30296 17.4215 4.45326ZM16.5348 9.98139L9.99965 16.6095L3.46059 9.97514C2.8452 9.35975 2.49948 8.52511 2.49948 7.65482C2.49948 6.78454 2.8452 5.9499 3.46059 5.33451C4.07597 4.71913 4.91061 4.37341 5.7809 4.37341C6.65118 4.37341 7.48583 4.71913 8.10121 5.33451L8.11684 5.35014L9.57387 6.7056C9.68953 6.81324 9.84166 6.87307 9.99965 6.87307C10.1576 6.87307 10.3098 6.81324 10.4254 6.7056L11.8825 5.35014L11.8981 5.33451C12.5139 4.71954 13.3488 4.37438 14.219 4.37497C15.0893 4.37555 15.9237 4.72184 16.5387 5.33764C17.1537 5.95344 17.4988 6.78831 17.4983 7.6586C17.4977 8.52888 17.1514 9.36329 16.5356 9.97826L16.5348 9.98139Z" fill="#4D4E4F"></path>
</svg>
<!-- <div class="toolbar-count">1</div> -->
</div>
<div class="toolbar-label">Wishlist</div>
</a>
</div>
<div class="toolbar-item">
<a data-bs-toggle="modal" href="#shoppingCart">
<div class="toolbar-icon">
<svg class="icon" fill="none" height="20" viewbox="0 0 20 20" width="20" xmlns="http://www.w3.org/2000/svg">
<path d="M13.75 8.23389V4.48389C13.75 3.48932 13.3549 2.5355 12.6517 1.83224C11.9484 1.12897 10.9946 0.733887 10 0.733887C9.00544 0.733887 8.05161 1.12897 7.34835 1.83224C6.64509 2.5355 6.25 3.48932 6.25 4.48389V8.23389M3.4375 6.35889H16.5625L17.5 17.6089H2.5L3.4375 6.35889Z" stroke="#4D4E4F" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.2">
</path>
</svg>
</div>
<div class="toolbar-label">Cart</div>
</a>
</div>
</div>
<!-- /toolbar-bottom -->

<!-- auto popup  -->
<!-- /auto popup  -->
<!-- search -->
<div>
<div wire:id="S1gMm6t8wWSK6jwX4r1B" wire:initial-data='{"fingerprint":{"id":"S1gMm6t8wWSK6jwX4r1B","name":"common.dynamic-widget","locale":"en","path":"products","method":"GET","v":"acj"},"effects":{"listeners":[]},"serverMemo":{"children":[],"errors":[],"htmlHash":"f2d65e9d","data":{"type":"home-search-1","dataId":null,"file":"search","search":null,"limit":2},"dataMeta":[],"checksum":"095821428593d9fc7f6beaa5db0a08cd71c021e700618150067aebcd631e779e"}}'>
<div class="modal fade modal-search" id="search" wire:ignore.self="">
<div class="modal-dialog modal-dialog-centered">
<div class="modal-content">
<div class="d-flex justify-content-between align-items-center">
<h5>Search</h5>
<span class="icon-close icon-close-popup" data-bs-dismiss="modal"></span>
</div>
<form class="form-search">
<fieldset class="text">
<input aria-required="true" class="" name="text" placeholder="Searching..." required="" tabindex="0" type="text" value="" wire:model="search"/>
</fieldset>
<button class="" type="submit">
<svg class="icon" fill="none" height="20" viewbox="0 0 24 24" width="20" xmlns="http://www.w3.org/2000/svg">
<path d="M11 19C15.4183 19 19 15.4183 19 11C19 6.58172 15.4183 3 11 3C6.58172 3 3 6.58172 3 11C3 15.4183 6.58172 19 11 19Z" stroke="#181818" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
<path d="M21.35 21.0004L17 16.6504" stroke="#181818" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
</svg>
</button>
</form>
<div>
<h5 class="mb_16">Feature keywords Today</h5>
<ul class="list-tags">
<li><a class="radius-60 link" href="javascript:;" wire:click="$set('search', '')">
</a></li>
</ul>
</div>
<div>
<h6 class="mb_16">Top Results</h6>
<div class="tf-grid-layout tf-col-2 lg-col-3 xl-col-4">

@foreach($products as $product)
<div class="grid card-product" data-wow-delay="0.2s">
<div class="card-product-wrapper">
<a class="product-img" href="{{ route('product', ['id' => $product->id]) }}">
<img alt="image-product" class="lazyload img-product" data-src="{{ $product->image_path }}" src="{{ $product->image_path }}"/>
<img alt="image-product" class="lazyload img-hover" data-src="{{ $product->image_path }}" src="{{ $product->image_path }}"/>
</a>
<div class="variant-wrap size-list">
<ul class="variant-box">
<li class="size-item">Free size</li>
</ul>
</div>
<div class="list-product-btn"></div>
<div class="list-btn-main">
<a class="btn-main-product" href="{{ route('product', ['id' => $product->id]) }}">View Details</a>
</div>
</div>
<div class="card-product-info">
<a class="title link" href="{{ route('product', ['id' => $product->id]) }}">{{ $product->name }}</a>
<span class="price">₹{{ number_format($product->price, 2) }}</span>
<ul class="list-color-product"></ul>
</div>
</div>
@endforeach


</div>
<div class="card-product-info">
<a class="title link" href="/product/american-diamond-zircon-necklace-set-with-colored-stones-710fa">
                                American Diamond Zircon Necklace Set with Colored Stones
                            </a>
<span class="price">
                                                                AU$
                                32
                            </span>
<ul class="list-color-product">
</ul>
</div>
</div>
</div>
<div class="pt-4 text-center wd-load view-more-button">
<button class="tf-loading btn-loadmore tf-btn btn-reset" style="" wire:click="$set('limit', '24')"><span class="text text-btn text-btn-uppercase">Load more</span></button>
</div>
</div>
</section>
</div>
<!-- Livewire Component wire-end:sFrIkaC8xk9EzNJUp9zG -->
<!-- /Iconbox -->
<!-- Footer -->
<footer class="footer" id="footer">
<div class="footer-wrap">
<div class="footer-body">
<div class="container">
<div class="row">
<div class="col-lg-4">
<div class="footer-infor">
<div class="footer-logo">
<a href="">
<img alt="" src="/assets/images/I9uMBss51oRgkCJSSWlcQGTPz9r4vqvquN-1778432057.png" style="height: 90px;"/>
</a>
</div>
<div class="footer-address">
<p>
</p>
<a class="tf-btn-default fw-6" href="#">
<i class="icon-arrowUpRight"></i></a>
</div>
<ul class="footer-info">
<li>
<i class="icon-mail"></i>
<p>
<a class="__cf_email__" data-cfemail="b5d8d4d1d0d9dcd4d1d0c6dcd2dbc6d4c0f5d2d8d4dcd99bd6dad8" href="/cdn-cgi/l/email-protection">[email protected]</a>
</p>
</li>
<li>
<i class="icon-phone"></i>
<p>
</p>
</li>
</ul>
<ul class="tf-social-icon">
<li><a class="social-instagram" href="https://www.instagram.com/madelia.designs.aus?utm_source=qr&amp;igsh=c3JqamR0cmY3MXVk"><i class="icon icon-instagram"></i></a></li>
</ul>
</div>
</div>
<div class="col-lg-4">
<div class="footer-menu">
<div class="footer-col-block">
<div class="footer-heading text-button footer-heading-mobile">
                                    Categories
                                </div>
<div class="tf-collapse-content">
<ul class="footer-menu-list">
<li class="text-caption-1">
<a class="footer-menu_item" href="category_necklace-sets-and-chokers-HKCSS.html">Necklace Sets and Chokers</a>
</li>
<li class="text-caption-1">
<a class="footer-menu_item" href="category_mangalsutra-0Brv3.html">Mangalsutra</a>
</li>
<li class="text-caption-1">
<a class="footer-menu_item" href="category_harams-AUy1m.html">Harams</a>
</li>
<li class="text-caption-1">
<a class="footer-menu_item" href="category_invisible-chains-and-pendants-tidrw.html">Invisible Chains and Pendants</a>
</li>
<li class="text-caption-1">
<a class="footer-menu_item" href="category_hair-accessories-ZsjhM.html">Hair Accessories</a>
</li>
<li class="text-caption-1">
<a class="footer-menu_item" href="category_saree-Q3IJM.html">Saree</a>
</li>
</ul>
</div>
</div>
<div class="footer-col-block">
<div class="footer-heading text-button footer-heading-mobile">
                                    Information
                                </div>
<div class="tf-collapse-content">
<ul class="footer-menu-list">
<li class="text-caption-1">
<a class="footer-menu_item" href="page_return-policy.html"> Return Policy</a>
</li>
<li class="text-caption-1">
<a class="footer-menu_item" href="page_shipping-policy.html"> Shipping Policy</a>
</li>
<li class="text-caption-1">
<a class="footer-menu_item" href="page_privacy-policy.html"> Privacy Policy</a>
</li>
</ul>
</div>
</div>
</div>
</div>
<div class="col-lg-4">
<div class="footer-col-block">
<div class="footer-heading text-button footer-heading-mobile">
                                Newletter
                            </div>
<div class="tf-collapse-content">
<div class="footer-newsletter">
<p class="text-caption-1">Sign up for our newsletter and get 10% off your first
                                        purchase</p>
<form @submit.prevent="submitForm" accept-charset="utf-8" class="form-newsletter subscribe-form" data-mailchimp="true" method="post" x-data="subscribeForm()">
<div class="subscribe-content">
<fieldset class="email">
<input aria-required="true" class="subscribe-email" name="email-form" placeholder="Enter your e-mail" tabindex="0" type="email" x-model="email"/>
</fieldset>
<div class="button-submit">
<button class="subscribe-button" type="submit">
<template x-if="!loading">
<i class="icon icon-arrowUpRight"></i>
</template>
<template x-if="loading">
<span class="animate-pulse">...</span>
</template>
</button>
</div>
</div>
<div class="subscribe-msg" x-text="message"></div>
</form>
<div class="tf-cart-checkbox">
<div class="tf-checkbox-wrapp">
<input checked="" class="" disabled="" id="footer-Form_agree" name="agree_checkbox" type="checkbox"/>
<div>
<i class="icon-check"></i>
</div>
</div>
<label class="text-caption-1" for="footer-Form_agree">
                                            By clicking subcribe, you agree to the <a class="fw-6 link" href="">Terms of Service</a> and <a class="fw-6 link" href="#">Privacy Policy</a>.
                                        </label>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="footer-bottom">
<div class="container">
<div class="row">
<div class="col-12">
<div class="footer-bottom-wrap">
<div class="left">
<p class="text-caption-1">
                                    © 2026 madeliadesigns. All Rights Reserved.
                                </p>
<div class="tf-cur justify-content-end">
</div>
</div>
<div style="display: flex;gap: 8px;">
<p class="text-caption-1">Payment:</p>
<ul>
<li>
<img alt="" src="" style="height: 65px;"/>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</footer>
<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>
    function subscribeForm() {
        return {
            email: '',
            message: '',
            loading: false,

            async submitForm() {
                this.loading = true;
                this.message = '';

                try {
                    const response = await fetch('/api/subscribe', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'Accept': 'application/json',
                            'X-CSRF-TOKEN': document.querySelector('meta[name=csrf-token]')?.content
                        },
                        body: JSON.stringify({
                            email: this.email
                        })
                    });

                    const data = await response.json();

                    if (response.ok) {
                        this.message = data.message ?? 'Subscribed successfully!';
                        this.email = '';
                    } else {
                        this.message = data.message ?? 'Subscription failed.';
                    }
                } catch (error) {
                    this.message = 'Something went wrong.';
                } finally {
                    this.loading = false;
                }
            }
        }
    }
</script>
<!-- /Footer -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" rel="stylesheet"/>
<div class="toast-container"></div>
<style>


    @keyframes fadeSlideIn {
  0% {
    opacity: 0;
    transform: translateX(calc(100% + 30px)) scale(0.95);
  }
  100% {
    opacity: 1;
    transform: translateX(0%) scale(1);
  }
}

@keyframes fadeSlideOut {
  0% {
    opacity: 1;
    transform: translateX(0%) scale(1);
  }
  100% {
    opacity: 0;
    transform: translateX(calc(100% + 30px)) scale(0.95);
  }
}

  .toast-container {
  position: fixed;
  top: 25px;
  right: 30px;
  display: flex;
  flex-direction: column;
  gap: 10px;
  z-index: 1000;
}

.toast {
  position: relative;
  width: 320px;
  border-radius: 12px;
  background: #fff;
  padding: 13px;
  box-shadow: 0 6px 20px -5px rgba(0, 0, 0, 0.1);
  border: 1px solid #e0e0e0;
  display: flex;
  overflow-x: hidden;
  align-items: center;
  transform: translateX(calc(100% + 30px));
  transition: all 0.5s cubic-bezier(0.68, -0.55, 0.265, 1.35);
}

.toast.active {
  animation: fadeSlideIn 0.5s ease forwards;
  transform: translateX(0%);
  display: inherit;
}

.toast.removing {
  animation: fadeSlideOut 0.4s ease forwards;
}

.toast .toast-content {
  display: flex;
  align-items: start;
}

.toast-content .icon {
  display: flex;
  align-items: center;
  justify-content: center;
  height: 35px;
  min-width: 35px;
  font-size: 35px;
  color: #fff;
}

.toast-content .message {
  display: flex;
  flex-direction: column;
  margin-left: 15px;
}

.message .text {
  font-size: 13px;
  font-weight: 400;
  color: #666666;
}

.message .text.text-1 {
  font-weight: 600;
  color: #333;
}

.toast .close {
  position: absolute;
  top: 10px;
  right: 15px;
  padding: 5px;
  cursor: pointer;
  opacity: 0.7;
}

.toast .close:hover {
  opacity: 1;
}

.toast .progress {
  position: absolute;
  bottom: 0;
  left: 0;
  height: 3px;
  width: 100%;
}

.toast .progress:before {
  content: "";
  position: absolute;
  bottom: 0;
  right: 0;
  height: 100%;
  width: 100%;
  background-color: #4070f4;
}

.progress.active:before {
  animation: progress 5s linear forwards;
}

@keyframes progress {
  100% {
    right: 100%;
  }
}

/* Toast Type Colors */
.toast.success .icon { color: rgb(25 135 84); }
.toast.error .icon { color: rgb(220 53 69); }
.toast.warning .icon { color: rgb(255 193 7); }
.toast.info .icon { color: rgb(13 202 240); }

.toast.success .progress:before { background: rgb(25 135 84); }
.toast.error .progress:before { background: rgb(220 53 69); }
.toast.warning .progress:before { background: rgb(255 193 7); }
.toast.info .progress:before { background: rgb(13 202 240); }


</style>
<script>

    function showToast(message, type = "success") {
        const toastContainer = document.querySelector(".toast-container");

        const toast = document.createElement("div");
        toast.classList.add("toast", type);
        toast.classList.add("asset-toast")

        toast.innerHTML = `
          <div class="toast-content">
            <i class="bi icon bi-${getIcon(type)}"></i>
            <div class="message">
              <span class="text text-1">${capitalize(type)}</span>
              <span class="text text-2">${message}</span>
            </div>
          </div>
          <i class="bi bi-x-lg close"></i>
          <div class="progress active"></div>
        `;

        toastContainer.appendChild(toast);
        let showToast = setTimeout(() => {
          void toast.offsetHeight;
          toast.classList.add("active");
        }, 1);

        const progress = toast.querySelector(".progress");
        const closeIcon = toast.querySelector(".close");

        // Auto-remove toast after 5s
        const timer1 = setTimeout(() => {
          toast.classList.remove("removing");
          toast.classList.remove("active");
        }, 5000);

        const timer2 = setTimeout(() => {
          toast.classList.remove("removing");
          progress.classList.remove("active");
          setTimeout(() => toast.remove(), 400);
        }, 5300);

        // Manual close
        closeIcon.addEventListener("click", () => {
          toast.classList.remove("active");
          clearTimeout(timer1);
          clearTimeout(timer2);
          clearTimeout(showToast);
          setTimeout(() => toast.remove(), 400);
        });
      }

      function getIcon(type) {
        switch (type) {
          case "success": return "check-circle-fill";
          case "error": return "x-circle-fill";
          case "warning": return "exclamation-triangle-fill";
          case "info": return "info-circle-fill";
          default: return "check-circle-fill";
        }
      }

      function capitalize(str) {
        return str.charAt(0).toUpperCase() + str.slice(1);
      }




      // Example Usage:
      

       window.addEventListener('notify:front', event => {
          showToast(event.detail.message, event.detail.type ?? 'success');
       })

</script>
<!-- toolbar-bottom -->
<div class="tf-toolbar-bottom">
<div class="toolbar-item">
<a href="">
<div class="toolbar-icon">
<svg class="icon" fill="none" height="20" viewbox="0 0 20 20" width="20" xmlns="http://www.w3.org/2000/svg">
<path d="M8.125 3.125H4.375C4.04348 3.125 3.72554 3.2567 3.49112 3.49112C3.2567 3.72554 3.125 4.04348 3.125 4.375V8.125C3.125 8.45652 3.2567 8.77446 3.49112 9.00888C3.72554 9.2433 4.04348 9.375 4.375 9.375H8.125C8.45652 9.375 8.77446 9.2433 9.00888 9.00888C9.2433 8.77446 9.375 8.45652 9.375 8.125V4.375C9.375 4.04348 9.2433 3.72554 9.00888 3.49112C8.77446 3.2567 8.45652 3.125 8.125 3.125ZM8.125 8.125H4.375V4.375H8.125V8.125ZM15.625 3.125H11.875C11.5435 3.125 11.2255 3.2567 10.9911 3.49112C10.7567 3.72554 10.625 4.04348 10.625 4.375V8.125C10.625 8.45652 10.7567 8.77446 10.9911 9.00888C11.2255 9.2433 11.5435 9.375 11.875 9.375H15.625C15.9565 9.375 16.2745 9.2433 16.5089 9.00888C16.7433 8.77446 16.875 8.45652 16.875 8.125V4.375C16.875 4.04348 16.7433 3.72554 16.5089 3.49112C16.2745 3.2567 15.9565 3.125 15.625 3.125ZM15.625 8.125H11.875V4.375H15.625V8.125ZM8.125 10.625H4.375C4.04348 10.625 3.72554 10.7567 3.49112 10.9911C3.2567 11.2255 3.125 11.5435 3.125 11.875V15.625C3.125 15.9565 3.2567 16.2745 3.49112 16.5089C3.72554 16.7433 4.04348 16.875 4.375 16.875H8.125C8.45652 16.875 8.77446 16.7433 9.00888 16.5089C9.2433 16.2745 9.375 15.9565 9.375 15.625V11.875C9.375 11.5435 9.2433 11.2255 9.00888 10.9911C8.77446 10.7567 8.45652 10.625 8.125 10.625ZM8.125 15.625H4.375V11.875H8.125V15.625ZM15.625 10.625H11.875C11.5435 10.625 11.2255 10.7567 10.9911 10.9911C10.7567 11.2255 10.625 11.5435 10.625 11.875V15.625C10.625 15.9565 10.7567 16.2745 10.9911 16.5089C11.2255 16.7433 11.5435 16.875 11.875 16.875H15.625C15.9565 16.875 16.2745 16.7433 16.5089 16.5089C16.7433 16.2745 16.875 15.9565 16.875 15.625V11.875C16.875 11.5435 16.7433 11.2255 16.5089 10.9911C16.2745 10.7567 15.9565 10.625 15.625 10.625ZM15.625 15.625H11.875V11.875H15.625V15.625Z" fill="#4D4E4F"></path>
</svg>
</div>
<div class="toolbar-label">Home</div>
</a>
</div>
<div class="toolbar-item">
<a href="page_my-account.html">
<div class="toolbar-icon">
<svg class="icon" fill="none" height="20" stroke="#4D4E4F" stroke-width="1.8" viewbox="0 0 24 24" width="20" xmlns="http://www.w3.org/2000/svg">
<circle cx="12" cy="7" r="4" stroke-linecap="round" stroke-linejoin="round"></circle>
<path d="M4 20c0-4 3.5-7 8-7s8 3 8 7" stroke-linecap="round" stroke-linejoin="round"></path>
</svg>
</div>
<div class="toolbar-label">User</div>
</a>
</div>
<div class="toolbar-item">
<a data-bs-toggle="modal" href="#search">
<div class="toolbar-icon">
<svg class="icon" fill="none" height="20" viewbox="0 0 20 20" width="20" xmlns="http://www.w3.org/2000/svg">
<path d="M17.9419 17.058L14.0302 13.1471C15.1639 11.7859 15.7293 10.04 15.6086 8.27263C15.488 6.50524 14.6906 4.85241 13.3823 3.65797C12.074 2.46353 10.3557 1.81944 8.58462 1.85969C6.81357 1.89994 5.12622 2.62143 3.87358 3.87407C2.62094 5.12671 1.89945 6.81406 1.8592 8.5851C1.81895 10.3561 2.46304 12.0745 3.65748 13.3828C4.85192 14.691 6.50475 15.4884 8.27214 15.6091C10.0395 15.7298 11.7854 15.1644 13.1466 14.0306L17.0575 17.9424C17.1156 18.0004 17.1845 18.0465 17.2604 18.0779C17.3363 18.1094 17.4176 18.1255 17.4997 18.1255C17.5818 18.1255 17.6631 18.1094 17.739 18.0779C17.8149 18.0465 17.8838 18.0004 17.9419 17.9424C17.9999 17.8843 18.046 17.8154 18.0774 17.7395C18.1089 17.6636 18.125 17.5823 18.125 17.5002C18.125 17.4181 18.1089 17.3367 18.0774 17.2609C18.046 17.185 17.9999 17.1161 17.9419 17.058ZM3.12469 8.75018C3.12469 7.63766 3.45459 6.55012 4.07267 5.6251C4.69076 4.70007 5.56926 3.9791 6.5971 3.55336C7.62493 3.12761 8.75593 3.01622 9.84707 3.23326C10.9382 3.4503 11.9405 3.98603 12.7272 4.7727C13.5138 5.55937 14.0496 6.56165 14.2666 7.6528C14.4837 8.74394 14.3723 9.87494 13.9465 10.9028C13.5208 11.9306 12.7998 12.8091 11.8748 13.4272C10.9497 14.0453 9.86221 14.3752 8.74969 14.3752C7.25836 14.3735 5.82858 13.7804 4.77404 12.7258C3.71951 11.6713 3.12634 10.2415 3.12469 8.75018Z" fill="#4D4E4F"></path>
</svg>
</div>
<div class="toolbar-label">Search</div>
</a>
</div>
<div class="toolbar-item">
<a href="page_wishlist.html">
<div class="toolbar-icon">
<svg class="icon" fill="none" height="20" viewbox="0 0 20 20" width="20" xmlns="http://www.w3.org/2000/svg">
<path d="M17.4215 4.45326C16.5724 3.60627 15.4225 3.12997 14.2231 3.1285C13.0238 3.12704 11.8727 3.60054 11.0215 4.44545L9.99965 5.39467L8.97699 4.44232C8.12602 3.59373 6.9728 3.11795 5.77103 3.11963C4.56926 3.12132 3.41738 3.60034 2.56879 4.45131C1.7202 5.30228 1.24441 6.4555 1.2461 7.65727C1.24778 8.85904 1.7268 10.0109 2.57777 10.8595L9.55824 17.9423C9.6164 18.0014 9.68572 18.0483 9.76217 18.0803C9.83862 18.1123 9.92067 18.1288 10.0036 18.1288C10.0864 18.1288 10.1685 18.1123 10.2449 18.0803C10.3214 18.0483 10.3907 18.0014 10.4489 17.9423L17.4215 10.8595C18.2707 10.0098 18.7477 8.85768 18.7477 7.65639C18.7477 6.45509 18.2707 5.30296 17.4215 4.45326ZM16.5348 9.98139L9.99965 16.6095L3.46059 9.97514C2.8452 9.35975 2.49948 8.52511 2.49948 7.65482C2.49948 6.78454 2.8452 5.9499 3.46059 5.33451C4.07597 4.71913 4.91061 4.37341 5.7809 4.37341C6.65118 4.37341 7.48583 4.71913 8.10121 5.33451L8.11684 5.35014L9.57387 6.7056C9.68953 6.81324 9.84166 6.87307 9.99965 6.87307C10.1576 6.87307 10.3098 6.81324 10.4254 6.7056L11.8825 5.35014L11.8981 5.33451C12.5139 4.71954 13.3488 4.37438 14.219 4.37497C15.0893 4.37555 15.9237 4.72184 16.5387 5.33764C17.1537 5.95344 17.4988 6.78831 17.4983 7.6586C17.4977 8.52888 17.1514 9.36329 16.5356 9.97826L16.5348 9.98139Z" fill="#4D4E4F"></path>
</svg>
<!-- <div class="toolbar-count">1</div> -->
</div>
<div class="toolbar-label">Wishlist</div>
</a>
</div>
<div class="toolbar-item">
<a data-bs-toggle="modal" href="#shoppingCart">
<div class="toolbar-icon">
<svg class="icon" fill="none" height="20" viewbox="0 0 20 20" width="20" xmlns="http://www.w3.org/2000/svg">
<path d="M13.75 8.23389V4.48389C13.75 3.48932 13.3549 2.5355 12.6517 1.83224C11.9484 1.12897 10.9946 0.733887 10 0.733887C9.00544 0.733887 8.05161 1.12897 7.34835 1.83224C6.64509 2.5355 6.25 3.48932 6.25 4.48389V8.23389M3.4375 6.35889H16.5625L17.5 17.6089H2.5L3.4375 6.35889Z" stroke="#4D4E4F" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.2">
</path>
</svg>
</div>
<div class="toolbar-label">Cart</div>
</a>
</div>
</div>
<!-- /toolbar-bottom -->

<!-- auto popup  -->
<!-- /auto popup  -->
<!-- search -->
<div>
<div wire:id="S1gMm6t8wWSK6jwX4r1B" wire:initial-data='{"fingerprint":{"id":"S1gMm6t8wWSK6jwX4r1B","name":"common.dynamic-widget","locale":"en","path":"products","method":"GET","v":"acj"},"effects":{"listeners":[]},"serverMemo":{"children":[],"errors":[],"htmlHash":"f2d65e9d","data":{"type":"home-search-1","dataId":null,"file":"search","search":null,"limit":2},"dataMeta":[],"checksum":"095821428593d9fc7f6beaa5db0a08cd71c021e700618150067aebcd631e779e"}}'>
<div class="modal fade modal-search" id="search" wire:ignore.self="">
<div class="modal-dialog modal-dialog-centered">
<div class="modal-content">
<div class="d-flex justify-content-between align-items-center">
<h5>Search</h5>
<span class="icon-close icon-close-popup" data-bs-dismiss="modal"></span>
</div>
<form class="form-search">
<fieldset class="text">
<input aria-required="true" class="" name="text" placeholder="Searching..." required="" tabindex="0" type="text" value="" wire:model="search"/>
</fieldset>
<button class="" type="submit">
<svg class="icon" fill="none" height="20" viewbox="0 0 24 24" width="20" xmlns="http://www.w3.org/2000/svg">
<path d="M11 19C15.4183 19 19 15.4183 19 11C19 6.58172 15.4183 3 11 3C6.58172 3 3 6.58172 3 11C3 15.4183 6.58172 19 11 19Z" stroke="#181818" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
<path d="M21.35 21.0004L17 16.6504" stroke="#181818" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
</svg>
</button>
</form>
<div>
<h5 class="mb_16">Feature keywords Today</h5>
<ul class="list-tags">
<li><a class="radius-60 link" href="javascript:;" wire:click="$set('search', '')">
</a></li>
</ul>
</div>
<div>
<h6 class="mb_16">Top Results</h6>
<div class="tf-grid-layout tf-col-2 lg-col-3 xl-col-4">
<div class="fl-item card-product card-product-size wow fadeInUp" data-wow-delay="0.2s">
<div class="card-product-wrapper">
<a class="product-img" href="product_ruby-stone-pendant-necklace-set-UoPTd.html">
<img alt="image-product" class="lazyload img-product" data-src="/assets/images/i2UfhHDtkOAbD653QGRqQD2xwkeKGOK75y-1779970129.jpeg" src="/assets/images/i2UfhHDtkOAbD653QGRqQD2xwkeKGOK75y-1779970129.jpeg"/>
<img alt="image-product" class="lazyload img-hover" data-src="/assets/images/i2UfhHDtkOAbD653QGRqQD2xwkeKGOK75y-1779970129.jpeg" src="/assets/images/i2UfhHDtkOAbD653QGRqQD2xwkeKGOK75y-1779970129.jpeg"/>
</a>
<div class="variant-wrap size-list">
<ul class="variant-box">
<li class="size-item">
                                                    Free  size
                                                </li>
</ul>
</div>
<div class="list-btn-main">
<a class="btn-main-product" data-bs-toggle="modal" href="product_ruby-stone-pendant-necklace-set-UoPTd.html">
                                            View Details
                                        </a>
</div>
</div>
<div class="card-product-info">
<a class="title link" href="product_ruby-stone-pendant-necklace-set-UoPTd.html">
                                        Ruby Stone Pendant Necklace Set
                                    </a>
<span class="price"><span class="old-price">
                                            AU$
                                            25
                                        </span>
                                        AU$
                                        25
                                    </span>
<ul class="list-color-product">
</ul>
</div>
</div>
<div class="fl-item card-product card-product-size wow fadeInUp" data-wow-delay="0.2s">
<div class="card-product-wrapper">
<a class="product-img" href="product_emerald-kemp-pendant-necklace-ov4jO.html">
<img alt="image-product" class="lazyload img-product" data-src="/assets/images/s1bchakf55wCbcX80U86JDz8OGLtnI7M1y-1779953968.jpeg" src="/assets/images/s1bchakf55wCbcX80U86JDz8OGLtnI7M1y-1779953968.jpeg"/>
<img alt="image-product" class="lazyload img-hover" data-src="/assets/images/s1bchakf55wCbcX80U86JDz8OGLtnI7M1y-1779953968.jpeg" src="/assets/images/s1bchakf55wCbcX80U86JDz8OGLtnI7M1y-1779953968.jpeg"/>
</a>
<div class="variant-wrap size-list">
<ul class="variant-box">
<li class="size-item">
                                                    Free  size
                                                </li>
</ul>
</div>
<div class="list-btn-main">
<a class="btn-main-product" data-bs-toggle="modal" href="product_emerald-kemp-pendant-necklace-ov4jO.html">
                                            View Details
                                        </a>
</div>
</div>
<div class="card-product-info">
<a class="title link" href="product_emerald-kemp-pendant-necklace-ov4jO.html">
                                        Emerald Kemp Pendant Necklace
                                    </a>
<span class="price"><span class="old-price">
                                            AU$
                                            25
                                        </span>
                                        AU$
                                        25
                                    </span>
<ul class="list-color-product">
</ul>
</div>
</div>
</div>
</div>
<!-- Load Item -->
<div class="wd-load view-more-button text-center">
<button class="tf-loading btn-loadmore tf-btn btn-reset" wire:click="loadMore"><span class="text text-btn text-btn-uppercase">Load more</span></button>
</div>
</div>
</div>
</div>
</div>
<!-- Livewire Component wire-end:S1gMm6t8wWSK6jwX4r1B --> </div>
<!-- /search -->
<div wire:id="byPw3vb3oUvWndMkTjW2" wire:initial-data='{"fingerprint":{"id":"byPw3vb3oUvWndMkTjW2","name":"home.carts","locale":"en","path":"products","method":"GET","v":"acj"},"effects":{"listeners":["cartRefresh"]},"serverMemo":{"children":[],"errors":[],"htmlHash":"23e76271","data":[],"dataMeta":[],"checksum":"f147fb6a937694c9beb03bad6b5d43aa816c641762e227a67f6c18806fbe98be"}}'>
<!-- shoppingCart -->
<div class="modal fullRight fade modal-shopping-cart" id="shoppingCart" wire:ignore.self="">
<div class="modal-dialog">
<div class="modal-content">
<div class="d-flex flex-column flex-grow-1 h-100">
<div class="header">
<h5 class="title">Shopping Cart</h5>
<span class="icon-close icon-close-popup" data-bs-dismiss="modal"></span>
</div>
<div class="wrap">
<div class="tf-mini-cart-wrap">
<p class="text-center">
                                Please <a href="page_login.html">login</a> or <a href="page_register.html">register</a> to view your cart.
                            </p>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- /shoppingCart -->
</div>
<!-- Livewire Component wire-end:byPw3vb3oUvWndMkTjW2 -->
<!-- size-guide -->
<!-- /size-guide -->
<div class="modal modalCentered fade tf-product-modal modal-part-content" id="login-ac">
<div class="modal-dialog modal-dialog-centered">
<div class="modal-content">
<div class="header">
<div class="demo-title"> Sign In</div>
<span class="icon-close icon-close-popup" data-bs-dismiss="modal"></span>
</div>
<div class="overflow-y-auto">
<div style="display: grid;gap: 11px;">
<a class="tf-btn btn-white btn-reset has-border" href="page_client-guest-login.html">Guest Login</a>
<a class="tf-btn btn-reset" href="page_login.html">Login</a>
</div>
</div>
</div>
</div>
<script>
            window.addEventListener('login-ac', function(event) {
                $('#login-ac').modal('show');
            });
        </script>
<!-- Javascript -->
<script src="/assets/js/aVmriUxA2yNH.js" type="text/javascript"></script>
<script src="/assets/js/PAQUfl9oxhfW.js" type="text/javascript"></script>
<script src="/assets/js/HLHGRiFyDvqZ.js" type="text/javascript"></script>
<script src="/assets/js/SZqB9EijsIpT.js" type="text/javascript"></script>
<script src="/assets/js/Yxa4aUPS1ItR.js" type="text/javascript"></script>
<script src="/assets/js/2wec4HIgByBG.js" type="text/javascript"></script>
<script src="/assets/js/neJLcjpJLbnN.js" type="text/javascript"></script>
<script src="/assets/js/yZGNmxWG12Q1.js" type="text/javascript"></script>
<script src="/assets/js/x9SyNLYYWcCr.js" type="text/javascript"></script>
<script src="/assets/js/yr4rH2kWWc2D.js" type="text/javascript"></script>
<script defer="" src="/assets/js/QFWDC0kIv73O.js"></script>
<script>
            window.REQUIRED_CODE_ERROR_MESSAGE = 'Please choose a country code';
            window.LOCALE = 'en';
            window.EMAIL_INVALID_MESSAGE = window.SMS_INVALID_MESSAGE =
                "The information provided is invalid. Please review the field format and try again.";

            window.REQUIRED_ERROR_MESSAGE = "This field cannot be left blank. ";

            window.GENERIC_INVALID_MESSAGE =
                "The information provided is invalid. Please review the field format and try again.";

            window.translation = {
                common: {
                    selectedList: '{quantity} list selected',
                    selectedLists: '{quantity} lists selected'
                }
            };

            var AUTOHIDE = Boolean(0);
        </script>
<script data-turbo-eval="false" data-turbolinks-eval="false">window.livewire = new Livewire();window.Livewire = window.livewire;window.livewire_app_url = '';window.livewire_token = 'krHQiSDNg38a339sOTCENUV478UPSyvzfxyUdToJ';window.deferLoadingAlpine = function (callback) {window.addEventListener('livewire:load', function () {callback();});};let started = false;window.addEventListener('alpine:initializing', function () {if (! started) {window.livewire.start();started = true;}});document.addEventListener("DOMContentLoaded", function () {if (! started) {window.livewire.start();started = true;}});</script>
<script crossorigin="anonymous" data-cf-beacon='{"version":"2024.11.0","token":"6410c2cf82ab4fe1bc5b359dd1292a5a","r":1,"server_timing":{"name":{"cfCacheStatus":true,"cfEdge":true,"cfExtPri":true,"cfL4":true,"cfOrigin":true,"cfSpeedBrain":true},"location_startswith":null}}' defer="" integrity="sha512-57MDmcccJXYtNnH+ZiBwzC4jb2rvgVCEokYN+L/nLlmO8rfYT/gIpW2A569iJ/3b+0UEasghjuZH/ma3wIs/EQ==" src="https://static.cloudflareinsights.com/beacon.min.js/v833ccba57c9e4d2798f2e76cebdd09a11778172276447"></script>
</div></body>
</html>

<script src="/js/frontend-cart.js"></script>