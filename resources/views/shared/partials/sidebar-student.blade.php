  <aside class="sidebar">
      <div class="sidebar-header">
          <a href="#" class="sidebar-brand">
              <i class="fas fa-user-graduate me-2"></i>
              LMS Student
          </a>
      </div>
      <div class="sidebar-menu">
          <ul>
              <li>
                  <a href="{{ route('student.dashboard') }}" class="active">
                      <i class="fas fa-tachometer-alt"></i>
                      Tổng quan
                  </a>
              </li>
              <li class="sidebar-dropdown">
                  <a href="#" class="sidebar-dropdown-toggle d-flex align-items-center justify-content-between">
                      <span><i class="fas fa-chalkboard-teacher"></i> Lớp học</span>
                      <i class="fas fa-chevron-down ms-2"></i>
                  </a>
                  <ul class="sidebar-dropdown-menu list-unstyled ms-4 mb-2" style="display: none;">

                      <li><a class="dropdown-item py-2 px-3 rounded" href="{{ route('student.class.list') }}"><i
                                  class="fas fa-list me-2"></i>Tất cả lớp</a></li>
                      <li><a class="dropdown-item py-2 px-3 rounded"  href="{{ route('student.class.joined') }}"><i
                                  class="fas fa-calendar me-2"></i>Lớp của tôi</a></li>
                  </ul>
              </li>
              <li class="sidebar-dropdown">
                  <a href="#" class="sidebar-dropdown-toggle d-flex align-items-center justify-content-between">
                      <span><i class="fas fa-chart-line"></i> Kết quả học tập</span>
                      <i class="fas fa-chevron-down ms-2"></i>
                  </a>
                  <ul class="sidebar-dropdown-menu list-unstyled ms-4 mb-2" style="display: none;">
                      <li><a class="dropdown-item py-2 px-3 rounded" href="{{ route('student.transcript.main') }}"><i
                                  class="fas fa-tasks me-2"></i>Bảng điểm tổng</a></li>
                      <li><a class="dropdown-item py-2 px-3 rounded" href="learningProgress.html"><i
                                  class="fas fa-chart-bar me-2"></i>Tiến độ học tập</a></li>
                      <li><a class="dropdown-item py-2 px-3 rounded" href="certificates.html"><i
                                  class="fas fa-certificate me-2"></i>Chứng chỉ</a></li>
                  </ul>
              </li>
              <li>
                  <a href="{{ route('box.chat') }}">
                      <i class="fas fa-comments"></i>
                      Trò chuyện
                  </a>
              </li>
              <li>
                  <a href="../chung/pageChat.html">
                      <i class="fas fa-bell"></i>
                      Thông báo
                  </a>
              </li>

          </ul>
      </div>
      <div class="sidebar-footer">
          <a class="user-info" href="{{ route('profile.main') }}">
              <img src="https://randomuser.me/api/portraits/men/32.jpg" class="user-avatar" alt="User">
              <div class="user-details">
                  <p class="user-name">Nguyễn Văn A</p>
                  <p class="user-role">Học viên</p>
              </div>
          </a>
      </div>
  </aside>
