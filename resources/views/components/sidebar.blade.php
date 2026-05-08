<div class="w-[280px] min-h-screen bg-[#f5f7fb] border-r border-gray-200 px-5 py-6 shadow-sm">

    {{-- Logo --}}
    <div class="logo text-center mb-12">
            <img src="https://i.ibb.co/XfFpmF1j/Chat-GPT-Image-May-7-2026-02-12-49-PM-1.png" alt="">



    </div>

    {{-- Navigation --}}
    <nav class="space-y-5">

       {{-- Dashboard --}}
<a href="{{ route('dashboard') }}" class="menu-item dashboard-item group">

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

        {{-- Tasks --}}
        <a href="{{ route('tasks') }}" class="menu-item task-item group">

            <div class="icon-box">
                {{-- Task Icon --}}
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

.menu-item{
    display:flex;
    align-items:center;
    gap:14px;
    padding:14px 18px;
    border-radius:18px;
    font-size:18px;
    font-weight:500;
    color:#1f2937;
    text-decoration:none;
    transition:all 0.3s ease;
    box-shadow:0 3px 10px rgba(0,0,0,0.03);
    margin-bottom: 20px;
    margin-top: 20px;
}

.icon-box{
    width:38px;
    height:38px;
    display:flex;
    align-items:center;
    justify-content:center;
    border-radius:12px;
    background:rgba(255,255,255,0.5);
}

.dashboard-item{
    background:linear-gradient(135deg,#f6deb4,#efc97e);
}
.logo img{
    object-fit: contain;
    width: 150px;
}
.dashboard-item:hover{
    transform:translateY(-3px);
    background:linear-gradient(135deg,#e9c37a,#d7a94e);
    color:white;
    box-shadow:0 10px 20px rgba(214,170,83,0.3);
}

.task-item{
    background:linear-gradient(135deg,#b7d7f7,#8cbcf0);
}

.task-item:hover{
    transform:translateY(-3px);
    background:linear-gradient(135deg,#5c7ea4,#3d5d80);
    color:white;
    box-shadow:0 10px 20px rgba(61,93,128,0.35);
}

.menu-item:hover .icon-box{
    background:rgba(255,255,255,0.2);
}

.logo h1{
    line-height:1;
    margin: 25px;
}

</style>