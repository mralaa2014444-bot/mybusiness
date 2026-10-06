<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Category;
use App\Models\Product;
use App\Models\License;
use App\Models\Payment;
use App\Models\UserProduct;
use Illuminate\Support\Str;
use Carbon\Carbon;




/*
|--------------------------------------------------------------------------
| الصفحة الرئيسية
|--------------------------------------------------------------------------
*/

Route::get('/', function () {

return redirect('/show_for_User');

});


/*
|--------------------------------------------------------------------------
| صفحة المستخدم
|--------------------------------------------------------------------------
*/

Route::get('/show_for_User', function () {

   $products = Product::all();




    return view('show_for_User',compact("products"));

});


/*
|--------------------------------------------------------------------------
| إنشاء حساب
|--------------------------------------------------------------------------
*/

Route::get('/create_user', function () {

    return view('create_user');

});


Route::post('/create_user', function (Request $request) {

    $request->validate([

        'name' => 'required|string|max:255',

        'email' => 'required|email|unique:users,email',

        'password' => [
            'required',
            'string',
            'min:8',
            'confirmed',
            'regex:/[A-Z]/',
            'regex:/[a-z]/',
            'regex:/[0-9]/',
            'regex:/[^A-Za-z0-9]/',
        ],

        'terms' => 'accepted',

    ], [

        'name.required' => 'الاسم مطلوب.',

        'name.string' => 'الاسم يجب أن يكون نصًا.',

        'name.max' => 'الاسم طويل جدًا.',

        'email.required' => 'البريد الإلكتروني مطلوب.',

        'email.email' => 'يرجى إدخال بريد إلكتروني صحيح.',

        'email.unique' => 'هذا البريد الإلكتروني مستخدم بالفعل.',

        'password.required' => 'كلمة المرور مطلوبة.',

        'password.min' => 'كلمة المرور يجب أن تحتوي على 8 أحرف على الأقل.',

        'password.confirmed' => 'تأكيد كلمة المرور غير متطابق.',

        'password.regex' => 'كلمة المرور يجب أن تحتوي على حرف كبير وحرف صغير ورقم ورمز خاص.',

        'terms.accepted' => 'يجب الموافقة على الشروط والأحكام.',

    ]);


    try {

        $i = new User();

        $i->name = $request->name;

        $i->email = $request->email;

        $i->password = Hash::make($request->password);

        $i->role = 'user';

        $i->save();


        return redirect('/login_user')
            ->with(
                'success',
                'تم إنشاء الحساب بنجاح، يمكنك الآن تسجيل الدخول.'
            );


    } catch (\Exception $e) {

        return back()
            ->withInput()
            ->with(
                'error',
                'حدث خطأ أثناء إنشاء الحساب، حاول مرة أخرى.'
            );

    }

});


/*
|--------------------------------------------------------------------------
| تسجيل الدخول
|--------------------------------------------------------------------------
|
| هذا هو تسجيل الدخول الخاص بك.
| لا نستخدم صفحة guest.
|
*/

Route::get('/login_user', function () {

    return view('login_user');

})->name('login');


Route::post('/login_user', function (Request $request) {

    $request->validate([

        'email' => 'required|email',

        'password' => 'required',

    ]);


    try {

        /*
        |--------------------------------------------------------------------------
        | البحث عن المستخدم
        |--------------------------------------------------------------------------
        */

        $user = User::where(
            'email',
            $request->email
        )->first();


        /*
        |--------------------------------------------------------------------------
        | التأكد من وجود المستخدم
        |--------------------------------------------------------------------------
        */

        if (!$user) {

            return back()
                ->withInput()
                ->with(
                    'error',
                    'البريد الإلكتروني غير موجود.'
                );

        }


        /*
        |--------------------------------------------------------------------------
        | التأكد من كلمة المرور
        |--------------------------------------------------------------------------
        */

        if (!Hash::check(
            $request->password,
            $user->password
        )) {

            return back()
                ->withInput()
                ->with(
                    'error',
                    'كلمة المرور خاطئة.'
                );

        }


        /*
        |--------------------------------------------------------------------------
        | تسجيل المستخدم فعليًا في Laravel
        |--------------------------------------------------------------------------
        */

        Auth::login($user);


        /*
        |--------------------------------------------------------------------------
        | تجديد الجلسة
        |--------------------------------------------------------------------------
        */

        $request->session()->regenerate();


        /*
        |--------------------------------------------------------------------------
        | الذهاب إلى Dashboard المستخدم
        |--------------------------------------------------------------------------
        */

        return redirect('/user_dashpord');


    } catch (\Exception $e) {

        return back()
            ->withInput()
            ->with(
                'error',
                'حدث خطأ أثناء تسجيل الدخول.'
            );

    }

});


