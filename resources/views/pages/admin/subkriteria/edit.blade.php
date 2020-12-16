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
        <h3>Tambah Subkriteria</h3>
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
            <h2>Tambah Subkriteria Gaji Covid</h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
              <li><a class="close-link"><i class="fa fa-close"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <form class="" action="{{ route('subkriteria.update', $subkriteria->id_sub_kriteria) }}" method="post" novalidate>
              @method('put')
              @csrf
                <div class="field item form-group">
                  <label class="col-form-label col-md-3 col-sm-3  label-align">Kriteria<span class="required">*</span></label>
                  <select class="custom-select col-md-6 col-sm-6" name="id_kriteria">
                    @foreach ($kriterias as $kriteria)
                      @if ($kriteria->id_kriteria == $subkriteria->id_kriteria)
                        <option value="{{ $kriteria->id_kriteria }}" selected>{{ $kriteria->nm_kriteria }}</option>
                      @else
                        <option value="{{ $kriteria->id_kriteria }}">{{ $kriteria->nm_kriteria }}</option>  
                      @endif
                    @endforeach
                  </select>
                </div>
                <div class="field item form-group">
                  <label class="col-form-label col-md-3 col-sm-3  label-align">Subkriteria<span class="required">*</span></label>
                  <input type="text" value="{{ $subkriteria->nama_sub_kriteria }}" class="form-control col-md-6 col-sm-6" name="nama_sub_kriteria" placeholder="Subkriteria" aria-label="Username" aria-describedby="basic-addon1">
                </div>
                <div class="field item form-group">
                  <label class="col-form-label col-md-3 col-sm-3  label-align">Value<span class="required">*</span></label>
                  <input type="number" value="{{ $subkriteria->value }}" class="form-control col-md-6 col-sm-6" name="value" placeholder="Value" aria-label="Username" aria-describedby="basic-addon1">
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