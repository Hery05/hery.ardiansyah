<template>
    <div class="container">
        <!-- Header -->
        <div class="alert alert-primary mt-2">
            <label class="from-label mt-1">
                <i class="nav-icon fas fa-users-cog"></i>&nbsp;Management User
            </label>
        </div>
        <!-- end header -->

        <!-- Komponen Konten -->
        <div class="row justify-content-center mt-1">
            <!-- Konten  Tambah user -->
            <div class="col-md-4 mb-2">
                <div class="card">
                    <div class="card-header">
                        <label class="from-label">
                            <i class="nav-icon fas fa-user-plus"></i>
                            &nbsp;Tambah User
                        </label>
                    </div>
                    <div class="card-body">
                        <form>
                            <label class="form-label"> Nama </label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"
                                        ><i class="nav-icon fas fa-user"></i
                                    ></span>
                                </div>
                                <input
                                    type="text"
                                    class="form-control"
                                    id="nama"
                                    placeholder="Masukan Nama"
                                    v-model="nama"
                                    required
                                    autofocus
                                />
                                <div class="invalid-feedback">
                                    Silahkan Masukan Nama Anda
                                </div>
                            </div>
                            <label class="form-label"> Email </label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"
                                        ><i class="nav-icon fas fa-at"></i
                                    ></span>
                                </div>
                                <input
                                    class="form-control"
                                    placeholder="Masukan Email"
                                    id="email"
                                    type="email"
                                    v-model="email"
                                    required
                                />
                                <div class="invalid-feedback">
                                    <!-- {{ error_email }} -->
                                    Masukan Email
                                </div>
                            </div>
                            <label class="form-label"> Password </label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"
                                        ><i class="nav-icon fas fa-lock"></i
                                    ></span>
                                </div>
                                <input
                                    type="password"
                                    placeholder="Password"
                                    class="form-control"
                                    id="password"
                                    v-model="password"
                                    required
                                />
                                <div class="invalid-feedback">
                                    <!-- {{ error_password }} -->
                                    Masukan Password
                                </div>
                            </div>
                            <label class="form-label"> Alamat </label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"
                                        ><i class="nav-icon fas fa-home"></i
                                    ></span>
                                </div>
                                <textarea
                                    class="form-control"
                                    id="alamat"
                                    v-model="alamat"
                                    rows="3"
                                    required
                                ></textarea>
                                <div class="invalid-feedback">
                                    Silahkan Masukan Alamat
                                </div>
                            </div>
                            <label class="form-label">
                                Nomor Telepon / WA
                            </label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"
                                        ><i class="nav-icon fas fa-phone"></i
                                    ></span>
                                </div>
                                <input
                                    type="text"
                                    class="form-control"
                                    placeholder="Masukan Nomor Telepon"
                                    id="alamat"
                                    v-model="notlp"
                                    required
                                />
                                <div class="invalid-feedback">
                                    Silahkan Masukan Nomor Telepon / WA
                                </div>
                            </div>
                            <label class="form-label"> Level User </label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"
                                        ><i class="nav-icon fas fa-filter"></i
                                    ></span>
                                </div>
                                <select
                                    class="form-control"
                                    id="level"
                                    v-model="level"
                                >
                                    <option selected>Pilih Level</option>
                                    <option value="1">Admin</option>
                                    <option value="2">User</option>
                                </select>
                            </div>

                            <button
                                type="submit"
                                class="btn btn-primary mx-auto"
                            >
                                <i class="nav-icon fas fa-plus"></i>&nbsp;Simpan
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Akhir Konten Tambah user -->

            <!-- Konten Status user -->
            <div class="col-md-8 mb-1">
                <div class="card">
                    <div class="card-header">
                        <label class="from-label mt-1">
                            <i class="nav-icon fas fa-users"></i>
                            &nbsp;Status User
                        </label>
                    </div>
                    <div class="card-body">
                        <table
                            class="table table-striped table-bordered table-sm"
                        >
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Waktu Login Terakhir</th>
                                    <th>Waktu Logout Terakhir</th>
                                    <th class="text-center">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Admin</td>
                                    <td>2021-09-23 15:25</td>
                                    <td></td>
                                    <td class="bg-success text-center">
                                        <i class="fas fa-user"> online </i>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- Akhir Konten Status user -->

                <!-- Konten List user -->
                <div class="card">
                    <div class="card-header">
                        <label class="from-label mt-1"
                            ><i class="nav-icon fas fa-users"></i> &nbsp;List
                            User
                        </label>
                    </div>

                    <div class="card-body">
                        <!-- Form pencarian -->
                        <div class="row justify-content-end">
                            <div class="col-md-4">
                                <form action="#">
                                    <div class="input-group mb-1">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"
                                                ><i
                                                    class="nav-icon fas fa-search"
                                                ></i
                                            ></span>
                                        </div>
                                        <input
                                            type="text"
                                            class="form-control"
                                            placeholder="Cari"
                                            name="cari_list_user"
                                            required
                                        />
                                        &nbsp;
                                        <button
                                            class="btn btn-success"
                                            type="submit"
                                        >
                                            Cari
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- Akhir form pencarian -->
                        <table
                            class="table table-sm table-bordered table-striped"
                        >
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>No. Telepon</th>
                                    <th>Level</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Hery Ardiansyah</td>
                                    <td>Hery@sukasuka.com</td>
                                    <td>089645768876</td>
                                    <td class="badge bg-success">
                                        Admin
                                    </td>
                                    <td class="text-center">
                                        <button
                                            class="btn btn-primary btn-sm"
                                            type="submit"
                                        >
                                            <i class="nav-icon fas fa-eye"></i>
                                        </button>
                                        <button
                                            class="btn btn-warning btn-sm"
                                            type="submit"
                                        >
                                            <i class="nav-icon fas fa-pen"></i>
                                        </button>
                                        <button
                                            class="btn btn-danger btn-sm"
                                            type="submit"
                                        >
                                            <i
                                                class="nav-icon fas fa-trash"
                                            ></i>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- Akhir Konten List user -->
            </div>
        </div>
        <!-- Akhir Komponen Konten -->
    </div>
</template>

<script>
export default {
    mounted() {
        console.log("Component mounted.");
    }
};
</script>
