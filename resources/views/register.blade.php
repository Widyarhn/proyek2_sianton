@extends('layouts.body')
@section('content')
<section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
                <div class="card mb-3" >
                    {{-- style="height: 730px;width: 450px;" --}}
                    <div class="card-body">
                        <br>
                        <div class="d-flex justify-content-center py-4">
                            
                            <a href="index.html" class="logo d-flex align-items-center w-auto">
                                <img src="{{ asset('admin') }}/assets/img/logo.png" alt="">
                                <span class="d-none d-lg-block">NiceAdmin</span>
                            </a>
                        </div>
                        <p class="text-center small"></p>
                        
                        <form class="row g-3 needs-validation" novalidate action="/register" method="POST">
                            {{ csrf_field() }}
                            <div class="col-12">
                                <label for="name" class="form-label">Nama</label>
                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" required value="{{ old('name') }}">
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" required value="{{ old('username') }}">
                                @error('username')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12">
                                <label for="email" class="form-label">Email</label>
                                <div class="input-group has-validation">
                                    <span class="input-group-text" id="inputGroupPrepend">@</span>
                                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" required value="{{ old('email') }}">
                                    @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" required >
                                @error('password')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                            </div>
                            
                            <div class="col-12 mt-4">
                                <button class="btn btn-primary w-100" type="submit">Buat Akun</button>
                            </div>
                            <div class="col-12 d-block text-center">
                                <p class="small mb-0">Sudah punya akun? <a href="/login">Masuk</a></p>
                            </div>
                            <br>
                        </form>
                        
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    
</section>
@endsection

{{-- <div class="card mb-3" >
    {{-- style="height: 730px;width: 450px;" 
    <div class="card-body">
        <br>
        <div class="d-flex justify-content-center py-4">
            
            <a href="index.html" class="logo d-flex align-items-center w-auto">
                <img src="admin/img/logo.png" alt="">
                <span class="d-none d-lg-block">NiceAdmin</span>
            </a>
        </div>
        <p class="text-center small"></p>
        
        <form class="row g-3 needs-validation" novalidate action="/register" method="POST">
            {{ csrf_field() }}
            <div class="col-12">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" id="nama" required value="{{ old('nama') }}">
                @error('nama')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-12">
                <label for="noTelp" class="form-label">No. Telp</label>
                <input type="text" name="noTelp" class="form-control @error('noTelp') is-invalid @enderror" id="noTelp" required value="{{ old('noTelp') }}">
                @error('noTelp')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-12">
                <label for="jk" class="form-label">Jenis Kelamin</label>
                <select id="jk" class="form-select @error('jk') is-invalid @enderror" name="jk" required value="{{ old('jk') }}">
                    <option value="">Pilih </option>
                    <option value="l">Laki-Laki</option>
                    <option value="p">perempuan</option>
                </select>
                @error('jk')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            
            
            <div class="col-12">
                <label for="alamat" class="form-label">Alamat</label>
                <textarea class="form-control @error('alamat') is-invalid @enderror" name="alamat" style="height: 100px" id="alamat" required value="{{ old('alamat') }}"></textarea>
                @error('alamat')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="col-6">
                <label for="email" class="form-label">Email</label>
                <div class="input-group has-validation">
                    <span class="input-group-text" id="inputGroupPrepend">@</span>
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" required value="{{ old('email') }}">
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-6">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" required >
                @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
            </div>
            
            <div class="col-12 mt-4">
                <button class="btn btn-primary w-100" type="submit">Buat Akun</button>
            </div>
            <div class="col-12 d-block text-center">
                <p class="small mb-0">Sudah punya akun? <a href="/login">Masuk</a></p>
            </div>
            <br>
        </form>
        
    </div>
</div> --}}