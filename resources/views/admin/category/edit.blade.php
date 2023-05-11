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
                                <h4 class="mb-sm-0">Kategori Düzenle</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Anasayfa</a></li>
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Kategoriler</a></li>
                                        <li class="breadcrumb-item active">Kategori Düzenle</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="{{ url('admin/category-list') }}" type="button" class="btn btn-md btn-outline-primary waves-effect waves-light mb-3">
                        <i class="fa-solid fa-circle-arrow-left"></i> Geri
                    </a>
    <!-- end page title -->
                    <div class="row">
                        <div class="col-xl">
                            <div class="card">
                                <div class="card-body">

                                    @if ($errors->any())
                                    <div class="alert alert-danger">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $errors }}</li>
                                        @endforeach
                                    </div>
                                    @endif
                                    <h4 class="card-title">Kategori Bilgileri</h4>
                                    <br>
                                    <form class="custom-validation" action="{{ url('admin/category-update/'.$category->id) }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="mb-3">
                                            <label for="">Kategori Adı</label>
                                            <input type="text" name="name" value="{{ $category->name }}" class="form-control" required placeholder="Kategori adını yazınız"/>
                                        </div>
                                        <div class="mb-3">
                                        <div class="mb-3">
                                            <label for="">Kategori Türü</label>
                                            <select name="type" class="form-select" id="validationCategory">
                                                <option selected="" disabled="" value="">Kategori türü seç</option>
                                                <option value="Hotels" {{ $category->type == 'Hotels' ? 'selected' : '' }}>Hotels</option>
                                                <option value="Resort" {{ $category->type == 'Resort' ? 'selected' : '' }}>Resort</option>
                                                <option value="Deluxe" {{ $category->type == 'Deluxe' ? 'selected' : '' }}>Deluxe</option>
                                                <option value="Holiday" {{ $category->type == 'Holiday' ? 'selected' : '' }}>Holiday</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="">Kategori Slug</label>
                                            <input type="text" name="slug" value="{{ $category->slug }}" class="form-control" required placeholder="Kategori slug yazınız"/>
                                        </div>
                                        <div class="mb-0">
                                            <div>
                                                <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
                                                    Değişiklikleri Kaydet
                                                </button>
                                                <a href="{{ url('admin/category-list') }}" type="button" class="btn btn-secondary waves-effect">
                                                    Cancel
                                                </a>
                                            </div>
                                        </div>
                                    </form>
    
                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div>
                </div>
            </div>
        </div>
@endsection