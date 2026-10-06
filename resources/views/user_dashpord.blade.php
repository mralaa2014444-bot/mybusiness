<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>لوحة المستخدم | ALAA</title>

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
    --card-soft: #f9fafb;
    --border: #e5e7eb;

    --text: #111827;
    --muted: #6b7280;

    --green: #8dcc20;
    --green-dark: #6fa611;

    --danger: #ef4444;
    --warning: #f59e0b;

    --shadow:
        0 15px 45px rgba(0,0,0,.06);

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

button {
    font-family: inherit;
}

.dashboard {
    min-height: 100vh;
}

.sidebar {

    position: fixed;

    top: 0;
    right: 0;

    width: 255px;
    height: 100vh;

    background: #ffffff;

    border-left: 1px solid var(--border);

    padding: 28px 18px;

    display: flex;
    flex-direction: column;

    z-index: 1000;

    transition:
        transform .3s ease,
        box-shadow .3s ease;

    box-shadow:
        -5px 0 30px rgba(0,0,0,.025);

}

.sidebar.closed {
    transform: translateX(100%);
}

.logo {

    font-family: Arial, sans-serif;

    font-size: 25px;

    font-weight: 900;

    letter-spacing: -1px;

    padding: 0 12px 25px;

    direction: ltr;

    text-align: right;

    border-bottom: 1px solid var(--border);

}

.logo span {
    color: var(--green-dark);
}

.user-profile {

    padding: 23px 10px;

    display: flex;
    align-items: center;

    gap: 12px;

    border-bottom: 1px solid var(--border);

    margin-bottom: 20px;

}

