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
        <h3>Data Kriteria</h3>
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
            <h2>Kriteria Gaji Covid</h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
              <li><a class="close-link"><i class="fa fa-close"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="col-sm-12 mt-3 text-right">
            <a href="{{ route('kriteria.create') }}" type="button" class="btn btn-success">Tambah Kriteria</a>
          </div>
          <div class="x_content">
            <br />
            <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Kriteria</th> 
                    <th>Bobot</th>  
                    <th scope="col">Aksi</th>  
                  </tr>
                </thead>
                <tbody>
                  @foreach ($kriterias as $kriteria)
                     @foreach ($bobots as $bobot)
                        @if ($kriteria->id_kriteria == $bobot->id_kriteria)
                          <tr>
                            <th scope="row">{{ $loop->parent->iteration }}</th>
                            <td>{{ $kriteria->kategori->nama_kategori }}</td>
                            <td>{{ $kriteria->nm_kriteria }}</td>
                            <td>{{ $bobot->skala->value }}</td>
                            <td>
                              <a href="{{ route('kriteria.edit', $kriteria->id_kriteria) }}" style="float:left;" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                              <form action="{{ route('kriteria.destroy', $kriteria->id_kriteria) }}" method="POST" class="form-inline">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-danger btn-xs">
                                  <i class="fa fa-trash-o"></i> Delete
                                </button>
                              </form>
                            </td>
                          </tr>
                        @endif
                     @endforeach 
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