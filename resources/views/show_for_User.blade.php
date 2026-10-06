<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Alaa Khalil | Digital Solutions</title>

    <link rel="stylesheet" href="style.css">

    <link
        href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">


<style>





    .project-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
}
   * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

:root {
    --bg: #f5f7fa;
    --card: #ffffff;
    --card-soft: #f9fafb;

    --border: #e5e7eb;

    --text: #111827;
    --text-light: #374151;

    --muted: #6b7280;

    --green: #8dcc20;
    --green-dark: #6fa611;

    --shadow: 0 20px 60px rgba(0, 0, 0, .08);
}

html {
    scroll-behavior: smooth;
}

body {
    background: var(--bg);

    color: var(--text);

    font-family: "Cairo", sans-serif;

    overflow-x: hidden;
}

a {
    color: inherit;
    text-decoration: none;
}


/* =========================================
   NAVBAR
========================================= */

.navbar {
    position: fixed;

    top: 0;
    right: 0;

    width: 100%;
    height: 80px;

    padding: 0 7%;

    display: flex;

    justify-content: space-between;
    align-items: center;

    z-index: 100;

    background: rgba(255, 255, 255, .82);

    backdrop-filter: blur(20px);

    border-bottom: 1px solid var(--border);

    box-shadow:
        0 5px 25px rgba(0, 0, 0, .03);
}


.logo {
    font-family: Arial;

    font-weight: 900;

    font-size: 25px;

    letter-spacing: -1px;

    color: #111827;
}


.logo span {
    color: var(--green-dark);
}


nav {
    display: flex;

    gap: 35px;
}


nav a {
    color: #6b7280;

    font-size: 13px;

    transition: .3s;
}


nav a:hover {
    color: var(--green-dark);
}


.start-btn {
    border: 1px solid rgba(111, 166, 17, .35);

    color: var(--green-dark);

    padding: 8px 17px;

    border-radius: 7px;

    font-size: 11px;

    background: rgba(141, 204, 32, .05);

    transition: .3s;
}


.start-btn:hover {
    background: var(--green);

    color: #17200a;

    border-color: var(--green);
}


/* =========================================
   HERO
========================================= */

.hero {
    min-height: 100vh;

    position: relative;

    overflow: hidden;

    display: flex;

    align-items: center;

    padding: 130px 7% 80px;

    background:
        radial-gradient(
            circle at 75% 50%,
            rgba(141, 204, 32, .12),
            transparent 35%
        ),

        radial-gradient(
            circle at 10% 20%,
            rgba(100, 120, 255, .06),
            transparent 30%
        ),

        var(--bg);
}


#threeCanvas {
    position: absolute;

    inset: 0;

    width: 100%;

    height: 100%;

    z-index: 1;
}


.hero-overlay {
    position: absolute;

    inset: 0;

    background:
        linear-gradient(
            90deg,
            rgba(245,247,250,.98) 0%,
            rgba(245,247,250,.88) 35%,
            rgba(245,247,250,.25) 70%,
            rgba(245,247,250,.05) 100%
        );

    pointer-events: none;

    z-index: 2;
}


.hero-content {
    position: relative;

    z-index: 5;

    width: 48%;
}


.availability {
    display: inline-flex;

    align-items: center;

    gap: 8px;

    border: 1px solid var(--border);

    padding: 6px 13px;

    border-radius: 30px;

    color: #6b7280;

    font-size: 10px;

    background: rgba(255,255,255,.75);

    box-shadow:
        0 5px 20px rgba(0,0,0,.04);
}


.availability span {
    width: 7px;

    height: 7px;

    background: var(--green);

    border-radius: 50%;

    box-shadow:
        0 0 15px rgba(141,204,32,.7);
}


.label {
    direction: ltr;

    color: var(--green-dark);

    font-family: Arial;

    font-size: 10px;

    letter-spacing: 3px;

    margin-top: 25px;
}


.hero h1 {
    font-size: clamp(45px,5vw,75px);

    line-height: 1.2;

    margin-top: 12px;

    letter-spacing: -2px;

    color: #111827;
}


.hero h1 span {
    color: var(--green-dark);
}


.description {
    color: var(--muted);

    max-width: 550px;

    font-size: 14px;

    line-height: 2;

    margin: 25px 0;
}


.buttons {
    display: flex;

    gap: 10px;

    margin: 30px 0;
}


.primary,
.secondary {
    min-height: 50px;

    padding: 0 23px;

    display: inline-flex;

    align-items: center;

    justify-content: center;

    gap: 15px;

    border-radius: 7px;

    font-size: 12px;

    font-weight: bold;

    transition: .3s;
}


.primary {
    background: var(--green);

    color: #17200a;

    box-shadow:
        0 10px 25px rgba(141,204,32,.18);
}


.primary:hover {
    transform: translateY(-3px);

    background: #a7ed2c;
}


.secondary {
    border: 1px solid #dfe3e8;

    color: #374151;

    background: #ffffff;
}


.secondary:hover {
    transform: translateY(-3px);

    border-color: #cbd1d8;

    box-shadow:
        0 8px 20px rgba(0,0,0,.06);
}


.technologies {
    display: flex;

    gap: 7px;
}


.technologies span {
    direction: ltr;

    font-family: Arial;

    font-size: 9px;

    color: #6b7280;

    border: 1px solid #e1e5ea;

    padding: 5px 10px;

    border-radius: 4px;

    background: rgba(255,255,255,.8);
}


