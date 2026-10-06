<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>المبيعات | ALAA</title>


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


        .sales-page {

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
           SALES BOX
        ========================= */

        .sales-box {

            background: #ffffff;

            border: 1px solid rgba(141, 204, 32, .18);

            border-radius: 22px;

            overflow: hidden;

            box-shadow:
                0 15px 45px rgba(0, 0, 0, .06);

        }


        .sales-box-header {

            padding: 22px 25px;

            border-bottom: 1px solid #edf0e9;

            display: flex;

            align-items: center;

            justify-content: space-between;

        }


        .sales-box-header h2 {

            font-size: 18px;

        }


        .sales-count {

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


        .customer-name {

            font-weight: 700;

        }


        .customer-email {

            display: block;

            margin-top: 4px;

            color: #92998b;

            font-size: 11px;

        }


        .product-name {

            font-weight: 700;

        }


        .license {

            display: inline-block;

            padding: 6px 10px;

            border-radius: 8px;

            background: rgba(141, 204, 32, .09);

            color: #6fa611;

            font-size: 11px;

            font-weight: 700;

        }


        .amount {

            font-weight: 900;

            white-space: nowrap;

        }


        .status {

            display: inline-flex;

            align-items: center;

            gap: 5px;

            padding: 6px 10px;

            border-radius: 8px;

            font-size: 11px;

            font-weight: 700;

        }


        .status.paid {

            background: rgba(141, 204, 32, .10);

            color: #6fa611;

        }


        .status.pending {

            background: rgba(230, 180, 40, .10);

            color: #aa8115;

        }


        .status.failed {

            background: rgba(210, 60, 60, .08);

            color: #b53b3b;

        }


        .method {

            color: #6f7768;

            font-size: 12px;

        }


        .transaction {

            font-family: monospace;

            font-size: 11px;

            color: #7c8474;

            direction: ltr;

            display: inline-block;

        }


        .date {

            color: #7d8576;

            font-size: 12px;

            white-space: nowrap;

        }


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


            .sales-box-header {

                padding: 18px;

            }

        }

    </style>

</head>


<body>


<div class="sales-page">


    <!-- =========================
         HEADER
    ========================= -->

    <div class="page-header">

        <div class="page-label">
            ALAA DIGITAL STORE
        </div>

        <h1>
            المبيعات
        </h1>

        <p>
            عرض جميع عمليات البيع والمدفوعات في المتجر.
        </p>

    </div>



    <!-- =========================
         SALES
    ========================= -->

    <div class="sales-box">


        <div class="sales-box-header">

            <h2>
                سجل المبيعات
            </h2>

            <span class="sales-count">
                {{ $sales->count() }} عملية
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
                            الترخيص
                        </th>

                        <th>
                            المبلغ
                        </th>

                        <th>
                            الحالة
                        </th>

                        <th>
                            طريقة الدفع
                        </th>

                        <th>
                            رقم العملية
                        </th>

                        <th>
                            التاريخ
                        </th>

                    </tr>

                </thead>


                <tbody>


                    @forelse($sales as $sale)


                        <tr>


                            <td>

                                <span class="customer-name">
                                    {{ $sale->user_name }}
                                </span>

                                <span class="customer-email">
                                    {{ $sale->user_email }}
                                </span>

                            </td>


                            <td>

                                <span class="product-name">
                                    {{ $sale->product_name }}
                                </span>

                            </td>


                            <td>

                                <span class="license">

                                    @if($sale->license_type === 'monthly')

                                        شهري

                                    @elseif($sale->license_type === 'lifetime')

                                        دائم

                                    @else

                                        {{ $sale->license_type }}

                                    @endif

                                </span>

                            </td>


                            <td>

                                <span class="amount">

                                    {{ number_format($sale->amount, 2) }}

                                    {{ $sale->currency }}

                                </span>

                            </td>


                            <td>


                                @if($sale->status === 'paid')

                                    <span class="status paid">
                                        ● مدفوع
                                    </span>


                                @elseif($sale->status === 'pending')

                                    <span class="status pending">
                                        ● قيد الانتظار
                                    </span>


                                @else

                                    <span class="status failed">
                                        ● {{ $sale->status }}
                                    </span>

                                @endif


                            </td>


                            <td>

                                <span class="method">
                                    {{ $sale->payment_method }}
                                </span>

                            </td>


                            <td>

                                <span class="transaction">
                                    {{ $sale->transaction_id }}
                                </span>

                            </td>


                            <td>

                                <span class="date">

                                    {{ \Carbon\Carbon::parse($sale->created_at)->format('Y-m-d H:i') }}

                                </span>

                            </td>


                        </tr>


                    @empty


                        <tr>

                            <td
                                colspan="8"
                                class="empty"
                            >

                                لا توجد مبيعات حاليًا.

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