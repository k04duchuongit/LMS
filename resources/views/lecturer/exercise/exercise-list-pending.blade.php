  @extends('shared.layouts.app')
 @section('content')<div class="main-content">
            <!-- Page Header -->
            <div class="container-fluid py-4">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <div class="page-header-content">
                        <h2 class="text-gradient fw-bold mb-3">Danh sách bài tập cần chấm</h2>
                        <p class="lead">Quản lý và chấm điểm bài làm của học viên</p>
                    </div>
                </div>

                <!-- Filters -->
                <div class="card shadow-sm mb-4">
                    <div class="card-body">
                        <div class="row g-3">
                            <div class="col-md-3">
                                <label class="form-label">Lớp học</label>
                                <select class="form-select">
                                    <option value="">Tất cả lớp học</option>
                                    <option>Lập trình Web cơ bản</option>
                                    <option>Lập trình Python nâng cao</option>
                                    <option>Lập trình Java cơ bản</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">Loại bài tập</label>
                                <select class="form-select">
                                    <option value="">Tất cả loại</option>
                                    <option>Quiz</option>
                                    <option>Assignment</option>
                                    <option>Project</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">Trạng thái</label>
                                <select class="form-select">
                                    <option value="">Tất cả trạng thái</option>
                                    <option>Chưa chấm</option>
                                    <option>Đã chấm</option>
                                    <option>Đã duyệt</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">Tìm kiếm</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Tìm theo tên học viên...">
                                    <button class="btn btn-primary">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Submissions Table -->
                <div class="card shadow-sm">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Học viên</th>
                                        <th>Lớp học</th>
                                        <th>Loại bài tập</th>
                                        <th>Tên bài tập</th>
                                        <th>Ngày nộp</th>
                                        <th>Trạng thái</th>
                                        <th>Thao tác</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="https://randomuser.me/api/portraits/women/32.jpg" class="rounded-circle me-2" width="32" height="32">
                                                <div>
                                                    <div class="fw-bold">Nguyễn Văn A</div>
                                                    <div class="small text-muted">MSSV: 2021001</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Lập trình Web cơ bản</td>
                                        <td>Assignment</td>
                                        <td>Bài tập về nhà số 3</td>
                                        <td>15/03/2024</td>
                                        <td><span class="badge bg-warning">Chưa chấm</span></td>
                                        <td>
                                            <a href="quiz-grade.html?id=1" class="btn btn-sm btn-primary">
                                                <i class="fas fa-pen me-1"></i>Chấm điểm
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="https://randomuser.me/api/portraits/men/33.jpg" class="rounded-circle me-2" width="32" height="32">
                                                <div>
                                                    <div class="fw-bold">Trần Thị B</div>
                                                    <div class="small text-muted">MSSV: 2021002</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Lập trình Python nâng cao</td>
                                        <td>Project</td>
                                        <td>Project cuối kỳ</td>
                                        <td>14/03/2024</td>
                                        <td><span class="badge bg-info">Đã chấm</span></td>
                                        <td>
                                            <a href="quiz-grade.html?id=2" class="btn btn-sm btn-primary">
                                                <i class="fas fa-eye me-1"></i>Xem lại
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <!-- Pagination -->
                        <nav class="mt-4">
                            <ul class="pagination justify-content-center">
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