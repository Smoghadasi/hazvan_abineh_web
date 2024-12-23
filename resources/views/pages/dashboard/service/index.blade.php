@extends('layouts.admin')
@section('content')
    <!-- Hoverable Table rows -->
    <div class="card">
        <h5 class="card-header">
            <div class="row justify-content-between">
                <div class="col">
                    <span>لیست خدمات</span>

                </div>
                <div class="col text-end">
                    <a class="btn btn-primary btn-sm" href="{{ route('admin.service.create') }}">خدمات جدید</a>
                </div>
            </div>
        </h5>
        <div class="table-responsive text-nowrap">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>نام</th>
                        <th>خلاصه توضیحات</th>
                        <th>تاریخ ایجاد</th>
                        <th>عملیات</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @forelse ($services as $service)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $service->title }}</td>
                            <td>{{ $service->meta_description }}</td>
                            <td>
                                {{ verta($service->created_at)->format('%d') }} /
                                {{ verta($service->created_at)->format('%B') }} /
                                {{ verta($service->created_at)->format('%Y') }}
                            </td>
                            <td class="d-flex">
                                <a class="btn btn-sm btn-success"
                                   href="{{ route('admin.service.edit', $service->id) }}">ویرایش
                                </a>
                                <form method="post" action="{{ route('admin.service.destroy', $service) }}">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger btn-sm" type="submit">حذف</button>
                                </form>
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
                {{ $services }}
            </div>
        </div>
    </div>
    <!--/ Hoverable Table rows -->
@endsection