/*
|--------------------------------------------------------------------------
| Dashboard Laravel الافتراضي
|--------------------------------------------------------------------------
|
| أبقيناه موجودًا.
|
*/

Route::get('/dashboard', function () {

    return view('dashboard');

})->middleware(['auth', 'verified'])
  ->name('dashboard');


/*
|--------------------------------------------------------------------------
| User Dashboard
|--------------------------------------------------------------------------
|
| لا يمكن الوصول إليه إلا بعد تسجيل الدخول.
|
*/
Route::get('/user_dashpord', function () {

    $user = auth()->user();

    $licenses = License::with('product')
        ->where('user_id', $user->id)
        ->latest()
        ->get();

    return view('user_dashpord', compact(
        'user',
        'licenses'
    ));

})->middleware('auth');




Route::post('/logout_user', function (Request $request) {

    Auth::logout();

    // حذف بيانات الجلسة الحالية
    $request->session()->invalidate();

    // إنشاء CSRF Token جديد للجلسة الجديدة
    $request->session()->regenerateToken();

    // العودة إلى صفحة تسجيل الدخول
    return redirect('/login_user');

})->middleware('auth');

Route::post('/update_one_user/{id}', function (Request $request, $id) {

    $table = User::findOrFail($id);

    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
    ]);

    $table->name = $request->name;
    $table->email = $request->email;

    $table->save();

    return redirect('/user_dashpord#profile')
        ->with('success', 'تم تعديل الحساب بنجاح');

})->middleware('auth');




Route::get('/insert_cat', function () {
return view("insert_cat");


});



Route::post('/insert_cat', function (Request $request) {

$table_cat = new Category();

$table_cat->name = $request->name;

$table_cat->save();

return redirect("/insert_cat");


});











Route::get('/insert_cat', function () {
$select = Category::all();
return view("insert_cat",compact("select"));


});






Route::post('/delete_cat/{id}', function (Request $request,$id) {

$remove_del = Category::findOrFail($id);

$remove_del->delete();
return redirect("/insert_cat");



});




Route::post('/update_cat/{id}', function (Request $request,$id) {

$update_del = Category::findOrFail($id);

$update_del->name = $request->name;

$update_del->save();



return redirect("/insert_cat");



});










Route::get('/insert_products', function () {


$category = Category::all();


return view("insert_products" , compact("category"));


});




Route::post('/insert_products', function (Request $request) {

    $request->validate([
        'name' => 'required|string|max:255',

        'description' => 'required|string',

        'image' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',

        'file' => 'required|file|mimes:zip,rar,pdf|max:51200',

        'price_monthly' => 'required|numeric|min:0',

        'price_lifetime' => 'required|numeric|min:0',
    ]);


    $insert_product = new Product();

    $insert_product->name = $request->name;

    $insert_product->description = $request->description;


    // أسعار التراخيص
    $insert_product->price_monthly = $request->price_monthly;

    $insert_product->price_lifetime = $request->price_lifetime;


    // رفع صورة المنتج
    $imagePath = $request->file('image')
        ->store('image', 'public');

    $insert_product->image = $imagePath;


    // رفع ملف المنتج
    // سيتم حفظ الملف داخل:
    // storage/app/products/files
    $filePath = $request->file('file')
        ->store('products/files');

    $insert_product->file = $filePath;


    $insert_product->status = 'قيد التجهيز';

    $insert_product->category_id = $request->category_id;


    $insert_product->save();


    return redirect('/insert_products');

});










