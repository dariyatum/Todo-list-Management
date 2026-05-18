<div class="sidebar">

    {{-- LOGO --}}
    <div class="logo">

        <img 
            src="https://i.ibb.co/XfFpmF1j/Chat-GPT-Image-May-7-2026-02-12-49-PM-1.png"
            alt="Logo"
        >

        <div class="logo-text">
            <h2>TaskFlow</h2>
            <p>Productivity Workspace</p>
        </div>

    </div>

    {{-- NAVIGATION --}}
    <nav class="nav-menu">

        {{-- DASHBOARD --}}
        <a href="{{ route('dashboard') }}"
           class="menu-item {{ request()->routeIs('dashboard') ? 'active-dashboard' : '' }}">

            <div class="icon-box">

                <svg xmlns="http://www.w3.org/2000/svg"
                     fill="none"
                     viewBox="0 0 24 24"
                     stroke-width="1.8"
                     stroke="currentColor"
                     class="w-5 h-5">

                    <path stroke-linecap="round"
                          stroke-linejoin="round"
                          d="M2.25 12 11.204 3.046a1.125 1.125 0 0 1 1.592 0L21.75 12M4.5 9.75V19.5A1.5 1.5 0 0 0 6 21h3.75v-4.5h4.5V21H18a1.5 1.5 0 0 0 1.5-1.5V9.75" />
                </svg>

            </div>

            <span>Dashboard</span>

        </a>

        {{-- TASKS --}}
        <a href="{{ route('tasks') }}"
           class="menu-item {{ request()->routeIs('tasks*') ? 'active-task' : '' }}">

            <div class="icon-box">

                <svg xmlns="http://www.w3.org/2000/svg"
                     fill="none"
                     viewBox="0 0 24 24"
                     stroke-width="1.8"
                     stroke="currentColor"
                     class="w-5 h-5">

                    <path stroke-linecap="round"
                          stroke-linejoin="round"
                          d="M9 5.25H7.5A2.25 2.25 0 0 0 5.25 7.5v10.5A2.25 2.25 0 0 0 7.5 20.25h9A2.25 2.25 0 0 0 18.75 18V7.5A2.25 2.25 0 0 0 16.5 5.25H15M9 5.25A2.25 2.25 0 0 1 11.25 3h1.5A2.25 2.25 0 0 1 15 5.25M9 5.25A2.25 2.25 0 0 0 11.25 7.5h1.5A2.25 2.25 0 0 0 15 5.25" />
                </svg>

            </div>

            <span>My Tasks</span>

        </a>

    </nav>

</div>


<style>

@import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap');

.sidebar{
    width:290px;
    min-height:100vh;
    background:linear-gradient(180deg,#ffffff 0%,#f8faff 100%);
    border-right:1px solid #eceef5;
    padding:32px 22px;
    font-family:'Inter',sans-serif;
    position:sticky;
    top:0;
}

/* LOGO */

.logo{
    display:flex;
    align-items:center;
    gap:16px;
    margin-bottom:50px;
    padding:0 6px;
}

.logo img{
    width:64px;
    height:64px;
    object-fit:contain;
    border-radius:18px;
    background:white;
    padding:6px;
    box-shadow:0 6px 18px rgba(0,0,0,0.08);
}

.logo-text h2{
    margin:0;
    font-size:24px;
    font-weight:800;
    color:#1e1b4b;
    line-height:1.1;
}

.logo-text p{
    margin:4px 0 0;
    font-size:13px;
    color:#9ca3af;
    font-weight:500;
}

/* NAVIGATION */

.nav-menu{
    display:flex;
    flex-direction:column;
    gap:14px;
}

/* MENU ITEM */

.menu-item{
    display:flex;
    align-items:center;
    gap:16px;
    padding:16px 18px;
    border-radius:20px;
    text-decoration:none;
    color:#374151;
    font-size:16px;
    font-weight:700;
    transition:0.25s ease;
    position:relative;
}

.menu-item:hover{
    background:white;
    transform:translateX(4px);
    box-shadow:0 10px 24px rgba(0,0,0,0.06);
}

/* ICON */

.icon-box{
    width:44px;
    height:44px;
    border-radius:14px;
    display:flex;
    align-items:center;
    justify-content:center;
    background:#f3f4f6;
    transition:0.25s;
    flex-shrink:0;
}

.menu-item svg{
    width:22px;
    height:22px;
}

/* ACTIVE DASHBOARD */

.active-dashboard{
    background:linear-gradient(135deg,#f6deb4,#efc97e);
    color:#4b3200;
    box-shadow:0 10px 25px rgba(239,201,126,0.35);
}

.active-dashboard .icon-box{
    background:rgba(255,255,255,0.45);
}

/* ACTIVE TASK */

.active-task{
    background:linear-gradient(135deg,#b7d7f7,#8cbcf0);
    color:#183b63;
    box-shadow:0 10px 25px rgba(140,188,240,0.35);
}

.active-task .icon-box{
    background:rgba(255,255,255,0.45);
}

/* HOVER */

.menu-item:hover .icon-box{
    transform:scale(1.05);
}

/* MOBILE */

@media(max-width:768px){

    .sidebar{
        width:100%;
        min-height:auto;
        position:relative;
        border-right:none;
        border-bottom:1px solid #eceef5;
    }

    .logo{
        margin-bottom:30px;
    }

}

</style>