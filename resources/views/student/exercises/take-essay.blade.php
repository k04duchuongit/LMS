@extends('shared.layouts.app')
@section('content')
  <div class="main-content">
            <div class="container">
                <div class="quiz-container">
                    <div class="quiz-header">
                        <div>
                            <h2>Bài kiểm tra tự luận: Lập trình Web</h2>
                            <p class="text-muted mb-0">1 câu hỏi tự luận • 45 phút</p>
                        </div>
                        <div class="timer">
                            <i class="fas fa-clock"></i>
                            <span>45:00</span>
                        </div>
                    </div>

                    <div class="progress-container">
                        <div class="d-flex justify-content-between mb-2">
                            <span>Tiến độ: 0/1 câu</span>
                            <span>0%</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 0%"></div>
                        </div>
                    </div>

                    <div class="question-card">
                        <div class="question-number">Câu hỏi 1/1</div>
                        <div class="question-text">
                            Hãy trình bày quan điểm của bạn về vai trò của lập trình web trong thời đại số hiện nay. (Tối đa 1000 từ)
                        </div>
                        <div class="mt-3">
                            <label for="essay-answer" class="form-label">Bài làm của bạn:</label>
                            <textarea class="form-control" id="essay-answer" rows="10" placeholder="Nhập bài làm tại đây..."></textarea>
                        </div>
                    </div>

                    <div class="navigation-buttons d-flex justify-content-end">
                        <button class="btn btn-primary">
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
                                    <h3 class="mb-0">0</h3>
                                    <p class="text-muted mb-0">Đã trả lời</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card border-0 bg-light">
                                <div class="card-body text-center">
                                    <h3 class="mb-0">1</h3>
                                    <p class="text-muted mb-0">Chưa trả lời</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card border-0 bg-light">
                                <div class="card-body text-center">
                                    <h3 class="mb-0">0</h3>
                                    <p class="text-muted mb-0">Đánh dấu</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card border-0 bg-light">
                                <div class="card-body text-center">
                                    <h3 class="mb-0">45:00</h3>
                                    <p class="text-muted mb-0">Thời gian còn lại</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
