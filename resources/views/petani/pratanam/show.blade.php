@extends('base')

@section('content')
<div class="card mb-4">
    <div class="card-header">
        Hasil Rekomendasi Penjadwalan
        <!-- <a href="{{route('p.i.pra.show.edit', ['id' => $data->id])}}" class="btn btn-primary btn-sm">
            Ubah
        </a> -->

    </div>
    <div class="card-body col-md-12">
        <div class="row justify-content-md-center">
            <table class="table table-bordered table-stripped text-center col-md-7">
                <tbody>
                    <!-- <tr>
                        <td>Status</td>
                        <td>{{ucwords($data->status)}}</td>
                    </tr> -->
                    <tr>
                        <td>Nama</td>
                        <td>{{$data->padi->jenis_padi}}</td>
                    </tr>
                    <tr>
                        <td>Varietas</td>
                        <td>{{$data->padi->varietas}}</td>
                    </tr>
                    <tr>
                        <td>Tanggal Semai</td>
                        <td>{{$data->tgl_persemaian}}</td>
                    </tr>
                    <tr>
                        <td>Banyak Benih</td>
                        <td>{{$data->banyak_benih}}</td>
                    </tr>
                    <tr>
                        <td>Jenis Tanah</td>
                        <td>{{$data->jenis_tanah}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <table class="table table-bordered table-stripped text-center">
            <thead>
                <th>No</th>
                <th>Tanggal</th>
                <th>Waktu</th>
                <th>Nama Proses</th>
                <th>Tips dan Trik</th>
                <th>Catatan</th>
                <th>Ubah Catatan</th>
                <th>Status</th>
            </thead>
            <tbody>
                @forelse($data->penjadwalan as $index => $jadwal)
                <tr>
                    <td>{{($index+1)}}</td>
                    <td>{{$jadwal->tanggal}}</td>
                    <td>{{$jadwal->waktu}}</td>
                    <td>{{$jadwal->nama_proses}}</td>
                    <td>{{$jadwal->tips_dan_trik}}</td>
                   <td>{{$jadwal->catatan}}</td>
                    <td>
                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#md{{$jadwal->id}}">{{$jadwal->catatan==null?'Tambah':'Ubah'}} Catatan</button>
                        <div class="modal fade" id="md{{$jadwal->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <form method="POST" action="{{route('catatan',['id'=>$jadwal->id])}}">
                            @csrf
                            @method('put')
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">{{$jadwal->catatan==null?'Tambah':'Ubah'}} Catatan</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                  <div class="form-group">
                                    <label for="message-text" class="col-form-label">Catatan</label>
                                    <textarea class="form-control" id="message-text" name="catatan">{{$jadwal->catatan}}</textarea>
                                  </div>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                <button type="submit" class="btn btn-primary">{{$jadwal->catatan==null?'Tambah':'Ubah'}} Catatan</button>
                              </div>
                            </form>
                            </div>
                          </div>
                    </td>
                    <td>
                        <button type="button" class="btn btn-link btn-sm" data-toggle="modal" data-target="#mdS{{$jadwal->id}}">{{ucwords($jadwal->status)}}</button>
                        <div class="modal fade" id="mdS{{$jadwal->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <form method="POST" action="{{route('status',['id'=>$jadwal->id])}}">
                            @csrf
                            @method('put')
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Ubah Status</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                  <div class="form-group">
                                    <label for="message-text" class="col-form-label">Status</label>
                                    <select name="status" class="form-control">
                                        <option value="sudah dilakukan" {{$jadwal->status=='sudah dilakukan'?'selected':''}}>{{ucwords('sudah dilakukan')}}</option>
                                        <option value="belum dilakukan"{{$jadwal->status=='belum dilakukan'?'selected':''}}>{{ucwords('belum dilakukan')}}</option>
                                        <option value="gagal"{{$jadwal->status=='gagal'?'selected':''}}>{{ucwords('gagal')}}</option>
                                    </select>
                                  </div>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                <button type="submit" class="btn btn-primary">Ubah Status</button>
                              </div>
                            </form>
                            </div>
                          </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="8">Belum ada saran</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
