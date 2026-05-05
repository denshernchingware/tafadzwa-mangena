<!doctype html>
<html class="no-js" lang="en">

<head>
    <title>Crafto - The Multipurpose HTML5 Template</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="ThemeZaa">
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta name="description"
        content="Elevate your online presence with Crafto - a modern, versatile, multipurpose Bootstrap 5 responsive HTML5, SCSS template using highly creative 56+ ready demos.">
    <!-- favicon icon -->
    <link rel="shortcut icon" href="images/favicon.png">
    <link rel="apple-touch-icon" href="images/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
    <!-- google fonts preconnect -->
    <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- style sheets and font icons  -->
    <link rel="stylesheet" href="css/vendors.min.css" />
    <link rel="stylesheet" href="css/icon.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/responsive.css" />
    <link rel="stylesheet" href="demos/freelancer/freelancer.css" />


    <style>
        /* ── Section header ─────────────────────────────────────────────── */
        .section-badge {
            display: inline-flex;
            align-items: center;
            flex-shrink: 0;
        }

        .section-badge .badge-text {
            background: var(--base-color);
            color: #fff;
            /* font-family: 'Syne', sans-serif;
      font-weight: 700;
      font-size: 15px; */
            padding: 10px 20px;
            letter-spacing: .02em;
            white-space: nowrap;
        }

        .section-badge .badge-arrow {
            width: 0;
            height: 0;
            border-top: 20px solid transparent;
            border-bottom: 20px solid transparent;
            border-left: 18px solid var(--base-color);
        }

        .section-desc {
            color: #5a6472;
            /* font-size: 15px;
      line-height: 1.75;
      font-weight: 300; */
            max-width: 620px;
            padding-top: 4px;
        }

        /* ── Card wrapper ───────────────────────────────────────────────── */
        .project-card {
            position: relative;
            border-radius: 8px;
            overflow: hidden;
        }

        /* ── Front: image only ──────────────────────────────────────────── */
        .card-front {
            position: relative;
            width: 100%;
            height: 240px;
            overflow: hidden;
            border-radius: 8px 8px 0 0;
            /* mobile: rounded top, flat bottom */
        }

        .card-front img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
            transition: transform 0.4s ease;
        }

        .card-front .img-tag {
            position: absolute;
            bottom: 12px;
            left: 12px;
            background: rgba(255, 255, 255, .92);
            backdrop-filter: blur(4px);
            border-radius: 4px;
            padding: 4px 10px;
            font-size: 11px;
            font-weight: 600;
            color: #0f172a;
            letter-spacing: .04em;
        }

        /* ── Back: shown on desktop hover ──────────────────────────────── */
        .card-back {
            display: none;
            /* hidden by default on all screens */
            flex-direction: column;
            justify-content: center;
            background: #fff;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            padding: 28px 24px;
            box-shadow: 0 4px 24px rgba(0, 0, 0, .08);
            height: 240px;
        }

        .card-back .back-category {
            font-size: 10px;
            font-weight: 600;
            letter-spacing: .12em;
            text-transform: uppercase;
            color: #2563eb;
            margin-bottom: 8px;
        }

        .card-back .back-title {
            font-family: 'Syne', sans-serif;
            font-weight: 700;
            font-size: 17px;
            color: #0f172a;
            margin-bottom: 10px;
            line-height: 1.3;
        }

        .card-back .back-desc {
            font-size: 13.5px;
            /* color: #64748b; */
            line-height: 1.65;
            font-weight: 300;
            margin-bottom: 20px;
            display: -webkit-box;
            -webkit-line-clamp: 4;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .card-back .view-btn {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: var(--base-color);
            color: #fff;
            border: none;
            border-radius: 6px;
            padding: 10px 20px;
            font-family: 'Outfit', sans-serif;
            font-size: 13px;
            font-weight: 600;
            cursor: pointer;
            text-decoration: none;
            transition: background .2s, gap .2s;
            width: fit-content;
        }

        .card-back .view-btn:hover {
            background: var(--base-color);
            gap: 12px;
        }

        /* ── Mobile card body (text below image) ───────────────────────── */
        .mobile-card-body {
            background: #fff;
            padding: 16px 18px 20px;
            border: 1px solid #e2e8f0;
            border-top: none;
            border-radius: 0 0 8px 8px;
        }

        .mobile-card-body .m-category {
            font-size: 10px;
            font-weight: 600;
            letter-spacing: .1em;
            text-transform: uppercase;
            color: var(--base-color);
            margin-bottom: 5px;
        }

        .mobile-card-body .m-title {
            font-family: 'Syne', sans-serif;
            font-weight: 700;
            font-size: 15px;
            color: var(--base-color);
            margin-bottom: 7px;
        }

        .mobile-card-body .m-desc {
            font-size: 13px;
            /* color: #64748b; */
            line-height: 1.6;
            font-weight: 300;
            margin-bottom: 12px;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .mobile-card-body .read-more {
            font-size: 13px;
            font-weight: 600;
            color: var(--base-color);
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 5px;
            transition: gap .2s;
        }

        .mobile-card-body .read-more:hover {
            gap: 9px;
        }

        /* ── Desktop behaviour ──────────────────────────────────────────── */
        @media (min-width: 992px) {

            /* Hide the mobile text body */
            .mobile-card-body {
                display: none !important;
            }

            /* Image fills full card with rounded corners on all sides */
            .card-front {
                border-radius: 8px;
                cursor: pointer;
                height: 260px;
            }

            /* Subtle zoom hint on hover (before flip) */
            .project-card:not(.flipped) .card-front:hover img {
                transform: scale(1.05);
            }

            /* When JS adds .flipped: hide front, show back */
            .project-card.flipped .card-front {
                display: none;
            }

            .project-card.flipped .card-back {
                display: flex;
                height: 260px;
                animation: flipIn .35s ease;
            }

            @keyframes flipIn {
                from {
                    opacity: 0;
                    transform: rotateY(-12deg) scale(.97);
                }

                to {
                    opacity: 1;
                    transform: rotateY(0deg) scale(1);
                }
            }
        }

        /* ── "All Projects" button ──────────────────────────────────────── */
        .all-projects-btn {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            border: 1.5px solid #cbd5e1;
            background: #fff;
            /* color: #334155; */
            border-radius: 6px;
            padding: 11px 28px;
            font-family: 'Outfit', sans-serif;
            font-size: 14px;
            font-weight: 600;
            text-decoration: none;
            transition: border-color .2s, color .2s, box-shadow .2s;
        }

        .all-projects-btn:hover {
            border-color: var(--base-color);
            color: var(--base-color);
            box-shadow: 0 0 0 3px rgba(37, 99, 235, .1);
        }

        /* ── Entrance stagger ───────────────────────────────────────────── */
        .project-col {
            opacity: 0;
            transform: translateY(20px);
            animation: fadeUp .5s ease forwards;
        }

        .project-col:nth-child(1) {
            animation-delay: .00s;
        }

        .project-col:nth-child(2) {
            animation-delay: .10s;
        }

        .project-col:nth-child(3) {
            animation-delay: .20s;
        }

        .project-col:nth-child(4) {
            animation-delay: .30s;
        }

        .project-col:nth-child(5) {
            animation-delay: .40s;
        }

        .project-col:nth-child(6) {
            animation-delay: .50s;
        }

        @keyframes fadeUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* table */
        :root {
            --accent: #e63030;
            --text-dark: #111111;
            --text-muted: #666;
            --border: #e0e0e0;
            --bg: #ffffff;
            --count-color: #bbb;
        }

        * {
            box-sizing: border-box;
        }


        /* ── Section header ── */
        .section-label {

            font-size: 0.7rem;
            text-transform: uppercase;
            color: var(--accent);
            margin-bottom: 6px;
        }

        .section-heading {
            font-size: clamp(2rem, 4vw, 3rem);
            margin-bottom: 10px;
            line-height: 2.5rem;
        }

        .section-sub {

            max-width: 280px;
        }

        /* ── Timeline entries ── */
        .timeline-table {
            width: 100%;
            border-collapse: collapse;
        }

        .timeline-table tr {
            border-bottom: 1px solid var(--border);
            transition: background 0.2s;
        }

        .timeline-table tr:first-child {
            border-top: 1px solid var(--border);
        }

        .timeline-table tr:hover {
            background: #fafafa;
        }

        .timeline-table td {
            padding: 18px 12px;
            vertical-align: middle;
        }

        /* count badge */
        .col-count {
            width: 48px;
            font-size: 0.85rem;
            color: var(--count-color);
            letter-spacing: 0.06em;
            text-transform: uppercase;
            white-space: nowrap;
        }

        /* divider line */
        .col-divider {
            width: 1px;
            padding: 0 !important;
            background: var(--border);
        }

        /* main info */
        .col-info {
            padding-left: 20px !important;
        }

        .entry-title {
            margin: 0 0 2px;
        }

        .entry-title strong {
            font-weight: 600;
        }

        .entry-sub {
            font-size: 1rem;
            color: var(--text-muted);
            margin: 0;
        }

        /* year */
        .col-year {
            width: 52px;
            text-align: right;
            font-size: 0.82rem;
            color: var(--text-muted);
            font-weight: 400;
            white-space: nowrap;
        }


        .dot-btn:hover {
            background: var(--text-dark);
        }

        .dot-btn:hover .dot-inner {
            background: #fff;
        }


        /* divider between sections */
        .section-divider {
            border: none;
            border-top: 2px solid var(--border);
            /* margin: 60px 0; */
        }

        /* Responsive */
        @media (max-width: 767px) {
            .section-heading {
                font-size: 1.8rem;
            }

            .col-count {
                display: none;
            }

            .col-divider {
                display: none;
            }

            .col-info {
                padding-left: 0 !important;
            }
        }

        /* chatbot */
        :root {
            --sky: #0ea5e9;
            --sky-dark: #0284c7;
            --earth: #16a34a;
            --earth-dark: #15803d;
            --sand: #fef3c7;
            --ink: #0f172a;
            --ink-soft: #334155;
            --mist: #f1f5f9;
            --white: #ffffff;
            --radius: 20px;
            --radius-sm: 12px;
            --shadow: 0 24px 60px rgba(15, 23, 42, 0.18);
        }

        body {
            /* font-family: 'DM Sans', sans-serif;
    background: linear-gradient(135deg, #0f172a 0%, #1e3a5f 50%, #0f2d1f 100%);
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 20px; */
        }

        /* ── Demo wrapper ── */
        .demo-label {
            position: fixed;
            top: 18px;
            left: 50%;
            transform: translateX(-50%);
            background: rgba(255, 255, 255, 0.08);
            border: 1px solid rgba(255, 255, 255, 0.15);
            color: rgba(255, 255, 255, 0.7);
            font-family: 'Syne', sans-serif;
            font-size: 11px;
            letter-spacing: 2px;
            text-transform: uppercase;
            padding: 6px 18px;
            border-radius: 40px;
            backdrop-filter: blur(10px);
            white-space: nowrap;
        }

        /* ── FAB button ── */
        #fab {
            position: fixed;
            bottom: 32px;
            right: 32px;
            width: 62px;
            height: 62px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--sky), var(--earth));
            border: none;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 8px 32px rgba(14, 165, 233, 0.45);
            transition: transform 0.25s cubic-bezier(.34, 1.56, .64, 1), box-shadow 0.25s;
            z-index: 9999;
        }

        #fab:hover {
            transform: scale(1.12);
            box-shadow: 0 12px 40px rgba(14, 165, 233, 0.55);
        }

        #fab svg {
            width: 28px;
            height: 28px;
            transition: opacity 0.2s;
        }

        #fab .ico-chat {
            opacity: 1;
            position: absolute;
        }

        #fab .ico-close {
            opacity: 0;
            position: absolute;
        }

        #fab.open .ico-chat {
            opacity: 0;
        }

        #fab.open .ico-close {
            opacity: 1;
        }

        /* pulse ring */
        #fab::after {
            content: '';
            position: absolute;
            inset: -6px;
            border-radius: 50%;
            border: 2px solid rgba(14, 165, 233, 0.4);
            animation: pulse 2.2s ease-out infinite;
        }

        @keyframes pulse {
            0% {
                transform: scale(1);
                opacity: 1;
            }

            70% {
                transform: scale(1.4);
                opacity: 0;
            }

            100% {
                transform: scale(1.4);
                opacity: 0;
            }
        }

        /* ── Chat window ── */
        #chat-window {
            position: fixed;
            bottom: 108px;
            right: 32px;
            width: 380px;
            max-height: 600px;
            border-radius: var(--radius);
            background: var(--white);
            box-shadow: var(--shadow);
            display: flex;
            flex-direction: column;
            overflow: hidden;
            z-index: 9998;
            transform: scale(0.88) translateY(20px);
            opacity: 0;
            pointer-events: none;
            transform-origin: bottom right;
            transition: transform 0.3s cubic-bezier(.34, 1.56, .64, 1), opacity 0.25s;
        }

        #chat-window.open {
            transform: scale(1) translateY(0);
            opacity: 1;
            pointer-events: all;
        }

        /* header */
        .chat-header {
            background: linear-gradient(120deg, var(--ink) 0%, #1e3a5f 100%);
            padding: 18px 20px 16px;
            display: flex;
            align-items: center;
            gap: 12px;
            flex-shrink: 0;
        }

        .chat-avatar {
            width: 42px;
            height: 42px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--sky), var(--earth));
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .chat-avatar svg {
            width: 22px;
            height: 22px;
        }

        .chat-header-info {
            flex: 1;
        }

        .chat-header-name {
            font-family: 'Syne', sans-serif;
            font-weight: 700;
            font-size: 15px;
            color: var(--white);
            line-height: 1.2;
        }

        .chat-header-status {
            font-size: 12px;
            color: rgba(255, 255, 255, 0.55);
            display: flex;
            align-items: center;
            gap: 5px;
            margin-top: 2px;
        }

        .status-dot {
            width: 7px;
            height: 7px;
            border-radius: 50%;
            background: #4ade80;
            animation: blink 2s ease-in-out infinite;
        }

        @keyframes blink {

            0%,
            100% {
                opacity: 1
            }

            50% {
                opacity: 0.4
            }
        }

        /* messages area */
        .chat-messages {
            flex: 1;
            overflow-y: auto;
            padding: 18px 16px;
            display: flex;
            flex-direction: column;
            gap: 12px;
            background: #f8fafc;
            scroll-behavior: smooth;
        }

        .chat-messages::-webkit-scrollbar {
            width: 4px;
        }

        .chat-messages::-webkit-scrollbar-track {
            background: transparent;
        }

        .chat-messages::-webkit-scrollbar-thumb {
            background: #cbd5e1;
            border-radius: 4px;
        }

        /* message bubbles */
        .msg {
            display: flex;
            gap: 8px;
            align-items: flex-end;
            animation: msgIn 0.3s cubic-bezier(.34, 1.56, .64, 1) both;
        }

        @keyframes msgIn {
            from {
                opacity: 0;
                transform: translateY(10px) scale(0.95);
            }

            to {
                opacity: 1;
                transform: translateY(0) scale(1);
            }
        }

        .msg.user {
            flex-direction: row-reverse;
        }

        .msg-avatar {
            width: 28px;
            height: 28px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--sky), var(--earth));
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .msg-avatar svg {
            width: 14px;
            height: 14px;
        }

        .bubble {
            max-width: 80%;
            padding: 10px 14px;
            border-radius: 18px;
            font-size: 13.5px;
            line-height: 1.55;
            color: var(--ink);
        }

        .msg.bot .bubble {
            background: var(--white);
            border-bottom-left-radius: 5px;
            box-shadow: 0 2px 8px rgba(15, 23, 42, 0.08);
        }

        .msg.user .bubble {
            background: linear-gradient(135deg, var(--sky-dark), var(--sky));
            color: white;
            border-bottom-right-radius: 5px;
        }

        /* quick replies */
        .quick-replies {
            display: flex;
            flex-wrap: wrap;
            gap: 7px;
            margin-top: 4px;
            padding-left: 36px;
            animation: msgIn 0.35s 0.1s cubic-bezier(.34, 1.56, .64, 1) both;
        }

        .qr {
            background: white;
            border: 1.5px solid var(--sky);
            color: var(--sky-dark);
            font-size: 12px;
            font-family: 'DM Sans', sans-serif;
            font-weight: 500;
            padding: 5px 12px;
            border-radius: 20px;
            cursor: pointer;
            transition: all 0.18s;
            white-space: nowrap;
        }

        .qr:hover {
            background: var(--sky);
            color: white;
            border-color: var(--sky);
            transform: translateY(-1px);
        }

        /* typing indicator */
        .typing-indicator {
            display: flex;
            gap: 8px;
            align-items: flex-end;
        }

        .typing-dots {
            background: white;
            border-radius: 18px;
            border-bottom-left-radius: 5px;
            padding: 12px 16px;
            display: flex;
            gap: 5px;
            box-shadow: 0 2px 8px rgba(15, 23, 42, 0.08);
        }

        .dot {
            width: 7px;
            height: 7px;
            border-radius: 50%;
            background: #94a3b8;
            animation: dotBounce 1.2s ease-in-out infinite;
        }

        .dot:nth-child(2) {
            animation-delay: 0.15s;
        }

        .dot:nth-child(3) {
            animation-delay: 0.3s;
        }

        @keyframes dotBounce {

            0%,
            60%,
            100% {
                transform: translateY(0);
            }

            30% {
                transform: translateY(-6px);
                background: var(--sky);
            }
        }

        /* input bar */
        .chat-input-bar {
            padding: 14px 14px 14px;
            background: white;
            border-top: 1px solid #e2e8f0;
            display: flex;
            gap: 10px;
            align-items: center;
            flex-shrink: 0;
        }

        #user-input {
            flex: 1;
            border: 1.5px solid #e2e8f0;
            border-radius: 12px;
            padding: 10px 14px;
            font-family: 'DM Sans', sans-serif;
            font-size: 13.5px;
            color: var(--ink);
            outline: none;
            resize: none;
            min-height: 42px;
            max-height: 100px;
            overflow-y: auto;
            transition: border-color 0.2s;
            background: #f8fafc;
        }

        #user-input:focus {
            border-color: var(--sky);
            background: white;
        }

        #user-input::placeholder {
            color: #94a3b8;
        }

        #send-btn {
            width: 42px;
            height: 42px;
            border-radius: 12px;
            background: linear-gradient(135deg, var(--sky), var(--earth));
            border: none;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: transform 0.2s, opacity 0.2s;
            flex-shrink: 0;
        }

        #send-btn:hover {
            transform: scale(1.08);
        }

        #send-btn:disabled {
            opacity: 0.4;
            cursor: not-allowed;
            transform: none;
        }

        #send-btn svg {
            width: 18px;
            height: 18px;
        }

        /* powered by */
        .powered-by {
            text-align: center;
            padding: 6px 0 10px;
            font-size: 10.5px;
            color: #94a3b8;
            letter-spacing: 0.3px;
        }

        .powered-by span {
            color: var(--sky-dark);
            font-weight: 500;
        }

        @media (max-width: 440px) {
            #chat-window {
                right: 12px;
                left: 12px;
                width: auto;
                bottom: 96px;
            }

            #fab {
                bottom: 20px;
                right: 20px;
            }
        }
    </style>
