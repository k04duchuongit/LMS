@extends('shared.layouts.app')
@section('content')
   <div class="main-content">
            <h4 class="text-primary mb-4">
                <i class="fas fa-chalkboard me-2"></i>
                Danh sách lớp học
            </h4>

            <!-- Search and Filter -->
            <div class="filters-section">
                <div class="row g-3">
                    <div class="col-md-3">
                        <select class="form-select">
                            <option value="">Tất cả môn học</option>
                            <option value="1">Lập trình Web</option>
                            <option value="2">Thiết kế UI/UX</option>
                            <option value="3">Tiếng Anh</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <select class="form-select">
                            <option value="">Tất cả trạng thái</option>
                            <option value="active">Đang hoạt động</option>
                            <option value="completed">Đã kết thúc</option>
                            <option value="upcoming">Sắp khai giảng</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <select class="form-select">
                            <option value="">Tất cả giáo viên</option>
                            <option value="1">Nguyễn Văn A</option>
                            <option value="2">Trần Thị B</option>
                            <option value="3">Lê Văn C</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <button class="btn btn-secondary w-100">
                            <i class="fas fa-filter me-2"></i>Lọc
                        </button>
                    </div>
                </div>
            </div>

            <!-- Course List -->
            <div class="row g-3">
                <!-- Course 1 -->
                <div class="col-md-6 col-lg-4">
                    <div class="card course-card border-0 shadow-sm h-100">
                        <div class="card-body d-flex flex-column">
                            <div class="d-flex align-items-center mb-3">
                                <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?ixlib=rb-1.2.1&auto=format&fit=crop&w=60&q=80"
                                    class="rounded-circle me-3" style="width: 50px; height: 50px; object-fit: cover;">
                                <div>
                                    <h6 class="card-title text-primary mb-1">Lập trình Web cơ bản</h6>
                                    <p class="card-text text-muted small mb-0">
                                        <i class="fas fa-user me-1"></i>GV: Trần Thị B
                                    </p>
                                </div>
                            </div>
                            <div class="course-stats mt-auto">
                                <div class="row text-center g-2">
                                    <div class="col">
                                        <div class="stat-value">30</div>
                                        <div class="stat-label">Bài học</div>
                                    </div>
                                    <div class="col">
                                        <div class="stat-value">120</div>
                                        <div class="stat-label">Sinh viên</div>
                                    </div>
                                    <div class="col">
                                        <div class="stat-value">4.8</div>
                                        <div class="stat-label">Đánh giá</div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3">
                                <a href="detailClass.html" class="btn btn-primary w-100">
                                    <i class="fas fa-info-circle me-2"></i>Xem chi tiết
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Course 2 -->
                <div class="col-md-6 col-lg-4">
                    <div class="card course-card border-0 shadow-sm h-100">
                        <div class="card-body d-flex flex-column">
                            <div class="d-flex align-items-center mb-3">
                                <img src="https://images.unsplash.com/photo-1544383835-bda2bc66a55d?ixlib=rb-1.2.1&auto=format&fit=crop&w=60&q=80"
                                    class="rounded-circle me-3" style="width: 50px; height: 50px; object-fit: cover;">
                                <div>
                                    <h6 class="card-title text-primary mb-1">Cơ sở dữ liệu</h6>
                                    <p class="card-text text-muted small mb-0">
                                        <i class="fas fa-user me-1"></i>GV: Nguyễn Văn C
                                    </p>
                                </div>
                            </div>
                            <div class="course-stats mt-auto">
                                <div class="row text-center g-2">
                                    <div class="col">
                                        <div class="stat-value">20</div>
                                        <div class="stat-label">Bài học</div>
                                    </div>
                                    <div class="col">
                                        <div class="stat-value">98</div>
                                        <div class="stat-label">Sinh viên</div>
                                    </div>
                                    <div class="col">
                                        <div class="stat-value">4.7</div>
                                        <div class="stat-label">Đánh giá</div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3">
                                <a href="#" class="btn btn-primary w-100">
                                    <i class="fas fa-info-circle me-2"></i>Xem chi tiết
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Course 3 -->
                <div class="col-md-6 col-lg-4">
                    <div class="card course-card border-0 shadow-sm h-100">
                        <div class="card-body d-flex flex-column">
                            <div class="d-flex align-items-center mb-3">
                                <img src="https://images.unsplash.com/photo-1526379879527-8559ecfcaec0?ixlib=rb-1.2.1&auto=format&fit=crop&w=60&q=80"
                                    class="rounded-circle me-3" style="width: 50px; height: 50px; object-fit: cover;">
                                <div>
                                    <h6 class="card-title text-primary mb-1">Python cơ bản</h6>
                                    <p class="card-text text-muted small mb-0">
                                        <i class="fas fa-user me-1"></i>GV: Lê Thị D
                                    </p>
                                </div>
                            </div>
                            <div class="course-stats mt-auto">
                                <div class="row text-center g-2">
                                    <div class="col">
                                        <div class="stat-value">20</div>
                                        <div class="stat-label">Bài học</div>
                                    </div>
                                    <div class="col">
                                        <div class="stat-value">150</div>
                                        <div class="stat-label">Sinh viên</div>
                                    </div>
                                    <div class="col">
                                        <div class="stat-value">4.9</div>
                                        <div class="stat-label">Đánh giá</div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3">
                                <a href="#" class="btn btn-primary w-100">
                                    <i class="fas fa-info-circle me-2"></i>Xem chi tiết
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Course 4 -->
                <div class="col-md-6 col-lg-4">
                    <div class="card course-card border-0 shadow-sm h-100">
                        <div class="card-body d-flex flex-column">
                            <div class="d-flex align-items-center mb-3">
                                <img src="https://images.unsplash.com/photo-1561070791-2526d30994b5?ixlib=rb-1.2.1&auto=format&fit=crop&w=60&q=80"
                                    class="rounded-circle me-3" style="width: 50px; height: 50px; object-fit: cover;">
                                <div>
                                    <h6 class="card-title text-primary mb-1">Thiết kế giao diện người dùng</h6>
                                    <p class="card-text text-muted small mb-0">
                                        <i class="fas fa-user me-1"></i>GV: Phạm Minh E
                                    </p>
                                </div>
                            </div>
                            <div class="course-stats mt-auto">
                                <div class="row text-center g-2">
                                    <div class="col">
                                        <div class="stat-value">15</div>
                                        <div class="stat-label">Bài học</div>
                                    </div>
                                    <div class="col">
                                        <div class="stat-value">80</div>
                                        <div class="stat-label">Sinh viên</div>
                                    </div>
                                    <div class="col">
                                        <div class="stat-value">4.6</div>
                                        <div class="stat-label">Đánh giá</div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3">
                                <a href="#" class="btn btn-primary w-100">
                                    <i class="fas fa-info-circle me-2"></i>Xem chi tiết
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Course 5 -->
                <div class="col-md-6 col-lg-4">
                    <div class="card course-card border-0 shadow-sm h-100">
                        <div class="card-body d-flex flex-column">
                            <div class="d-flex align-items-center mb-3">
                                <img src="https://images.unsplash.com/photo-1517694712202-14dd9538aa97?ixlib=rb-1.2.1&auto=format&fit=crop&w=60&q=80"
                                    class="rounded-circle me-3" style="width: 50px; height: 50px; object-fit: cover;">
                                <div>
                                    <h6 class="card-title text-primary mb-1">Lập trình Java nâng cao</h6>
                                    <p class="card-text text-muted small mb-0">
                                        <i class="fas fa-user me-1"></i>GV: Đỗ Văn F
                                    </p>
                                </div>
                            </div>
                            <div class="course-stats mt-auto">
                                <div class="row text-center g-2">
                                    <div class="col">
                                        <div class="stat-value">25</div>
                                        <div class="stat-label">Bài học</div>
                                    </div>
                                    <div class="col">
                                        <div class="stat-value">60</div>
                                        <div class="stat-label">Sinh viên</div>
                                    </div>
                                    <div class="col">
                                        <div class="stat-value">4.5</div>
                                        <div class="stat-label">Đánh giá</div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3">
                                <a href="#" class="btn btn-primary w-100">
                                    <i class="fas fa-info-circle me-2"></i>Xem chi tiết
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
