<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>إدارة المنتجات | ALAA ADMIN</title>


    <style>

        /* =========================
           RESET
        ========================= */

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }


        body {

            font-family: "Segoe UI", Tahoma, Arial, sans-serif;

            background:
                radial-gradient(
                    circle at 10% 0%,
                    rgba(34, 197, 94, 0.08),
                    transparent 30%
                ),
                radial-gradient(
                    circle at 90% 100%,
                    rgba(34, 197, 94, 0.06),
                    transparent 30%
                ),
                #f5f8f6;

            color: #17231d;

            min-height: 100vh;
        }


        /* =========================
           PAGE
        ========================= */

        .page {

            width: 100%;

            min-height: 100vh;

            padding: 45px;
        }


        /* =========================
           HEADER
        ========================= */

        .header {

            max-width: 1400px;

            margin: 0 auto 35px;

            display: flex;

            justify-content: space-between;

            align-items: center;

            gap: 20px;
        }


        .header-right {

            display: flex;

            align-items: center;

            gap: 17px;
        }


        /* =========================
           LOGO
        ========================= */

        .logo {

            width: 60px;
            height: 60px;

            display: flex;

            align-items: center;

            justify-content: center;

            border-radius: 18px;

            background:
                linear-gradient(
                    145deg,
                    #eafff0,
                    #d9f8e4
                );

            border: 1px solid #c9efd6;

            color: #1f9d50;

            font-size: 16px;

            font-weight: 900;

            letter-spacing: .5px;

            box-shadow:
                0 10px 30px rgba(34,197,94,.10);
        }


        /* =========================
           TITLE
        ========================= */

        .header-title h1 {

            font-size: 28px;

            font-weight: 800;

            color: #18251e;

            margin-bottom: 6px;
        }


        .header-title p {

            color: #7b8b82;

            font-size: 14px;
        }


        /* =========================
           BACK BUTTON
        ========================= */

        .back-btn {

            text-decoration: none;

            display: inline-flex;

            align-items: center;

            gap: 9px;

            padding: 12px 19px;

            border-radius: 13px;

            color: #587064;

            background: #ffffff;

            border: 1px solid #e0e9e3;

            font-size: 14px;

            font-weight: 600;

            box-shadow:
                0 7px 25px rgba(25,55,38,.05);

            transition: .3s;
        }


        .back-btn:hover {

            color: #179447;

            border-color: #bde8ca;

            background: #f8fffa;

            transform: translateY(-2px);

            box-shadow:
                0 10px 28px rgba(34,197,94,.10);
        }


        /* =========================
           SUCCESS MESSAGE
        ========================= */

        .success-message {

            max-width: 1400px;

            margin: 0 auto 25px;

            padding: 15px 18px;

            border-radius: 14px;

            background: #effbf3;

            border: 1px solid #ccefd7;

            color: #218b48;

            font-size: 14px;

            font-weight: 600;

            box-shadow:
                0 8px 25px rgba(34,197,94,.05);
        }


        /* =========================
           STATS
        ========================= */

        .stats {

            max-width: 1400px;

            margin: 0 auto 35px;

            display: grid;

            grid-template-columns:
                repeat(3,1fr);

            gap: 18px;
        }


        .stat {

            position: relative;

            overflow: hidden;

            padding: 23px;

            border-radius: 20px;

            background: #ffffff;

            border: 1px solid #e3ebe6;

            box-shadow:
                0 10px 35px rgba(30,65,45,.055);

            transition: .3s;
        }


        .stat::after {

            content: "";

            position: absolute;

            width: 90px;
            height: 90px;

            left: -30px;
            bottom: -40px;

            border-radius: 50%;

            background:
                rgba(34,197,94,.06);
        }


        .stat:hover {

            transform: translateY(-4px);

            border-color: #c9ead3;

            box-shadow:
                0 15px 40px rgba(30,65,45,.09);
        }


        .stat-label {

            position: relative;

            z-index: 2;

            color: #819087;

            font-size: 13px;

            margin-bottom: 9px;
        }


        .stat-number {

            position: relative;

            z-index: 2;

            color: #1a2a21;

            font-size: 28px;

            font-weight: 800;
        }


        /* =========================
           PRODUCTS CONTAINER
        ========================= */

        .products-container {

            max-width: 1400px;

            margin: 0 auto;
        }


        /* =========================
           SECTION TITLE
        ========================= */

        .section-title {

            display: flex;

            justify-content: space-between;

            align-items: center;

            margin-bottom: 18px;
        }


        .section-title h2 {

            font-size: 19px;

            font-weight: 800;

            color: #1b2921;
        }


        .section-title span {

            color: #819188;

            font-size: 13px;
        }


        /* =========================
           PRODUCTS GRID
        ========================= */

        .products-grid {

            display: grid;

            grid-template-columns:
                repeat(auto-fit,minmax(330px,1fr));

            gap: 22px;
        }


        /* =========================
           PRODUCT CARD
        ========================= */

        .product-card {

            position: relative;

            overflow: hidden;

            padding: 27px;

            border-radius: 24px;

            background: #ffffff;

            border: 1px solid #e2ebe5;

            box-shadow:
                0 12px 40px rgba(27,60,41,.065);

            transition:
                transform .35s ease,
                border-color .35s ease,
                box-shadow .35s ease;
        }


        .product-card::before {

            content: "";

            position: absolute;

            width: 170px;
            height: 170px;

            top: -100px;
            left: -80px;

            border-radius: 50%;

            background:
                rgba(34,197,94,.07);

            filter: blur(25px);

            pointer-events: none;
        }


        .product-card:hover {

            transform: translateY(-8px);

            border-color: #bfe5ca;

            box-shadow:
                0 22px 55px rgba(27,60,41,.11),
                0 5px 20px rgba(34,197,94,.05);
        }


        /* =========================
           PRODUCT TOP
        ========================= */

        .product-top {

            position: relative;

            z-index: 2;

            display: flex;

            justify-content: space-between;

            align-items: center;

            gap: 10px;

            margin-bottom: 21px;
        }


        .product-number {

            color: #91a099;

            font-size: 11px;

            font-weight: 700;

            letter-spacing: .6px;
        }


        .category {

            padding: 7px 11px;

            border-radius: 10px;

            background: #effbf3;

            border: 1px solid #d7f1df;

            color: #229a4d;

            font-size: 11px;

            font-weight: 700;

            margin-right: auto;
        }


        /* =========================
           PRODUCT ICON
        ========================= */

        .product-icon {

            position: relative;

            z-index: 2;

            width: 58px;
            height: 58px;

            display: flex;

            align-items: center;

            justify-content: center;

            border-radius: 17px;

            margin-bottom: 18px;

            background:
                linear-gradient(
                    145deg,
                    #edfff3,
                    #e1f8e8
                );

            border: 1px solid #d1efda;

            color: #25a653;

            font-size: 25px;

            box-shadow:
                0 8px 22px rgba(34,197,94,.08);
        }


        /* =========================
           PRODUCT NAME
        ========================= */

        .product-name {

            position: relative;

            z-index: 2;

            font-size: 20px;

            line-height: 1.6;

            font-weight: 800;

            color: #17251d;

            margin-bottom: 11px;
        }


        /* =========================
           DESCRIPTION
        ========================= */

        .description {

            position: relative;

            z-index: 2;

            color: #718178;

            font-size: 13px;

            line-height: 1.9;

            min-height: 74px;

            margin-bottom: 24px;
        }


        /* =========================
           PRICES
        ========================= */

        .prices {

            position: relative;

            z-index: 2;

            display: grid;

            grid-template-columns: 1fr 1fr;

            gap: 12px;

            margin-bottom: 22px;
        }


        .price-box {

            padding: 15px;

            border-radius: 15px;

            background: #f8faf9;

            border: 1px solid #e6ede8;

            transition: .3s;
        }


        .product-card:hover .price-box {

            background: #f7fcf8;

            border-color: #dcebe1;
        }


        .price-label {

            display: block;

            color: #829188;

            font-size: 11px;

            margin-bottom: 7px;
        }


        .price {

            color: #1b2b22;

            font-size: 18px;

            font-weight: 800;
        }


        .price small {

            color: #7c8d84;

            font-size: 11px;

            font-weight: 500;
        }


        /* =========================
           PRODUCT ACTIONS
        ========================= */

        .product-actions {

            position: relative;

            z-index: 5;

            display: flex;

            gap: 9px;

            padding-top: 17px;

            border-top: 1px solid #edf1ee;
        }


        /* =========================
           EDIT BUTTON
        ========================= */

        .edit-product {

            flex: 1;

            display: inline-flex;

            align-items: center;

            justify-content: center;

            gap: 7px;

            padding: 10px 14px;

            border-radius: 12px;

            background: #effbf3;

            border: 1px solid #d5efdd;

            color: #24964b;

            text-decoration: none;

            font-size: 13px;

            font-weight: 700;

            cursor: pointer;

            transition: .3s;
        }


        .edit-product:hover {

            background: #dff8e7;

            border-color: #bce5c9;

            color: #178b40;

            transform: translateY(-2px);

            box-shadow:
                0 8px 20px rgba(34,197,94,.10);
        }


        /* =========================
           DELETE BUTTON
        ========================= */

        .remove-product {

            flex: 1;

            display: inline-flex;

            align-items: center;

            justify-content: center;

            gap: 8px;

            padding: 10px 14px;

            border-radius: 12px;

            background: #fff5f5;

            border: 1px solid #ffd8d8;

            color: #dc5a5a;

            text-decoration: none;

            font-size: 13px;

            font-weight: 700;

            transition: .3s;
        }


        .remove-icon {

            font-size: 14px;

            transition: transform .3s;
        }


        .remove-product:hover {

            background: #fff0f0;

            border-color: #ffbcbc;

            color: #d93636;

            transform: translateY(-2px);

            box-shadow:
                0 8px 20px rgba(220,90,90,.12);
        }


        .remove-product:hover .remove-icon {

            transform:
                scale(1.15)
                rotate(-8deg);
        }


        /* =========================
           STATUS
        ========================= */

        .product-footer {

            position: relative;

            z-index: 2;

            display: flex;

            justify-content: space-between;

            align-items: center;

            margin-top: 15px;

            padding-top: 15px;

            border-top: 1px solid #edf1ee;
        }


        .status {

            display: flex;

            align-items: center;

            gap: 8px;

            color: #708178;

            font-size: 12px;
        }


        .status-dot {

            width: 8px;
            height: 8px;

            border-radius: 50%;

            background: #35bd67;

            box-shadow:
                0 0 10px rgba(53,189,103,.35);
        }


        .product-id {

            color: #9aa8a1;

            font-size: 11px;
        }


        /* =========================
           EMPTY
        ========================= */

        .empty {

            max-width: 700px;

            margin: 70px auto;

            text-align: center;

            padding: 55px 30px;

            border-radius: 25px;

            background: #ffffff;

            border: 1px solid #e3ebe6;

            box-shadow:
                0 15px 45px rgba(30,65,45,.06);
        }


        .empty-icon {

            font-size: 45px;

            margin-bottom: 15px;
        }


        .empty h3 {

            color: #1d2b23;

            font-size: 20px;

            margin-bottom: 8px;
        }


        .empty p {

            color: #819088;

            font-size: 14px;
        }


        /* ==================================================
           EDIT MODAL
        ================================================== */

        .edit-modal {

            position: fixed;

            inset: 0;

            background:
                rgba(25,45,34,.35);

            backdrop-filter: blur(7px);

            -webkit-backdrop-filter: blur(7px);

            display: none;

            align-items: center;

            justify-content: center;

            padding: 20px;

            z-index: 9999;
        }


        .edit-modal.active {

            display: flex;
        }


        /* =========================
           MODAL BOX
        ========================= */

        .edit-modal-box {

            width: 100%;

            max-width: 680px;

            max-height: 90vh;

            overflow-y: auto;

            background: #ffffff;

            border: 1px solid #e1eae4;

            border-radius: 26px;

            padding: 30px;

            box-shadow:
                0 30px 90px rgba(20,50,32,.18);

            animation:
                modalShow .25s ease;
        }


        @keyframes modalShow {

            from {

                opacity: 0;

                transform:
                    translateY(20px)
                    scale(.97);
            }

            to {

                opacity: 1;

                transform:
                    translateY(0)
                    scale(1);
            }
        }


        /* =========================
           MODAL HEADER
        ========================= */

        .modal-header {

            display: flex;

            justify-content: space-between;

            align-items: center;

            gap: 15px;

            padding-bottom: 20px;

            margin-bottom: 22px;

            border-bottom: 1px solid #edf1ee;
        }


        .modal-title h2 {

            color: #1a2a21;

            font-size: 21px;

            font-weight: 800;

            margin-bottom: 5px;
        }


        .modal-title p {

            color: #819088;

            font-size: 12px;
        }


        .close-modal {

            width: 40px;
            height: 40px;

            border-radius: 12px;

            border: 1px solid #e4ebe7;

            background: #f8faf9;

            color: #718078;

            font-size: 20px;

            cursor: pointer;

            transition: .3s;
        }


        .close-modal:hover {

            background: #fff1f1;

            border-color: #ffd0d0;

            color: #d95353;

            transform: rotate(90deg);
        }


        /* =========================
           FORM
        ========================= */

        .edit-form {

            display: flex;

            flex-direction: column;

            gap: 18px;
        }


        .form-group {

            display: flex;

            flex-direction: column;

            gap: 8px;
        }


        .form-group label {

            color: #34453b;

            font-size: 13px;

            font-weight: 700;
        }


        .form-group input,
        .form-group textarea,
        .form-group select {

            width: 100%;

            padding: 13px 15px;

            border-radius: 13px;

            border: 1px solid #dfe8e2;

            background: #fafcfb;

            color: #25362c;

            outline: none;

            font-family: inherit;

            font-size: 13px;

            transition: .3s;
        }


        .form-group input:focus,
        .form-group textarea:focus,
        .form-group select:focus {

            border-color: #9ed9af;

            background: #ffffff;

            box-shadow:
                0 0 0 4px rgba(34,197,94,.07);
        }


        .form-group textarea {

            min-height: 120px;

            resize: vertical;

            line-height: 1.8;
        }


        .form-row {

            display: grid;

            grid-template-columns: 1fr 1fr;

            gap: 14px;
        }


        /* =========================
           MODAL ACTIONS
        ========================= */

        .modal-actions {

            display: flex;

            gap: 10px;

            margin-top: 8px;

            padding-top: 20px;

            border-top: 1px solid #edf1ee;
        }


        .save-edit {

            flex: 1;

            border: none;

            padding: 13px;

            border-radius: 13px;

            background:
                linear-gradient(
                    135deg,
                    #39b966,
                    #23994e
                );

            color: #ffffff;

            font-family: inherit;

            font-size: 13px;

            font-weight: 700;

            cursor: pointer;

            box-shadow:
                0 8px 20px rgba(34,197,94,.18);

            transition: .3s;
        }


        .save-edit:hover {

            transform: translateY(-2px);

            box-shadow:
                0 12px 25px rgba(34,197,94,.24);
        }


        .cancel-edit {

            padding: 13px 22px;

            border-radius: 13px;

            border: 1px solid #e0e8e3;

            background: #f7faf8;

            color: #6c7c73;

            font-family: inherit;

            font-size: 13px;

            font-weight: 700;

            cursor: pointer;

            transition: .3s;
        }


        .cancel-edit:hover {

            background: #eef4f0;

            color: #405149;
        }


        /* =========================
           RESPONSIVE
        ========================= */

        @media (max-width: 900px) {

            .page {

                padding: 25px;
            }


            .stats {

                grid-template-columns: 1fr;
            }


            .header {

                align-items: flex-start;
            }
        }


        @media (max-width: 600px) {

            .page {

                padding: 18px;
            }


            .header {

                flex-direction: column;
            }


            .header-right {

                width: 100%;
            }


            .header-title h1 {

                font-size: 23px;
            }


            .back-btn {

                width: 100%;

                justify-content: center;
            }


            .products-grid {

                grid-template-columns: 1fr;
            }


            .product-card {

                padding: 22px;
            }


            .prices {

                grid-template-columns: 1fr;
            }


            .product-top {

                flex-wrap: wrap;
            }


            .product-actions {

                flex-direction: column;
            }


            .section-title {

                align-items: flex-end;
            }


            .edit-modal-box {

                padding: 22px;

                border-radius: 21px;
            }


            .form-row {

                grid-template-columns: 1fr;
            }


            .modal-actions {

                flex-direction: column;
            }


            .cancel-edit {

                width: 100%;
            }
        }

    </style>

