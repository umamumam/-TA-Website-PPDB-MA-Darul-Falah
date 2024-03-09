<!DOCTYPE html>
<html>
  <head>
    <style>
      @page {
        size: landscape;
        size: A4;
      }
      h2 {
        color: #fff;
      }

      .card {
        width: 240mm;
        height: 297mm;
        margin: 0 auto;
        background-color: #fff;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        border-radius: 5px;
        overflow: hidden;
        display: flex;
        flex-direction: column;
      }
      .p {
        text-align: right;
        margin-right: 180px;
      }
      .p1 {
        text-align: right;
        margin-right: 120px;
      }
      .p2 {
        text-align: right;
        margin-right: 150px;
      }
      .card-logo {
        background-color: #007bff;
        padding: 10px;
        text-align: center;
      }

      .card-logo img {
        width: 80px;
        height: 80px;
        margin-top: 18px;
        margin-left: 40px;
      }

      .card-photo {
        padding: 10px;
        margin-top: 20px;
        margin-left: 20px;
      }

      .card-info {
        padding: 20px;
        box-sizing: border-box;
        justify-content: center;
      }

      table {
        width: 200%;
        border-collapse: collapse;
        margin-top: 10px;
        margin-left: 10px;
      }

      th{
        border: 1px solid #000;
      }
      td {
        border: 0px solid #000;
        padding: 8px;
      }

      th {
        background-color: #007bff;
        color: #fff;
      }
      .card-container {
        display: flex;
        justify-content: baseline;
        margin-top: 20px;
        margin-left: 40px;
        margin-right: 20px;
      }

      .card-content {
        padding: 20px;
      }

      /* Untuk memisahkan card dengan margin */
      .card + .card {
        margin-left: 20px;
      }
    </style>
  </head>
    <div class="card">
      <div class="card-logo">
        <img src="{{ asset('admin_assets\img\Logo.png') }}" align="left" alt="Logo" />
        <h2>KARTU PENDAFTARAN PESERTA DIDIK BARU</h2>
        <h2>MA DARUL FALAH SIRAHAN TAHUN 2024</h2>
      </div>

      <div class="card-container">
        <div class="card1">
          <div class="card-content">
            <div class="card-photo">
              <img
                src="{{ asset('admin_assets\img\3x4.png') }}"
                width="100px"
                height="150px"
                alt="Foto Peserta"
              />
            </div>
          </div>
        </div>
        
          <div class="card-content">
            <div class="card-info">
              <table>
			  @foreach($daftars as $daftar)
        @forelse($daftars as $daftar)
       @php 
      <!-- dd($daftars); -->
      @endphp
      @empty
      
        
                <tr>
                  <th colspan="2">Informasi Peserta Didik</th>
                </tr>
                <tr>
                  <td><b>ID</b></td>
                  <td>{{ $daftar->id }}</td>
                </tr>
                <tr>
                  <td><b>NISN</b></td>
                  <td>{{ $daftar->nisn }}</td>
                </tr>
                <tr>
                    <td><b>Nama</b></td>
                    <td>{{ $daftar->nama }}</td>
                </tr>
                <tr>
                    <td><b>Jenis Kelamin</b></td>
                    <td>{{ $daftar->jeniskelamin }}</td>
                </tr>
                <tr>
                    <td><b>Tempat Lahir</b></td>
                    <td>{{ $daftar->tempatlhr }}</td>
                </tr>
                <tr>
                    <td><b>Tanggal Lahir</b></td>
                    <td>{{ $daftar->tgllhr }}</td>
                </tr>
                <tr>
                    <td><b>Alamat</b></td>
                    <td>{{ $daftar->alamat }}</td>
                </tr>
                <tr>
                    <td><b>Nama Ayah</b></td>
                    <td>{{ $daftar->namaayh }}</td>
                </tr>
                <tr>
                    <td><b>Nama Ibu</b></td>
                    <td>{{ $daftar->namaibu }}</td>
                </tr>
                <tr>
                    <td><b>Asal Sekolah</b></td>
                    <td>{{ $daftar->asalsekolah }}</td>
                </tr>
                <tr>
                    <td><b>Jenis Peminatan</b></td>
                    <td>{{ $daftar->jenispeminatan }}</td>
                </tr>
                <!-- Tambahkan baris sesuai dengan data peserta -->
                @endforelse
                @endforeach
                
              </table>
            </div>
          </div>
        </div>
        <p align="center">Saya menyatakan bahwa data yang saya isikan dalam formulir pendaftaran peserta didik baru </p>
        <p align="center">MA Darul Falah Sirahan tahun 2024 adalah benar dan saya bersedia menerima ketentuan yang berlaku </p>
        <p align="center">di MA Darul Falah yang saya pilih. Saya bersedia menerima sanksi pembatalan </p>
        <p align="center"> penerimaan peserta didik baru apabila saya melanggar pernyataan ini.</p>
        <br>
        <br>
        <div class="p">
        <p >Ttd.</p>
        <br>
        <br>
        </div>
        <div class="p1">
        <p1>(.........................................)</p1>
        <br>
        </div>
        <div class="p2">
        <p2>Nama Lengkap</p2>
        </div>
      </div>
      
</html>