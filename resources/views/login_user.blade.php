<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>إنشاء حساب | Alaa</title>

    <link
        href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">

    <style>

   * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

:root {
    --bg: #f5f7fa;
    --card: #ffffff;
    --border: #e5e7eb;
    --text: #111827;
    --muted: #6b7280;
    --green: #8dcc20;
    --green-dark: #6fa611;
}

body {
    min-height: 100vh;

    font-family: "Cairo", sans-serif;

    background:
        radial-gradient(
            circle at 10% 10%,
            rgba(183,255,50,.18),
            transparent 30%
        ),
        radial-gradient(
            circle at 90% 90%,
            rgba(100,120,255,.10),
            transparent 30%
        ),
        var(--bg);

    color: var(--text);

    display: flex;

    justify-content: center;

    align-items: center;

    padding: 30px;

    overflow-x: hidden;
}


/* =========================
   MAIN CARD
========================= */

.register-wrapper {
    width: 100%;
    max-width: 1050px;
    min-height: 650px;

    display: grid;

    grid-template-columns: .9fr 1.1fr;

    border: 1px solid var(--border);

    border-radius: 24px;

    overflow: hidden;

    background: rgba(255,255,255,.92);

    box-shadow:
        0 30px 80px rgba(0,0,0,.12);

}


/* =========================
   LEFT SIDE
========================= */

.visual {
    position: relative;

    padding: 50px;

    background:
        radial-gradient(
            circle at 50% 50%,
            rgba(183,255,50,.22),
            transparent 45%
        ),
        #eef3e8;

    border-left: 1px solid var(--border);

    display: flex;

    flex-direction: column;

    justify-content: space-between;

    overflow: hidden;
}


.logo {
    font-family: Arial, sans-serif;

    font-size: 26px;

    font-weight: 900;

    direction: ltr;

    color: #111827;
}


.logo span {
    color: var(--green-dark);
}


.visual-content {
    position: relative;
    z-index: 2;
}


.visual-content small {
    color: var(--green-dark);

    font-family: Arial;

    font-size: 10px;

    letter-spacing: 3px;
}


.visual-content h2 {
    font-size: 42px;

    line-height: 1.35;

    margin-top: 15px;

    color: #111827;
}


.visual-content h2 span {
    color: var(--green-dark);
}


.visual-content p {
    color: #68707c;

    font-size: 12px;

    line-height: 2;

    margin-top: 20px;

    max-width: 360px;
}


/* =========================
   LAPTOP
========================= */

.laptop {
    position: absolute;

    width: 360px;

    height: 230px;

    left: 50%;

    top: 55%;

    transform:
        translate(-50%,-50%)
        perspective(800px)
        rotateY(-18deg)
        rotateX(8deg)
        rotateZ(-3deg);

    animation: laptopFloat 5s ease-in-out infinite;
}


@keyframes laptopFloat {

    0%,100% {
        transform:
            translate(-50%,-50%)
            perspective(800px)
            rotateY(-18deg)
            rotateX(8deg)
            rotateZ(-3deg);
    }

    50% {
        transform:
            translate(-50%,-55%)
            perspective(800px)
            rotateY(-18deg)
            rotateX(8deg)
            rotateZ(-3deg);
    }

}


.screen {
    width: 300px;

    height: 190px;

    margin: auto;

    background: #ffffff;

    border: 7px solid #cfd4da;

    border-radius: 14px 14px 5px 5px;

    padding: 15px;

    box-shadow:
        0 25px 50px rgba(0,0,0,.20),
        0 0 40px rgba(183,255,50,.15);
}


.code-line {
    height: 6px;

    border-radius: 5px;

    background: #d9dde2;

    margin: 12px 0;
}


.code-line.green {
    width: 75%;

    background: var(--green);
}


.code-line.short {
    width: 45%;
}


.code-line.medium {
    width: 60%;
}


.laptop-base {
    width: 350px;

    height: 15px;

    background: linear-gradient(
        #c5cad0,
        #969da5
    );

    clip-path: polygon(
        8% 0,
        92% 0,
        100% 100%,
        0 100%
    );
}


/* =========================
   FORM AREA
========================= */

.form-area {
    padding: 55px 65px;

    display: flex;

    flex-direction: column;

    justify-content: center;

    background: #ffffff;
}


.form-header {
    margin-bottom: 28px;
}


.form-header h1 {
    font-size: 30px;

    color: #111827;

    margin-bottom: 7px;
}


.form-header p {
    color: var(--muted);

    font-size: 12px;
}


/* =========================
   GOOGLE BUTTON
========================= */

.google-btn {
    width: 100%;

    height: 52px;

    border-radius: 9px;

    border: 1px solid #dfe3e8;

    background: #ffffff;

    color: #20242a;

    display: flex;

    align-items: center;

    justify-content: center;

    gap: 12px;

    cursor: pointer;

    font-family: inherit;

    font-size: 12px;

    transition: .3s;

    box-shadow:
        0 3px 10px rgba(0,0,0,.04);
}


.google-btn:hover {
    background: #f8fafb;

    border-color: #cbd1d8;

    transform: translateY(-2px);
}


.google-icon {
    width: 21px;

    height: 21px;

    background: #ffffff;

    color: #4285f4;

    border-radius: 50%;

    display: flex;

    justify-content: center;

    align-items: center;

    font-family: Arial;

    font-weight: bold;

    border: 1px solid #eee;
}


/* =========================
   DIVIDER
========================= */

.divider {
    display: flex;

    align-items: center;

    gap: 15px;

    color: #9ca3af;

    font-size: 10px;

    margin: 25px 0;
}