/* =========================================
   FLOATING CODE
========================================= */

.floating-code {
    position: absolute;

    z-index: 6;

    color: var(--green-dark);

    background: rgba(255,255,255,.85);

    border: 1px solid rgba(141,204,32,.25);

    padding: 9px 13px;

    border-radius: 6px;

    font-family: Consolas, monospace;

    font-size: 10px;

    backdrop-filter: blur(10px);

    box-shadow:
        0 10px 30px rgba(0,0,0,.08);

    animation: float 5s ease-in-out infinite;
}


.code-one {
    left: 48%;

    top: 25%;
}


.code-two {
    left: 72%;

    top: 70%;

    animation-delay: 1s;
}


.code-three {
    left: 55%;

    top: 78%;

    animation-delay: 2s;
}


@keyframes float {

    0%,100% {
        transform: translateY(0);
    }

    50% {
        transform: translateY(-15px);
    }

}


/* =========================================
   SECTIONS
========================================= */

.section {
    padding: 130px 7%;

    border-top: 1px solid var(--border);

    background: var(--bg);
}


.section-number {
    direction: ltr;

    font-family: Arial;

    color: #9ca3af;

    font-size: 10px;
}


.section-title {
    margin: 20px 0 55px;
}


.section-title p {
    color: var(--green-dark);

    font-family: Arial;

    font-size: 10px;

    letter-spacing: 2px;
}


.section-title h2 {
    font-size: 50px;

    margin-top: 10px;

    color: #111827;
}


/* =========================================
   ABOUT
========================================= */

.about-content {
    display: grid;

    grid-template-columns: 1fr 1fr;

    gap: 100px;
}


.about-content h3 {
    font-size: 38px;

    line-height: 1.4;

    color: #111827;
}


.about-content h3 span {
    color: var(--green-dark);
}


.about-content p {
    color: var(--muted);

    font-size: 14px;

    line-height: 2.2;

    margin-bottom: 20px;
}


/* =========================================
   SERVICES
========================================= */

.services-grid {
    display: grid;

    grid-template-columns: repeat(4,1fr);

    gap: 12px;
}


.service {
    min-height: 330px;

    padding: 28px;

    border: 1px solid var(--border);

    background: #ffffff;

    position: relative;

    transition: .3s;

    box-shadow:
        0 5px 25px rgba(0,0,0,.035);
}


.service:hover {
    transform: translateY(-8px);

    border-color:
        rgba(141,204,32,.4);

    box-shadow:
        0 20px 40px rgba(0,0,0,.08);
}


.service-number {
    color: #9ca3af;

    font-family: Arial;

    font-size: 10px;
}


.service-icon {
    color: var(--green-dark);

    font-family: Arial;

    font-size: 30px;

    margin: 40px 0 15px;
}


.service h3 {
    font-size: 18px;

    color: #111827;
}


.service p {
    color: var(--muted);

    font-size: 11px;

    line-height: 2;

    margin-top: 10px;
}


/* =========================================
   PROJECTS
========================================= */
/* =========================================
   PROJECTS - MODERN PRODUCT CARDS
========================================= */

.projects {
    display: grid;

    grid-template-columns:
        repeat(3, minmax(0, 1fr));

    gap: 24px;

    align-items: stretch;
}


/* =========================================
   PRODUCT CARD
========================================= */

.project {
    position: relative;

    display: flex;

    flex-direction: column;

    min-width: 0;

    background: #ffffff;

    border: 1px solid #e7e9ed;

    border-radius: 20px;

    overflow: hidden;

    box-shadow:
        0 8px 30px rgba(17, 24, 39, .045);

    transition:
        transform .35s ease,
        box-shadow .35s ease,
        border-color .35s ease;
}


.project:hover {
    transform: translateY(-8px);

    border-color:
        rgba(111, 166, 17, .28);

    box-shadow:
        0 22px 55px rgba(17, 24, 39, .11);
}


/* =========================================
   PRODUCT IMAGE
========================================= */

.project-image {
    position: relative;

    height: 255px;

    overflow: hidden;

    display: flex;

    align-items: center;

    justify-content: center;

    background:
        radial-gradient(
            circle at 50% 40%,
            rgba(141, 204, 32, .16),
            transparent 60%
        ),
        #f3f6f0;
}


.project-image img {
    width: 100%;

    height: 100%;

    object-fit: cover;

    display: block;

    transition:
        transform .6s
        cubic-bezier(.2, .7, .2, 1);
}


.project:hover .project-image img {
    transform: scale(1.055);
}


/* =========================================
   IMAGE OVERLAY
========================================= */

.project-image::after {
    content: "";

    position: absolute;

    inset: 0;

    background:
        linear-gradient(
            to top,
            rgba(0, 0, 0, .12),
            transparent 48%
        );

    pointer-events: none;
}


/* =========================================
   PRODUCT BADGE
========================================= */

.product-badge {
    position: absolute;

    top: 16px;

    right: 16px;

    z-index: 5;

    padding: 7px 12px;

    border-radius: 30px;

    background:
        rgba(255, 255, 255, .92);

    border:
        1px solid
        rgba(255, 255, 255, .75);

    backdrop-filter:
        blur(10px);

    color: #59636e;

    font-family:
        Arial, sans-serif;

    font-size: 8px;

    font-weight: 700;

    letter-spacing: 1px;

    box-shadow:
        0 5px 20px
        rgba(0, 0, 0, .08);
}


