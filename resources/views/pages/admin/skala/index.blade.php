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
        <h3>Data Skala</h3>
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
            <h2>Skala Gaji Covid</h2>
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
                  <th scope="col">NO</th>
                  <th scope="col">Nama Skala</th>
                  <th scope="col">Value</th>
                  <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($skalas as $skala)
                  <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $skala->nm_skala }}</td>
                    <td>{{ $skala->value }}</td>
                    <td>
                      <a href="{{ route('skala.edit', $skala->id_skala) }}" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                    </td>
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