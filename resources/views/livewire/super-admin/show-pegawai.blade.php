<div>
    <div class="row">
        <div class="col-lg-12">
            <div class="profile card card-body px-3 pt-3 pb-0">
                <div class="profile-head">
                    <div class="photo-content">
                        <div class="cover-photo"></div>
                    </div>
                    <div class="profile-info">
                        <div class="profile-photo">
                            {{-- <img src="images/profile/profile.png" class="img-fluid rounded-circle" alt=""> --}}
                            @if (!empty($pegawai->avatar) && Storage::exists('public/' . $pegawai->avatar))
                                <img src="{{ Storage::url($pegawai->avatar) }}" class=" img-fluid  rounded-circle" alt=""
                                   >
                            @else
                            <img src="/asset/images/profile/profile.png" class="img-fluid rounded-circle" alt="">

                            @endif
                        </div>
                        <div class="profile-details">
                            <div class="profile-name px-3 pt-2">
                                <h3 class="text-primary mb-0">{{ $pegawai->name }}</h3>
                                <p>{{ $pegawai->role }}</p>
                            </div>
                            <div class="profile-email px-2 pt-2">
                                <h4 class="text-muted mb-2">{{ $pegawai->email }}</h4>
                                <p style="text-transform: capitalize"><i
                                    class="fa fa-circle {{ $pegawai->status == 'aktif' ? 'text-success' : 'text-danger' }}  mr-1"></i>
                                {{ $pegawai->status }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">

        <div class="col-12">
            <div class="card">
                <div class="card-header">
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
                                            colspan="1" style="width: 140px;">Tim</th>
                                        <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1"
                                            colspan="1" style="width: 75px;">Tgl Mulai</th>
                                        <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1"
                                            colspan="1" style="width: 75px;">Tgl Selesai</th>
                                        <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1"
                                            colspan="1" style="width: 180px;">Deskripsi Aplikasi</th>
                                        <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1"
                                            colspan="1" style="width: 50px;">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <tbody>
                                    <tr role="row" class="odd">
                                        <td>1</td>
                                        <td> <strong> antrian@magetan.go.id </strong></td>
                                        <td>Disdukcapil Magetan</td>
                                        <td><span class="badge-rounded badge-success text-bold">LOW</span></td>
                                        <td></td>
                                        <td>2009/06/4</td>
                                        <td>2009/08/4</td>
                                        <td>Aplikasi untuk antrian</td>
                                        <td><span class="badge light badge-secondary">
                                                Proses
                                            </span></td>
                                    </tr>
                                </tbody>

                                <tr role="row" class="odd">
                                    <td>2</td>
                                    <td> <strong> pelatihan.DTS@magetan.go.id </strong></td>
                                    <td>Diskominfo Magetan</td>
                                    <td><span class="badge light badge-danger text-bold">URGENT</span></td>
                                    <td></td>
                                    <td>2009/06/25</td>
                                    <td>2009/08/10</td>
                                    <td>Aplikasi untuk pendaftaran dan informasi pelatihan DTS</td>
                                    <td><span class="badge light badge-info">
                                            Selesai
                                        </span></td>
                                </tr>
                                </tbody>
                            </table>
                            <div class="dataTables_info" id="example4_info" role="status" aria-live="polite">
                                Menampilkan 1 sampai 10 dari 30 daftar</div>
                            <div class="float-right">

                                <nav>
                                    <ul class="pagination pagination-sm pagination-gutter pagination-info">
                                        <li class="page-item page-indicator">
                                            <a class="page-link" href="javascript:void(0)">
                                                <i class="la la-angle-left"></i></a>
                                        </li>
                                        <li class="page-item active"><a class="page-link"
                                                href="javascript:void(0)">1</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0)">4</a>
                                        </li>
                                        <li class="page-item page-indicator">
                                            <a class="page-link" href="javascript:void(0)">
                                                <i class="la la-angle-right"></i></a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
