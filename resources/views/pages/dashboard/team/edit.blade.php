@extends('layouts.admin')
@section('content')
    <!-- Hoverable Table rows -->
    <div class="card">
        <h5 class="card-header">
            <div class="row justify-content-between">
                <div class="col">
                    <span>ثبت عضو جدید </span>
                </div>

            </div>
        </h5>
        <div class="card-body">
            <div class="card-body">
                <form action="{{ route('admin.team.update', $team) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <a target="_blank" href="{{ asset('uploads/' . $team->photo_url) }}">
                            <img style="width: 250px" src="{{ asset('uploads/' . $team->photo_url) }}" alt="">
                        </a>
                        <div class="col-md-12 mb-3">
                            <label class="form-label">تصویر</label>
                            <input type="file" class="form-control" name="photo_url" />
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">نام و نام خانوادگی</label>
                            <input type="text" class="form-control" value="{{ $team->name }}" name="name" />
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">رسته | سِمت</label>
                            <input type="text" class="form-control" value="{{ $team->job }}" name="job" />
                        </div>

                    </div>
                    <button type="submit" class="btn btn-primary">ثبت</button>
                </form>
            </div>
        </div>

    </div>
    <!--/ Hoverable Table rows -->
@endsection

