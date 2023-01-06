@extends('layouts.master')
@section('title', 'Create Product')
@section('page', 'Products')
@section('breadcrumb')
    <!--begin::Breadcrumb-->
    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 pt-1">
        <!--begin::Item-->
        <li class="breadcrumb-item text-muted">Produkkantin</li>
        <!--end::Item-->
        <!--begin::Item-->
        <li class="breadcrumb-item">
            <span class="bullet bg-gray-200 w-5px h-2px"></span>
        </li>
        <!--end::Item-->
        <!--begin::Item-->
        <li class="breadcrumb-item text-dark">Tambah Produkkantin</li>
        <!--end::Item-->
    </ul>
    <!--end::Breadcrumb-->
@endsection
@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Post-->
        <div class="post d-flex flex-column-fluid" id="kt_post">
            <!--begin::Container-->
            <div id="kt_content_container" class="container-xxl">
                <form id="kt_ecommerce_add_product_form" class="form d-flex flex-column flex-lg-row"
                    data-kt-redirect="{{ route('produkkantin.index') }}" action="{{ route('produkkantin.store') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <!--begin::Aside column-->
                    <div class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-300px mb-7 me-lg-10">
                        <!--begin::Thumbnail settings-->
                        <div class="card card-flush py-4">
                            <!--begin::Card header-->
                            <div class="card-header">
                                <!--begin::Card title-->
                                <div class="card-title">
                                    <h2>Gambar</h2>
                                </div>
                                <!--end::Card title-->
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body text-center pt-0">
                                <!--begin::Image input-->
                                <!--begin::Image input placeholder-->
                                <style>
                                    .image-input-placeholder {
                                        background-image: url({{ asset('assets/media/svg/files/blank-image.svg') }})
                                    }

                                    [data-theme="dark"] .image-input-placeholder {
                                        background-image: url({{ asset('assets/media/svg/files/blank-image-dark.svg') }})
                                    }
                                </style>
                                <!--end::Image input placeholder-->
                                <!--begin::Image input-->
                                <div class="image-input image-input-empty image-input-outline image-input-placeholder mb-3"
                                    id="kt_ecommerce_add_product_avatar">
                                    <!--begin::Preview existing avatar-->
                                    <div class="image-input-wrapper w-150px h-150px"></div>
                                    <!--end::Preview existing avatar-->
                                    <!--begin::Label-->
                                    <label
                                        class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                        data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                                        <!--begin::Icon-->
                                        <i class="bi bi-pencil-fill fs-7"></i>
                                        <!--end::Icon-->
                                        <!--begin::Inputs-->
                                        <input type="file" name="gambar" accept=".png, .jpg, .jpeg" />
                                        <input type="hidden" name="avatar_remove" />
                                        <!--end::Inputs-->
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Cancel-->
                                    <span
                                        class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                        data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
                                        <i class="bi bi-x fs-2"></i>
                                    </span>
                                    <!--end::Cancel-->
                                    <!--begin::Remove-->
                                    <span
                                        class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                        data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
                                        <i class="bi bi-x fs-2"></i>
                                    </span>
                                    <!--end::Remove-->
                                </div>
                                <!--end::Image input-->
                                <!--begin::Description-->
                                <!--end::Description-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Thumbnail settings-->
                        <!--begin::Categories-->
                        <!--end::Categories-->
                    </div>
                    <!--end::Aside column-->
                    <!--begin::Main column-->
                    <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
                        <!--begin::General options-->
                        <div class="card card-flush py-4">
                            <!--begin::Card header-->
                            <div class="card-header">
                                <div class="card-title">
                                    <h2>Umum</h2>
                                </div>
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body pt-0">
                                <!--begin::Input group-->
                                <div class="mb-10 fv-row">
                                    <!--begin::Label-->
                                    <label class="required form-label">Nama Produk</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" name="nama_produk" class="form-control mb-2"
                                        placeholder="Nama Produk" value="" />
                                    <!--end::Input-->
                                    <!--begin::Description-->
                                    <!--end::Description-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="mb-10 fv-row">
                                    <!--begin::Label-->
                                    <label class="form-label">Deskripsi</label>
                                    <!--end::Label-->
                                    <!--begin::Editor-->
                                    <textarea name="deskripsi" class="form-control mb-2" placeholder="Deskripsi" rows="3"></textarea>
                                    <!--end::Editor-->
                                    <!--begin::Description-->
                                    <!--end::Description-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="mb-10 fv-row">
                                    <!--begin::Label-->
                                    <label class="required form-label">Harga</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" name="harga" class="form-control mb-2" placeholder="Harga"
                                        value="" />
                                    <!--end::Input-->
                                    <!--begin::Description-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="mb-10 fv-row">
                                    <!--begin::Label-->
                                    <label class="required form-label">Jumlah</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" name="jumlah" class="form-control mb-2" placeholder="Jumlah"
                                        value="" />
                                    <!--end::Input-->
                                    <!--begin::Description-->
                                </div>
                                <!--end::Card header-->
                            </div>
                        </div>
                        <!--end::General options-->
                        <div class="d-flex justify-content-end">
                            <!--begin::Button-->
                            <a href="{{ route('produkkantin.index') }}" id="kt_ecommerce_add_product_cancel"
                                class="btn btn-light me-5">Batal</a>
                            <!--end::Button-->
                            <!--begin::Button-->
                            <button type="submit" id="kt_ecommerce_add_product_submit" class="btn btn-primary"
                                data-kt-element="submit">
                                <span class="indicator-label">Simpan</span>
                                <span class="indicator-progress">Tunggu...
                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            </button>
                            <!--end::Button-->
                        </div>
                    </div>
                    <!--end::Main column-->
                </form>
            </div>
            <!--end::Container-->
        </div>
        <!--end::Post-->
    </div>