.avatar {

    width: 45px;
    height: 45px;

    min-width: 45px;

    border-radius: 12px;

    background: linear-gradient(135deg, var(--green), #b5ec45);

    display: flex;

    justify-content: center;
    align-items: center;

    color: #17200a;

    font-size: 17px;

    font-weight: 800;

}

.user-info {
    min-width: 0;
}

.user-info h4 {

    font-size: 12px;

    color: var(--text);

    white-space: nowrap;

    overflow: hidden;

    text-overflow: ellipsis;

}

.user-info p {

    font-size: 8px;

    color: var(--muted);

    margin-top: 2px;

    direction: ltr;

    text-align: right;

    white-space: nowrap;

    overflow: hidden;

    text-overflow: ellipsis;

}

.menu-title {

    color: #9ca3af;

    font-size: 9px;

    padding: 0 12px;

    margin-bottom: 8px;

}

.menu {

    display: flex;

    flex-direction: column;

    gap: 5px;

}

.menu a {

    min-height: 45px;

    display: flex;

    align-items: center;

    gap: 12px;

    padding: 0 13px;

    border-radius: 9px;

    color: #6b7280;

    font-size: 11px;

    transition: .25s;

}

.menu a .icon {

    width: 25px;

    text-align: center;

    font-size: 16px;

}

.menu a:hover {

    background: #f4f8ed;

    color: var(--green-dark);

    transform: translateX(-3px);

}

.menu a.active {

    background: rgba(141,204,32,.13);

    color: var(--green-dark);

    font-weight: 700;

    border-right: 3px solid var(--green);

}

.sidebar-bottom {

    margin-top: auto;

    padding-top: 15px;

    border-top: 1px solid var(--border);

}

.logout {

    width: 100%;

    min-height: 45px;

    border: none;

    background: transparent;

    color: var(--danger);

    display: flex;

    align-items: center;

    gap: 12px;

    padding: 0 13px;

    border-radius: 9px;

    cursor: pointer;

    font-size: 11px;

    transition: .25s;

}

.logout:hover {
    background: #fff1f2;
}

.main {

    margin-right: 255px;

    width: calc(100% - 255px);

    min-height: 100vh;

    transition:
        margin-right .3s ease,
        width .3s ease;

}

.main.expanded {

    margin-right: 0;

    width: 100%;

}

.topbar {

    height: 75px;

    background: rgba(255,255,255,.88);

    backdrop-filter: blur(15px);

    border-bottom: 1px solid var(--border);

    display: flex;

    align-items: center;

    justify-content: space-between;

    padding: 0 45px;

    position: sticky;

    top: 0;

    z-index: 100;

}

.topbar-left {

    display: flex;

    align-items: center;

    gap: 12px;

}

.sidebar-toggle {

    width: 40px;
    height: 40px;

    border: 1px solid var(--border);

    background: #ffffff;

    border-radius: 9px;

    display: flex;

    align-items: center;
    justify-content: center;

    cursor: pointer;

    font-size: 18px;

    transition: .25s;

}

.sidebar-toggle:hover {

    border-color: var(--green);

    color: var(--green-dark);

    transform: translateY(-2px);

}

.page-title h2 {
    font-size: 17px;
}

.page-title p {

    color: var(--muted);

    font-size: 9px;

    margin-top: 3px;

}

.topbar-actions {

    display: flex;

    align-items: center;

    gap: 10px;

}

.top-button {

    width: 38px;
    height: 38px;

    border: 1px solid var(--border);

    background: #ffffff;

    border-radius: 9px;

    display: flex;

    align-items: center;
    justify-content: center;

    font-size: 15px;

    transition: .25s;

}

.top-button:hover {

    border-color: var(--green);

    transform: translateY(-2px);

}

.content {

    max-width: 1200px;

    margin: auto;

    padding: 40px 45px 60px;

}

.welcome {

    position: relative;

    overflow: hidden;

    min-height: 170px;

    border: 1px solid var(--border);

    border-radius: 18px;

    padding: 30px 35px;

    background:

        radial-gradient(
            circle at 80% 20%,
            rgba(141,204,32,.17),
            transparent 35%
        ),

        #ffffff;

    box-shadow: var(--shadow);

    margin-bottom: 30px;

    display: flex;

    align-items: center;

    justify-content: space-between;

}

.welcome-content {

    position: relative;

    z-index: 2;

}

.welcome small {

    color: var(--green-dark);

    font-family: Arial, sans-serif;

    font-size: 9px;

    letter-spacing: 2px;

    direction: ltr;

    display: block;

    margin-bottom: 8px;

}

.welcome h1 {

    font-size: 25px;

    line-height: 1.5;

}

.welcome h1 span {
    color: var(--green-dark);
}

.welcome p {

    color: var(--muted);

    font-size: 10px;

    margin-top: 7px;

}

.welcome-decoration {

    width: 145px;

    height: 145px;

    border-radius: 50%;

    border: 1px solid rgba(141,204,32,.35);

    position: absolute;

    left: 55px;

    top: 10px;

}

.welcome-decoration::before {

    content: "";

    position: absolute;

    width: 85px;

    height: 85px;

    border-radius: 50%;

    border: 1px solid rgba(141,204,32,.35);

    top: 29px;

    left: 29px;

}

.section-heading {

    display: flex;

    align-items: center;

    justify-content: space-between;

    margin-bottom: 15px;

}

.section-heading h3 {
    font-size: 16px;
}

.stats {

    display: grid;

    grid-template-columns: repeat(3, 1fr);

    gap: 15px;

    margin-bottom: 30px;

}

.stat {

    background: #ffffff;

    border: 1px solid var(--border);

    border-radius: 13px;

    padding: 20px;

    min-height: 120px;

    box-shadow: 0 5px 20px rgba(0,0,0,.03);

    transition: .25s;

}

.stat:hover {

    transform: translateY(-4px);

    border-color: rgba(141,204,32,.45);

    box-shadow: 0 15px 35px rgba(0,0,0,.07);

}

.stat-top {

    display: flex;

    align-items: center;

    justify-content: space-between;

}

.stat-icon {

    width: 40px;
    height: 40px;

    border-radius: 10px;

    background: #f2f8e9;

    color: var(--green-dark);

    display: flex;

    align-items: center;
    justify-content: center;

    font-size: 17px;

}

.stat-number {

    font-family: Arial, sans-serif;

    font-size: 25px;

    font-weight: 800;

}

.stat p {

    color: var(--muted);

    font-size: 9px;

    margin-top: 12px;

}

.actions {

    display: grid;

    grid-template-columns: repeat(3, 1fr);

    gap: 15px;

    margin-bottom: 30px;

}

.action {

    background: #ffffff;

    border: 1px solid var(--border);

    border-radius: 13px;

    padding: 22px;

    min-height: 145px;

    transition: .25s;

}

.action:hover {

    transform: translateY(-4px);

    border-color: rgba(141,204,32,.45);

    box-shadow: 0 15px 35px rgba(0,0,0,.06);

}

.action-icon {

    width: 45px;
    height: 45px;

    border-radius: 11px;

    background: #f2f8e9;

    color: var(--green-dark);

    display: flex;

    align-items: center;
    justify-content: center;

    font-size: 20px;

    margin-bottom: 14px;

}

.action h4 {
    font-size: 11px;
}

.action p {

    color: var(--muted);

    font-size: 8px;

    line-height: 1.9;

    margin-top: 6px;

}

.card {

    background: #ffffff;

    border: 1px solid var(--border);

    border-radius: 14px;

    box-shadow: 0 5px 25px rgba(0,0,0,.035);

    overflow: hidden;

}

.card-header {

    padding: 19px 22px;

    border-bottom: 1px solid var(--border);

    display: flex;

    align-items: center;

    justify-content: space-between;

}

.card-header h3 {
    font-size: 13px;
}

.purchase-section {
    margin-top: 30px;
}

.purchases-grid {

    padding: 22px;

    display: grid;

    grid-template-columns: repeat(2, 1fr);

    gap: 18px;

}

.purchase-card {

    background: var(--card-soft);

    border: 1px solid var(--border);

    border-radius: 14px;

    overflow: hidden;

    transition: .25s;

}

.purchase-card:hover {

    transform: translateY(-4px);

    border-color: rgba(141,204,32,.55);

    box-shadow: 0 15px 30px rgba(0,0,0,.06);

}

.purchase-card.expired {

    border-color: rgba(239,68,68,.35);

    background: #fff8f8;

}

.purchase-image {

    width: 100%;

    height: 190px;

    background: #eef2f5;

    overflow: hidden;

    position: relative;

}

.purchase-image img {

    width: 100%;
    height: 100%;

    object-fit: cover;

    display: block;

    transition: .3s;

}

.purchase-card:hover .purchase-image img {

    transform: scale(1.04);

}

.no-image {

    width: 100%;
    height: 100%;

    display: flex;

    align-items: center;
    justify-content: center;

    color: #9ca3af;

    font-size: 35px;

}

.purchase-body {
    padding: 18px;
}

.purchase-body h4 {

    font-size: 14px;

    margin-bottom: 7px;

}

.purchase-description {

    color: var(--muted);

    font-size: 9px;

    line-height: 1.9;

    min-height: 38px;

    margin-bottom: 15px;

}

.purchase-info {

    display: grid;

    grid-template-columns: repeat(2, 1fr);

    gap: 8px;

}

.purchase-info-item {

    background: #ffffff;

    border: 1px solid var(--border);

    border-radius: 8px;

    padding: 10px;

}

.purchase-info-item span {

    display: block;

    color: var(--muted);

    font-size: 7px;

    margin-bottom: 4px;

}

.purchase-info-item strong {

    display: block;

    font-size: 9px;

}

.license-badge {

    display: inline-flex;

    align-items: center;

    justify-content: center;

    padding: 5px 9px;

    border-radius: 20px;

    font-size: 8px;

    font-weight: 700;

}

.license-monthly {

    background: #fff7e6;

    color: #b7791f;

}

.license-lifetime {

    background: #f2f8e9;

    color: var(--green-dark);

}

.status-badge {

    display: inline-flex;

    align-items: center;

    gap: 4px;

    padding: 5px 9px;

    border-radius: 20px;

    font-size: 8px;

    font-weight: 700;

}

.status-active {
    color: var(--green-dark);
}

.status-badge.active {

    background: #f2f8e9;

    color: var(--green-dark);

}

.status-badge.inactive {

    background: #fff1f2;

    color: var(--danger);

}

.action-buttons {

    display: flex;

    flex-wrap: wrap;

    gap: 8px;

    margin-top: 12px;

}

.download-button {

    display: inline-flex;

    align-items: center;

    justify-content: center;

    gap: 5px;

    padding: 8px 12px;

    border-radius: 8px;

    background: var(--green);

    color: #17200a;

    font-size: 8px;

    font-weight: 700;

    transition: .25s;

    white-space: nowrap;

    flex: 1;

}

.download-button:hover {

    background: var(--green-dark);

    color: #ffffff;

    transform: translateY(-2px);

    box-shadow: 0 7px 18px rgba(111,166,17,.18);

}

.renew-button {

    display: inline-flex;

    align-items: center;

    justify-content: center;

    gap: 5px;

    padding: 8px 12px;

    border-radius: 8px;

    background: #f59e0b;

    color: #ffffff;

    font-size: 8px;

    font-weight: 700;

    transition: .25s;

    white-space: nowrap;

    flex: 1;

}

.renew-button:hover {

    background: #d97706;

    transform: translateY(-2px);

    box-shadow: 0 7px 18px rgba(245,158,11,.20);

}

.empty-state {

    padding: 50px 25px;

    text-align: center;

}

.empty-icon {

    width: 70px;
    height: 70px;

    margin: 0 auto 15px;

    border-radius: 18px;

    background: #f2f8e9;

    color: var(--green-dark);

    display: flex;

    align-items: center;
    justify-content: center;

    font-size: 30px;

}

.empty-state h4 {

    font-size: 13px;

    margin-bottom: 6px;

}

.empty-state p {

    color: var(--muted);

    font-size: 9px;

    margin-bottom: 18px;

}

.store-button {

    display: inline-flex;

    align-items: center;
    justify-content: center;

    background: var(--green);

    color: #17200a;

    padding: 10px 18px;

    border-radius: 8px;

    font-size: 9px;

    font-weight: 700;

    transition: .25s;

}

.store-button:hover {

    background: var(--green-dark);

    color: #ffffff;

    transform: translateY(-2px);

}

.license-section {
    margin-top: 30px;
}

.license-list {

    padding: 22px;

    display: flex;

    flex-direction: column;

    gap: 12px;

}

.license-row {

    background: var(--card-soft);

    border: 1px solid var(--border);

    border-radius: 11px;

    padding: 15px;

    display: grid;

    grid-template-columns: 1.6fr 1fr 1fr 1.2fr;

    gap: 15px;

    align-items: center;

    transition: .25s;

}

.license-row:hover {

    border-color: rgba(141,204,32,.45);

    background: #ffffff;

}

.license-row.expired {

    border-color: rgba(239,68,68,.30);

    background: #fff8f8;

}

.license-product {

    display: flex;

    align-items: center;

    gap: 12px;

    min-width: 0;

}

.license-product-image {

    width: 50px;
    height: 50px;

    min-width: 50px;

    border-radius: 9px;

    overflow: hidden;

    background: #eef2f5;

}

.license-product-image img {

    width: 100%;
    height: 100%;

    object-fit: cover;

}

.license-product-info {
    min-width: 0;
}

.license-product-info h4 {

    font-size: 10px;

    white-space: nowrap;

    overflow: hidden;

    text-overflow: ellipsis;

}

.license-product-info p {

    color: var(--muted);

    font-size: 7px;

    margin-top: 3px;

}

.license-item span {

    display: block;

    color: var(--muted);

    font-size: 7px;

    margin-bottom: 5px;

}

.license-item strong {
    font-size: 9px;
}

.profile-section {
    margin-top: 30px;
}

.profile-box {

    display: grid;

    grid-template-columns: 130px 1fr;

    gap: 25px;

    padding: 25px;

}

.profile-avatar {

    width: 105px;
    height: 105px;

    border-radius: 20px;

    background: linear-gradient(135deg, var(--green), #c3f36d);

    display: flex;

    align-items: center;
    justify-content: center;

    font-size: 37px;

    font-weight: 800;

    color: #17200a;

}

.profile-details {

    display: grid;

    grid-template-columns: repeat(2, 1fr);

    gap: 14px;

}

.detail {

    padding: 15px;

    background: var(--card-soft);

    border: 1px solid var(--border);

    border-radius: 9px;

    min-height: 75px;

}

.detail span {

    display: block;

    color: var(--muted);

    font-size: 8px;

    margin-bottom: 6px;

}

.detail strong {

    font-size: 11px;

    display: block;

    word-break: break-word;

}

.edit-input {

    width: 100%;

    border: 1px solid var(--border);

    background: #ffffff;

    border-radius: 7px;

    padding: 9px 10px;

    font-family: "Cairo", sans-serif;

    font-size: 11px;

    color: var(--text);

    outline: none;

    transition: .25s;

}

.edit-input:focus {

    border-color: var(--green);

    box-shadow: 0 0 0 3px rgba(141,204,32,.10);

}

.email-input {

    direction: ltr;

    text-align: right;

}

.save-button {

    border: none;

    background: var(--green);

    color: #17200a;

    border-radius: 8px;

    padding: 9px 18px;

    font-family: "Cairo", sans-serif;

    font-size: 10px;

    font-weight: 700;

    cursor: pointer;

    transition: .25s;

}

.save-button:hover {

    background: var(--green-dark);

    color: #ffffff;

    transform: translateY(-2px);

}

.overlay {

    display: none;

    position: fixed;

    inset: 0;

    background: rgba(0,0,0,.30);

    z-index: 900;

}

.overlay.show {
    display: block;
}

@media(max-width:1000px) {

    .content {
        padding: 35px 25px 50px;
    }

    .topbar {
        padding: 0 25px;
    }

}

@media(max-width:850px) {

    .sidebar {
        transform: translateX(100%);
    }

    .sidebar.open {
        transform: translateX(0);
    }

    .main {
        margin-right: 0;
        width: 100%;
    }

    .main.expanded {
        margin-right: 0;
        width: 100%;
    }

    .topbar {
        padding: 0 20px;
    }

    .content {
        padding: 25px 20px 50px;
    }

    .license-row {
        grid-template-columns: repeat(2, 1fr);
    }

}

@media(max-width:650px) {

    .stats {
        grid-template-columns: 1fr;
        gap: 12px;
    }

    .actions {
        grid-template-columns: 1fr;
    }

    .stat {
        min-height: 105px;
    }

    .welcome {
        padding: 25px;
        min-height: 150px;
    }

    .welcome h1 {
        font-size: 20px;
    }

    .welcome p {
        font-size: 9px;
        max-width: 250px;
    }

    .welcome-decoration {
        opacity: .45;
        left: -35px;
        top: 5px;
    }

    .purchases-grid {
        grid-template-columns: 1fr;
        padding: 15px;
    }

    .license-row {
        grid-template-columns: 1fr;
        gap: 12px;
    }

    .profile-box {
        grid-template-columns: 1fr;
        gap: 20px;
        padding: 20px;
    }

    .profile-avatar {
        margin: auto;
        width: 90px;
        height: 90px;
        font-size: 32px;
    }

    .profile-details {
        grid-template-columns: 1fr;
        gap: 10px;
    }

}

@media(max-width:450px) {

    .content {
        padding: 20px 14px 40px;
    }

    .topbar {
        padding: 0 14px;
    }

    .page-title h2 {
        font-size: 14px;
    }

    .page-title p {
        display: none;
    }

    .top-button,
    .sidebar-toggle {
        width: 35px;
        height: 35px;
    }

    .welcome {
        border-radius: 14px;
        padding: 22px;
    }

    .welcome h1 {
        font-size: 18px;
    }

    .welcome small {
        font-size: 8px;
    }

    .section-heading h3 {
        font-size: 14px;
    }

    .stat {
        padding: 17px;
    }

    .card-header {
        padding: 17px;
    }

    .profile-box {
        padding: 17px;
    }

    .purchase-image {
        height: 170px;
    }

}

::-webkit-scrollbar {
    width: 7px;
}

::-webkit-scrollbar-track {
    background: #f1f3f5;
}

::-webkit-scrollbar-thumb {
    background: #cfd5cc;
    border-radius: 10px;
}

::-webkit-scrollbar-thumb:hover {
    background: var(--green-dark);
}

</style>

</head>
<body>


<div class="dashboard">


<!-- SIDEBAR -->

<aside class="sidebar" id="sidebar">

    <div class="logo">
        ALAA<span>.</span>
    </div>

    <div class="user-profile">

        <div class="avatar">
            {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
        </div>

        <div class="user-info">

            <h4>{{ auth()->user()->name }}</h4>

            <p>{{ auth()->user()->email }}</p>

        </div>

    </div>

    <div class="menu-title">
        القائمة الرئيسية
    </div>

    <nav class="menu">

        <a href="#home" class="active">
            <span class="icon">🏠</span>
            الرئيسية
        </a>

        <a href="/show_for_User">
            <span class="icon">🛍️</span>
            المتجر
        </a>

        <a href="#purchases">
            <span class="icon">🛒</span>
            مشترياتي
        </a>

        <a href="#licenses">
            <span class="icon">🔑</span>
            تراخيصي
        </a>

        <a href="#profile">
            <span class="icon">👤</span>
            حسابي
        </a>

    </nav>

    <div class="sidebar-bottom">

        <form method="POST" action="/logout_user">

            @csrf

            <button type="submit" class="logout">

                <span>🚪</span>

                تسجيل الخروج

            </button>

        </form>

    </div>

</aside>


<div class="overlay" id="overlay"></div>


<!-- MAIN -->

<main class="main" id="main">


<header class="topbar">

    <div class="topbar-left">

        <button
            type="button"
            class="sidebar-toggle"
            id="sidebarToggle">

            ☰

        </button>

        <div class="page-title">

            <h2>لوحة التحكم</h2>

            <p>أهلاً بك في حسابك</p>

        </div>

    </div>

    <div class="topbar-actions">

        <a href="/" class="top-button" title="الرئيسية">🌐</a>

        <a href="/show_for_User" class="top-button" title="المتجر">🛒</a>

    </div>

</header>


<div class="content" id="home">


<!-- WELCOME -->

<section class="welcome">

    <div class="welcome-content">

        <small>USER DASHBOARD</small>

        <h1>
            أهلاً بك
            <span>{{ auth()->user()->name }}</span>
            👋
        </h1>

        <p>
            من هنا يمكنك إدارة حسابك،
            الوصول إلى مشترياتك وتراخيصك بسهولة.
        </p>

    </div>

    <div class="welcome-decoration"></div>

</section>


<!-- STATS -->

<section id="overview">

    <div class="section-heading">
        <h3>حسابي</h3>
    </div>

    <div class="stats">

        <a href="/show_for_User" class="stat">

            <div class="stat-top">

                <div class="stat-icon">🛍️</div>

                <div class="stat-number">→</div>

            </div>

            <p>تصفح المتجر</p>

        </a>

        <a href="#purchases" class="stat">

            <div class="stat-top">

                <div class="stat-icon">🛒</div>

                <div class="stat-number">{{ $licenses->count() }}</div>

            </div>

            <p>المنتجات المشتراة</p>

        </a>

        <a href="#licenses" class="stat">

            <div class="stat-top">

                <div class="stat-icon">🔑</div>

                <div class="stat-number">{{ $licenses->count() }}</div>

            </div>

            <p>تراخيصي</p>

        </a>

    </div>

</section>


<!-- PURCHASES -->

<section class="card purchase-section" id="purchases">

    <div class="card-header">

        <h3>🛒 مشترياتي</h3>

        <span style="color:#6b7280;font-size:9px;">
            {{ $licenses->count() }} منتج
        </span>

    </div>


    @if($licenses->count() > 0)

        <div class="purchases-grid">

            @foreach($licenses as $license)

                @if($license->product)

                    <div class="purchase-card {{ $license->is_expired ? 'expired' : '' }}">

                        <div class="purchase-body">

                            <h4>{{ $license->product->name }}</h4>

                            <p class="purchase-description">
                                {{ $license->product->description }}
                            </p>

                            <div class="purchase-info">

                                <div class="purchase-info-item">

                                    <span>نوع الترخيص</span>

                                    <strong>

                                        @if($license->type === 'monthly')

                                            <span class="license-badge license-monthly">
                                                شهري
                                            </span>

                                        @else

                                            <span class="license-badge license-lifetime">
                                                دائم
                                            </span>

                                        @endif

                                    </strong>

                                </div>

                                <div class="purchase-info-item">

                                    <span>حالة الترخيص</span>

                                    @if($license->is_active)

                                        <span class="status-badge active">
                                            ● نشط
                                        </span>

                                    @else

                                        <span class="status-badge inactive">
                                            ● منتهي
                                        </span>

                                    @endif

                                </div>

                                <div class="purchase-info-item">

                                    <span>تاريخ البداية</span>

                                    <strong>
                                        {{ $license->start_date }}
                                    </strong>

                                </div>

                                <div class="purchase-info-item">

                                    <span>تاريخ الانتهاء</span>

                                    <strong>

                                        @if($license->end_date)

                                            {{ $license->end_date }}

                                        @else

                                            غير محدد

                                        @endif

                                    </strong>

                                </div>

                            </div>

                            <div class="action-buttons">

                                @if($license->is_active)

                                    <a
                                        href="{{ url('/download/' . $license->product->id) }}"
                                        class="download-button">

                                        ⬇️ تحميل المنتج

                                    </a>

                                @else

                                    @if($license->type === 'monthly')

                                        <a
                                            href="{{ url('/renew-license/' . $license->id) }}"
                                            class="renew-button">

                                            🔄 تجديد الاشتراك

                                        </a>

                                    @endif

                                @endif

                            </div>

                        </div>

                    </div>

                @endif

            @endforeach

        </div>

    @else

        <div class="empty-state">

            <div class="empty-icon">🛒</div>

            <h4>لا توجد مشتريات حتى الآن</h4>

            <p>
                لم تقم بشراء أي منتج رقمي حتى الآن.
                يمكنك تصفح المتجر واختيار المنتج المناسب لك.
            </p>

            <a href="/show_for_User" class="store-button">
                🛍️ تصفح المتجر
            </a>

        </div>

    @endif

</section>


<!-- LICENSES -->

<section class="card license-section" id="licenses">

    <div class="card-header">

        <h3>🔑 تراخيصي</h3>

        <span style="color:#6b7280;font-size:9px;">
            {{ $licenses->count() }} ترخيص
        </span>

    </div>


    @if($licenses->count() > 0)

        <div class="license-list">

            @foreach($licenses as $license)

                @if($license->product)

                    <div class="license-row {{ $license->is_expired ? 'expired' : '' }}">

                        <div class="license-product">

                            <div class="license-product-image">

                                @if($license->product->image)

                                    <img
                                        src="{{ asset('storage/' . $license->product->image) }}"
                                        alt="{{ $license->product->name }}">

                                @else

                                    <div class="no-image">📦</div>

                                @endif

                            </div>

                            <div class="license-product-info">

                                <h4>{{ $license->product->name }}</h4>

                                <p>ترخيص المنتج</p>

                            </div>

                        </div>


                        <div class="license-item">

                            <span>نوع الترخيص</span>

                            <strong>

                                @if($license->type === 'monthly')

                                    <span class="license-badge license-monthly">
                                        شهري
                                    </span>

                                @else

                                    <span class="license-badge license-lifetime">
                                        دائم
                                    </span>

                                @endif

                            </strong>

                        </div>


                        <div class="license-item">

                            <span>مدة الترخيص</span>

                            <strong>

                                {{ $license->start_date }}

                                →

                                @if($license->end_date)

                                    {{ $license->end_date }}

                                @else

                                    دائم

                                @endif

                            </strong>

                        </div>


                        <div class="license-item">

                            <span>حالة الترخيص</span>

                            @if($license->is_active)

                                <span class="status-badge active">
                                    ● نشط
                                </span>

                                <div class="action-buttons">

                                    <a
                                        href="{{ url('/download/' . $license->product->id) }}"
                                        class="download-button">

                                        ⬇️ تحميل

                                    </a>

                                </div>

                            @else

                                <span class="status-badge inactive">
                                    ● منتهي
                                </span>

                                @if($license->type === 'monthly')

                                    <div class="action-buttons">

                                        <a
                                            href="{{ url('/renew-license/' . $license->id) }}"
                                            class="renew-button">

                                            🔄 تجديد

                                        </a>

                                    </div>

                                @endif

                            @endif

                        </div>

                    </div>

                @endif

            @endforeach

        </div>

    @else

        <div class="empty-state">

            <div class="empty-icon">🔑</div>

            <h4>لا توجد تراخيص</h4>

            <p>
                لا توجد تراخيص مرتبطة بحسابك حاليًا.
            </p>

            <a href="/show_for_User" class="store-button">
                🛍️ تصفح المنتجات
            </a>

        </div>

    @endif

</section>


<!-- PROFILE -->

<section class="card profile-section" id="profile">

    <div class="card-header">

        <h3>معلومات الحساب</h3>

        <button
            type="submit"
            form="updateUserForm"
            class="save-button">

            حفظ التعديلات

        </button>

    </div>

    <form
        id="updateUserForm"
        action="/update_one_user/{{ auth()->user()->id }}"
        method="POST">

        @csrf

        <div class="profile-box">

            <div>

                <div class="profile-avatar">

                    {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}

                </div>

            </div>

            <div class="profile-details">

                <div class="detail">

                    <span>الاسم</span>

                    <input
                        type="text"
                        name="name"
                        class="edit-input"
                        value="{{ auth()->user()->name }}"
                        required>

                </div>

                <div class="detail">

                    <span>البريد الإلكتروني</span>

                    <input
                        type="email"
                        name="email"
                        class="edit-input email-input"
                        value="{{ auth()->user()->email }}"
                        required>

                </div>

                <div class="detail">

                    <span>تاريخ إنشاء الحساب</span>

                    <strong>
                        {{ auth()->user()->created_at->format('Y-m-d') }}
                    </strong>

                </div>

                <div class="detail">

                    <span>حالة الحساب</span>

                    <strong class="status-active">
                        نشط ✓
                    </strong>

                </div>

            </div>

        </div>

    </form>

</section>


</div>


</main>


</div>


<script>

const sidebar = document.getElementById("sidebar");
const main = document.getElementById("main");
const overlay = document.getElementById("overlay");
const sidebarToggle = document.getElementById("sidebarToggle");

function toggleSidebar() {

    if (window.innerWidth > 850) {

        sidebar.classList.toggle("closed");
        main.classList.toggle("expanded");

    } else {

        sidebar.classList.toggle("open");
        overlay.classList.toggle("show");

    }

}

sidebarToggle.addEventListener("click", toggleSidebar);

overlay.addEventListener("click", function () {

    sidebar.classList.remove("open");
    overlay.classList.remove("show");

});

document.querySelectorAll(".menu a").forEach(function(link) {

    link.addEventListener("click", function () {

        if (window.innerWidth <= 850) {

            sidebar.classList.remove("open");
            overlay.classList.remove("show");

        }

        document.querySelectorAll(".menu a").forEach(function(item) {

            item.classList.remove("active");

        });

        this.classList.add("active");

    });

});

window.addEventListener("resize", function () {

    if (window.innerWidth > 850) {

        sidebar.classList.remove("open");
        overlay.classList.remove("show");

    }

});

</script>

</body>

</html>