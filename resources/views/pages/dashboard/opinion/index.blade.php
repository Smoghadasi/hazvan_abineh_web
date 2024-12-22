@extends('layouts.admin')
@section('content')
    <!-- Hoverable Table rows -->
    <div class="card">
        <h5 class="card-header">
            <div class="row justify-content-between">
                <div class="col">
                    <span>لیست نظرات</span>

                </div>
                <div class="col text-end">
                    <a class="btn btn-primary btn-sm" href="{{ route('admin.opinion.create') }}">نظر برتر جدید</a>
                </div>
            </div>
        </h5>
        <div class="table-responsive text-nowrap">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>نام کاربر</th>
                        <th>شغل</th>
                        <th>توضیحات</th>
                        <th>تاریخ ایجاد</th>
                        <th>عملیات</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @forelse ($opinions as $opinion)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $opinion->name }}</td>
                            <td>{{ $opinion->job }}</td>
                            <td>{{ $opinion->description }}</td>
                            <td>
                                {{ verta($opinion->created_at)->format('%d') }} /
                                {{ verta($opinion->created_at)->format('%B') }} /
                                {{ verta($opinion->created_at)->format('%Y') }}
                            </td>
                            <td>
                                #
                            </td>
                        </tr>
                    @empty
                        <tr class="text-center">
                            <td colspan="10">هیچ اطلاعاتی یافت نشد</td>
                        </tr>
                    @endforelse

                </tbody>
            </table>
            <div class="mt-2">
                {{ $opinions }}
            </div>
        </div>
    </div>
    <!--/ Hoverable Table rows -->
@endsection
