<div x-data="{ isOpen: false }" class=" flex sm:hidden">
    <div class=" fixed bottom-4 left-0 w-full px-4 z-40">
        <div class=" w-full rounded-full bg-white shadow-md shadow-black/20 py-2 px-3 text-xs grid grid-cols-3 border border-neutral-300">
            <div class=" flex justify-center relative">
                <button @click="isOpen = !isOpen" class=" aspect-square rounded-full duration-300 text-white p-1.5"
                :class="isOpen ? ' bg-byolink-3 rotate-90' : 'bg-byolink-1'">
                    <svg viewBox="0 0 32 32" class=" w-auto h-auto" xmlns="http://www.w3.org/2000/svg"><path d="M12 4H6a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2Zm0 8H6V6h6ZM26 4h-6a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2Zm0 8h-6V6h6ZM12 18H6a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2v-6a2 2 0 0 0-2-2Zm0 8H6v-6h6ZM26 18h-6a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2v-6a2 2 0 0 0-2-2Zm0 8h-6v-6h6Z" fill="currentColor" class="fill-000000"></path><path data-name="<Transparent Rectangle>" d="M0 0h32v32H0z" fill="none"></path></svg>
                </button>
            </div>
            <form method="POST" class=" w-full" action="{{ route('logout') }}">
                <div class=" flex flex-col items-center text-byolink-1 hover:text-byolink-3 duration-300">
                    @csrf
                    <button id="logout" class=" w-6 aspect-square">
                        <svg viewBox="0 0 24 24" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24"><g id="_icons"><path d="M20.9 11.6c-.1-.1-.1-.2-.2-.3l-3-3c-.4-.4-1-.4-1.4 0s-.4 1 0 1.4l1.3 1.3H13c-.6 0-1 .4-1 1s.4 1 1 1h4.6l-1.3 1.3c-.4.4-.4 1 0 1.4.2.2.5.3.7.3s.5-.1.7-.3l3-3c.1-.1.2-.2.2-.3.1-.3.1-.5 0-.8z" fill="currentColor" class="fill-000000"></path><path d="M15.5 18.1c-1.1.6-2.3.9-3.5.9-3.9 0-7-3.1-7-7s3.1-7 7-7c1.2 0 2.4.3 3.5.9.5.3 1.1.1 1.4-.4.3-.5.1-1.1-.4-1.4C15.1 3.4 13.6 3 12 3c-5 0-9 4-9 9s4 9 9 9c1.6 0 3.1-.4 4.5-1.2.5-.3.6-.9.4-1.4-.3-.4-.9-.6-1.4-.3z" fill="currentColor" class="fill-000000"></path></g></svg>
                    </button>
                    <label for="logout">Logout</label>
                </div>
            </form>
        </div>
    </div>
    <div 
        class="fixed w-[calc(100vw-32px)] bg-white shadow-md shadow-black/20 bottom-[44px] rounded-t-md z-10 transition-all duration-300 overflow-hidden border border-neutral-300"
        :class="isOpen ? ' h-48 pb-7' : 'h-0'">
        <div class=" grid grid-cols-2 p-4 gap-4 text-sm">
        </div>
    </div>
</div>