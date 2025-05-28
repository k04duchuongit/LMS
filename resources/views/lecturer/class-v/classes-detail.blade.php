 @extends('shared.layouts.app')
 @section('content')
   <div class="main-content">
    
            <!-- Header -->
            <div class="content-header">
                <div class="header-left">
                    <h2 class="text-gradient fw-bold mb-3">Chi tiết lớp học</h1>
                    <p class="text-muted">Thông tin và quản lý lớp học</p>
                </div>
                <div class="header-right">
                    <button class="btn btn-primary">
                        <i class="fas fa-user-plus me-2"></i>Thêm học viên
                    </button>
                </div>
            </div>

            <!-- Class Info -->
            <div class="row g-4 mb-4">
                <!-- Class Info Card -->
                <div class="col-lg-4">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-header bg-primary text-white py-3">
                            <h5 class="card-title mb-0">Lập trình Web cơ bản</h5>
                        </div>
                        <div class="card-body">
                            <div class="class-info">
                                <div class="info-item mb-3">
                                    <label class="text-muted small">Mã lớp</label>
                                    <div class="fw-semibold">WEB101</div>
                                </div>
                                <div class="info-item mb-3">
                                    <label class="text-muted small">Giảng viên</label>
                                    <div class="fw-semibold">TS. Nguyễn Văn A</div>
                                </div>
                                <div class="info-item mb-3">
                                    <label class="text-muted small">Thời gian</label>
                                    <div class="fw-semibold">01/04/2024 - 30/06/2024</div>
                                </div>
                                <div class="info-item mb-3">
                                    <label class="text-muted small">Trạng thái</label>
                                    <span class="badge bg-success">Đang hoạt động</span>
                                </div>
                                <div class="info-item mb-3">
                                    <label class="text-muted small">Số học viên</label>
                                    <div class="fw-semibold">32 học viên</div>
                                </div>
                                <div class="info-item">
                                    <label class="text-muted small">Mô tả</label>
                                    <p class="mb-0">Học các kiến thức cơ bản về HTML, CSS, JavaScript.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Stats Cards -->
                <div class="col-lg-8">
                    <div class="row g-4">
                        <div class="col-md-4">
                            <div class="card border-0 shadow-sm h-100">
                                <div class="card-body text-center">
                                    <div class="display-4 text-primary mb-2">5</div>
                                    <div class="text-muted">Quiz/Bài tập</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card border-0 shadow-sm h-100">
                                <div class="card-body text-center">
                                    <div class="display-4 text-success mb-2">8.2</div>
                                    <div class="text-muted">Điểm TB lớp</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card border-0 shadow-sm h-100">
                                <div class="card-body text-center">
                                    <div class="display-4 text-info mb-2">92%</div>
                                    <div class="text-muted">Tiến độ hoàn thành</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Search and Filter -->
            <div class="card border-0 shadow-sm mb-4">
                <div class="card-body">
                    <div class="row g-3">
                        <div class="col-md-4">
                            <div class="input-group">
                                <span class="input-group-text bg-white">
                                    <i class="fas fa-search text-muted"></i>
                                </span>
                                <input type="text" class="form-control" placeholder="Tìm kiếm học viên...">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <select class="form-select">
                                <option value="">Tất cả học viên</option>
                                <option value="active">Đang học</option>
                                <option value="inactive">Đã nghỉ</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <select class="form-select">
                                <option value="">Sắp xếp theo</option>
                                <option value="name_asc">Tên (A-Z)</option>
                                <option value="name_desc">Tên (Z-A)</option>
                                <option value="score_desc">Điểm cao nhất</option>
                                <option value="score_asc">Điểm thấp nhất</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Students List -->
            <div class="card border-0 shadow-sm">
                <div class="card-header bg-white py-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="card-title mb-0">
                            <i class="fas fa-users text-primary me-2"></i>
                            Danh sách học viên
                        </h5>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th class="text-center" style="width:40px;">#</th>
                                    <th>Học viên</th>
                                    <th class="text-center">Mã số</th>
                                    <th>Email</th>
                                    <th class="text-center">Điểm TB</th>
                                    <th class="text-center">Trạng thái</th>
                                    <th class="text-center">Thao tác</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center">1</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="https://randomuser.me/api/portraits/men/41.jpg" class="rounded-circle me-2" width="40" height="40">
                                            <div>
                                                <div class="fw-semibold">Nguyễn Văn A</div>
                                                <div class="small text-muted">Nam</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">SV001</td>
                                    <td>nguyenvana@example.com</td>
                                    <td class="text-center">8.5</td>
                                    <td class="text-center">
                                        <span class="badge bg-success">Đang học</span>
                                    </td>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            <button class="btn btn-sm btn-outline-primary" title="Xem chi tiết">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                            <button class="btn btn-sm btn-outline-primary" title="Gửi email">
                                                <i class="fas fa-envelope"></i>
                                            </button>
                                            <button class="btn btn-sm btn-outline-danger" title="Xóa khỏi lớp">
                                                <i class="fas fa-user-times"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">2</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="https://randomuser.me/api/portraits/women/67.jpg" class="rounded-circle me-2" width="40" height="40">
                                            <div>
                                                <div class="fw-semibold">Trần Thị B</div>
                                                <div class="small text-muted">Nữ</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">SV002</td>
                                    <td>tranthib@example.com</td>
                                    <td class="text-center">9.2</td>
                                    <td class="text-center">
                                        <span class="badge bg-success">Đang học</span>
                                    </td>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            <button class="btn btn-sm btn-outline-primary" title="Xem chi tiết">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                            <button class="btn btn-sm btn-outline-primary" title="Gửi email">
                                                <i class="fas fa-envelope"></i>
                                            </button>
                                            <button class="btn btn-sm btn-outline-danger" title="Xóa khỏi lớp">
                                                <i class="fas fa-user-times"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">3</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="https://randomuser.me/api/portraits/men/22.jpg" class="rounded-circle me-2" width="40" height="40">
                                            <div>
                                                <div class="fw-semibold">Lê Văn C</div>
                                                <div class="small text-muted">Nam</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">SV003</td>
                                    <td>levanc@example.com</td>
                                    <td class="text-center">7.8</td>
                                    <td class="text-center">
                                        <span class="badge bg-success">Đang học</span>
                                    </td>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            <button class="btn btn-sm btn-outline-primary" title="Xem chi tiết">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                            <button class="btn btn-sm btn-outline-primary" title="Gửi email">
                                                <i class="fas fa-envelope"></i>
                                            </button>
                                            <button class="btn btn-sm btn-outline-danger" title="Xóa khỏi lớp">
                                                <i class="fas fa-user-times"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- Pagination -->
                    <div class="d-flex justify-content-between align-items-center p-3">
                        <div class="text-muted small">Hiển thị 1-3 của 32 học viên</div>
                        <nav>
                            <ul class="pagination pagination-sm mb-0">
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
   