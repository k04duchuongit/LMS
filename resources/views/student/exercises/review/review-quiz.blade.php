@extends('shared.layouts.app')
@section('content')
 <div class="main-content">

            <!-- Banner -->
            <div class="lms-banner text-white">
                <div class="container h-100 d-flex align-items-center">
                    <div class="row w-100">
                        <div class="col-lg-8">
                            <h1 class="display-4 fw-bold mb-3">Kết quả Quiz: HTML cơ bản</h1>
                            <div class="d-flex gap-4">
                                <div>
                                    <i class="fas fa-clock me-2"></i>
                                    Thời gian làm: 15 phút
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
        <!-- Quiz Summary -->
        <div class="row mb-4">
            <div class="col-md-4">
                <div class="card border-0 shadow-sm rounded-3">
                    <div class="card-body text-center">
                        <h3 class="display-4 fw-bold text-primary mb-0">8.5</h3>
                        <p class="text-muted mb-0">Điểm số</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0 shadow-sm rounded-3">
                    <div class="card-body text-center">
                        <h3 class="display-4 fw-bold text-success mb-0">17</h3>
                        <p class="text-muted mb-0">Câu đúng</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0 shadow-sm rounded-3">
                    <div class="card-body text-center">
                        <h3 class="display-4 fw-bold text-danger mb-0">3</h3>
                        <p class="text-muted mb-0">Câu sai</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Questions Review -->
        <div class="row">
            <div class="col-lg-8">
                <!-- Question 1 -->
                <div class="card border-0 shadow-sm rounded-3 mb-4 question-card correct">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h5 class="card-title mb-0">Câu 1: Thẻ HTML nào được sử dụng để tạo tiêu đề?</h5>
                            <span class="badge bg-success">Đúng</span>
                        </div>
                        <div class="answer-option correct">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-check-circle text-success me-2"></i>
                                <span>Thẻ &lt;h1&gt; đến &lt;h6&gt;</span>
                            </div>
                        </div>
                        <div class="answer-option">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-circle me-2"></i>
                                <span>Thẻ &lt;title&gt;</span>
                            </div>
                        </div>
                        <div class="answer-option">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-circle me-2"></i>
                                <span>Thẻ &lt;header&gt;</span>
                            </div>
                        </div>
                        <div class="answer-option">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-circle me-2"></i>
                                <span>Thẻ &lt;heading&gt;</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Question 2 -->
                <div class="card border-0 shadow-sm rounded-3 mb-4 question-card incorrect">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h5 class="card-title mb-0">Câu 2: Thuộc tính nào được sử dụng để thay đổi màu chữ trong CSS?</h5>
                            <span class="badge bg-danger">Sai</span>
                        </div>
                        <div class="answer-option">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-circle me-2"></i>
                                <span>text-color</span>
                            </div>
                        </div>
                        <div class="answer-option correct">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-check-circle text-success me-2"></i>
                                <span>color</span>
                            </div>
                        </div>
                        <div class="answer-option incorrect">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-times-circle text-danger me-2"></i>
                                <span>font-color</span>
                            </div>
                        </div>
                        <div class="answer-option">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-circle me-2"></i>
                                <span>text-style</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Question 3 -->
                <div class="card border-0 shadow-sm rounded-3 mb-4 question-card correct">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h5 class="card-title mb-0">Câu 3: Thẻ nào được sử dụng để tạo liên kết trong HTML?</h5>
                            <span class="badge bg-success">Đúng</span>
                        </div>
                        <div class="answer-option">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-circle me-2"></i>
                                <span>&lt;link&gt;</span>
                            </div>
                        </div>
                        <div class="answer-option correct">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-check-circle text-success me-2"></i>
                                <span>&lt;a&gt;</span>
                            </div>
                        </div>
                        <div class="answer-option">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-circle me-2"></i>
                                <span>&lt;href&gt;</span>
                            </div>
                        </div>
                        <div class="answer-option">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-circle me-2"></i>
                                <span>&lt;url&gt;</span>
                            </div>
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
                            Thông tin Quiz
                        </h5>
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span>Tổng số câu hỏi</span>
                                <span class="badge bg-primary rounded-pill">20</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span>Thời gian làm bài</span>
                                <span class="badge bg-primary rounded-pill">15 phút</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span>Điểm đạt được</span>
                                <span class="badge bg-success rounded-pill">8.5/10</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span>Số câu đúng</span>
                                <span class="badge bg-success rounded-pill">17</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span>Số câu sai</span>
                                <span class="badge bg-danger rounded-pill">3</span>
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
                            <div class="progress-bar bg-success" role="progressbar" style="width: 85%">
                                85% Đúng
                            </div>
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 15%">
                                15% Sai
                            </div>
                        </div>
                        <p class="text-muted mb-0">
                            <i class="fas fa-lightbulb text-warning me-2"></i>
                            Bạn cần cải thiện kiến thức về CSS và JavaScript
                        </p>
                    </div>
                </div>
            </div>
        </div>
            </div>
        </div>
@endsection