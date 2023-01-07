@extends('mainAdmin')
@section('content')
    <section class="section dashboard">
        <div class="row">
            
            <div class="col-lg-12">
                
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"> </h5>
                        
                        <!-- Horizontal Form -->
                        <form method="POST" action="">
                            {{ csrf_field() }}
                            <input type="hidden" id="idSetting" name="idSetting" value="{{ $dataSetting->idSetting }}">
                            <div class="row mb-3">
                                <label for="logo" class="col-sm-2 col-form-label">Logo</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="file" id="logo" name="logo" value="{{ $dataSetting->logo }}">
                                </div>
                            </div>
                            <br>
                            <div>
                                <h6 style="color:rgb(179, 179, 179)">Menu Tentang</h6>
                            </div>
                            <div class="row mb-3">
                                <label for="gambar" class="col-sm-2 col-form-label" >Gambar</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="file" id="gambar" name="gambar" value="{{ $dataSetting->gambar }}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="tentang" class="col-sm-2 col-form-label">Tentang</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" style="height: 100px" name="tentang" value="{{ $dataSetting->tentang }}"></textarea>
                                </div>
                            </div>
                            <br>
                            <div>
                                <h6 style="color:rgb(179, 179, 179)">Menu Kontak</h6>
                            </div>
                            <div class="row mb-3">
                                <label for="lokasi" class="col-sm-2 col-form-label">Lokasi</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="lokasi" name="lokasi" value="{{ $dataSetting->lokasi }}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="noTelp" class="col-sm-2 col-form-label">No. Telepon</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="noTelp" name="noTelp" value="{{ $dataSetting->noTep }}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="email" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="email" name="email" value="{{ $dataSetting->emai }}">
                                </div>
                            </div>
                            <br>
                            <div class="text-left">
                                <button type="submit" class="btn btn-primary">Make Changes</button>
                                <a href="/dashboard" class="btn btn-secondary">Cancel</a>
                            </div>
                            <br>
                        </form><!-- End Horizontal Form -->
                        
                    </div>
                </div>
                
            </div>
        </div>
    </section>
@endsection