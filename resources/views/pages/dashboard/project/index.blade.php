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
                {{ $projects }}
            </div>
        </div>
    </div>
    <!--/ Hoverable Table rows -->
@endsection
