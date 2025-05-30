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
                    <a href="{{ route('admin.dashboard') }}" class="active">
                        <i class="fas fa-tachometer-alt"></i>
                        Tổng quan
                    </a>
                </li>
                <li class="sidebar-dropdown">
                    <a href="#" class="sidebar-dropdown-toggle d-flex align-items-center justify-content-between">
                        <span><i class="fas fa-users"></i> Quản lý người dùng</span>
                        <i class="fas fa-chevron-down ms-2"></i>
                    </a>
                    <ul class="sidebar-dropdown-menu list-unstyled ms-4 mb-2" style="display: none;">
                        <li><a class="dropdown-item py-2 px-3 rounded" href="{{ route('admin.user.index') }}"><i
                                    class="fas fa-list me-2"></i>Danh sách người dùng</a></li>
                        <li><a class="dropdown-item py-2 px-3 rounded" href="{{ route('admin.user.create') }}"><i
                                    class="fas fa-user-plus me-2"></i>Thêm người dùng</a></li>
                        <li><a class="dropdown-item py-2 px-3 rounded" href="{{ route('admin.user.index') }}"><i
                                    class="fas fa-user-tag me-2"></i>Phân quyền người dùng</a></li>
                    </ul>
                </li>
                <li class="sidebar-dropdown">
                    <a href="#" class="sidebar-dropdown-toggle d-flex align-items-center justify-content-between">
                        <span><i class="fas fa-book"></i> Quản lý môn học</span>
                        <i class="fas fa-chevron-down ms-2"></i>
                    </a>
                    <ul class="sidebar-dropdown-menu list-unstyled ms-4 mb-2" style="display: none;">
                        <li><a class="dropdown-item py-2 px-3 rounded" href="{{ route('admin.subject.index') }}"><i
                                    class="fas fa-list me-2"></i>Danh sách môn học</a></li>
                        <li><a class="dropdown-item py-2 px-3 rounded" href="{{ route('admin.subject.create') }}"><i
                                    class="fas fa-plus me-2"></i>Thêm môn học</a></li>
                        <li><a class="dropdown-item py-2 px-3 rounded" href="courses-categories.html"><i
                                    class="fas fa-tags me-2"></i>Danh mục môn học</a></li>
                        <li><a class="dropdown-item py-2 px-3 rounded" href="{{ route('admin.subject.assign') }}"><i
                                    class="fas fa-user-tie me-2"></i>Phân công giảng viên</a></li>
                    </ul>
                </li>
                <li class="sidebar-dropdown">
                    <a href="#" class="sidebar-dropdown-toggle d-flex align-items-center justify-content-between">
                        <span><i class="fas fa-chalkboard"></i> Quản lý lớp học</span>
                        <i class="fas fa-chevron-down ms-2"></i>
                    </a>
                    <ul class="sidebar-dropdown-menu list-unstyled ms-4 mb-2" style="display: none;">
                        <li><a class="dropdown-item py-2 px-3 rounded" href="{{ route('admin.class.index') }}"><i
                                    class="fas fa-list me-2"></i>Danh sách lớp học</a></li>
                        <li><a class="dropdown-item py-2 px-3 rounded" href="{{ route('admin.class.approve') }}"><i
                                    class="fas fa-check-circle me-2"></i>Duyệt lớp học</a></li>
                        <li><a class="dropdown-item py-2 px-3 rounded" href="classes-progress.html"><i
                                    class="fas fa-chart-line me-2"></i>Tiến độ học tập</a></li>
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
                <li class="sidebar-dropdown">
                    <a href="#" class="sidebar-dropdown-toggle d-flex align-items-center justify-content-between">
                        <span><i class="fas fa-chart-bar"></i> Báo cáo</span>
                        <i class="fas fa-chevron-down ms-2"></i>
                    </a>
                    <ul class="sidebar-dropdown-menu list-unstyled ms-4 mb-2" style="display: none;">

                        <li><a class="dropdown-item py-2 px-3 rounded" href="reports-users.html"><i
                                    class="fas fa-users me-2"></i>Đánh giá giảng viên</a></li>
                        <li><a class="dropdown-item py-2 px-3 rounded" href="reports-courses.html"><i
                                    class="fas fa-book me-2"></i>Báo cáo khóa học</a></li>
                        <li><a class="dropdown-item py-2 px-3 rounded" href="reports-progress.html"><i
                                    class="fas fa-chart-line me-2"></i>Báo cáo tiến độ</a></li>
                    </ul>
                </li>
                <li>
                    <a href="settings.html">
                        <i class="fas fa-cog"></i>
                        Cài đặt
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
