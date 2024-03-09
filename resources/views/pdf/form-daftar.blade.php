
<style>
    @page {
        size: A4;
        orientation: portrait; /* Atau landscape jika diperlukan */
    }
    .container {
        max-width: 800px;
        margin: 0 auto;
      }
      .header {
        text-align: center;
        margin-bottom: 20px;
      }
      .judul {
        font-size: 24px;
        font-weight: bold;
        margin-bottom: 10px;
      }
      .alamat {
        margin-bottom: 30px;
      }
      .isi-surat {
        text-align: justify;
      }
      table {
        width: 50%;
        margin left: 20px;
      }

      th{
        border: 1px solid #000;
      }
      td {
        border: 0px solid #000;
        padding: 8px;
      }
      .ttd {
        position: relative;
        margin-right: 60px;
        margin-top: 20px;
      }

 </style>


    <div class="container">
      <div class="header">
        <h3 class="judul">SURAT PERNYATAAN</h3>
        <h3 class="judul">PESERTA DIDIK BARU TAHUN PELAJARAN 2023/2024</h3>
        <!-- <p class="tanggal">[Tempat], [Tanggal]</p> -->
        
      </div>
      <div class="alamat">
        <p>Yang bertanda tangan di bawah ini, saya:</p>
        <table>
              @if ($daftars)
			  @foreach($daftars as $daftar)
                <tr>
                  <td><b>NISN            :</b></td>
                  <td>{{ $daftar->nisn }}</td>
                </tr>
                <tr>
                    <td><b>Nama            :</b></td>
                    <td>{{ $daftar->nama }}</td>
                </tr>
                <tr>
                    <td><b>Jenis Kelamin            :</b></td>
                    <td>{{ $daftar->jeniskelamin }}</td>
                </tr>
                <tr>
                    <td><b>Tempat Lahir            :</b></td>
                    <td>{{ $daftar->tempatlhr }}</td>
                </tr>
                <tr>
                    <td><b>Tanggal Lahir            :</b></td>
                    <td>{{ $daftar->tgllhr }}</td>
                </tr>
                <tr>
                    <td><b>Alamat            :</b></td>
                    <td>{{ $daftar->alamat }}</td>
                </tr>
                <tr>
                    <td><b>Nama Ayah            :</b></td>
                    <td>{{ $daftar->namaayh }}</td>
                </tr>
                <tr>
                    <td><b>Nama Ibu            :</b></td>
                    <td>{{ $daftar->namaibu }}</td>
                </tr>
                <tr>
                    <td><b>Asal Sekolah            :</b></td>
                    <td>{{ $daftar->asalsekolah }}</td>
                </tr>
                <tr>
                    <td><b>Jenis Peminatan            :</b></td>
                    <td>{{ $daftar->jenispeminatan }}</td>
                </tr>
                <!-- Tambahkan baris sesuai dengan data peserta -->
                @endforeach
                @else
        <p>Data dengan ID tersebut tidak ditemukan.</p>
        @endif
              </table>
            </div>
          </div>
        </div>
      </div>
      <div class="isi-surat">
        <p>Menyatakan dengan sesungguhnya :</p>
        <p>
          1. Berniat menuntut ilmu di Perguruan Islam Darul Falah Sirahan ini
          hanya semata-mata karena Allah SWT.
        </p>
        <p>
          2. Bersedia untuk mentaati segala peraturan yang berlaku di Madrsah
          Darul Falah Sirahan.
        </p>
        <p>
          3. Bersedia membayar segala bentuk kontribusi/iuran yang telah
          ditentukan oleh pihak madrasah.
        </p>
        <p>
          4. Menerima segala bentuk keputusan hasil tes seleksi masuk dari
          Panitia Penerimaan Siswa Baru.
        </p>
        <p>
          5. Bersedia menjaga nama baik dan menjalin hubungan kerjasama yang
          baik dengan pihak Madrasah.
        </p>
        <!-- Isi surat pernyataan lainnya -->
      </div>
      <p>
        Demikian surat pernyataan ini untuk dapat dipergunakan sebagaimana
        mestinya.
      </p>
      <div class="ttd">
        <p align="right">Sirahan, ...................... 2024</p>
        <p align="right">Yang membuat pernyataan,</p>
        <br />

        <p align="right">[..............................................]</p>
      </div>
    </div>
