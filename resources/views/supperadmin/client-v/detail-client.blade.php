@extends('shared.layouts.app')
@section('content')
    <div class="main-content">
        <div class="container-fluid">
            <!-- Header -->
            <div class="content-header">
                <div class="header-left">
                    <h1>Chi tiết người dùng</h1>
                    <p>Xem thông tin chi tiết về người dùng</p>
                </div>
                <div class="header-right">
                    <a href="{{ route('admin.user.index') }}" class="btn btn-light">
                        <i class="fas fa-arrow-left"></i> Quay lại
                    </a>
                </div>
            </div>

            <!-- User Profile Section -->
            <div class="row">
                <!-- Basic Info Card -->
                <div class="col-md-4">
                    <div class="card user-profile-section">
                        <div class="card-body text-center">
                            <img src="https://ui-avatars.com/api/?name=Nguyen+Van+A&background=4f46e5&color=fff"
                                alt="User Avatar" class="rounded-circle mb-3" style="width: 120px; height: 120px;">
                            <h4 class="mb-1">{{ $UserDetailViewModel->user()->name }}</h4>
                            <p class="text-muted mb-3">ID: {{ $UserDetailViewModel->user()->id }}</p>
                            <span class="badge bg-primary mb-3">{{ $UserDetailViewModel->user()->role }}</span>
                            <div class="d-flex justify-content-center gap-2">
                                <button class="btn btn-outline-primary">
                                    <i class="fas fa-edit"></i> Chỉnh sửa
                                </button>
                                <button class="btn btn-outline-danger">
                                    <i class="fas fa-trash"></i> Xóa
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Detailed Info Card -->
                <div class="col-md-8">
                    <div class="card user-details">
                        <div class="card-body">
                            <h5 class="card-title">Thông tin chi tiết</h5>
                            <div class="row">
                                <div class="col-md-6">
                                    <p><strong>Email:</strong> {{ $UserDetailViewModel->user()->email }}</p>
                                    <p><strong>Số điện thoại:</strong> {{ $UserDetailViewModel->user()->number_phone }}</p>
                                    <p><strong>Ngày vào hệ thống: </strong>{{ $UserDetailViewModel->user()->created_at->format('d/m/y') }}</p>
                                </div>
                                <div class="col-md-6">
                                    <p><strong>Giới tính:</strong> Nam</p>
                                    <p><strong>Địa chỉ:</strong> 123 Đường ABC, Quận XYZ, TP.HCM</p>
                                    <p><strong>Trạng thái:</strong> <span class="badge bg-success">Hoạt động</span></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Recent Activity Card -->
                    <div class="card mt-4">
                        <div class="card-body">
                            <h5 class="card-title">Hoạt động gần đây</h5>
                            <div class="timeline">
                                <div class="timeline-item">
                                    <div class="timeline-marker"></div>
                                    <div class="timeline-content">
                                        <h6>Đăng nhập lần cuối</h6>
                                        <p>20/03/2024 15:30</p>
                                    </div>
                                </div>
                                <div class="timeline-item">
                                    <div class="timeline-marker"></div>
                                    <div class="timeline-content">
                                        <h6>Hoàn thành khóa học</h6>
                                        <p>Khóa học: Lập trình Web cơ bản</p>
                                        <p>19/03/2024 10:15</p>
                                    </div>
                                </div>
                                <div class="timeline-item">
                                    <div class="timeline-marker"></div>
                                    <div class="timeline-content">
                                        <h6>Nộp bài kiểm tra</h6>
                                        <p>Bài kiểm tra: HTML & CSS</p>
                                        <p>18/03/2024 14:20</p>
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
