@extends('layouts.master')

@section('content')

     <div class="right_col" role="main">
          <div class="">
            <div class="clearfix"></div>

              <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="x_panel">
                    <div class="x_title">
                      <h2>Data Sales</h2>
                      <button data-toggle="modal" data-target="#modal-tambah" class="btn btn-round btn-primary pull-right btn-tambah" type="button">Tambah</button>
                      <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

                      <table id="datatable" class="table table-striped table-bordered">
                        <thead>
                          <tr>
                          <th>#</th>
                          <th>Nama Pembeli </th> 
                          <th>Mobil Dibeli </th>
                          <th>Email</th>
                          <th>Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                                  @php $no = 1; @endphp 
                              @forelse ($sales as $row)
                                  <tr class="row{{$row->id}}">
                                      <td>{{ $no++ }}</td>
                                      <td>{{ $row->nama_pembeli }}</td>
                                      <td>{{ $row->mobil_dibeli }}</td>
                                      <td>{{ $row->email}</td>
                
                                        <td><button class="edit-modal btn btn-info" data-id="{{$row->id}}"
                                              data-brand-name="{{$row->brand_name}}" data-brand-desc="{{$row->description}}">
                                              <span class="glyphicon glyphicon-edit"></span>
                                          </button>
                                          <button class="delete-modal btn btn-danger" data-id="{{$row->id}}"
                                              data-brand-name="{{$row->brand_name}}" data-brand-desc="{{$row->description}}">
                                              <span class="glyphicon glyphicon-trash"></span>
                                          </button>
                                        </td>
                                  </tr> 
                                  @empty
                                  <tr>
                                      <td colspan="4" class="text-center">Tidak ada data</td>
                                  </tr>
                              @endforelse
                          </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
         </div>
      </div>

<!-- Modal Tambah --> 
<div class="modal modal-default fade" id="modal-tambah">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span></button>
        <h4 class="modal-title">Tambah Data Merk</h4>
      </div>
      <div class="modal-body">
      
      <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="{{ route('brand.store') }}" method="POST">
                      
                      {{ csrf_field() }}
                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">Nama Merk
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" name="brand_name"  class="form-control col-md-7 col-xs-12" id="brand_name">
                           
                          </div>
                        </div> 
                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">Deskripsi <span class="required">*</span>
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <textarea name="description" id="description"  
                            class="form-control col-md-7 col-xs-12"></textarea>
                          </div>
                        </div>
                        <div class="ln_solid"></div>
                        <div class="form-group">
                          <div class="col-md-12 col-sm-12 col-xs-12 col-md-offset-4">
                          <!-- <button type="button" class="btn btn-danger btn-close" data-dismiss="modal">Batal</button> -->
                            <button class="btn btn-success">Simpan</button>
                            <button type="button" class="btn btn-warning" data-dismiss="modal">
                              <span class='glyphicon glyphicon-remove'></span> Batal
                            </button>
                          </div>
                        </div>
                      </form>



      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>