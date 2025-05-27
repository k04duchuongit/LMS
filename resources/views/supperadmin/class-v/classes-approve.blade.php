@extends('shared.layouts.app')
@section('content')
        <div class="main-content">
            <!-- Header -->
            <div class="content-header">
                <div class="header-left">
                    <h1>Duyệt yêu cầu tạo lớp</h1>
                    <p class="text-muted">Xem xét và duyệt các yêu cầu tạo lớp từ giáo viên</p>
                </div>
                <div class="header-right">
                    <div class="search-box">
                        <i class="fas fa-search"></i>
                        <input type="text" class="form-control" placeholder="Tìm kiếm...">
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

            <!-- Filters Section -->
            <div class="filters-section">
                <div class="row g-3">
                    <div class="col-md-3">
                        <select class="form-select">
                            <option value="">Tất cả môn học</option>
                            <option value="1">Lập trình Web</option>
                            <option value="2">Thiết kế UI/UX</option>
                            <option value="3">Tiếng Anh</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <select class="form-select">
                            <option value="">Tất cả trạng thái</option>
                            <option value="pending">Chờ duyệt</option>
                            <option value="approved">Đã duyệt</option>
                            <option value="rejected">Từ chối</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <select class="form-select">
                            <option value="">Tất cả giáo viên</option>
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

            <!-- Requests Table -->
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th width="50">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="selectAll">
                                </div>
                            </th>
                            <th>Thông tin lớp</th>
                            <th>Giáo viên</th>
                            <th>Thời gian</th>
                            <th>Trạng thái</th>
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
                                        <h6 class="mb-0">Lớp Lập trình Web PHP</h6>
                                        <small class="text-muted">Mã lớp: WEB001</small>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="https://randomuser.me/api/portraits/men/32.jpg" class="rounded-circle me-2" width="32" height="32">
                                    <span>Nguyễn Văn A</span>
                                </div>
                            </td>
                            <td>
                                <div>Ngày tạo: 01/01/2024</div>
                                <small class="text-muted">Dự kiến khai giảng: 15/01/2024</small>
                            </td>
                            <td>
                                <span class="badge bg-warning">Chờ duyệt</span>
                            </td>
                            <td>
                                <div class="action-buttons">
                                    <button class="btn btn-info btn-sm" title="Xem chi tiết" data-bs-toggle="modal" data-bs-target="#requestModal">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <button class="btn btn-success btn-sm" title="Duyệt">
                                        <i class="fas fa-check"></i>
                                    </button>
                                    <button class="btn btn-danger btn-sm" title="Từ chối">
                                        <i class="fas fa-times"></i>
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
                                        <h6 class="mb-0">Lớp Thiết kế UI/UX</h6>
                                        <small class="text-muted">Mã lớp: UI001</small>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="https://randomuser.me/api/portraits/women/32.jpg" class="rounded-circle me-2" width="32" height="32">
                                    <span>Trần Thị B</span>
                                </div>
                            </td>
                            <td>
                                <div>Ngày tạo: 02/01/2024</div>
                                <small class="text-muted">Dự kiến khai giảng: 20/01/2024</small>
                            </td>
                            <td>
                                <span class="badge bg-warning">Chờ duyệt</span>
                            </td>
                            <td>
                                <div class="action-buttons">
                                    <button class="btn btn-info btn-sm" title="Xem chi tiết" data-bs-toggle="modal" data-bs-target="#requestModal">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <button class="btn btn-success btn-sm" title="Duyệt">
                                        <i class="fas fa-check"></i>
                                    </button>
                                    <button class="btn btn-danger btn-sm" title="Từ chối">
                                        <i class="fas fa-times"></i>
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
                        <p class="pagination-info">Hiển thị 1-2 của 10 kết quả</p>
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
