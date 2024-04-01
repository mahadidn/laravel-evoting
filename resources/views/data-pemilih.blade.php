@include('includes.admin.header')
@include('includes.admin.sidebar')

    <!-- Begin Page Content -->
    <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <!-- Page Heading -->
                <h1 class="h3 mb-2 text-base" style="font-weight: 600">Data Pemilih</h1>
                <p class="mb-4">Berikut merupakan data pemilih telah terdaftar pada sistem.</p>

                @if (session()->has('successDelete'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('successDelete') }}
                    </div>
                @endif

            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama</th>
                                <th>Username</th>
                                <th>Status Memilih</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i = 1;
                            @endphp
                            @foreach ($dataPemilih as $pemilih)
                                
                                @if ($pemilih->is_admin)
                                    @continue
                                @endif

                            <tr>
                                <td>{{ $i }}</td>
                                <td>{{ $pemilih->name }}</td>
                                <td>{{ $pemilih->username }}</td>
                                <td>@if($pemilih->sudah_memilih) Sudah @else Belum @endif</td>
                                <td>
                                    <div class="d-flex justify-content-center">
                                        <form action="/admin/data-pemilih/{{ $pemilih->username }}/hapus" method="POST">
                                            @csrf
                                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @php
                                $i++;
                            @endphp
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@include('includes.admin.footer')
@include('includes.admin.scripts')
