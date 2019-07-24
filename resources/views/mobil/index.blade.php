@extends('layouts.master')

@section('content')

     <div class="right_col" role="main">
          <div class="">
            <div class="clearfix"></div>

              <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="x_panel">
                    <div class="x_title">
                      <h2>Data Merk</h2>
                      <!-- <a href="" button class="btn btn-round btn-primary pull-right btn-tambah" type="button">Tambah</button></a> -->
                      <!-- {{ route('brand.create') }} -->
                      <button data-toggle="modal" data-target="#modal-tambah" class="btn btn-round btn-primary pull-right btn-tambah" type="button">Tambah</button>
                      <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

                      <table id="datatable" class="table table-striped table-bordered">
                        <thead>
                          <tr>
                          <th>#</th>
                          <th>Nama Mobil </th> 
                          <th>Harga </th>
                          <th>Stock</th>
                          </tr>
                        </thead>
                        <tbody>
                                  @php $no = 1; @endphp 
                              @forelse ($mobil as $row)
                                  <tr class="row{{$row->id}}">
                                      <td>{{ $no++ }}</td>
                                      <td>{{ $row->mobil_name }}</td>
                                      <td>{{ $row->harga }}</td>
                                      <td>{{} $row->stock}}</td>
                            
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

@endsection('content')