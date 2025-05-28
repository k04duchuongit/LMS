@extends('shared.layouts.app')
@section('content')
    <div class="main-content">
        <!-- Banner -->
        <div class="lms-banner text-white">
            <div class="container h-100 d-flex align-items-center">
                <div class="row w-100 align-items-center">
                    <div class="col-auto">
                        <img src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-1.2.1&auto=format&fit=crop&w=300&q=80"
                            alt="Profile" class="profile-image rounded-circle border border-3 border-white"
                            style="width: 120px; height: 120px; object-fit: cover;">
                    </div>
                    <div class="col">
                        <h1 class="display-4 fw-bold mb-2">Nguyễn Văn A</h1>
                        <p class="lead mb-0">Sinh viên</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container py-5">
            <div class="row">
                <!-- Main Content -->
                <div class="col-lg-12">
                    <div class="tab-content">
                        <!-- Profile Tab -->
                        <div class="tab-pane fade show active" id="profile">
                            <div class="card border-0 shadow-sm rounded-3">
                                <div class="card-header bg-white border-0 py-3">
                                    <h5 class="card-title mb-0">
                                        <i class="fas fa-user text-primary me-2"></i>
                                        Thông tin cá nhân
                                    </h5>
                                </div>
                                <div class="card-body">
                                    <form>
                                        <div class="row g-3">
                                            <div class="col-md-6">
                                                <label class="form-label">Họ và tên</label>
                                                <input type="text" class="form-control" value="Nguyễn Văn A">
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Email</label>
                                                <input type="email" class="form-control" value="nguyenvana@example.com">
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Số điện thoại</label>
                                                <input type="tel" class="form-control" value="0123456789">
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Ngày sinh</label>
                                                <input type="date" class="form-control" value="2000-01-01">
                                            </div>
                                            <div class="col-12">
                                                <label class="form-label">Địa chỉ</label>
                                                <input type="text" class="form-control"
                                                    value="123 Đường ABC, Quận XYZ, TP.HCM">
                                            </div>
                                            <div class="col-12">
                                                <button type="submit" class="btn btn-primary">
                                                    <i class="fas fa-save me-2"></i>Sửa thông tin
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <!-- Security Tab -->
                        <div class="tab-pane fade" id="security">
                            <div class="card border-0 shadow-sm rounded-3">
                                <div class="card-header bg-white border-0 py-3">
                                    <h5 class="card-title mb-0">
                                        <i class="fas fa-lock text-primary me-2"></i>
                                        Bảo mật
                                    </h5>
                                </div>
                                <div class="card-body">
                                    <form>
                                        <div class="mb-4">
                                            <label class="form-label">Mật khẩu hiện tại</label>
                                            <input type="password" class="form-control">
                                        </div>
                                        <div class="mb-4">
                                            <label class="form-label">Mật khẩu mới</label>
                                            <input type="password" class="form-control">
                                        </div>
                                        <div class="mb-4">
                                            <label class="form-label">Xác nhận mật khẩu mới</label>
                                            <input type="password" class="form-control">
                                        </div>
                                        <button type="submit" class="btn btn-primary">
                                            <i class="fas fa-key me-2"></i>Đổi mật khẩu
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <!-- Notifications Tab -->
                        <div class="tab-pane fade" id="notifications">
                            <div class="card border-0 shadow-sm rounded-3">
                                <div class="card-header bg-white border-0 py-3">
                                    <h5 class="card-title mb-0">
                                        <i class="fas fa-bell text-primary me-2"></i>
                                        Cài đặt thông báo
                                    </h5>
                                </div>
                                <div class="card-body">
                                    <div class="form-check form-switch mb-3">
                                        <input class="form-check-input" type="checkbox" checked>
                                        <label class="form-check-label">Thông báo qua email</label>
                                    </div>
                                    <div class="form-check form-switch mb-3">
                                        <input class="form-check-input" type="checkbox" checked>
                                        <label class="form-check-label">Thông báo bài tập mới</label>
                                    </div>
                                    <div class="form-check form-switch mb-3">
                                        <input class="form-check-input" type="checkbox" checked>
                                        <label class="form-check-label">Thông báo điểm số</label>
                                    </div>
                                    <div class="form-check form-switch mb-3">
                                        <input class="form-check-input" type="checkbox">
                                        <label class="form-check-label">Thông báo khuyến mãi</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Activity Tab -->
                        <div class="tab-pane fade" id="activity">
                            <div class="card border-0 shadow-sm rounded-3">
                                <div class="card-header bg-white border-0 py-3">
                                    <h5 class="card-title mb-0">
                                        <i class="fas fa-history text-primary me-2"></i>
                                        Hoạt động gần đây
                                    </h5>
                                </div>
                                <div class="card-body p-0">
                                    <div class="list-group list-group-flush">
                                        <div class="list-group-item">
                                            <div class="d-flex w-100 justify-content-between">
                                                <h6 class="mb-1">Hoàn thành Quiz HTML cơ bản</h6>
                                                <small class="text-muted">3 giờ trước</small>
                                            </div>
                                            <p class="mb-1">Điểm số: 8.5/10</p>
                                        </div>
                                        <div class="list-group-item">
                                            <div class="d-flex w-100 justify-content-between">
                                                <h6 class="mb-1">Tham gia lớp Lập trình Web</h6>
                                                <small class="text-muted">1 ngày trước</small>
                                            </div>
                                            <p class="mb-1">Đã tham gia thành công</p>
                                        </div>
                                        <div class="list-group-item">
                                            <div class="d-flex w-100 justify-content-between">
                                                <h6 class="mb-1">Cập nhật thông tin cá nhân</h6>
                                                <small class="text-muted">2 ngày trước</small>
                                            </div>
                                            <p class="mb-1">Đã cập nhật số điện thoại</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
