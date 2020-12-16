@extends('layouts.app')

@section('title')
    DSS Gaji Covid
@endsection

@section('content')
  <!-- page content -->
  <div class="right_col" role="main">
    <div class="">
      <div class="page-title">
        <div class="title_left">
          <h3>Total Bobot Matriks Penilaian Karyawan</h3>
        </div>

        <div class="title_right">
          <div class="col-md-5 col-sm-5 form-group pull-right top_search">
            <div class="input-group">
              <input
                type="text"
                class="form-control"
                placeholder="Search for..."
              />
              <span class="input-group-btn">
                <button class="btn btn-default" type="button">Go!</button>
              </span>
            </div>
          </div>
        </div>
      </div>
      <div class="clearfix"></div>
      <div class="row">
        <div class="col-md-12 col-sm-12">
          <div class="x_panel">
            <div class="x_title">
              <h2>Total Bobot Matriks Penilaian Karyawan Gaji Covid</h2>
              <ul class="nav navbar-right panel_toolbox">
                <li>
                  <a class="collapse-link"
                    ><i class="fa fa-chevron-up"></i
                  ></a>
                </li>
                <li>
                  <a class="close-link"><i class="fa fa-close"></i></a>
                </li>
              </ul>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
              <form action="{{ route('total-bobot-kategori') }}" method="POST" class="form-inline">
                @csrf
                <div class="form-group">
                  <select name="kategori" class="form-control">
                    @foreach ($kategoris as $kategori)
                      @if ($kategori->id_kategori == $id_kategori)
                        <option value="{{ $kategori->id_kategori }}" selected>{{ $kategori->nama_kategori }}</option>
                      @else
                        <option value="{{ $kategori->id_kategori }}">{{ $kategori->nama_kategori }}</option>
                      @endif
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <div class="col-md-6 offset-md-3 text-right">
                    <button type="submit" class="btn btn-success">
                      Pilih
                    </button>
                  </div>
                </div>
              </form>
              <br />
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col" width="50%">Nama Karyawan</th>
                    <th scope="col" class="text-center">Total Nilai</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($karyawans as $karyawan)
                    <tr>
                      <td>{{ $karyawan->nama_karyawan }}</td>
                    @foreach ($nilais as $nilai)
                      @if ($nilai->id_karyawan == $karyawan->id_karyawan)
                        <td class="text-center">{{ $nilai->total }}</td>
                      @endif
                    @endforeach
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /page content -->
@endsection