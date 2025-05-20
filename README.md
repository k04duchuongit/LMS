# 📘 Dự án LMS - Learning Management System

## 🚀 Mục tiêu dự án
Xây dựng hệ thống LMS (hệ thống quản lý học tập) hỗ trợ học trực tuyến. Người dùng có thể đăng ký học, giảng viên tạo lớp học, thêm bài kiểm tra (quiz), chấm điểm và quản lý học viên. Super Admin sẽ kiểm soát toàn hệ thống.

---

## ⚙️ Công nghệ dự kiến
- **Backend:** Laravel (PHP)
- **Frontend:** 
- **Database:** MySQL
- **Xác thực:** 
- **Email:** 
- **Upload:** 

---

## 👥 Phân quyền người dùng (Roles & Permissions)

### 1. 👑 Super Admin
- Quản lý người dùng (tạo / sửa / xoá)
- Gán quyền người dùng (giảng viên, học viên)
- Quản lý môn học (tạo / sửa / xoá)
- Quản lý danh mục môn học
- Phân công giảng viên phụ trách môn học
- Duyệt lớp học do giảng viên tạo
- Gửi thông báo qua email đến giảng viên
- Xem báo cáo toàn hệ thống:
  - Tổng số học viên
  - Số lượng khoá học/lớp học
  - Tiến độ học tập

---

### 2. 👨‍🏫 Giảng viên
- Tạo và quản lý lớp học của mình
- Thêm / sửa / xoá bài quiz
- Theo dõi và quản lý danh sách học viên trong lớp
- Chốt điểm quiz của học viên
- Nhận xét và đánh giá học viên
- Gửi thông báo qua email đến học viên

---

### 3. 👨‍🎓 Học viên
- Xem và ghi danh vào lớp học
- Làm bài quiz
- Xem điểm và xuất điểm
- Đánh giá giảng viên

---

## 🗂️ Tách lớp học và môn học
- **Môn học (Subject):** Toán, Văn, Lý, Hóa...
- **Lớp học (Class/Course):** Mỗi lớp thuộc một môn học, được tạo bởi giảng viên. Ví dụ: "Toán lớp 9A - Học kỳ 1"

---

## 📊 Bảng phân quyền chi tiết

| Chức năng | Super Admin | Giảng viên | Học viên |
|-----------|-------------|------------|----------|
| Quản lý người dùng | ✅ | ❌ | ❌ |
| Gán quyền | ✅ | ❌ | ❌ |
| Quản lý môn học | ✅ | ❌ | ❌ |
| Phân công giảng viên | ✅ | ❌ | ❌ |
| Duyệt lớp học | ✅ | ❌ | ❌ |
| Gửi email đến giảng viên | ✅ | ❌ | ❌ |
| Gửi email đến học viên | ❌ | ✅ | ❌ |
| Xem báo cáo hệ thống | ✅ | ❌ | ❌ |
| Tạo/quản lý lớp học | ❌ | ✅ | ❌ |
| Thêm/sửa/xoá quiz | ❌ | ✅ | ❌ |
| Theo dõi học viên trong lớp | ❌ | ✅ | ❌ |
| Chốt điểm quiz | ❌ | ✅ | ❌ |
| Tổng kết điểm, nhận xét học viên | ❌ | ✅ | ❌ |
| Ghi danh lớp học | ❌ | ❌ | ✅ |
| Làm quiz | ❌ | ❌ | ✅ |
| Xem & xuất điểm | ❌ | ❌ | ✅ |
| Đánh giá giảng viên | ❌ | ❌ | ✅ |

---


## 📅 Lộ trình phát triển
- [x] Phân quyền người dùng
- [x] Thiết kế chức năng từng vai trò
- [ ] Thiết kế cơ sở dữ liệu
- [ ] Authentication & phân quyền
- [ ] CRUD môn học / lớp học
- [ ] Chức năng quiz, điểm, tiến độ học tập
- [ ] Gửi email, báo cáo hệ thống

---

