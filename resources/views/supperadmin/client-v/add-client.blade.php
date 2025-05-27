@extends('shared.layouts.app')
@section('content')
   <div class="main-content">
            <!-- Header -->
            <div class="content-header">
                <div class="header-left">
                    <h1>Thêm người dùng mới</h1>
                    <p class="text-muted">Tạo tài khoản mới cho người dùng hệ thống</p>
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
                            <form id="addUserForm">
                                <!-- Thông tin cơ bản -->
                                <div class="mb-4">
                                    <h5 class="card-title mb-3">Thông tin cơ bản</h5>
                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <label class="form-label">Họ và tên <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="fullName" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">Email <span class="text-danger">*</span></label>
                                            <input type="email" class="form-control" name="email" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">Số điện thoại <span class="text-danger">*</span></label>
                                            <input type="tel" class="form-control" name="phone" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">Ngày sinh</label>
                                            <input type="date" class="form-control" name="birthday">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">Mật khẩu <span class="text-danger">*</span></label>
                                            <input type="password" class="form-control" name="password" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">Xác nhận mật khẩu <span class="text-danger">*</span></label>
                                            <input type="password" class="form-control" name="confirmPassword" required>
                                        </div>
                                    </div>
                                </div>

                                <!-- Thông tin vai trò -->
                                <div class="mb-4">
                                    <h5 class="card-title mb-3">Vai trò và quyền hạn</h5>
                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <label class="form-label">Vai trò <span class="text-danger">*</span></label>
                                            <select class="form-select" name="role" required>
                                                <option value="">Chọn vai trò</option>
                                                <option value="admin">Quản trị viên</option>
                                                <option value="instructor">Giảng viên</option>
                                                <option value="student">Học viên</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">Trạng thái <span class="text-danger">*</span></label>
                                            <select class="form-select" name="status" required>
                                                <option value="active">Hoạt động</option>
                                                <option value="inactive">Không hoạt động</option>
                                                <option value="pending">Đang chờ</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <!-- Thông tin bổ sung -->
                                <div class="mb-4">
                                    <h5 class="card-title mb-3">Thông tin bổ sung</h5>
                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <label class="form-label">Địa chỉ</label>
                                            <input type="text" class="form-control" name="address">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">Chuyên môn</label>
                                            <input type="text" class="form-control" name="specialization">
                                        </div>
                                        <div class="col-12">
                                            <label class="form-label">Ghi chú</label>
                                            <textarea class="form-control" name="notes" rows="3"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <!-- Nút điều khiển -->
                                <div class="d-flex justify-content-end gap-2">
                                    <button type="button" class="btn btn-light" onclick="window.location.href='listClient.html'">
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
                                    <i class="fas fa-key text-primary me-2"></i>
                                    Mật khẩu phải có ít nhất 8 ký tự
                                </li>
                                <li class="mb-2">
                                    <i class="fas fa-envelope text-primary me-2"></i>
                                    Email phải là địa chỉ hợp lệ
                                </li>
                                <li>
                                    <i class="fas fa-user-tag text-primary me-2"></i>
                                    Chọn vai trò phù hợp cho người dùng
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Thông tin bổ sung -->
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title mb-3">Thông tin bổ sung</h5>
                            <div class="mb-3">
                                <label class="form-label">Ảnh đại diện</label>
                                <div class="d-flex align-items-center gap-3">
                                    <img src="https://via.placeholder.com/100" alt="Avatar" class="rounded-circle" width="100" height="100">
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