@extends('layouts.main')
@section('isi')
<div class="row">

    <div class="col-12">
        <div class="card">
            {{-- <div class="card-header">
            </div> --}}
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="display min-w850">
                        <thead>
                            <tr role="row">
                                <th  >No.</th>
                                <th  >Aplikasi</th>
                                <th    >Deskripsi BUG</th>
                                <th class="width180">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                                <tr>
                                        <td>1</td>
                                        <td> <strong> antrian@magetan.go.id </strong></td>
                                        <td> <p class=" text-justify">

                                            Aplikasi untuk antrian Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eget nisl dapibus, cursus libero eu, pharetra sem. Pellentesque mollis sem tellus, vel tristique neque congue in. Praesent faucibus mollis velit sit amet laoreet. Donec at lacus eget turpis pharetra finibus. Sed ultricies eleifend leo at tincidunt. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Maecenas a lorem metus. Fusce congue, massa ac imperdiet elementum, enim sapien scelerisque nibh, luctus tempor nulla odio eu turpis. In molestie justo augue. Nullam accumsan felis ut nunc commodo commodo. Aenean augue enim, vehicula ut turpis vel, consectetur varius leo.</td>
                                        </p>
                                        <td>
                                            <div class="d-flex justify-content-between">

                                                <button type="button" class="btn light btn-md btn-danger">Develop</button>
                                                <button type="button" class="btn light btn-md btn-success">Selesai</button>
                                            </div>
                                        </td>
                                </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th  >No.</th>
                                        <th  >Aplikasi</th>
                                        <th    >Deskripsi BUG</th>
                                        <th    >Action</th>
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
