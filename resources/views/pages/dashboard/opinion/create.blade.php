@extends('layouts.admin')
@section('content')
    <!-- Hoverable Table rows -->
    <div class="card">
        <h5 class="card-header">
            <div class="row justify-content-between">
                <div class="col">
                    <span>ثبت نظر جدید </span>
                </div>

            </div>
        </h5>
        <div class="card-body">
            <div class="card-body">
                <form action="{{ route('admin.opinion.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label class="form-label">تصویر کاربر (40 * 40)</label>
                            <input type="file" class="form-control" name="photo_url" />
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">نام کاربر</label>
                            <input type="text" class="form-control" name="name" required />
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">شغل کاربر</label>
                            <input type="text" class="form-control" name="job" required />
                        </div>
                        <div class="col-md-12 mb-3">
                            <label class="form-label">توضیحات</label>
                            <textarea class="form-control" name="description" required>{{ old('description') }}</textarea>
                        </div>

                    </div>
                    <button type="submit" class="btn btn-primary">ثبت</button>
                </form>
            </div>
        </div>

    </div>
    <!--/ Hoverable Table rows -->
@endsection
