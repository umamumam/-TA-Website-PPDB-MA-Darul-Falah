@extends('layouts1.app')
  

@section('contents')
<style>
      .textbox-container {
        text-align: center;
        padding: 10px;
      }

      .textbox {
        width: 320px; /* Lebar text box */
        padding: 7px; /* Ruang dalam text box */
        background-color: #ffffff; /* Warna latar belakang text box */
        border: 2px solid #333; /* Border text box */
        border-radius: 10px; /* Sudut border melengkung */
        box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.2); /* Efek bayangan */
        margin: 0 auto; /* Membuat text box berada di tengah horizontal */
      }
      
      .gambar-container {
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 30px;
        }

        .gambar {
            max-width: 100%;
            max-height: 100%;
        }
        .animate {
            animation: fadeIn 2s;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }
</style>
<div class="textbox-container">
        <div class="textbox">
          <h3>ALUR PENDAFTARAN</h3>
        </div>
      </div>
      <br>
      <div class="gambar-container">
      <img src="{{ asset('admin_assets\img\Alur Pendaftaran1.png') }}"  class="img-fluid" alt="...">
      </div>
      <script>
        document.addEventListener('DOMContentLoaded', function() {
            const gambarContainer = document.querySelector('.gambar-container');
            gambarContainer.style.display = 'block';
            gambarContainer.classList.add('animate');
        });
    </script>
@endsection
