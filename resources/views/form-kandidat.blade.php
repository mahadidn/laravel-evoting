@include('includes.admin.header')
@include('includes.admin.sidebar')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <div class="card shadow mb-4">

            <div class="card-header py-3">
                <!-- Page Heading -->
                <h1 class="h3 mb-2 text-gray-800">Form Kandidat</h1>
            </div>

            <!-- DataTales Example -->
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="inputNama">Nama Kandidat</label>
                            <input required type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" id="inputNama" value="{{ old('nama') }}">
                            @error('nama')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <p class="my-2">Foto Kandidat</p>
                            <div class="custom-file">
                                <label class="form-label" for="image" accept="image/*">Pilih Foto</label>
                                <img class="img-preview mt-3" width="300px" alt="">
                                <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image" onchange="previewImage()">
                                <p class="small mt-2">*Ukuran maksimal foto adalah 5 MB</p>
                                @error('image')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Profil</label>
                            <textarea class="form-control @error('profil') is-invalid @enderror" id="exampleFormControlTextarea1" name="profil" rows="3"></textarea>
                            @error('profil')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Visi Misi</label>
                            <textarea class="form-control @error('visiMisi') is-invalid @enderror" id="exampleFormControlTextarea1" name="visiMisi" rows="3"></textarea>
                            @error('visiMisi')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="card-header px-0">
                            <button type="submit" class="btn btn-base">
                                Simpan Perubahan
                            </button>
                            <a type="button" class="btn btn-danger" href="/admin/data-kandidat">
                                Kembali
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

    <script>
        // Add this to add name of the file appear on select
        $(".custom-file-input").on("change", function() {
            var fileName = $(this).val().split("\\").pop();
            $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
        });

        document.addEventListener('trix-file-accept', function(e){
            e.preventDefault();
        });


        function previewImage(){
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function (oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }

    </script>
@include('includes.admin.footer')
@include('includes.admin.scripts')