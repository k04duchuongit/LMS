   @extends('shared.layouts.app')
   @section('content')
       <div class="main-content">
           <!-- Page Header -->
           <div class="container-fluid py-4">
               <div class="d-flex justify-content-between align-items-center mb-4">
                   <div class="page-header-content">
                       <h2 class="text-gradient fw-bold mb-3">Danh sách sinh viên</h2>
                       <p class="lead ">Quản lý thông tin và theo dõi tiến độ học tập của sinh viên</p>
                   </div>
                   <div class="header-actions">
                       <button type="button" class="btn btn-primary">
                           <i class="fas fa-plus me-2"></i>Thêm sinh viên
                       </button>
                   </div>
               </div>

               <!-- Filters -->
               <div class="card shadow-sm mb-4">
                   <div class="card-body">
                       <div class="row g-3">
                           <div class="col-md-3">
                               <label class="form-label">Lớp học</label>
                               <select class="form-select">
                                   <option value="">Tất cả lớp học</option>
                                   <option>Lập trình Web cơ bản</option>
                                   <option>Lập trình Python nâng cao</option>
                                   <option>Lập trình Java cơ bản</option>
                               </select>
                           </div>
                           <div class="col-md-3">
                               <label class="form-label">Trạng thái</label>
                               <select class="form-select">
                                   <option value="">Tất cả trạng thái</option>
                                   <option>Đang học</option>
                                   <option>Tạm dừng</option>
                                   <option>Đã hoàn thành</option>
                               </select>
                           </div>
                           <div class="col-md-3">
                               <label class="form-label">Sắp xếp theo</label>
                               <select class="form-select">
                                   <option value="">Mặc định</option>
                                   <option>Tên A-Z</option>
                                   <option>Điểm cao đến thấp</option>
                                   <option>Điểm thấp đến cao</option>
                               </select>
                           </div>
                           <div class="col-md-3">
                               <label class="form-label">Tìm kiếm</label>
                               <div class="input-group">
                                   <input type="text" class="form-control" placeholder="Tìm theo tên hoặc MSSV...">
                                   <button class="btn btn-primary">
                                       <i class="fas fa-search"></i>
                                   </button>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>

               <!-- Students Table -->
               <div class="card shadow-sm">
                   <div class="card-body">
                       <div class="table-responsive">
                           <table class="table table-hover">
                               <thead>
                                   <tr>
                                       <th>MSSV</th>
                                       <th>Họ và tên</th>
                                       <th>Lớp học</th>
                                       <th>Email</th>
                                       <th>Điểm trung bình</th>
                                       <th>Tiến độ</th>
                                       <th>Trạng thái</th>
                                       <th>Thao tác</th>
                                   </tr>
                               </thead>
                               <tbody>
                                   <tr>
                                       <td>2021001</td>
                                       <td>
                                           <div class="d-flex align-items-center">
                                               <img src="https://randomuser.me/api/portraits/women/32.jpg"
                                                   class="rounded-circle me-2" width="32" height="32">
                                               <div>Nguyễn Văn A</div>
                                           </div>
                                       </td>
                                       <td>Lập trình Web cơ bản</td>
                                       <td>nguyenvana@example.com</td>
                                       <td>8.5</td>
                                       <td>
                                           <div class="progress" style="height: 6px;">
                                               <div class="progress-bar bg-success" style="width: 85%"></div>
                                           </div>
                                           <small class="text-muted">85%</small>
                                       </td>
                                       <td><span class="badge bg-success">Đang học</span></td>
                                       <td>
                                           <div class="btn-group">
                                               <button type="button" class="btn btn-sm btn-outline-primary"
                                                   title="Xem chi tiết">
                                                   <i class="fas fa-eye"></i>
                                               </button>
                                               <button type="button" class="btn btn-sm btn-outline-info" title="Gửi email">
                                                   <i class="fas fa-envelope"></i>
                                               </button>
                                               <button type="button" class="btn btn-sm btn-outline-danger" title="Xóa">
                                                   <i class="fas fa-trash"></i>
                                               </button>
                                           </div>
                                       </td>
                                   </tr>
                                   <tr>
                                       <td>2021002</td>
                                       <td>
                                           <div class="d-flex align-items-center">
                                               <img src="https://randomuser.me/api/portraits/men/33.jpg"
                                                   class="rounded-circle me-2" width="32" height="32">
                                               <div>Trần Thị B</div>
                                           </div>
                                       </td>
                                       <td>Lập trình Python nâng cao</td>
                                       <td>tranthib@example.com</td>
                                       <td>7.8</td>
                                       <td>
                                           <div class="progress" style="height: 6px;">
                                               <div class="progress-bar bg-warning" style="width: 65%"></div>
                                           </div>
                                           <small class="text-muted">65%</small>
                                       </td>
                                       <td><span class="badge bg-warning">Tạm dừng</span></td>
                                       <td>
                                           <div class="btn-group">
                                               <button type="button" class="btn btn-sm btn-outline-primary"
                                                   title="Xem chi tiết">
                                                   <i class="fas fa-eye"></i>
                                               </button>
                                               <button type="button" class="btn btn-sm btn-outline-info" title="Gửi email">
                                                   <i class="fas fa-envelope"></i>
                                               </button>
                                               <button type="button" class="btn btn-sm btn-outline-danger" title="Xóa">
                                                   <i class="fas fa-trash"></i>
                                               </button>
                                           </div>
                                       </td>
                                   </tr>
                               </tbody>
                           </table>
                       </div>

                       <!-- Pagination -->
                       <nav class="mt-4">
                           <ul class="pagination justify-content-center">
                               <li class="page-item disabled">
                                   <a class="page-link" href="#" tabindex="-1">Trước</a>
                               </li>
                               <li class="page-item active"><a class="page-link" href="#">1</a></li>
                               <li class="page-item"><a class="page-link" href="#">2</a></li>
                               <li class="page-item"><a class="page-link" href="#">3</a></li>
                               <li class="page-item">
                                   <a class="page-link" href="#">Sau</a>
                               </li>
                           </ul>
                       </nav>
                   </div>
               </div>
           </div>
       </div>
   @endsection
