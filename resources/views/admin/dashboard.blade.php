<x-layout.app title="SharePro - Dashboard">
    <div class=" w-full px-4 pb-20">
        <div class=" w-full max-w-xl mx-auto pt-6 sm:pt-8 space-y-4 sm:space-y-6">
            <div x-data="{ modal: false }" class="">
                <button @click="modal = !modal"
                    class=" w-full py-2 rounded-md font-semibold bg-white hover:bg-[#0A2342] hover:text-white text-[#0A2342] border border-[#0A2342] duration-300">Tambah
                    Note</button>
                <div x-show="modal" class=" fixed inset-0 flex justify-center items-center bg-black/20 p-4 z-50">
                    <div
                        class=" w-full max-w-xl bg-white border border-[#0A2342] rounded-md divide-y divide-[#0A2342] overflow-hidden">
                        <div
                            class=" flex items-center justify-between text-white bg-[#0A2342] text-base sm:text-lg font-semibold pt-4 px-4 pb-2">
                            <p>Tambah Note</p>
                            <button @click="modal = !modal" class=" w-4 sm:w-5 aspect-square text-white">
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
                        <form action="{{ route('webnote.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="text-sm sm:text-base p-4 space-y-4">
                                <div class=" space-y-2">
                                    <label for="title">Subjek</label>
                                    <input type="text" name="title" id="title" placeholder="Masukkan Subject"
                                        class=" text-sm sm:text-base w-full py-1 focus:border-[#0A2342] focus:ring-[#0A2342] duration-300 rounded-md overflow-hidden"
                                        required>
                                </div>
                                <div class=" flex flex-col gap-2">
                                    <label for="descripiton">Keterangan (Opsional)</label>
                                    <textarea id="description" data-autoresize oninput="autoResizeTextarea(this)" placeholder="Masukkan Keterangan"
                                        class=" min-h-7 sm:min-h-8 resize-none text-sm sm:text-base w-full py-1 focus:border-[#0A2342] focus:ring-[#0A2342] duration-300 rounded-md overflow-hidden"
                                        name="description" id="" rows="1"></textarea>
                                </div>
                                <div x-data="{ fileName: '' }" class="flex flex-col gap-2">
                                    <label for="image">Gambar</label>

                                    <label for="image"
                                        class="text-sm sm:text-base w-full py-1 px-2 border rounded-md overflow-hidden duration-300 cursor-pointer"
                                        :class="fileName
                                            ?
                                            'border-[#0A2342] text-black' :
                                            'border-[#6b7280] text-[#6b7280]'">
                                        <span x-text="fileName ? `📁 ${fileName}` : 'Masukkan Gambar'"></span>
                                    </label>
                                    <input type="file" name="image" id="image" class="hidden"
                                        @change="fileName = $event.target.files.length ? $event.target.files[0].name : ''">
                                </div>
                                <div class=" space-y-2">
                                    <label for="no_tlp">No. Telephone</label>
                                    <input type="number" name="mo_tlp" id="no_tlp"
                                        placeholder="Masukkan No Telephone"
                                        class=" text-sm sm:text-base w-full py-1 focus:border-[#0A2342] focus:ring-[#0A2342] duration-300 rounded-md overflow-hidden">
                                </div>
                                <div class=" space-y-2">
                                    <label>Status</label>
                                    <div class=" w-full grid grid-cols-3 gap-1">
                                        <div class=" flex">
                                            <input type="radio" name="status" id="stat-new" value="Prospek Baru"
                                                checked class="peer hidden">
                                            <label for="stat-new"
                                                class=" w-full text-center text-sm sm:text-base py-1 border border-[#0A2342] peer-checked:bg-[#0A2342] peer-checked:text-white duration-300 rounded-md">Prospek
                                                Baru</label>
                                        </div>
                                        <div class=" flex">
                                            <input type="radio" name="status" id="stat-progress" value="Progress"
                                                class="peer hidden">
                                            <label for="stat-progress"
                                                class=" w-full text-center text-sm sm:text-base py-1 border border-[#0A2342] peer-checked:bg-[#0A2342] peer-checked:text-white duration-300 rounded-md">Progress</label>
                                        </div>
                                        <div class=" flex">
                                            <input type="radio" name="status" id="stat-done" value="Selesai"
                                                class="peer hidden">
                                            <label for="stat-done"
                                                class=" w-full text-center text-sm sm:text-base py-1 border border-[#0A2342] peer-checked:bg-[#0A2342] peer-checked:text-white duration-300 rounded-md">Selesai</label>
                                        </div>
                                    </div>
                                </div>
                                <button
                                    class=" w-full py-1 text-sm sm:text-base rounded-md font-semibold bg-white hover:bg-[#0A2342] hover:text-white text-[#0A2342] border border-[#0A2342] duration-300">Tambah
                                    Note</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class=" w-full">
                <form action="{{ route('dashboard') }}" method="GET">
                    <div class="w-full flex justify-end">
                        <div class="flex gap-2 items-center">
                            <select
                                class="text-sm sm:text-base max-w-24 sm:max-w-32 w-auto py-0.5 sm:py-1 focus:border-[#0A2342] focus:ring-[#0A2342] duration-300 rounded-full overflow-hidden"
                                name="cari">
                                <option value="all" {{ request('cari') == 'all' ? 'selected' : '' }}>All</option>
                                <option value="Prospek Baru" {{ request('cari') == 'Prospek Baru' ? 'selected' : '' }}>Prospek Baru</option>
                                <option value="Progress" {{ request('cari') == 'Progress' ? 'selected' : '' }}>Progress</option>
                                <option value="Selesai" {{ request('cari') == 'Selesai' ? 'selected' : '' }}>Selesai</option>
                                <option value="Cancel" {{ request('cari') == 'Cancel' ? 'selected' : '' }}>Cancel</option>
                            </select>
                            <button
                                class="w-full px-2 py-0.5 sm:py-1 text-sm sm:text-base rounded-full font-semibold bg-white hover:bg-[#0A2342] hover:text-white text-[#0A2342] border border-[#0A2342] duration-300">
                                Cari
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class=" w-full grid grid-cols-2 gap-2 sm:gap-4">
                @foreach ($data as $item)
                    <div x-data="{ modal: false, deletemodal: false }">
                        <div
                            class=" flex flex-col w-full h-full overflow-hidden rounded-md bg-white border border-[#0A2342] divide-y divide-[#0A2342] shadow-md shadow-black/20">
                            <div
                                class=" flex justify-between bg-[#0A2342] text-white text-sm sm:text-lg font-semibold pt-2 px-2 sm:pt-4 sm:px-4 pb-2">
                                <a href="{{ route('note', ['id' => $item->id]) }}">{{ $item->title }}</a>
                            </div>
                            <div
                                class=" flex flex-col flex-grow gap-2 justify-between text-xs sm:text-base pt-1 pb-2 px-2 sm:pb-4 sm:px-4">
                                <p>{{ $item->description }}</p>
                                {{-- <textarea id="keterangan" data-autoresize oninput="autoResizeTextarea(this)" name="description" id=""
                                        placeholder="Masukkan Keterangan..." rows="1" x-model="currentDesc"
                                        class=" text-xs sm:text-base w-full p-0 overflow-hidden resize-none border-none ring-0 focus:border-none focus:ring-0">{{ $item->description }}</textarea> --}}
                                @if ($item->image)
                                    <a data-fancybox="gallery" aria-label="Gallery"
                                        href="{{ asset('/storage/images/note/' . $item->image) }}"
                                        class="flex w-full">
                                        <button
                                            class=" text-xs sm:text-sm text-neutral-600 hover:text-black duration-300 flex items-center gap-1">
                                            <p>Lihat Gambar</p>
                                            <div class=" w-4 h-4 -rotate-90">
                                                <svg class=" w-full h-full feather feather-chevron-down"
                                                    fill="none" stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <polyline points="6 9 12 15 18 9" />
                                                </svg>
                                            </div>
                                        </button>
                                    </a>
                                @endif
                                {{-- <div class="w-full rounded-md bg-black overflow-hidden">
                                    <img src="{{ asset('/storage/images/note/' . $item->image) }}" alt="">
                                </div> --}}
                                <div class=" flex flex-col gap-2">
                                    <div class=" w-full flex justify-end">
                                        <div class=" text-xs px-2 py-1 rounded-full border border-[#0A2342]">
                                            {{ $item->status }}</div>
                                    </div>
                                    <div class=" w-full flex justify-end gap-2">
                                        <button @click="deletemodal = !deletemodal" type="button"
                                            class=" w-7 aspect-square p-1.5 overflow-hidden rounded-full font-semibold bg-white hover:bg-red-200 text-red-500 border border-red-500 duration-300">
                                            <svg viewBox="0 0 24 24" xml:space="preserve"
                                                xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24">
                                                <path
                                                    d="M18.9 8H5.1c-.6 0-1.1.5-1 1.1l1.6 13.1c.1 1 1 1.7 2 1.7h8.5c1 0 1.9-.7 2-1.7l1.6-13.1c.1-.6-.3-1.1-.9-1.1zM20 2h-5c0-1.1-.9-2-2-2h-2C9.9 0 9 .9 9 2H4c-1.1 0-2 .9-2 2v1c0 .6.4 1 1 1h18c.6 0 1-.4 1-1V4c0-1.1-.9-2-2-2z"
                                                    fill="currentColor" class="fill-000000"></path>
                                            </svg>
                                        </button>
                                        <div x-data="{ copied: false, original: '{{ route('note', ['id' => $item->id]) }}' }" class=" relative">
                                            <button type="button"
                                                @click="navigator.clipboard.writeText(original).then(() => { 
                                                    copied = true; 
                                                    setTimeout(() => copied = false, 1000); 
                                                })"
                                                class=" w-7 aspect-square p-1 overflow-hidden rounded-full font-semibold bg-white hover:bg-blue-200 text-blue-500 border border-blue-500 duration-300">
                                                <svg fill="none" class=" w-full h-full" viewBox="0 0 24 24"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M5.5028 4.62704L5.5 6.75V17.2542C5.5 19.0491 6.95507 20.5042 8.75 20.5042L17.3663 20.5045C17.0573 21.3782 16.224 22.0042 15.2444 22.0042H8.75C6.12665 22.0042 4 19.8776 4 17.2542V6.75C4 5.76929 4.62745 4.93512 5.5028 4.62704ZM17.75 2C18.9926 2 20 3.00736 20 4.25V17.25C20 18.4926 18.9926 19.5 17.75 19.5H8.75C7.50736 19.5 6.5 18.4926 6.5 17.25V4.25C6.5 3.00736 7.50736 2 8.75 2H17.75Z"
                                                        fill="currentColor" />
                                                </svg>
                                            </button>
                                            <div x-show="copied"
                                                class=" absolute bottom-full mb-1 left-1/2 -translate-x-1/2 text-xs px-2 py-0.5 rounded-full bg-gray-800 text-white">
                                                Disalin</div>
                                        </div>
                                        <a href="https://wa.me/{{ $item->no_tlp }}" target="__blank">
                                            <button @click="modal = !modal" type="button"
                                                {{ $item->no_tlp ? '' : 'disabled' }}
                                                class=" {{ $item->no_tlp ? 'bg-white hover:bg-green-200 text-green-500 border-green-500' : 'bg-white text-neutral-500 border-neutral-500' }} w-7 border aspect-square p-1 overflow-hidden rounded-full font-semibold duration-300">
                                                <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <g>
                                                        <path d="M0 0h24v24H0z" fill="none" />
                                                        <path fill="currentColor"
                                                            d="M2.004 22l1.352-4.968A9.954 9.954 0 0 1 2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10a9.954 9.954 0 0 1-5.03-1.355L2.004 22zM8.391 7.308a.961.961 0 0 0-.371.1 1.293 1.293 0 0 0-.294.228c-.12.113-.188.211-.261.306A2.729 2.729 0 0 0 6.9 9.62c.002.49.13.967.33 1.413.409.902 1.082 1.857 1.971 2.742.214.213.423.427.648.626a9.448 9.448 0 0 0 3.84 2.046l.569.087c.185.01.37-.004.556-.013a1.99 1.99 0 0 0 .833-.231c.166-.088.244-.132.383-.22 0 0 .043-.028.125-.09.135-.1.218-.171.33-.288.083-.086.155-.187.21-.302.078-.163.156-.474.188-.733.024-.198.017-.306.014-.373-.004-.107-.093-.218-.19-.265l-.582-.261s-.87-.379-1.401-.621a.498.498 0 0 0-.177-.041.482.482 0 0 0-.378.127v-.002c-.005 0-.072.057-.795.933a.35.35 0 0 1-.368.13 1.416 1.416 0 0 1-.191-.066c-.124-.052-.167-.072-.252-.109l-.005-.002a6.01 6.01 0 0 1-1.57-1c-.126-.11-.243-.23-.363-.346a6.296 6.296 0 0 1-1.02-1.268l-.059-.095a.923.923 0 0 1-.102-.205c-.038-.147.061-.265.061-.265s.243-.266.356-.41a4.38 4.38 0 0 0 .263-.373c.118-.19.155-.385.093-.536-.28-.684-.57-1.365-.868-2.041-.059-.134-.234-.23-.393-.249-.054-.006-.108-.012-.162-.016a3.385 3.385 0 0 0-.403.004z"
                                                            fill-rule="nonzero" />
                                                    </g>
                                                </svg>
                                            </button>
                                        </a>
                                        <button @click="modal = !modal"
                                            class=" w-7 aspect-square p-1.5 overflow-hidden hover:bg-[#0A2342] hover:text-white text-[#0A2342] border-[#0A2342] rounded-full font-semibold bg-white border duration-300">
                                            <svg viewBox="0 0 24 24" xml:space="preserve"
                                                xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24">
                                                <path
                                                    d="M20 6h-6.8c-.8 0-1.4-.4-1.8-1.1l-.9-1.8c-.3-.7-1-1.1-1.7-1.1H4C1.8 2 0 3.8 0 6v12c0 2.2 1.8 4 4 4h5c.6 0 1-.4 1-1v-4H8.8c-.9 0-1.3-1.1-.7-1.7l3.2-3.2c.4-.4 1-.4 1.4 0l3.2 3.2c.6.6.2 1.7-.7 1.7H14v4c0 .6.4 1 1 1h5c2.2 0 4-1.8 4-4v-8c0-2.2-1.8-4-4-4z"
                                                    fill="currentColor" class="fill-000000"></path>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div x-show="modal"
                            class=" fixed inset-0 flex justify-center items-center bg-black/20 p-4 z-50">
                            <div
                                class=" w-full max-w-xl bg-white border border-[#0A2342] rounded-md divide-y divide-[#0A2342] overflow-hidden">
                                <div
                                    class=" flex items-center justify-between text-white bg-[#0A2342] text-base sm:text-lg font-semibold pt-4 px-4 pb-2">
                                    <p>Edit Note</p>
                                    <button @click="modal = !modal" class=" w-4 sm:w-5 aspect-square text-white">
                                        <svg viewBox="0 0 36 36" xml:space="preserve"
                                            xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 36 36">
                                            <g id="icons">
                                                <path
                                                    d="M6.2 3.5 3.5 6.2c-.7.7-.7 1.9 0 2.7l9.2 9.2-9.2 9.2c-.7.7-.7 1.9 0 2.7l2.6 2.6c.7.7 1.9.7 2.7 0l9.2-9.2 9.2 9.2c.7.7 1.9.7 2.7 0l2.6-2.6c.7-.7.7-1.9 0-2.7L23.3 18l9.2-9.2c.7-.7.7-1.9 0-2.7l-2.6-2.6c-.7-.7-1.9-.7-2.7 0L18 12.7 8.8 3.5c-.7-.7-1.9-.7-2.6 0z"
                                                    id="close_1_" fill="currentColor" class="fill-222a30"></path>
                                            </g>
                                        </svg>
                                    </button>
                                </div>
                                <form action="{{ route('webnote.update', ['webnote' => $item->id]) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('put')
                                    <div class="text-sm sm:text-base p-4 space-y-4">
                                        <div class=" space-y-2">
                                            <label for="title">Subjek</label>
                                            <input type="text" name="title" id="title"
                                                placeholder="Masukkan Subject" value="{{ $item->title }}"
                                                class=" text-sm sm:text-base w-full py-1 focus:border-[#0A2342] focus:ring-[#0A2342] duration-300 rounded-md overflow-hidden"
                                                required>
                                        </div>
                                        <div class=" flex flex-col gap-2">
                                            <label for="descripiton">Keterangan (Opsional)</label>
                                            <textarea id="description" data-autoresize oninput="autoResizeTextarea(this)" placeholder="Masukkan Keterangan"
                                                class=" min-h-7 sm:min-h-8 resize-none text-sm sm:text-base w-full py-1 focus:border-[#0A2342] focus:ring-[#0A2342] duration-300 rounded-md overflow-hidden"
                                                name="description" id="" rows="1">{{ $item->description }}</textarea>
                                        </div>
                                        <div x-data="{ fileName: '{{ $item->image }}' }" class="flex flex-col gap-2">
                                            <label for="image-{{ $item->id }}">Gambar</label>

                                            <label for="image-{{ $item->id }}"
                                                class="text-sm sm:text-base w-full py-1 px-2 border rounded-md overflow-hidden duration-300 cursor-pointer"
                                                :class="fileName
                                                    ?
                                                    'border-[#0A2342] text-black' :
                                                    'border-[#6b7280] text-[#6b7280]'">
                                                <span x-text="fileName ? `📁 ${fileName}` : 'Masukkan Gambar'"></span>
                                            </label>
                                            <input type="file" name="image" id="image-{{ $item->id }}"
                                                class="hidden"
                                                @change="fileName = $event.target.files.length ? $event.target.files[0].name : ''">
                                        </div>
                                        <div class=" space-y-2">
                                            <label for="no_tlp">No. Telephone</label>
                                            <input type="text" name="no_tlp" id="no_tlp"
                                                placeholder="Masukkan No Telephone" value="{{ $item->no_tlp }}"
                                                class=" text-sm sm:text-base w-full py-1 focus:border-[#0A2342] focus:ring-[#0A2342] duration-300 rounded-md overflow-hidden">
                                        </div>
                                        <div class=" space-y-2">
                                            <label>Status</label>
                                            <div class=" w-full grid grid-cols-2 sm:grid-cols-4 gap-1">
                                                <div class=" flex">
                                                    <input type="radio" name="status" id="stat-new"
                                                        {{ $item->status === 'Prospek Baru' ? 'checked' : '' }}
                                                        value="Prospek Baru" class="peer hidden">
                                                    <label for="stat-new"
                                                        class=" w-full text-center text-sm sm:text-base py-1 border border-[#0A2342] peer-checked:bg-[#0A2342] peer-checked:text-white duration-300 rounded-md">Prospek
                                                        Baru</label>
                                                </div>
                                                <div class=" flex">
                                                    <input type="radio" name="status" id="stat-progress"
                                                        {{ $item->status === 'Progress' ? 'checked' : '' }}
                                                        value="Progress" class="peer hidden">
                                                    <label for="stat-progress"
                                                        class=" w-full text-center text-sm sm:text-base py-1 border border-[#0A2342] peer-checked:bg-[#0A2342] peer-checked:text-white duration-300 rounded-md">Progress</label>
                                                </div>
                                                <div class=" flex">
                                                    <input type="radio" name="status" id="stat-done"
                                                        {{ $item->status === 'Selesai' ? 'checked' : '' }}
                                                        value="Selesai" class="peer hidden">
                                                    <label for="stat-done"
                                                        class=" w-full text-center text-sm sm:text-base py-1 border border-[#0A2342] peer-checked:bg-[#0A2342] peer-checked:text-white duration-300 rounded-md">Selesai</label>
                                                </div>
                                                <div class=" flex">
                                                    <input type="radio" name="status" id="stat-cancel"
                                                        {{ $item->status === 'Cancel' ? 'checked' : '' }}
                                                        value="Cancel" class="peer hidden">
                                                    <label for="stat-cancel"
                                                        class=" w-full text-center text-sm sm:text-base py-1 border border-[#0A2342] peer-checked:bg-[#0A2342] peer-checked:text-white duration-300 rounded-md">Cancel</label>
                                                </div>
                                            </div>
                                        </div>
                                        <button
                                            class=" w-full py-1 text-sm sm:text-base rounded-md font-semibold bg-white hover:bg-[#0A2342] hover:text-white text-[#0A2342] border border-[#0A2342] duration-300">Edit
                                            Note</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div x-show="deletemodal"
                            class=" fixed inset-0 flex justify-center items-center bg-black/20 p-4">
                            <div
                                class=" w-full max-w-xl bg-white border border-[#0A2342] rounded-md divide-y divide-[#0A2342] overflow-hidden">
                                <div
                                    class=" flex items-center justify-between text-white bg-[#0A2342] text-base sm:text-lg font-semibold pt-4 px-4 pb-2">
                                    <p>Hapus Note</p>
                                    <button @click="deletemodal = !deletemodal"
                                        class=" w-4 sm:w-5 aspect-square text-white">
                                        <svg viewBox="0 0 36 36" xml:space="preserve"
                                            xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 36 36">
                                            <g id="icons">
                                                <path
                                                    d="M6.2 3.5 3.5 6.2c-.7.7-.7 1.9 0 2.7l9.2 9.2-9.2 9.2c-.7.7-.7 1.9 0 2.7l2.6 2.6c.7.7 1.9.7 2.7 0l9.2-9.2 9.2 9.2c.7.7 1.9.7 2.7 0l2.6-2.6c.7-.7.7-1.9 0-2.7L23.3 18l9.2-9.2c.7-.7.7-1.9 0-2.7l-2.6-2.6c-.7-.7-1.9-.7-2.7 0L18 12.7 8.8 3.5c-.7-.7-1.9-.7-2.6 0z"
                                                    id="close_1_" fill="currentColor" class="fill-222a30"></path>
                                            </g>
                                        </svg>
                                    </button>
                                </div>
                                <form action="{{ route('webnote.destroy', ['webnote' => $item->id]) }}"
                                    method="POST">
                                    @csrf
                                    @method('delete')
                                    <div class=" p-4 space-y-4">
                                        <p>Apakah anda yakain ingin <span class=" text-red-500">menghapus</span> note :
                                            <span class=" font-semibold">{{ $item->title }}</span>
                                        </p>
                                        <button
                                            class=" w-full py-1 text-sm sm:text-base rounded-md font-semibold bg-white hover:bg-[#0A2342] hover:text-white text-[#0A2342] border border-[#0A2342] duration-300">Hapus
                                            Note</button>
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

            Fancybox.bind("[data-fancybox]", {});

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
