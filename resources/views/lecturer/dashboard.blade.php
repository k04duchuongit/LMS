 @extends('shared.layouts.app')
 @section('content')
     <div class="main-content"> <!-- Header -->
         <div class="content-header">
             <div class="header-left">
                 <h1>Dashboard</h1>
                 <p class="text-muted">Chào mừng trở lại, TS. Nguyễn Văn A!</p>
             </div>
             <div class="header-right">
                 <div class="search-box">
                     <i class="fas fa-search"></i>
                     <input type="text" class="form-control" placeholder="Tìm kiếm...">
                 </div>
                 <div class="header-actions">
                     <button class="btn btn-icon" title="Thông báo">
                         <i class="fas fa-bell"></i>
                         <span class="badge">3</span>
                     </button>
                     <button class="btn btn-icon" title="Tin nhắn">
                         <i class="fas fa-envelope"></i>
                         <span class="badge">5</span>
                     </button>
                 </div>
             </div>
         </div>

         <!-- Stats Cards -->
         <div class="row g-4 mb-4">
             <div class="col-md-3">
                 <div class="stat-card">
                     <div class="stat-icon bg-primary">
                         <i class="fas fa-chalkboard"></i>
                     </div>
                     <div class="stat-info">
                         <h3>4</h3>
                         <p>Lớp học đang dạy</p>
                         <span class="stat-change positive">
                             <i class="fas fa-arrow-up"></i> 2 lớp mới
                         </span>
                     </div>
                 </div>
             </div>
             <div class="col-md-3">
                 <div class="stat-card">
                     <div class="stat-icon bg-success">
                         <i class="fas fa-user-graduate"></i>
                     </div>
                     <div class="stat-info">
                         <h3>128</h3>
                         <p>Học viên</p>
                         <span class="stat-change positive">
                             <i class="fas fa-arrow-up"></i> 15 học viên mới
                         </span>
                     </div>
                 </div>
             </div>
             <div class="col-md-3">
                 <div class="stat-card">
                     <div class="stat-icon bg-info">
                         <i class="fas fa-tasks"></i>
                     </div>
                     <div class="stat-info">
                         <h3>12</h3>
                         <p>Quiz đã tạo</p>
                         <span class="stat-change positive">
                             <i class="fas fa-arrow-up"></i> 3 quiz mới
                         </span>
                     </div>
                 </div>
             </div>
             <div class="col-md-3">
                 <div class="stat-card">
                     <div class="stat-icon bg-warning">
                         <i class="fas fa-chart-line"></i>
                     </div>
                     <div class="stat-info">
                         <h3>85%</h3>
                         <p>Tỷ lệ hoàn thành</p>
                         <span class="stat-change positive">
                             <i class="fas fa-arrow-up"></i> 5%
                         </span>
                     </div>
                 </div>
             </div>
         </div>

         <!-- Tasks and Activities -->
         <div class="row g-4">
             <!-- Tasks -->
             <div class="col-md-6">
                 <div class="dashboard-card">
                     <div class="card-header">
                         <h2>Công việc cần xử lý</h2>
                         <a href="#" class="view-all">Xem tất cả</a>
                     </div>
                     <div class="task-list">
                         <div class="task-item">
                             <div class="task-icon bg-primary">
                                 <i class="fas fa-check-circle"></i>
                             </div>
                             <div class="task-info">
                                 <h4>Chấm điểm bài tập</h4>
                                 <p>5 bài nộp mới cần chấm điểm</p>
                             </div>
                             <a href="quiz-pendingScore.html" class="btn btn-sm btn-primary">Xử lý</a>
                         </div>
                         <div class="task-item">
                             <div class="task-icon bg-info">
                                 <i class="fas fa-bullhorn"></i>
                             </div>
                             <div class="task-info">
                                 <h4>Thông báo lớp học</h4>
                                 <p>Gửi thông báo về bài tập mới</p>
                             </div>
                             <a href="sendMail.html" class="btn btn-sm btn-primary">Xử lý</a>
                         </div>
                     </div>
                 </div>
             </div>

             <!-- Recent Activities -->
             <div class="col-md-6">
                 <div class="dashboard-card">
                     <div class="card-header">
                         <h2>Hoạt động gần đây</h2>
                         <a href="#" class="view-all">Xem tất cả</a>
                     </div>
                     <div class="activity-list">
                         <div class="activity-item">
                             <div class="activity-icon bg-info">
                                 <i class="fas fa-tasks"></i>
                             </div>
                             <div class="activity-info">
                                 <h4>Nộp bài tập</h4>
                                 <p>3 học viên đã nộp bài tập JavaScript</p>
                                 <span class="activity-time">1 giờ trước</span>
                             </div>
                         </div>
                         <div class="activity-item">
                             <div class="activity-icon bg-warning">
                                 <i class="fas fa-comments"></i>
                             </div>
                             <div class="activity-info">
                                 <h4>Phản hồi học viên</h4>
                                 <p>Nhận được 2 phản hồi mới từ học viên</p>
                                 <span class="activity-time">2 giờ trước</span>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>

         <!-- Lớp học đang dạy -->
         <div class="row mt-4">
             <div class="col-12">
                 <div class="dashboard-card">
                     <div class="card-header d-flex justify-content-between align-items-center">
                         <h2 class="mb-0">Lớp học đang dạy</h2>
                         <a href="class-manager.html" class="btn btn-link">Xem tất cả</a>
                     </div>
                     <div class="card-body">
                         <div class="row g-4">
                             <div class="col-md-4">
                                 <div class="card h-100 border-2 border-primary shadow">
                                     <div class="card-body">
                                         <div class="d-flex justify-content-between align-items-start mb-3">
                                             <div>
                                                 <h4 class="card-title mb-1">Lập trình Web cơ bản</h4>
                                                 <p class="text-muted mb-0">Mã lớp: WEB101</p>
                                             </div>
                                             <span class="badge bg-success">Đang diễn ra</span>
                                         </div>
                                         <div class="row g-3 mb-3">
                                             <div class="col-6">
                                                 <div class="d-flex align-items-center">
                                                     <div class="rounded-circle bg-primary bg-opacity-10 p-2 me-2">
                                                         <i class="fas fa-users text-primary"></i>
                                                     </div>
                                                     <div>
                                                         <h5 class="mb-0">32</h5>
                                                         <small class="text-muted">Học viên</small>
                                                     </div>
                                                 </div>
                                             </div>
                                             <div class="col-6">
                                                 <div class="d-flex align-items-center">
                                                     <div class="rounded-circle bg-info bg-opacity-10 p-2 me-2">
                                                         <i class="fas fa-tasks text-info"></i>
                                                     </div>
                                                     <div>
                                                         <h5 class="mb-0">4</h5>
                                                         <small class="text-muted">Bài tập</small>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>

                                         <div class="text-end">
                                             <a href="class-detail.html" class="btn btn-primary">
                                                 <i class="fas fa-chalkboard-teacher me-1"></i>Quản lý lớp
                                             </a>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <div class="col-md-4">
                                 <div class="card h-100 border-2 border-primary shadow">
                                     <div class="card-body">
                                         <div class="d-flex justify-content-between align-items-start mb-3">
                                             <div>
                                                 <h4 class="card-title mb-1">JavaScript nâng cao</h4>
                                                 <p class="text-muted mb-0">Mã lớp: JS201</p>
                                             </div>
                                             <span class="badge bg-success">Đang diễn ra</span>
                                         </div>
                                         <div class="row g-3 mb-3">
                                             <div class="col-6">
                                                 <div class="d-flex align-items-center">
                                                     <div class="rounded-circle bg-primary bg-opacity-10 p-2 me-2">
                                                         <i class="fas fa-users text-primary"></i>
                                                     </div>
                                                     <div>
                                                         <h5 class="mb-0">28</h5>
                                                         <small class="text-muted">Học viên</small>
                                                     </div>
                                                 </div>
                                             </div>
                                             <div class="col-6">
                                                 <div class="d-flex align-items-center">
                                                     <div class="rounded-circle bg-info bg-opacity-10 p-2 me-2">
                                                         <i class="fas fa-tasks text-info"></i>
                                                     </div>
                                                     <div>
                                                         <h5 class="mb-0">5</h5>
                                                         <small class="text-muted">Bài tập</small>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>

                                         <div class="text-end">
                                             <a href="class-detail.html" class="btn btn-primary">
                                                 <i class="fas fa-chalkboard-teacher me-1"></i>Quản lý lớp
                                             </a>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <div class="col-md-4">
                                 <div class="card h-100 border-2 border-primary shadow">
                                     <div class="card-body">
                                         <div class="d-flex justify-content-between align-items-start mb-3">
                                             <div>
                                                 <h4 class="card-title mb-1">React.js cơ bản</h4>
                                                 <p class="text-muted mb-0">Mã lớp: REACT101</p>
                                             </div>
                                             <span class="badge bg-success">Đang diễn ra</span>
                                         </div>
                                         <div class="row g-3 mb-3">
                                             <div class="col-6">
                                                 <div class="d-flex align-items-center">
                                                     <div class="rounded-circle bg-primary bg-opacity-10 p-2 me-2">
                                                         <i class="fas fa-users text-primary"></i>
                                                     </div>
                                                     <div>
                                                         <h5 class="mb-0">25</h5>
                                                         <small class="text-muted">Học viên</small>
                                                     </div>
                                                 </div>
                                             </div>
                                             <div class="col-6">
                                                 <div class="d-flex align-items-center">
                                                     <div class="rounded-circle bg-info bg-opacity-10 p-2 me-2">
                                                         <i class="fas fa-tasks text-info"></i>
                                                     </div>
                                                     <div>
                                                         <h5 class="mb-0">3</h5>
                                                         <small class="text-muted">Bài tập</small>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>

                                         <div class="text-end">
                                             <a href="class-detail.html" class="btn btn-primary">
                                                 <i class="fas fa-chalkboard-teacher me-1"></i>Quản lý lớp
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
     </div>
 @endsection
