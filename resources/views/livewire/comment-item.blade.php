<div class="flex mb-3 gap-3">
    <div class="w-12 h-12 items-center flex justify-center bg-gray-200 rounded-full">
        <svg fill="none" width="30" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z">
            </path>
        </svg>
    </div>

    <div>
        <div>
            <a href="#" class="font-semibold text-indigo-600">
                {{ $comment->user->name }}
            </a>
            - <span class="text-gray-500">{{ $comment->created_at->diffForHumans() }}</span>
        </div>
        <div class="text-gray-700">
            {{ $comment->comment }}

        </div>
        <div>
            <a href="#" class="text-indigo-600 text-sm mr-3"> Répondre </a>
            @if (Auth::id() == $comment->user_id)
                <a href="#" class="text-blue-600 text-sm mr-3"> Modifier </a>

                <a href="#" wire:click.prevent="deleteComment" class="text-red-600 text-sm"> Supprimer </a>
            @endif
        </div>
    </div>
</div>
