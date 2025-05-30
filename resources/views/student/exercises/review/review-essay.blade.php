@extends('shared.layouts.app')
@section('content')
 <div class="main-content">
            <!-- Banner -->
            <div class="lms-banner text-white">
                <div class="container h-100 d-flex align-items-center">
                    <div class="row w-100">
                        <div class="col-lg-8">
                            <h1 class="display-4 fw-bold mb-3">Kết quả Tự luận: HTML cơ bản</h1>
                            <div class="d-flex gap-4">
                                <div>
                                    <i class="fas fa-clock me-2"></i>
                                    Thời gian làm: 30 phút
                                </div>
                                <div>
                                    <i class="fas fa-calendar me-2"></i>
                                    Ngày làm: 20/03/2024
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container py-5">
                <!-- Essay Summary -->
                <div class="row mb-4">
                    <div class="col-md-4">
                        <div class="card border-0 shadow-sm rounded-3">
                            <div class="card-body text-center">
                                <h3 class="display-4 fw-bold text-primary mb-0">7.0</h3>
                                <p class="text-muted mb-0">Điểm số</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card border-0 shadow-sm rounded-3">
                            <div class="card-body text-center">
                                <h3 class="display-4 fw-bold text-success mb-0">2</h3>
                                <p class="text-muted mb-0">Câu đạt</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card border-0 shadow-sm rounded-3">
                            <div class="card-body text-center">
                                <h3 class="display-4 fw-bold text-danger mb-0">1</h3>
                                <p class="text-muted mb-0">Câu chưa đạt</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Essay Questions Review -->
                <div class="row">
                    <div class="col-lg-8">
                        <!-- Essay Question 1 -->
                        <div class="card border-0 shadow-sm rounded-3 mb-4 essay-question-card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <h5 class="card-title mb-0">Câu 1: Trình bày vai trò của HTML trong phát triển web.
                                    </h5>
                                    <span class="badge bg-primary">Điểm: 2/3</span>
                                </div>
                                <div class="mb-2">
                                    <strong>Câu trả lời của bạn:</strong>
                                    <p class="student-answer bg-light p-2 rounded">HTML là ngôn ngữ đánh dấu dùng để xây
                                        dựng cấu trúc trang web, giúp trình duyệt hiểu và hiển thị nội dung cho người
                                        dùng.</p>
                                </div>
                                <div>
                                    <strong>Nhận xét của giảng viên:</strong>
                                    <p class="teacher-comment bg-warning bg-opacity-10 p-2 rounded">Câu trả lời khá đầy
                                        đủ, tuy nhiên cần bổ sung thêm về vai trò của thẻ semantic.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Essay Question 2 -->
                        <div class="card border-0 shadow-sm rounded-3 mb-4 essay-question-card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <h5 class="card-title mb-0">Câu 2: Phân biệt thẻ block và inline trong HTML.</h5>
                                    <span class="badge bg-primary">Điểm: 3/3</span>
                                </div>
                                <div class="mb-2">
                                    <strong>Câu trả lời của bạn:</strong>
                                    <p class="student-answer bg-light p-2 rounded">Thẻ block chiếm toàn bộ chiều ngang,
                                        bắt đầu dòng mới, ví dụ: &lt;div&gt;, &lt;p&gt;. Thẻ inline chỉ chiếm không gian
                                        vừa đủ, không bắt đầu dòng mới, ví dụ: &lt;span&gt;, &lt;a&gt;.</p>
                                </div>
                                <div>
                                    <strong>Nhận xét của giảng viên:</strong>
                                    <p class="teacher-comment bg-success bg-opacity-10 p-2 rounded">Trả lời chính xác,
                                        ví dụ minh họa rõ ràng.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Essay Question 3 -->
                        <div class="card border-0 shadow-sm rounded-3 mb-4 essay-question-card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <h5 class="card-title mb-0">Câu 3: Nêu cách chèn CSS vào trang HTML.</h5>
                                    <span class="badge bg-primary">Điểm: 2/4</span>
                                </div>
                                <div class="mb-2">
                                    <strong>Câu trả lời của bạn:</strong>
                                    <p class="student-answer bg-light p-2 rounded">Có thể chèn CSS bằng thẻ
                                        &lt;style&gt; trong &lt;head&gt; hoặc dùng thuộc tính style trực tiếp trên thẻ
                                        HTML.</p>
                                </div>
                                <div>
                                    <strong>Nhận xét của giảng viên:</strong>
                                    <p class="teacher-comment bg-danger bg-opacity-10 p-2 rounded">Cần bổ sung thêm cách
                                        chèn file CSS ngoài bằng thẻ &lt;link&gt;.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Sidebar -->
                    <div class="col-lg-4">
                        <div class="card border-0 shadow-sm rounded-3">
                            <div class="card-header bg-white border-0 py-3">
                                <h5 class="card-title mb-0">
                                    <i class="fas fa-info-circle text-primary me-2"></i>
                                    Thông tin Tự luận
                                </h5>
                            </div>
                            <div class="card-body">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <span>Tổng số câu hỏi</span>
                                        <span class="badge bg-primary rounded-pill">3</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <span>Thời gian làm bài</span>
                                        <span class="badge bg-primary rounded-pill">30 phút</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <span>Điểm đạt được</span>
                                        <span class="badge bg-success rounded-pill">7.0/10</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <span>Số câu đạt</span>
                                        <span class="badge bg-success rounded-pill">2</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <span>Số câu chưa đạt</span>
                                        <span class="badge bg-danger rounded-pill">1</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card border-0 shadow-sm rounded-3 mt-4">
                            <div class="card-header bg-white border-0 py-3">
                                <h5 class="card-title mb-0">
                                    <i class="fas fa-chart-pie text-primary me-2"></i>
                                    Phân tích kết quả
                                </h5>
                            </div>
                            <div class="card-body">
                                <div class="progress mb-3" style="height: 25px;">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 67%">
                                        67% Đạt
                                    </div>
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 33%">
                                        33% Chưa đạt
                                    </div>
                                </div>
                                <p class="text-muted mb-0">
                                    <i class="fas fa-lightbulb text-warning me-2"></i>
                                    Bạn cần bổ sung kiến thức về CSS nâng cao.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection