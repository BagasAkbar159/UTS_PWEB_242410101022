<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" type="image/png" href="{{ asset('images/favicon-v2.png') }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'TugasBapakKau')</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --bg: #121212;
            --surface: #1b1b1b;
            --card: #242424;
            --card-hover: #2d2d2d;
            --accent: #c65d2e;
            --accent-dark: #8e3b1f;
            --text: #f5f5f5;
            --muted: #b8b8b8;
            --line: rgba(255, 255, 255, 0.08);
            --shadow: 0 10px 30px rgba(0, 0, 0, 0.35);
        }

        body {
            font-family: Arial, sans-serif;
            background:
                radial-gradient(circle at top left, rgba(198, 93, 46, 0.14), transparent 28%),
                radial-gradient(circle at bottom right, rgba(255, 255, 255, 0.04), transparent 25%),
                var(--bg);
            color: var(--text);
            min-height: 100vh;
            overflow-x: hidden;
        }

        body::before {
            content: "";
            position: fixed;
            inset: 0;
            background-image:
                linear-gradient(rgba(255,255,255,0.018) 1px, transparent 1px),
                linear-gradient(90deg, rgba(255,255,255,0.018) 1px, transparent 1px);
            background-size: 28px 28px;
            pointer-events: none;
            opacity: 0.25;
            z-index: 0;
        }

        .page-shell {
            position: relative;
            z-index: 1;
        }

        .container {
            width: 92%;
            max-width: 1100px;
            margin: 34px auto;
            background: rgba(27, 27, 27, 0.78);
            border: 1px solid var(--line);
            backdrop-filter: blur(8px);
            padding: 30px;
            border-radius: 22px;
            box-shadow: var(--shadow);
            animation: fadeUp 0.7s ease;
        }

        h1 {
            font-size: 2.1rem;
            margin-bottom: 12px;
            letter-spacing: 0.4px;
        }

        h2 {
            font-size: 1.35rem;
            margin: 26px 0 16px;
        }

        h3 {
            font-size: 1.05rem;
            margin-bottom: 10px;
        }

        p {
            color: var(--muted);
            line-height: 1.7;
            margin-bottom: 10px;
        }

        .hero-text {
            max-width: 760px;
        }

        .accent {
            color: var(--accent);
        }

        .btn {
            display: inline-block;
            text-decoration: none;
            border: none;
            cursor: pointer;
            padding: 12px 18px;
            border-radius: 12px;
            background: linear-gradient(135deg, var(--accent), var(--accent-dark));
            color: white;
            font-weight: bold;
            margin-right: 10px;
            margin-top: 12px;
            transition: transform 0.25s ease, box-shadow 0.25s ease, opacity 0.25s ease;
            box-shadow: 0 8px 24px rgba(198, 93, 46, 0.22);
        }

        .btn:hover {
            transform: translateY(-3px) scale(1.02);
            box-shadow: 0 14px 28px rgba(198, 93, 46, 0.3);
        }

        .btn-secondary {
            background: transparent;
            border: 1px solid rgba(198, 93, 46, 0.45);
            color: var(--text);
            box-shadow: none;
        }

        .btn-secondary:hover {
            background: rgba(198, 93, 46, 0.1);
        }

        form {
            margin-top: 24px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #ececec;
        }

        input[type="text"] {
            width: 100%;
            padding: 14px 16px;
            border-radius: 14px;
            border: 1px solid rgba(255,255,255,0.08);
            background: #171717;
            color: var(--text);
            outline: none;
            margin-bottom: 18px;
            transition: border-color 0.25s ease, box-shadow 0.25s ease, transform 0.2s ease;
        }

        input[type="text"]:focus {
            border-color: rgba(198, 93, 46, 0.7);
            box-shadow: 0 0 0 4px rgba(198, 93, 46, 0.14);
            transform: translateY(-1px);
        }

        .stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
            gap: 16px;
            margin: 24px 0 10px;
        }

        .stat-box {
            background: linear-gradient(180deg, rgba(255,255,255,0.03), rgba(255,255,255,0.01));
            border: 1px solid var(--line);
            border-radius: 18px;
            padding: 18px;
            position: relative;
            overflow: hidden;
            transition: transform 0.25s ease, border-color 0.25s ease, background 0.25s ease;
            animation: fadeUp 0.7s ease;
        }

        .stat-box::before {
            content: "";
            position: absolute;
            inset: 0;
            background: linear-gradient(120deg, transparent, rgba(198,93,46,0.08), transparent);
            transform: translateX(-120%);
            transition: transform 0.8s ease;
        }

        .stat-box:hover::before {
            transform: translateX(120%);
        }

        .stat-box:hover {
            transform: translateY(-5px);
            border-color: rgba(198, 93, 46, 0.35);
            background: rgba(255,255,255,0.04);
        }

        .stat-box h3 {
            color: var(--muted);
            font-size: 0.95rem;
        }

        .stat-box p {
            color: var(--text);
            font-size: 2rem;
            font-weight: bold;
            margin: 0;
        }

        .section-title {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-top: 30px;
        }

        .section-title::before {
            content: "";
            width: 32px;
            height: 3px;
            border-radius: 999px;
            background: linear-gradient(90deg, var(--accent), transparent);
        }

        .card {
            background: linear-gradient(180deg, rgba(255,255,255,0.025), rgba(255,255,255,0.01));
            border: 1px solid var(--line);
            border-radius: 20px;
            padding: 20px;
            margin-bottom: 16px;
            box-shadow: var(--shadow);
            transition: transform 0.28s ease, border-color 0.28s ease, background 0.28s ease;
            animation: fadeUp 0.8s ease;
        }

        .card:hover {
            transform: translateY(-4px);
            border-color: rgba(198, 93, 46, 0.34);
            background: rgba(255,255,255,0.04);
        }

        .meta-row {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(170px, 1fr));
            gap: 12px;
            margin-top: 14px;
        }

        .meta-pill {
            padding: 12px 14px;
            background: rgba(255,255,255,0.03);
            border: 1px solid rgba(255,255,255,0.05);
            border-radius: 14px;
        }

        .meta-pill span {
            display: block;
            font-size: 0.78rem;
            color: var(--muted);
            margin-bottom: 5px;
            text-transform: uppercase;
            letter-spacing: 0.7px;
        }

        .meta-pill strong {
            color: var(--text);
            font-size: 0.95rem;
        }

        .badge {
            display: inline-block;
            padding: 7px 12px;
            border-radius: 999px;
            font-size: 0.82rem;
            font-weight: bold;
            margin-top: 8px;
        }

        .badge-danger {
            background: rgba(198, 50, 50, 0.18);
            color: #ff8f8f;
            border: 1px solid rgba(255, 143, 143, 0.18);
        }

        .badge-warning {
            background: rgba(198, 145, 46, 0.17);
            color: #ffca7a;
            border: 1px solid rgba(255, 202, 122, 0.14);
        }

        .badge-success {
            background: rgba(63, 168, 110, 0.16);
            color: #85e0a8;
            border: 1px solid rgba(133, 224, 168, 0.16);
        }

        .profile-grid {
            display: grid;
            grid-template-columns: 220px 1fr;
            gap: 22px;
            align-items: start;
        }

        .profile-avatar {
            background: linear-gradient(180deg, rgba(198,93,46,0.18), rgba(255,255,255,0.02));
            border: 1px solid var(--line);
            border-radius: 20px;
            padding: 18px;
            text-align: center;
        }

        .profile-avatar img {
            width: 100%;
            max-width: 150px;
            border-radius: 18px;
            border: 1px solid rgba(255,255,255,0.08);
            box-shadow: 0 10px 30px rgba(0,0,0,0.35);
            animation: pulseGlow 2.8s infinite ease-in-out;
        }

        .profile-info {
            display: grid;
            gap: 14px;
        }

        .profile-item {
            background: rgba(255,255,255,0.025);
            border: 1px solid var(--line);
            border-radius: 16px;
            padding: 16px;
        }

        .profile-item span {
            display: block;
            color: var(--muted);
            font-size: 0.82rem;
            text-transform: uppercase;
            letter-spacing: 0.7px;
            margin-bottom: 6px;
        }

        .profile-item strong {
            color: var(--text);
            font-size: 1rem;
        }

        .empty-note {
            margin-top: 16px;
            padding: 14px 16px;
            border-radius: 14px;
            border: 1px dashed rgba(198, 93, 46, 0.4);
            background: rgba(198, 93, 46, 0.06);
            color: #e8c1b0;
        }

        @keyframes fadeUp {
            from {
                opacity: 0;
                transform: translateY(18px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes pulseGlow {
            0%, 100% {
                transform: scale(1);
                box-shadow: 0 10px 30px rgba(0,0,0,0.35);
            }
            50% {
                transform: scale(1.03);
                box-shadow: 0 12px 34px rgba(198,93,46,0.18);
            }
        }

        @media (max-width: 768px) {
            .container {
                padding: 22px;
                border-radius: 18px;
            }

            .profile-grid {
                grid-template-columns: 1fr;
            }

            h1 {
                font-size: 1.75rem;
            }
        }
    </style>
</head>
<body>
    <div class="page-shell">
        <x-navbar />

        <div class="container">
            @yield('content')
        </div>

        <x-footer />
    </div>
</body>
</html>