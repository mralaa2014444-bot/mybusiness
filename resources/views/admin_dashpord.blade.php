<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>
        لوحة الإدارة | ALAA
    </title>


    <style>

        /* =====================================================
           RESET
        ===================================================== */


/* =========================================
   زر تسجيل الخروج
========================================= */

li.logout {
    list-style: none;
    margin-top: 12px;
}

li.logout form {
    width: 100%;
    margin: 0;
}

li.logout button {
    width: 100%;

    display: flex;
    align-items: center;
    gap: 12px;

    padding: 13px 16px;

    background: rgba(141, 204, 32, 0.08);
    color: #6fa611;

    border: 1px solid rgba(141, 204, 32, 0.20);
    border-radius: 12px;

    font-family: 'Cairo', sans-serif;
    font-size: 13px;
    font-weight: 700;

    cursor: pointer;
    text-align: right;

    transition:
        background .3s ease,
        color .3s ease,
        border-color .3s ease,
        transform .3s ease,
        box-shadow .3s ease;
}

/* الأيقونة */
li.logout .menu-icon {
    width: 34px;
    height: 34px;

    display: flex;
    align-items: center;
    justify-content: center;

    flex-shrink: 0;

    background: rgba(141, 204, 32, 0.14);
    border-radius: 9px;

    font-size: 17px;

    transition:
        background .3s ease,
        transform .3s ease;
}

/* عند تمرير الماوس */
li.logout button:hover {
    background: #8dcc20;
    color: #17200a;

    border-color: #8dcc20;

    transform: translateY(-2px);

    box-shadow: 0 8px 22px rgba(141, 204, 32, 0.22);
}

