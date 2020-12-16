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
          <h3>Data Karyawan</h3>
        </div>

        <div class="title_right">
          <div class="col-md-5 col-sm-5  form-group pull-right top_search">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search for...">
              <span class="input-group-btn">
                <button class="btn btn-default" type="button">Go!</button>
              </span>
            </div>
          </div>
        </div>
      </div>
      <div class="clearfix"></div>
      <div class="row">
        <div class="col-md-12 col-sm-12 ">
          <div class="x_panel">
            <div class="x_title">
              <h2>Data Karyawan Gaji Covid</h2>
              <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
                <li><a class="close-link"><i class="fa fa-close"></i></a>
                </li>
              </ul>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
              <br />
              <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Nama Karyawan</th>
                      <th scope="col">Alamat</th>
                      <th scope="col">Tanggal Lahir</th>
                      <th scope="col">Nomer Telefon</th>
                      <th scope="col">Penilaian</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($karyawan as $number => $karyawan)
                      <tr>
                        <th scope="row">{{ $number+1 }}</th>
                        <td>{{ $karyawan->nama_karyawan }}</td>
                        <td>{{ $karyawan->alamat }}</td>
                        <td>{{ $karyawan->tanggal_lahir }}</td>
                        <td>{{ $karyawan->no_telp }}</td>
                        <td> <a href="{{ route('penilaian', $karyawan->id_karyawan) }}">Penilaian</td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /page content -->
@endsection