@extends('layouts.admin')
@section('content')
    <!-- Hoverable Table rows -->
    <div class="card">
        <h5 class="card-header">
            <div class="row justify-content-between">
                <div class="col">
                    <span>لیست تماس با ما</span>
                </div>
            </div>
        </h5>
        <div class="table-responsive text-nowrap">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>نام و نام خانوادگی</th>
                        <th>ایمیل</th>
                        <th>تلفن</th>
                        <th>دسته بندی</th>
                        <th>پیام</th>
                        <th>تاریخ ایجاد</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @forelse ($contacts as $contact)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $contact->name ?? '-' }}</td>
                            <td>{{ $contact->email ?? '-' }}</td>
                            <td>{{ $contact->tel ?? '-' }}</td>
                            <td>{{ $contact->category ?? '-' }}</td>
                            <td>{{ $contact->message ?? '-' }}</td>
                            <td>
                                {{ verta($contact->created_at)->format('%d') }} /
                                {{ verta($contact->created_at)->format('%B') }} /
                                {{ verta($contact->created_at)->format('%Y') }}
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
                {{ $contacts }}
            </div>
        </div>
    </div>
    <!--/ Hoverable Table rows -->
@endsection
