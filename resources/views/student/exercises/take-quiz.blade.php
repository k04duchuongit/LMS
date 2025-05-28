@extends('shared.layouts.app')
@section('content')
    <div class="main-content">
            <div class="container">
                <div class="quiz-container">
                    <div class="quiz-header">
                        <div>
                            <h2>Kiểm tra giữa kỳ: Lập trình Web</h2>
                            <p class="text-muted mb-0">30 câu hỏi • 45 phút</p>
                        </div>
                        <div class="timer">
                            <i class="fas fa-clock"></i>
                            <span>35:42</span>
                        </div>
                    </div>

                    <div class="progress-container">
                        <div class="d-flex justify-content-between mb-2">
                            <span>Tiến độ: 8/30 câu</span>
                            <span>27%</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 27%"></div>
                        </div>
                    </div>

                    <div class="question-list">
                        <div class="question-dot active">1</div>
                        <div class="question-dot answered">2</div>
                        <div class="question-dot answered">3</div>
                        <div class="question-dot">4</div>
                        <div class="question-dot">5</div>
                        <div class="question-dot">6</div>
                        <div class="question-dot">7</div>
                        <div class="question-dot">8</div>
                        <div class="question-dot">9</div>
                        <div class="question-dot">10</div>
                        <!-- Thêm các dots cho các câu hỏi còn lại -->
                    </div>

                    <div class="question-card">
                        <div class="question-number">Câu hỏi 1/30</div>
                        <div class="question-text">
                            Đâu là thẻ HTML đúng để tạo một đường link?
                        </div>
                        <div class="options-container">
                            <div class="option-item">
                                <div class="option-letter">A</div>
                                <div class="option-text">&lt;a href="url"&gt;link text&lt;/a&gt;</div>
                            </div>
                            <div class="option-item">
                                <div class="option-letter">B</div>
                                <div class="option-text">&lt;link&gt;url&lt;/link&gt;</div>
                            </div>
                            <div class="option-item">
                                <div class="option-letter">C</div>
                                <div class="option-text">&lt;hyperlink&gt;url&lt;/hyperlink&gt;</div>
                            </div>
                            <div class="option-item">
                                <div class="option-letter">D</div>
                                <div class="option-text">&lt;url&gt;link text&lt;/url&gt;</div>
                            </div>
                        </div>
                    </div>

                    <div class="navigation-buttons">
                        <button class="btn btn-outline-primary nav-btn">
                            <i class="fas fa-arrow-left me-2"></i>
                            Câu trước
                        </button>
                        <button class="btn btn-primary nav-btn">
                            Câu tiếp theo
                            <i class="fas fa-arrow-right ms-2"></i>
                        </button>
                    </div>
                </div>

                <div class="quiz-container mt-4">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h4 class="mb-0">Tổng quan</h4>
                            <p class="text-muted mb-0">Theo dõi tiến độ làm bài của bạn</p>
                        </div>
                        <button class="btn btn-danger">
                            <i class="fas fa-paper-plane me-2"></i>
                            Nộp bài
                        </button>
                    </div>
                    <div class="row mt-4">
                        <div class="col-md-3">
                            <div class="card border-0 bg-light">
                                <div class="card-body text-center">
                                    <h3 class="mb-0">8</h3>
                                    <p class="text-muted mb-0">Đã trả lời</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card border-0 bg-light">
                                <div class="card-body text-center">
                                    <h3 class="mb-0">22</h3>
                                    <p class="text-muted mb-0">Chưa trả lời</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card border-0 bg-light">
                                <div class="card-body text-center">
                                    <h3 class="mb-0">5</h3>
                                    <p class="text-muted mb-0">Đánh dấu</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card border-0 bg-light">
                                <div class="card-body text-center">
                                    <h3 class="mb-0">35:42</h3>
                                    <p class="text-muted mb-0">Thời gian còn lại</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
