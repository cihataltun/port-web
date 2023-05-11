@extends('layouts.master')

@section('title','Category Page')

@section('content')
        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Kategoriler</h4>
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Anasayfa</a></li>
                                        <li class="breadcrumb-item active">Kategoriler</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <a href="{{ url('admin/category-create') }}" type="button" class="btn btn-outline-success waves-effect waves-light">
                        <span style="font-weight:bold">Kategori Ekle</span> <i class="fas fa-plus"></i>
                    </a>
                    {{-- <a href="{{ url('admin/dashboard') }}" type="button" class="btn btn-md btn-outline-primary waves-effect waves-light float-end">
                        <i class="fa-solid fa-circle-arrow-left"></i> Geri
                    </a> --}}
                    <div class="row mt-3">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Kategori Listesi</h4>
                                    @if (session('message'))
                                        <div class="alert alert-success">{{ session('message') }}</div>
                                    @endif
                                    <div class="table-responsive">
                                        <table id="selection-datatable" class="table table-editable table-nowrap align-middle table-edits">
                                            <thead class="table-light">
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Kategori İsmi</th>
                                                    <th>Kategori Türü</th>
                                                    <th>Kategori Slug</th>
                                                    <th class="text-center">İşlemler</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($categories as $category)
                                                <tr data-id="{{ $category->id }}">
                                                  <td data-field="id" style="width: 80px">{{ $category->id }}</td>
                                                  <td data-field="name">{{ $category->name }}</td>
                                                  <td data-field="type">{{ $category->type }}</td>
                                                  <td data-field="slug">{{ $category->slug }}</td>
                                                  <td style="width: 100px">
                                                    <a href="{{ url('admin/category-edit/'.$category->id) }}" class="btn btn-md btn-warning m-2" title="Düzenle">
                                                      <i class="fas fa-edit"></i>
                                                    </a>
                                                    <!-- Modal -->
                                                    <div class="modal fade" id="myModal-{{ $category->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-bs-backdrop="static"  aria-hidden="true">
                                                      <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                          <div class="modal-header">
                                                            <h5 class="modal-title" id="myModalLabel">Uyarı</h5>
                                                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                                              <span aria-hidden="true">&times;</span>
                                                            </button>
                                                          </div>
                                                          <div class="modal-body">
                                                            <span style="color: red">Bu kategoriyi silerseniz ona ait tüm postlarda silinecektir.</span> <br> Silmek istediğinize emin misiniz?
                                                          </div>
                                                          <div class="modal-footer">
                                                            <a href="{{ url('admin/category-delete/'.$category->id) }}" type="button" class="btn btn-danger">Evet, sil!</a>
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">İptal</button>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <!-- End Modal -->
                                                    <a href="{{ url('admin/category-delete/'.$category->id) }}" class="btn btn-md btn-danger" data-bs-toggle="modal" data-bs-target="#myModal-{{ $category->id }}" title="Sil">
                                                      <i class="far fa-trash-alt"></i>
                                                    </a>
                                                  </td>
                                                </tr>
                                              @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div> <!-- end row -->

                </div>
            </div>
        </div>
@endsection