@extends('layouts.admin')
@section('content')
    <!-- Hoverable Table rows -->
    <div class="card">
        <h5 class="card-header">
            <div class="row justify-content-between">
                <div class="col">
                    <span>ثبت پروژه </span>

                </div>

            </div>
        </h5>
        <div class="card-body">
            <div class="card-body">
                <form action="{{ route('admin.project.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label class="form-label" for="basic-default-fullname">تصویر</label>
                            <input type="file" class="form-control" name="photo_url" id="basic-default-fullname" />
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label" for="basic-default-fullname">نام</label>
                            <input type="text" class="form-control" name="title" id="basic-default-fullname"
                                placeholder="ساخت پروژه مسکونی" />
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label" for="basic-default-company">تاریخ</label>
                            <input class="form-control" type="text" id="fromDate" name="date" autocomplete="off" />
                            <span id="span1"></span>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label" for="basic-default-email">نام مشتری</label>
                            <div class="input-group input-group-merge">
                                <input type="text" class="form-control" name="customer" placeholder="پروژه مسکونی لواسان"
                                    id="basic-default-company" />

                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label" for="basic-default-phone">دسته بندی</label>
                            <select class="form-control form-select" name="categoryProject_id" id="">
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->title }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label" for="basic-default-phone">سایز</label>
                            <input type="text" class="form-control phone-mask" placeholder="1500 فوت مربع" name="size"
                                required />
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label" for="basic-default-phone">موقعیت</label>
                            <input type="text" name="location" class="form-control phone-mask"
                                placeholder="استان تهران، شهر لواسان" />
                        </div>
                        <div class="col-md-12 mb-3">
                            <label class="form-label">توضیحات</label>
                            <textarea id="editor" name="description">{!! old('description') !!}</textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">ثبت</button>
                </form>
            </div>
        </div>

    </div>
    <!--/ Hoverable Table rows -->
@endsection
@section('script')
    <script src="{{ asset('assets-sneat/js/persianDatepicker.min.js') }}"></script>

    <script type="text/javascript">
        $(document).ready(evt => {
            CKEDITOR.replace('editor', {
                filebrowserUploadUrl: "{{ route('admin.image.upload', ['_token' => csrf_token()]) }}",
                filebrowserUploadMethod: "form"
            });

            $("#fromDate, #span1").persianDatepicker();

        })
    </script>
@endsection
