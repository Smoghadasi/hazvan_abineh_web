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
                            <td class="d-flex">
                                <a class="btn btn-sm btn-success"
                                    href="{{ route('admin.opinion.edit', $opinion->id) }}">ویرایش
                                </a>
                                <form method="post" action="{{ route('admin.opinion.destroy', $opinion) }}">
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
                {{ $opinions }}
            </div>
        </div>
    </div>
    <!--/ Hoverable Table rows -->
@endsection
