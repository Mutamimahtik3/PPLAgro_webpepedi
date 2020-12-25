@extends('base')

@section('content')
<form action="{{route('p.padi.store.proses', ['jenis_padi' => $jenis_padi, 'varietas' => $varietas])}}" method="POST">
 @method('put')
 @csrf
   <br>
   <div class="form-group">
     <!-- <label class="large mb-2" for="proses">Proses</label> -->
     <h1>Proses</h1>

     <div class="form-check">
       <input class="form-check-input" type="radio" name="proses" id="r1" value="Pra-Tanam">
       <label class="form-check-label" for="r1">
         Pra-Tanam
               <p>(Pra tanam merupakan proses sebelum melakukan penanaman padi yang meliputi proses persiapan lahan hingga ke tahap penyemaian dan pemindahan hasil pembibitan)</p>
       </label>
     </div>
     <div class="form-check">
       <input class="form-check-input" type="radio" name="proses" id="r2" value="Tanam">
       <label class="form-check-label" for="r2">
         Tanam
               <p>Tanam merupakan serangkaian proses setelah melakukan pemindahan hasil pembibitan ke lahan tanam, proses tanam meliputi proses perawatan dan pemeliharan tanaman padi sampai padi siap untuk dipanen</p>
       </label>
     </div>
     <div class="form-check">
       <input class="form-check-input" type="radio" name="proses" id="r3" value="Pasca-Tanam">
       <label class="form-check-label" for="r3">
         Pasca-Tanam
               <p>pasca tanam padi merupakan kegiatan sejak padi dipanen sampai menghasilkakan produk antara (intermediate produck) yang siap dipasarkan</p>
       </label>
     </div>
     <!-- <input class="form-control py-4" id="proses" type="text" placeholder="Varietas" name="varietas" value="{{old('proses')}}"/> -->
   </div>
   @error('proses')
   <small class="text-danger">
     {{ ucwords($message) }}
   </small>
   @enderror
   <br>
   <button class="btn btn-primary" type="submit">Submit</button>
 </form>
@endsection