li.logout button:hover .menu-icon {
    background: rgba(255, 255, 255, 0.30);
    transform: translateX(-3px);
}


        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }


        :root {

            --bg: #f5f7fa;

            --white: #ffffff;

            --soft: #f9fafb;

            --border: #e5e7eb;

            --text: #111827;

            --muted: #6b7280;

            --green: #8dcc20;

            --green-dark: #6fa611;

            --green-soft: #f1f8e8;

            --red: #ef4444;

            --red-soft: #fef2f2;

            --blue: #3b82f6;

            --blue-soft: #eff6ff;

            --orange: #f59e0b;

            --orange-soft: #fffbeb;

        }


        html {
            scroll-behavior: smooth;
        }


        body {

            font-family:
                "Cairo",
                "Segoe UI",
                Tahoma,
                Arial,
                sans-serif;

            background: var(--bg);

            color: var(--text);

            direction: rtl;

            min-height: 100vh;
        }


        a {
            text-decoration: none;
        }


        button,
        input,
        select {

            font-family: inherit;
        }


        /* =====================================================
           SIDEBAR
        ===================================================== */

        .sidebar {

            position: fixed;

            right: 0;

            top: 0;

            width: 255px;

            height: 100vh;

            background: var(--white);

            border-left: 1px solid var(--border);

            padding: 25px 17px;

            z-index: 1000;

            overflow-y: auto;

            transition: 0.3s ease;
        }


        /* =====================================================
           LOGO
        ===================================================== */

        .logo {

            text-align: center;

            font-size: 29px;

            font-weight: 900;

            color: var(--green);

            margin-bottom: 30px;

            letter-spacing: 1px;
        }


        .logo small {

            display: block;

            color: #9ca3af;

            font-size: 10px;

            font-weight: 600;

            letter-spacing: 0;

            margin-top: 2px;
        }


        /* =====================================================
           ADMIN PROFILE
        ===================================================== */

        .admin-profile {

            display: flex;

            align-items: center;

            gap: 11px;

            background: var(--soft);

            border: 1px solid #f0f0f0;

            border-radius: 15px;

            padding: 12px;

            margin-bottom: 27px;
        }


        .admin-avatar {

            width: 44px;

            height: 44px;

            min-width: 44px;

            border-radius: 50%;

            background: var(--green);

            color: white;

            display: flex;

            align-items: center;

            justify-content: center;

            font-size: 16px;

            font-weight: 800;
        }


        .admin-data {

            min-width: 0;
        }


        .admin-data h4 {

            font-size: 13px;

            margin-bottom: 3px;

            white-space: nowrap;

            overflow: hidden;

            text-overflow: ellipsis;
        }


        .admin-data span {

            font-size: 10px;

            color: var(--green-dark);

            font-weight: 700;
        }


        /* =====================================================
           MENU
        ===================================================== */

        .menu-title {

            color: #9ca3af;

            font-size: 10px;

            font-weight: 700;

            margin:

                18px
                10px
                8px;
        }


        .menu {

            list-style: none;
        }


        .menu li {

            margin-bottom: 4px;
        }


        .menu a {

            display: flex;

            align-items: center;

            gap: 11px;

            padding: 11px 12px;

            color: #4b5563;

            border-radius: 10px;

            font-size: 12px;

            transition: 0.25s ease;
        }


        .menu a:hover {

            background: var(--green-soft);

            color: var(--green-dark);
        }


        .menu a.active {

            background: var(--green-soft);

            color: var(--green-dark);

            font-weight: 700;
        }


        .menu-icon {

            width: 23px;

            text-align: center;

            font-size: 16px;
        }


        .logout {

            border-top: 1px solid var(--border);

            margin-top: 20px;

            padding-top: 15px;
        }


        .logout a {

            color: var(--red);
        }


        .logout a:hover {

            background: var(--red-soft);

            color: #dc2626;
        }


        /* =====================================================
           MAIN
        ===================================================== */

        .main {

            margin-right: 255px;

            padding: 24px 28px;

            min-height: 100vh;
        }


        /* =====================================================
           TOPBAR
        ===================================================== */

        .topbar {

            background: var(--white);

            border: 1px solid var(--border);

            border-radius: 16px;

            min-height: 64px;

            padding: 11px 16px;

            display: flex;

            align-items: center;

            justify-content: space-between;

            margin-bottom: 22px;
        }


        .topbar-right {

            display: flex;

            align-items: center;

            gap: 12px;
        }


        .topbar-title {

            font-size: 18px;

            font-weight: 800;
        }


        .topbar-title span {

            color: var(--green);
        }


        .topbar-left {

            display: flex;

            align-items: center;

            gap: 8px;
        }


        .top-button {

            display: inline-flex;

            align-items: center;

            justify-content: center;

            padding: 8px 13px;

            border: 1px solid var(--border);

            border-radius: 9px;

            background: white;

            color: #374151;

            font-size: 11px;

            transition: 0.25s ease;
        }


        .top-button:hover {

            border-color: var(--green);

            color: var(--green-dark);
        }


        .mobile-button {

            display: none;

            width: 40px;

            height: 40px;

            border: 1px solid var(--border);

            border-radius: 9px;

            background: white;

            cursor: pointer;

            font-size: 18px;
        }


        /* =====================================================
           WELCOME
        ===================================================== */

        .welcome {

            background:

                linear-gradient(
                    135deg,
                    #ffffff,
                    #fbfdf8
                );

            border: 1px solid var(--border);

            border-radius: 19px;

            padding: 25px;

            margin-bottom: 20px;

            position: relative;

            overflow: hidden;
        }


        .welcome::before {

            content: "";

            position: absolute;

            left: -60px;

            top: -60px;

            width: 170px;

            height: 170px;

            border-radius: 50%;

            background: var(--green-soft);
        }


        .welcome-content {

            position: relative;

            z-index: 1;
        }


        .welcome h1 {

            font-size: 23px;

            margin-bottom: 7px;
        }


        .welcome h1 span {

            color: var(--green);
        }


        .welcome p {

            color: var(--muted);

            font-size: 12px;

            line-height: 1.9;
        }


        /* =====================================================
           STATS
        ===================================================== */

        .stats {

            display: grid;

            grid-template-columns:
                repeat(5, 1fr);

            gap: 13px;

            margin-bottom: 28px;
        }


        .stat-card {

            background: white;

            border: 1px solid var(--border);

            border-radius: 16px;

            padding: 17px;

            transition: 0.25s ease;
        }


        .stat-card:hover {

            transform: translateY(-3px);

            border-color: #cde5a4;
        }


        .stat-top {

            display: flex;

            align-items: center;

            justify-content: space-between;

            margin-bottom: 13px;
        }


        .stat-icon {

            width: 40px;

            height: 40px;

            display: flex;

            align-items: center;

            justify-content: center;

            border-radius: 11px;

            background: var(--green-soft);

            font-size: 17px;
        }


        .stat-number {

            font-size: 23px;

            font-weight: 800;

            margin-bottom: 3px;
        }


        .stat-title {

            color: var(--muted);

            font-size: 11px;
        }


        /* =====================================================
           SECTION
        ===================================================== */

        .section {

            margin-bottom: 28px;
        }


        .section-head {

            display: flex;

            align-items: center;

            justify-content: space-between;

            margin-bottom: 13px;
        }


        .section-head h2 {

            font-size: 18px;
        }


        .section-head p {

            color: var(--muted);

            font-size: 11px;

            margin-top: 3px;
        }


        .section-link {

            color: var(--green-dark);

            font-size: 11px;

            font-weight: 700;
        }


        /* =====================================================
           TABLE
        ===================================================== */

        .table-card {

            background: white;

            border: 1px solid var(--border);

            border-radius: 16px;

            overflow: hidden;
        }


        .table-scroll {

            overflow-x: auto;
        }


        table {

            width: 100%;

            border-collapse: collapse;

            min-width: 800px;
        }


        th {

            background: #fafafa;

            color: #6b7280;

            font-size: 11px;

            font-weight: 700;

            text-align: right;

            padding: 13px 16px;

            border-bottom: 1px solid var(--border);

            white-space: nowrap;
        }


        td {

            padding: 14px 16px;

            font-size: 12px;

            color: #374151;

            border-bottom: 1px solid #f1f1f1;

            vertical-align: middle;
        }


        tbody tr:last-child td {

            border-bottom: none;
        }


        tbody tr {

            transition: 0.2s ease;
        }


        tbody tr:hover {

            background: #fbfdf8;
        }


        .main-text {

            font-weight: 700;

            color: var(--text);
        }


        .sub-text {

            display: block;

            color: #9ca3af;

            font-size: 10px;

            margin-top: 3px;
        }


        /* =====================================================
           BADGES
        ===================================================== */

        .badge {

            display: inline-flex;

            align-items: center;

            justify-content: center;

            border-radius: 30px;

            padding: 5px 10px;

            font-size: 10px;

            font-weight: 700;

            white-space: nowrap;
        }


        .badge-green {

            color: #65a30d;

            background: #f0fdf4;
        }


        .badge-red {

            color: #dc2626;

            background: var(--red-soft);
        }


        .badge-blue {

            color: #2563eb;

            background: var(--blue-soft);
        }


        .badge-orange {

            color: #d97706;

            background: var(--orange-soft);
        }


        /* =====================================================
           PRICE
        ===================================================== */

        .price {

            font-weight: 700;

            color: var(--text);
        }


        .currency {

            color: var(--muted);

            font-size: 9px;
        }


        /* =====================================================
           QUICK GRID
        ===================================================== */

        .quick-grid {

            display: grid;

            grid-template-columns:
                repeat(3, 1fr);

            gap: 13px;
        }


        .quick-card {

            background: white;

            border: 1px solid var(--border);

            border-radius: 15px;

            padding: 18px;

            transition: 0.25s ease;
        }


        .quick-card:hover {

            transform: translateY(-2px);

            border-color: #cde5a4;
        }


        .quick-icon {

            font-size: 22px;

            margin-bottom: 10px;
        }


        .quick-card h3 {

            font-size: 14px;

            margin-bottom: 5px;
        }


        .quick-card p {

            color: var(--muted);

            font-size: 11px;

            line-height: 1.8;

            margin-bottom: 10px;
        }


        .quick-card a {

            color: var(--green-dark);

            font-size: 11px;

            font-weight: 700;
        }


        /* =====================================================
           EMPTY
        ===================================================== */

        .empty {

            padding: 40px 20px;

            text-align: center;

            color: var(--muted);
        }


        .empty-icon {

            font-size: 32px;

            margin-bottom: 8px;
        }


        .empty h3 {

            color: var(--text);

            font-size: 15px;

            margin-bottom: 5px;
        }


        .empty p {

            font-size: 11px;
        }


        /* =====================================================
           FOOTER
        ===================================================== */

        .footer {

            text-align: center;

            color: #9ca3af;

            font-size: 10px;

            padding: 18px 0;
        }


        /* =====================================================
           OVERLAY
        ===================================================== */

        .overlay {

            display: none;

            position: fixed;

            inset: 0;

            background: rgba(0,0,0,.35);

            z-index: 999;
        }


        .overlay.active {

            display: block;
        }


        /* =====================================================
           RESPONSIVE
        ===================================================== */

        @media (max-width: 1250px) {

            .stats {

                grid-template-columns:
                    repeat(3, 1fr);
            }

        }


        @media (max-width: 900px) {

            .sidebar {

                right: -270px;
            }


            .sidebar.open {

                right: 0;
            }


            .main {

                margin-right: 0;

                padding: 16px;
            }


            .mobile-button {

                display: block;
            }


            .topbar-left {

                display: none;
            }


            .quick-grid {

                grid-template-columns:
                    1fr;
            }

        }


        @media (max-width: 600px) {

            .stats {

                grid-template-columns:
                    repeat(2, 1fr);
            }


            .welcome {

                padding: 19px;
            }


            .welcome h1 {

                font-size: 20px;
            }


            .section-head {

                align-items: flex-start;

                gap: 10px;
            }

        }


        @media (max-width: 400px) {

            .stats {

                grid-template-columns:
                    1fr;
            }

        }

    </style>