.divider::before,
.divider::after {
    content: "";

    flex: 1;

    height: 1px;

    background: #e5e7eb;
}


/* =========================
   FIELDS
========================= */

.field {
    margin-bottom: 17px;
}


.field label {
    display: block;

    font-size: 11px;

    color: #374151;

    margin-bottom: 7px;

    font-weight: 600;
}


.input-wrapper {
    position: relative;
}


.input-wrapper span {
    position: absolute;

    right: 15px;

    top: 50%;

    transform: translateY(-50%);

    color: #9ca3af;

    font-size: 14px;
}


.input-wrapper input {
    width: 100%;

    height: 50px;

    background: #f9fafb;

    border: 1px solid #e1e5ea;

    border-radius: 8px;

    outline: none;

    color: #111827;

    padding: 0 45px 0 15px;

    font-family: inherit;

    font-size: 12px;

    transition: .3s;
}


.input-wrapper input:focus {
    background: #ffffff;

    border-color: var(--green);

    box-shadow:
        0 0 0 3px
        rgba(183,255,50,.12);
}


.input-wrapper input::placeholder {
    color: #a5abb3;
}


/* =========================
   TERMS
========================= */

.terms {
    display: flex;

    align-items: center;

    gap: 8px;

    color: #6b7280;

    font-size: 10px;

    margin: 7px 0 20px;
}


.terms input {
    accent-color: var(--green-dark);
}


.terms a {
    color: var(--green-dark);

    font-weight: 600;
}


/* =========================
   REGISTER BUTTON
========================= */

.register-btn {
    width: 100%;

    height: 53px;

    border: none;

    border-radius: 8px;

    background: var(--green);

    color: #17200a;

    font-family: inherit;

    font-size: 12px;

    font-weight: 800;

    cursor: pointer;

    transition: .3s;

    box-shadow:
        0 8px 20px
        rgba(141,204,32,.15);
}


.register-btn:hover {
    transform: translateY(-2px);

    background: #a7ed2c;

    box-shadow:
        0 12px 30px
        rgba(141,204,32,.25);
}


/* =========================
   LOGIN
========================= */

.login {
    text-align: center;

    margin-top: 23px;

    color: #7b828c;

    font-size: 11px;
}


.login a {
    color: var(--green-dark);

    font-weight: bold;
}


/* =========================
   RESPONSIVE
========================= */

@media(max-width: 800px) {

    .register-wrapper {
        grid-template-columns: 1fr;
    }

    .visual {
        display: none;
    }

    .form-area {
        padding: 45px 30px;
    }

}


@media(max-width: 450px) {

    body {
        padding: 15px;
    }

    .form-area {
        padding: 35px 20px;
    }

    .form-header h1 {
        font-size: 26px;
    }

}

    </style>

</head>


<body>


<div class="register-wrapper">


    <!-- =====================
         VISUAL
    ====================== -->

    <div class="visual">


        <div class="logo">
            ALAA<span>.</span>
        </div>


        <div class="visual-content">

            <small>
                DIGITAL EXPERIENCE
            </small>


            <h2>

                ابنِ مشروعك

                <span>
                    الرقمي.
                </span>

            </h2>


            <p>

                سجل دخولك للوصول إلى خدماتنا
                ومنتجاتنا الرقمية وإدارة مشاريعك
                من مكان واحد.

            </p>

        </div>


        <!-- Laptop -->

        <div class="laptop">

            <div class="screen">

                <div class="code-line green"></div>

                <div class="code-line medium"></div>

                <div class="code-line short"></div>

                <div class="code-line green"></div>

                <div class="code-line medium"></div>

                <div class="code-line short"></div>

                <div class="code-line"></div>

            </div>


            <div class="laptop-base"></div>

        </div>


    </div>


    <!-- =====================
         FORM
    ====================== -->

    <div class="form-area">


        <div class="form-header">

            <h1>
                تسجيل دخول 
            </h1>

            <p>
                سجل دخولك وابدأ رحلتك معنا
            </p>

        </div>


        <!-- Google -->

        <button
            type="button"
            class="google-btn"
            id="googleBtn">

            <span class="google-icon">
                G
            </span>

            Continue with Google

        </button>


        <div class="divider">
            أو التسجيل باستخدام البريد الإلكتروني
        </div>


        <form
            method="POST"
            action="/login_user">

            @csrf


            




            <!-- البريد -->

            <div class="field">

                <label>
                    البريد الإلكتروني
                </label>

                <div class="input-wrapper">

                    <span>
                        @
                    </span>

                    <input
                        type="email"
                        name="email"
                        placeholder="example@gmail.com"
                        required>

                </div>

            </div>


            <!-- كلمة المرور -->

            <div class="field">

                <label>
                    كلمة المرور
                </label>

                <div class="input-wrapper">

                    <span>
                        🔒
                    </span>

                    <input
                        type="password"
                        name="password"
                        id="password"
                        placeholder="••••••••"
                        required>

                </div>

       <br>


            <!-- الشروط -->

    

            <button
                type="submit"
                class="register-btn">

                تسجيل دخول
                ←

            </button>


        </form>


        <div class="login">

            ليس لديك حساب ؟

            <a href="/create_user">
            إنشاء حساب 
            </a>

        </div>


    </div>

</div>


<script>

    document
        .getElementById("googleBtn")
        .addEventListener("click", function () {

            /*
             * سنضع هنا رابط Google OAuth
             * بعد إعداد Laravel Socialite
             */

            alert(
                "سنربط Google OAuth هنا في الخطوة القادمة"
            );

        });

</script>


</body>

</html>