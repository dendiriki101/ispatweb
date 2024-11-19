@extends('layout.tools.main')

@section('content')
<div class="container mt-5">
    <br><br><br><br>
    <h2 class="text-center">Form Pendaftaran Lelang</h2>

    <!-- Menampilkan pesan sukses -->
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Menampilkan pesan error -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('pelelang.store', ['lelang' => $lelang->id]) }}" method="POST" id="lelangForm">
        @csrf

        <!-- Input Nama -->
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama') }}" required>
        </div>

        <!-- Input Email -->
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" id="email" name="email" value="{{ old('email') }}">
        </div>

        <!-- Input Alamat -->
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat" value="{{ old('alamat') }}" required>
        </div>

        <!-- Input Nomor Telepon -->
        <div class="form-group">
            <label for="nomor_telepon">No. Telepon</label>
            <input type="text" class="form-control" id="nomor_telepon" name="nomor_telepon" value="{{ old('nomor_telepon') }}" required>
        </div>

        <!-- Input NPWP (ditampilkan hanya jika limbah = "yes") -->
        <div class="form-group" id="npwpField" style="display: none;">
            <label for="npwp">No. NPWP</label>
            <input type="text" class="form-control" id="npwp" name="npwp" value="{{ old('npwp') }}" oninput="formatNPWP(this)">
        </div>

        <!-- Input Penawaran -->
        <div class="form-group">
            <label for="penawaran">Harga Penawaran (Rp/{{ $lelang->uom }}, termasuk pajak)</label>
            <input type="text" class="form-control" id="penawaran" name="penawaran" value="{{ old('penawaran') }}" required oninput="formatInput(this)">
        </div>
               <!-- Input Bank -->
               <div class="form-group">
                <label for="bank">Nama Bank</label>
                <input type="text" class="form-control" id="bank" name="bank" value="{{ old('bank') }}" required>
            </div>

            <!-- Input No. Rekening -->
            <div class="form-group">
                <label for="no_rek">No. Rekening</label>
                <input type="text" class="form-control" id="no_rek" name="no_rek" value="{{ old('no_rek') }}" required>
            </div>

            <!-- Input Atas Nama -->
            <div class="form-group">
                <label for="atas_nama">Atas Nama Rekening</label>
                <input type="text" class="form-control" id="atas_nama" name="atas_nama" value="{{ old('atas_nama') }}" required>
            </div>

            <p class="text-muted">
                Sebelum “save”, pastikan Anda memiliki rekening bank dengan nama yang sesuai dengan nama yang Anda daftarkan di lelang ini.
            </p>

        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Periksa apakah lelang memiliki limbah "yes"
        var limbah = "{{ $lelang->limbah }}";

        if (limbah === "yes") {
            if (confirm("Anda harus memiliki izin pengelolaan B3 untuk mengikuti lelang ini. Apakah Anda memiliki izin?")) {
                // Jika pengguna memilih "Yes," tampilkan kolom NPWP
                document.getElementById("npwpField").style.display = "block";
            } else {
                // Jika pengguna memilih "No," kembali ke halaman sebelumnya
                window.location.href = "{{ url()->previous() }}";
            }
        }
    });

    function formatInput(input) {
        let value = input.value.replace(/[^0-9]/g, '');
        input.value = new Intl.NumberFormat('id-ID').format(value);
    }

    function formatNPWP(input) {
        let value = input.value.replace(/[^0-9]/g, '');
        if (value.length > 15) {
            value = value.slice(0, 15);
        }
        let formatted = '';
        if (value.length <= 2) {
            formatted = value;
        } else if (value.length <= 5) {
            formatted = value.slice(0, 2) + '.' + value.slice(2);
        } else if (value.length <= 8) {
            formatted = value.slice(0, 2) + '.' + value.slice(2, 5) + '.' + value.slice(5);
        } else if (value.length <= 9) {
            formatted = value.slice(0, 2) + '.' + value.slice(2, 5) + '.' + value.slice(5, 8) + '.' + value.slice(8);
        } else if (value.length <= 12) {
            formatted = value.slice(0, 2) + '.' + value.slice(2, 5) + '.' + value.slice(5, 8) + '.' + value.slice(8, 9) + '-' + value.slice(9);
        } else {
            formatted = value.slice(0, 2) + '.' + value.slice(2, 5) + '.' + value.slice(5, 8) + '.' + value.slice(8, 9) + '-' + value.slice(9, 12) + '.' + value.slice(12);
        }
        input.value = formatted;
    }
</script>
@endsection