Route::get('/insert_lic', function () {

    $products = \App\Models\Product::all();

    return view('insert_lic', compact('products'));



});



Route::post('/insert_lic', function (Request $request) {

    $insert_lic = new \App\Models\License();

    $insert_lic->product_id = $request->product_id;

    $insert_lic->user_id = $request->user_id;

    $insert_lic->type = $request->type;

    $insert_lic->start_date = \Carbon\Carbon::today();

    if ($request->type === 'monthly') {

        $insert_lic->end_date = \Carbon\Carbon::today()->addMonth();

    } elseif ($request->type === 'lifetime') {

        $insert_lic->end_date = null;
    }

    $insert_lic->status = true;

    $insert_lic->save();

    return redirect('/insert_lic')->with('success', 'تم إضافة الترخيص بنجاح');
});





Route::get('/payment_product/{id}', function ($id) {

$product = Product::findOrFail($id);


return view('payment_product',compact('product'));

});






Route::post('/payment_product/test', function () {

    // =====================================
    // 1 - المستخدم المسجل دخول
    // =====================================

    $user = auth()->user();

    $product_id = request('product_id');

    $type = request('type');


    // =====================================
    // 2 - الحصول على المنتج
    // =====================================

    $product = Product::findOrFail($product_id);


    // =====================================
    // 3 - تحديد السعر من قاعدة البيانات
    // =====================================

    if ($type === 'monthly') {

        $amount = $product->price_monthly;

    } else {

        $amount = $product->price_lifetime;

    }


    // =====================================
    // 4 - إنشاء عملية الدفع
    // =====================================

    $payment = new Payment();

    $payment->user_id = $user->id;
    $payment->product_id = $product->id;
    $payment->license_type = $type;
    $payment->amount = $amount;
    $payment->currency = 'SAR';
    $payment->status = 'paid';
    $payment->payment_method = 'test';
    $payment->transaction_id = 'TEST-' . uniqid();

    $payment->save();


    // =====================================
    // 5 - إنشاء الترخيص
    // =====================================

    $license = new License();

    $license->product_id = $product->id;
    $license->user_id = $user->id;
    $license->type = $type;

    // =====================================
    // توليد مفتاح الترخيص تلقائيًا
    // =====================================

    $license->license_key =
        'ALAA-' .
        strtoupper(Str::random(4)) . '-' .
        strtoupper(Str::random(4)) . '-' .
        strtoupper(Str::random(4));


    // =====================================
    // تاريخ بداية الترخيص
    // =====================================

    $license->start_date = now()->toDateString();


    // =====================================
    // تاريخ انتهاء الترخيص
    // =====================================

    if ($type === 'monthly') {

        $license->end_date = now()
            ->addMonth()
            ->toDateString();

    } else {

        $license->end_date = null;

    }


    // =====================================
    // حالة الترخيص
    // =====================================

    $license->status = true;

    $license->save();


    // =====================================
    // 6 - ربط المستخدم بالمنتج
    // =====================================

    $userProduct = new UserProduct();

    $userProduct->user_id = $user->id;
    $userProduct->product_id = $product->id;
    $userProduct->license_id = $license->id;

    $userProduct->save();


    // =====================================
    // 7 - تحميل المنتج
    // =====================================

   


    // =====================================
// 7 - توليد رابط تحميل لمرة واحدة
// =====================================

$token = Str::random(64);

Cache::put('download_' . $token, $license->id, 3600); // ساعة

$url = url('/license-download/' . $token);

return redirect($url);


});




