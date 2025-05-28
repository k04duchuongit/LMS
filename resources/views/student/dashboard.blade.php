@extends('shared.layouts.app')
@section('content')
    <div class="main-content">
        <!-- Greeting -->
        <div class="lms-student-greeting">
            <i class="fas fa-user-graduate me-2"></i>
            Chào mừng, <b>Nguyễn Văn A</b>! Chúc bạn một ngày học tập hiệu quả.
        </div>

        <!-- Thống kê học tập -->
        <div class="row g-4 mb-4">
            <div class="col-md-3">
                <div class="stat-card">
                    <div class="stat-icon bg-primary">
                        <i class="fas fa-book"></i>
                    </div>
                    <div class="stat-info">
                        <h3>5</h3>
                        <p>Lớp học đã đăng ký</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stat-card">
                    <div class="stat-icon bg-success">
                        <i class="fas fa-tasks"></i>
                    </div>
                    <div class="stat-info">
                        <h3>12</h3>
                        <p>Quiz đã hoàn thành</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stat-card">
                    <div class="stat-icon bg-info">
                        <i class="fas fa-certificate"></i>
                    </div>
                    <div class="stat-info">
                        <h3>3</h3>
                        <p>Chứng chỉ đạt được</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stat-card">
                    <div class="stat-icon bg-warning">
                        <i class="fas fa-clock"></i>
                    </div>
                    <div class="stat-info">
                        <h3>85%</h3>
                        <p>Tiến độ học tập</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bài tập chưa làm -->
        <div class="lms-section-title">
            <i class="fas fa-tasks me-2"></i>
            Quiz chưa làm
        </div>
        <div class="row g-4 mb-4">
            <!-- Quiz 1 -->
            <div class="col-md-4">
                <div class="lms-task-card">
                    <div>
                        <div class="lms-task-title">Quiz 1: HTML cơ bản</div>
                        <div class="lms-task-meta">20 câu hỏi • Lớp: Lập trình Web cơ bản</div>
                    </div>
                    <a href="performquiz.html" class="lms-btn-do-task">Làm quiz</a>
                </div>
            </div>
            <!-- Quiz 2 -->
            <div class="col-md-4">
                <div class="lms-task-card">
                    <div>
                        <div class="lms-task-title">Quiz 2: CSS cơ bản</div>
                        <div class="lms-task-meta">25 câu hỏi • Lớp: Lập trình Web cơ bản</div>
                    </div>
                    <a href="performquiz.html" class="lms-btn-do-task">Làm quiz</a>
                </div>
            </div>
            <!-- Quiz 3 -->
            <div class="col-md-4">
                <div class="lms-task-card">
                    <div>
                        <div class="lms-task-title">Quiz 3: JavaScript cơ bản</div>
                        <div class="lms-task-meta">30 câu hỏi • Lớp: Lập trình Web cơ bản</div>
                    </div>
                    <a href="performquiz.html" class="lms-btn-do-task">Làm quiz</a>
                </div>
            </div>
        </div>

        <!-- Lớp học đã đăng ký -->
        <div class="lms-section-title">
            <i class="fas fa-chalkboard-teacher me-2"></i>
            Lớp học đã đăng ký
        </div>
        <div class="row g-4 mb-4">
            <div class="col-md-4">
                <a href="joinedClass.html" class="text-decoration-none">
                    <div class="lms-class-card">
                        <div class="lms-class-title">Lập trình Web cơ bản</div>
                        <div class="lms-class-meta">GV: Trần Thị B • 1/4 quiz</div>
                        <div class="progress mt-2">
                            <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="joinedClass.html" class="text-decoration-none">
                    <div class="lms-class-card">
                        <div class="lms-class-title">Cơ sở dữ liệu</div>
                        <div class="lms-class-meta">GV: Nguyễn Văn C • 0/3 quiz</div>
                        <div class="progress mt-2">
                            <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="joinedClass.html" class="text-decoration-none">
                    <div class="lms-class-card">
                        <div class="lms-class-title">Python cơ bản</div>
                        <div class="lms-class-meta">GV: Lê Thị D • 2/3 quiz</div>
                        <div class="progress mt-2">
                            <div class="progress-bar" role="progressbar" style="width: 66%" aria-valuenow="66"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <!-- Lớp học đề xuất -->
        <div class="lms-section-title">
            <i class="fas fa-lightbulb me-2"></i>
            Lớp học đề xuất
        </div>
        <div class="row g-4">
            <div class="col-md-4">
                <a href="detailClass.html" class="text-decoration-none">
                    <div class="lms-class-card">
                        <div class="lms-class-title">Lập trình Web nâng cao</div>
                        <div class="lms-class-meta">GV: Trần Thị B • 4 quiz</div>
                        <div class="mt-2">
                            <span class="badge bg-primary">Nâng cao</span>
                            <span class="badge bg-info">JavaScript</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="detailClass.html" class="text-decoration-none">
                    <div class="lms-class-card">
                        <div class="lms-class-title">React.js cơ bản</div>
                        <div class="lms-class-meta">GV: Nguyễn Văn C • 3 quiz</div>
                        <div class="mt-2">
                            <span class="badge bg-success">Cơ bản</span>
                            <span class="badge bg-info">React</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="detailClass.html" class="text-decoration-none">
                    <div class="lms-class-card">
                        <div class="lms-class-title">Node.js Backend</div>
                        <div class="lms-class-meta">GV: Lê Thị D • 5 quiz</div>
                        <div class="mt-2">
                            <span class="badge bg-warning">Trung cấp</span>
                            <span class="badge bg-info">Node.js</span>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection
