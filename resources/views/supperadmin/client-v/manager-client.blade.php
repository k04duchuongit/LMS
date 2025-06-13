@extends('shared.layouts.app')
@section('content')
    <div class="main-content">
        <!-- Header -->
        <div class="content-header">

            <h1>Danh sách người dùng</h1>
            <div class="header-actions">
                <a href="{{ route('admin.user.create') }}" class="btn btn-primary">
                    <i class="fas fa-user-plus me-2"></i>Thêm người dùng
                </a>
            </div>
        </div>

        <!-- Filters -->
        <div class="filters-section">
            <form href="{{ route('admin.user.index') }}" method="GET" class="row g-3">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="col-md-4">
                    <div class="search-box">
                        <i class="fas fa-search"></i>
                        <input type="text" name="name-search" value="{{ request('name-search') }}" class="form-control"
                            placeholder="Tìm kiếm người dùng...">
                    </div>
                </div>
                <div class="col-md-3">
                    <select class="form-select" name="role-search">
                        <option value="">Tất cả vai trò</option>
                        <option value="admin">Quản trị viên</option>
                        <option value="lecturer">Giảng viên</option>
                        <option value="student">Học viên</option>
                    </select>
                </div>

                <div class="col-md-2">
                    <button type="submit" class="btn btn-secondary w-100">
                        <i class="fas fa-filter me-2"></i>Lọc
                    </button>
                </div>
            </form>
        </div>

        <!-- Users Table -->
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th style="width: 40px;">
                            <input type="checkbox" class="form-check-input">
                        </th>
                        <th style="width: 200px;">Người dùng</th>
                        <th>Email</th>
                        <th style="width: 100px;">Vai trò</th>
                        <th style="width: 120px;">Trạng thái</th>
                        <th style="width: 120px;">Ngày tạo</th>
                        <th style="width: 120px;">Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($usersViewModel as $user)
                        <tr>
                            <td>
                                <input type="checkbox" class="form-check-input">
                            </td>
                            <td>
                                <div class="user-info">
                                    <img src="{{ $user->getAvatar() }}" alt="User" class="user-avatar">
                                    <div>
                                        <div class="user-name">{{ $user->getFullName() }}</div>
                                        <div class="user-id">ID: {{ $user->getId() }}</div>
                                    </div>
                                </div>
                            </td>
                            <td>{{ $user->getEmail() }}</td>
                            <td>
                                <span class="badge bg-primary">{{ $user->getRole() }}</span>
                            </td>
                            <td>
                                <span class="badge bg-success">Đang hoạt động</span>
                            </td>
                            <td>{{ $user->getCreatedAt() }}</td>
                            <td>
                                <div class="action-buttons">
                                    <a href="{{ route('admin.user.show', $user->getId()) }}" class="btn btn-sm btn-info"
                                        title="Xem chi tiết">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="{{ route('admin.user.edit', $user->getId()) }}" class="btn btn-sm btn-warning"
                                        title="Chỉnh sửa">
                                        <i class="fas fa-edit"></i>
                                    </a>

                                    <form action="{{ route('admin.user.destroy', $user->getId()) }}" method="POST"
                                        onsubmit="return confirm('Bạn có chắc chắn muốn xoá?')">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-danger" title="Xóa">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>


                                </div>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <div class="pagination-section">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="pagination-info">
                        Hiển thị 1-3 của 50 kết quả
                    </div>
                </div>
                <div class="col-md-6">
                    @php
                        $currentPage = $usersViewModel->currentPage();
                        $lastPage = $usersViewModel->lastPage();
                    @endphp

                    <nav aria-label="Page navigation">
                        <ul class="pagination justify-content-end">

                            {{-- Nút "Trước" --}}
                            <li class="page-item {{ $currentPage == 1 ? 'disabled' : '' }}">
                                <a class="page-link"
                                    href="{{ $usersViewModel->appends(request()->query())->url($currentPage - 1) }}"
                                    tabindex="-1">Trước</a>
                            </li>

                            {{-- Các nút số trang --}}
                            @for ($i = 1; $i <= $lastPage; $i++)
                                <li class="page-item {{ $i == $currentPage ? 'active' : '' }}">
                                    <a class="page-link"
                                        href="{{ $usersViewModel->appends(request()->query())->url($i) }}">{{ $i }}</a>
                                </li>
                            @endfor

                            {{-- Nút "Sau" --}}
                            <li class="page-item {{ $currentPage == $lastPage ? 'disabled' : '' }}">
                                <a class="page-link"
                                    href="{{ $usersViewModel->appends(request()->query())->url($currentPage + 1) }}">Sau</a>
                            </li>

                        </ul>
                    </nav>


                </div>
            </div>
        </div>
    </div>
@endsection