/* =========================================
   NO IMAGE
========================================= */

.no-project-image {
    width: 100%;

    height: 100%;

    display: flex;

    align-items: center;

    justify-content: center;

    color:
        var(--green-dark);

    font-family:
        Arial, sans-serif;

    font-size: 13px;

    font-weight: 800;

    letter-spacing: 2px;

    background:
        radial-gradient(
            circle,
            rgba(141, 204, 32, .20),
            transparent 60%
        ),
        #f1f5ed;
}


/* =========================================
   PRODUCT INFO
========================================= */

.project-info {
    display: flex;

    flex-direction: column;

    flex: 1;

    padding: 24px;
}


/* =========================================
   PRODUCT TYPE
========================================= */

.project-info > small {
    display: block;

    direction: ltr;

    font-family:
        Arial, sans-serif;

    color:
        var(--green-dark);

    font-size: 8px;

    font-weight: 700;

    letter-spacing: 1.5px;

    margin-bottom: 10px;
}


/* =========================================
   PRODUCT TITLE
========================================= */

.project-info h3 {
    font-size: 20px;

    font-weight: 800;

    line-height: 1.55;

    color: #111827;

    margin: 0;

    padding-bottom: 14px;

    border-bottom:
        1px solid #edf0f2;

    transition:
        color .3s ease;
}


.project:hover .project-info h3 {
    color:
        var(--green-dark);
}


/* =========================================
   PRODUCT DESCRIPTION
========================================= */

.project-info > p {
    color:
        #6b7280;

    font-size: 11px;

    line-height: 2;

    margin:
        15px 0 4px;

    display:
        -webkit-box;

    -webkit-line-clamp: 5;

    -webkit-box-orient: vertical;

    overflow: hidden;
}






/* =========================================
   PRICES
========================================= */

.product-prices {
    display: grid;

    grid-template-columns:
        1fr 1fr;

    gap: 10px;

    margin-top: 20px;
}


.price-box {
    position: relative;

    padding:
        14px 13px;

    background:
        #fafbfc;

    border:
        1px solid #e8ebee;

    border-radius:
        12px;

    display:
        flex;

    flex-direction:
        column;

    gap: 5px;

    transition:
        background .3s ease,
        border-color .3s ease,
        transform .3s ease;
}


.price-box:hover {
    background:
        #ffffff;

    border-color:
        rgba(141, 204, 32, .45);

    transform:
        translateY(-2px);
}


.price-box > span {
    color:
        #8b929c;

    font-size:
        9px;

    font-weight:
        500;
}


.price-box strong {
    display:
        flex;

    align-items:
        baseline;

    gap: 4px;

    color:
        #5f9210;

    font-family:
        Arial, sans-serif;

    font-size:
        19px;

    font-weight:
        800;
}


.price-box strong small {
    color:
        #8b929c;

    font-size:
        8px;

    font-weight:
        500;
}


/* =========================================
   PURCHASE BUTTONS
========================================= */

.purchase-buttons {
    display:
        grid;

    grid-template-columns:
        1fr 1fr;

    gap:
        9px;

    margin-top:
        18px;
}


.purchase-button {
    min-height:
        46px;

    padding:
        0 12px;

    display:
        flex;

    align-items:
        center;

    justify-content:
        center;

    gap:
        7px;

    border-radius:
        11px;

    font-size:
        10px;

    font-weight:
        800;

    text-decoration:
        none;

    transition:
        transform .3s ease,
        box-shadow .3s ease,
        background .3s ease;
}


.purchase-button b {
    font-size:
        14px;

    line-height:
        1;

    transition:
        transform .3s ease;
}


.purchase-button:hover {
    transform:
        translateY(-3px);
}


.purchase-button:hover b {
    transform:
        translateX(-3px);
}


/* =========================================
   MONTHLY BUTTON
========================================= */

.purchase-button.monthly {
    color:
        #496b0c;

    background:
        rgba(141, 204, 32, .10);

    border:
        1px solid
        rgba(141, 204, 32, .28);
}


.purchase-button.monthly:hover {
    background:
        var(--green);

    color:
        #17200a;

    box-shadow:
        0 10px 25px
        rgba(141, 204, 32, .20);
}


/* =========================================
   LIFETIME BUTTON
========================================= */

.purchase-button.lifetime {
    color:
        #ffffff;

    background:
        #111827;

    border:
        1px solid #111827;

    box-shadow:
        0 7px 18px
        rgba(17, 24, 39, .10);
}


.purchase-button.lifetime:hover {
    background:
        #1f2937;

    box-shadow:
        0 12px 25px
        rgba(17, 24, 39, .16);
}


/* =========================================
   EMPTY PROJECTS
========================================= */

.empty-projects {
    grid-column:
        1 / -1;

    padding:
        70px 30px;

    text-align:
        center;

    background:
        #ffffff;

    border:
        1px solid var(--border);

    border-radius:
        20px;
}


.empty-projects h3 {
    color:
        #111827;

    font-size:
        20px;
}


.empty-projects p {
    margin-top:
        10px;

    color:
        #8b929c;

    font-size:
        12px;
}
.project-info h3 {
    margin-top: 8px;

    font-size: 18px;

    color: #111827;
}


/* =========================================
   STORE
========================================= */

