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
            <div class="row g-3">
                <div class="col-md-4">
                    <div class="search-box">
                        <i class="fas fa-search"></i>
                        <input type="text" class="form-control" placeholder="Tìm kiếm người dùng...">
                    </div>
                </div>
                <div class="col-md-3">
                    <select class="form-select">
                        <option value="">Tất cả vai trò</option>
                        <option value="admin">Quản trị viên</option>
                        <option value="teacher">Giảng viên</option>
                        <option value="student">Học viên</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <select class="form-select">
                        <option value="">Tất cả trạng thái</option>
                        <option value="active">Đang hoạt động</option>
                        <option value="inactive">Không hoạt động</option>
                        <option value="pending">Chờ duyệt</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <button class="btn btn-secondary w-100">
                        <i class="fas fa-filter me-2"></i>Lọc
                    </button>
                </div>
            </div>
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
                        <th style="width: 100px;">Ngày tạo</th>
                        <th style="width: 120px;">Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($userViewModel->users() as $user)
                        <tr>
                            <td>
                                <input type="checkbox" class="form-check-input">
                            </td>
                            <td>
                                <div class="user-info">
                                    <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="User"
                                        class="user-avatar">
                                    <div>
                                        <div class="user-name">{{ $user->name }}</div>
                                        <div class="user-id">ID: {{ $user->id }}</div>
                                    </div>
                                </div>
                            </td>
                            <td>{{ $user->email }}</td>
                            <td>
                                <span class="badge bg-primary">{{ $user->role }}</span>
                            </td>
                            <td>
                                <span class="badge bg-success">Đang hoạt động</span>
                            </td>
                            <td>{{ $user->created_at->format('d/m/Y') }}</td>
                            <td>
                                <div class="action-buttons">
                                    <a href="{{ route('admin.user.show', $user->id) }}"  class="btn btn-sm btn-info" title="Xem chi tiết">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <button class="btn btn-sm btn-warning" title="Chỉnh sửa">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button class="btn btn-sm btn-danger" title="Xóa">
                                        <i class="fas fa-trash"></i>
                                    </button>
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
                    <nav aria-label="Page navigation">
                        <ul class="pagination justify-content-end">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1">Trước</a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">Sau</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection
