<div>


    <div wire:ignore.self class="modal fade" id="tambahUser">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content ">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah User</h5>
                    <button type="button" wire:click.prevent="resetInput" class="close"
                        data-dismiss="modal"><span>&times;</span>
                    </button>
                </div>
                <form action="" wire:submit.prevent="save">

                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="nama">Nama </label>
                            <div class=" @error('name') input-warning-o @enderror ">
                                <input wire:model='name' type="text" class="form-control" id="nama"
                                    placeholder="Nama" required="">
                                @error('name')
                                    <div class="invalid-feedback d-block">
                                        {{ $message }}
                                    </div>
                                @enderror

                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="email">Email </label>
                            <div class=" @error('email') input-warning-o @enderror ">
                                <input wire:model="email" type="text" class="form-control" id="email"
                                    placeholder="Email" required="">
                                @error('email')
                                    <div class="invalid-feedback d-block">
                                        {{ $message }}
                                    </div>
                                @enderror

                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="role">Role </label>
                            <div class="form-group  @error('role') input-warning-o @enderror">
                                <select wire:model="role" id="role" class="form-control default-select">
                                    <option>Role</option>
                                    <option value="Super Admin">Super Admin</option>
                                    <option value="Project Manager">Project Manager</option>
                                </select>
                            </div>
                            @error('role')
                                <div class="invalid-feedback d-block">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" wire:click.prevent="resetInput" class="btn btn-danger light"
                            data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <div wire:ignore.self class="modal fade" id="editUser">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content ">
                <div class="modal-header">
                    <h5 class="modal-title">Edit User</h5>
                    <button wire:click.prevent="resetInput" type="button" class="close"
                        data-dismiss="modal"><span>&times;</span>
                    </button>
                </div>
                <form action="" wire:submit.prevent="update">

                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="nama">Nama </label>
                            <div class=" @error('name') input-warning-o @enderror ">
                                <input wire:model='name' type="text" class="form-control" id="nama"
                                    placeholder="Nama" required="">
                                @error('name')
                                    <div class="invalid-feedback d-block">
                                        {{ $message }}
                                    </div>
                                @enderror

                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="email">Email </label>
                            <div class=" @error('email') input-warning-o @enderror ">
                                <input wire:model="email" type="text" class="form-control" id="email"
                                    placeholder="Email" required="">
                                @error('email')
                                    <div class="invalid-feedback d-block">
                                        {{ $message }}
                                    </div>
                                @enderror

                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="role">Role </label>
                            <div class="form-group  @error('role') input-warning-o @enderror">
                                <select wire:model="role" class="form-control default-select">
                                    <option>Role</option>
                                    <option value="Super Admin">Super Admin</option>
                                    <option value="Project Manager">Project Manager</option>
                                </select>
                            </div>
                            @error('role')
                                <div class="invalid-feedback d-block">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="status">Status </label>
                            <div class="form-group  @error('status') input-warning-o @enderror">
                                <select wire:model="status" class="form-control default-select">
                                    <option>Status</option>
                                    <option value="aktif">Aktif</option>
                                    <option value="tidak aktif">Tidak Aktif</option>
                                </select>
                            </div>
                            @error('status')
                                <div class="invalid-feedback d-block">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" wire:click.prevent="resetInput" class="btn btn-danger light"
                            data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>

            </div>
        </div>
    </div>


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
                    <div class=" card-action">
                        <button type="button" class="btn btn-rounded btn-success " data-toggle="modal"
                            data-target="#tambahUser"><span class="btn-icon-left text-info"><i
                                    class="fa fa-plus  text-success"></i>
                            </span>Tambah User</button>
                    </div>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-responsive-md">
                            <thead>
                                <tr>

                                    <th class="width50">No.</th>
                                    <th>Nama User</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no = ($user->currentpage() - 1) * $user->perpage() + 1;

                                @endphp
                                @foreach ($user as $key)
                                    <tr>

                                        <td><strong>{{ $no++ }}</strong></td>
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
                                                    class="fa fa-circle {{ $key->status == 'aktif' ? 'text-success' : 'text-danger' }}  mr-1"></i>
                                                {{ $key->status }}
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <a wire:click.prevent="edit({{ $key->id }})"
                                                    class="btn btn-primary shadow btn-xs sharp mr-1"
                                                    data-toggle="modal" data-target="#editUser"><i
                                                        class="fa fa-pencil"></i></a>
                                                <a wire:click.prevent="konfimasiReset({{ $key->id }})"
                                                    class="btn btn-warning shadow btn-xs sharp mr-1"><i
                                                        class=" fa fa-repeat "></i></a>
                                                <a wire:click.prevent="konfimasiDEL({{ $key->id }})"
                                                    class="btn btn-danger shadow btn-xs sharp"><i
                                                        class="fa fa-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach


                            </tbody>

                        </table>








                    </div>
                </div>

                <div class="card-footer">
                    <nav class="float-right">
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