</head>

<body data-mobile-nav-style="classic" class="custom-cursor">
    <!-- start cursor -->
    <div class="cursor-page-inner">
        <div class="circle-cursor circle-cursor-inner"></div>
        <div class="circle-cursor circle-cursor-outer"></div>
    </div>
    <!-- end cursor -->
    <!-- start header -->
    <header>
        <!-- start navigation -->
        <nav class="navbar navbar-expand-lg header-transparent bg-transparent disable-fixed" data-header-hover="dark">
            <div class="container-fluid">
                <div class="col-auto col-lg-2 me-lg-0 me-auto">
                    <a class="navbar-brand" href="demo-freelancer.html">
                        <img src="images/demo-freelancer-logo-white.png"
                            data-at2x="images/demo-freelancer-logo-white@2x.png" alt="" class="default-logo">
                        <img src="images/demo-freelancer-logo-white.png"
                            data-at2x="images/demo-freelancer-logo-white@2x.png" alt="" class="alt-logo">
                        <img src="images/demo-freelancer-logo-white.png"
                            data-at2x="images/demo-freelancer-logo-white@2x.png" alt="" class="mobile-logo">
                    </a>
                </div>
                <div class="col-auto col-lg-3 text-end lg-pe-0">
                    <div class="header-icon">
                        <a href="mailto:brian@domain.com" class="text-white">brian@domain.com</a>
                        <div class="header-push-button hamburger-push-button icon sm-pe-15px">
                            <div class="push-button">
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <!-- end navigation -->
        <!-- start hamburger menu -->
        <div class="push-menu hamburger-nav header-dark hamburger-menu-half bg-dark-gray md-w-60 sm-w-100"
            style="background-image: url(images/demo-gym-and-fitness-menu-bg.jpg)">
            <span class="close-menu text-dark-gray bg-white"><i class="fa-solid fa-xmark"></i></span>
            <div class="d-flex flex-column justify-content-center h-100 ps-18 pb-12 xxl-p-12 sm-p-20px">
                <div class="hamburger-menu menu-list-wrapper w-80 lg-w-100 lg-no-margin sm-mt-auto sm-mb-auto"
                    data-scroll-options='{ "theme": "light" }'>
                    <ul class="menu-item-list fw-500 p-0">
                        <li class="menu-item"><a href="#home" class="inner-link nav-link">Home</a></li>
                        <li class="menu-item"><a href="#about" class="inner-link nav-link">About</a></li>
                        <li class="menu-item"><a href="#work" class="inner-link nav-link">Work</a></li>
                        <li class="menu-item"><a href="#expertise" class="inner-link nav-link">Expertise</a></li>
                        <li class="menu-item"><a href="#awards" class="inner-link nav-link">Awards</a></li>
                        <li class="menu-item"><a href="#contact" class="inner-link nav-link">Contact</a></li>
                    </ul>
                </div>
                <div class="w-90 xxl-w-100 d-none d-lg-inline-block">
                    <div class="row row-cols-1 row-cols-xl-2 menu-address">
                        <div class="col">
                            <span class="text-white fs-16 ls-05px">Contact information</span>
                            <div class="h-1px w-90 lg-w-100 bg-white-transparent-extra-light mt-15px mb-15px"></div>
                            <p class="fs-15 lh-26 w-90 xl-w-100 text-white fw-300">28 New regent view road, New York,
                                USA</p>
                        </div>
                        <div class="col">
                            <span class="text-white fs-16 ls-05px">Connect with us</span>
                            <div class="h-1px w-90 xxl-w-100 bg-white-transparent-extra-light mt-15px mb-15px"></div>
                            <p class="fs-15 lh-28 w-90 xxl-w-100 lg-mb-0 fw-300"><a href="mailto:info@yourdomain.com"
                                    class="d-block text-white text-white-hover">info@yourdomain.com</a><a
                                    href="tel:12345678910" class="text-white text-white-hover">+1 234 567 8910</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end hamburger menu -->
    </header>
    <!-- end header -->
