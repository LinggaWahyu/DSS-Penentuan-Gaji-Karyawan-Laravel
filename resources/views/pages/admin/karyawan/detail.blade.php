@extends('layouts.admin')

@section('title')
    Admin DSS Gaji Covid
@endsection

@section('content')
<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Detail Data Karyawan</h3>
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
            <h2>Detail Data Karyawan</h2>
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
            <br />
            <form
              id="demo-form2"
              data-parsley-validate
              class="form-horizontal form-label-left"
            >
              <div class="input-group sm-6">
                <div class="input-group-prepend">
                  <span
                    class="input-group-text"
                    id="basic-addon1"
                    style="width: 120px"
                    >Nama</span
                  >
                </div>
                <input
                  type="text"
                  class="form-control"
                  aria-label="Username"
                  aria-describedby="basic-addon1"
                  value="{{ $karyawan->nama_karyawan }}"
                  readonly
                />
              </div>
              <div class="input-group sm-6">
                <div class="input-group-prepend">
                  <span
                    class="input-group-text"
                    id="basic-addon1"
                    style="width: 120px"
                    >Alamat</span
                  >
                </div>
                <input
                  type="text"
                  class="form-control"
                  aria-label="Username"
                  aria-describedby="basic-addon1"
                  value="{{ $karyawan->alamat }}"
                  readonly
                />
              </div>
              <div class="input-group sm-6">
                <div class="input-group-prepend">
                  <span
                    class="input-group-text"
                    id="basic-addon1"
                    style="width: 120px"
                    >Tanggal Lahir</span
                  >
                </div>
                <input
                  type="text"
                  class="form-control"
                  aria-label="Username"
                  aria-describedby="basic-addon1"
                  value="{{ $karyawan->tanggal_lahir }}"
                  readonly
                />
              </div>
              <div class="input-group sm-6">
                <div class="input-group-prepend">
                  <span
                    class="input-group-text"
                    id="basic-addon1"
                    style="width: 120px"
                    >Nomor Telfon</span
                  >
                </div>
                <input
                  type="text"
                  class="form-control"
                  aria-label="Username"
                  aria-describedby="basic-addon1"
                  value="{{ $karyawan->no_telp }}"
                  readonly
                />
              </div>
              <br /><br />
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Kriteria</th>
                    <th scope="col">Subkriteria</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($penilaians as $penilaian)
                    <tr>
                      <th scope="row">{{ $loop->iteration }}</th>
                      <td>{{ $penilaian->kategori->nama_kategori }}</td>
                      <td>{{ $penilaian->kriteria->nm_kriteria }}</td>
                      <td>{{ $penilaian->subkriteria->nama_sub_kriteria }}</td>
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