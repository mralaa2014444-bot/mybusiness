```blade
<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>
        الدفع | {{ $product->name ?? 'المنتج' }}
    </title>

    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family:
                "Segoe UI",
                Tahoma,
                Arial,
                sans-serif;

            min-height: 100vh;

            color: #17202a;

            background:
                radial-gradient(
                    circle at top right,
                    #e8f5d9 0%,
                    #f7f9f5 38%,
                    #f1f4f2 100%
                );
        }

        /* =========================
           HEADER
        ========================= */

        .header {

            width: 100%;

            padding: 21px 7%;

            display: flex;

            justify-content: space-between;

            align-items: center;

            background:
                rgba(255,255,255,.88);

            border-bottom:
                1px solid #e7ebe5;

            backdrop-filter:
                blur(14px);
        }

        .logo {

            font-size: 23px;

            font-weight: 900;

            color: #6fa611;

            letter-spacing: .5px;
        }

        .secure {

            display: flex;

            align-items: center;

            gap: 9px;

            color: #69736d;

            font-size: 13px;

            font-weight: 700;
        }

        .secure-icon {

            width: 34px;
            height: 34px;

            display: flex;

            align-items: center;
            justify-content: center;

            border-radius: 50%;

            background: #edf7e5;

            color: #6fa611;
        }


        /* =========================
           PAGE
        ========================= */

        .page {

            width: min(1120px, 92%);

            margin:
                48px auto 80px;
        }


        .heading {

            text-align: center;

            margin-bottom: 35px;
        }

        .heading span {

            display: inline-block;

            padding:
                7px 16px;

            border-radius: 30px;

            background: #edf6e5;

            color: #6fa611;

            font-size: 12px;

            font-weight: 800;

            margin-bottom: 13px;
        }

        .heading h1 {

            font-size:
                clamp(28px, 4vw, 40px);

            margin-bottom: 9px;
        }

        .heading p {

            color: #7b847e;

            font-size: 14px;
        }


        /* =========================
           LAYOUT
        ========================= */

        .payment-layout {

            display: grid;

            grid-template-columns:
                minmax(0, 1.3fr)
                minmax(320px, .7fr);

            gap: 24px;

            align-items: start;
        }


        /* =========================
           CARD
        ========================= */

        .card {

            background:
                rgba(255,255,255,.96);

            border:
                1px solid #e4e9e4;

            border-radius: 23px;

            box-shadow:
                0 20px 60px
                rgba(30,40,32,.07);
        }


        /* =========================
           CARD HEADER
        ========================= */

        .card-header {

            padding: 24px 27px;

            border-bottom:
                1px solid #edf0ed;
        }

        .card-header h2 {

            font-size: 19px;

            margin-bottom: 5px;
        }

        .card-header p {

            color: #89918c;

            font-size: 12px;
        }


        .card-body {

            padding: 27px;
        }


        /* =========================
           PRODUCT
        ========================= */

        .product {

            display: flex;

            align-items: flex-start;

            gap: 17px;

            padding-bottom: 25px;

            margin-bottom: 25px;

            border-bottom:
                1px solid #edf0ed;
        }

        .product-image {

            width: 92px;
            height: 92px;

            flex-shrink: 0;

            overflow: hidden;

            border-radius: 17px;

            background: #f1f4ef;

            display: flex;

            align-items: center;
            justify-content: center;
        }

        .product-image img {

            width: 100%;
            height: 100%;

            object-fit: cover;
        }

        .no-image {

            color: #6fa611;

            font-size: 10px;

            font-weight: 900;

            text-align: center;
        }

        .product-details {

            flex: 1;

            min-width: 0;
        }

        .product-details small {

            display: block;

            color: #6fa611;

            font-size: 10px;

            font-weight: 900;

            margin-bottom: 7px;
        }

        .product-details h3 {

            font-size: 20px;

            color: #202820;

            margin-bottom: 7px;
        }

        .product-details p {

            color: #7b847e;

            font-size: 12px;

            line-height: 1.8;
        }


        /* =========================
           SECTION TITLE
        ========================= */

        .section-title {

            font-size: 14px;

            font-weight: 900;

            color: #263029;

            margin-bottom: 12px;
        }


        /* =========================
           LICENSE
        ========================= */

        .license-box {

            display: flex;

            align-items: center;

            justify-content: space-between;

            gap: 15px;

            padding: 16px;

            border:
                1px solid #dfe8d8;

            border-radius: 15px;

            background: #f7fbf4;

            margin-bottom: 25px;
        }

        .license-info {

            display: flex;

            align-items: center;

            gap: 12px;
        }

        .license-icon {

            width: 41px;
            height: 41px;

            display: flex;

            align-items: center;
            justify-content: center;

            border-radius: 12px;

            background: #e7f3dc;

            color: #6fa611;

            font-size: 17px;

            font-weight: 900;
        }

        .license-info strong {

            display: block;

            font-size: 14px;

            margin-bottom: 3px;
        }

        .license-info span {

            display: block;

            color: #7d867f;

            font-size: 11px;
        }

        .license-status {

            padding: 6px 11px;

            border-radius: 20px;

            background: #e5f2d9;

            color: #5f900e;

            font-size: 10px;

            font-weight: 900;
        }


        /* =========================
           PAYMENT FORM
        ========================= */

        .payment-section {

            padding-top: 3px;
        }

        .payment-methods {

            display: grid;

            grid-template-columns:
                repeat(3, 1fr);

            gap: 10px;

            margin-bottom: 22px;
        }

        .method {

            position: relative;

            cursor: pointer;
        }

        .method input {

            position: absolute;

            opacity: 0;

            pointer-events: none;
        }

        .method-content {

            min-height: 72px;

            padding: 12px 8px;

            display: flex;

            flex-direction: column;

            align-items: center;

            justify-content: center;

            gap: 6px;

            border:
                1px solid #e2e7e3;

            border-radius: 14px;

            background: #fff;

            transition: .2s ease;
        }

        .method-content span {

            font-size: 19px;
        }

        .method-content strong {

            font-size: 11px;

            color: #58615b;
        }

        .method input:checked + .method-content {

            border-color: #6fa611;

            background: #f5faef;

            box-shadow:
                0 0 0 2px
                rgba(111,166,17,.09);
        }


        /* =========================
           FORM
        ========================= */

        .form-group {

            margin-bottom: 17px;
        }

        .form-group label {

            display: block;

            margin-bottom: 7px;

            font-size: 12px;

            font-weight: 800;

            color: #465048;
        }

        .input {

            width: 100%;

            height: 48px;

            border:
                1px solid #dfe5e0;

            border-radius: 12px;

            padding:
                0 14px;

            outline: none;

            background: #fbfcfb;

            color: #263029;

            font-family: inherit;

            font-size: 13px;

            transition:
                border-color .2s,
                box-shadow .2s;
        }

        .input:focus {

            border-color: #7baa25;

            background: #fff;

            box-shadow:
                0 0 0 4px
                rgba(111,166,17,.08);
        }

        .input::placeholder {

            color: #a2aaa5;
        }

        .form-row {

            display: grid;

            grid-template-columns: 1fr 1fr;

            gap: 13px;
        }


        /* =========================
           SECURITY NOTE
        ========================= */

        .security-note {

            display: flex;

            align-items: flex-start;

            gap: 10px;

            padding: 13px;

            border-radius: 12px;

            background: #f7f9f7;

            color: #737c76;

            font-size: 10px;

            line-height: 1.8;

            margin-top: 8px;
        }

        .security-note-icon {

            flex-shrink: 0;

            color: #6fa611;

            font-size: 15px;
        }


        /* =========================
           SUMMARY
        ========================= */

        .summary {

            padding: 27px;
        }

        .summary-title {

            font-size: 18px;

            font-weight: 900;

            margin-bottom: 21px;
        }

        .summary-row {

            display: flex;

            justify-content: space-between;

            align-items: center;

            gap: 12px;

            padding: 12px 0;

            color: #747d77;

            font-size: 13px;
        }

        .summary-row strong {

            color: #252d28;

            max-width: 190px;

            text-align: left;
        }

        .summary-divider {

            border: 0;

            border-top:
                1px solid #edf0ed;

            margin: 8px 0;
        }


        /* =========================
           TOTAL
        ========================= */

        .total {

            display: flex;

            justify-content: space-between;

            align-items: center;

            padding-top: 17px;
        }

        .total-label {

            font-size: 14px;

            font-weight: 800;
        }

        .total-price {

            color: #6fa611;

            font-size: 27px;

            font-weight: 900;
        }

        .currency {

            color: #6f7772;

            font-size: 11px;

            margin-right: 3px;
        }


        /* =========================
           PAY BUTTON
        ========================= */

        .pay-button {

            width: 100%;

            margin-top: 23px;

            min-height: 52px;

            border: none;

            border-radius: 13px;

            background:
                linear-gradient(
                    135deg,
                    #7cae1d,
                    #639b08
                );

            color: #fff;

            font-family: inherit;

            font-size: 14px;

            font-weight: 900;

            cursor: pointer;

            transition:
                transform .2s ease,
                box-shadow .2s ease;
        }

        .pay-button:hover {

            transform:
                translateY(-2px);

            box-shadow:
                0 13px 30px
                rgba(111,166,17,.24);
        }


        /* =========================
           TRUST
        ========================= */

        .trust {

            display: grid;

            grid-template-columns:
                repeat(3, 1fr);

            gap: 8px;

            margin-top: 17px;
        }

        .trust-item {

            text-align: center;

            padding: 11px 5px;

            border-radius: 11px;

            background: #f8faf8;

            color: #78817b;

            font-size: 9px;
        }

        .trust-item strong {

            display: block;

            color: #59635c;

            font-size: 11px;

            margin-bottom: 3px;
        }


        /* =========================
           BACK
        ========================= */

        .back {

            display: flex;

            justify-content: center;

            align-items: center;

            gap: 7px;

            margin-top: 21px;

            color: #707973;

            text-decoration: none;

            font-size: 11px;

            transition: .2s ease;
        }

        .back:hover {

            color: #6fa611;
        }


        /* =========================
           MOBILE
        ========================= */

        @media (max-width: 850px) {

            .payment-layout {

                grid-template-columns: 1fr;
            }

            .summary {

                order: -1;
            }
        }


        @media (max-width: 520px) {

            .header {

                padding:
                    17px 5%;
            }

            .page {

                width: 94%;

                margin-top: 30px;
            }

            .card-body,
            .card-header,
            .summary {

                padding: 20px;
            }

            .product-image {

                width: 75px;
                height: 75px;
            }

            .product-details h3 {

                font-size: 17px;
            }

            .payment-methods {

                grid-template-columns: 1fr;
            }

            .form-row {

                grid-template-columns: 1fr;
            }

            .trust {

                grid-template-columns: 1fr;
            }
        }

    </style>

</head>


<body>


<!-- =========================
     HEADER
========================= -->

<header class="header">

    <div class="logo">
        ALAA
    </div>

    <div class="secure">

        <div class="secure-icon">
            🔒
        </div>

        دفع آمن

    </div>

</header>


<!-- =========================
     PAGE
========================= -->

<main class="page">


    <div class="heading">

        <span>
            الدفع الآمن
        </span>

        <h1>
            إتمام عملية الدفع
        </h1>

        <p>
            أكمل بيانات الدفع للحصول على منتجك
        </p>

    </div>


    <div class="payment-layout">


        <!-- =========================
             PAYMENT FORM
        ========================= -->

        <section class="card">


            <div class="card-header">

                <h2>
                    تفاصيل الدفع
                </h2>

                <p>
                    اختر طريقة الدفع المناسبة لك
                </p>

            </div>


            <div class="card-body">


                <!-- PRODUCT -->

                <div class="product">


                    <div class="product-image">

                        @if($product->image)

                            <img
                                src="{{ asset('storage/' . $product->image) }}"
                                alt="{{ $product->name }}"
                            >

                        @else

                            <div class="no-image">
                                DIGITAL PRODUCT
                            </div>

                        @endif

                    </div>


                    <div class="product-details">

                        <small>
                            DIGITAL PRODUCT
                        </small>

                        <h3>
                            {{ $product->name }}
                        </h3>

                        @if($product->description)

                            <p>
                                {{ $product->description }}
                            </p>

                        @endif

                    </div>

                </div>


                <!-- LICENSE -->

                <div class="section-title">
                    نوع الترخيص
                </div>


                <div class="license-box">


                    <div class="license-info">

                        <div class="license-icon">
                            ✓
                        </div>


                        <div>

                            @if(request('type') === 'monthly')

                                <strong>
                                    ترخيص شهري
                                </strong>

                                <span>
                                    اشتراك لمدة شهر
                                </span>

                            @else

                                <strong>
                                    ترخيص دائم
                                </strong>

                                <span>
                                    استخدام دائم للمنتج
                                </span>

                            @endif

                        </div>

                    </div>


                    <div class="license-status">
                        محدد
                    </div>

                </div>


                <!-- PAYMENT -->

                <div class="payment-section">


                    <div class="section-title">
                        طريقة الدفع
                    </div>


                    <div class="payment-methods">


                        <label class="method">

                            <input
                                type="radio"
                                name="payment_method"
                                value="card"
                                checked
                            >

                            <div class="method-content">

                                <span>
                                    💳
                                </span>

                                <strong>
                                    بطاقة
                                </strong>

                            </div>

                        </label>


                        <label class="method">

                            <input
                                type="radio"
                                name="payment_method"
                                value="mada"
                            >

                            <div class="method-content">

                                <span>
                                    💚
                                </span>

                                <strong>
                                    مدى
                                </strong>

                            </div>

                        </label>


                        <label class="method">

                            <input
                                type="radio"
                                name="payment_method"
                                value="applepay"
                            >

                            <div class="method-content">

                                <span>
                                    
                                </span>

                                <strong>
                                    Apple Pay
                                </strong>

                            </div>

                        </label>


                    </div>


                    <!-- CARD HOLDER -->

                    <div class="form-group">

                        <label>
                            اسم حامل البطاقة
                        </label>

                        <input
                            type="text"
                            class="input"
                            placeholder="الاسم كما هو مكتوب على البطاقة"
                        >

                    </div>


                    <!-- CARD NUMBER -->

                    <div class="form-group">

                        <label>
                            رقم البطاقة
                        </label>

                        <input
                            type="text"
                            class="input"
                            placeholder="0000 0000 0000 0000"
                            inputmode="numeric"
                            maxlength="19"
                        >

                    </div>


                    <!-- DATE + CVV -->

                    <div class="form-row">


                        <div class="form-group">

                            <label>
                                تاريخ الانتهاء
                            </label>

                            <input
                                type="text"
                                class="input"
                                placeholder="MM / YY"
                                maxlength="7"
                            >

                        </div>


                        <div class="form-group">

                            <label>
                                رمز الأمان CVV
                            </label>

                            <input
                                type="password"
                                class="input"
                                placeholder="•••"
                                inputmode="numeric"
                                maxlength="4"
                            >

                        </div>


                    </div>


                    <div class="security-note">

                        <div class="security-note-icon">
                            🔒
                        </div>

                        <div>
                            بيانات الدفع حساسة، وعند الربط الفعلي
                            سيتم التعامل معها من خلال بوابة دفع
                            آمنة ومتخصصة، ولن يتم تخزين بيانات
                            البطاقة في قاعدة بيانات المتجر.
                        </div>

                    </div>


                </div>


            </div>

        </section>


        <!-- =========================
             SUMMARY
        ========================= -->

        <aside class="card summary">


            <div class="summary-title">
                ملخص الطلب
            </div>


            <div class="summary-row">

                <span>
                    المنتج
                </span>

                <strong>
                    {{ $product->name }}
                </strong>

            </div>


            <div class="summary-row">

                <span>
                    الترخيص
                </span>

                <strong>

                    @if(request('type') === 'monthly')
                        شهري
                    @else
                        دائم
                    @endif

                </strong>

            </div>


            <div class="summary-row">

                <span>
                    مدة الاستخدام
                </span>

                <strong>

                    @if(request('type') === 'monthly')
                        شهر واحد
                    @else
                        مدى الحياة
                    @endif

                </strong>

            </div>


            <hr class="summary-divider">


            <div class="total">

                <span class="total-label">
                    الإجمالي
                </span>

                <div>

                    <span class="total-price">

                        @if(request('type') === 'monthly')

                            {{ $product->price_monthly }}

                        @else

                            {{ $product->price_lifetime }}

                        @endif

                    </span>

                    <span class="currency">
                        ريال
                    </span>

                </div>

            </div>


            <!-- PAY -->

           <form action="{{ url('/payment_product/test') }}" method="POST">

    @csrf

    <input type="hidden" name="product_id" value="{{ $product->id }}">

    <input type="hidden" name="type" value="{{ request('type') }}">

    <button type="submit" class="pay-button">
        🔒 إتمام الدفع

        <span>
            ←
        </span>
    </button>

</form>


            <div class="trust">

                <div class="trust-item">

                    <strong>
                        🔒 آمن
                    </strong>

                    دفع محمي

                </div>


                <div class="trust-item">

                    <strong>
                        ⚡ سريع
                    </strong>

                    عملية سهلة

                </div>


                <div class="trust-item">

                    <strong>
                        ✓ موثوق
                    </strong>

                    شراء مباشر

                </div>

            </div>


            <a
                href="{{ url('/show_for_User') }}"
                class="back"
            >
                → العودة إلى المنتجات
            </a>


        </aside>


    </div>

</main>


<script>

    function startPayment() {

        alert(
            "سيتم الآن بدء عملية الدفع.\\n\\n" +
            "هذه الواجهة تجريبية حاليًا، " +
            "وسنربطها ببوابة الدفع الفعلية في الخطوة التالية."
        );

    }

</script>


</body>
</html>
```
