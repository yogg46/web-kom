<div>

    {{-- <div class="col-12"> --}}
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Edit Antrian</h4>
            </div>
            <div class="card-body">
                {{-- <div class="card-content"> --}}
                    <div class="nestable">
                        <div class="dd" style="max-width: 100%;">
                            <ul class="dd-list" wire:sortable="updateSort" wire:sortable-group="items"
                                id="sortable-list" wire:sortable-stop="confirmUpdate">
                                @foreach ($items as $item)
                                <li wire:sortable.item="{{ $item->id }}" wire:key="item-{{ $item->id }}"
                                    class="dd-item">
                                    <div wire:sortable.handle class="">
                                        <div class="widget-stat card bg-primary">
                                            <div class="card-body p-4">
                                                <div class="media">
                                                    <span class="mr-3">
                                                        {{ $item->no_urut }}
                                                        {{-- <i class="la la-user"></i> --}}
                                                    </span>
                                                    <div class="media-body text-white">
                                                        <p class="mb-1">{{ $item->R_OPD->nama_opd }}</p>
                                                        <h3 class="text-white mb-2">{{ $item->nama_aplikasi }}</h3>
                                                        <div class="progress  bg-primary">
                                                            <div class="progress-bar progress-animated bg-light"
                                                                style="width: 50%"></div>
                                                        </div>
                                                        <small>{{ $item->progres }}% </small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                @endforeach


                            </ul>
                        </div>
                    </div>
                    {{--
                </div> --}}
            </div>
        </div>
        {{--
    </div> --}}

    @push('css')
    {{--
    <link href="/asset/vendor/nestable2/css/jquery.nestable.min.css" rel="stylesheet"> --}}
    @endpush

    @push('js')
    <script src="https://cdn.jsdelivr.net/gh/livewire/sortable@v0.x.x/dist/livewire-sortable.js"></script>
    <script>
        const sortableList = document.getElementById('sortable-list');
        new Sortable(sortableList, {
            animation: 150,
        });


        Livewire.on('swal:confirm', function (data) {
            Swal.fire({
                icon: data.type,
                title: data.title,
                text: data.text,
                showCancelButton: true,
                confirmButtonText: 'Yes',
                cancelButtonText: 'No',
            }).then((result) => {
                if (result.value) {
                    Livewire.emit('updateSort', data.id);
                }
            });
        });
    </script>
    <!-- Nestable -->
    {{-- <script src="/asset/vendor/nestable2/js/jquery.nestable.min.js"></script> --}}

    {{-- <script>
        (function ($) {
    "use strict"



    var e = function (e) {
        var t = e.length ? e : $(e.target),
            a = t.data("output");
        window.JSON ? a.val(window.JSON.stringify(t.nestable("serialize"))) : a.val("JSON browser support required for this demo.")
    };
    $("#nestable").nestable({
            group: 1
        }).on("change", e),
        $("#nestable2").nestable({
            group: 1
        }).on("change", e), e($("#nestable").data("output", $("#nestable-output"))), e($("#nestable2").data("output", $("#nestable2-output"))), $("#nestable-menu").on("click", function (e) {
            var t = $(e.target).data("action");
            "expand-all" === t && $(".dd").nestable("expandAll"), "collapse-all" === t && $(".dd").nestable("collapseAll")
        }), $("#nestable3").nestable();



        })(jQuery);
    </script> --}}

    @endpush
</div>
