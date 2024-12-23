@extends('layouts.admin')
@section('content')
    <!-- Hoverable Table rows -->
    <div class="card">
        <h5 class="card-header">
            <div class="row justify-content-between">
                <div class="col">
                    <span>ویرایش نظر </span>
                </div>

            </div>
        </h5>
        <div class="card-body">
            <div class="card-body">
                <form action="{{ route('admin.opinion.update', $opinion) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="row">
                        <a target="_blank" href="{{ asset('uploads/' . $opinion->photo_url) }}">
                            <img style="width: 100px" src="{{ asset('uploads/' . $opinion->photo_url) }}" alt="">
                        </a>
                        <div class="col-md-12 mb-3">
                            <label class="form-label">تصویر کاربر (40 * 40)</label>
                            <input type="file" class="form-control" name="photo_url" />
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">نام کاربر</label>
                            <input type="text" class="form-control" value="{{ $opinion->name }}" name="name" required />
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">شغل کاربر</label>
                            <input type="text" class="form-control" value="{{ $opinion->job }}" name="job" required />
                        </div>
                        <div class="col-md-12 mb-3">
                            <label class="form-label">توضیحات</label>
                            <textarea class="form-control" name="description" required>{{ $opinion->description }}</textarea>
                        </div>

                    </div>
                    <button type="submit" class="btn btn-primary">ثبت</button>
                </form>
            </div>
        </div>

    </div>
    <!--/ Hoverable Table rows -->
@endsection