Route::get('/admin_dashpord', function () {

    // ==========================================
    // الإحصائيات
    // ==========================================

    $productsCount = Product::count();

    $usersCount = User::where('role', 'user')->count();

    $licensesCount = License::count();

    $activeLicenses = License::where('status', true)
        ->where(function ($query) {

            $query->whereNull('end_date')
                  ->orWhereDate('end_date', '>=', now());

        })
        ->count();

    $paymentsCount = Payment::count();


    // ==========================================
    // إجمالي المبيعات
    // ==========================================

    $totalSales = Payment::where('status', 'paid')
        ->sum('amount');


    // ==========================================
    // آخر المدفوعات
    // ==========================================

    $payments = Payment::with([
        'user',
        'product'
    ])
    ->latest()
    ->take(10)
    ->get();


    // ==========================================
    // آخر التراخيص
    // ==========================================

    $licenses = License::with([
        'user',
        'product'
    ])
    ->latest()
    ->take(10)
    ->get();


    // ==========================================
    // آخر المنتجات
    // ==========================================

    $products = Product::latest()
        ->take(10)
        ->get();


    // ==========================================
    // إرسال البيانات للصفحة
    // ==========================================

    return view('admin_dashpord', compact(

        'productsCount',

        'usersCount',

        'licensesCount',

        'activeLicenses',

        'paymentsCount',

        'totalSales',

        'payments',

        'licenses',

        'products'

    ));

})->middleware(['auth', 'admin']);

Route::get('/product_admin', function () {

    $product = DB::table('products')
        ->join('categories', 'products.category_id', '=', 'categories.id')
        ->select(
            'products.id',
            'products.name',
            'products.description',
            'products.price_monthly',
            'products.price_lifetime',
            'products.category_id',
            'categories.name as category_name'
        )
        ->get();

    $categories = DB::table('categories')->get();

    return view('product_admin', compact('product', 'categories'));
});


Route::get('/remove_one_product/{id}', function ($id) {

    $product = Product::findOrFail($id);

    $product->delete();

    return redirect('/product_admin')
        ->with('success', 'تم حذف المنتج بنجاح');

});



Route::post('/update_one_product/{id}', function (Request $request, $id) {

    $product = Product::findOrFail($id);

    $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'required|string',
        'price_monthly' => 'required|numeric|min:0',
        'price_lifetime' => 'required|numeric|min:0',
        'category_id' => 'required|exists:categories,id',
    ]);

    $product->name = $request->name;
    $product->description = $request->description;
    $product->price_monthly = $request->price_monthly;
    $product->price_lifetime = $request->price_lifetime;
    $product->category_id = $request->category_id;

    $product->save();

    return redirect('/product_admin')
        ->with('success', 'تم تعديل المنتج بنجاح');
});



/*
|--------------------------------------------------------------------------
| عرض صفحة تجديد الترخيص
|--------------------------------------------------------------------------
*/

Route::get('/renew-license/{license}', function (License $license) {

    return view(
        'renew_license',
        compact('license')
    );

})
->middleware('auth')
->name('license.renew');


