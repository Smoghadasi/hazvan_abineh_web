@extends('layouts.admin')
@section('content')
    <!-- Hoverable Table rows -->
    <div class="card">
        <h5 class="card-header">
            <div class="row justify-content-between">
                <div class="col">
                    <span>لیست پروژه ها</span>

                </div>
                <div class="col text-end">
                    <a class="btn btn-primary btn-sm" href="{{ route('admin.project.create') }}">پروژه جدید</a>
                </div>
            </div>
        </h5>
        <div class="table-responsive text-nowrap">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>نام</th>
                        <th>تاریخ</th>
                        <th>عملیات</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @forelse ($projects as $project)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $project->title }}</td>
                            <td>
                                {{ verta($project->date)->format('%d') }} /
                                {{ verta($project->date)->format('%B') }} /
                                {{ verta($project->date)->format('%Y') }}
                            </td>
                            <td class="d-flex">
                                <a class="btn btn-sm btn-success"
                                    href="{{ route('admin.project.edit', $project->id) }}">ویرایش
                                </a>
                                <form method="post" action="{{ route('admin.project.destroy', $project) }}">
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
                {{ $projects }}
            </div>
        </div>
    </div>
    <!--/ Hoverable Table rows -->
@endsection
