@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-md-8">
                @if (session('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                @endif
                <br />

                @if (session('error'))
                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <i class="fas fa-times"></i> <strong>Gagal!</strong> {{ session('error') }}...
                    </div>
                @endif

                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>
                    <div class="card-body">
                        <p>Halo {{ Auth::user()->name }},</p>
                        <p>Kami sangat senang menyambut Anda di dashboard sistem penggajian yang dirancang untuk memudahkan pengelolaan dan transparansi data penggajian Anda. Di sini, Anda dapat dengan mudah:</p>
                        <ul>
                            <li>Melihat detail slip gaji secara lengkap.</li>
                            <li>Memeriksa riwayat penggajian.</li>
                            <li>Memastikan semua informasi terkait penggajian, potongan, dan tunjangan tercatat dengan akurat.</li>
                        </ul>
                        <p>Tujuan kami adalah memberikan pengalaman yang nyaman dan memastikan semua proses berjalan dengan efisien. Jika Anda mengalami kesulitan atau memiliki pertanyaan, jangan ragu untuk menghubungi tim HR kami <b>Falah.HR@SIGAJI.com</b>.</p>
                       <p>Selamat bekerja dan semoga hari Anda menyenangkan!</p>
                       <p><b>{{ config('app.name', 'Laravel') }}</b></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
