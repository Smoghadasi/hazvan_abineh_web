@extends('layouts.admin')
@section('content')
    <!-- Hoverable Table rows -->
    <div class="card">
        <h5 class="card-header">
            <div class="row justify-content-between">
                <div class="col">
                    <span>لیست اعضای تیم</span>

                </div>
                <div class="col text-end">
                    <a class="btn btn-primary btn-sm" href="{{ route('admin.team.create') }}">اعضای جدید</a>
                </div>
            </div>
        </h5>
        <div class="table-responsive text-nowrap">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>نام و نام خانوادگی</th>
                        <th>سمت | رسته</th>
                        <th>تاریخ ایجاد</th>
                        <th>عملیات</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @forelse ($teams as $team)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $team->name }}</td>
                            <td>{{ $team->job }}</td>
                            <td>
                                {{ verta($team->created_at)->format('%d') }} /
                                {{ verta($team->created_at)->format('%B') }} /
                                {{ verta($team->created_at)->format('%Y') }}
                            </td>
                            <td class="d-flex">
                                <a class="btn btn-sm btn-success"
                                    href="{{ route('admin.team.edit', $team->id) }}">ویرایش
                                </a>
                                <form method="post" action="{{ route('admin.team.destroy', $team) }}">
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
                {{ $teams }}
            </div>
        </div>
    </div>
    <!--/ Hoverable Table rows -->
@endsection
