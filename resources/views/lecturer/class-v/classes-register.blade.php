 @extends('shared.layouts.app')
 @section('content')
<div class="main-content">
            <!-- Header -->
            <div class="content-header">
                <div class="header-left">
                    <h2 class="text-gradient fw-bold mb-3">Tạo lớp học mới</h1>
                    <p class="text-muted">Thiết lập thông tin cho lớp học mới</p>
                </div>
            </div>

            <!-- Form Content -->
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <form id="createClassForm">
                        <!-- Thông tin cơ bản -->
                        <div class="mb-4">
                            <h5 class="card-title mb-3">Thông tin cơ bản</h5>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label">Tên lớp học <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="className" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Môn học <span class="text-danger">*</span></label>
                                    <select class="form-select" name="course" required>
                                        <option value="">Chọn môn học</option>
                                        <option value="1">Lập trình Web cơ bản</option>
                                        <option value="2">JavaScript nâng cao</option>
                                        <option value="3">Python cơ bản</option>
                                        <option value="4">Cơ sở dữ liệu</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Số lượng học viên tối đa</label>
                                    <input type="number" class="form-control" name="maxStudents" min="1" value="30">
                                </div>
                                
                            </div>
                        </div>

                     
                        <!-- Mô tả -->
                        <div class="mb-4">
                            <h5 class="card-title mb-3">Mô tả</h5>
                            <div class="row">
                                <div class="col-12">
                                    <label class="form-label">Mô tả lớp học</label>
                                    <textarea class="form-control" name="description" rows="4"></textarea>
                                </div>
                            </div>
                        </div>

                        <!-- Yêu cầu -->
                        <div class="mb-4">
                            <h5 class="card-title mb-3">Yêu cầu</h5>
                            <div class="row">
                                <div class="col-12">
                                    <label class="form-label">Yêu cầu đầu vào</label>
                                    <textarea class="form-control" name="requirements" rows="3"></textarea>
                                </div>
                            </div>
                        </div>

                        <!-- Nút điều khiển -->
                        <div class="d-flex justify-content-end gap-2">
                            <button type="button" class="btn btn-light" onclick="window.history.back()">Hủy</button>
                            <button type="submit" class="btn btn-primary">Tạo lớp học</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        @endsection