.store-box {
    min-height: 450px;

    border: 1px solid var(--border);

    background:
        radial-gradient(
            circle at 70%,
            rgba(141,204,32,.15),
            transparent 40%
        ),

        #ffffff;

    padding: 70px;

    display: grid;

    grid-template-columns: 1fr 1fr;

    align-items: center;

    box-shadow:
        0 10px 40px rgba(0,0,0,.05);
}


.store-box h3 {
    font-size: 40px;

    color: #111827;
}


.store-box h3 span {
    color: var(--green-dark);
}


.store-box p {
    color: var(--muted);

    max-width: 450px;

    margin: 20px 0 30px;

    font-size: 13px;
}


.store-box a {
    color: var(--green-dark);

    font-weight: bold;
}


.products-3d {
    height: 300px;

    position: relative;

    perspective: 900px;
}


.product {
    position: absolute;

    width: 180px;

    height: 120px;

    background: #ffffff;

    border: 1px solid rgba(141,204,32,.35);

    display: flex;

    align-items: center;

    justify-content: center;

    color: var(--green-dark);

    font-family: Arial;

    font-weight: bold;

    box-shadow:
        0 30px 60px rgba(0,0,0,.12);
}


.product-1 {
    left: 25%;

    top: 30%;

    transform:
        rotateY(-25deg)
        rotateX(15deg)
        rotateZ(-5deg);
}


.product-2 {
    left: 55%;

    top: 15%;

    width: 120px;

    height: 80px;

    transform:
        rotateY(-30deg)
        rotateX(20deg)
        rotateZ(7deg);
}


.product-3 {
    left: 10%;

    top: 55%;

    width: 140px;

    height: 90px;

    transform:
        rotateY(-25deg)
        rotateX(20deg)
        rotateZ(5deg);
}


/* =========================================
   CONTACT
========================================= */

.contact {
    padding: 180px 7%;

    text-align: center;

    border-top: 1px solid var(--border);

    background: #ffffff;
}


.contact > p {
    color: var(--green-dark);

    font-family: Arial;

    letter-spacing: 3px;

    font-size: 10px;
}


.contact h2 {
    font-size: clamp(45px,6vw,80px);

    line-height: 1.2;

    margin: 20px 0 35px;

    color: #111827;
}


.contact h2 span {
    color: var(--green-dark);
}


.contact a {
    display: inline-flex;

    padding: 15px 30px;

    background: var(--green);

    color: #17200a;

    border-radius: 7px;

    font-weight: bold;

    font-size: 12px;

    box-shadow:
        0 10px 25px rgba(141,204,32,.18);

    transition: .3s;
}


.contact a:hover {
    transform: translateY(-3px);

    background: #a7ed2c;
}


/* =========================================
   FOOTER
========================================= */

footer {
    border-top: 1px solid var(--border);

    padding: 30px 7%;

    display: flex;

    justify-content: space-between;

    align-items: center;

    color: #8b929c;

    font-size: 9px;

    background: #ffffff;
}


/* =========================================
   RESPONSIVE
========================================= */

@media(max-width:900px) {

    nav {
        gap: 12px;
    }

    .hero-content {
        width: 70%;
    }

    .services-grid {
        grid-template-columns: repeat(2,1fr);
    }

    .projects {
        grid-template-columns: 1fr;
    }

}


@media(max-width:650px) {

    nav,
    .start-btn {
        display: none;
    }

    .navbar {
        padding: 0 5%;
    }

    .hero {
        padding: 140px 5% 100px;
    }

    .hero-content {
        width: 100%;
    }

    .hero h1 {
        font-size: 42px;
    }

    .floating-code {
        display: none;
    }

    .about-content {
        grid-template-columns: 1fr;

        gap: 35px;
    }

    .services-grid {
        grid-template-columns: 1fr;
    }

    .store-box {
        grid-template-columns: 1fr;

        padding: 35px;
    }

    footer {
        flex-direction: column;

        gap: 12px;
    }

}





/*







*/


```css
/* =========================================
   PROJECT PRODUCT DETAILS
========================================= */

.project-info {
    padding: 22px;
}


/* نوع المنتج */

.project-info > small {
    display: block;

    direction: ltr;

    font-family: Arial;

    color: #8b929c;

    font-size: 9px;

    letter-spacing: 1px;

    margin-bottom: 10px;
}


/* =========================================
   PRODUCT TITLE
========================================= */

.product-title {
    font-size: 21px !important;

    font-weight: 800;

    color: #111827;

    line-height: 1.5;

    margin: 0 !important;

    padding-bottom: 15px;

    border-bottom: 1px solid #eef0f2;
}


/* =========================================
   DESCRIPTION
========================================= */

.product-description {
    margin-top: 15px;

    min-height: 55px;

    padding: 12px 14px;

    background: #f9fafb;

    border: 1px solid #eef0f2;

    border-radius: 6px;
}


.product-description p {
    color: #6b7280;

    font-size: 11px;

    line-height: 1.9;

    margin: 0;
}


/* =========================================
   PRICES
========================================= */

.product-prices {
    display: grid;

    grid-template-columns: 1fr 1fr;

    gap: 8px;

    margin-top: 18px;
}


.price-box {
    border: 1px solid #e5e7eb;

    background: #ffffff;

    padding: 12px;

    border-radius: 6px;

    display: flex;

    flex-direction: column;

    gap: 5px;

    transition: .3s;
}


.price-box:hover {
    border-color: rgba(141,204,32,.45);

    transform: translateY(-2px);
}


.price-box > span {
    color: #8b929c;

    font-size: 9px;
}


.price-box strong {
    color: #6fa611;

   
```
    }

    /* =================================
   أزرار الشراء
================================= */

