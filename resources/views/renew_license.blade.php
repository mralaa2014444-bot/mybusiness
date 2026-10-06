<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        تجديد الترخيص
    </title>


    <style>

        /* =========================
           RESET
        ========================= */

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }


        /* =========================
           BODY
        ========================= */

        body {

            font-family:
                "Segoe UI",
                Tahoma,
                Arial,
                sans-serif;

            background: #eef3ed;

            color: #263024;

            min-height: 100vh;

            padding: 40px 20px;

        }


        /* =========================
           CONTAINER
        ========================= */

        .renew-container {

            width: 100%;

            max-width: 850px;

            margin: auto;

        }


        /* =========================
           HEADER
        ========================= */

        .renew-header {

            text-align: center;

            margin-bottom: 30px;

        }


        .renew-header .icon {

            width: 65px;

            height: 65px;

            margin: 0 auto 15px;

            display: flex;

            align-items: center;

            justify-content: center;

            border-radius: 18px;

            background: #dfead8;

            color: #79a936;

            font-size: 28px;

        }


        .renew-header h1 {

            font-size: 28px;

            font-weight: 800;

            color: #263024;

            margin-bottom: 8px;

        }


        .renew-header p {

            font-size: 14px;

            color: #778072;

        }


        /* =========================
           MAIN CARD
        ========================= */

        .renew-card {

            background: #ffffff;

            border-radius: 22px;

            padding: 30px;

            box-shadow:
                0 15px 45px rgba(39, 59, 35, .08);

            border: 1px solid #e4ebe1;

        }


        /* =========================
           PRODUCT INFO
        ========================= */

        .product-info {

            background: #f5f8f3;

            border: 1px solid #e1e9dd;

            border-radius: 16px;

            padding: 22px;

            margin-bottom: 25px;

        }


        .product-info-title {

            font-size: 12px;

            color: #8a9585;

            margin-bottom: 8px;

        }


        .product-info h2 {

            font-size: 21px;

            color: #2c3829;

            margin-bottom: 18px;

        }


        .info-grid {

            display: grid;

            grid-template-columns:
                repeat(2, 1fr);

            gap: 14px;

        }


        .info-item {

            background: #ffffff;

            border-radius: 12px;

            padding: 13px;

            border: 1px solid #e7ede4;

        }


        .info-item span {

            display: block;

            font-size: 11px;

            color: #8a9585;

            margin-bottom: 5px;

        }


        .info-item strong {

            display: block;

            font-size: 14px;

            color: #34422f;

        }


        /* =========================
           PRICE
        ========================= */

        .price-box {

            display: flex;

            align-items: center;

            justify-content: space-between;

            gap: 15px;

            padding: 18px 20px;

            margin-bottom: 28px;

            background: #eef6e9;

            border: 1px solid #dcebd3;

            border-radius: 15px;

        }


        .price-box span {

            font-size: 13px;

            color: #6f7b69;

        }


        .price-box strong {

            font-size: 25px;

            color: #719e30;

        }


        /* =========================
           SECTION TITLE
        ========================= */

        .form-title {

            font-size: 17px;

            font-weight: 800;

            color: #34412f;

            margin-bottom: 18px;

        }


        /* =========================
           PAYMENT METHODS
        ========================= */

        .payment-methods {

            display: grid;

            grid-template-columns:
                repeat(2, 1fr);

            gap: 12px;

            margin-bottom: 25px;

        }


        .payment-option {

            position: relative;

        }


        .payment-option input {

            position: absolute;

            opacity: 0;

        }


        .payment-option label {

            display: flex;

            align-items: center;

            gap: 10px;

            padding: 15px;

            border: 1px solid #dfe7da;

            border-radius: 13px;

            cursor: pointer;

            transition: .25s;

            background: #ffffff;

            font-size: 13px;

            color: #53604f;

        }


        .payment-option label:hover {

            border-color: #8fbd4d;

        }


        .payment-option input:checked + label {

            border-color: #79a936;

            background: #f3f8ef;

            color: #628f28;

            box-shadow:
                0 5px 18px rgba(121, 169, 54, .08);

        }


        .payment-icon {

            width: 35px;

            height: 35px;

            display: flex;

            align-items: center;

            justify-content: center;

            border-radius: 9px;

            background: #edf3e9;

            font-size: 17px;

        }


        /* =========================
           FORM
        ========================= */

        .payment-form {

            margin-top: 5px;

        }


        .form-grid {

            display: grid;

            grid-template-columns:
                repeat(2, 1fr);

            gap: 17px;

        }


        .form-group {

            display: flex;

            flex-direction: column;

        }


        .form-group.full {

            grid-column: 1 / -1;

        }


        .form-group label {

            font-size: 12px;

            font-weight: 700;

            color: #566152;

            margin-bottom: 8px;

        }


        .form-group input {

            width: 100%;

            height: 46px;

            border: 1px solid #dce5d8;

            border-radius: 11px;

            padding: 0 14px;

            font-size: 13px;

            color: #303b2c;

            background: #fbfcfa;

            outline: none;

            transition: .25s;

        }


        .form-group input:focus {

            border-color: #8fbd4d;

            background: #ffffff;

            box-shadow:
                0 0 0 3px rgba(121, 169, 54, .08);

        }


        .form-group input::placeholder {

            color: #a6aea1;

        }


        /* =========================
           ERROR
        ========================= */

        .error-message {

            margin-top: 6px;

            font-size: 11px;

            color: #c14d4d;

        }


        /* =========================
           SECURITY
        ========================= */

        .security-box {

            display: flex;

            align-items: flex-start;

            gap: 10px;

            margin-top: 22px;

            padding: 14px 16px;

            border-radius: 12px;

            background: #f7faf6;

            border: 1px solid #e3ebe0;

        }


        .security-box .security-icon {

            font-size: 18px;

        }


        .security-box p {

            font-size: 11px;

            line-height: 1.8;

            color: #7a8576;

        }


        /* =========================
           BUTTONS
        ========================= */

        .actions {

            display: flex;

            align-items: center;

            gap: 12px;

            margin-top: 25px;

        }


        .renew-button {

            flex: 1;

            min-height: 48px;

            border: none;

            border-radius: 12px;

            background: #79a936;

            color: #17200a;

            font-size: 13px;

            font-weight: 800;

            cursor: pointer;

            transition: .25s;

        }


        .renew-button:hover {

            background: #638e2d;

            color: #ffffff;

            transform: translateY(-2px);

            box-shadow:
                0 10px 25px rgba(111, 166, 17, .18);

        }


        .back-button {

            display: flex;

            align-items: center;

            justify-content: center;

            min-height: 48px;

            padding: 0 22px;

            border-radius: 12px;

            background: #f1f4ef;

            border: 1px solid #e0e7dc;

            color: #687363;

            font-size: 12px;

            font-weight: 700;

            text-decoration: none;

            transition: .25s;

        }


        .back-button:hover {

            background: #e6ece2;

            color: #42503d;

        }


        /* =========================
           SUCCESS / ERROR ALERT
        ========================= */

        .alert {

            padding: 14px 16px;

            border-radius: 12px;

            margin-bottom: 20px;

            font-size: 13px;

        }


        .alert-success {

            background: #edf8e8;

            border: 1px solid #cfe7c2;

            color: #56852b;

        }


        .alert-error {

            background: #fff1f1;

            border: 1px solid #f0cccc;

            color: #b24d4d;

        }


        /* =========================
           RESPONSIVE
        ========================= */

        @media (max-width: 650px) {

            body {

                padding: 20px 12px;

            }


            .renew-card {

                padding: 20px;

                border-radius: 17px;

            }


            .renew-header h1 {

                font-size: 23px;

            }


            .info-grid {

                grid-template-columns: 1fr;

            }


            .payment-methods {

                grid-template-columns: 1fr;

            }


            .form-grid {

                grid-template-columns: 1fr;

            }


            .form-group.full {

                grid-column: auto;

            }


            .price-box {

                flex-direction: column;

                align-items: flex-start;

            }


            .actions {

                flex-direction: column;

            }


            .renew-button,
            .back-button {

                width: 100%;

            }

        }

    </style>

