<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SIAP MABA</title>
 
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
</head>
<body>
 
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="card mt-5">
                        <div class="card-body">
                            <p style="text-align: center"><img src="/img/Logo_SIAP_MABA.png" alt="Logo SIAP MABA" width="300px"></p>
                            <h2 class="text-center" style="font-weight: bold">Selamat Datang!</h2>
                            <h5 class="text-center" style="font-weight: bold">Masukkan data dengan teliti dan benar</h5>
                            <br/>

 
                            <br/>
                             <!-- form validasi -->
                            <form action="/proses" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="Foto">Foto</label>
                                    <input type="file" class="form-control-file" id="Foto" name="Foto" accept="image/png, image/jpg, image/jpeg">
                                </div>
                                <div class="form-group">
                                    <label for="No_Pendaftaran">No. Pendaftaran</label>
                                    <input class="form-control" type="text" name="No_Pendaftaran" value="{{ old('No_Pendafatran') }}">
                                    @error('No_Pendaftaran')
                                    <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                                </div>
                                <div class="form-group">
                                    <label for="Nama">Nama Lengkap</label>
                                    <input class="form-control" type="text" name="Nama" value="{{ old('Nama') }}">
                                    @error('Nama')
                                    <div class="alert alert-danger">{{ $message }}</div>
                            @enderror 
                                </div>
                                <div class="form-group">
                                    <label for="Fakultas">Fakultas</label>
                                    <input class="form-control" type="text" name="Fakultas" value="{{ old('Fakultas') }}">
                                    @error('Fakultas')
                                    <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                                </div>
                                <div class="form-group">
                                    <label for="Prodi">Prodi</label>
                                    <input class="form-control" type="text" name="Prodi" value="{{ old('Prodi') }}">
                                    @error('Prodi')
                                    <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                                </div>
                                <div class="form-group">
                                    <label for="Angkatan">Angkatan</label>
                                    <input class="form-control" type="text" name="Angkatan" value="{{ old('Angkatan') }}">
                                    @error('Angkatan')
                                    <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                                </div>
                                <div class="form-group">
                                    <label for="Jalur">Jalur Masuk</label>
                                    <br>
                                    <input type="radio" value="SBUB" id="sbub" name="Jalur">
                                    <label for="sbub">SBUB</label>
                                    <input type="radio" value="SNMPTN" id="snmptn" name="Jalur">
                                    <label for="snmptn">SNMPTN</label> 
                                    <input type="radio" value="SBMPTN" id="sbmptn" name="Jalur">
                                    <label for="sbmptn">SBMPTN</label> 
                                    <input type="radio" value="UM" id="um" name="Jalur">
                                    <label for="um">UM</label>
                                    @error('Jalur')
                                    <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                                </div>
                                <div class="form-group">
                                    <label for="Rerata_Ujian_Sekolah">Rerata Ujian Sekolah</label>
                                    <input class="form-control" type="text" name="Rerata_Ujian_Sekolah" value="{{ old('Rerata_Ujian_Sekolah') }}">
                                    @error('Rerata_Ujian_Sekolah')
                                    <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                                </div>
                                </div>
                                <div class="form-group">
                                    <label for="Tempat_Lahir">Tempat Lahir</label>
                                    <input class="form-control" type="text" name="Tempat_Lahir" value="{{ old('Tempat_Lahir') }}">
                                    @error('Tempat_Lahir')
                                    <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                                </div>
                                <div class="form-group">
                                    <label for="Tanggal_Lahir">Tanggal Lahir</label>
                                    <input class="form-control" type="date" name="Tanggal_Lahir" value="{{ old('Tanggal_Lahir') }}">
                                    @error('Tanggal_Lahir')
                                    <div class="alert alert-danger">{{ $message }}</div>
                            @enderror    
                                </div>
                                <div class="form-group">
                                    <label for="Jenis_Kelamin">Jenis Kelamin</label>
                                    <br>
                                    <input type="radio" value="Laki-laki" id="Laki-laki" name="Jenis_Kelamin">
                                    <label for="Laki-laki">Laki-laki</label>
                                    <input type="radio" value="Perempuan" id="Perempuan" name="Jenis_Kelamin">
                                    <label for="Perempuan">Perempuan</label> 
                                    @error('Jenis_Kelamin')
                                    <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                                </div>    
                                <div class="form-group">
                                    <label for="Agama">Agama</label>
                                    <br>
                                    <select name="Agama" id="Agama">
                                    <option>--Pilih Agama--</option>
                                    <option value="islam">Islam</option>
                                    <option value="katolik">Katolik</option>
                                    <option value="protestan">Kristen Protestan</option>
                                    <option value="hindu">Hindu</option>
                                    <option value="buddha">Buddha</option>
                                    <option value="konghucu">Konghucu</option>
                                    </select>
                                    @error('Agama')
                                    <div class="alert alert-danger">{{ $message }}</div>
                            @enderror 
                                </div>
                                <div class="form-group">
                                    <label for="NIK">NIK</label>
                                    <input class="form-control" type="text" name="NIK" value="{{ old('NIK') }}">
                                    @error('NIK')
                                    <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                                </div>
                                <div class="form-group">
                                    <label for="Golongan_Darah">Golongan Darah</label>
                                    <br>
                                    <select name="Golongan_Darah" id="Golongan_Darah">
                                    <option>--Pilih Golongan Darah--</option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="AB">AB</option>
                                    <option value="O">O</option>
                                    </select>
                                    @error('Golongan_Darah')
                                    <div class="alert alert-danger">{{ $message }}</div>
                            @enderror 
                                </div>
                                <div class="form-group">
                                    <label for="No_Hp">No. HP</label>
                                    <input class="form-control" type="text" name="No_Hp" value="{{ old('No_Hp') }}">
                                    @error('No_Hp')
                                    <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                                </div>
                                <div class="form-group">
                                    <label for="email">E-mail</label>
                                    <input class="form-control" type="text" name="email" value="{{ old('email') }}">
                                    @error('email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                            @enderror   
                                <br>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1" >Saya telah mengisi data dengan benar!</label>
                                </div>
                                </div>
                                <div class="form-group">
                                <input class="btn btn-primary" type="submit" value="Proses">
                                </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>