.purchase-buttons {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 10px;
    margin-top: 18px;
}

.purchase-button {
    min-height: 46px;
    padding: 0 14px;

    display: flex;
    align-items: center;
    justify-content: center;
    gap: 7px;

    border-radius: 11px;

    /* الوضع العادي */
    background: rgba(141, 204, 32, 0.08);
    color: #6fa611;

    border: 1px solid rgba(141, 204, 32, 0.35);

    font-size: 10px;
    font-weight: 800;
    text-decoration: none;

    transition:
        transform .3s ease,
        box-shadow .3s ease,
        background .3s ease,
        color .3s ease,
        border-color .3s ease;
}

/* السهم */
.purchase-button b {
    font-size: 14px;
    line-height: 1;

    transition: transform .3s ease;
}

/* عند تمرير الماوس */
.purchase-button:hover {
    background: #8dcc20;
    color: #17200a;

    border-color: #8dcc20;

    transform: translateY(-3px);

    box-shadow: 0 10px 25px rgba(141, 204, 32, 0.25);
}

.purchase-button:hover b {
    transform: translateX(-3px);
}

/* =================================
   الشهري والدائم بنفس التصميم
================================= */

.purchase-button.monthly,
.purchase-button.lifetime {
    background: rgba(141, 204, 32, 0.08);
    color: #6fa611;
    border-color: rgba(141, 204, 32, 0.35);
}

.purchase-button.monthly:hover,
.purchase-button.lifetime:hover {
    background: #8dcc20;
    color: #17200a;
    border-color: #8dcc20;
}




/* =========================================
   READ MORE BUTTON
========================================= */

.read-more-btn {
    display: inline-block;
    margin-top: 10px;
    padding: 6px 12px;
    border-radius: 8px;
    background: rgba(141, 204, 32, .10);
    color: #6fa611;
    border: 1px solid rgba(141, 204, 32, .30);
    font-size: 10px;
    font-weight: 800;
    cursor: pointer;
    transition: .3s;
}

.read-more-btn:hover {
    background: #8dcc20;
    color: #17200a;
    border-color: #8dcc20;
}

/* Modal */

.modal-overlay {
    display: none;
    position: fixed;
    inset: 0;
    background: rgba(0, 0, 0, .6);
    z-index: 9999;
    align-items: center;
    justify-content: center;
    padding: 20px;
}

.modal-overlay.show {
    display: flex;
}

.modal-box {
    background: #fff;
    border-radius: 20px;
    max-width: 600px;
    width: 100%;
    max-height: 80vh;
    overflow-y: auto;
    padding: 30px;
    position: relative;
}

.modal-box h3 {
    font-size: 22px;
    color: #111827;
    margin-bottom: 20px;
    padding-bottom: 15px;
    border-bottom: 1px solid #e5e7eb;
}

.modal-box .modal-description {
    color: #4b5563;
    font-size: 14px;
    line-height: 2;
    white-space: pre-line;
}

.modal-close {
    position: absolute;
    top: 15px;
    left: 15px;
    width: 35px;
    height: 35px;
    border-radius: 50%;
    background: #f3f4f6;
    border: none;
    font-size: 18px;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: .3s;
}

.modal-close:hover {
    background: #ef4444;
    color: #fff;
}

@media(max-width: 500px) {
    .modal-box {
        padding: 20px;
    }

    .modal-box h3 {
        font-size: 18px;
    }

    .modal-box .modal-description {
        font-size: 13px;
    }
}
</style>

    </head>

<body>

<!-- =========================
     NAVBAR
========================= -->

<header class="navbar">

    <a href="#home" class="logo">
        ALAA<span>.</span>
    </a>

    <nav>

        <a href="#about">
            من أنا
        </a>

        <a href="#services">
            خدماتي
        </a>

        <a href="#projects">
            أعمالي
        </a>

        <a href="#store">
            المتجر
        </a>

        <a href="#contact">
            تواصل
        </a>



@auth
     <a href="/user_dashpord">
             حسابي
    </a>

    @endauth



        @guest
       <a href="/login_user">
        تسجيل الدخول
    </a>
    @endguest




    </nav>

    <a href="#contact" class="start-btn">
        ابدأ مشروعك
    </a>

</header>


<!-- =========================
     HERO
========================= -->

<section class="hero" id="home">

    <canvas id="threeCanvas"></canvas>


    <div class="hero-overlay"></div>


    <div class="hero-content">

        <div class="availability">

            <span></span>

            متاح لمشاريع جديدة

        </div>


        <p class="label">
            DIGITAL SOLUTIONS
        </p>


        <h1>

            أصنع لك

            <span>
                حضورًا رقميًا
            </span>

            مختلفًا.

        </h1>


        <p class="description">

            أطور مواقع إلكترونية، أنظمة أعمال،
            متاجر ومنتجات رقمية مصممة خصيصًا
            لتناسب فكرتك واحتياجاتك.

        </p>


        <div class="buttons">

            <a href="#services" class="primary">
                خدماتي
                <b>←</b>
            </a>

            <a href="#projects" class="secondary">
                أعمالي
            </a>

        </div>


        <div class="technologies">

            <span>PHP</span>
            <span>Laravel</span>
            <span>Python</span>
            <span>SQL</span>
            <span>PostgreSQL</span>

        </div>

    </div>


    <!-- نص يظهر فوق الـ3D -->

    <div class="floating-code code-one">
        &lt;Laravel /&gt;
    </div>

    <div class="floating-code code-two">
        SELECT * FROM projects
    </div>

    <div class="floating-code code-three">
        Python()
    </div>


