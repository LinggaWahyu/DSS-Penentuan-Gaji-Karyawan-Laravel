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
        <h3>Edit Skala</h3>
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
            <h2>Edit Skala Gaji Covid</h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
              <li><a class="close-link"><i class="fa fa-close"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <form class="" action="{{ route('skala.update', $skala->id_skala) }}" method="post" novalidate>
              @method('PUT')
              @csrf
                <div class="field item form-group">
                    <label class="col-form-label col-md-3 col-sm-3  label-align">Nama Skala<span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6">
                        <input class="form-control" value="{{ $skala->nm_skala }}" data-validate-length-range="6" data-validate-words="2" name="nm_skala" required="required"/>
                    </div>
                </div>
                <div class="field item form-group">
                    <label class="col-form-label col-md-3 col-sm-3  label-align">Value<span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6">
                        <input class="form-control" value="{{ $skala->value }}" class='optional' name="value" data-validate-length-range="5,15" type="text" /></div>
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