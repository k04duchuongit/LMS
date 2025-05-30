@extends('shared.layouts.app')
@section('content')
<div class="main-content">
            <!-- Header -->
            <div class="content-header">
                <div class="header-left">
                    <h1>Đánh giá giảng viên</h1>
                    <p class="text-muted">Xem kết quả đánh giá và phản hồi của học viên</p>
                </div>
                <div class="header-right">
                    <div class="search-box">
                        <i class="fas fa-search"></i>
                        <input type="text" class="form-control" placeholder="Tìm kiếm giảng viên...">
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
                            <label class="form-label">Khoảng thời gian</label>
                            <select class="form-select">
                                <option value="all">Tất cả thời gian</option>
                                <option value="thisMonth">Tháng này</option>
                                <option value="lastMonth">Tháng trước</option>
                                <option value="thisYear">Năm nay</option>
                                <option value="custom">Tùy chọn</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">Môn học</label>
                            <select class="form-select">
                                <option value="all">Tất cả môn học</option>
                                <option value="math">Toán học</option>
                                <option value="physics">Vật lý</option>
                                <option value="chemistry">Hóa học</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">Xếp hạng</label>
                            <select class="form-select">
                                <option value="all">Tất cả xếp hạng</option>
                                <option value="5">5 sao</option>
                                <option value="4">4 sao trở lên</option>
                                <option value="3">3 sao trở lên</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">Sắp xếp</label>
                            <select class="form-select">
                                <option value="rating">Theo điểm đánh giá</option>
                                <option value="reviews">Theo số lượng đánh giá</option>
                                <option value="recent">Theo thời gian gần nhất</option>
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
                                    <i class="fas fa-star"></i>
                                </div>
                                <div class="ms-3">
                                    <h6 class="mb-1">Điểm trung bình</h6>
                                    <h3 class="mb-0">4.5</h3>
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
                                    <i class="fas fa-users"></i>
                                </div>
                                <div class="ms-3">
                                    <h6 class="mb-1">Tổng đánh giá</h6>
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
                                <div class="stats-icon bg-info">
                                    <i class="fas fa-chalkboard-teacher"></i>
                                </div>
                                <div class="ms-3">
                                    <h6 class="mb-1">Số giảng viên</h6>
                                    <h3 class="mb-0">45</h3>
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
                                    <i class="fas fa-comments"></i>
                                </div>
                                <div class="ms-3">
                                    <h6 class="mb-1">Phản hồi mới</h6>
                                    <h3 class="mb-0">28</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Teacher List -->
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Giảng viên</th>
                                    <th>Môn học</th>
                                    <th>Điểm đánh giá</th>
                                    <th>Số đánh giá</th>
                                    <th>Phản hồi tích cực</th>
                                    <th>Thao tác</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Teacher"
                                                class="rounded-circle me-2" width="40">
                                            <div>
                                                <h6 class="mb-0">Nguyễn Văn A</h6>
                                                <small class="text-muted">Toán học</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Toán học</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="me-2">4.8</div>
                                            <div class="text-warning">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                            </div>
                                        </div>
                                    </td>
                                    <td>156</td>
                                    <td>92%</td>
                                    <td>
                                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#teacherModal">
                                            <i class="fas fa-eye me-1"></i>Chi tiết
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Teacher"
                                                class="rounded-circle me-2" width="40">
                                            <div>
                                                <h6 class="mb-0">Trần Thị B</h6>
                                                <small class="text-muted">Vật lý</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Vật lý</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="me-2">4.6</div>
                                            <div class="text-warning">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                            </div>
                                        </div>
                                    </td>
                                    <td>128</td>
                                    <td>88%</td>
                                    <td>
                                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#teacherModal">
                                            <i class="fas fa-eye me-1"></i>Chi tiết
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="https://randomuser.me/api/portraits/men/67.jpg" alt="Teacher"
                                                class="rounded-circle me-2" width="40">
                                            <div>
                                                <h6 class="mb-0">Lê Văn C</h6>
                                                <small class="text-muted">Hóa học</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Hóa học</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="me-2">4.7</div>
                                            <div class="text-warning">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                            </div>
                                        </div>
                                    </td>
                                    <td>142</td>
                                    <td>90%</td>
                                    <td>
                                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#teacherModal">
                                            <i class="fas fa-eye me-1"></i>Chi tiết
                                        </button>
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