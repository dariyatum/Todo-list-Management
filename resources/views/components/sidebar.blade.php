<div class="w-[270px] min-h-screen bg-[#f3f3f7] border-r border-gray-200 p-4">

    {{-- Logo --}}
    <div class="logo mb-10 text-center">
        <h1 class="text-[38px] font-medium text-black">
            Todo List
        </h1>
    </div>

    {{-- Navigation --}}
    <nav class="space-y-4">

        {{-- Dashboard --}}
        <a href="#"
           class=" hello flex items-center gap-3 bg-[#e6b868] px-4 py-3 rounded-full text-[20px] text-black font-normal hover:scale-[1.02] transition ">

            {{-- Home Icon --}}
            <svg xmlns="http://www.Todo List
w3.org/2000/svg"
                 fill="none"
                 viewBox="0 0 24 24"
                 stroke-width="1.8"
                 stroke="currentColor"
                 class="w-6 h-6">

                <path stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M2.25 12 11.204 3.046a1.125 1.125 0 0 1 1.592 0L21.75 12M4.5 9.75V19.5A1.5 1.5 0 0 0 6 21h3.75v-4.5h4.5V21H18a1.5 1.5 0 0 0 1.5-1.5V9.75" />
            </svg>

            <span class="aa">Dashboard</span>
        </a>

        {{-- Tasks --}}
        <a href="#"
           class=" task flex items-center gap-3 bg-[#516b86] px-4 py-3 rounded-full text-[20px] text-black font-normal hover:scale-[1.02] transition">

            {{-- Clipboard Icon --}}
            <svg xmlns="http://www.w3.org/2000/svg"
                 fill="none"
                 viewBox="0 0 24 24"
                 stroke-width="1.8"
                 stroke="currentColor"
                 class="w-6 h-6">

                <path stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M9 5.25H7.5A2.25 2.25 0 0 0 5.25 7.5v10.5A2.25 2.25 0 0 0 7.5 20.25h9A2.25 2.25 0 0 0 18.75 18V7.5A2.25 2.25 0 0 0 16.5 5.25H15M9 5.25A2.25 2.25 0 0 1 11.25 3h1.5A2.25 2.25 0 0 1 15 5.25M9 5.25A2.25 2.25 0 0 0 11.25 7.5h1.5A2.25 2.25 0 0 0 15 5.25" />
            </svg>

            <span class="aa a2">My Tasks</span>
        </a>

    </nav>

</div>
<style>
.hello{
    background-color:#e6b868 ;
    margin-bottom: 10px;
    padding:5px 10px;
    

}
.task:hover{
    background-color: #516b86;
    color: white;
    transition: 0.4s;
}
.task{
    background-color:#9bc4f0;
    
    margin-bottom: 10px;
    padding:5px 10px;
}
.hello:hover{
    background-color: #896c3c;
    color: white;
    transition: 0.4s;
    
}
.logo{
    margin: 20px;
    font-size: 20px;
}

</style>