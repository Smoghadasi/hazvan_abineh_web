@extends('layouts.admin')
@section('content')
    <!-- Hoverable Table rows -->
    <div class="card">
        <h5 class="card-header">
            <div class="row justify-content-between">
                <div class="col">
                    <span>ثبت خدمات جدید </span>
                </div>

            </div>
        </h5>
        <div class="card-body">
            <div class="card-body">
                <form action="{{ route('admin.service.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label class="form-label">تصویر</label>
                            <input type="file" class="form-control" name="photo_url" />
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">نام</label>
                            <input type="text" class="form-control" name="name" />
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">خلاصه توضیحات</label>
                            <input type="text" class="form-control" name="meta_description" />
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

    <script type="text/javascript">
        $(document).ready(evt => {
            CKEDITOR.replace('editor', {
                filebrowserUploadUrl: "{{ route('admin.image.upload', ['_token' => csrf_token()]) }}",
                filebrowserUploadMethod: "form"
            });


        })
    </script>
@endsection