</head>


<body>


<!-- =====================================================
     OVERLAY
===================================================== -->

<div class="overlay"
     id="overlay">
</div>


<!-- =====================================================
     SIDEBAR
===================================================== -->

<aside class="sidebar"
       id="sidebar">


    <div class="logo">

        ALAA.

        <small>
            ADMIN DASHBOARD
        </small>

    </div>


    <!-- ADMIN -->

    <div class="admin-profile">

        <div class="admin-avatar">

            {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}

        </div>


        <div class="admin-data">

            <h4>

                {{ auth()->user()->name }}

            </h4>

            <span>

                ADMINISTRATOR

            </span>

        </div>

    </div>


    <!-- MAIN MENU -->

    <div class="menu-title">

        لوحة التحكم

    </div>


    <ul class="menu">


        <li>

            <a href="#dashboard"
               class="active">

                <span class="menu-icon">
                    📊
                </span>

                الرئيسية

            </a>

        </li>


        <li>

            <a href="#sales">

                <span class="menu-icon">
                    💰
                </span>

                المبيعات

            </a>

        </li>


        <li>

            <a href="#licenses">

                <span class="menu-icon">
                    📄
                </span>

                التراخيص

            </a>

        </li>


        <li>

            <a href="#products">

                <span class="menu-icon">
                    📦
                </span>

                المنتجات

            </a>

        </li>


        <li>

            <a href="#customers">

                <span class="menu-icon">
                    👥
                </span>

                العملاء

            </a>

        </li>

    </ul>


    <!-- SYSTEM -->

    <div class="menu-title">

        النظام

    </div>


    <ul class="menu">


        <li>

            <a href="/show_for_User">

                <span class="menu-icon">
                    🌐
                </span>

                الموقع

            </a>

        </li>


        <li>

            <a href="/user_dashpord">

                <span class="menu-icon">
                    👤
                </span>

                صفحة المستخدم

            </a>

        </li>


        <li class="logout">

             <form action="/logout_admin" method="post">
                @csrf
  
                 <button> 

                <span class="menu-icon">
                    🚪
                </span>

                تسجيل الخروج

          </button>
        </form>

        </li>


    </ul>


