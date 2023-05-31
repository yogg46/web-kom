<div>
    <div class="d-flex flex-wrap mb-2 align-items-center justify-content-between">


        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="input-group search-area d-xl-inline-flex d-none">
                        <input type="text" class="form-control" placeholder="cari project">
                        <div class="input-group-append">
                            <span class="input-group-text"><a href="javascript:void(0)"><i
                                        class="flaticon-381-search-2"></i></a></span>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <div id="example4_wrapper" class="dataTables_wrapper no-footer">
                            <table id="example4" class="display min-w850 dataTable no-footer" role="grid"
                                aria-describedby="example4_info">
                                <thead>
                                    <tr role="row">
                                        <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1"
                                            colspan="1" style="width: 75px;">No.</th>
                                        <th class="sorting_desc" tabindex="0" aria-controls="example4" rowspan="1"
                                            colspan="1" style="width: 152px;" aria-sort="descending">Project</th>
                                        <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1"
                                            colspan="1" style="width: 150px;">OPD</th>
                                        <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1"
                                            colspan="1" style="width: 105px;">Prioritas</th>

                                        <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1"
                                            colspan="1" style="width: 75px;">Tgl Mulai</th>
                                        <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1"
                                            colspan="1" style="width: 75px;">Tgl Selesai</th>
                                        <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1"
                                            colspan="1" style="width: 180px;">Deskripsi BUG</th>
                                        <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1"
                                            colspan="1" style="width: 50px;">Status</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @php
                                    $no =($pengaduan->currentpage() - 1) * $pengaduan->perpage() + 1;
                                    @endphp
                                    @foreach ($pengaduan as $item )

                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td> <strong> {{ $item->nama_pengaduan }} </strong></td>
                                        <td>{{ $item->R_Aplikasi->R_OPD->nama_opd }}</td>
                                        <td><span class="badge-rounded badge-danger text-bold">URGENT</span></td>

                                        <td>{{ $item->tgl_mulai->format('d/m/Y') }}</td>
                                        <td>{{ isset($item->tgl_selesai) ? $item->tgl_selesai->format('d/m/Y') : '' }}
                                        </td>
                                        <td>{{ $item->deskripsi }}</td>
                                        <td><span class="badge light badge-info">
                                                {{ $item->status }}
                                            </span></td>
                                    </tr>
                                    @endforeach

                                </tbody>





                            </table>
                        </div>
                        {{-- <div class="dataTables_info" id="example4_info" role="status" aria-live="polite">
                            Menampilkan 1
                            sampai 10 dari 30 daftar</div> --}}
                        <nav class="float-left ">
                            <p>Menampilkan {{ $pengaduan->firstItem() }} sampai {{ $pengaduan->lastItem() }} dari {{
                                $pengaduan->total()
                                }} daftar</p>
                        </nav>

                        {{ $pengaduan->onEachSide(0)->links('layouts.halaman') }}
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
