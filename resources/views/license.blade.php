<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>التراخيص | ALAA</title>


    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }


        body {

            font-family: Arial, sans-serif;

            background:
                radial-gradient(
                    circle at top right,
                    rgba(141, 204, 32, .10),
                    transparent 35%
                ),
                #f7f9f3;

            color: #202818;

            min-height: 100vh;

            padding: 40px;

        }


        .license-page {

            width: 100%;

            max-width: 1250px;

            margin: auto;

        }


        /* =========================
           HEADER
        ========================= */

        .page-header {

            margin-bottom: 30px;

        }


        .page-label {

            font-size: 12px;

            color: #8dcc20;

            font-weight: 700;

            letter-spacing: 2px;

            margin-bottom: 8px;

        }


        .page-header h1 {

            font-size: 36px;

            font-weight: 900;

            margin-bottom: 8px;

        }


        .page-header p {

            color: #7b8471;

            font-size: 14px;

        }


        /* =========================
           LICENSE BOX
        ========================= */

        .license-box {

            background: #ffffff;

            border: 1px solid rgba(141, 204, 32, .18);

            border-radius: 22px;

            overflow: hidden;

            box-shadow:
                0 15px 45px rgba(0, 0, 0, .06);

        }


        .license-box-header {

            padding: 22px 25px;

            border-bottom: 1px solid #edf0e9;

            display: flex;

            align-items: center;

            justify-content: space-between;

        }


        .license-box-header h2 {

            font-size: 18px;

        }


        .license-count {

            font-size: 12px;

            color: #7d8772;

        }


        /* =========================
           TABLE
        ========================= */

        .table-wrapper {

            width: 100%;

            overflow-x: auto;

        }


        table {

            width: 100%;

            border-collapse: collapse;

            min-width: 850px;

        }


        thead {

            background: #fafbf8;

        }


        th {

            padding: 17px 18px;

            text-align: right;

            font-size: 12px;

            color: #77806d;

            font-weight: 700;

            white-space: nowrap;

        }


        td {

            padding: 18px;

            border-top: 1px solid #f0f2ed;

            font-size: 13px;

            vertical-align: middle;

        }


        tbody tr {

            transition: .2s;

        }


        tbody tr:hover {

            background: rgba(141, 204, 32, .035);

        }


        /* =========================
           CUSTOMER
        ========================= */

        .customer-name {

            font-weight: 700;

        }


        .customer-email {

            display: block;

            margin-top: 4px;

            color: #92998b;

            font-size: 11px;

        }


        /* =========================
           PRODUCT
        ========================= */

        .product-name {

            font-weight: 700;

        }


        /* =========================
           TYPE
        ========================= */

        .license-type {

            display: inline-block;

            padding: 6px 10px;

            border-radius: 8px;

            background: rgba(141, 204, 32, .09);

            color: #6fa611;

            font-size: 11px;

            font-weight: 700;

        }


        /* =========================
           DATES
        ========================= */

        .date {

            color: #737c6b;

            font-size: 12px;

            white-space: nowrap;

        }


        .unlimited {

            color: #8dcc20;

            font-weight: 700;

            font-size: 12px;

        }


        /* =========================
           STATUS
        ========================= */

        .status {

            display: inline-flex;

            align-items: center;

            gap: 5px;

            padding: 6px 10px;

            border-radius: 8px;

            font-size: 11px;

            font-weight: 700;

        }


        .status.active {

            background: rgba(141, 204, 32, .10);

            color: #6fa611;

        }


        .status.inactive {

            background: rgba(210, 60, 60, .08);

            color: #b53b3b;

        }


        /* =========================
           EMPTY
        ========================= */

        .empty {

            text-align: center;

            padding: 50px 20px;

            color: #8b9283;

        }


        /* =========================
           BOTTOM LINK
        ========================= */

        .bottom-link {

            text-align: center;

            margin-top: 28px;

        }


        .bottom-link a {

            display: inline-flex;

            align-items: center;

            justify-content: center;

            padding: 11px 22px;

            border-radius: 10px;

            text-decoration: none;

            color: #6fa611;

            background: rgba(141, 204, 32, .07);

            border: 1px solid rgba(111, 166, 17, .20);

            font-size: 13px;

            font-weight: 700;

            transition: .25s;

        }


        .bottom-link a:hover {

            background: #8dcc20;

            color: #ffffff;

            transform: translateY(-2px);

        }


        /* =========================
           MOBILE
        ========================= */

        @media (max-width: 700px) {

            body {

                padding: 20px;

            }


            .page-header h1 {

                font-size: 28px;

            }


            .license-box-header {

                padding: 18px;

            }

        }

    </style>

</head>


<body>


<div class="license-page">


    <!-- =========================
         HEADER
    ========================= -->

    <div class="page-header">

        <div class="page-label">
            ALAA DIGITAL STORE
        </div>

        <h1>
            التراخيص
        </h1>

        <p>
            أحدث التراخيص الموجودة في النظام.
        </p>

    </div>


    <!-- =========================
         LICENSES
    ========================= -->

    <div class="license-box">


        <div class="license-box-header">

            <h2>
                آخر التراخيص
            </h2>

            <span class="license-count">
                {{ $licenses->count() }} ترخيص
            </span>

        </div>


        <div class="table-wrapper">


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


                    @forelse($licenses as $license)


                        <tr>


                            <!-- العميل -->

                            <td>

                                <span class="customer-name">
                                    {{ $license->user_name }}
                                </span>

                                <span class="customer-email">
                                    {{ $license->user_email }}
                                </span>

                            </td>


                            <!-- المنتج -->

                            <td>

                                <span class="product-name">
                                    {{ $license->product_name }}
                                </span>

                            </td>


                            <!-- النوع -->

                            <td>

                                <span class="license-type">

                                    @if($license->type === 'monthly')

                                        شهري

                                    @elseif($license->type === 'lifetime')

                                        دائم

                                    @else

                                        {{ $license->type }}

                                    @endif

                                </span>

                            </td>


                            <!-- البداية -->

                            <td>

                                <span class="date">
                                    {{ $license->start_date }}
                                </span>

                            </td>


                            <!-- النهاية -->

                            <td>

                                @if($license->end_date)

                                    <span class="date">
                                        {{ $license->end_date }}
                                    </span>

                                @else

                                    <span class="unlimited">
                                        غير محدد
                                    </span>

                                @endif

                            </td>


                            <!-- الحالة -->

                            <td>

                                @if(
                                    $license->status &&
                                    (
                                        !$license->end_date ||
                                        \Carbon\Carbon::parse($license->end_date)->isFuture()
                                    )
                                )

                                    <span class="status active">
                                        ● نشط
                                    </span>

                                @else

                                    <span class="status inactive">
                                        ● منتهي
                                    </span>

                                @endif

                            </td>


                        </tr>


                    @empty


                        <tr>

                            <td
                                colspan="6"
                                class="empty"
                            >

                                لا توجد تراخيص حاليًا.

                            </td>

                        </tr>


                    @endforelse


                </tbody>


            </table>


        </div>


    </div>


    <!-- =========================
         BOTTOM LINK
    ========================= -->

    <div class="bottom-link">

        <a href="/admin_dashpord">
            ← العودة إلى لوحة التحكم
        </a>

    </div>


</div>


</body>

</html>