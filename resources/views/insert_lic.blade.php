```html
<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>إضافة ترخيص</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 40px 20px;
            font-family: Arial, sans-serif;
            background: #f5f6fa;
        }

        .container {
            max-width: 500px;
            margin: auto;
            background: #ffffff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
            color: #222;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #333;
        }

        select,
        input {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 15px;
            background: white;
        }

        select:focus,
        input:focus {
            outline: none;
            border-color: #4f46e5;
        }

        button {
            width: 100%;
            padding: 13px;
            border: none;
            border-radius: 8px;
            background: #4f46e5;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background: #4338ca;
        }
    </style>
</head>

<body>

<div class="container">

    <h1>إضافة ترخيص</h1>

    <form action="/insert_lic" method="POST">

        @csrf

        <!-- اختيار المنتج -->
        <div class="form-group">

            <label>المنتج</label>

            <select name="product_id" id="product" required>

                <option value="">
                    اختر المنتج
                </option>

                @foreach ($products as $product)

                    <option
                        value="{{ $product->id }}"
                        data-monthly="{{ $product->price_monthly }}"
                        data-lifetime="{{ $product->price_lifetime }}"
                    >
                        {{ $product->name }}
                    </option>

                @endforeach

            </select>

        </div>


        <!-- نوع الترخيص -->
        <div class="form-group">

            <label>نوع الترخيص</label>

            <select name="type" id="type" required>

                <option value="">
                    اختر نوع الترخيص
                </option>

                <option value="monthly">
                    اشتراك شهري
                </option>

                <option value="lifetime">
                    شراء دائم
                </option>

            </select>

        </div>


        <!-- السعر -->
        <div class="form-group">

            <label>السعر</label>

            <input
                type="text"
                id="price"
                placeholder="سيظهر السعر تلقائيًا"
                readonly
            >

        </div>


        <button type="submit">
            إضافة الترخيص
        </button>

    </form>

</div>


<script>

    const product = document.getElementById('product');
    const type = document.getElementById('type');
    const price = document.getElementById('price');


    function updatePrice() {

        const selectedProduct =
            product.options[product.selectedIndex];

        const selectedType = type.value;


        if (!selectedProduct || !selectedType) {

            price.value = '';

            return;
        }


        if (selectedType === 'monthly') {

            price.value =
                selectedProduct.dataset.monthly + ' ريال';

        }


        if (selectedType === 'lifetime') {

            price.value =
                selectedProduct.dataset.lifetime + ' ريال';

        }

    }


    product.addEventListener('change', updatePrice);

    type.addEventListener('change', updatePrice);

</script>

</body>
</html>
```
