@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Detail Slip Gaji</div>

                    <div class="card-body">
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <th scope="row">Kode Gaji</th>
                                    <td>{{ $gaji->kode_gaji }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Tanggal Gaji</th>
                                    <td>{{ $gaji->tanggal_gaji }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Karyawan</th>
                                    <td>{{ $gaji->karyawan->nama_karyawan }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Bidang Studi</th>
                                    <td>{{ $gaji->karyawan->bidang_studi }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Jabatan</th>
                                    <td>{{ $gaji->karyawan->jabatan }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Jumlah Absen/hari</th>
                                    <td>{{ $gaji->jumlah_absen }} hari</td>
                                </tr>
                                <tr>
                                    <th scope="row">Total Absen</th>
                                    <td>Rp. {{ number_format($gaji->total_absen, 2, ',', '.') }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Honor Mengajar/jam</th>
                                    <td>
                                        {{ $gaji->honorMengajar->jam_mengajar }}: Rp.
                                        {{ number_format($gaji->honorMengajar->jumlah_mengajar, 2, ',', '.') }}
                                    </td>
                                </tr>

                                <tr>
                                    <th scope="row">Tunjangan</th>
                                    <td>
                                        <ul class="list-group mb-3">
                                            @forelse ($tunjangan as $item)
                                                <li class="list-group-item">
                                                    {{ $item->nama_tunjangan }}: Rp.
                                                    {{ number_format($item->jumlah_tunjangan, 2, ',', '.') }}
                                                </li>
                                            @empty
                                                <li class="list-group-item">Tidak ada tunjangan</li>
                                            @endforelse
                                        </ul>
                                    </td>
                                </tr>

                                <tr>
                                    <th scope="row">Potongan</th>
                                    <td>
                                        <ul class="list-group mb-3">
                                            @forelse ($potongan as $item)
                                                <li class="list-group-item">
                                                    {{ $item->nama_potongan }}: - Rp.
                                                    {{ number_format($item->jumlah_potongan, 2, ',', '.') }}
                                                </li>
                                            @empty
                                                <li class="list-group-item">Tidak ada potongan</li>
                                            @endforelse
                                        </ul>
                                    </td>
                                </tr>

                                <tr>
                                    <th scope="row">Total Gaji</th>
                                    <td>Rp. <u><b>{{ number_format($gaji->total_gaji, 2, ',', '.') }}</b></u></td>
                                </tr>
                            </tbody>
                        </table>

                        <a href="{{ route('gaji.index') }}" class="btn btn-primary mt-3">Kembali</a>
                        <a href="{{ route('slipgaji.pdf', $gaji->id) }}" class="btn btn-warning mt-3">Cetak Slip Gaji</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
