@extends('shared.layouts.app')
@section('content')
    <div class="main-content">

        <!-- Banner -->
        <div class="lms-banner text-white">
            <div class="container h-100 d-flex align-items-center">
                <div class="row w-100">
                    <div class="col-lg-8">
                        <h1 class="display-4 fw-bold mb-3">Lập trình Web cơ bản</h1>
                        <p class="lead mb-4">Bảng điểm và thống kê kết quả học tập</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container py-5">
            <!-- Thống kê tổng quan -->
            <div class="row g-4 mb-4">
                <div class="col-md-3">
                    <div class="card border-0 shadow-sm rounded-3">
                        <div class="card-body text-center">
                            <h6 class="text-muted mb-2">Tổng số Quiz</h6>
                            <h3 class="mb-0">4</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card border-0 shadow-sm rounded-3">
                        <div class="card-body text-center">
                            <h6 class="text-muted mb-2">Đã hoàn thành</h6>
                            <h3 class="mb-0">1</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card border-0 shadow-sm rounded-3">
                        <div class="card-body text-center">
                            <h6 class="text-muted mb-2">Điểm trung bình</h6>
                            <h3 class="mb-0">8.5</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card border-0 shadow-sm rounded-3">
                        <div class="card-body text-center">
                            <h6 class="text-muted mb-2">Xếp hạng</h6>
                            <h3 class="mb-0">#15</h3>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bảng điểm chi tiết -->
            <div class="card border-0 shadow-sm rounded-3">
                <div class="card-header bg-white border-0 py-3">
                    <h5 class="card-title mb-0">
                        <i class="fas fa-list-alt me-2"></i>
                        Chi tiết điểm số
                    </h5>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th class="py-3">Quiz</th>
                                    <th class="py-3">Ngày làm</th>
                                    <th class="py-3">Thời gian</th>
                                    <th class="py-3">Số câu đúng</th>
                                    <th class="py-3">Điểm</th>
                                    <th class="py-3">Trạng thái</th>
                                    <th class="py-3">Thao tác</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="py-3">Quiz 0: Kiểm tra đầu vào</td>
                                    <td class="py-3">15/03/2024</td>
                                    <td class="py-3">25 phút</td>
                                    <td class="py-3">17/20</td>
                                    <td class="py-3">8.5</td>
                                    <td class="py-3">
                                        <span class="badge bg-success">Hoàn thành</span>
                                    </td>
                                    <td class="py-3">
                                        <a href="{{route('student.exercises.review.quiz')}}" class="btn btn-sm btn-outline-primary">
                                            <i class="fas fa-eye me-1"></i>Xem lại
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="py-3">Quiz 1: HTML cơ bản</td>
                                    <td class="py-3">-</td>
                                    <td class="py-3">-</td>
                                    <td class="py-3">-</td>
                                    <td class="py-3">-</td>
                                    <td class="py-3">
                                        <span class="badge bg-warning">Chưa làm</span>
                                    </td>
                                    <td class="py-3">
                                        <a href="#" class="btn btn-sm btn-primary">
                                            <i class="fas fa-play me-1"></i>Làm ngay
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="py-3">Quiz 2: CSS cơ bản</td>
                                    <td class="py-3">-</td>
                                    <td class="py-3">-</td>
                                    <td class="py-3">-</td>
                                    <td class="py-3">-</td>
                                    <td class="py-3">
                                        <span class="badge bg-warning">Chưa làm</span>
                                    </td>
                                    <td class="py-3">
                                        <a href="#" class="btn btn-sm btn-primary">
                                            <i class="fas fa-play me-1"></i>Làm ngay
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="py-3">Quiz 3: JavaScript cơ bản</td>
                                    <td class="py-3">-</td>
                                    <td class="py-3">-</td>
                                    <td class="py-3">-</td>
                                    <td class="py-3">-</td>
                                    <td class="py-3">
                                        <span class="badge bg-warning">Chưa làm</span>
                                    </td>
                                    <td class="py-3">
                                        <a href="#" class="btn btn-sm btn-primary">
                                            <i class="fas fa-play me-1"></i>Làm ngay
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