</section>


<!-- =========================
     ABOUT
========================= -->

<section class="section" id="about">

    <span class="section-number">
        01
    </span>

    <div class="section-title">

        <p>
            ABOUT ME
        </p>

        <h2>
            من أنا؟
        </h2>

    </div>


    <div class="about-content">

        <div>

            <h3>
                أنا علاء،
                <span>
                    مطور حلول رقمية.
                </span>
            </h3>

        </div>


        <div>

            <p>

                أعمل على تطوير المواقع والأنظمة
                والمنتجات الرقمية باستخدام مجموعة
                من التقنيات الحديثة.

            </p>

            <p>

                هدفي ليس كتابة الكود فقط،
                بل بناء حلول عملية تساعد أصحاب
                المشاريع والأعمال.

            </p>

        </div>

    </div>

</section>


<!-- =========================
     SERVICES
========================= -->

<section class="section services" id="services">

    <span class="section-number">
        02
    </span>

    <div class="section-title">

        <p>
            SERVICES
        </p>

        <h2>
            خدماتي
        </h2>

    </div>


    <div class="services-grid">


        <article class="service">

            <span class="service-number">
                01
            </span>

            <div class="service-icon">
                &lt;/&gt;
            </div>

            <h3>
                المواقع الإلكترونية
            </h3>

            <p>

                تصميم وتطوير مواقع حديثة
                ومتجاوبة مع جميع الأجهزة.

            </p>

        </article>


        <article class="service">

            <span class="service-number">
                02
            </span>

            <div class="service-icon">
                ◈
            </div>

            <h3>
                الأنظمة البرمجية
            </h3>

            <p>

                أنظمة مخصصة لإدارة العملاء
                والطلبات والعمليات.

            </p>

        </article>


        <article class="service">

            <span class="service-number">
                03
            </span>

            <div class="service-icon">
                🛒
            </div>

            <h3>
                المتاجر الإلكترونية
            </h3>

            <p>

                متاجر إلكترونية لإدارة المنتجات
                والعملاء والطلبات.

            </p>

        </article>


        <article class="service">

            <span class="service-number">
                04
            </span>

            <div class="service-icon">
                ◌
            </div>

            <h3>
                حلول البيانات
            </h3>

            <p>

                تحليل وتنظيم البيانات
                وإنشاء التقارير ولوحات المعلومات.

            </p>

        </article>


    </div>

</section>


<!-- =========================
     PROJECTS
========================= -->
<section class="section" id="projects">

