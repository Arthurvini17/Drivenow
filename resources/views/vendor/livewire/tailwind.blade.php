<div class="overflow-x-hidden truncate join">
    @foreach (range(1, $paginator->lastPage()) as $page)
    <button wire:click="gotoPage({{ $page }})" class="text-white btn"
        class="join-item btn  w-10   {{ $paginator->currentPage() == $page ? 'btn-active' : '' }}">
        {{ $page }}
    </button>
    @endforeach
</div>