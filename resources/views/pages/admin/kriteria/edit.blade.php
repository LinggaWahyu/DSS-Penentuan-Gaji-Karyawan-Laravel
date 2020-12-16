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
        <h3>Edit Kriteria</h3>
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
            <h2>Edit Kriteria Gaji Covid</h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
              <li><a class="close-link"><i class="fa fa-close"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <form class="" action="{{ route('kriteria.update', $kriteria->id_kriteria) }}" method="post" novalidate>
              @method('put')
              @csrf
                <div class="field item form-group">
                    <label class="col-form-label col-md-3 col-sm-3  label-align">Kategori<span class="required">*</span></label>
                    <select class="custom-select col-md-6 col-sm-6" name="id_kategori">
                        @foreach ($kategoris as $kategori)
                          <option value="{{ $kategori->id_kategori }}">{{ $kategori->nama_kategori }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="field item form-group">
                    <label class="col-form-label col-md-3 col-sm-3  label-align">Kriteria<span class="required">*</span></label>
                    <input type="text" value="{{ $kriteria->nm_kriteria }}" name="nm_kriteria" class="form-control col-md-6 col-sm-6" placeholder="Kriteria" aria-label="Username" aria-describedby="basic-addon1">
                </div>
                <div class="field item form-group">
                    <label class="col-form-label col-md-3 col-sm-3  label-align">Skala<span class="required">*</span></label>
                    <select class="custom-select col-md-6 col-sm-6" name="id_skala">
                        @foreach ($skalas as $skala)
                          @if ($bobot->skala->id_skala == $skala->id_skala)
                            <option value="{{ $skala->id_skala }}" selected>{{ $skala->value }}</option>  
                          @else
                            <option value="{{ $skala->id_skala }}">{{ $skala->value }}</option>
                          @endif
                        @endforeach
                    </select>
                </div>
                <div class="ln_solid">
                    <div class="form-group">
                        <div class="col-md-6 offset-md-3 text-right">
                            <button type='submit' class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<!-- /page content -->
@endsection