</head>


<body>


<div class="renew-container">


    <!-- =========================
         HEADER
    ========================= -->

    <div class="renew-header">

        <div class="icon">
            🔄
        </div>

        <h1>
            تجديد الترخيص
        </h1>

        <p>
            قم بتجديد اشتراكك الشهري والاستمرار في استخدام المنتج
        </p>

    </div>



    <!-- =========================
         CARD
    ========================= -->

    <div class="renew-card">


        <!-- =========================
             ALERTS
        ========================= -->

        @if(session('success'))

            <div class="alert alert-success">

                {{ session('success') }}

            </div>

        @endif


        @if(session('error'))

            <div class="alert alert-error">

                {{ session('error') }}

            </div>

        @endif



        <!-- =========================
             VALIDATION ERRORS
        ========================= -->

        @if($errors->any())

            <div class="alert alert-error">

                @foreach($errors->all() as $error)

                    <div>
                        {{ $error }}
                    </div>

                @endforeach

            </div>

        @endif



        <!-- =========================
             PRODUCT INFO
        ========================= -->

        <div class="product-info">

            <div class="product-info-title">
                المنتج
            </div>


            <h2>
                {{ $license->product->name ?? 'المنتج الرقمي' }}
            </h2>


            <div class="info-grid">


                <div class="info-item">

                    <span>
                        نوع الترخيص
                    </span>

                    <strong>
                        اشتراك شهري
                    </strong>

                </div>


                <div class="info-item">

                    <span>
                        تاريخ بداية الترخيص
                    </span>

                    <strong>
                        {{ $license->start_date }}
                    </strong>

                </div>


                <div class="info-item">

                    <span>
                        تاريخ انتهاء الترخيص
                    </span>

                    <strong>
                        {{ $license->end_date ?? 'غير محدد' }}
                    </strong>

                </div>


                <div class="info-item">

                    <span>
                        مفتاح الترخيص
                    </span>

                    <strong>
                        {{ $license->license_key }}
                    </strong>

                </div>


            </div>

        </div>



        <!-- =========================
             PRICE
        ========================= -->

        <div class="price-box">

            <span>
                قيمة تجديد الاشتراك لمدة شهر
            </span>

            <strong>

                {{ $license->product->price_monthly ?? 0 }}

                ريال

            </strong>

        </div>



        <!-- =========================
             PAYMENT TITLE
        ========================= -->

        <div class="form-title">

            طريقة الدفع

        </div>



        <!-- =========================
             PAYMENT METHODS
        ========================= -->

        <div class="payment-methods">


            <div class="payment-option">

                <input
                    type="radio"
                    name="payment_method"
                    id="card"
                    value="card"
                    checked
                >

                <label for="card">

                    <span class="payment-icon">
                        💳
                    </span>

                    <span>
                        بطاقة بنكية
                    </span>

                </label>

            </div>


            <div class="payment-option">

                <input
                    type="radio"
                    name="payment_method"
                    id="online"
                    value="online"
                >

                <label for="online">

                    <span class="payment-icon">
                        💰
                    </span>

                    <span>
                        دفع إلكتروني
                    </span>

                </label>

            </div>


        </div>



        <!-- =========================
             PAYMENT FORM
        ========================= -->

        <form
            action="{{ route('license.renew.process', $license->id) }}"
            method="POST"
            class="payment-form"
            id="renewPaymentForm"
        >

            @csrf


            <div class="form-grid">


                <!-- CARD HOLDER -->

                <div class="form-group full">

                    <label for="card_holder">
                        اسم حامل البطاقة
                    </label>

                    <input
                        type="text"
                        id="card_holder"
                        name="card_holder"
                        value="{{ old('card_holder') }}"
                        placeholder="اكتب اسم حامل البطاقة"
                        required
                    >

                </div>



                <!-- CARD NUMBER -->

                <div class="form-group full">

                    <label for="card_number">
                        رقم البطاقة
                    </label>

                    <input
                        type="text"
                        id="card_number"
                        name="card_number"
                        value="{{ old('card_number') }}"
                        placeholder="0000 0000 0000 0000"
                        maxlength="19"
                        required
                    >

                </div>



                <!-- EXPIRY -->

                <div class="form-group">

                    <label for="card_expiry">
                        تاريخ الانتهاء
                    </label>

                    <input
                        type="text"
                        id="card_expiry"
                        name="card_expiry"
                        value="{{ old('card_expiry') }}"
                        placeholder="MM / YY"
                        maxlength="7"
                        required
                    >

                </div>



                <!-- CVV -->

                <div class="form-group">

                    <label for="card_cvv">
                        رمز CVV
                    </label>

                    <input
                        type="password"
                        id="card_cvv"
                        name="card_cvv"
                        placeholder="123"
                        maxlength="4"
                        required
                    >

                </div>


            </div>



            <!-- =========================
                 SECURITY
            ========================= -->

            <div class="security-box">

                <div class="security-icon">
                    🔒
                </div>

                <p>
                    بيانات الدفع محمية أثناء الإرسال.
                    لا تقم بحفظ بيانات بطاقتك داخل النظام.
                    في النسخة النهائية سيتم استخدام بوابة دفع آمنة
                    لمعالجة عملية الدفع.
                </p>

            </div>



            <!-- =========================
                 ACTIONS
            ========================= -->

            <div class="actions">


                <button
                    type="submit"
                    class="renew-button"
                >

                    💳

                    دفع

                    {{ $license->product->price_monthly ?? 0 }}

                    ريال وتجديد الاشتراك

                </button>


                <a
                    href="{{ url('/user_dashpord') }}"
                    class="back-button"
                >

                    ← العودة

                </a>


            </div>


        </form>


    </div>

</div>



<script>

    /* =========================
       CARD NUMBER FORMAT
    ========================= */

    const cardNumber =
        document.getElementById('card_number');

    if (cardNumber) {

        cardNumber.addEventListener('input', function () {

            let value =
                this.value.replace(/\D/g, '');

            value =
                value.substring(0, 16);

            value =
                value.match(/.{1,4}/g);

            this.value =
                value ? value.join(' ') : '';

        });

    }



    /* =========================
       EXPIRY FORMAT
    ========================= */

    const cardExpiry =
        document.getElementById('card_expiry');

    if (cardExpiry) {

        cardExpiry.addEventListener('input', function () {

            let value =
                this.value.replace(/\D/g, '');

            value =
                value.substring(0, 4);

            if (value.length >= 3) {

                value =
                    value.substring(0, 2)
                    + ' / '
                    + value.substring(2);

            }

            this.value = value;

        });

    }



    /* =========================
       CVV
    ========================= */

    const cardCvv =
        document.getElementById('card_cvv');

    if (cardCvv) {

        cardCvv.addEventListener('input', function () {

            this.value =
                this.value.replace(/\D/g, '');

        });

    }

</script>


</body>

</html>