@extends('shared.layouts.app')
@section('content')
    <div class="main-content">
        <!-- Header -->
        <div class="content-header">
            <div class="header-left">
                <h1>Sửa thông tin</h1>
                <p class="text-muted">Sửa thông tin người dùng : {{ $UserEditViewModel->getName() }}</p>
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

        <!-- Form Content -->
        <div class="row">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <form id="addUserForm" method="POST"
                            action="{{ route('admin.user.update', $UserEditViewModel->getId()) }}"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <!-- Thông tin cơ bản -->
                            <div class="mb-4">
                                <h5 class="card-title mb-3">Thông tin cơ bản</h5>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label class="form-label">Họ và tên <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control @error('fullName') is-invalid @enderror"
                                            name="fullName" value="{{ $UserEditViewModel->getName() }}">
                                        @error('fullName')
                                            <div class="text-danger small">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Email <span class="text-danger">*</span></label>
                                        <input type="email" class="form-control @error('email') is-invalid @enderror"
                                            name="email" value="{{ $UserEditViewModel->getEmail() }}">
                                        @error('email')
                                            <div class="text-danger small">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Số điện thoại <span class="text-danger">*</span></label>
                                        <input type="tel"
                                            class="form-control @error('number_phone') is-invalid @enderror"
                                            name="number_phone" value="{{ $UserEditViewModel->getNumberPhone() }}">
                                        @error('number_phone')
                                            <div class="text-danger small">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    {{-- <div class="col-md-6">
                                    <label class="form-label">Xác nhận mật khẩu <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control @error('confirmPassword') is-invalid @enderror" name="confirmPassword">
                                    @error('confirmPassword')
                                        <div class="text-danger small">{{ $message }}</div>
                                    @enderror
                                </div> --}}
                                </div>
                            </div>

                            <!-- Thông tin vai trò -->
                            <div class="mb-4">
                                <h5 class="card-title mb-3">Vai trò và quyền hạn</h5>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label class="form-label">Vai trò <span class="text-danger">*</span></label>
                                        <select class="form-select @error('role') is-invalid @enderror" name="role">
                                            <option value="">Chọn vai trò</option>
                                            <option value="admin" {{ $UserEditViewModel->getRole('admin') }}>
                                                Quản trị
                                                viên</option>
                                            <option value="lecturer" {{ $UserEditViewModel->getRole('lecturer') }}>
                                                Giảng
                                                viên</option>
                                            <option value="student" {{ $UserEditViewModel->getRole('student') }}>
                                                Học
                                                viên</option>
                                        </select>
                                        @error('role')
                                            <div class="text-danger small">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="mb-4">

                                <h5 class="card-title mb-3">Thông tin bổ sung</h5>
                                <div class="mb-3">
                                    <label class="form-label">Ảnh đại diện</label>
                                    <div class="d-flex align-items-center gap-3">

                                        <div>
                                            <img src="{{ asset($UserEditViewModel->getAvatar()) }}" alt="Ảnh đại diện cũ"
                                                style="width: 80px; height: 80px; object-fit: cover; border-radius: 8px; border: 1px solid #ccc;">
                                            <p class="small text-muted mt-1">Ảnh hiện tại</p>
                                        </div>

                                        <div>
                                            <input type="file" class="form-control @error('avatar') is-invalid @enderror"
                                                name="avatar">
                                            <p class="text-muted small mt-2">JPG, PNG hoặc GIF. Tối đa 2MB</p>

                                            @error('avatar')
                                                <div class="text-danger small">{{ $message }}</div>
                                            @enderror
                                        </div>


                                    </div>
                                </div>


                            </div>
                            <!-- Nút điều khiển -->
                            <div class="d-flex justify-content-end gap-2">
                                <button type="button" class="btn btn-light"
                                    onclick="window.location.href='listClient.html'">
                                    <i class="fas fa-times me-2"></i>Hủy
                                </button>
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-save me-2"></i>Lưu thông tin
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4">
                <!-- Hướng dẫn -->
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title mb-3">Hướng dẫn</h5>
                        <ul class="list-unstyled mb-0">
                            <li class="mb-2">
                                <i class="fas fa-info-circle text-primary me-2"></i>
                                Điền đầy đủ thông tin bắt buộc (có dấu *)
                            </li>
                            <li class="mb-2">
                                <i class="fas fa-key text-primary me-2"></i>
                                Mật khẩu phải có ít nhất 8 ký tự
                            </li>
                            <li class="mb-2">
                                <i class="fas fa-envelope text-primary me-2"></i>
                                Email phải là địa chỉ hợp lệ
                            </li>
                            <li>
                                <i class="fas fa-user-tag text-primary me-2"></i>
                                Chọn vai trò phù hợp cho người dùng
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Thông tin bổ sung -->

            </div>
        </div> <!-- End row -->
    </div> <!-- End main-content -->
@endsection
