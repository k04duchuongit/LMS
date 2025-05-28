@extends('shared.layouts.app')
@section('content')
    <div class="main-content">
            <div class="container py-5">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="card border-0 shadow-sm rounded-3">
                            <div class="card-header bg-white border-0 py-3">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h5 class="card-title mb-0">
                                        <i class="fas fa-user-edit text-primary me-2"></i>
                                        Chỉnh sửa thông tin cá nhân
                                    </h5>
                                    <a href="account.html" class="btn btn-outline-secondary btn-sm">
                                        <i class="fas fa-arrow-left me-2"></i>Quay lại
                                    </a>
                                </div>
                            </div>
                            <div class="card-body">
                                <form>
                                    <!-- Avatar Upload -->
                                    <div class="text-center mb-4">
                                        <div class="position-relative d-inline-block">
                                            <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Profile"
                                                class="rounded-circle border border-3 border-primary"
                                                style="width: 150px; height: 150px; object-fit: cover;">
                                            <button type="button"
                                                class="btn btn-primary btn-sm rounded-circle position-absolute bottom-0 end-0">
                                                <i class="fas fa-camera"></i>
                                            </button>
                                        </div>
                                    </div>

                                    <!-- Personal Information -->
                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <label class="form-label">Họ và tên <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control" value="Nguyễn Văn A" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">Email <span class="text-danger">*</span></label>
                                            <input type="email" class="form-control" value="nguyenvana@example.com"
                                                required>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">Số điện thoại <span
                                                    class="text-danger">*</span></label>
                                            <input type="tel" class="form-control" value="0123456789" required>
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
                                    </div>


                                    <!-- Submit Buttons -->
                                    <div class="mt-4 d-flex justify-content-end gap-2">
                                        <a href="account.html" class="btn btn-outline-secondary">
                                            <i class="fas fa-times me-2"></i>Hủy
                                        </a>
                                        <button type="submit" class="btn btn-primary">
                                            <i class="fas fa-save me-2"></i>Lưu thay đổi
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
