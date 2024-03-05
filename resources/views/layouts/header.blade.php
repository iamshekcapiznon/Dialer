<header class="sticky top-0 flex items-center w-full h-full min-h-20 max-h-20 bg-black overflow-hidden">
                <header class="w-4/5 md:w-[98%] m-auto h-full flex justify-between items-center">
                    <button @click="open = !open" class="z-10 max-w-10 max-h-10">
                        <img src="/icons/menu.svg" class="" alt="">
                    </button>
                    <div x-data="{dropdown: false}" class="z-10">
                        <button @click="dropdown = !dropdown" class="text-white font-semibold">
                            <span>{{auth()->user()->name}}</span>
                            <span>
                                <i x-show="!dropdown" class="fa-solid fa-angle-down"></i>
                                <i x-show="dropdown" class="fa-solid fa-angle-up"></i>
                            </span>
                        </button>
                        <ul class="fixed right-0 w-full max-w-32 top-20 -z-10 rounded-b-md shadow-xl font-semibold" :class="{'block':dropdown, 'hidden':!dropdown}">
                            <li class="w-full h-full max-w-60 m-auto">
                                <a href="{{route('profile.edit')}}" class="w-full h-full block  text-black  p-2 hover:bg-black hover:text-white ease-in-out">
                                    <span>Profile</span>
                                </a>
                            </li>
                            <li class="max-w-60 w-full m-auto">
                                <form action="{{route('logout')}}" method="POST">
                                    @method("POST")
                                    @csrf
                                    <button class="text-left w-full h-full block text-black  p-2 rounded-b-md hover:bg-black hover:text-white ease-in-out">
                                        <span>Logout</span>
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </div>
                    
                </header>
            </header>