@extends('layouts.master')

@section('content')

     <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Ubah Merk</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
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
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Ubah Merk</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                      <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="{{ route('brand.update', $brand->id) }}" method="POST"> 
                      {{ csrf_field() }}
                      <input type="hidden" name="_method" value="PUT">
                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">Nama Pembeli <span class="required">*</span>
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" name="nama_pembeli" value="{{ $sales->nama_pembeli }}" class="form-control col-md-7 col-xs-12" id="brand_name" required>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">Email <span class="required">*</span>
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <textarea name="description" id="description"  
                            class="form-control col-md-7 col-xs-12 {{ $errors->has('email') ? 'is-invalid':'' }}">{{ $sales->email }}</textarea>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">Mobil Dibeli <span class="required">*</span>
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <textarea name="description" id="mobil_dibeli"  
                            class="form-control col-md-7 col-xs-12 {{ $errors->has('mobil_dibeli') ? 'is-invalid':'' }}">{{ $sales->mobil_dibeli }}</textarea>
                          </div>
                        </div>
                        <div class="ln_solid"></div>
                        <div class="form-group">
                          <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-4">
                          <a class="btn btn-danger btn-close" href="{{ route('brand.index') }}">Batal</a>
                            <button class="btn btn-success">Simpan</button>
                          </div>
                        </div> 
                      </form>
                  </div>
                </div> 
              </div>
            </div>
        </div>
    </div>      


@endsection('content')

