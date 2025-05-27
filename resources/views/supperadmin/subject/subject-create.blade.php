@extends('shared.layouts.app')
@section('content')
    <div class="main-content">
        <!-- Header -->
        <div class="content-header">
            <div class="header-left">
                <h1>Thêm môn học mới</h1>
                <p class="text-muted">Tạo môn học mới cho hệ thống</p>
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

        <!-- Form Content -->
        <div class="row">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <form id="addSubjectForm">
                            <!-- Thông tin cơ bản -->
                            <div class="mb-4">
                                <h5 class="card-title mb-3">Thông tin cơ bản</h5>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label class="form-label">Tên môn học <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="subjectName" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Mã môn học <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="subjectCode" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Danh mục <span class="text-danger">*</span></label>
                                        <select class="form-select" name="category" required>
                                            <option value="">Chọn danh mục</option>
                                            <option value="programming">Lập trình</option>
                                            <option value="design">Thiết kế</option>
                                            <option value="business">Kinh doanh</option>
                                            <option value="language">Ngoại ngữ</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Giảng viên <span class="text-danger">*</span></label>
                                        <select class="form-select" name="instructor" required>
                                            <option value="">Chọn giảng viên</option>
                                            <option value="1">Nguyễn Văn A</option>
                                            <option value="2">Trần Thị B</option>
                                            <option value="3">Lê Văn C</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <!-- Thông tin chi tiết -->
                            <div class="mb-4">
                                <h5 class="card-title mb-3">Thông tin chi tiết</h5>
                                <div class="row g-3">

                                    <div class="col-md-6">
                                        <label class="form-label">Số học viên tối đa</label>
                                        <input type="number" class="form-control" name="maxStudents">
                                    </div>

                                    <div class="col-md-6">
                                        <label class="form-label">Trạng thái <span class="text-danger">*</span></label>
                                        <select class="form-select" name="status" required>
                                            <option value="active">Đang hoạt động</option>
                                            <option value="inactive">Không hoạt động</option>
                                            <option value="draft">Bản nháp</option>
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">Mô tả <span class="text-danger">*</span></label>
                                        <textarea class="form-control" name="description" rows="4" required></textarea>
                                    </div>
                                </div>
                            </div>



                            <!-- Nút điều khiển -->
                            <div class="d-flex justify-content-end gap-2">
                                <button type="button" class="btn btn-light"
                                    onclick="window.location.href='listSubject.html'">
                                    <i class="fas fa-times me-2"></i>Hủy
                                </button>
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-save me-2"></i>Lưu thông tin
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4">
                <!-- Hướng dẫn -->
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title mb-3">Hướng dẫn</h5>
                        <ul class="list-unstyled mb-0">
                            <li class="mb-2">
                                <i class="fas fa-info-circle text-primary me-2"></i>
                                Điền đầy đủ thông tin bắt buộc (có dấu *)
                            </li>
                            <li class="mb-2">
                                <i class="fas fa-book text-primary me-2"></i>
                                Mã môn học phải là duy nhất
                            </li>
                            <li class="mb-2">
                                <i class="fas fa-user-tie text-primary me-2"></i>
                                Chọn giảng viên phù hợp
                            </li>
                            <li>
                                <i class="fas fa-list text-primary me-2"></i>
                                Thêm đầy đủ nội dung khóa học
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Thông tin bổ sung -->
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title mb-3">Thông tin bổ sung</h5>
                        <div class="mb-3">
                            <label class="form-label">Ảnh bìa môn học</label>
                            <div class="d-flex align-items-center gap-3">
                                <img src="https://via.placeholder.com/100" alt="Cover" class="rounded" width="100"
                                    height="100">
                                <div>
                                    <button class="btn btn-light btn-sm">
                                        <i class="fas fa-upload me-2"></i>Tải ảnh lên
                                    </button>
                                    <p class="text-muted small mt-2">JPG, PNG hoặc GIF. Tối đa 2MB</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
