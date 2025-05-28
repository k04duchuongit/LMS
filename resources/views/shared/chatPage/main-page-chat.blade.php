@extends('shared.layouts.app')
@section('content')
    <div class="main-content">
        <div class="chat-container">
            <div class="row h-100 g-0">
                <!-- Chat Sidebar -->
                <div class="col-md-4 col-lg-3 chat-sidebar">
                    <!-- Search Box -->
                    <div class="p-3">
                        <div class="search-box">
                            <i class="fas fa-search"></i>
                            <input type="text" class="form-control search-input" placeholder="Tìm kiếm cuộc trò chuyện...">
                        </div>
                    </div>

                    <!-- Contact List -->
                    <div class="chat-contacts">
                        <div class="chat-contact active">
                            <div class="d-flex align-items-center">
                                <div class="position-relative">
                                    <img src="https://randomuser.me/api/portraits/women/12.jpg" alt="Contact"
                                        class="rounded-circle" style="width: 40px; height: 40px; object-fit: cover;">
                                    <span class="online-status"></span>
                                </div>
                                <div class="ms-3 flex-grow-1">
                                    <h6 class="mb-0">Nguyễn Thị B</h6>
                                    <small class="text-muted">Học viên</small>
                                </div>

                            </div>
                        </div>

                        <div class="chat-contact">
                            <div class="d-flex align-items-center">
                                <div class="position-relative">
                                    <img src="https://randomuser.me/api/portraits/men/22.jpg" alt="Contact"
                                        class="rounded-circle" style="width: 40px; height: 40px; object-fit: cover;">
                                </div>
                                <div class="ms-3 flex-grow-1">
                                    <h6 class="mb-0">Trần Văn C</h6>
                                    <small class="text-muted">Học viên</small>
                                </div>
                            </div>
                        </div>

                        <div class="chat-contact">
                            <div class="d-flex align-items-center">
                                <div class="position-relative">
                                    <img src="https://randomuser.me/api/portraits/women/32.jpg" alt="Contact"
                                        class="rounded-circle" style="width: 40px; height: 40px; object-fit: cover;">
                                    <span class="online-status"></span>
                                </div>
                                <div class="ms-3 flex-grow-1">
                                    <h6 class="mb-0">Lê Thị D</h6>
                                    <small class="text-muted">Học viên</small>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <!-- Main Chat Area -->
                <div class="col-md-8 col-lg-9 chat-main">
                    <!-- Chat Header -->
                    <div class="chat-header">
                        <div class="d-flex align-items-center">
                            <div class="position-relative">
                                <img src="https://randomuser.me/api/portraits/women/12.jpg" alt="Contact"
                                    class="rounded-circle" style="width: 40px; height: 40px; object-fit: cover;">
                                <span class="online-status"></span>
                            </div>
                            <div class="ms-3">
                                <h6 class="mb-0">Nguyễn Thị B</h6>
                                <small class="text-muted">Đang hoạt động</small>
                            </div>

                        </div>
                    </div>

                    <!-- Chat Messages -->
                    <div class="chat-messages">
                        <div class="message received">
                            <div class="d-flex align-items-center">
                                <div class="message-avatar">
                                    <img src="https://randomuser.me/api/portraits/women/12.jpg" alt="Sender"
                                        class="rounded-circle" style="width: 38px; height: 38px; object-fit: cover;">
                                </div>
                                <div class="message-content ms-2">
                                    Chào thầy, em có thắc mắc về bài tập JavaScript ạ.
                                </div>
                            </div>
                            <div class="message-time">10:30</div>
                        </div>

                        <div class="message sent">
                            <div class="d-flex align-items-center">
                                <div class="message-content me-2">
                                    Chào em, em cứ hỏi đi.
                                </div>
                                <div class="message-avatar">
                                    <img src="https://randomuser.me/api/portraits/women/12.jpg" alt="Sender"
                                        class="rounded-circle" style="width: 38px; height: 38px; object-fit: cover;">
                                </div>
                            </div>
                            <div class="message-time text-end">10:31</div>
                        </div>

                        <div class="message received">
                            <div class="d-flex align-items-center">
                                <div class="message-avatar">
                                    <img src="https://randomuser.me/api/portraits/women/12.jpg" alt="Sender"
                                        class="rounded-circle" style="width: 38px; height: 38px; object-fit: cover;">
                                </div>
                                <div class="message-content ms-2">
                                    Chào thầy, em có thắc mắc về bài tập JavaScript ạ.
                                </div>
                            </div>
                            <div class="message-time">10:30</div>
                        </div>

                        <div class="message sent">
                            <div class="d-flex align-items-center">
                                <div class="message-content me-2">
                                    Chào em, em cứ hỏi đi.
                                </div>
                                <div class="message-avatar">
                                    <img src="https://randomuser.me/api/portraits/women/12.jpg" alt="Sender"
                                        class="rounded-circle" style="width: 38px; height: 38px; object-fit: cover;">
                                </div>
                            </div>
                            <div class="message-time text-end">10:31</div>
                        </div>
                    </div>

                    <!-- Chat Input -->
                    <div class="chat-input">
                        <div class="input-group">
                            <button class="btn btn-light rounded-circle">
                                <i class="fas fa-paperclip"></i>
                            </button>
                            <input type="text" class="form-control" placeholder="Nhập tin nhắn...">
                            <button class="btn btn-light rounded-circle">
                                <i class="fas fa-smile"></i>
                            </button>
                            <button class="btn btn-primary rounded-circle">
                                <i class="fas fa-paper-plane"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
