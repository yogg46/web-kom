<div>

    <div class="page-header-search">
        <form>

            <input type="text" placeholder="Search" wire:model.debounce.500ms='search'>
            <button type="button" wire:click.prefetch='cari'>
                <i class="fas fa-search" wire:loading.remove wire:target="cari"></i>
                <i class="fa fa-spinner spinning" wire:loading wire:target="cari"></i>


            </button>

        </form>

    </div>
</div>