/*
|--------------------------------------------------------------------------
| تنفيذ عملية تجديد الترخيص
|--------------------------------------------------------------------------
*/
/*
|--------------------------------------------------------------------------
| تنفيذ عملية تجديد الترخيص
|--------------------------------------------------------------------------
*/Route::post('/renew-license/{license}', function (
    Request $request,
    License $license
) {

    /*
    |--------------------------------------------------------------------------
    | 1 - التأكد أن الترخيص شهري
    |--------------------------------------------------------------------------
    */

    if ($license->type !== 'monthly') {

        return back()->with(
            'error',
            'هذا الترخيص دائم ولا يحتاج إلى تجديد.'
        );

    }


    /*
    |--------------------------------------------------------------------------
    | 2 - التأكد أن الترخيص غير معطل يدويًا
    |--------------------------------------------------------------------------
    |
    | الترخيص المنتهي (end_date في الماضي) لا يُعتبر معطلًا.
    | فقط الترخيص المعطل يدويًا (status = 0 مع end_date في المستقبل)
    | لا يمكن تجديده.
    |
    */

    if (!$license->status && !$license->is_expired) {

        return back()->with(
            'error',
            'هذا الترخيص معطل يدويًا. تواصل مع الدعم.'
        );

    }


    /*
    |--------------------------------------------------------------------------
    | 3 - التحقق من بيانات نموذج الدفع
    |--------------------------------------------------------------------------
    */

    $request->validate([

        'card_holder' => [
            'required',
            'string',
            'max:255'
        ],

        'card_number' => [
            'required',
            'string',
            'max:19'
        ],

        'card_expiry' => [
            'required',
            'string',
            'max:7'
        ],

        'card_cvv' => [
            'required',
            'string',
            'max:4'
        ],

    ]);


    /*
    |--------------------------------------------------------------------------
    | 4 - عملية الدفع
    |--------------------------------------------------------------------------
    |
    | حاليًا هذه مرحلة تجريبية فقط.
    |
    */


    /*
    |--------------------------------------------------------------------------
    | 5 - تمديد الترخيص بعد نجاح الدفع
    |--------------------------------------------------------------------------
    */

    DB::transaction(function () use ($license) {

        /*
        |--------------------------------------------------------------------------
        | 5.1 - تحديث تاريخ البداية
        |--------------------------------------------------------------------------
        |
        | تاريخ البداية = تاريخ آخر تجديد.
        |
        */

        $license->start_date = now()->toDateString();


        /*
        |--------------------------------------------------------------------------
        | 5.2 - تحديث تاريخ الانتهاء
        |--------------------------------------------------------------------------
        |
        | إذا كان الترخيص منتهيًا: يبدأ الشهر الجديد من اليوم.
        | إذا كان لا يزال فعّالًا: نضيف شهرًا إلى تاريخ الانتهاء الحالي.
        |
        */

        if (
            !$license->end_date ||
            Carbon::parse($license->end_date)->isPast()
        ) {

            $license->end_date =
                now()
                    ->addMonth()
                    ->toDateString();

        } else {

            $license->end_date =
                Carbon::parse($license->end_date)
                    ->addMonth()
                    ->toDateString();

        }


        /*
        |--------------------------------------------------------------------------
        | 5.3 - تفعيل الترخيص
        |--------------------------------------------------------------------------
        */

        $license->status = true;


        /*
        |--------------------------------------------------------------------------
        | 5.4 - حفظ الترخيص
        |--------------------------------------------------------------------------
        */

        $license->save();

    });


    /*
    |--------------------------------------------------------------------------
    | 6 - العودة إلى لوحة المستخدم
    |--------------------------------------------------------------------------
    */

    return redirect('/user_dashpord')
        ->with(
            'success',
            'تم تجديد الترخيص بنجاح لمدة شهر.'
        );

})
->middleware('auth')
->name('license.renew.process');



Route::get('/admin_created', function () {
return view('admin_created');

});





Route::post('/admin_created', function (Request $request) {

    $request->validate([

        'name' => 'required|string|max:255',

        'email' => 'required|email|unique:users,email',

        'password' => [
            'required',
            'string',
            'min:8',
            'confirmed',
            'regex:/[A-Z]/',
            'regex:/[a-z]/',
            'regex:/[0-9]/',
            'regex:/[^A-Za-z0-9]/',
        ],

        'terms' => 'accepted',

    ], [

        'name.required' => 'الاسم مطلوب.',

        'name.string' => 'الاسم يجب أن يكون نصًا.',

        'name.max' => 'الاسم طويل جدًا.',

        'email.required' => 'البريد الإلكتروني مطلوب.',

        'email.email' => 'يرجى إدخال بريد إلكتروني صحيح.',

        'email.unique' => 'هذا البريد الإلكتروني مستخدم بالفعل.',

        'password.required' => 'كلمة المرور مطلوبة.',

        'password.min' => 'كلمة المرور يجب أن تحتوي على 8 أحرف على الأقل.',

        'password.confirmed' => 'تأكيد كلمة المرور غير متطابق.',

        'password.regex' => 'كلمة المرور يجب أن تحتوي على حرف كبير وحرف صغير ورقم ورمز خاص.',

        'terms.accepted' => 'يجب الموافقة على الشروط والأحكام.',

    ]);


    try {

        $i = new User();

        $i->name = $request->name;

        $i->email = $request->email;

        $i->password = Hash::make($request->password);

        $i->role = 'admin';

        $i->save();


        return redirect('/login_admin')
            ->with(
                'success',
                'تم إنشاء الحساب بنجاح، يمكنك الآن تسجيل الدخول.'
            );


    } catch (\Exception $e) {

        return back()
            ->withInput()
            ->with(
                'error',
                'حدث خطأ أثناء إنشاء الحساب، حاول مرة أخرى.'
            );

    }

});