</head>


<body>


<div class="page">


    <!-- =========================
         HEADER
    ========================= -->

    <header class="header">


        <div class="header-right">


            <div class="logo">
                ALAA
            </div>


            <div class="header-title">

                <h1>
                    إدارة المنتجات
                </h1>

                <p>
                    إدارة ومتابعة المنتجات الرقمية والأسعار والتصنيفات
                </p>

            </div>


        </div>


        <a href="/admin_dashpord" class="back-btn">

            <span>←</span>

            العودة للوحة التحكم

        </a>


    </header>



    <!-- =========================
         SUCCESS
    ========================= -->

    @if(session('success'))

        <div class="success-message">

            ✓ {{ session('success') }}

        </div>

    @endif



    <!-- =========================
         STATS
    ========================= -->

    <section class="stats">


        <div class="stat">

            <div class="stat-label">
                إجمالي المنتجات
            </div>

            <div class="stat-number">
                {{ $product->count() }}
            </div>

        </div>



        <div class="stat">

            <div class="stat-label">
                المنتجات الرقمية
            </div>

            <div class="stat-number">
                {{ $product->count() }}
            </div>

        </div>



        <div class="stat">

            <div class="stat-label">
                المنتجات المعروضة
            </div>

            <div class="stat-number">
                {{ $product->count() }}
            </div>

        </div>


    </section>



    <!-- =========================
         PRODUCTS
    ========================= -->

    <main class="products-container">


        <div class="section-title">

            <h2>
                جميع المنتجات
            </h2>

            <span>
                {{ $product->count() }} منتج
            </span>

        </div>



        @if($product->count() > 0)


            <div class="products-grid">


                @foreach($product as $p)


                    <article class="product-card">


                        <!-- =========================
                             TOP
                        ========================= -->

                        <div class="product-top">


                            <span class="product-number">

                                PRODUCT #{{ $p->id }}

                            </span>


                            <span class="category">

                                {{ $p->category_name }}

                            </span>


                        </div>



                        <!-- =========================
                             ICON
                        ========================= -->

                        <div class="product-icon">

                            ◈

                        </div>



                        <!-- =========================
                             NAME
                        ========================= -->

                        <h2 class="product-name">

                            {{ $p->name }}

                        </h2>



                        <!-- =========================
                             DESCRIPTION
                        ========================= -->

                        <p class="description">

                            {{ $p->description }}

                        </p>



                        <!-- =========================
                             PRICES
                        ========================= -->

                        <div class="prices">


                            <div class="price-box">

                                <span class="price-label">
                                    الاشتراك الشهري
                                </span>

                                <div class="price">

                                    {{ number_format($p->price_monthly, 2) }}

                                    <small>
                                        ريال
                                    </small>

                                </div>

                            </div>



                            <div class="price-box">

                                <span class="price-label">
                                    مدى الحياة
                                </span>

                                <div class="price">

                                    {{ number_format($p->price_lifetime, 2) }}

                                    <small>
                                        ريال
                                    </small>

                                </div>

                            </div>


                        </div>



                        <!-- =========================
                             ACTIONS
                        ========================= -->

                        <div class="product-actions">


                            <!-- EDIT -->

                            <button
                                type="button"
                                class="edit-product"
                                onclick="openEditModal(
                                    {{ $p->id }},
                                    @js($p->name),
                                    @js($p->description),
                                    @js($p->price_monthly),
                                    @js($p->price_lifetime),
                                    {{ $p->category_id }}
                                )"
                            >

                                ✏️

                                تعديل المنتج

                            </button>



                            <!-- DELETE -->

                            <a
                                href="/remove_one_product/{{ $p->id }}"
                                class="remove-product"
                                onclick="return confirm('هل أنت متأكد من حذف هذا المنتج؟');"
                            >

                                <span class="remove-icon">
                                    🗑
                                </span>

                                حذف المنتج

                            </a>


                        </div>



                        <!-- =========================
                             FOOTER
                        ========================= -->

                        <div class="product-footer">


                            <div class="status">

                                <span class="status-dot"></span>

                                منتج نشط

                            </div>


                            <span class="product-id">

                                ID: {{ $p->id }}

                            </span>


                        </div>


                    </article>


                @endforeach


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
                    لم تتم إضافة أي منتجات إلى المتجر حتى الآن.
                </p>


            </div>


        @endif


    </main>


