 @extends('shared.layouts.app')
 @section('content')  <div class="main-content">

            <div class="content-header">
                <div class="header-left">
                    <h2 class="text-gradient fw-bold mb-3">Tạo Quiz mới</h2>
                    <p class="text-muted">Tạo bài kiểm tra với nhiều loại câu hỏi khác nhau</p>

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

            <!-- Quiz Information -->
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title mb-3">Thông tin Quiz</h5>
                    <form>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label">Tên Quiz <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="Nhập tên quiz" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Lớp học <span class="text-danger">*</span></label>
                                <select class="form-select" required>
                                    <option value="" selected disabled>Chọn lớp học</option>
                                    <option>Lập trình Web cơ bản</option>
                                    <option>Lập trình Python nâng cao</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Thời gian làm bài (phút)</label>
                                <input type="number" class="form-control" min="1" value="30">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Điểm tối đa</label>
                                <input type="number" class="form-control" min="1" value="100">
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Question Types -->
            <div class="row">
                <div class="col-lg-9">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h5>Danh sách câu hỏi</h5>
                        <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown">
                                <i class="fas fa-plus me-1"></i>Thêm câu hỏi
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="#"><i class="fas fa-dot-circle me-2"></i>Chọn một đáp
                                        án</a></li>
                                <li><a class="dropdown-item" href="#"><i class="fas fa-check-square me-2"></i>Chọn nhiều
                                        đáp án</a></li>
                                <li><a class="dropdown-item" href="#"><i class="fas fa-font me-2"></i>Tự viết đáp án</a>
                                </li>
                                <li><a class="dropdown-item" href="#"><i class="fas fa-paragraph me-2"></i>Tự luận</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Question 1: Single Choice -->
                    <div class="card mb-3">
                        <div class="card-header bg-light d-flex justify-content-between align-items-center">
                            <div>
                                <span class="me-2">Câu 1</span>
                                <span class="badge bg-info">Chọn một đáp án</span>
                            </div>
                            <div class="btn-group">
                                <button class="btn btn-sm btn-outline-secondary"><i
                                        class="fas fa-arrows-alt"></i></button>
                                <button class="btn btn-sm btn-outline-secondary"><i class="fas fa-copy"></i></button>
                                <button class="btn btn-sm btn-outline-secondary"><i class="fas fa-edit"></i></button>
                                <button class="btn btn-sm btn-outline-danger"><i class="fas fa-trash"></i></button>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="fw-bold">HTML là viết tắt của cụm từ nào?</p>
                            <div class="mb-2 p-2 border rounded bg-success bg-opacity-10">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q1" id="q1a" checked>
                                    <label class="form-check-label" for="q1a">HyperText Markup Language</label>
                                    <span class="badge bg-success float-end">Đáp án đúng</span>
                                </div>
                            </div>
                            <div class="mb-2 p-2 border rounded">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q1" id="q1b">
                                    <label class="form-check-label" for="q1b">High Tech Modern Language</label>
                                </div>
                            </div>
                            <div class="mb-2 p-2 border rounded">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q1" id="q1c">
                                    <label class="form-check-label" for="q1c">Hyper Transfer Markup Language</label>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer bg-light">
                            <div class="d-flex justify-content-between">
                                <span>Điểm: 5</span>
                            </div>
                        </div>
                    </div>

                    <!-- Question 2: Multiple Choice -->
                    <div class="card mb-3">
                        <div class="card-header bg-light d-flex justify-content-between align-items-center">
                            <div>
                                <span class="me-2">Câu 2</span>
                                <span class="badge bg-info">Chọn nhiều đáp án</span>
                            </div>
                            <div class="btn-group">
                                <button class="btn btn-sm btn-outline-secondary"><i
                                        class="fas fa-arrows-alt"></i></button>
                                <button class="btn btn-sm btn-outline-secondary"><i class="fas fa-copy"></i></button>
                                <button class="btn btn-sm btn-outline-secondary"><i class="fas fa-edit"></i></button>
                                <button class="btn btn-sm btn-outline-danger"><i class="fas fa-trash"></i></button>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="fw-bold">Đâu là các ngôn ngữ lập trình front-end?</p>
                            <div class="mb-2 p-2 border rounded bg-success bg-opacity-10">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="q2a" checked>
                                    <label class="form-check-label" for="q2a">HTML</label>
                                    <span class="badge bg-success float-end">Đáp án đúng</span>
                                </div>
                            </div>
                            <div class="mb-2 p-2 border rounded bg-success bg-opacity-10">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="q2b" checked>
                                    <label class="form-check-label" for="q2b">CSS</label>
                                    <span class="badge bg-success float-end">Đáp án đúng</span>
                                </div>
                            </div>
                            <div class="mb-2 p-2 border rounded bg-success bg-opacity-10">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="q2c" checked>
                                    <label class="form-check-label" for="q2c">JavaScript</label>
                                    <span class="badge bg-success float-end">Đáp án đúng</span>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer bg-light">
                            <div class="d-flex justify-content-between">
                                <span>Điểm: 10</span>
                            </div>
                        </div>
                    </div>

                    <!-- Question 3: Short Answer -->
                    <div class="card mb-3">
                        <div class="card-header bg-light d-flex justify-content-between align-items-center">
                            <div>
                                <span class="me-2">Câu 3</span>
                                <span class="badge bg-info">Tự viết đáp án</span>
                            </div>
                            <div class="btn-group">
                                <button class="btn btn-sm btn-outline-secondary"><i
                                        class="fas fa-arrows-alt"></i></button>
                                <button class="btn btn-sm btn-outline-secondary"><i class="fas fa-copy"></i></button>
                                <button class="btn btn-sm btn-outline-secondary"><i class="fas fa-edit"></i></button>
                                <button class="btn btn-sm btn-outline-danger"><i class="fas fa-trash"></i></button>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="fw-bold">CSS là viết tắt của cụm từ gì?</p>
                            <div class="mb-3">
                                <input type="text" class="form-control" value="Cascading Style Sheets" readonly>
                                <div class="form-text">Học viên sẽ nhập câu trả lời ngắn vào ô này.</div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Các đáp án được chấp nhận:</label>
                                <div class="d-flex gap-2 flex-wrap">
                                    <span class="badge bg-light text-dark p-2">Cascading Style Sheets</span>
                                    <span class="badge bg-light text-dark p-2">cascading style sheets</span>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer bg-light">
                            <div class="d-flex justify-content-between">
                                <span>Điểm: 5</span>
                            </div>
                        </div>
                    </div>

                    <!-- Question 4: Essay -->
                    <div class="card mb-3">
                        <div class="card-header bg-light d-flex justify-content-between align-items-center">
                            <div>
                                <span class="me-2">Câu 4</span>
                                <span class="badge bg-info">Tự luận</span>
                            </div>
                            <div class="btn-group">
                                <button class="btn btn-sm btn-outline-secondary"><i
                                        class="fas fa-arrows-alt"></i></button>
                                <button class="btn btn-sm btn-outline-secondary"><i class="fas fa-copy"></i></button>
                                <button class="btn btn-sm btn-outline-secondary"><i class="fas fa-edit"></i></button>
                                <button class="btn btn-sm btn-outline-danger"><i class="fas fa-trash"></i></button>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="fw-bold">Giải thích sự khác biệt giữa Flexbox và Grid trong CSS. Nêu ví dụ cụ thể
                                về trường hợp nên sử dụng mỗi loại.</p>
                            <div class="mb-3">
                                <label class="form-label">Hướng dẫn chấm điểm:</label>
                                <textarea class="form-control" rows="3" readonly>- Giải thích chính xác về Flexbox (2 điểm)
