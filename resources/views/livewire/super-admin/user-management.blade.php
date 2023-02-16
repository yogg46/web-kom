<div>
    <div class="row">

        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Exam Toppers</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-responsive-md">
                            <thead>
                                <tr>

                                    <th class="width50" >No.</th>
                                    <th>Nama User</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($user as $key)
                                    <tr>
                                        
                                        <td><strong>1</strong></td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                {{-- <div class="rounded-lg mr-2 text-bg-primary text-primary badge-circle badge badge-light ">
                                                {{ Str::substr(Auth::user()->name, 0, 2) }}
                                            </div> --}}
                                                <span class="w-space-no">{{ $key->name }}</span>
                                            </div>
                                        </td>
                                        <td>{{ $key->email }}</td>
                                        <td>{{ $key->role }}</td>
                                        <td>
                                            <div class="d-flex align-items-center"><i
                                                    class="fa fa-circle text-success mr-1"></i> {{ $key->status }}
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i
                                                        class="fa fa-pencil"></i></a>
                                                <a href="#" class="btn btn-danger shadow btn-xs sharp"><i
                                                        class="fa fa-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach


                            </tbody>

                        </table>



                        <nav>
                            <ul class="pagination pagination-sm pagination-gutter pagination-info">
                                <li class="page-item page-indicator">
                                    <a class="page-link" href="javascript:void(0)">
                                        <i class="la la-angle-left"></i></a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="javascript:void(0)">1</a>
                                </li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">4</a></li>
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
