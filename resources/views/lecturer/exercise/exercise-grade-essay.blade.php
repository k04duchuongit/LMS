 @extends('shared.layouts.app')
 @section('content')
     <div class="main-content">
         <!-- Page Header -->
         <div class="py-4">
             <div class="d-flex justify-content-between align-items-center mb-4">
                 <div class="page-header-content">
                     <h2 class="text-gradient fw-bold mb-3">Chấm điểm bài tập</h2>
                     <p class="lead ">Đánh giá và nhận xét bài làm của học viên</p>
                 </div>
                 <div class="header-actions">
                     <a href="quiz-pendingScore.html" class="btn btn-outline-secondary me-2">
                         <i class="fas fa-arrow-left me-2"></i>Quay lại
                     </a>
                     <button type="button" class="btn btn-primary me-2">
                         <i class="fas fa-save me-2"></i>Lưu nháp
                     </button>
                     <button type="button" class="btn btn-success">
                         <i class="fas fa-check me-2"></i>Hoàn thành
                     </button>
                 </div>
             </div>

             <div class="row">
                 <!-- Student Info and Submission -->
                 <div class="col-lg-8">
                     <!-- Student Info -->
                     <div class="card shadow-sm mb-4">
                         <div class="card-body">
                             <div class="d-flex align-items-center">
                                 <img src="https://randomuser.me/api/portraits/women/32.jpg" class="rounded-circle me-3"
                                     width="64" height="64">
                                 <div>
                                     <h5 class="mb-1">Nguyễn Văn A</h5>
                                     <p class="text-muted mb-0">MSSV: 2021001</p>
                                     <p class="text-muted mb-0">Lớp: Lập trình Web cơ bản</p>
                                 </div>
                             </div>
                         </div>
                     </div>

                     <!-- Assignment Info -->
                     <div class="card shadow-sm mb-4">
                         <div class="card-body">
                             <h5 class="card-title mb-3">Thông tin bài tập</h5>
                             <div class="row g-3">
                                 <div class="col-md-6">
                                     <label class="form-label text-muted">Tên bài tập</label>
                                     <p class="mb-0 fw-semibold">Bài tập về nhà số 3</p>
                                 </div>
                                 <div class="col-md-6">
                                     <label class="form-label text-muted">Ngày nộp</label>
                                     <p class="mb-0 fw-semibold">15/03/2024 23:59</p>
                                 </div>
                                 <div class="col-md-6">
                                     <label class="form-label text-muted">Điểm tối đa</label>
                                     <p class="mb-0 fw-semibold">10 điểm</p>
                                 </div>
                                 <div class="col-md-6">
                                     <label class="form-label text-muted">Trạng thái</label>
                                     <span class="badge bg-warning">Chưa chấm</span>
                                 </div>
                             </div>
                         </div>
                     </div>

                     <!-- Student's Answers -->
                     <div class="card shadow-sm">
                         <div class="card-body">
                             <h5 class="card-title mb-3">Bài làm của học viên</h5>

                             <!-- Question 1 -->
                             <div class="question-item mb-4">
                                 <h6 class="fw-bold mb-3">Câu 1: Giải thích sự khác biệt giữa Flexbox và Grid trong
                                     CSS</h6>
                                 <div class="answer-content p-3 bg-light rounded">
                                     <p>Flexbox và Grid là hai công cụ bố cục mạnh mẽ trong CSS, mỗi công cụ có những
                                         ưu điểm riêng:</p>
                                     <p><strong>Flexbox:</strong></p>
                                     <ul>
                                         <li>Phù hợp cho bố cục một chiều (hàng hoặc cột)</li>
                                         <li>Tự động điều chỉnh kích thước các phần tử</li>
                                         <li>Dễ dàng căn chỉnh và phân phối không gian</li>
                                     </ul>
                                     <p><strong>Grid:</strong></p>
                                     <ul>
                                         <li>Phù hợp cho bố cục hai chiều (hàng và cột)</li>
                                         <li>Cho phép định vị chính xác các phần tử</li>
                                         <li>Tạo bố cục phức tạp dễ dàng hơn</li>
                                     </ul>
                                 </div>
                             </div>

                             <!-- Question 2 -->
                             <div class="question-item">
                                 <h6 class="fw-bold mb-3">Câu 2: Trình bày cách sử dụng CSS Grid để tạo layout
                                     responsive</h6>
                                 <div class="answer-content p-3 bg-light rounded">
                                     <p>Để tạo layout responsive với CSS Grid, chúng ta có thể sử dụng các thuộc tính
                                         sau:</p>
                                     <ol>
                                         <li>Sử dụng <code>grid-template-columns</code> với <code>repeat()</code> và
                                             <code>minmax()</code>
                                         </li>
                                         <li>Áp dụng media queries để điều chỉnh số cột theo kích thước màn hình</li>
                                         <li>Sử dụng <code>grid-auto-rows</code> để tự động điều chỉnh chiều cao</li>
                                     </ol>
                                     <p>Ví dụ code:</p>
                                     <pre class="bg-dark text-light p-3 rounded">
