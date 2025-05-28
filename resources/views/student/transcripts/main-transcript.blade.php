@extends('shared.layouts.app')
@section('content')
    <div class="main-content">
        <h4 class="text-primary mb-4">
            <i class="fas fa-chalkboard me-2"></i>
            Điểm của tôi
        </h4>

        <div class="card border-0 shadow-sm">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover align-middle">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Lớp học</th>
                                <th scope="col">Giảng viên</th>
                                <th scope="col">Số quiz đã làm</th>
                                <th scope="col">Điểm trung bình</th>
                                <th scope="col">Điểm cao nhất</th>
                                <th scope="col">Trạng thái</th>
                                <th scope="col">Chi tiết</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>1</th>
                                <td>
                                    <div class="d-flex align-items-center gap-2">
                                        <img src="https://images.unsplash.com/photo-1513258496099-48168024aec0?auto=format&fit=crop&w=60&q=80"
                                            alt="Web" width="40" height="40" class="rounded-circle border">
                                        <span>Lập trình Web cơ bản</span>
                                    </div>
                                </td>
                                <td>ThS. Trần Văn B</td>
                                <td>3/3</td>
                                <td><span class="badge bg-primary score-badge">8.5</span></td>
                                <td><span class="badge bg-success score-badge">10</span></td>
                                <td><span class="badge bg-success status-badge">Hoàn thành</span></td>
                                <td>
                                    <a href="scoreboard.html" class="btn btn-sm btn-outline-primary">
                                        <i class="fas fa-eye me-1"></i>Xem chi tiết
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <th>2</th>
                                <td>
                                    <div class="d-flex align-items-center gap-2">
                                        <img src="https://images.unsplash.com/photo-1461749280684-dccba630e2f6?auto=format&fit=crop&w=60&q=80"
                                            alt="Python" width="40" height="40" class="rounded-circle border">
                                        <span>Lập trình Python nâng cao</span>
                                    </div>
                                </td>
                                <td>TS. Nguyễn Thị C</td>
                                <td>2/4</td>
                                <td><span class="badge bg-primary score-badge">7.0</span></td>
                                <td><span class="badge bg-success score-badge">8.5</span></td>
                                <td><span class="badge bg-warning text-dark status-badge">Đang học</span></td>
                                <td>
                                    <a href="scoreboard.html" class="btn btn-sm btn-outline-primary">
                                        <i class="fas fa-eye me-1"></i>Xem chi tiết
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <th>3</th>
                                <td>
                                    <div class="d-flex align-items-center gap-2">
                                        <img src="https://images.unsplash.com/photo-1503676382389-4809596d5290?auto=format&fit=crop&w=60&q=80"
                                            alt="Java" width="40" height="40" class="rounded-circle border">
                                        <span>Lập trình Java cơ bản</span>
                                    </div>
                                </td>
                                <td>ThS. Lê Văn D</td>
                                <td>1/2</td>
                                <td><span class="badge bg-primary score-badge">6.5</span></td>
                                <td><span class="badge bg-success score-badge">7.5</span></td>
                                <td><span class="badge bg-danger status-badge">Chưa hoàn thành</span></td>
                                <td>
                                    <a href="scoreboard.html" class="btn btn-sm btn-outline-primary">
                                        <i class="fas fa-eye me-1"></i>Xem chi tiết
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
