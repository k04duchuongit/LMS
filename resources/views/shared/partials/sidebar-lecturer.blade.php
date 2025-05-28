  <aside class="sidebar">
      <div class="sidebar-header">
          <a href="#" class="sidebar-brand">
              <i class="fas fa-user-shield me-2"></i>
              LMS Admin
          </a>
      </div>
      <div class="sidebar-menu">
          <ul>
              <li>
                  <a href="{{ route('lecturer.dashboard') }}" class="active">
                      <i class="fas fa-tachometer-alt"></i>
                      Tổng quan
                  </a>
              </li>
              <li class="sidebar-dropdown">
                  <a href="" class="sidebar-dropdown-toggle d-flex align-items-center justify-content-between">
                      <span><i class="fas fa-chalkboard-teacher"></i> Quản lý lớp học</span>
                      <i class="fas fa-chevron-down ms-2"></i>
                  </a>
                  <ul class="sidebar-dropdown-menu list-unstyled ms-4 mb-2" style="display: none;">
                      <li><a class="dropdown-item py-2 px-3 rounded" href="{{ route('lecturer.class.list') }}"><i
                                  class="fas fa-list me-2"></i>Danh sách lớp</a></li>
                      <li><a class="dropdown-item py-2 px-3 rounded" href="{{ route('lecturer.class.register') }}"><i
                                  class="fas fa-plus-circle me-2"></i>Đăng ký lớp</a></li>
                  </ul>
              </li>
              <li class="sidebar-dropdown">
                  <a href="#" class="sidebar-dropdown-toggle d-flex align-items-center justify-content-between">
                      <span><i class="fas fa-tasks"></i> Quản lý bài tập</span>
                      <i class="fas fa-chevron-down ms-2"></i>
                  </a>
                  <ul class="sidebar-dropdown-menu list-unstyled ms-4 mb-2" style="display: none;">
                      <li><a class="dropdown-item py-2 px-3 rounded" href="{{ route('lecturer.exercise.list') }}"><i
                                  class="fas fa-list me-2"></i>Tất cả bài tập</a></li>
                      <li><a class="dropdown-item py-2 px-3 rounded"
                              href="{{ route('lecturer.exercise.create-essay') }}"><i
                                  class="fas fa-pen-fancy me-2"></i>Thêm bài tập tự luận</a></li>
                      <li><a class="dropdown-item py-2 px-3 rounded"
                              href="{{ route('lecturer.exercise.create-quiz') }}"><i
                                  class="fas fa-question-circle me-2"></i>Thêm quiz</a></li>
                      <li><a class="dropdown-item py-2 px-3 rounded" href="{{ route('lecturer.exercise.pending') }}"><i
                                  class="fas fa-check-double me-2"></i>Chấm điểm</a></li>
                  </ul>
              </li>

              <li class="sidebar-dropdown">
                  <a href="#" class="sidebar-dropdown-toggle d-flex align-items-center justify-content-between">
                      <span><i class="fas fa-bell"></i> Thông báo</span>
                      <i class="fas fa-chevron-down ms-2"></i>
                  </a>
                  <ul class="sidebar-dropdown-menu list-unstyled ms-4 mb-2" style="display: none;">
                      <li><a class="dropdown-item py-2 px-3 rounded" href="{{ route('notification.create') }}"><i
                                  class="fas fa-plus me-2"></i>Tạo thông báo</a></li>
                      <li><a class="dropdown-item py-2 px-3 rounded" href="{{ route('notification.sendMail') }}"><i
                                  class="fas fa-envelope me-2"></i>Gửi email</a></li>
                      <li><a class="dropdown-item py-2 px-3 rounded" href="{{ route('notification.history') }}"><i
                                  class="fas fa-history me-2"></i>Lịch sử thông báo</a></li>
                  </ul>
              </li>
              <li>
                  <a href="{{ route('lecturer.student.list') }}" class="active">
                      <span><i class="fas fa-user-graduate"></i>Quản lý sinh viên</span>
                  </a>
              </li>
          </ul>
      </div>
      <div class="sidebar-footer">
          <div class="user-info">
              <img src="https://randomuser.me/api/portraits/men/32.jpg" class="user-avatar" alt="User">
              <div class="user-details">
                  <p class="user-name">Admin</p>
                  <p class="user-role">Quản trị viên</p>
              </div>
          </div>
      </div>
  </aside>