.grid-container {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 20px;
}
                                        </pre>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>

                 <!-- Grading Panel -->
                 <div class="col-lg-4">
                     <div class="card shadow-sm">
                         <div class="card-body">
                             <h5 class="card-title mb-3">Chấm điểm</h5>

                             <!-- Question 1 Grading -->
                             <div class="grading-item mb-4">
                                 <h6 class="fw-bold mb-3">Câu 1</h6>
                                 <div class="mb-3">
                                     <label class="form-label">Điểm số (tối đa: 5)</label>
                                     <input type="number" class="form-control" min="0" max="5" step="0.5"
                                         value="4.5">
                                 </div>
                                 <div class="mb-3">
                                     <label class="form-label">Nhận xét</label>
                                     <textarea class="form-control" rows="3" placeholder="Nhập nhận xét cho câu 1...">Giải thích rõ ràng về sự khác biệt giữa Flexbox và Grid. Tuy nhiên, có thể thêm ví dụ code cụ thể để minh họa.</textarea>
                                 </div>
                             </div>

                             <!-- Question 2 Grading -->
                             <div class="grading-item mb-4">
                                 <h6 class="fw-bold mb-3">Câu 2</h6>
                                 <div class="mb-3">
                                     <label class="form-label">Điểm số (tối đa: 5)</label>
                                     <input type="number" class="form-control" min="0" max="5" step="0.5"
                                         value="4">
                                 </div>
                                 <div class="mb-3">
                                     <label class="form-label">Nhận xét</label>
                                     <textarea class="form-control" rows="3" placeholder="Nhập nhận xét cho câu 2...">Trình bày tốt về cách sử dụng Grid. Code ví dụ rõ ràng và dễ hiểu.</textarea>
                                 </div>
                             </div>

                             <!-- Overall Feedback -->
                             <div class="grading-item">
                                 <h6 class="fw-bold mb-3">Nhận xét chung</h6>
                                 <div class="mb-3">
                                     <label class="form-label">Tổng điểm</label>
                                     <div class="d-flex align-items-center">
                                         <input type="number" class="form-control me-2" value="8.5" readonly>
                                         <span class="text-muted">/ 10 điểm</span>
                                     </div>
                                 </div>
                                 <div class="mb-3">
                                     <label class="form-label">Nhận xét tổng quan</label>
                                     <textarea class="form-control" rows="4" placeholder="Nhập nhận xét tổng quan...">Bài làm tốt, thể hiện hiểu biết sâu về CSS Grid và Flexbox. Cần bổ sung thêm ví dụ thực tế để minh họa rõ hơn.</textarea>
                                 </div>
                                 <div class="mb-3">
                                     <label class="form-label">Góp ý cải thiện</label>
                                     <textarea class="form-control" rows="3" placeholder="Nhập góp ý để học viên cải thiện...">Nên thêm các ví dụ code cụ thể và giải thích chi tiết hơn về các trường hợp sử dụng thực tế.</textarea>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 @endsection
