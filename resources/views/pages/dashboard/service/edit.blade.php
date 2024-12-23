@extends('layouts.admin')
@section('content')
    <!-- Hoverable Table rows -->
    <div class="card">
        <h5 class="card-header">
            <div class="row justify-content-between">
                <div class="col">
                    <span>ویرایش خدمات</span>
                </div>

            </div>
        </h5>
        <div class="card-body">
            <div class="card-body">
                <form action="{{ route('admin.service.update', $service) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <a target="_blank" href="{{ asset('uploads/' . $service->photo_url) }}">
                            <img style="width: 250px" src="{{ asset('uploads/' . $service->photo_url) }}" alt="">
                        </a>

                        <div class="col-md-12 mb-3">
                            <label class="form-label">تصویر</label>
                            <input type="file" class="form-control" name="photo_url" />
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">نام</label>
                            <input type="text" class="form-control" value="{{ $service->title }}" name="title" />
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">خلاصه توضیحات</label>
                            <input type="text" class="form-control" value="{{ $service->meta_description }}" name="meta_description" />
                        </div>
                        <div class="col-md-12 mb-3">
                            <label class="form-label">توضیحات</label>
                            <textarea id="editor" name="description">{!! $service->description !!}</textarea>
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
