<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>إدارة الفئات | ALAA</title>

    <link
        href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">

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
           VARIABLES
        ========================= */

        :root {

            --bg: #f5f7fa;

            --card: #ffffff;

            --border: #e5e7eb;

            --text: #111827;

            --muted: #6b7280;

            --green: #8dcc20;

            --green-dark: #6fa611;

            --danger: #ef4444;

            --danger-dark: #dc2626;

            --shadow:
                0 15px 45px rgba(0,0,0,.06);

        }


        /* =========================
           BODY
        ========================= */

        body {

            min-height: 100vh;

            background: var(--bg);

            color: var(--text);

            font-family: "Cairo", sans-serif;

        }


        /* =========================
           PAGE
        ========================= */

        .page {

            width: 100%;

            max-width: 1000px;

            margin: auto;

            padding: 50px 25px;

        }


        /* =========================
           HEADER
        ========================= */

        .page-header {

            margin-bottom: 30px;

        }


        .page-header small {

            display: block;

            color: var(--green-dark);

            font-size: 11px;

            font-weight: 700;

            letter-spacing: 1px;

            margin-bottom: 5px;

        }


        .page-header h1 {

            font-size: 28px;

            font-weight: 800;

        }


        .page-header p {

            color: var(--muted);

            font-size: 12px;

            margin-top: 5px;

        }


        /* =========================
           ADD CATEGORY CARD
        ========================= */

        .add-card {

            background: var(--card);

            border: 1px solid var(--border);

            border-radius: 16px;

            padding: 25px;

            box-shadow: var(--shadow);

            margin-bottom: 25px;

        }


        .add-title {

            font-size: 16px;

            font-weight: 700;

            margin-bottom: 15px;

        }


        .add-form {

            display: flex;

            gap: 12px;

        }


        .category-input {

            flex: 1;

            height: 48px;

            border: 1px solid var(--border);

            border-radius: 10px;

            padding: 0 15px;

            font-family: inherit;

            font-size: 12px;

            outline: none;

            transition: .25s;

        }


        .category-input:focus {

            border-color: var(--green);

            box-shadow:
                0 0 0 3px rgba(141,204,32,.12);

        }


        /* =========================
           BUTTONS
        ========================= */

        .btn {

            height: 48px;

            border: none;

            border-radius: 10px;

            padding: 0 22px;

            font-family: inherit;

            font-size: 11px;

            font-weight: 700;

            cursor: pointer;

            transition: .25s;

        }


        .btn-add {

            background: var(--green);

            color: #17200a;

        }


        .btn-add:hover {

            background: var(--green-dark);

            color: white;

            transform: translateY(-2px);

        }


        /* =========================
           TABLE CARD
        ========================= */

        .categories-card {

            background: var(--card);

            border: 1px solid var(--border);

            border-radius: 16px;

            overflow: hidden;

            box-shadow: var(--shadow);

        }


        /* =========================
           CARD HEADER
        ========================= */

        .card-header {

            padding: 20px 25px;

            border-bottom: 1px solid var(--border);

            display: flex;

            align-items: center;

            justify-content: space-between;

        }


        .card-header h2 {

            font-size: 16px;

        }


        .count {

            background: #f2f8e9;

            color: var(--green-dark);

            padding: 5px 12px;

            border-radius: 20px;

            font-size: 10px;

            font-weight: 700;

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

            min-width: 650px;

        }


        thead {

            background: #f9fafb;

        }


        th {

            padding: 15px 20px;

            text-align: right;

            font-size: 10px;

            color: var(--muted);

            font-weight: 700;

            border-bottom: 1px solid var(--border);

        }


        td {

            padding: 17px 20px;

            font-size: 11px;

            border-bottom: 1px solid var(--border);

            vertical-align: middle;

        }


        tbody tr:last-child td {

            border-bottom: none;

        }


        tbody tr {

            transition: .2s;

        }


        tbody tr:hover {

            background: #fafcf7;

        }


        /* =========================
           ID
        ========================= */

        .category-id {

            width: 60px;

            color: var(--muted);

            font-family: Arial, sans-serif;

            font-weight: 700;

        }


        /* =========================
           CATEGORY NAME
        ========================= */

        .category-name {

            font-weight: 700;

        }


        /* =========================
           DATE
        ========================= */

        .date {

            color: var(--muted);

            font-size: 10px;

            direction: ltr;

            text-align: right;

        }


        /* =========================
           ACTIONS
        ========================= */

        .actions {

            display: flex;

            align-items: center;

            gap: 8px;

        }


        .action-btn {

            height: 36px;

            padding: 0 13px;

            border: none;

            border-radius: 8px;

            font-family: inherit;

            font-size: 10px;

            font-weight: 700;

            cursor: pointer;

            transition: .25s;

        }


        /* EDIT */

        .edit-btn {

            background: #f2f8e9;

            color: var(--green-dark);

        }


        .edit-btn:hover {

            background: var(--green);

            color: #17200a;

        }


        /* DELETE */

        .delete-btn {

            background: #fff1f2;

            color: var(--danger);

        }


        .delete-btn:hover {

            background: var(--danger);

            color: white;

        }


        /* =========================
           EDIT INPUT
        ========================= */

        .edit-input {

            width: 100%;

            max-width: 350px;

            height: 38px;

            border: 1px solid var(--green);

            border-radius: 8px;

            padding: 0 12px;

            font-family: inherit;

            font-size: 11px;

            outline: none;

            background: #ffffff;

        }


        /* =========================
           SAVE
        ========================= */

        .save-btn {

            background: var(--green);

            color: #17200a;

        }


        .save-btn:hover {

            background: var(--green-dark);

            color: white;

        }


        /* =========================
           CANCEL
        ========================= */

        .cancel-btn {

            background: #f3f4f6;

            color: var(--muted);

        }


        .cancel-btn:hover {

            background: #e5e7eb;

        }


        /* =========================
           EMPTY
        ========================= */

        .empty {

            text-align: center;

            padding: 50px 20px;

            color: var(--muted);

            font-size: 12px;

        }


        .empty-icon {

            font-size: 35px;

            margin-bottom: 10px;

        }


        /* =========================
           MOBILE
        ========================= */

        @media(max-width: 650px) {

            .page {

                padding: 30px 14px;

            }


            .page-header h1 {

                font-size: 22px;

            }


            .add-form {

                flex-direction: column;

            }


            .btn-add {

                width: 100%;

            }


            .add-card {

                padding: 18px;

            }


            .card-header {

                padding: 17px;

            }

        }

    </style>