- Giải thích chính xác về Grid (2 điểm)
- So sánh sự khác biệt (3 điểm)
- Ví dụ cụ thể và phù hợp (3 điểm)</textarea>
                            </div>
                        </div>
                        <div class="card-footer bg-light">
                            <div class="d-flex justify-content-between">
                                <span>Điểm: 10</span>
                            </div>
                        </div>
                    </div>

                 
                </div>

                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-header bg-white">
                            <h6 class="card-title mb-0">Tổng quan</h6>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <p class="fw-bold mb-2">Thông tin chung</p>
                                <div class="d-flex justify-content-between mb-2">
                                    <span>Tổng số câu hỏi:</span>
                                    <span class="fw-bold">4</span>
                                </div>
                                <div class="d-flex justify-content-between mb-2">
                                    <span>Tổng điểm:</span>
                                    <span class="fw-bold">30</span>
                                </div>
                                <div class="d-flex justify-content-between mb-2">
                                    <span>Thời gian:</span>
                                    <span class="fw-bold">30 phút</span>
                                </div>
                            </div>

                            <div class="mb-3">
                                <p class="fw-bold mb-2">Câu hỏi</p>
                                <div class="list-group">
                                    <a href="#" class="list-group-item list-group-item-action active">
                                        <div class="d-flex w-100 justify-content-between">
                                            <span>1. Chọn một đáp án</span>
                                            <span>5đ</span>
                                        </div>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action">
                                        <div class="d-flex w-100 justify-content-between">
                                            <span>2. Chọn nhiều đáp án</span>
                                            <span>10đ</span>
                                        </div>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action">
                                        <div class="d-flex w-100 justify-content-between">
                                            <span>3. Tự viết đáp án</span>
                                            <span>5đ</span>
                                        </div>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action">
                                        <div class="d-flex w-100 justify-content-between">
                                            <span>4. Tự luận</span>
                                            <span>10đ</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection