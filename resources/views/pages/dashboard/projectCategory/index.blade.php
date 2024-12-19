@extends('layouts.admin')
@section('content')
    <!-- Hoverable Table rows -->
    <div class="card">
        <h5 class="card-header">دسته بندی پروژه</h5>
        <div class="table-responsive text-nowrap">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>نام</th>
                        <th>عملیات</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @forelse ($categories as $category)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $category->title }}</td>
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
        </div>
    </div>
    <!--/ Hoverable Table rows -->
@endsection