@yield('content')

    <section>
        <button id="fab" aria-label="Open chat">
            <svg class="ico-chat" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round">
                <path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z" />
            </svg>
            <svg class="ico-close" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2.5"
                stroke-linecap="round">
                <line x1="18" y1="6" x2="6" y2="18" />
                <line x1="6" y1="6" x2="18" y2="18" />
            </svg>
        </button>

        <!-- Chat Window -->
        <div id="chat-window" role="dialog" aria-label="MightyBreeze Assistant">
            <div class="chat-header">
                <div class="chat-avatar">
                    <svg viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="M12 2a10 10 0 100 20A10 10 0 0012 2z" />
                        <path d="M8 14s1.5 2 4 2 4-2 4-2" />
                        <line x1="9" y1="9" x2="9.01" y2="9" />
                        <line x1="15" y1="9" x2="15.01" y2="9" />
                    </svg>
                </div>
                <div class="chat-header-info">
                    <div class="chat-header-name">Breeze Assistant</div>
                    <div class="chat-header-status">
                        <span class="status-dot"></span> Online · MightyBreeze
                    </div>
                </div>
            </div>

            <div class="chat-messages" id="messages"></div>

            <div class="chat-input-bar">
                <textarea id="user-input" rows="1" placeholder="Type your message…"></textarea>
                <button id="send-btn" aria-label="Send message" disabled>
                    <svg viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2.2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <line x1="22" y1="2" x2="11" y2="13" />
                        <polygon points="22 2 15 22 11 13 2 9 22 2" />
                    </svg>
                </button>
            </div>
            <div class="powered-by">Powered by <span>Claude AI</span> · MightyBreeze © 2025</div>
        </div>
    </section>
    <!-- start footer -->
    <footer id="contact" class="position-relative overflow-hidden pb-0">
        <img src="images/demo-freelancer-03.png" class="position-absolute top-0px right-minus-100px" alt="">
        <div class="container position-relative">
            <img src="images/demo-freelancer-04.png"
                class="position-absolute top-20px right-minus-100px d-none d-md-block" alt="">
            <div class="row">
                <div class="col-md-12 position-relative">
                    <div class="fs-70 md-fs-50 sm-fs-40 ls-minus-3px fw-700 text-black mb-10px sm-ls-minus-1px">Create
                        something great.</div>
                    <div class="d-flex align-items-center">
                        <i
                            class="bi bi-envelope icon-extra-large md-icon-large me-10px text-base-color align-middle"></i>
                        <a href="mailto:brian@domain.com"
                            class="fs-50 sm-fs-40 text-base-color fw-600 align-middle ls-minus-3px sm-ls-minus-1px">brian@domain.com</a>
                    </div>
                </div>
            </div>
            <div class="row g-0 align-items-center border-top border-2 border-color-dark-gray pt-30px mt-6 mb-3">
                <div class="col-md-7 last-paragraph-no-margin sm-mb-20px">
                    <p>Development is heart of our business. Our skilled designers and developers make sure to deliver
                        tried-tested efficient, scalable.</p>
                </div>
                <div class="col-md-5 elements-social social-text-style-01 text-start text-md-end sm-mb-20px">
                    <ul class="medium-icon dark fw-600">
                        <li><a class="facebook" href="https://www.facebook.com/" target="_blank">Fb.</a></li>
                        <li><a class="instagram" href="http://www.instagram.com" target="_blank">Ig.</a></li>
                        <li><a class="twitter" href="http://www.twitter.com" target="_blank">Tw.</a></li>
                        <li><a class="behance" href="http://www.behance.com/" target="_blank">Be.</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- end footer -->
    <!-- start scroll progress -->
    <div class="scroll-progress d-none d-xxl-block">
        <a href="#" class="scroll-top" aria-label="scroll">
            <span class="scroll-text">Scroll</span><span class="scroll-line"><span
                    class="scroll-point"></span></span>
        </a>
    </div>
    <!-- end scroll progress -->
    <!-- javascript libraries -->
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/vendors.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>

    <script>
        // Desktop flip only (≥ 992px)
        // Adds / removes .flipped on mouseenter / mouseleave.
        // CSS handles all the visual switching — no DOM creation here.

        const DESKTOP = () => window.innerWidth >= 992;

        document.querySelectorAll('.project-card').forEach(card => {
            card.addEventListener('mouseenter', () => {
                if (DESKTOP()) card.classList.add('flipped');
            });
            card.addEventListener('mouseleave', () => {
                card.classList.remove('flipped');
            });
        });
    </script>
    <script>
        const fab = document.getElementById('fab');
        const chatWindow = document.getElementById('chat-window');
        const messagesEl = document.getElementById('messages');
        const userInput = document.getElementById('user-input');
        const sendBtn = document.getElementById('send-btn');

        let isOpen = false;
        let isWaiting = false;
        let conversationHistory = [];
        let greeted = false;

        // Toggle chat
        fab.addEventListener('click', () => {
            isOpen = !isOpen;
            fab.classList.toggle('open', isOpen);
            chatWindow.classList.toggle('open', isOpen);
            if (isOpen && !greeted) {
                greeted = true;
                setTimeout(() => greet(), 400);
            }
            if (isOpen) setTimeout(() => userInput.focus(), 350);
        });

        // Input events
        userInput.addEventListener('input', () => {
            sendBtn.disabled = userInput.value.trim() === '' || isWaiting;
            userInput.style.height = 'auto';
            userInput.style.height = Math.min(userInput.scrollHeight, 100) + 'px';
        });
        userInput.addEventListener('keydown', (e) => {
            if (e.key === 'Enter' && !e.shiftKey) {
                e.preventDefault();
                send();
            }
        });
        sendBtn.addEventListener('click', send);

        function scrollBottom() {
            messagesEl.scrollTop = messagesEl.scrollHeight;
        }

        function addMsg(role, text) {
            const div = document.createElement('div');
            div.className = `msg ${role}`;

            if (role === 'bot') {
                div.innerHTML = `
      <div class="msg-avatar">
        <svg viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <circle cx="12" cy="12" r="10"/><path d="M8 14s1.5 2 4 2 4-2 4-2"/>
          <line x1="9" y1="9" x2="9.01" y2="9"/><line x1="15" y1="9" x2="15.01" y2="9"/>
        </svg>
      </div>
      <div class="bubble">${formatText(text)}</div>`;
            } else {
                div.innerHTML = `<div class="bubble">${formatText(text)}</div>`;
            }

            messagesEl.appendChild(div);
            scrollBottom();
            return div;
        }

        function formatText(t) {
            return t
                .replace(/\*\*(.*?)\*\*/g, '<strong>$1</strong>')
                .replace(/\n/g, '<br>');
        }

        function addQuickReplies(options) {
            const div = document.createElement('div');
            div.className = 'quick-replies';
            options.forEach(opt => {
                const btn = document.createElement('button');
                btn.className = 'qr';
                btn.textContent = opt;
                btn.addEventListener('click', () => {
                    div.remove();
                    handleUserMessage(opt);
                });
                div.appendChild(btn);
            });
            messagesEl.appendChild(div);
            scrollBottom();
        }

        function showTyping() {
            const div = document.createElement('div');
            div.className = 'typing-indicator';
            div.id = 'typing';
            div.innerHTML = `
    <div class="msg-avatar">
      <svg viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <circle cx="12" cy="12" r="10"/><path d="M8 14s1.5 2 4 2 4-2 4-2"/>
        <line x1="9" y1="9" x2="9.01" y2="9"/><line x1="15" y1="9" x2="15.01" y2="9"/>
      </svg>
    </div>
    <div class="typing-dots"><div class="dot"></div><div class="dot"></div><div class="dot"></div></div>`;
            messagesEl.appendChild(div);
            scrollBottom();
        }

        function hideTyping() {
            const t = document.getElementById('typing');
            if (t) t.remove();
        }

        function greet() {
            addMsg('bot', "👋 Hi there! I'm **Breeze**, your MightyBreeze assistant.\n\nHow can I help you today?");
            addQuickReplies([
                '💧 Borehole Drilling',
                '☀️ Solar Installation',
                '🌱 Irrigation Systems',
                '⛽ Bush Pumps',
                '📞 Get a Quote',
            ]);
        }

        async function send() {
            const text = userInput.value.trim();
            if (!text || isWaiting) return;
            userInput.value = '';
            userInput.style.height = 'auto';
            sendBtn.disabled = true;
            handleUserMessage(text);
        }

        async function handleUserMessage(text) {
            addMsg('user', text);
            conversationHistory.push({
                role: 'user',
                content: text
            });

            isWaiting = true;
            sendBtn.disabled = true;
            showTyping();

            try {
                const response = await fetch('https://api.anthropic.com/v1/messages', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify({
                        model: 'claude-sonnet-4-20250514',
                        max_tokens: 1000,
                        system: `You are Breeze, the friendly and knowledgeable AI assistant for MightyBreeze — a professional borehole drilling, solar installation, irrigation, and bush pump company based in Zimbabwe.

Company info:
- Services: Borehole Drilling, Solar Installation (home & borehole), Irrigation Systems, Bush Pumps
- Experience: 14+ years
- Contact: +263 77 106 0581, +263 71 899 5907, +263 77 246 6985
- Hours: Mon–Sat 8:00–17:30, Sunday CLOSED
- Website: mightybreeze.co.zw

Your role:
- Help visitors understand services and choose the right solution
- Collect leads (name, location, service needed, phone number) naturally in conversation
- Answer questions about borehole depth, solar sizing, irrigation setup, maintenance
- Give rough timeframes and explain what factors affect pricing
- Be warm, concise, and professional — like a helpful salesperson, not a robot
- Suggest contacting the team for detailed quotes
- When a user provides their details, confirm you'll pass them on to the team
- Keep responses short (2–4 sentences max unless explaining something technical)
- Use occasional relevant emojis to keep things friendly
- Never make up specific prices — say pricing depends on site assessment`,
                        messages: conversationHistory,
                    }),
                });

                const data = await response.json();
                hideTyping();

                const reply = data.content?.[0]?.text ||
                    "Sorry, I had a hiccup. Please try again or call us on +263 77 106 0581.";
                conversationHistory.push({
                    role: 'assistant',
                    content: reply
                });
                addMsg('bot', reply);

                // Contextual quick replies after first AI response
                if (conversationHistory.length <= 4) {
                    addQuickReplies(['📍 Site Visit Request', '💰 Cost Estimate', '⏱️ How long does it take?',
                        '📞 Call Now'
                    ]);
                }

            } catch (err) {
                hideTyping();
                addMsg('bot',
                    "Oops, something went wrong on my end. Please call us directly on **+263 77 106 0581** and we'll help you right away! 📞"
                    );
            }

            isWaiting = false;
            sendBtn.disabled = userInput.value.trim() === '';
        }
    </script>
</body>

</html>
