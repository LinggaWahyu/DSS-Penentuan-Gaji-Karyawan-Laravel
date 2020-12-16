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
        <h3>Data Alternatif</h3>
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
            <h2>Data Alternatif Gaji Covid</h2>
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
                    <th scope="col">N0</th>
                    <th scope="col">Gaji Pokok</th>
                    <th scope="col">Gaji Bonus</th>
                    <th scope="col">Tunjangan</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($alternatifs as $alternatif)
                    <tr>
                      <th scope="row">{{ $loop->iteration }}</th>
                      <td>{{ number_format((int)$alternatif->gajipokok, 0, ".", ".") }}</td>
                      <td>{{ number_format((int)$alternatif->gajibonus, 0, ".", ".") }}</td>
                      <td>{{ number_format((int)$alternatif->gajitunjangan, 0, ".", ".") }}</td>
                      <td>
                        <a href="{{ route('alternatif.edit', $alternatif->id_alternatif) }}" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
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