<nav style="padding: 20px 4%; position: relative; z-index: 2;">
    <div style="
        max-width: 1100px;
        margin: 0 auto;
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 18px;
        background: rgba(20,20,20,0.78);
        border: 1px solid rgba(255,255,255,0.07);
        backdrop-filter: blur(8px);
        border-radius: 22px;
        padding: 14px 18px;
        box-shadow: 0 12px 28px rgba(0,0,0,0.28);
    ">
        <a href="{{ route('login') }}" style="text-decoration: none; color: #f5f5f5; display: flex; align-items: center; gap: 14px;">
            <img src="{{ asset('images/logo.png') }}" alt="Logo TugasBapakKau" style="width: 56px; height: 56px; object-fit: cover; border-radius: 14px; border: 1px solid rgba(255,255,255,0.08);">
            <div>
                <div style="font-size: 1.1rem; font-weight: bold;">TugasBapakKau</div>
                <div style="font-size: 0.78rem; color: #b8b8b8;">Deadline tidak pernah minta izin.</div>
            </div>
        </a>

        <div style="display: flex; gap: 12px; flex-wrap: wrap;">
            <a href="{{ route('login') }}" style="
                text-decoration: none;
                color: #f5f5f5;
                padding: 10px 14px;
                border-radius: 12px;
                background: rgba(255,255,255,0.03);
                border: 1px solid rgba(255,255,255,0.06);
                transition: 0.25s ease;
            ">Login</a>

            <a href="{{ route('pengelolaan') }}" style="
                text-decoration: none;
                color: #f5f5f5;
                padding: 10px 14px;
                border-radius: 12px;
                background: rgba(255,255,255,0.03);
                border: 1px solid rgba(255,255,255,0.06);
                transition: 0.25s ease;
            ">Pengelolaan</a>
        </div>
    </div>
</nav>