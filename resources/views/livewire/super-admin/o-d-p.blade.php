<div>
    <div class="row">

        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <div class="input-group search-area d-xl-inline-flex d-none">
                        <input type="text" wire:model="search" class="form-control" placeholder="Search here...">
                        <div class="input-group-append">
                            <span class="input-group-text"><a href="javascript:void(0)"><i
                                        class="flaticon-381-search-2"></i></a></span>
                        </div>
                    </div>

                        <div class="form-group">
                            <select wire:model="select" class="form-control form-control-lg  " wire:change="resetPage">
                                <option value="1">Semua</option>
                                <option value="2">Desa</option>
                                <option value="3">OPD</option>
                            </select>
                        </div>

                        @if ($select == 2)


                        <div class="form-group">
                            <select wire:model="desa" class="form-control form-control-lg default-select "  wire:change="resetPage">
                                @foreach ($desaa->unique() as $key  )
                                <option value="{{ $key }}">{{ $key }}</option>

                                @endforeach
                            </select>
                        </div>

                        @endif

                    {{-- <h4 class="card-title font-weight-bold"></h4> --}}

                    <div class=" card-action">
                        <button type="button" class="btn btn-rounded btn-info">
                            <span class="btn-icon-left text-info"><i class="fa fa-plus color-info"></i>
                            </span>Tambah OPD</button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-responsive-md">
                            <thead>
                                <th>NO.</th>
                                <th>Nama OPD</th>
                                <th>Email</th>
                                <th>Contact Person</th>
                                <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no = ($OPD->currentpage() - 1) * $OPD->perpage() + 1;
                                @endphp
                                @foreach ($OPD as $item)

                                <tr>
                                    <td><strong>{{ $no++ }}</strong></td>
                                    <td>{{ $item->nama_opd }}</td>
                                    <td>{{ $item->email ?? "Belum Dinput" }}</td>
                                    <td>{{ $item->no_telp ?? "Belum Dinput" }}</td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i
                                                class="fa fa-eye "></i></a>
                                            <a href="#" class="btn btn-info shadow btn-xs sharp mr-1"><i
                                                class="fa fa-pencil"></i></a>
                                                <a href="#" class="btn btn-danger shadow btn-xs sharp"><i
                                                    class="fa fa-trash"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                @endforeach


                            </tbody>
                        </table>

                    </div>
                </div>

                <div class=" card-footer">
                    <div>
                        <nav class="float-left ">
                            <p>Menampilkan {{ $OPD->firstItem() }} sampai {{ $OPD->lastItem() }} dari {{ $OPD->total() }} daftar</p>
                        </nav>
                    </div>
                    {{ $OPD->onEachSide(1)->links('layouts.halaman') }}
                </div>

            </div>
        </div>
    </div>
</div>