@endsection
@section('scripts')
    <script>
        "use strict";
        // Class definition
        const KTFormControls = function() {
            const formEl = $('#kt_ecommerce_add_product_form');

            const _initAvatar = function() {
                // init avatar
                const imageInputElement = document.querySelector("#kt_ecommerce_add_product_avatar");
                new KTImageInput(imageInputElement);
            }

            return {
                // public functions
                _init: function() {
                    _initAvatar();
                },
                onSubmit: function() {
                    const btn = formEl.find('[data-kt-element="submit"]');
                    const action = formEl.attr('action');
                    const method = formEl.attr('method');
                    const data = new FormData(formEl[0]);
                    $.ajax({
                        url: action,
                        method: method,
                        data: data,
                        processData: false,
                        contentType: false,
                        beforeSend: function() {
                            btn.attr("data-kt-indicator", "on");
                            btn.prop("disabled", true);
                        },
                        success: function(response) {
                            if (response.status == 'error') {
                                Swal.fire({
                                    text: response.message,
                                    icon: "error",
                                    buttonsStyling: false,
                                    confirmButtonText: "Ok!",
                                    customClass: {
                                        confirmButton: "btn btn-primary"
                                    }
                                });
                                btn.removeAttr("data-kt-indicator");
                                btn.prop("disabled", false);
                            } else {
                                Swal.fire({
                                    text: response.message,
                                    icon: "success",
                                    buttonsStyling: false,
                                    confirmButtonText: "Ok!",
                                    customClass: {
                                        confirmButton: "btn btn-primary"
                                    }
                                }).then(function(result) {
                                    btn.removeAttr("data-kt-indicator");
                                    btn.prop("disabled", false);
                                    if (result.isConfirmed) {
                                        window.location.href = response
                                            .redirect;
                                    }
                                });
                            }
                        },
                        error: function(data) {
                            Swal.fire({
                                text: "Sorry, we couldn't update your data.",
                                icon: "error",
                                buttonsStyling: false,
                                confirmButtonText: "Ok, got it!",
                                customClass: {
                                    confirmButton: "btn fw-bold btn-primary"
                                }
                            });
                            btn.removeAttr("data-kt-indicator");
                            btn.prop("disabled", false);
                        }
                    }).done(function() {
                        btn.removeAttr("data-kt-indicator");
                        btn.prop("disabled", false);
                    });
                }
            };
        }();

        KTUtil.onDOMContentLoaded(function() {
            KTFormControls._init();
        });

        $(document).on('submit', '#kt_ecommerce_add_product_form', function(e) {
            e.preventDefault();
            KTFormControls.onSubmit();
        });
    </script>
@endsection
