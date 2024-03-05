<aside  class="fixed bg-white md:translate-x-0 md:static w-full md:min-w-20 md:max-w-60 min-h-screen shadow-xl ease-in-out duration-200" :class="{ 'md:w-0 -translate-x-full': !open }"> <!-- for mobile responsive: change -translate-x-full -> translate-x-0 -->
            <div class="sticky top-20 md:top-0">
                <div class="flex items-center justify-center min-h-20" >
                    <h1 class="font-bold text-2xl" :class="{'text-sm': open}">Dialer</h1>
                </div>
                <nav class="flex">
                    <ul class="w-4/5 md:w-full m-auto">
                        <li class=" hover:bg-black hover:text-white">
                            <div class="">
                                <a href="{{route('dashboard')}}" class="h-full m-auto flex items-center gap-3 p-3" :class="{'md:justify-center w-full': !open}">
                                    <i class="w-5 fa-solid fa-home"></i>
                                    <span class="text-sm" :class="{'md:hidden': !open}">Dashboard</span>
                                </a>
                            </div>
                        </li>
                        <li class="overflow-hidden" x-data="{open_campaign:false}">
                            <div class="hover:bg-black hover:text-white">
                                <button @click="open_campaign = !open_campaign" class="w-full h-full m-auto flex justify-between items-center gap-3 p-3">
                                    <div class="flex items-center gap-3" :class="{'md:justify-center w-full': !open}">
                                        <i class="w-5 fa-solid fa-bullhorn"></i>
                                        <span class="text-sm" :class="{'md:hidden':!open}">Campaigns</span>
                                    </div>
                                    <div :class="{'md:hidden':!open}">
                                        <i x-show="!open_campaign" class="fa-solid fa-angle-down"></i>
                                        <i x-show="open_campaign" class="fa-solid fa-angle-up"></i>
                                    </div>
                                </button>
                            </div>
                            <ul class="h-auto w-4/5 m-auto" :class="{'h-0':!open_campaign}">
                                <li class="flex">
                                    <a href="{{route('dashboard')}}" class="p-2 px-4">
                                        <span class="text-sm">Sample SubMenu</span>
                                    </a>
                                </li>
                                <li class="flex">
                                    <a href="{{route('dashboard')}}" class="p-2 px-4">
                                        <span class="text-sm">Sample SubMenu</span>
                                    </a>
                                </li>
                                <li class="flex">
                                    <a href="{{route('dashboard')}}" class="p-2 px-4">
                                        <span class="text-sm">Sample SubMenu</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class=" overflow-hidden" x-data="{open_contacts:false}">
                            <div @click="open_contacts = !open_contacts" class="hover:bg-black hover:text-white">
                                <button class="w-full h-full m-auto flex justify-between items-center gap-3 p-3">
                                    <div class="flex items-center gap-3" :class="{'md:justify-center w-full': !open}">
                                        <i class="w-5 fa-solid fa-phone"></i>
                                        <span class="text-sm" :class="{'md:hidden':!open}">Contacts</span>
                                    </div>
                                    <div :class="{'md:hidden':!open}">
                                        <i x-show="!open_contacts" class="fa-solid fa-angle-down"></i>
                                        <i x-show="open_contacts" class="fa-solid fa-angle-up"></i>
                                    </div>
                                </button>
                            </div>
                            <ul class="h-auto w-4/5 m-auto" :class="{'h-0': !open_contacts}"> <!-- change h-auto -> h-0 for closing drop-down -->
                                <li class="flex">
                                    <a href="" class="p-2 px-4">
                                        <span class="text-sm">Sample SubMenu</span>
                                    </a>
                                </li>
                                <li class="flex">
                                    <a href="" class="p-2 px-4">
                                        <span class="text-sm">Sample SubMenu</span>
                                    </a>
                                </li>
                                <li class="flex">
                                    <a href="" class="p-2 px-4">
                                        <span class="text-sm">Sample SubMenu</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class=" overflow-hidden" x-data="{open_messages:false}">
                            <div class="hover:bg-black hover:text-white">
                                <button @click="open_messages = !open_messages" class="w-full h-full m-auto flex justify-between items-center gap-3 p-3">
                                    <div class="flex items-center gap-3" :class="{'md:justify-center w-full': !open}">
                                        <i class="w-5 fa-solid fa-message"></i>
                                        <span class="text-sm" :class="{'md:hidden':!open}">Messages</span>
                                    </div>
                                    <div :class="{'md:hidden':!open}">
                                    <i x-show="!open_messages" class="fa-solid fa-angle-down"></i>
                                    <i x-show="open_messages" class="fa-solid fa-angle-up"></i>
                                    </div>
                                </button>
                            </div>
                            <ul class="h-auto w-4/5 m-auto" :class="{'h-0':!open_messages}"> <!-- change h-auto -> h-0 for closing drop-down -->
                                <li class="flex">
                                    <a href="" class="p-2 px-4">
                                        <span class="text-sm">Sample SubMenu</span>
                                    </a>
                                </li>
                                <li class="flex">
                                    <a href="" class="p-2 px-4">
                                        <span class="text-sm">Sample SubMenu</span>
                                    </a>
                                </li>
                                <li class="flex">
                                    <a href="" class="p-2 px-4">
                                        <span class="text-sm">Sample SubMenu</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="overflow-hidden" x-data="{open_admin:false}">
                            <div class="hover:bg-black hover:text-white">
                                <button @click="(open_admin = !open_admin)" class="w-full h-full m-auto flex justify-between items-center gap-3 p-3">
                                    <div class="flex items-center gap-3" :class="{'md:justify-center w-full': !open}">
                                        <i class="w-5 fa-solid fa-users-gear"></i>
                                        <span class=" text-sm" :class="{'md:hidden':!open}">Administration</span>
                                    </div>
                                    <div class=""  :class="{'md:hidden':!open}">
                                        <i x-show="!open_admin" class="fa-solid fa-angle-down"></i>
                                        <i x-show="open_admin" class="fa-solid fa-angle-up"></i>
                                    </div>
                                </button>
                            </div>
                            <ul class="h-auto w-full m-auto ease-in-out duration-200" :class="{'h-0':!open_admin}"> <!-- change h-auto -> h-0 for closing drop-down -->
                                <li class="flex ">
                                    <a href="" class="w-full p-2 pl-11">
                                        <span class="text-sm">User Management</span>
                                    </a>
                                </li>
                                <li class="flex">
                                    <a href="" class="w-full p-2 pl-11">
                                        <span class="text-sm">Agents / Extensions</span>
                                    </a>
                                </li>
                                <li class="flex">
                                    <a href="" class="w-full p-2 pl-11" >
                                        <span class="text-sm">Gateways</span>
                                    </a>
                                </li>
                                <li class="flex">
                                    <a href="" class="w-full p-2 pl-11">
                                        <span class="text-sm">System Configuration</span>
                                    </a>
                                </li>
                                <li class="flex">
                                    <a href="" class="w-full p-2 pl-11">
                                        <span class="text-sm">Backup</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="overflow-hidden" x-data="{open_myaccount: false}">
                            <div class="hover:bg-black hover:text-white">
                                <button @click="open_myaccount = !open_myaccount" class="w-full h-full m-auto flex justify-between items-center gap-3 p-3">
                                    <div class="flex items-center gap-3" :class="{'md:justify-center w-full': !open}">
                                        <i class="w-5 fa-solid fa-user"></i>
                                        <span class="text-sm" :class="{'md:hidden':!open}">My Account</span>
                                    </div>
                                    <div  :class="{'md:hidden':!open}">
                                        <i x-show="!open_myaccount" class="fa-solid fa-angle-down"></i>
                                        <i x-show="open_myaccount" class="fa-solid fa-angle-up"></i>
                                    </div>
                                </button>
                            </div>
                            <ul class="h-auto w-4/5 m-auto" :class="{'h-0':!open_myaccount}"> <!-- change h-auto -> h-0 for closing drop-down -->
                                <li class="flex">
                                    <a href="" class="p-2 px-4">
                                        <span class="text-sm">Sample SubMenu</span>
                                    </a>
                                </li>
                                <li class="flex">
                                    <a href="" class="p-2 px-4">
                                        <span class="text-sm">Sample SubMenu</span>
                                    </a>
                                </li>
                                <li class="flex">
                                    <a href="" class="p-2 px-4">
                                        <span class="text-sm">Sample SubMenu</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>