</aside>


<!-- =====================================================
     MAIN
===================================================== -->

<main class="main"
      id="dashboard">


    <!-- =================================================
         TOPBAR
    ================================================= -->

    <div class="topbar">


        <div class="topbar-right">


            <button class="mobile-button"
                    id="mobileButton">

                ☰

            </button>


            <div class="topbar-title">

                لوحة
                <span>
                    الإدارة
                </span>

            </div>


        </div>


        <div class="topbar-left">


            <a href="/"
               class="top-button">

                الموقع الرئيسي

            </a>


            <a href="/show_for_User"
               class="top-button">

                المتجر

            </a>


        </div>


    </div>


    <!-- =================================================
         WELCOME
    ================================================= -->

    <section class="welcome">


        <div class="welcome-content">


            <h1>

                أهلاً بك،
                <span>
                    {{ auth()->user()->name }}
                </span>

            </h1>


            <p>

                هذه لوحة التحكم الخاصة بك.
                من هنا يمكنك متابعة المبيعات والعملاء
                والمنتجات والتراخيص من مكان واحد.

            </p>


        </div>


    </section>


    <!-- =================================================
         STATISTICS
    ================================================= -->

    <section class="stats">


        <!-- SALES -->

        <div class="stat-card">


            <div class="stat-top">

                <div class="stat-icon">
                    💰
                </div>

            </div>


            <div class="stat-number">

                {{ number_format($totalSales, 2) }}

                <span class="currency">
                    ريال
                </span>

            </div>


            <div class="stat-title">

                إجمالي المبيعات

            </div>


        </div>


        <!-- CUSTOMERS -->

        <div class="stat-card">


            <div class="stat-top">

                <div class="stat-icon">
                    👥
                </div>

            </div>


            <div class="stat-number">

                {{ $usersCount }}

            </div>


            <div class="stat-title">

                العملاء

            </div>


        </div>


        <!-- PRODUCTS -->

        <div class="stat-card">


            <div class="stat-top">

                <div class="stat-icon">
                    📦
                </div>

            </div>


            <div class="stat-number">

                {{ $productsCount }}

            </div>


            <div class="stat-title">

                المنتجات

            </div>


        </div>


        <!-- LICENSES -->

        <div class="stat-card">


            <div class="stat-top">

                <div class="stat-icon">
                    📄
                </div>

            </div>


            <div class="stat-number">

                {{ $activeLicenses }}

            </div>


            <div class="stat-title">

                التراخيص النشطة

            </div>


        </div>


        <!-- PAYMENTS -->

        <div class="stat-card">


            <div class="stat-top">

                <div class="stat-icon">
                    💳
                </div>

            </div>


            <div class="stat-number">

                {{ $paymentsCount }}

            </div>


            <div class="stat-title">

                عمليات الدفع

            </div>


        </div>


    </section>


    <!-- =================================================
         SALES
    ================================================= -->

    <section class="section"
             id="sales">


        <div class="section-head">


            <div>

                <h2>
                    آخر المبيعات
                </h2>

                <p>
                    أحدث عمليات الدفع في المتجر
                </p>

            </div>


            <a href="/sales"
               class="section-link">

                عرض الكل ←

            </a>


        </div>


        <div class="table-card">


            @if($payments->count())


                <div class="table-scroll">


                    <table>


                        <thead>

                            <tr>

                                <th>
                                    العميل
                                </th>

                                <th>
                                    المنتج
                                </th>

                                <th>
                                    الترخيص
                                </th>

                                <th>
                                    المبلغ
                                </th>

                                <th>
                                    الدفع
                                </th>

                                <th>
                                    الحالة
                                </th>

                                <th>
                                    التاريخ
                                </th>

                            </tr>

                        </thead>


                        <tbody>


                            @foreach($payments as $payment)


                                <tr>


                                    <!-- CUSTOMER -->

                                    <td>

                                        @if($payment->user)

                                            <span class="main-text">

                                                {{ $payment->user->name }}

                                            </span>


                                            <span class="sub-text">

                                                {{ $payment->user->email }}

                                            </span>

                                        @else

                                            <span class="sub-text">

                                                مستخدم محذوف

                                            </span>

                                        @endif

                                    </td>


                                    <!-- PRODUCT -->

                                    <td>

                                        <span class="main-text">

                                            {{ $payment->product?->name ?? 'منتج محذوف' }}

                                        </span>

                                    </td>


                                    <!-- LICENSE -->

                                    <td>

                                        @if($payment->license_type === 'monthly')

                                            <span class="badge badge-blue">

                                                شهري

                                            </span>

                                        @else

                                            <span class="badge badge-green">

                                                دائم

                                            </span>

                                        @endif

                                    </td>


                                    <!-- AMOUNT -->

                                    <td>

                                        <span class="price">

                                            {{ number_format($payment->amount, 2) }}

                                        </span>

                                        <span class="currency">

                                            ريال

                                        </span>

                                    </td>


                                    <!-- METHOD -->

                                    <td>

                                        {{ $payment->payment_method }}

                                    </td>


                                    <!-- STATUS -->

                                    <td>

                                        @if($payment->status === 'paid')

                                            <span class="badge badge-green">

                                                مدفوع

                                            </span>

                                        @else

                                            <span class="badge badge-red">

                                                {{ $payment->status }}

                                            </span>

                                        @endif

                                    </td>


                                    <!-- DATE -->

                                    <td>

                                        {{ $payment->created_at->format('Y-m-d') }}

                                    </td>


                                </tr>


                            @endforeach


                        </tbody>


                    </table>


                </div>


            @else


                <div class="empty">

                    <div class="empty-icon">
                        💰
                    </div>

                    <h3>
                        لا توجد مبيعات
                    </h3>

                    <p>
                        لم يتم تسجيل أي عملية دفع حتى الآن.
                    </p>

                </div>


            @endif


        </div>


    </section>


    <!-- =================================================
         LICENSES
    ================================================= -->

    <section class="section"
             id="licenses">


        <div class="section-head">


            <div>

                <h2>
                    آخر التراخيص
                </h2>

                <p>
                    أحدث التراخيص الموجودة في النظام
                </p>

            </div>


            <a href="/license"
               class="section-link">

                إدارة التراخيص ←

            </a>


        </div>


        <div class="table-card">


            @if($licenses->count())


                <div class="table-scroll">


                    <table>


                        <thead>

                            <tr>

                                <th>
                                    العميل
                                </th>

                                <th>
                                    المنتج
                                </th>

                                <th>
                                    النوع
                                </th>

                                <th>
                                    البداية
                                </th>

                                <th>
                                    النهاية
                                </th>

                                <th>
                                    الحالة
                                </th>

                            </tr>

                        </thead>


                        <tbody>


                            @foreach($licenses as $license)


                                @php

                                    $active =

                                        $license->status &&

                                        (

                                            !$license->end_date ||

                                            \Carbon\Carbon::parse(
                                                $license->end_date
                                            )->isFuture()

                                        );

                                @endphp


                                <tr>


                                    <!-- CUSTOMER -->

                                    <td>

                                        @if($license->user)

                                            <span class="main-text">

                                                {{ $license->user->name }}

                                            </span>


                                            <span class="sub-text">

                                                {{ $license->user->email }}

                                            </span>

                                        @else

                                            <span class="sub-text">

                                                مستخدم محذوف

                                            </span>

                                        @endif

                                    </td>


                                    <!-- PRODUCT -->

                                    <td>

                                        <span class="main-text">

                                            {{ $license->product?->name ?? 'منتج محذوف' }}

                                        </span>

                                    </td>


                                    <!-- TYPE -->

                                    <td>

                                        @if($license->type === 'monthly')

                                            <span class="badge badge-blue">

                                                شهري

                                            </span>

                                        @else

                                            <span class="badge badge-green">

                                                دائم

                                            </span>

                                        @endif

                                    </td>


                                    <!-- START -->

                                    <td>

                                        {{ $license->start_date }}

                                    </td>


                                    <!-- END -->

                                    <td>

                                        @if($license->end_date)

                                            {{ $license->end_date }}

                                        @else

                                            <span class="sub-text">

                                                غير محدد

                                            </span>

                                        @endif

                                    </td>


                                    <!-- STATUS -->

                                    <td>

                                        @if($active)

                                            <span class="badge badge-green">

                                                نشط

                                            </span>

                                        @else

                                            <span class="badge badge-red">

                                                منتهي

                                            </span>

                                        @endif

                                    </td>


                                </tr>


                            @endforeach


                        </tbody>


                    </table>


                </div>


            @else


                <div class="empty">

                    <div class="empty-icon">
                        📄
                    </div>

                    <h3>
                        لا توجد تراخيص
                    </h3>

                    <p>
                        لم يتم إنشاء أي ترخيص حتى الآن.
                    </p>

                </div>


            @endif


        </div>


    </section>


    <!-- =================================================
         PRODUCTS
    ================================================= -->

    <section class="section"
             id="products">


        <div class="section-head">


            <div>

                <h2>
                    المنتجات
                </h2>

                <p>
                    المنتجات الحالية في المتجر
                </p>

            </div>


            <a href="/insert_products"
               class="section-link">

                إضافة منتج +

            </a>


        </div>


        <div class="table-card">


            @if($products->count())


                <div class="table-scroll">


                    <table>


                        <thead>

                            <tr>

                                <th>
                                    المنتج
                                </th>

                                <th>
                                    الشهري
                                </th>

                                <th>
                                    الدائم
                                </th>

                                <th>
                                    الحالة
                                </th>

                                <th>
                                    تاريخ الإضافة
                                </th>

                            </tr>

                        </thead>


                        <tbody>


                            @foreach($products as $product)


                                <tr>


                                    <td>

                                        <span class="main-text">

                                            {{ $product->name }}

                                        </span>


                                        <span class="sub-text">

                                            #{{ $product->id }}

                                        </span>

                                    </td>


                                    <td>

                                        <span class="price">

                                            {{ number_format($product->price_monthly, 2) }}

                                        </span>

                                        <span class="currency">

                                            ريال

                                        </span>

                                    </td>


                                    <td>

                                        <span class="price">

                                            {{ number_format($product->price_lifetime, 2) }}

                                        </span>

                                        <span class="currency">

                                            ريال

                                        </span>

                                    </td>

