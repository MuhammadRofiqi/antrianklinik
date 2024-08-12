<div>
    <div class="container">
        <div class="card mt-3" style="height: 550px">
            <div class="card-body">
                <div class="card-title">Daftar Pengguna</div>

                @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert"> {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                @include('livewire.dashboard.pengguna.createPengguna')

                <div class="row">
                    <div class="col-md-3">
                        <div class="mb-3">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#createPengguna">Tambah Pengguna</button>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="mb-3">
                            <select wire:model="role_id" class="form-control">
                                <option value="">Semua Role</option>
                                <option value="1">Admin</option>
                                <option value="2">Pasien</option>
                            </select>
                        </div>
                    </div>

                        <div class="col">
                            <div class="input-group mb-3">
                                <input wire:model="search" type="search" class="form-control" placeholder="Cari Nama Pengguna"
                                    aria-label="Recipient's username" aria-describedby="button-addon2">
                            </div>
                        </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="table_id">
                                <thead>
                                    <tr style="text-align: center">
                                        <th scope="col">No</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Role</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $key => $item)
                                        <tr style="text-align: center">
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->email }}</td>
                                            <td>@if ($item->role_id === 1)
                                                <span class="badge bg-success">Admin</span>
                                            @else
                                                <span class="badge bg-primary">pasien</span>
                                            @endif</td>
                                            <td>
                                                <a class="btn btn-warning" wire:click="editPengguna({{ $item->id }})"
                                                    role="button" data-bs-toggle="modal" data-bs-target="#editPengguna"><i
                                                        class="bi bi-pencil"></i></a>
                                                <button type="button" class="btn btn-danger"
                                                    wire:click="deletePengguna({{ $item->id }})" role="button"
                                                    data-bs-toggle="modal" data-bs-target="#deletePengguna"><i
                                                        class="bi bi-trash"></i></button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            @include('livewire.dashboard.pengguna.editPengguna')
            @include('livewire.dashboard.pengguna.deletePengguna')
        </div>
    </div>
</div>
