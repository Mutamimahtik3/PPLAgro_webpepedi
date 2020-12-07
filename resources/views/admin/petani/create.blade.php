@extends('base')
@section('content')
<div class="card-body">
    <div class="table-responsive">
        <form action="{{route('a.petani.store')}}" method="POST">
            @csrf
                
                <div class="form-group">
                    <label class="small mb-1" for="name">Nama Lengkap</label>
                <input class="form-control py-4" id="name" type="text" placeholder="Nama Lengkap" name="name" value="{{old('name')}}"/>
                </div>
                @error('name')
                
                <span>
                    {{ ucwords($message) }}
                </span>
                @enderror
                
        
                <div class="form-group">
                    <label class="small mb-1" for="inputEmailAddress">Email</label>
                <input class="form-control py-4" id="inputEmailAddress" type="email" placeholder="Email" name="email" value="{{old('email')}}"/>
                </div>
                @error('email')
                
                <span>
                    {{ ucwords($message) }}
                </span>
                @enderror
                
                
                <div class="form-group">
                    <label class="small mb-1" for="pass">Password</label>
                <input class="form-control py-4" id="pass" type="password" placeholder="Password" name="password"/>
                </div>
                @error('password')
                
                <span>
                    {{ ucwords($message) }}
                </span>
                @enderror
                
        
                <div class="form-group">
                    <label class="small mb-1" for="password_confirmation">Ulangi Password</label>
                    <input class="form-control py-4" id="password_confirmation" type="password" placeholder="password confirmation" name="password_confirmation"/>
                </div>
                @error('password_confirmation')
                <span>
                    {{ ucwords($message) }}
                </span>
                @enderror
                
                <div class="form-group">
                    <label class="small mb-1" for="pekerjaan">Pekerjaan</label>
                    <input class="form-control py-4" id="pekerjaan" type="text" placeholder="Pekerjaan" name="pekerjaan" value="{{old('pekerjaan')}}"/>
                </div>
                @error('pekerjaan')
                <span>
                    {{ ucwords($message) }}
                </span>
                @enderror
                <div class="form-group">
                    <label class="small mb-1" for="nohp">No HP</label>
                    <input class="form-control py-4" id="nohp" type="text" placeholder="No HP" name="nohp" value="{{old('nohp')}}"/>
                </div>
                @error('nohp')
                
                <span>
                    {{ ucwords($message) }}
                </span>
                @enderror
                

                <div class="form-group">
                    <label for="exampleFormControlSelect1">Jenis Kelamin</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="jenis_kelamin">
                        <option disabled selected>Pilih Jenis Kelamin</option>
                        <option value="laki-laki">Laki Laki</option>
                        <option value="perempuan">Perempuan</option>
                    </select>
                    @error('jenis_kelamin')
                    <label class="small mb-1 text-danger">
                        {{ucwords($message)}}
                    </label>
                    @enderror
                </div>
                
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                <textarea class="form-control" id="alamat" rows="3" name="alamat"cols="30" rows="10">{{old('alamat')}}</textarea>
                  </div>
                @error('alamat')
                <br>
                <span>
                    {{ ucwords($message) }}
                </span>
                @enderror
                <button class="btn btn-primary" type="submit">Submit</button>
            </form>
    </div>
</div>
@endsection