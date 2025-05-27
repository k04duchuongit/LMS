@extends('shared.layouts.app')
@section('content')
        <div class="main-content">
            <div class="content-header">
                <div class="header-left">
                    <h1>Phân công giảng viên cho môn học</h1>
                    <p class="text-muted">Quản lý việc phân công giảng viên cho từng môn học</p>
                </div>
                <div class="header-right">
                    <div class="search-box">
                        <i class="fas fa-search"></i>
                        <input type="text" class="form-control" placeholder="Tìm kiếm môn học hoặc giảng viên...">
                    </div>
                    <div class="header-actions">
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#assignModal">
                            <i class="fas fa-plus me-2"></i>Phân công mới
                        </button>
                    </div>
                </div>
            </div>
            <!-- Bộ lọc -->
            <div class="filters-section mb-4">
                <div class="row g-3">
                    <div class="col-md-4">
                        <label class="form-label">Môn học</label>
                        <select class="form-select">
                            <option value="">Tất cả môn học</option>
                            <option value="1">Lập trình Web</option>
                            <option value="2">Thiết kế UI/UX</option>
                            <option value="3">Tiếng Anh</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Giảng viên</label>
                        <select class="form-select">
                            <option value="">Tất cả giảng viên</option>
                            <option value="1">Nguyễn Văn A</option>
                            <option value="2">Trần Thị B</option>
                            <option value="3">Lê Văn C</option>
                        </select>
                    </div>
                    <div class="col-md-4 d-flex align-items-end">
                        <button class="btn btn-secondary w-100">
                            <i class="fas fa-filter me-2"></i>Lọc
                        </button>
                    </div>
                </div>
            </div>
            <!-- Danh sách phân công -->
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Môn học</th>
                            <th>Giảng viên</th>
                            <th>Ngày phân công</th>
                            <th>Ghi chú</th>
                            <th>Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Lập trình Web</td>
                            <td>
                                <span class="badge bg-primary me-1">Nguyễn Văn A</span>
                                <span class="badge bg-primary me-1">Trần Thị B</span>
                            </td>
                            <td>15/03/2024</td>
                            <td>Phân công chính</td>
                            <td>
                                <div class="btn-group">
                                    <button class="btn btn-sm btn-info" data-bs-toggle="modal"
                                        data-bs-target="#assignModal"><i class="fas fa-edit"></i></button>
                                    <button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Thiết kế UI/UX</td>
                            <td>
                                <span class="badge bg-primary me-1">Trần Thị B</span>
                                <span class="badge bg-primary me-1">Lê Văn C</span>
                            </td>
                            <td>16/03/2024</td>
                            <td>Phụ trách thực hành</td>
                            <td>
                                <div class="btn-group">
                                    <button class="btn btn-sm btn-info" data-bs-toggle="modal"
                                        data-bs-target="#assignModal"><i class="fas fa-edit"></i></button>
                                    <button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Tiếng Anh</td>
                            <td>
                                <span class="badge bg-primary me-1">Lê Văn C</span>
                            </td>
                            <td>17/03/2024</td>
                            <td></td>
                            <td>
                                <div class="btn-group">
                                    <button class="btn btn-sm btn-info" data-bs-toggle="modal"
                                        data-bs-target="#assignModal"><i class="fas fa-edit"></i></button>
                                    <button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- Phân trang -->
            <div class="pagination-section mt-4 d-flex justify-content-between align-items-center">
                <div class="pagination-info">Hiển thị 1-3 của 10 phân công</div>
                <nav>
                    <ul class="pagination mb-0">
                        <li class="page-item disabled"><a class="page-link" href="#"><i
                                    class="fas fa-chevron-left"></i></a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                        </li>
                    </ul>
                </nav>
            </div>

              <div class="modal fade" id="assignModal" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Phân công giảng viên cho môn học</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="mb-3">
                                <label class="form-label">Môn học <span class="text-danger">*</span></label>
                                <select class="form-select" required>
                                    <option value="">Chọn môn học</option>
                                    <option value="1">Lập trình Web</option>
                                    <option value="2">Thiết kế UI/UX</option>
                                    <option value="3">Tiếng Anh</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Giảng viên <span class="text-danger">*</span></label>
                                <select class="form-select" multiple required size="3">
                                    <option value="1">Nguyễn Văn A</option>
                                    <option value="2">Trần Thị B</option>
                                    <option value="3">Lê Văn C</option>
                                </select>
                                <small class="text-muted">Giữ Ctrl (Windows) hoặc Cmd (Mac) để chọn nhiều giảng
                                    viên</small>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Ghi chú</label>
                                <input type="text" class="form-control" placeholder="Ghi chú (nếu có)">
                            </div>
                            <div class="d-flex justify-content-end gap-2">
                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Hủy</button>
                                <button type="submit" class="btn btn-primary">Lưu phân công</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
@endsection
