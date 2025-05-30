@extends('shared.layouts.app')
@section('content')
 <div class="main-content">
            <!-- Banner -->
            <div class="lms-banner text-white bg-primary mb-4 py-4">
                <div class="container d-flex align-items-center">
                    <div class="row w-100">
                        <div class="col-lg-8">
                            <h1 class="display-5 fw-bold mb-2">Lập trình Web cơ bản</h1>
                            <p class="lead mb-2">Học cách xây dựng website từ cơ bản đến nâng cao với HTML, CSS và JavaScript.</p>
                            <div class="mb-2">
                                <span class="badge bg-light text-dark me-2">Giáo viên: Trần Thị B</span>
                                <span class="badge bg-light text-dark">Số lượng: 30 học viên</span>
                            </div>
                        </div>
                        <div class="col-lg-4 d-flex align-items-center justify-content-end">
                            <img src="https://img.freepik.com/free-vector/website-creator-concept-illustration_114360-4457.jpg" alt="Banner" class="img-fluid rounded shadow" style="max-height: 120px;">
                        </div>
                    </div>
                </div>
            </div>

            <div class="container pb-5">
                <!-- Thông tin lớp học -->
                <div class="row mb-4">
                    <div class="col-md-8">
                        <div class="card mb-3">
                            <div class="card-body">
                                <h5 class="card-title mb-2">Mô tả lớp học</h5>
                                <p class="mb-0">Khóa học này giúp bạn nắm vững kiến thức nền tảng về HTML, CSS, JavaScript và thực hành xây dựng các website hiện đại. Phù hợp cho người mới bắt đầu hoặc muốn củng cố lại kiến thức cơ bản.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-3">
                            <div class="card-body">
                                <h6 class="card-title mb-2"><i class="fas fa-info-circle me-2"></i>Hướng dẫn</h6>
                                <ul class="mb-0 ps-3 small">
                                    <li>Chọn tab <b>Quiz</b> hoặc <b>Bài tự luận</b> để xem và làm bài.</li>
                                    <li>Nhấn <b>Làm quiz</b> hoặc <b>Nộp bài</b> để bắt đầu.</li>
                                    <li>Xem kết quả tại tab <b>Kết quả học tập</b>.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="row mb-4">
                    <div class="col-12 d-flex gap-3">
                        <a href="{{ route('student.transcript.detail') }}" class="btn btn-primary">
                            <i class="fas fa-chart-bar me-2"></i>Xem bảng điểm
                        </a>
                        <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#leaveClassModal">
                            <i class="fas fa-sign-out-alt me-2"></i>Rời khỏi lớp
                        </button>
                    </div>
                </div>

                <!-- Tabs Navigation -->
                <ul class="nav nav-tabs mb-4" id="assignmentTabs" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="quiz-tab" data-bs-toggle="tab" data-bs-target="#quiz" type="button" role="tab">
                            <i class="fas fa-tasks me-2"></i>Quiz
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="assignment-tab" data-bs-toggle="tab" data-bs-target="#assignment" type="button" role="tab">
                            <i class="fas fa-file-alt me-2"></i>Bài tự luận
                        </button>
                    </li>
                </ul>

                <!-- Tab Content -->
                <div class="tab-content" id="assignmentTabsContent">
                    <!-- Quiz Tab -->
                    <div class="tab-pane fade show active" id="quiz" role="tabpanel">
                        <div class="row g-4">
                            <!-- Quiz chưa làm -->
                            <div class="col-lg-8">
                                <div class="card border-0 shadow-sm rounded-3 mb-4">
                                    <div class="card-header bg-white border-0 py-3">
                                        <h5 class="card-title mb-0">
                                            <i class="fas fa-clock text-warning me-2"></i>
                                            Quiz chưa làm
                                        </h5>
                                    </div>
                                    <div class="card-body p-0">
                                        <div class="list-group list-group-flush">
                                            <div class="list-group-item d-flex justify-content-between align-items-center py-3">
                                                <div>
                                                    <span class="badge bg-warning rounded-circle me-2">&nbsp;</span>
                                                    <b>Quiz 1: HTML cơ bản</b>
                                                    <small class="d-block text-muted mt-1">Hạn nộp: 20/03/2024</small>
                                                </div>
                                                <div class="d-flex align-items-center gap-3">
                                                    <small class="text-muted">20 câu hỏi</small>
                                                    <a href="./quiz-multiple.html" class="btn btn-sm btn-primary">
                                                        <i class="fas fa-play me-1"></i>Làm quiz
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="list-group-item d-flex justify-content-between align-items-center py-3">
                                                <div>
                                                    <span class="badge bg-warning rounded-circle me-2">&nbsp;</span>
                                                    <b>Quiz 2: CSS cơ bản</b>
                                                    <small class="d-block text-muted mt-1">Hạn nộp: 25/03/2024</small>
                                                </div>
                                                <div class="d-flex align-items-center gap-3">
                                                    <small class="text-muted">25 câu hỏi</small>
                                                    <a href="./quiz-multiple.html" class="btn btn-sm btn-primary">
                                                        <i class="fas fa-play me-1"></i>Làm quiz
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Quiz đã làm -->
                            <div class="col-lg-4">
                                <div class="card border-0 shadow-sm rounded-3 mb-4">
                                    <div class="card-header bg-white border-0 py-3">
                                        <h5 class="card-title mb-0">
                                            <i class="fas fa-check-circle text-success me-2"></i>
                                            Quiz đã làm
                                        </h5>
                                    </div>
                                    <div class="card-body p-0">
                                        <div class="list-group list-group-flush">
                                            <a href="../quiz/quiz-result.html" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center py-3">
                                                <div>
                                                    <span class="badge bg-success rounded-circle me-2">&nbsp;</span>
                                                    <b>Quiz 0: Kiểm tra đầu vào</b>
                                                    <small class="d-block text-muted mt-1">Điểm: 8.5/10</small>
                                                </div>
                                                <span class="badge bg-success rounded-pill">Hoàn thành</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Assignment Tab -->
                    <div class="tab-pane fade" id="assignment" role="tabpanel">
                        <div class="row g-4">
                            <!-- Bài tập chưa làm -->
                            <div class="col-lg-8">
                                <div class="card border-0 shadow-sm rounded-3 mb-4">
                                    <div class="card-header bg-white border-0 py-3">
                                        <h5 class="card-title mb-0">
                                            <i class="fas fa-clock text-warning me-2"></i>
                                            Bài tập chưa làm
                                        </h5>
                                    </div>
                                    <div class="card-body p-0">
                                        <div class="list-group list-group-flush">
                                            <div class="list-group-item d-flex justify-content-between align-items-center py-3">
                                                <div>
                                                    <span class="badge bg-warning rounded-circle me-2">&nbsp;</span>
                                                    <b>Bài tập 1: Xây dựng trang web tĩnh</b>
                                                    <small class="d-block text-muted mt-1">Hạn nộp: 22/03/2024</small>
                                                </div>
                                                <div class="d-flex align-items-center gap-3">
                                                    <small class="text-muted">HTML, CSS</small>
                                                    <a href="../assignment/submit-assignment.html" class="btn btn-sm btn-primary">
                                                        <i class="fas fa-upload me-1"></i>Nộp bài
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="list-group-item d-flex justify-content-between align-items-center py-3">
                                                <div>
                                                    <span class="badge bg-warning rounded-circle me-2">&nbsp;</span>
                                                    <b>Bài tập 2: Form đăng ký</b>
                                                    <small class="d-block text-muted mt-1">Hạn nộp: 28/03/2024</small>
                                                </div>
                                                <div class="d-flex align-items-center gap-3">
                                                    <small class="text-muted">HTML, CSS, JS</small>
                                                    <a href="../assignment/submit-assignment.html" class="btn btn-sm btn-primary">
                                                        <i class="fas fa-upload me-1"></i>Nộp bài
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Bài tập đã làm -->
                            <div class="col-lg-4">
                                <div class="card border-0 shadow-sm rounded-3 mb-4">
                                    <div class="card-header bg-white border-0 py-3">
                                        <h5 class="card-title mb-0">
                                            <i class="fas fa-check-circle text-success me-2"></i>
                                            Bài tập đã nộp
                                        </h5>
                                    </div>
                                    <div class="card-body p-0">
                                        <div class="list-group list-group-flush">
                                            <a href="../assignment/assignment-result.html" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center py-3">
                                                <div>
                                                    <span class="badge bg-success rounded-circle me-2">&nbsp;</span>
                                                    <b>Bài tập 0: Giới thiệu bản thân</b>
                                                    <small class="d-block text-muted mt-1">Điểm: 9/10</small>
                                                </div>
                                                <span class="badge bg-success rounded-pill">Đã nộp</span>
                                            </a>
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