Route::get('/login_admin', function () {

    return view('login_admin');

});

Route::post('/login_admin', function (Request $request) {

    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    try {

        $user = User::where(
            'email',
            $request->email
        )->first();

        if (!$user) {

            return back()
                ->withInput()
                ->with(
                    'error',
                    'البريد الإلكتروني غير موجود.'
                );

        }

        if (!Hash::check(
            $request->password,
            $user->password
        )) {

            return back()
                ->withInput()
                ->with(
                    'error',
                    'كلمة المرور خاطئة.'
                );

        }

        if ($user->role !== 'admin') {

            return back()
                ->withInput()
                ->with(
                    'error',
                    'هذا الحساب ليس حساب أدمن.'
                );

        }

        Auth::login($user);

        $request->session()->regenerate();

        return redirect('/admin_dashpord');

    } catch (\Exception $e) {

        return back()
            ->withInput()
            ->with(
                'error',
                'حدث خطأ أثناء تسجيل الدخول.'
            );

    }

});





Route::get('/sales', function () {

    $sales = DB::table('payments')

        ->join(
            'users',
            'payments.user_id',
            '=',
            'users.id'
        )

        ->join(
            'products',
            'payments.product_id',
            '=',
            'products.id'
        )

        ->select(
            'users.name as user_name',
            'users.email as user_email',

            'products.name as product_name',

            'payments.license_type',
            'payments.amount',
            'payments.currency',
            'payments.status',
            'payments.payment_method',
            'payments.transaction_id',
            'payments.created_at'
        )

        ->latest('payments.created_at')
        ->get();

    return view('sales', compact('sales'));

})->middleware('auth');





Route::get('/license', function () {

    $licenses = DB::table('licenses')
        ->join(
            'users',
            'licenses.user_id',
            '=',
            'users.id'
        )
        ->join(
            'products',
            'licenses.product_id',
            '=',
            'products.id'
        )
        ->select(
            'users.name as user_name',
            'users.email as user_email',
            'products.name as product_name',
            'licenses.type',
            'licenses.start_date',
            'licenses.end_date',
            'licenses.status'
        )
        ->latest('licenses.created_at')
        ->get();

    return view('license', compact('licenses'));

})
->middleware('auth');





Route::get('/update_status/{id}', function ($id) {

    $product = Product::findOrFail($id);

    if ($product->status === 'قيد التجهيز') {

        $product->status = 'متاح للبيع';

    } else {

        $product->status = 'قيد التجهيز';

    }

    $product->save();

    return back();

});





Route::post('/logout_admin', function (Request $request) {

    Auth::logout();

    // حذف بيانات الجلسة الحالية
    $request->session()->invalidate();

    // إنشاء CSRF Token جديد للجلسة الجديدة
    $request->session()->regenerateToken();

    // العودة إلى صفحة تسجيل الدخول
    return redirect('/login_admin');

})->middleware('auth');






/*
|--------------------------------------------------------------------------
| تحميل المنتج (محمي بالترخيص)
|--------------------------------------------------------------------------
*/

Route::get('/download/{product}', function (Product $product) {

    $user = auth()->user();

    /*
    |--------------------------------------------------------------------------
    | فحص تلقائي: تعطيل التراخيص المنتهية
    |--------------------------------------------------------------------------
    */

    License::where('user_id', $user->id)
        ->where('status', true)
        ->whereNotNull('end_date')
        ->whereDate('end_date', '<', now())
        ->update(['status' => false]);

    /*
    |--------------------------------------------------------------------------
    | التحقق من وجود ترخيص فعّال
    |--------------------------------------------------------------------------
    */

    $license = License::where('user_id', $user->id)
        ->where('product_id', $product->id)
        ->active()
        ->first();

    if (!$license) {
        return redirect('/user_dashpord')
            ->with('error', 'ترخيصك منتهي الصلاحية. يرجى التجديد.');
    }

    /*
    |--------------------------------------------------------------------------
    | التحقق من وجود الملف
    |--------------------------------------------------------------------------
    */

    $filePath = storage_path('app/private/' . $product->file);

    if (!file_exists($filePath)) {
        return redirect('/user_dashpord')
            ->with('error', 'الملف غير موجود على السيرفر.');
    }

    /*
    |--------------------------------------------------------------------------
    | التحميل
    |--------------------------------------------------------------------------
    */

    return response()->download($filePath);


})->middleware(['auth', 'license.check'])->name('product.download');












