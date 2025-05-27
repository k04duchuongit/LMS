@extends('shared.layouts.app')
@section('content')
       <div class="main-content">
            <!-- Header -->
            <div class="content-header">
                <div class="header-left">
                    <h1>Danh sách môn học</h1>
                    <p class="text-muted">Quản lý và theo dõi các môn học trong hệ thống</p>
                </div>
                <div class="header-right">
                    <div class="search-box">
                        <i class="fas fa-search"></i>
                        <input type="text" class="form-control" placeholder="Tìm kiếm môn học...">
                    </div>
                    <div class="header-actions">
                        <a href="addSubject.html" class="btn btn-primary">
                            <i class="fas fa-plus me-2"></i>Thêm môn học
                        </a>
                    </div>
                </div>
            </div>

            <!-- Filters Section -->
            <div class="filters-section">
                <div class="row g-3">
                    <div class="col-md-3">
                        <select class="form-select">
                            <option value="">Tất cả danh mục</option>
                            <option value="programming">Lập trình</option>
                            <option value="design">Thiết kế</option>
                            <option value="business">Kinh doanh</option>
                            <option value="language">Ngoại ngữ</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <select class="form-select">
                            <option value="">Tất cả trạng thái</option>
                            <option value="active">Đang hoạt động</option>
                            <option value="inactive">Không hoạt động</option>
                            <option value="draft">Bản nháp</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <select class="form-select">
                            <option value="">Tất cả giảng viên</option>
                            <option value="1">Nguyễn Văn A</option>
                            <option value="2">Trần Thị B</option>
                            <option value="3">Lê Văn C</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <button class="btn btn-secondary w-100">
                            <i class="fas fa-filter me-2"></i>Lọc
                        </button>
                    </div>
                </div>
            </div>

            <!-- Subjects Table -->
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th width="50">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="selectAll">
                                </div>
                            </th>
                            <th>Môn học</th>
                            <th>Danh mục</th>
                            <th>Giảng viên</th>
                            <th>Học viên</th>
                            <th>Trạng thái</th>
                            <th>Ngày tạo</th>
                            <th width="150">Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox">
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="https://via.placeholder.com/40" class="rounded me-2" width="40" height="40">
                                    <div>
                                        <h6 class="mb-0">Lập trình Web với PHP</h6>
                                        <small class="text-muted">Mã: WEB101</small>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <span class="badge bg-primary">Lập trình</span>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="https://randomuser.me/api/portraits/men/32.jpg" class="rounded-circle me-2" width="32" height="32">
                                    <span>Nguyễn Văn A</span>
                                </div>
                            </td>
                            <td>
                                <span class="badge bg-info">45 học viên</span>
                            </td>
                            <td>
                                <span class="badge bg-success">Đang hoạt động</span>
                            </td>
                            <td>01/01/2024</td>
                            <td>
                                <div class="action-buttons">
                                    <button class="btn btn-info btn-sm" title="Xem chi tiết">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <button class="btn btn-warning btn-sm" title="Chỉnh sửa">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button class="btn btn-danger btn-sm" title="Xóa">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox">
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="https://via.placeholder.com/40" class="rounded me-2" width="40" height="40">
                                    <div>
                                        <h6 class="mb-0">Thiết kế UI/UX</h6>
                                        <small class="text-muted">Mã: UI101</small>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <span class="badge bg-warning">Thiết kế</span>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="https://randomuser.me/api/portraits/women/32.jpg" class="rounded-circle me-2" width="32" height="32">
                                    <span>Trần Thị B</span>
                                </div>
                            </td>
                            <td>
                                <span class="badge bg-info">32 học viên</span>
                            </td>
                            <td>
                                <span class="badge bg-success">Đang hoạt động</span>
                            </td>
                            <td>02/01/2024</td>
                            <td>
                                <div class="action-buttons">
                                    <button class="btn btn-info btn-sm" title="Xem chi tiết">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <button class="btn btn-warning btn-sm" title="Chỉnh sửa">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button class="btn btn-danger btn-sm" title="Xóa">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Pagination -->
            <div class="pagination-section">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <p class="pagination-info">Hiển thị 1-2 của 20 kết quả</p>
                    </div>
                    <div class="col-md-6">
                        <nav class="float-md-end">
                            <ul class="pagination mb-0">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#"><i class="fas fa-chevron-left"></i></a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
@endsection