</div>



<!-- ==================================================
     EDIT MODAL
================================================== -->

<div
    class="edit-modal"
    id="editModal"
>


    <div class="edit-modal-box">


        <!-- =========================
             MODAL HEADER
        ========================= -->

        <div class="modal-header">


            <div class="modal-title">

                <h2>
                    تعديل المنتج
                </h2>

                <p>
                    قم بتعديل بيانات المنتج ثم اضغط حفظ التعديلات
                </p>

            </div>


            <button
                type="button"
                class="close-modal"
                onclick="closeEditModal()"
            >

                ×

            </button>


        </div>



        <!-- =========================
             EDIT FORM
        ========================= -->

        <form
            method="POST"
            id="editProductForm"
            class="edit-form"
        >

            @csrf



            <!-- PRODUCT NAME -->

            <div class="form-group">

                <label for="edit_name">
                    اسم المنتج
                </label>

                <input
                    type="text"
                    name="name"
                    id="edit_name"
                    required
                >

            </div>



            <!-- DESCRIPTION -->

            <div class="form-group">

                <label for="edit_description">
                    وصف المنتج
                </label>

                <textarea
                    name="description"
                    id="edit_description"
                    required
                ></textarea>

            </div>



            <!-- PRICES -->

            <div class="form-row">


                <div class="form-group">

                    <label for="edit_price_monthly">
                        السعر الشهري
                    </label>

                    <input
                        type="number"
                        name="price_monthly"
                        id="edit_price_monthly"
                        min="0"
                        step="0.01"
                        required
                    >

                </div>



                <div class="form-group">

                    <label for="edit_price_lifetime">
                        السعر مدى الحياة
                    </label>

                    <input
                        type="number"
                        name="price_lifetime"
                        id="edit_price_lifetime"
                        min="0"
                        step="0.01"
                        required
                    >

                </div>


            </div>



            <!-- CATEGORY -->

            <div class="form-group">

                <label for="edit_category_id">
                    التصنيف
                </label>


                <select
                    name="category_id"
                    id="edit_category_id"
                    required
                >

                    @foreach($categories as $category)

                        <option value="{{ $category->id }}">

                            {{ $category->name }}

                        </option>

                    @endforeach

                </select>

            </div>



            <!-- ACTIONS -->

            <div class="modal-actions">


                <button
                    type="submit"
                    class="save-edit"
                >

                    ✓

                    حفظ التعديلات

                </button>


                <button
                    type="button"
                    class="cancel-edit"
                    onclick="closeEditModal()"
                >

                    إلغاء

                </button>


            </div>


        </form>


    </div>