</head>


<body>


<div class="page">


    <!-- =========================
         HEADER
    ========================= -->

    <div class="page-header">

        <small>
            ALAA ADMIN
        </small>

        <h1>
            إدارة الفئات
        </h1>

        <p>
            يمكنك إضافة وتعديل وحذف فئات المنتجات الرقمية.
        </p>

    </div>



    <!-- =========================
         ADD CATEGORY
    ========================= -->

    <div class="add-card">

        <div class="add-title">

            إضافة فئة جديدة

        </div>


        <form
            action="/insert_cat"
            method="POST"
            class="add-form">

            @csrf


            <input
                type="text"
                name="name"
                class="category-input"
                placeholder="مثال: أنظمة إلكترونية"
                required>


            <button
                type="submit"
                class="btn btn-add">

                + إضافة الفئة

            </button>


        </form>

    </div>



    <!-- =========================
         CATEGORIES
    ========================= -->

    <div class="categories-card">


        <div class="card-header">

            <h2>
                الفئات الموجودة
            </h2>


            <div class="count">

                {{ $select->count() }}

                فئة

            </div>

        </div>



        <div class="table-wrapper">

            @if($select->count() > 0)


            <table>

                <thead>

                    <tr>

                        <th>
                            #
                        </th>

                        <th>
                            اسم الفئة
                        </th>

                        <th>
                            تاريخ الإنشاء
                        </th>

                        <th>
                            آخر تعديل
                        </th>

                        <th>
                            الإجراءات
                        </th>

                    </tr>

                </thead>


                <tbody>


                @foreach($select as $s)


                <tr>


                    <!-- ID -->

                    <td class="category-id">

                        #{{ $s->id }}

                    </td>



                    <!-- NAME -->

                    <td class="category-name">

                        <span id="name-{{ $s->id }}">

                            {{ $s->name }}

                        </span>


                        <!-- EDIT FORM -->

                        <form
                            id="edit-form-{{ $s->id }}"
                            action="/update_cat/{{ $s->id }}"
                            method="POST"
                            style="display:none;">

                            @csrf

                            <input
                                type="text"
                                name="name"
                                value="{{ $s->name }}"
                                class="edit-input"
                                required>

                        </form>

                    </td>



                    <!-- CREATED -->

                    <td class="date">

                        {{ $s->created_at }}

                    </td>



                    <!-- UPDATED -->

                    <td class="date">

                        {{ $s->updated_at }}

                    </td>



                    <!-- ACTIONS -->

                    <td>

                        <div class="actions">


                            <!-- EDIT -->

                            <button
                                type="button"
                                class="action-btn edit-btn"
                                id="edit-button-{{ $s->id }}"
                                onclick="editCategory({{ $s->id }})">

                                ✏️ تعديل

                            </button>



                            <!-- SAVE -->

                            <button
                                type="submit"
                                form="edit-form-{{ $s->id }}"
                                class="action-btn save-btn"
                                id="save-button-{{ $s->id }}"
                                style="display:none;">

                                ✓ حفظ

                            </button>



                            <!-- CANCEL -->

                            <button
                                type="button"
                                class="action-btn cancel-btn"
                                id="cancel-button-{{ $s->id }}"
                                onclick="cancelEdit({{ $s->id }})"
                                style="display:none;">

                                إلغاء

                            </button>



                            <!-- DELETE -->

                            <form
                                action="/delete_cat/{{ $s->id }}"
                                method="POST"
                                onsubmit="return confirm('هل أنت متأكد من حذف هذه الفئة؟');">

                                @csrf

                                <button
                                    type="submit"
                                    class="action-btn delete-btn">

                                    🗑 حذف

                                </button>

                            </form>


                        </div>

                    </td>


                </tr>


                @endforeach


                </tbody>

            </table>


            @else


                <div class="empty">

                    <div class="empty-icon">
                        📂
                    </div>

                    لا توجد فئات حاليًا.

                </div>


            @endif

        </div>

    </div>


