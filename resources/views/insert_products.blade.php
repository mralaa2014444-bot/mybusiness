```html
<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>إضافة منتج | متجر المنتجات الرقمية</title>


    <style>

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }


        body {

            font-family:
                "Segoe UI",
                Tahoma,
                Arial,
                sans-serif;

            background:
                linear-gradient(
                    135deg,
                    #f5f7ff 0%,
                    #eef1ff 100%
                );

            min-height: 100vh;

            padding: 40px 20px;

            color: #1f2937;

        }


        .page {

            width: 100%;

            max-width: 850px;

            margin: auto;

        }


        /* =========================
           HEADER
        ========================= */

        .page-header {

            text-align: center;

            margin-bottom: 30px;

        }


        .page-header .icon {

            width: 65px;

            height: 65px;

            margin: 0 auto 15px;

            border-radius: 18px;

            display: flex;

            align-items: center;

            justify-content: center;

            background: linear-gradient(
                135deg,
                #4f46e5,
                #7c3aed
            );

            color: white;

            font-size: 28px;

            box-shadow:
                0 10px 25px rgba(
                    79,
                    70,
                    229,
                    0.25
                );

        }


        .page-header h1 {

            font-size: 30px;

            margin-bottom: 8px;

            color: #111827;

        }


        .page-header p {

            color: #6b7280;

            font-size: 15px;

        }


        /* =========================
           CARD
        ========================= */

        .form-card {

            background: white;

            border-radius: 22px;

            padding: 35px;

            box-shadow:
                0 15px 45px rgba(
                    15,
                    23,
                    42,
                    0.08
                );

            border: 1px solid #e5e7eb;

        }


        /* =========================
           SECTION
        ========================= */

        .section {

            margin-bottom: 30px;

        }


        .section-title {

            display: flex;

            align-items: center;

            gap: 10px;

            margin-bottom: 18px;

            padding-bottom: 12px;

            border-bottom: 1px solid #eef0f4;

        }


        .section-title span {

            width: 34px;

            height: 34px;

            border-radius: 10px;

            display: flex;

            align-items: center;

            justify-content: center;

            background: #eef2ff;

            color: #4f46e5;

            font-size: 16px;

        }


        .section-title h2 {

            font-size: 17px;

            color: #111827;

        }


        /* =========================
           FORM
        ========================= */

        .form-group {

            margin-bottom: 20px;

        }


        .form-group label {

            display: block;

            margin-bottom: 8px;

            font-size: 14px;

            font-weight: 600;

            color: #374151;

        }


        .form-group input[type="text"],
        .form-group input[type="number"],
        .form-group textarea,
        .form-group select {

            width: 100%;

            border: 1px solid #dfe3eb;

            background: #fafbfc;

            border-radius: 11px;

            padding: 13px 14px;

            font-family: inherit;

            font-size: 14px;

            color: #1f2937;

            transition: 0.2s;

        }


        .form-group textarea {

            min-height: 130px;

            resize: vertical;

        }


        .form-group input:focus,
        .form-group textarea:focus,
        .form-group select:focus {

            outline: none;

            border-color: #6366f1;

            background: white;

            box-shadow:
                0 0 0 4px rgba(
                    99,
                    102,
                    241,
                    0.08
                );

        }


        /* =========================
           PRICES
        ========================= */

        .price-grid {

            display: grid;

            grid-template-columns:
                repeat(2, 1fr);

            gap: 15px;

        }


        .price-box {

            position: relative;

        }


        .price-box .price-label {

            display: flex;

            align-items: center;

            gap: 7px;

            margin-bottom: 8px;

            font-size: 14px;

            font-weight: 600;

        }


        .monthly-label {

            color: #2563eb;

        }


        .lifetime-label {

            color: #7c3aed;

        }


        .currency {

            position: absolute;

            left: 14px;

            bottom: 13px;

            color: #9ca3af;

            font-size: 12px;

        }


        .price-box input {

            padding-left: 45px !important;

        }


        /* =========================
           FILE UPLOAD
        ========================= */

        .upload-box {

            border: 2px dashed #d9def0;

            background: #fafbff;

            border-radius: 14px;

            padding: 22px;

            transition: 0.2s;

        }


        .upload-box:hover {

            border-color: #818cf8;

            background: #f7f7ff;

        }


        .upload-box label {

            cursor: pointer;

        }


        .upload-content {

            display: flex;

            align-items: center;

            gap: 15px;

        }


        .upload-icon {

            width: 48px;

            height: 48px;

            border-radius: 12px;

            background: #eef2ff;

            color: #4f46e5;

            display: flex;

            align-items: center;

            justify-content: center;

            font-size: 21px;

            flex-shrink: 0;

        }


        .upload-text strong {

            display: block;

            color: #374151;

            font-size: 14px;

            margin-bottom: 4px;

        }


        .upload-text small {

            color: #9ca3af;

            font-size: 12px;

        }


        .upload-box input[type="file"] {

            margin-top: 15px;

            width: 100%;

            font-size: 13px;

            color: #6b7280;

        }


        /* =========================
           BUTTON
        ========================= */

        .submit-button {

            width: 100%;

            border: none;

            border-radius: 12px;

            padding: 15px;

            background:
                linear-gradient(
                    135deg,
                    #4f46e5,
                    #7c3aed
                );

            color: white;

            font-family: inherit;

            font-size: 16px;

            font-weight: 600;

            cursor: pointer;

            transition: 0.2s;

            box-shadow:
                0 8px 20px rgba(
                    79,
                    70,
                    229,
                    0.22
                );

        }


        .submit-button:hover {

            transform: translateY(-2px);

            box-shadow:
                0 12px 25px rgba(
                    79,
                    70,
                    229,
                    0.28
                );

        }


        .submit-button:active {

            transform: translateY(0);

        }


        /* =========================
           MOBILE
        ========================= */

        @media (max-width: 650px) {

            body {

                padding: 20px 12px;

            }


            .form-card {

                padding: 22px 18px;

                border-radius: 17px;

            }


            .page-header h1 {

                font-size: 24px;

            }


            .price-grid {

                grid-template-columns: 1fr;

            }


            .upload-content {

                align-items: flex-start;

            }

        }

    </style>

</head>


<body>


<div class="page">


    <!-- HEADER -->

    <div class="page-header">

        <div class="icon">
            🛍️
        </div>

        <h1>
            إضافة منتج جديد
        </h1>

        <p>
            أضف منتجك الرقمي إلى متجرك بطريقة سهلة ومنظمة
        </p>

    </div>



    <!-- FORM CARD -->

    <div class="form-card">


        <form
            action="/insert_products"
            method="POST"
            enctype="multipart/form-data"
        >

            @csrf



            <!-- =====================
                 PRODUCT INFORMATION
            ====================== -->

            <div class="section">

                <div class="section-title">

                    <span>
                        📦
                    </span>

                    <h2>
                        معلومات المنتج
                    </h2>

                </div>



                <div class="form-group">

                    <label>
                        اسم المنتج
                    </label>

                    <input
                        type="text"
                        name="name"
                        placeholder="مثال: نظام إدارة تذاكر الدعم الفني"
                        required
                    >

                </div>



                <div class="form-group">

                    <label>
                        وصف المنتج
                    </label>

                    <textarea
                        name="description"
                        placeholder="اكتب وصفًا واضحًا ومختصرًا عن المنتج ومميزاته..."
                        required
                    ></textarea>

                </div>



                <div class="form-group">

                    <label>
                        تصنيف المنتج
                    </label>

                    <select
                        name="category_id"
                        required
                    >

                        <option value="">
                            اختر التصنيف
                        </option>

                        @foreach($category as $c)

                            <option value="{{ $c->id }}">
                                {{ $c->name }}
                            </option>

                        @endforeach

                    </select>

                </div>

            </div>



            <!-- =====================
                 LICENSE PRICES
            ====================== -->

            <div class="section">

                <div class="section-title">

                    <span>
                        💰
                    </span>

                    <h2>
                        أسعار التراخيص
                    </h2>

                </div>



                <div class="price-grid">


                    <div class="price-box">

                        <label class="price-label monthly-label">
                            📅 السعر الشهري
                        </label>

                        <input
                            type="number"
                            name="price_monthly"
                            step="0.01"
                            min="0"
                            placeholder="59.00"
                            required
                        >

                        <span class="currency">
                            ريال
                        </span>

                    </div>



                    <div class="price-box">

                        <label class="price-label lifetime-label">
                            ♾️ السعر الدائم
                        </label>

                        <input
                            type="number"
                            name="price_lifetime"
                            step="0.01"
                            min="0"
                            placeholder="249.00"
                            required
                        >

                        <span class="currency">
                            ريال
                        </span>

                    </div>


                </div>

            </div>



            <!-- =====================
                 PRODUCT IMAGE
            ====================== -->

            <div class="section">

                <div class="section-title">

                    <span>
                        🖼️
                    </span>

                    <h2>
                        صورة المنتج
                    </h2>

                </div>


                <div class="upload-box">

                    <div class="upload-content">

                        <div class="upload-icon">
                            🖼️
                        </div>

                        <div class="upload-text">

                            <strong>
                                اختر صورة المنتج
                            </strong>

                            <small>
                                JPG, JPEG, PNG أو WEBP — حتى 2MB
                            </small>

                        </div>

                    </div>


                    <input
                        type="file"
                        name="image"
                        accept=".jpg,.jpeg,.png,.webp"
                        required
                    >

                </div>

            </div>



            <!-- =====================
                 DIGITAL FILE
            ====================== -->

            <div class="section">

                <div class="section-title">

                    <span>
                        📁
                    </span>

                    <h2>
                        ملف المنتج الرقمي
                    </h2>

                </div>


                <div class="upload-box">

                    <div class="upload-content">

                        <div class="upload-icon">
                            📦
                        </div>

                        <div class="upload-text">

                            <strong>
                                اختر ملف المنتج
                            </strong>

                            <small>
                                ZIP, RAR أو PDF — حتى 50MB
                            </small>

                        </div>

                    </div>


                    <input
                        type="file"
                        name="file"
                        accept=".zip,.rar,.pdf"
                        required
                    >

                </div>

            </div>



            <!-- =====================
                 SUBMIT
            ====================== -->

            <button
                type="submit"
                class="submit-button"
            >
                إضافة المنتج إلى المتجر
            </button>


        </form>

    </div>

</div>


</body>
</html>
```
