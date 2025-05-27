@extends('shared.layouts.app')
@section('content')
       <div class="main-content">
            <!-- Header -->
            <div class="content-header">
                <div class="header-left">
                    <h1>Lịch sử thông báo</h1>
                    <p class="text-muted">Xem và quản lý lịch sử thông báo đã gửi</p>
                </div>
                <div class="header-right">
                    <div class="search-box">
                        <i class="fas fa-search"></i>
                        <input type="text" class="form-control" placeholder="Tìm kiếm thông báo...">
                    </div>
                    <div class="header-actions">
                        <button class="btn btn-icon" title="Thông báo">
                            <i class="fas fa-bell"></i>
                            <span class="badge">3</span>
                        </button>
                        <button class="btn btn-icon" title="Tin nhắn">
                            <i class="fas fa-envelope"></i>
                            <span class="badge">5</span>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Filters -->
            <div class="card mb-4">
                <div class="card-body">
                    <div class="row g-3">
                        <div class="col-md-3">
                            <label class="form-label">Loại thông báo</label>
                            <select class="form-select">
                                <option value="all">Tất cả loại</option>
                                <option value="system">Thông báo hệ thống</option>
                                <option value="email">Email</option>
                                <option value="sms">SMS</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">Trạng thái</label>
                            <select class="form-select">
                                <option value="all">Tất cả trạng thái</option>
                                <option value="sent">Đã gửi</option>
                                <option value="failed">Gửi thất bại</option>
                                <option value="pending">Đang chờ</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">Thời gian</label>
                            <select class="form-select">
                                <option value="all">Tất cả thời gian</option>
                                <option value="today">Hôm nay</option>
                                <option value="week">Tuần này</option>
                                <option value="month">Tháng này</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">Người nhận</label>
                            <select class="form-select">
                                <option value="all">Tất cả người nhận</option>
                                <option value="students">Học viên</option>
                                <option value="teachers">Giảng viên</option>
                                <option value="admins">Quản trị viên</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Statistics -->
            <div class="row mb-4">
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="stats-icon bg-primary">
                                    <i class="fas fa-paper-plane"></i>
                                </div>
                                <div class="ms-3">
                                    <h6 class="mb-1">Tổng thông báo</h6>
                                    <h3 class="mb-0">1,234</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="stats-icon bg-success">
                                    <i class="fas fa-check-circle"></i>
                                </div>
                                <div class="ms-3">
                                    <h6 class="mb-1">Đã gửi thành công</h6>
                                    <h3 class="mb-0">1,180</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="stats-icon bg-danger">
                                    <i class="fas fa-times-circle"></i>
                                </div>
                                <div class="ms-3">
                                    <h6 class="mb-1">Gửi thất bại</h6>
                                    <h3 class="mb-0">54</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="stats-icon bg-warning">
                                    <i class="fas fa-clock"></i>
                                </div>
                                <div class="ms-3">
                                    <h6 class="mb-1">Đang chờ</h6>
                                    <h3 class="mb-0">12</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Notification List -->
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Tiêu đề</th>
                                    <th>Loại</th>
                                    <th>Người nhận</th>
                                    <th>Thời gian gửi</th>
                                    <th>Trạng thái</th>
                                    <th>Thao tác</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="notification-icon bg-primary me-3">
                                                <i class="fas fa-bell"></i>
                                            </div>
                                            <div>
                                                <h6 class="mb-0">Thông báo khai giảng khóa học mới</h6>
                                                <small class="text-muted">ID: #NTB001</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="badge bg-primary">Hệ thống</span>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <i class="fas fa-users me-2"></i>
                                            <span>Tất cả học viên</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex flex-column">
                                            <span>20/03/2024</span>
                                            <small class="text-muted">14:30</small>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="badge bg-success">Đã gửi</span>
                                    </td>
                                    <td>
                                        <div class="btn-group">
                                            <button class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#viewModal">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                            <button class="btn btn-sm btn-light">
                                                <i class="fas fa-redo"></i>
                                            </button>
                                            <button class="btn btn-sm btn-light text-danger">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="notification-icon bg-info me-3">
                                                <i class="fas fa-envelope"></i>
                                            </div>
                                            <div>
                                                <h6 class="mb-0">Thông báo lịch thi cuối kỳ</h6>
                                                <small class="text-muted">ID: #NTB002</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="badge bg-info">Email</span>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <i class="fas fa-user-graduate me-2"></i>
                                            <span>Học viên khóa 2024</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex flex-column">
                                            <span>19/03/2024</span>
                                            <small class="text-muted">09:15</small>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="badge bg-success">Đã gửi</span>
                                    </td>
                                    <td>
                                        <div class="btn-group">
                                            <button class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#viewModal">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                            <button class="btn btn-sm btn-light">
                                                <i class="fas fa-redo"></i>
                                            </button>
                                            <button class="btn btn-sm btn-light text-danger">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="notification-icon bg-warning me-3">
                                                <i class="fas fa-sms"></i>
                                            </div>
                                            <div>
                                                <h6 class="mb-0">Nhắc nhở nộp bài tập</h6>
                                                <small class="text-muted">ID: #NTB003</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="badge bg-warning">SMS</span>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <i class="fas fa-user-graduate me-2"></i>
                                            <span>Học viên lớp A1</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex flex-column">
                                            <span>18/03/2024</span>
                                            <small class="text-muted">16:45</small>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="badge bg-danger">Thất bại</span>
                                    </td>
                                    <td>
                                        <div class="btn-group">
                                            <button class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#viewModal">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                            <button class="btn btn-sm btn-light">
                                                <i class="fas fa-redo"></i>
                                            </button>
                                            <button class="btn btn-sm btn-light text-danger">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- Pagination -->
                    <div class="d-flex justify-content-between align-items-center mt-4">
                        <div class="text-muted">
                            Hiển thị 1-3 của 45 kết quả
                        </div>
                        <nav>
                            <ul class="pagination mb-0">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1">
                                        <i class="fas fa-chevron-left"></i>
                                    </a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">
                                        <i class="fas fa-chevron-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
@endsection