```
<span class="section-number">
    03
</span>

<div class="section-title">

    <p>
        MY WORK
    </p>

    <h2>
        أعمالي
    </h2>

</div>


<div class="projects">

    @forelse($products as $product)

        @if($product->status === 'متاح للبيع')

            <article class="project">

                <!-- صورة المنتج -->
                <div class="project-image">

                    @if($product->image)

                        <img
                            src="{{ asset('storage/' . $product->image) }}"
                            alt="{{ $product->name }}"
                        >

                    @else

                        <div class="no-project-image">
                            DIGITAL PRODUCT
                        </div>

                    @endif

                </div>


                <!-- معلومات المنتج -->
                <div class="project-info">

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

    <button
        type="button"
        class="read-more-btn"
        data-product-name="{{ $product->name }}"
        data-product-description="{{ $product->description }}"
        onclick="openProductModal(this)"
    >
        📖 عرض المزيد
    </button>

@endif


                    <!-- الأسعار -->
                    <div class="product-prices">

                        <div class="price-box">

                            <span>
                                اشتراك شهري
                            </span>

                            <strong>
                                {{ $product->price_monthly }}
                                <small>ريال</small>
                            </strong>

                        </div>


                        <div class="price-box">

                            <span>
                                شراء دائم
                            </span>

                            <strong>
                                {{ $product->price_lifetime }}
                                <small>ريال</small>
                            </strong>

                        </div>

                    </div>


                    <!-- أزرار الشراء -->
                    <div class="purchase-buttons">

                        @auth

                            <a
                                href="{{ url('/payment_product/' . $product->id . '?type=monthly') }}"
                                class="purchase-button monthly"
                            >
                                شراء شهري
                                <b>←</b>
                            </a>

                            <a
                                href="{{ url('/payment_product/' . $product->id . '?type=lifetime') }}"
                                class="purchase-button lifetime"
                            >
                                شراء دائم
                                <b>←</b>
                            </a>

                        @else

                            <a
                                href="{{ url('/login_user') }}"
                                class="purchase-button monthly"
                            >
                                🔒 تسجيل الدخول للإشتراك
                                <b>←</b>
                            </a>

                            <a
                                href="{{ url('/login_user') }}"
                                class="purchase-button lifetime"
                            >
                                🔒 تسجيل الدخول للشراء
                                <b>←</b>
                            </a>

                        @endauth

                    </div>

                </div>

            </article>

        @endif

    @empty

        <div class="empty-projects">

            <h3>
                لا توجد أعمال حاليًا
            </h3>

            <p>
                سيتم إضافة الأعمال قريبًا.
            </p>

        </div>

    @endforelse

</div>

</div>

            <!-- =========================
                 معلومات العمل
            ========================= -->

            <div class="project-info">

                <small>
                    DIGITAL PRODUCT
                </small>


                <!-- العنوان -->

                <!-- الوصف -->

               


     

<section class="section store" id="store">

    <span class="section-number">
        04
    </span>


    <div class="section-title">

        <p>
            DIGITAL STORE
        </p>

        <h2>
            المتجر
        </h2>

    </div>


    <div class="store-box">


        <div>

            <h3>
                منتجات رقمية
                <span>
                    جاهزة لك.
                </span>
            </h3>


            <p>
                أنظمة وقوالب وملفات رقمية
                جاهزة للاستخدام والتخصيص.
            </p>

        </div>


    </div> <br><br>


    <!-- =========================
         PRODUCTS
    ========================= -->
<!-- =========================
     PROJECTS
========================= -->



<!-- =========================
     CONTACT
========================= -->

<section class="contact" id="contact">

    <p>
        LET'S BUILD SOMETHING
    </p>

    <h2>

        لديك فكرة؟

        <span>
            لنبنها معًا.
        </span>

    </h2>
<a href="https://wa.me/966596643988" target="_blank">
    تواصل معي عبر واتساب
</a>

    </a>

</section>


<footer>

    <div class="logo">
        ALAA<span>.</span>
    </div>

    <p>
        Digital Solutions & Web Development
    </p>

    <p>
        © 2026 Alaa Khalil
    </p>

</footer>


<!-- Three.js -->

<script type="module" src="script.js">


import * as THREE from
"https://cdn.jsdelivr.net/npm/three@0.160.0/build/three.module.js";


/*
====================================================
SCENE
====================================================
*/

const canvas =
document.getElementById("threeCanvas");


const scene =
new THREE.Scene();


scene.background =
new THREE.Color(0x050608);


/*
====================================================
CAMERA
====================================================
*/

const camera =
new THREE.PerspectiveCamera(

    45,

    window.innerWidth /
    window.innerHeight,

    0.1,

    1000

);


camera.position.set(
    0,
    1,
    8
);


/*
====================================================
RENDERER
====================================================
*/

const renderer =
new THREE.WebGLRenderer({

    canvas: canvas,

    antialias: true,

    alpha: true

});


renderer.setPixelRatio(
    Math.min(
        window.devicePixelRatio,
        2
    )
);


renderer.setSize(
    window.innerWidth,
    window.innerHeight
);


/*
====================================================
LIGHTS
====================================================
*/

const ambientLight =
new THREE.AmbientLight(
    0xffffff,
    1.5
);


scene.add(
    ambientLight
);


const greenLight =
new THREE.PointLight(
    0xb7ff32,
    25,
    20
);


greenLight.position.set(
    -3,
    3,
    4
);


scene.add(
    greenLight
);


const blueLight =
new THREE.PointLight(
    0x355cff,
    8,
    15
);


blueLight.position.set(
    4,
    -2,
    2
);


scene.add(
    blueLight
);


/*
====================================================
LAPTOP GROUP
====================================================
*/

const laptop =
new THREE.Group();


scene.add(
    laptop
);


/*
====================================================
MATERIALS
====================================================
*/

const laptopMaterial =
new THREE.MeshStandardMaterial({

    color: 0x171a20,

    metalness: 0.85,

    roughness: 0.25

});


const blackMaterial =
new THREE.MeshStandardMaterial({

    color: 0x07090c,

    metalness: 0.5,

    roughness: 0.3

});


const greenMaterial =
new THREE.MeshStandardMaterial({

    color: 0xb7ff32,

    emissive: 0xb7ff32,

    emissiveIntensity: 2

});


/*
====================================================
LAPTOP BASE
====================================================
*/

const baseGeometry =
new THREE.BoxGeometry(
    4.8,
    0.18,
    3
);


const base =
new THREE.Mesh(
    baseGeometry,
    laptopMaterial
);


base.position.y =
-1.65;


laptop.add(
    base
);


/*
====================================================
KEYBOARD AREA
====================================================
*/

const keyboardGeometry =
new THREE.BoxGeometry(
    3.9,
    0.05,
    1.8
);


const keyboard =
new THREE.Mesh(
    keyboardGeometry,
    blackMaterial
);


keyboard.position.set(
    0,
    -1.52,
    0.1
);


laptop.add(
    keyboard
);


/*
====================================================
KEYS
====================================================
*/

for (
    let row = 0;
    row < 5;
    row++
) {

    for (
        let col = 0;
        col < 12;
        col++
    ) {

        const keyGeometry =
        new THREE.BoxGeometry(
            0.22,
            0.025,
            0.18
        );


        const key =
        new THREE.Mesh(
            keyGeometry,
            laptopMaterial
        );


        key.position.set(

            -1.35 +
            col * 0.25,

            -1.47,

            -0.55 +
            row * 0.27

        );


        laptop.add(
            key
        );

    }

}


/*
====================================================
SCREEN FRAME
====================================================
*/

const screenFrameGeometry =
new THREE.BoxGeometry(
    4.7,
    3,
    0.15
);


const screenFrame =
new THREE.Mesh(
    screenFrameGeometry,
    laptopMaterial
);


screenFrame.position.set(
    0,
    0.15,
    -1.25
);


screenFrame.rotation.x =
-0.08;


laptop.add(
    screenFrame
);


/*
====================================================
SCREEN
====================================================
*/

const screenGeometry =
new THREE.PlaneGeometry(
    4.25,
    2.55
);


const screenMaterial =
new THREE.MeshBasicMaterial({

    color: 0x07100a

});


const screen =
new THREE.Mesh(
    screenGeometry,
    screenMaterial
);


screen.position.set(
    0,
    0.15,
    -1.35
);


screen.rotation.x =
-0.08;


laptop.add(
    screen
);


/*
====================================================
SCREEN GLOW
====================================================
*/

const glowGeometry =
new THREE.PlaneGeometry(
    4.35,
    2.65
);


const glowMaterial =
new THREE.MeshBasicMaterial({

    color: 0xb7ff32,

    transparent: true,

    opacity: 0.04

});


const glow =
new THREE.Mesh(
    glowGeometry,
    glowMaterial
);


glow.position.set(
    0,
    0.15,
    -1.36
);


glow.rotation.x =
-0.08;


laptop.add(
    glow
);


/*
====================================================
CODE LINES
====================================================
*/

for (
    let i = 0;
    i < 9;
    i++
) {

    const width =
    1.5 +
    Math.random() * 1.7;


    const lineGeometry =
    new THREE.BoxGeometry(
        width,
        0.035,
        0.01
    );


    const lineMaterial =
    new THREE.MeshBasicMaterial({

        color:

            i === 0 ||
            i === 5

            ?

            0xb7ff32

            :

            0x59616d

    });


    const line =
    new THREE.Mesh(
        lineGeometry,
        lineMaterial
    );


    line.position.set(

        -1.65,

        1.05 -
        i * 0.25,

        -1.43

    );


    laptop.add(
        line
    );

}


/*
====================================================
FLOATING CODE OBJECTS
====================================================
*/

const floatingObjects =
new THREE.Group();


scene.add(
    floatingObjects
);


function createFloatingCube(
    x,
    y,
    z,
    size
) {

    const geometry =
    new THREE.BoxGeometry(
        size,
        size,
        size
    );


    const material =
    new THREE.MeshStandardMaterial({

        color: 0xb7ff32,

        emissive: 0x557f18,

        emissiveIntensity: 0.7,

        transparent: true,

        opacity: 0.7

    });


    const cube =
    new THREE.Mesh(
        geometry,
        material
    );


    cube.position.set(
        x,
        y,
        z
    );


    floatingObjects.add(
        cube
    );

}


createFloatingCube(
    3,
    2,
    0,
    .25
);


createFloatingCube(
    3.5,
    -1,
    0,
    .15
);


createFloatingCube(
    -3,
    1,
    0,
    .18
);


/*
====================================================
MOUSE
====================================================
*/

let mouseX = 0;

let mouseY = 0;


window.addEventListener(
    "mousemove",
    (event) => {

        mouseX =
        (event.clientX /
        window.innerWidth)
        * 2 - 1;


        mouseY =
        (event.clientY /
        window.innerHeight)
        * 2 - 1;

    }
);


/*
====================================================
ANIMATION
====================================================
*/

const clock =
new THREE.Clock();


function animate() {

    requestAnimationFrame(
        animate
    );


    const time =
    clock.getElapsedTime();


    /*
    Laptop floating
    */

    laptop.position.y =
    Math.sin(time * 1.2)
    * 0.08;


    /*
    Laptop mouse interaction
    */

    laptop.rotation.y +=
    (
        mouseX * 0.15 -
        laptop.rotation.y
    ) * 0.025;


    laptop.rotation.x +=
    (
        -mouseY * 0.08 -
        laptop.rotation.x
    ) * 0.025;


    /*
    Floating cubes
    */

    floatingObjects.children
    .forEach(
        (object, index) => {

            object.rotation.x +=
            0.01;

            object.rotation.y +=
            0.015;

            object.position.y +=
            Math.sin(
                time +
                index
            ) * 0.002;

        }
    );


    renderer.render(
        scene,
        camera
    );

}


animate();


/*
====================================================
RESIZE
====================================================
*/

window.addEventListener(
    "resize",
    () => {

        camera.aspect =
        window.innerWidth /
        window.innerHeight;


        camera.updateProjectionMatrix();


        renderer.setSize(
            window.innerWidth,
            window.innerHeight
        );

    }
);

</script>

<!-- =========================================
     PRODUCT MODAL
========================================= -->

<div class="modal-overlay" id="productModal" onclick="closeProductModal(event)">

    <div class="modal-box" onclick="event.stopPropagation()">

        <button class="modal-close" onclick="closeProductModal()">
            ✕
        </button>

        <h3 id="modalProductName"></h3>

        <div class="modal-description" id="modalProductDescription"></div>

    </div>

</div>


<script>

function openProductModal(button) {

    const name = button.getAttribute('data-product-name');

    const description = button.getAttribute('data-product-description');


    document.getElementById('modalProductName').textContent = name;

    document.getElementById('modalProductDescription').textContent = description;


    document.getElementById('productModal').classList.add('show');

    document.body.style.overflow = 'hidden';

}


function closeProductModal(event) {

    if (event && event.target.id !== 'productModal') {

        return;

    }

    document.getElementById('productModal').classList.remove('show');

    document.body.style.overflow = '';

}

</script>
</body>

</html>