</div>



<!-- =========================
     JAVASCRIPT
========================= -->

<script>


function editCategory(id) {


    // إظهار حقل التعديل

    document.getElementById(
        "edit-form-" + id
    ).style.display = "block";


    // إخفاء الاسم القديم

    document.getElementById(
        "name-" + id
    ).style.display = "none";


    // إخفاء زر التعديل

    document.getElementById(
        "edit-button-" + id
    ).style.display = "none";


    // إظهار زر الحفظ

    document.getElementById(
        "save-button-" + id
    ).style.display = "inline-block";


    // إظهار زر الإلغاء

    document.getElementById(
        "cancel-button-" + id
    ).style.display = "inline-block";


    // التركيز على الحقل

    document.querySelector(
        "#edit-form-" + id + " input"
    ).focus();

}



function cancelEdit(id) {


    // إخفاء نموذج التعديل

    document.getElementById(
        "edit-form-" + id
    ).style.display = "none";


    // إظهار الاسم القديم

    document.getElementById(
        "name-" + id
    ).style.display = "inline";


    // إظهار زر التعديل

    document.getElementById(
        "edit-button-" + id
    ).style.display = "inline-block";


    // إخفاء زر الحفظ

    document.getElementById(
        "save-button-" + id
    ).style.display = "none";


    // إخفاء زر الإلغاء

    document.getElementById(
        "cancel-button-" + id
    ).style.display = "none";

}

</script>


</body>

</html>