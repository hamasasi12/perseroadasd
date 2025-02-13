@extends('layouts.dashboard-layout')
@section('content')
@section('main')

    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Input Tindak Lanjut</h1>
        </div>
        <!-- End Page Title -->
        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Tindak Lanjut</h5>
                            <form action="{{ route('Tindaklanjut.store') }}" method="post">
                                @csrf
                                <div class="row mb-3">
                                    <label for="nomor_barang" class="col-sm-2 col-form-label">Kode Asset</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" id="kode_asset" name="kode_asset"/>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="nomor_barang" class="col-sm-2 col-form-label">Keterangan</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" id="keterangan" name="keterangan"/>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="nomor_barang" class="col-sm-2 col-form-label">Status</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" id="status" name="status"/>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="nomor_barang" class="col-sm-2 col-form-label">PIC</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" id="pic" name="pic"/>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="nomor_barang" class="col-sm-2 col-form-label">Tanggal Permintaan</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" id="tanggal" name="tanggal"/>
                                    </div>
                                </div>
                                <div class="d-md-flex justify-content-md-end mt-3">
                                    <button type="submit" class="btn"
                                        style="background-color: #525ceb; color: white">Send</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection