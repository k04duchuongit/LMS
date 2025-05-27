@extends('shared.layouts.app')
@section('content')
  <div class="main-content">
            <!-- Header -->
            <div class="content-header">
                <div class="header-left">
                    <h1>Dashboard</h1>
                    <p class="text-muted">Chào mừng trở lại, Admin!</p>
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

            <!-- Stats Cards -->
            <div class="row g-4 mb-4">
                <div class="col-md-3">
                    <div class="stat-card">
                        <div class="stat-icon bg-primary">
                            <i class="fas fa-users"></i>
                        </div>
                        <div class="stat-info">
                            <h3>1,234</h3>
                            <p>Tổng số học viên</p>
                            <span class="stat-change positive">
                                <i class="fas fa-arrow-up"></i> 12%
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-card">
                        <div class="stat-icon bg-success">
                            <i class="fas fa-user-tie"></i>
                        </div>
                        <div class="stat-info">
                            <h3>45</h3>
                            <p>Tổng số giảng viên</p>
                            <span class="stat-change positive">
                                <i class="fas fa-arrow-up"></i> 5%
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-card">
                        <div class="stat-icon bg-info">
                            <i class="fas fa-book"></i>
                        </div>
                        <div class="stat-info">
                            <h3>56</h3>
                            <p>Tổng số môn học</p>
                            <span class="stat-change positive">
                                <i class="fas fa-arrow-up"></i> 8%
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-card">
                        <div class="stat-icon bg-warning">
                            <i class="fas fa-chalkboard"></i>
                        </div>
                        <div class="stat-info">
                            <h3>89</h3>
                            <p>Tổng số lớp học</p>
                            <span class="stat-change positive">
                                <i class="fas fa-arrow-up"></i> 15%
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tasks and Activities -->
            <div class="row g-4">
                <!-- Tasks -->
                <div class="col-md-6">
                    <div class="dashboard-card">
                        <div class="card-header">
                            <h2>Công việc cần xử lý</h2>
                            <a href="#" class="view-all">Xem tất cả</a>
                        </div>
                        <div class="task-list">
                            <div class="task-item">
                                <div class="task-icon bg-primary">
                                    <i class="fas fa-check-circle"></i>
                                </div>
                                <div class="task-info">
                                    <h4>Duyệt lớp học mới</h4>
                                    <p>3 lớp học đang chờ duyệt</p>
                                </div>
                                <a href="classes-approve.html" class="btn btn-sm btn-primary">Xử lý</a>
                            </div>
                            <div class="task-item">
                                <div class="task-icon bg-success">
                                    <i class="fas fa-user-tie"></i>
                                </div>
                                <div class="task-info">
                                    <h4>Phân công giảng viên</h4>
                                    <p>2 môn học cần phân công</p>
                                </div>
                                <a href="courses-assign.html" class="btn btn-sm btn-primary">Xử lý</a>
                            </div>
                            <div class="task-item">
                                <div class="task-icon bg-info">
                                    <i class="fas fa-bell"></i>
                                </div>
                                <div class="task-info">
                                    <h4>Gửi thông báo</h4>
                                    <p>Thông báo mới cho giảng viên</p>
                                </div>
                                <a href="notifications-create.html" class="btn btn-sm btn-primary">Xử lý</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Recent Activities -->
                <div class="col-md-6">
                    <div class="dashboard-card">
                        <div class="card-header">
                            <h2>Hoạt động gần đây</h2>
                            <a href="#" class="view-all">Xem tất cả</a>
                        </div>
                        <div class="activity-list">
                            <div class="activity-item">
                                <div class="activity-icon bg-success">
                                    <i class="fas fa-user-plus"></i>
                                </div>
                                <div class="activity-info">
                                    <h4>Thêm giảng viên mới</h4>
                                    <p>Nguyễn Văn A đã được thêm vào hệ thống</p>
                                    <span class="activity-time">5 phút trước</span>
                                </div>
                            </div>
                            <div class="activity-item">
                                <div class="activity-icon bg-info">
                                    <i class="fas fa-book"></i>
                                </div>
                                <div class="activity-info">
                                    <h4>Tạo môn học mới</h4>
                                    <p>Môn học "Lập trình Web" đã được tạo</p>
                                    <span class="activity-time">1 giờ trước</span>
                                </div>
                            </div>
                            <div class="activity-item">
                                <div class="activity-icon bg-warning">
                                    <i class="fas fa-check-circle"></i>
                                </div>
                                <div class="activity-info">
                                    <h4>Duyệt lớp học</h4>
                                    <p>Lớp "Lập trình Web cơ bản" đã được duyệt</p>
                                    <span class="activity-time">2 giờ trước</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection