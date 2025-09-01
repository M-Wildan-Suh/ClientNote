<x-layout.app>
    <div class=" w-full px-4">
        <div class=" w-full max-w-xl mx-auto pt-6 sm:pt-8 space-y-4 sm:space-y-6">
            <div x-data="{ modal: false }" class="">
                <button @click="modal = !modal"
                    class=" w-full py-2 rounded-md font-semibold bg-white hover:bg-[#feedb6] text-[#edb328] border border-[#edb328] duration-300">Tambah
                    Note</button>
                <div x-show="modal" class=" fixed inset-0 flex justify-center items-center bg-black/20 p-4 z-50">
                    <div
                        class=" w-full max-w-xl bg-white border border-[#edb328] rounded-md divide-y divide-[#edb328] overflow-hidden">
                        <div
                            class=" flex items-center justify-between text-[#edb328] bg-[#feedb6] text-base sm:text-lg font-semibold pt-4 px-4 pb-2">
                            <p>Tambah Note</p>
                            <button @click="modal = !modal" class=" w-4 sm:w-5 aspect-square text-[#edb328]">
                                <svg viewBox="0 0 36 36" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"
                                    enable-background="new 0 0 36 36">
                                    <g id="icons">
                                        <path
                                            d="M6.2 3.5 3.5 6.2c-.7.7-.7 1.9 0 2.7l9.2 9.2-9.2 9.2c-.7.7-.7 1.9 0 2.7l2.6 2.6c.7.7 1.9.7 2.7 0l9.2-9.2 9.2 9.2c.7.7 1.9.7 2.7 0l2.6-2.6c.7-.7.7-1.9 0-2.7L23.3 18l9.2-9.2c.7-.7.7-1.9 0-2.7l-2.6-2.6c-.7-.7-1.9-.7-2.7 0L18 12.7 8.8 3.5c-.7-.7-1.9-.7-2.6 0z"
                                            id="close_1_" fill="currentColor" class="fill-222a30"></path>
                                    </g>
                                </svg>
                            </button>
                        </div>
                        <form action="{{route('webnote.store')}}" method="POST">
                            @csrf
                            <div class="text-sm sm:text-base p-4 space-y-4">
                                <div class=" space-y-2">
                                    <label for="website">Pilih Website</label>
                                    <select name="domain_name" id="website" required
                                        class=" text-sm sm:text-base w-full py-1 focus:border-[#edb328] focus:ring-[#edb328] duration-300 rounded-md overflow-hidden">
                                        <option value="" selected disabled>Pilih Website</option>
                                        @foreach ($domain as $item)
                                            <option value="{{ $item->nama_domain }}">{{ $item->nama_domain }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class=" space-y-2">
                                    <label for="website">Keterangan</label>
                                    <textarea required id="keterangan" data-autoresize oninput="autoResizeTextarea(this)" placeholder="Masukkan Keterangan"
                                        class=" min-h-7 sm:min-h-8 resize-none text-sm sm:text-base w-full py-1 focus:border-[#edb328] focus:ring-[#edb328] duration-300 rounded-md overflow-hidden"
                                        name="description" id="" rows="1"></textarea>
                                    </div>
                                    <button
                                        class=" w-full py-1 text-sm sm:text-base rounded-md font-semibold bg-white hover:bg-[#feedb6] text-[#edb328] border border-[#edb328] duration-300">Tambah
                                        Note</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class=" w-full">
                <form action="{{route('dashboard')}}" method="GET">
                    <div class=" w-full flex justify-end">
                        <div class=" flex gap-2 items-center">
                            <div class=" min-w-4 sm:min-w-5 w-4 sm:w-5 aspect-square overflow-hidden">
                                <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><g data-name="Layer 2"><path d="M28 9H11a1 1 0 0 1 0-2h17a1 1 0 0 1 0 2ZM7 9H4a1 1 0 0 1 0-2h3a1 1 0 0 1 0 2ZM21 17H4a1 1 0 0 1 0-2h17a1 1 0 0 1 0 2ZM11 25H4a1 1 0 0 1 0-2h7a1 1 0 0 1 0 2Z" fill="currentColor" class="fill-000000"></path><path d="M9 11a3 3 0 1 1 3-3 3 3 0 0 1-3 3Zm0-4a1 1 0 1 0 1 1 1 1 0 0 0-1-1ZM23 19a3 3 0 1 1 3-3 3 3 0 0 1-3 3Zm0-4a1 1 0 1 0 1 1 1 1 0 0 0-1-1ZM13 27a3 3 0 1 1 3-3 3 3 0 0 1-3 3Zm0-4a1 1 0 1 0 1 1 1 1 0 0 0-1-1Z" fill="currentColor" class="fill-000000"></path><path d="M28 17h-3a1 1 0 0 1 0-2h3a1 1 0 0 1 0 2ZM28 25H15a1 1 0 0 1 0-2h13a1 1 0 0 1 0 2Z" fill="currentColor" class="fill-000000"></path></g><path d="M0 0h32v32H0z" fill="none"></path></svg>
                            </div>
                            <select class=" text-sm sm:text-base max-w-24 sm:max-w-32 w-auto py-0.5 sm:py-1 focus:border-[#edb328] focus:ring-[#edb328] duration-300 rounded-full overflow-hidden" name="nama_domain" id="">
                                <option value="all">All</option>
                                @foreach ($domain as $item)
                                    <option value="{{ $item->nama_domain }}">{{ $item->nama_domain }}</option>
                                @endforeach
                            </select>
                            <button class="w-full px-2 py-0.5 sm:py-1 text-sm sm:text-base rounded-full font-semibold bg-white hover:bg-[#feedb6] text-[#edb328] border border-[#edb328] duration-300">Cari</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class=" w-full grid grid-cols-2 gap-2 sm:gap-4">
                @foreach ($data as $item) 
                    <div x-data="{ modal: false, initialDomain: '{{ $item->domain_name }}', initialDesc: @js($item->description), 
                            currentDomain: '{{ $item->domain_name }}', currentDesc: @js($item->description),
                            isChanged() {
                                return this.currentDomain !== this.initialDomain || this.currentDesc !== this.initialDesc;
                            }
                        }">
                        <form class=" w-full h-full" action="{{route('webnote.update', ['webnote' => $item->id])}}" method="POST">
                            @csrf
                            @method('put')    
                            <div
                                class=" flex flex-col w-full h-full overflow-hidden rounded-md bg-white border border-[#edb328] divide-y divide-[#edb328] shadow-md shadow-black/20">
                                <div
                                    class=" flex justify-between text-black bg-[#feedb6] text-sm sm:text-lg font-semibold pt-2 px-2 sm:pt-4 sm:px-4 pb-2">
                                    <select class=" w-full max-w-full bg-transparent border-none focus:border-none focus:ring-0 py-0 pl-0" name="domain_name" id="dname-{{$item->id}}" x-model="currentDomain">
                                        @foreach ($domain as $ditem)
                                            <option value="{{ $ditem->nama_domain }}" {{$ditem->nama_domain === $item->domain_name ? 'selected' : ''}}>{{ $ditem->nama_domain }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class=" flex flex-col flex-grow gap-1 justify-between text-xs sm:text-base pt-1 pb-2 px-2 sm:pb-4 sm:px-4">
                                    <textarea id="keterangan" data-autoresize oninput="autoResizeTextarea(this)" name="description" id=""
                                        placeholder="Masukkan Keterangan..." rows="1" x-model="currentDesc"
                                        class=" text-xs sm:text-base w-full p-0 overflow-hidden resize-none border-none ring-0 focus:border-none focus:ring-0">{{$item->description}}</textarea>
                                    <div class=" w-full flex justify-end gap-2">
                                        <button @click="modal = !modal" type="button" class=" w-7 aspect-square p-1.5 overflow-hidden rounded-full font-semibold bg-white hover:bg-red-200 text-red-500 border border-red-500 duration-300">
                                            <svg viewBox="0 0 24 24" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24"><path d="M18.9 8H5.1c-.6 0-1.1.5-1 1.1l1.6 13.1c.1 1 1 1.7 2 1.7h8.5c1 0 1.9-.7 2-1.7l1.6-13.1c.1-.6-.3-1.1-.9-1.1zM20 2h-5c0-1.1-.9-2-2-2h-2C9.9 0 9 .9 9 2H4c-1.1 0-2 .9-2 2v1c0 .6.4 1 1 1h18c.6 0 1-.4 1-1V4c0-1.1-.9-2-2-2z" fill="currentColor" class="fill-000000"></path></svg>
                                        </button>
                                        <a href="https://{{$item->domain_name}}" target="__blank">
                                            <button @click="modal = !modal" type="button" class=" w-7 aspect-square p-1.5 overflow-hidden rounded-full font-semibold bg-white hover:bg-blue-200 text-blue-500 border border-blue-500 duration-300">
                                                <svg viewBox="0 0 640 512" xmlns="http://www.w3.org/2000/svg"><path d="M598.6 41.41C570.1 13.8 534.8 0 498.6 0s-72.36 13.8-99.96 41.41l-43.36 43.36c15.11 8.012 29.47 17.58 41.91 30.02 3.146 3.146 5.898 6.518 8.742 9.838l37.96-37.96C458.5 72.05 477.1 64 498.6 64c20.67 0 40.1 8.047 54.71 22.66 14.61 14.61 22.66 34.04 22.66 54.71s-8.049 40.1-22.66 54.71l-133.3 133.3C405.5 343.1 386 352 365.4 352s-40.1-8.048-54.71-22.66C296 314.7 287.1 295.3 287.1 274.6s8.047-40.1 22.66-54.71l4.44-3.49c-2.1-3.9-4.3-7.9-7.5-11.1-8.6-8.6-19.9-13.3-32.1-13.3-11.93 0-23.1 4.664-31.61 12.97-30.71 53.96-23.63 123.6 22.39 169.6C293 402.2 329.2 416 365.4 416c36.18 0 72.36-13.8 99.96-41.41L598.6 241.3c28.45-28.45 42.24-66.01 41.37-103.3-.87-35.9-14.57-69.84-41.37-96.59zM234 387.4l-37.9 37.9C181.5 439.1 162 448 141.4 448c-20.67 0-40.1-8.047-54.71-22.66-14.61-14.61-22.66-34.04-22.66-54.71s8.049-40.1 22.66-54.71l133.3-133.3C234.5 168 253.1 160 274.6 160s40.1 8.048 54.71 22.66c14.62 14.61 22.66 34.04 22.66 54.71s-8.047 40.1-22.66 54.71l-3.51 3.52c2.094 3.939 4.219 7.895 7.465 11.15C341.9 315.3 353.3 320 365.4 320c11.93 0 23.1-4.664 31.61-12.97 30.71-53.96 23.63-123.6-22.39-169.6C346.1 109.8 310.8 96 274.6 96c-36.2 0-72.3 13.8-99.9 41.4L41.41 270.7C13.81 298.3 0 334.48 0 370.66c0 36.18 13.8 72.36 41.41 99.97C69.01 498.2 105.2 512 141.4 512c36.18 0 72.36-13.8 99.96-41.41l43.36-43.36c-15.11-8.012-29.47-17.58-41.91-30.02-3.21-3.11-5.91-6.51-8.81-9.81z" fill="currentColor" class="fill-000000"></path></svg>
                                            </button>
                                        </a>
                                        <button :disabled="!isChanged()" 
                                            :class="!isChanged() ? 'opacity-50 cursor-not-allowed text-neutral-600 border-neutral-600' : 'hover:bg-[#feedb6] text-[#edb328] border-[#edb328]'" 
                                            class=" w-7 aspect-square p-1.5 overflow-hidden rounded-full font-semibold bg-white border duration-300">
                                            <svg viewBox="0 0 24 24" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24"><path d="M20 6h-6.8c-.8 0-1.4-.4-1.8-1.1l-.9-1.8c-.3-.7-1-1.1-1.7-1.1H4C1.8 2 0 3.8 0 6v12c0 2.2 1.8 4 4 4h5c.6 0 1-.4 1-1v-4H8.8c-.9 0-1.3-1.1-.7-1.7l3.2-3.2c.4-.4 1-.4 1.4 0l3.2 3.2c.6.6.2 1.7-.7 1.7H14v4c0 .6.4 1 1 1h5c2.2 0 4-1.8 4-4v-8c0-2.2-1.8-4-4-4z" fill="currentColor" class="fill-000000"></path></svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form> 
                        <div x-show="modal" class=" fixed inset-0 flex justify-center items-center bg-black/20 p-4">
                            <div
                                class=" w-full max-w-xl bg-white border border-[#edb328] rounded-md divide-y divide-[#edb328] overflow-hidden">
                                <div
                                    class=" flex items-center justify-between text-[#edb328] bg-[#feedb6] text-base sm:text-lg font-semibold pt-4 px-4 pb-2">
                                    <p>Hapus Note</p>
                                    <button @click="modal = !modal" class=" w-4 sm:w-5 aspect-square text-[#edb328]">
                                        <svg viewBox="0 0 36 36" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"
                                            enable-background="new 0 0 36 36">
                                            <g id="icons">
                                                <path
                                                    d="M6.2 3.5 3.5 6.2c-.7.7-.7 1.9 0 2.7l9.2 9.2-9.2 9.2c-.7.7-.7 1.9 0 2.7l2.6 2.6c.7.7 1.9.7 2.7 0l9.2-9.2 9.2 9.2c.7.7 1.9.7 2.7 0l2.6-2.6c.7-.7.7-1.9 0-2.7L23.3 18l9.2-9.2c.7-.7.7-1.9 0-2.7l-2.6-2.6c-.7-.7-1.9-.7-2.7 0L18 12.7 8.8 3.5c-.7-.7-1.9-.7-2.6 0z"
                                                    id="close_1_" fill="currentColor" class="fill-222a30"></path>
                                            </g>
                                        </svg>
                                    </button>
                                </div>
                                <form action="{{route('webnote.destroy', ['webnote' => $item->id])}}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <div class=" p-4 space-y-4">
                                        <p>Apakah anda yakain ingin <span class=" text-red-500">menghapus</span> note : <span class=" font-semibold">{{$item->domain_name}}</span></p>
                                        <button
                                            class=" w-full py-1 text-sm sm:text-base rounded-md font-semibold bg-white hover:bg-[#feedb6] text-[#edb328] border border-[#edb328] duration-300">Hapus Note</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <script>
        function autoResizeTextarea(el) {
            el.style.height = 'auto'; // Reset height
            el.style.height = el.scrollHeight + 'px'; // Set new height based on content
        }

        document.addEventListener('DOMContentLoaded', function() {
            // Inisialisasi untuk semua textarea yang ingin diatur otomatis
            const textareas = document.querySelectorAll('textarea[data-autoresize]');

            textareas.forEach(function(textarea) {
                autoResizeTextarea(textarea); // Atur tinggi awal
            });
        });
    </script>
    @include('components.admin.success')
    @include('components.admin.validationerror')
</x-layout.app>
