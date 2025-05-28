    @extends('shared.layouts.app')
 @section('content') <div class="main-content">
            <!-- Header -->
            <div class="content-header">
                <div class="header-left">
                    <h2 class="text-gradient fw-bold mb-3">Thêm bài tập tự luận</h2>
                    <p class="text-muted">Tạo bài tập mới cho lớp học</p>
                </div>
                <div class="header-right">
                    <button class="btn btn-outline-secondary me-2" onclick="history.back()">
                        <i class="fas fa-arrow-left me-2"></i>Quay lại
                    </button>
                    <button class="btn btn-primary" type="submit" form="essayForm">
                        <i class="fas fa-save me-2"></i>Lưu bài tập
                    </button>
                </div>
            </div>

            <!-- Form Content -->
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <form id="essayForm">
                        <!-- Basic Information -->
                        <div class="mb-4">
                            <h5 class="card-title mb-3">Thông tin cơ bản</h5>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label">Tên bài tập <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Lớp học <span class="text-danger">*</span></label>
                                    <select class="form-select" required>
                                        <option value="">Chọn lớp học</option>
                                        <option value="WEB101">Lập trình Web cơ bản (WEB101)</option>
                                        <option value="WEB102">Lập trình Web nâng cao (WEB102)</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Ngày bắt đầu <span class="text-danger">*</span></label>
                                    <input type="datetime-local" class="form-control" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Hạn nộp <span class="text-danger">*</span></label>
                                    <input type="datetime-local" class="form-control" required>
                                </div>
                            </div>
                        </div>

                        <!-- Questions Section -->
                        <div class="mb-4">
                            <h5 class="card-title mb-3">Danh sách câu hỏi</h5>
                            <div id="questionsList">
                                <!-- Question Template -->
                                <div class="question-item card border mb-3">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center mb-3">
                                            <h6 class="mb-0">Câu hỏi 1</h6>
                                            <button type="button" class="btn btn-outline-danger btn-sm"
                                                onclick="removeQuestion(this)">
                                                <i class="fas fa-times"></i>
                                            </button>
                                        </div>
                                        <div class="row g-3">
                                            <div class="col-12">
                                                <label class="form-label">Nội dung câu hỏi <span
                                                        class="text-danger">*</span></label>
                                                <textarea class="form-control" rows="3" required></textarea>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Điểm tối đa <span
                                                        class="text-danger">*</span></label>
                                                <input type="number" class="form-control" min="0" max="100" required>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Số từ tối thiểu</label>
                                                <input type="number" class="form-control" min="0"
                                                    placeholder="Để trống nếu không yêu cầu">
                                            </div>
                                            <div class="col-12">
                                                <label class="form-label">Gợi ý trả lời</label>
                                                <textarea class="form-control" rows="2"
                                                    placeholder="Nhập gợi ý cho học viên (không bắt buộc)"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="button" class="btn btn-outline-primary" onclick="addQuestion()">
                                <i class="fas fa-plus me-2"></i>Thêm câu hỏi
                            </button>
                        </div>

                        <!-- Grading Settings -->
                        <div class="mb-4">
                            <h5 class="card-title mb-3">Cài đặt chấm điểm</h5>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label">Tổng điểm bài tập <span
                                            class="text-danger">*</span></label>
                                    <input type="number" class="form-control" min="0" max="100" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Trọng số (%)</label>
                                    <input type="number" class="form-control" min="0" max="100" value="100">
                                </div>
                                <div class="col-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="enableRubric">
                                        <label class="form-check-label" for="enableRubric">
                                            Sử dụng rubric chấm điểm
                                        </label>
                                    </div>
                                </div>
                                <div class="col-12 rubric-settings" style="display: none;">
                                    <div class="card border">
                                        <div class="card-body">
                                            <div id="rubricList">
                                                <div class="rubric-item mb-3">
                                                    <div class="row g-2">
                                                        <div class="col-md-4">
                                                            <input type="text" class="form-control"
                                                                placeholder="Tiêu chí">
                                                        </div>
                                                        <div class="col-md-3">
                                                            <input type="number" class="form-control"
                                                                placeholder="Điểm tối đa">
                                                        </div>
                                                        <div class="col-md-4">
                                                            <input type="text" class="form-control" placeholder="Mô tả">
                                                        </div>
                                                        <div class="col-md-1">
                                                            <button class="btn btn-outline-danger" type="button"
                                                                onclick="removeRubric(this)">
                                                                <i class="fas fa-times"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="button" class="btn btn-outline-primary btn-sm"
                                                onclick="addRubric()">
                                                <i class="fas fa-plus me-2"></i>Thêm tiêu chí
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        @endsection