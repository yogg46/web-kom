@extends('layouts.main')

@section('isi')


    <div class="row">
        <div class="col-12">
            <div class="card">
                
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="display min-w850">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Aplikasi</th>
                                    <th>OPD</th>
                                    <th>Status</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td> <strong>Rumah Baca</strong></td>
                                    <td>Dinas Kominfo Kab. Magetan</td>
                                    <td>
                                        <div class="dropdown bootstrap-select form-control default-select">
                                            <select class="form-control default-select" id="sel1" tabindex="-98">
                                            <option>Maintenance</option>
                                            <option>Perbaikan</option>
                                            <option>Tidak Aktif</option>
                                            </select>
                                        </div>
                                    </td>

                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td> <strong> Baca</strong></td>
                                    <td>Dinas Kominfo Kab. Magetan</td>
                                    <td>
                                        <div class="dropdown bootstrap-select form-control default-select">
                                            <select class="form-control default-select" id="sel1" tabindex="-98">
                                            <option>Maintenance</option>
                                            <option>Perbaikan</option>
                                            <option>Tidak Aktif</option>
                                            </select>
                                        </div>
                                    </td>

                                </tr>

                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Aplikasi</th>
                                    <th>OPD</th>
                                    <th>Status</th>

                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
@push('css')
<link href="/asset/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
@endpush
@push('js')
<script src="/asset/vendor/datatables/js/jquery.dataTables.min.js"></script>
<script src="/asset/js/plugins-init/datatables.init.js"></script>
@endpush