</div>



<!-- ==================================================
     JAVASCRIPT
================================================== -->

<script>


    /* =========================
       OPEN EDIT MODAL
    ========================= */

    function openEditModal(
        id,
        name,
        description,
        priceMonthly,
        priceLifetime,
        categoryId
    ) {


        /*
         * تعبئة البيانات
         */

        document.getElementById('edit_name').value =
            name;


        document.getElementById('edit_description').value =
            description;


        document.getElementById('edit_price_monthly').value =
            priceMonthly;


        document.getElementById('edit_price_lifetime').value =
            priceLifetime;


        document.getElementById('edit_category_id').value =
            categoryId;



        /*
         * تغيير رابط الفورم حسب ID المنتج
         */

        document.getElementById('editProductForm').action =
            '/update_one_product/' + id;



        /*
         * فتح النافذة
         */

        document.getElementById('editModal')
            .classList.add('active');


        /*
         * منع Scroll للصفحة بالخلفية
         */

        document.body.style.overflow = 'hidden';

    }



    /* =========================
       CLOSE EDIT MODAL
    ========================= */

    function closeEditModal() {

        document.getElementById('editModal')
            .classList.remove('active');


        document.body.style.overflow = '';

    }



    /* =========================
       CLOSE WHEN CLICK OUTSIDE
    ========================= */

    document.getElementById('editModal')
        .addEventListener('click', function(event) {

            if (event.target === this) {

                closeEditModal();

            }

        });



    /* =========================
       ESC KEY
    ========================= */

    document.addEventListener('keydown', function(event) {

        if (event.key === 'Escape') {

            closeEditModal();

        }

    });


</script>


</body>

</html>