<td>

    @if($product->status === 'قيد التجهيز')

        <a
            href="/update_status/{{$product->id}}"
            class="badge badge-orange"
        >
            قيد التجهيز
        </a>

    @else

        <a
            href="/update_status/{{$product->id}}"
            class="badge badge-green"
        >
            {{ $product->status }}
        </a>

    @endif

</td>

                                    <td>

                                        {{ $product->created_at->format('Y-m-d') }}

                                    </td>


                                </tr>


                            @endforeach


                        </tbody>


                    </table>


                </div>


            @else


                <div class="empty">

                    <div class="empty-icon">
                        📦
                    </div>

                    <h3>
                        لا توجد منتجات
                    </h3>

                    <p>
                        لم تتم إضافة منتجات حتى الآن.
                    </p>

                </div>


            @endif


        </div>


    </section>


    <!-- =================================================
         QUICK MANAGEMENT
    ================================================= -->

    <section class="section"
             id="customers">


        <div class="section-head">


            <div>

                <h2>
                    إدارة سريعة
                </h2>

                <p>
                    الوصول إلى أهم وظائف النظام
                </p>

            </div>


        </div>


        <div class="quick-grid">


            <!-- PRODUCTS -->

            <div class="quick-card">


                <div class="quick-icon">
                    📦
                </div>


                <h3>
                    المنتجات
                </h3>


                <p>

                    إضافة المنتجات الرقمية وإدارة
                    الأسعار والملفات الخاصة بها.

                </p>


                <a href="/insert_products">

                    إدارة المنتجات ←

                </a>


            </div>


            <!-- CATEGORIES -->

            <div class="quick-card">


                <div class="quick-icon">
                    🗂️
                </div>


                <h3>
                    التصنيفات
                </h3>


                <p>

                    تنظيم المنتجات وتصنيفها داخل المتجر.

                </p>


                <a href="/insert_cat">

                    إدارة التصنيفات ←

                </a>


            </div>


            <!-- LICENSE -->

            <div class="quick-card">


                <div class="quick-icon">
                    📄
                </div>


                <h3>
                    التراخيص
                </h3>


                <p>

                    إنشاء ومتابعة التراخيص الشهرية
                    والدائمة للعملاء.

                </p>


                <a href="/insert_lic">

                    إدارة التراخيص ←

                </a>


            </div>




    <div class="quick-card">
        <div class="quick-icon">📦</div>
        <h3>المنتجات</h3>
        <a href="/product_admin">إدارة المنتجات</a>
    </div>

        </div>



        
    </section>


    

    <!-- =================================================
         FOOTER
    ================================================= -->

    <footer class="footer">

        ALAA Digital Solutions

        ©

        {{ date('Y') }}

        — لوحة الإدارة

    </footer>


</main>


<!-- =====================================================
     JAVASCRIPT
===================================================== -->

<script>


    const mobileButton =
        document.getElementById('mobileButton');


    const sidebar =
        document.getElementById('sidebar');


    const overlay =
        document.getElementById('overlay');


    /* فتح القائمة */

    mobileButton.addEventListener(
        'click',
        function () {

            sidebar.classList.add('open');

            overlay.classList.add('active');

        }
    );


    /* إغلاق القائمة */

    overlay.addEventListener(
        'click',
        function () {

            sidebar.classList.remove('open');

            overlay.classList.remove('active');

        }
    );


    /* إغلاق القائمة */

    document
        .querySelectorAll('.menu a')
        .forEach(function (link) {

            link.addEventListener(
                'click',
                function () {

                    sidebar.classList.remove('open');

                    overlay.classList.remove('active');

                }
            );

        });


    /* الرابط النشط */

    document
        .querySelectorAll('.menu a')
        .forEach(function (link) {

            link.addEventListener(
                'click',
                function () {

                    document
                        .querySelectorAll('.menu a')
                        .forEach(function (item) {

                            item.classList.remove('active');

                        });


                    this.classList.add('active');

                }
            );

        });


</script>


</body>

</html>