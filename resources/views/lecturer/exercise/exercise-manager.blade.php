  @extends('shared.layouts.app')
 @section('content')<div class="main-content">
            <!-- Page Header -->
            <div class="py-4">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <div class="page-header-content">
                        <h2 class="text-gradient fw-bold mb-3">Quản lý Quiz</h2>
                        <p class="text-muted">Tạo và quản lý các bài kiểm tra, đánh giá</p>
                    </div>
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createQuizModal">
                        <i class="fas fa-plus me-2"></i>Tạo Quiz mới
                    </button>
                </div>

                <!-- Filter and Search -->
                <div class="card shadow-sm mb-4">
                    <div class="card-body">
                        <div class="row g-3">
                            <div class="col-md-4">
                                <div class="input-group">
                                    <span class="input-group-text bg-white">
                                        <i class="fas fa-search text-muted"></i>
                                    </span>
                                    <input type="text" class="form-control" placeholder="Tìm kiếm quiz...">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <select class="form-select">
                                    <option selected>Tất cả lớp học</option>
                                    <option>Lập trình Web cơ bản</option>
                                    <option>Lập trình Python nâng cao</option>
                                    <option>Lập trình Java cơ bản</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <select class="form-select">
                                    <option selected>Tất cả trạng thái</option>
                                    <option>Đang hoạt động</option>
                                    <option>Bản nháp</option>
                                    <option>Đã lưu trữ</option>
                                    <option>Đã lên lịch</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <button class="btn btn-outline-secondary w-100">
                                    <i class="fas fa-filter me-2"></i>Lọc
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Quiz Table -->
                <div class="card shadow-sm mb-4">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover align-middle">
                                <thead class="table-light">
                                    <tr>
                                        <th scope="col" style="width: 50px;">#</th>
                                        <th scope="col">Tên Quiz</th>
                                        <th scope="col">Lớp học</th>
                                        <th scope="col">Thời gian</th>
                                        <th scope="col">Số câu hỏi</th>
                                        <th scope="col">Trạng thái</th>
                                        <th scope="col">Ngày tạo</th>
                                        <th scope="col" style="width: 120px;">Thao tác</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>
                                            <div class="fw-semibold">Kiểm tra giữa kỳ: HTML & CSS</div>
                                            <div class="small text-muted">Quiz ID: QZ001</div>
                                        </td>
                                        <td>Lập trình Web cơ bản</td>
                                        <td>45 phút</td>
                                        <td>30 câu</td>
                                        <td><span class="quiz-status active">Đang hoạt động</span></td>
                                        <td>05/05/2024</td>
                                        <td>
                                            <div class="btn-group">
                                                <a href="#" class="btn btn-sm btn-outline-primary">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">
                                                    <i class="fas fa-ellipsis-v"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li><a class="dropdown-item" href="#"><i class="fas fa-eye me-2"></i>Xem chi tiết</a></li>
                                                    <li><a class="dropdown-item" href="#"><i class="fas fa-chart-bar me-2"></i>Xem kết quả</a></li>
                                                    <li><a class="dropdown-item" href="#"><i class="fas fa-copy me-2"></i>Sao chép</a></li>
                                                    <li><hr class="dropdown-divider"></li>
                                                    <li><a class="dropdown-item text-danger" href="#"><i class="fas fa-archive me-2"></i>Lưu trữ</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>
                                            <div class="fw-semibold">Kiểm tra cuối kỳ: JavaScript</div>
                                            <div class="small text-muted">Quiz ID: QZ002</div>
                                        </td>
                                        <td>Lập trình Web cơ bản</td>
                                        <td>60 phút</td>
                                        <td>40 câu</td>
                                        <td><span class="quiz-status scheduled">Đã lên lịch</span></td>
                                        <td>08/05/2024</td>
                                        <td>
                                            <div class="btn-group">
                                                <a href="#" class="btn btn-sm btn-outline-primary">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">
                                                    <i class="fas fa-ellipsis-v"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li><a class="dropdown-item" href="#"><i class="fas fa-eye me-2"></i>Xem chi tiết</a></li>
                                                    <li><a class="dropdown-item" href="#"><i class="fas fa-calendar-alt me-2"></i>Thay đổi lịch</a></li>
                                                    <li><a class="dropdown-item" href="#"><i class="fas fa-copy me-2"></i>Sao chép</a></li>
                                                    <li><hr class="dropdown-divider"></li>
                                                    <li><a class="dropdown-item text-danger" href="#"><i class="fas fa-trash me-2"></i>Hủy lịch</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>
                                            <div class="fw-semibold">Kiểm tra nhanh: Python cơ bản</div>
                                            <div class="small text-muted">Quiz ID: QZ003</div>
                                        </td>
                                        <td>Lập trình Python nâng cao</td>
                                        <td>20 phút</td>
                                        <td>15 câu</td>
                                        <td><span class="quiz-status draft">Bản nháp</span></td>
                                        <td>10/05/2024</td>
                                        <td>
                                            <div class="btn-group">
                                                <a href="#" class="btn btn-sm btn-outline-primary">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">
                                                    <i class="fas fa-ellipsis-v"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li><a class="dropdown-item" href="#"><i class="fas fa-eye me-2"></i>Xem chi tiết</a></li>
                                                    <li><a class="dropdown-item" href="#"><i class="fas fa-play me-2"></i>Xuất bản</a></li>
                                                    <li><a class="dropdown-item" href="#"><i class="fas fa-copy me-2"></i>Sao chép</a></li>
                                                    <li><hr class="dropdown-divider"></li>
                                                    <li><a class="dropdown-item text-danger" href="#"><i class="fas fa-trash me-2"></i>Xóa</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>
                                            <div class="fw-semibold">Kiểm tra giữa kỳ: Cấu trúc dữ liệu</div>
                                            <div class="small text-muted">Quiz ID: QZ004</div>
                                        </td>
                                        <td>Lập trình Python nâng cao</td>
                                        <td>45 phút</td>
                                        <td>25 câu</td>
                                        <td><span class="quiz-status archived">Đã lưu trữ</span></td>
                                        <td>01/04/2024</td>
                                        <td>
                                            <div class="btn-group">
                                                <a href="#" class="btn btn-sm btn-outline-secondary">
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                                <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">
                                                    <i class="fas fa-ellipsis-v"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li><a class="dropdown-item" href="#"><i class="fas fa-eye me-2"></i>Xem chi tiết</a></li>
                                                    <li><a class="dropdown-item" href="#"><i class="fas fa-chart-bar me-2"></i>Xem kết quả</a></li>
                                                    <li><a class="dropdown-item" href="#"><i class="fas fa-copy me-2"></i>Sao chép</a></li>
                                                    <li><hr class="dropdown-divider"></li>
                                                    <li><a class="dropdown-item text-success" href="#"><i class="fas fa-redo me-2"></i>Khôi phục</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Pagination -->
                <div class="d-flex justify-content-between align-items-center">
                    <div class="text-muted small">Hiển thị 1-4 của 4 mục</div>
                    <nav>
                        <ul class="pagination pagination-sm">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                                    <i class="fas fa-chevron-left"></i>
                                </a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item disabled">
                                <a class="page-link" href="#">
                                    <i class="fas fa-chevron-right"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div> 
        @endsection