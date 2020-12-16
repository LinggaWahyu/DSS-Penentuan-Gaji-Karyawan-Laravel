@extends('layouts.app')

@section('title')
    DSS Gaji Covid
@endsection

@section('content')
  <!-- page content -->
  <div class="right_col" role="main">
    <div class="">
      <div class="page-title">
        
      </div>
      <div class="clearfix"></div>
      <div class="row">
        <div class="col-md-12 col-sm-12 ">
          <div class="x_panel">
            <div class="x_title">
              <h2>Penilaian Gaji Karyawan</h2>
              <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
                <li><a class="close-link"><i class="fa fa-close"></i></a>
                </li>
              </ul>
              <div class="clearfix"></div>
            </div>
            <div class="col-sm-12 mt-3 text-right">
              </div>
            <div class="x_content">
              <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="{{ route('simpan', $karyawan->id_karyawan) }}" method="POST">
                @csrf
                <h6><b>Karyawan    : {{ $karyawan->nama_karyawan }}</b></h6>
                <table class="table table-striped mt-4">
                  <thead>
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Kriteria</th>
                      <th scope="col">Pilih</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row" class="form-horizontal">Penilaian Gaji Pokok</th>
                    </tr>
                    @foreach ($kriterias as $number => $kriteria)
                        @if ($kriteria->id_kategori == 1)
                          <tr>
                            <th scope="row">{{ $number+1 }}</th>
                            <td>{{ $kriteria->nm_kriteria }}</td>
                            <td>
                              <select class="form-control" name="{{ $kriteria->id_kriteria }}">
                                @if ($penilaians != null)
                                  @foreach ($penilaians as $penilaian)
                                    @if ($penilaian->id_kriteria == $kriteria->id_kriteria)
                                      <option value="{{ $penilaian->id_sub_kriteria }}" selected>{{ $penilaian->subkriteria->nama_sub_kriteria }}</option>
                                    @endif
                                  @endforeach
                                @endif
                                @foreach ($subkriterias as $subkriteria)
                                  @if ($subkriteria->id_kriteria == $kriteria->id_kriteria)
                                    <option value="{{ $subkriteria->id_sub_kriteria }}">{{ $subkriteria->nama_sub_kriteria }}</option> 
                                  @endif   
                                @endforeach
                              </select>
                            </td>
                          </tr>
                        @endif
                    @endforeach
                    <tr>
                      <th scope="row" class="form-horizontal">Penilaian Gaji Bonus</th>
                    </tr>
                    @foreach ($kriterias as $number => $kriteria)
                        @if ($kriteria->id_kategori == 2)
                          <tr>
                            <th scope="row">{{ $number+1 }}</th>
                            <td>{{ $kriteria->nm_kriteria }}</td>
                            <td>
                              <select class="form-control" name="{{ $kriteria->id_kriteria }}">
                                @if ($penilaians != null)
                                  @foreach ($penilaians as $penilaian)
                                    @if ($penilaian->id_kriteria == $kriteria->id_kriteria)
                                      <option value="{{ $penilaian->id_sub_kriteria }}" selected>{{ $penilaian->subkriteria->nama_sub_kriteria }}</option>
                                    @endif
                                  @endforeach
                                @endif
                                @foreach ($subkriterias as $subkriteria)
                                  @if ($subkriteria->id_kriteria == $kriteria->id_kriteria)
                                    <option value="{{ $subkriteria->id_sub_kriteria }}">{{ $subkriteria->nama_sub_kriteria }}</option> 
                                  @endif   
                                @endforeach
                              </select>
                            </td>
                          </tr>
                        @endif
                    @endforeach
                    <tr>
                      <th scope="row" class="form-horizontal">Penilaian Tunjangan</th>
                    </tr>
                    @foreach ($kriterias as $number => $kriteria)
                        @if ($kriteria->id_kategori == 3)
                          <tr>
                            <th scope="row">{{ $number+1 }}</th>
                            <td>{{ $kriteria->nm_kriteria }}</td>
                            <td>
                              <select class="form-control" name="{{ $kriteria->id_kriteria }}">
                                @if ($penilaians != null)
                                  @foreach ($penilaians as $penilaian)
                                    @if ($penilaian->id_kriteria == $kriteria->id_kriteria)
                                      <option value="{{ $penilaian->id_sub_kriteria }}" selected>{{ $penilaian->subkriteria->nama_sub_kriteria }}</option>
                                    @endif
                                  @endforeach
                                @endif
                                @foreach ($subkriterias as $subkriteria)
                                  @if ($subkriteria->id_kriteria == $kriteria->id_kriteria)
                                    <option value="{{ $subkriteria->id_sub_kriteria }}">{{ $subkriteria->nama_sub_kriteria }}</option> 
                                  @endif   
                                @endforeach
                              </select>
                            </td>
                          </tr>
                        @endif
                    @endforeach
                  </tbody>
                </table>
                <button type="submit" class="btn btn-success">Simpan</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /page content -->
@endsection