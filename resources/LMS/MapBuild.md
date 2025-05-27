# 🚀 Roadmap Dự Án LMS với Laravel

## 1. **Chuẩn bị môi trường và cấu trúc dự án**

### 1.1 Cài đặt Laravel:
- **Khởi tạo dự án**: `composer create-project --prefer-dist laravel/laravel lms-project`.
- **Cấu hình môi trường**: 
  - Cấu hình `.env` (database, email, file storage).
  - Thiết lập các package cần thiết: Laravel Passport/Sanctum (nếu làm API), Laravel Mailable (gửi email).

### 1.2 Cấu trúc thư mục:
- **app/Models**: Các mô hình (User, Course, Class, Quiz...).
- **app/Http/Controllers**: Controller cho quản lý lớp học, môn học, quiz, người dùng...
- **app/Http/Requests**: Xác thực dữ liệu từ người dùng (validate).
- **routes/web.php** hoặc **routes/api.php**: Xây dựng các route.
- **resources/views**: Tạo Blade templates (nếu có).

---

## 2. **Thiết kế cơ sở dữ liệu (Database Design)**

### 2.1 Các bảng chính:
- **Users**: Quản lý người dùng (admin, giảng viên, học viên).
- **Roles**: Các vai trò người dùng.
- **Courses**: Quản lý khoá học.
- **Classes**: Quản lý lớp học (1 lớp thuộc 1 khoá học).
- **Quizzes**: Quản lý bài quiz.
- **Questions**: Câu hỏi trong quiz.
- **Enrollments**: Ghi danh học viên vào lớp học.
- **Grades**: Quản lý điểm học viên.
- **Notifications**: Quản lý thông báo qua email.

### 2.2 Mối quan hệ:
- **User** ↔ **Role**: Một User có thể có một vai trò.
- **Course** ↔ **Class**: Một Course có nhiều Class.
- **Class** ↔ **Enrollment**: Một Class có nhiều Enrollment.
- **Quiz** ↔ **Question**: Một Quiz có nhiều Question.
- **Enrollment** ↔ **Grade**: Một Enrollment có nhiều Grade.

---

## 3. **Các tính năng chính cần xây dựng**

### 3.1 Quản lý người dùng (Admin)
- **Chức năng**: Tạo, sửa, xóa người dùng và phân quyền.
- **Route**:
  - `POST /admin/users` (Tạo người dùng)
  - `PUT /admin/users/{id}` (Sửa người dùng)
  - `DELETE /admin/users/{id}` (Xóa người dùng)

### 3.2 Quản lý khoá học và lớp học (Admin + Giảng viên)
- **Chức năng**: Tạo, sửa, xóa khoá học và lớp học.
- **Route**:
  - `POST /admin/courses` (Tạo khoá học)
  - `POST /instructor/classes` (Tạo lớp học)
  - `GET /admin/courses` (Danh sách khoá học)

### 3.3 Quản lý quiz (Giảng viên)
- **Chức năng**: Tạo, sửa, xóa quiz.
- **Route**:
  - `POST /instructor/quizzes` (Tạo quiz)
  - `POST /instructor/quizzes/{quiz_id}/questions` (Thêm câu hỏi)
  - `GET /instructor/quizzes/{quiz_id}` (Xem quiz)

### 3.4 Quản lý điểm (Giảng viên)
- **Chức năng**: Chốt điểm học viên, tổng kết điểm.
- **Route**:
  - `POST /instructor/grades` (Chấm điểm)
  - `GET /instructor/grades` (Xem bảng điểm)

### 3.5 Học viên ghi danh lớp học
- **Chức năng**: Ghi danh vào lớp học, làm quiz.
- **Route**:
  - `POST /student/enroll` (Ghi danh lớp học)
  - `GET /student/courses` (Xem lớp học đã ghi danh)
  - `POST /student/quizzes/{quiz_id}/attempt` (Làm quiz)

### 3.6 Thông báo qua email (Admin + Giảng viên)
- **Chức năng**: Gửi thông báo qua email.
- **Route**:
  - `POST /admin/send-notification` (Thông báo admin)
  - `POST /instructor/send-notification` (Thông báo giảng viên)

---

## 4. **Xây dựng tính năng chi tiết**

### 4.1 Xây dựng API cho từng chức năng:
- **API Authentication**:
  - `POST /login`: Đăng nhập người dùng.
  - `POST /register`: Đăng ký tài khoản người dùng.
  
- **Validation (Xác thực đầu vào)**:
  - Sử dụng Laravel Form Request để validate dữ liệu.

- **Chức năng gửi email (Laravel Mailable)**:
  - Gửi thông báo khi tạo lớp học, quiz, điểm, hoặc thông báo hệ thống.

- **CRUD cho các đối tượng**:
  - Sử dụng Laravel Resource Controllers để xây dựng các tính năng CRUD cho **Users**, **Courses**, **Classes**, **Quizzes**, etc.

---

## 5. **Kết luận**
- **Test và triển khai**: Kiểm thử với PHPUnit, Postman, triển khai lên môi trường staging và production.
- **Tối ưu**: Kiểm tra bảo mật, tối ưu hóa API.