/*
|--------------------------------------------------------------------------
| API: التحقق من الترخيص (يستخدمه نظام العميل)
|--------------------------------------------------------------------------
|
| نظام العميل يتصل بهذا المسار للتحقق من ترخيصه.
|
| مثال:
| GET /api/license/verify?key=ALAA-XXXX-XXXX-XXXX
|
*/

Route::get('/api/license/verify', function (Request $request) {

    $key = $request->input('key');

    /*
    |--------------------------------------------------------------------------
    | التحقق من وجود المفتاح
    |--------------------------------------------------------------------------
    */

    if (!$key) {
        return response()->json([
            'valid' => false,
            'message' => 'مفتاح الترخيص مطلوب.'
        ], 400);
    }

    /*
    |--------------------------------------------------------------------------
    | البحث عن الترخيص
    |--------------------------------------------------------------------------
    */

    $license = License::where('license_key', $key)->first();

    if (!$license) {
        return response()->json([
            'valid' => false,
            'message' => 'الترخيص غير موجود.'
        ], 404);
    }

    /*
    |--------------------------------------------------------------------------
    | فحص تلقائي: إذا انتهى، عطّله فورًا
    |--------------------------------------------------------------------------
    */

    if ($license->is_expired && $license->status) {
        $license->status = false;
        $license->save();
    }

    /*
    |--------------------------------------------------------------------------
    | إذا كان الترخيص غير فعّال
    |--------------------------------------------------------------------------
    */

    if (!$license->is_active) {
        return response()->json([
            'valid' => false,
            'message' => 'الترخيص منتهي الصلاحية.',
            'expired_at' => $license->end_date
        ], 403);
    }

    /*
    |--------------------------------------------------------------------------
    | الترخيص فعّال
    |--------------------------------------------------------------------------
    */

    return response()->json([
        'valid' => true,
        'type' => $license->type,
        'starts_at' => $license->start_date,
        'expires_at' => $license->end_date,
        'days_remaining' => $license->days_remaining,
    ]);

});













/*
|--------------------------------------------------------------------------
| تحميل مخصص للعميل (رابط لمرة واحدة)
|--------------------------------------------------------------------------
*/

Route::get('/license-download/{token}', function ($token) {

    /*
    |--------------------------------------------------------------------------
    | 1. قراءة التوكن من Cache
    |--------------------------------------------------------------------------
    */

    $licenseId = Cache::pull('download_' . $token);

    if (!$licenseId) {
        abort(404, 'الرابط منتهي أو مستخدم.');
    }

    /*
    |--------------------------------------------------------------------------
    | 2. جلب الترخيص
    |--------------------------------------------------------------------------
    */

    $license = License::findOrFail($licenseId);

    /*
    |--------------------------------------------------------------------------
    | 3. جلب المنتج
    |--------------------------------------------------------------------------
    */

    $product = Product::findOrFail($license->product_id);

    /*
    |--------------------------------------------------------------------------
    | 4. مسار الملف
    |--------------------------------------------------------------------------
    */

    $filePath = storage_path('app/private/' . $product->file);

    if (!file_exists($filePath)) {
        abort(404, 'الملف غير موجود.');
    }

    /*
    |--------------------------------------------------------------------------
    | 5. تحميل
    |--------------------------------------------------------------------------
    */

    return response()->download($filePath, $product->name . '.zip');

})->name('license.download');






require __DIR__.'/auth.php';