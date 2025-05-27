@extends('shared.layouts.app')
@section('content')
           <div class="main-content">
            <!-- Header -->
            <div class="content-header">
                <div class="header-left">
                    <h1>Tạo thông báo</h1>
                    <p class="text-muted">Tạo và gửi thông báo đến người dùng</p>
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
                            <form id="notificationForm">
                                <!-- Thông tin cơ bản -->
                                <div class="mb-4">
                                    <h5 class="card-title mb-3">Thông tin thông báo</h5>
                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <label class="form-label">Tiêu đề <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="title" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">Loại thông báo <span class="text-danger">*</span></label>
                                            <select class="form-select" name="type" required>
                                                <option value="">Chọn loại thông báo</option>
                                                <option value="announcement">Thông báo chung</option>
                                                <option value="course">Thông báo khóa học</option>
                                                <option value="class">Thông báo lớp học</option>
                                                <option value="system">Thông báo hệ thống</option>
                                            </select>
                                        </div>
                                        <div class="col-12">
                                            <label class="form-label">Nội dung <span class="text-danger">*</span></label>
                                            <textarea class="form-control" name="content" rows="6" required></textarea>
                                        </div>
                                    </div>
                                </div>

                                <!-- Đối tượng nhận -->
                                <div class="mb-4">
                                    <h5 class="card-title mb-3">Đối tượng nhận thông báo</h5>
                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <label class="form-label">Nhóm người dùng</label>
                                            <select class="form-select" name="userGroup">
                                                <option value="all">Tất cả người dùng</option>
                                                <option value="students">Học viên</option>
                                                <option value="teachers">Giáo viên</option>
                                                <option value="admins">Quản trị viên</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">Trạng thái</label>
                                            <select class="form-select" name="status">
                                                <option value="active">Đang hoạt động</option>
                                                <option value="inactive">Không hoạt động</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <!-- Tùy chọn gửi -->
                                <div class="mb-4">
                                    <h5 class="card-title mb-3">Tùy chọn gửi</h5>
                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <label class="form-label">Thời gian gửi</label>
                                            <input type="datetime-local" class="form-control" name="sendTime">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">Ưu tiên</label>
                                            <select class="form-select" name="priority">
                                                <option value="normal">Bình thường</option>
                                                <option value="high">Cao</option>
                                                <option value="urgent">Khẩn cấp</option>
                                            </select>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="sendEmail" id="sendEmail">
                                                <label class="form-check-label" for="sendEmail">
                                                    Gửi kèm email
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Nút điều khiển -->
                                <div class="d-flex justify-content-end gap-2">
                                    <button type="button" class="btn btn-light" onclick="window.location.href='notifications-history.html'">
                                        <i class="fas fa-times me-2"></i>Hủy
                                    </button>
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fas fa-paper-plane me-2"></i>Gửi thông báo
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="col-lg-4">
                    <!-- Mẫu thông báo -->
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title mb-3">Mẫu thông báo</h5>
                            <div class="list-group">
                                <a href="#" class="list-group-item list-group-item-action">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h6 class="mb-1">Thông báo khai giảng</h6>
                                        <small class="text-muted">3 ngày trước</small>
                                    </div>
                                    <p class="mb-1">Thông báo về lịch khai giảng các lớp học mới...</p>
                                </a>
                                <a href="#" class="list-group-item list-group-item-action">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h6 class="mb-1">Thông báo bảo trì</h6>
                                        <small class="text-muted">1 tuần trước</small>
                                    </div>
                                    <p class="mb-1">Thông báo về thời gian bảo trì hệ thống...</p>
                                </a>
                                <a href="#" class="list-group-item list-group-item-action">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h6 class="mb-1">Thông báo nghỉ lễ</h6>
                                        <small class="text-muted">2 tuần trước</small>
                                    </div>
                                    <p class="mb-1">Thông báo về lịch nghỉ lễ sắp tới...</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Hướng dẫn -->
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title mb-3">Hướng dẫn</h5>
                            <ul class="list-unstyled mb-0">
                                <li class="mb-2">
                                    <i class="fas fa-info-circle text-primary me-2"></i>
                                    Điền đầy đủ thông tin bắt buộc (có dấu *)
                                </li>
                                <li class="mb-2">
                                    <i class="fas fa-users text-primary me-2"></i>
                                    Chọn đối tượng nhận thông báo phù hợp
                                </li>
                                <li class="mb-2">
                                    <i class="fas fa-clock text-primary me-2"></i>
                                    Có thể lên lịch gửi thông báo
                                </li>
                                <li>
                                    <i class="fas fa-envelope text-primary me-2"></i>
                                    Tùy chọn gửi kèm email
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
