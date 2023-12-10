<div
    x-data = "{ show : false}"
    x-show = "show"
    x-on:open-modal.window="show = true"
    x-on:close-modal.window="show = false"
    x-on:keydown.escape.window = "show = false"

    class="fixed z-50 inset-0">
    <div class="fixed inset-0 bg-gray-300 opacity-40"></div>

    {{-- Modal Body --}}
    <div class="bg-white rounded m-auto fixed inset-0 max-w-2xl" style="max-height:500px">
        <div>
            <button x-on:click="$dispatch('close-modal')"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
              </svg>
            </button>
        </div>
        <div>
            {{$body }}
        </div>
    </div>
</div>