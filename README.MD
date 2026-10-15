<h2 align="center">
    <a href="https://dainam.edu.vn/vi/khoa-cong-nghe-thong-tin">
    🎓 Trường Đại học Đại Nam — Khoa Công nghệ Thông tin
    </a>
</h2>
<h2 align="center">
    BÀI THỰC HÀNH PHÁT TRIỂN PHẦN MỀM MÃ NGUỒN MỞ (PTPMMNM)
</h2>

<div align="center">
    <p align="center">
        <img src="docs/logo/aiotlab_logo.png" alt="AIoTLab Logo" width="160"/>
        <img src="docs/logo/fitdnu_logo.png" alt="FIT DNU Logo" width="170"/>
        <img src="docs/logo/dnu_logo.png" alt="DaiNam University Logo" width="190"/>
    </p>

[![AIoTLab](https://img.shields.io/badge/AIoTLab-green?style=for-the-badge)](https://www.facebook.com/DNUAIoTLab)
[![Faculty of Information Technology](https://img.shields.io/badge/Faculty%20of%20Information%20Technology-blue?style=for-the-badge)](https://dainam.edu.vn/vi/khoa-cong-nghe-thong-tin)
[![DaiNam University](https://img.shields.io/badge/DaiNam%20University-orange?style=for-the-badge)](https://dainam.edu.vn)

</div>

---
## Thông tin nhóm thực hiện

- **Lớp**: CNTT-18-10
- **Nhóm**: 10
- **Khoa**: Công nghệ Thông tin - Trường Đại học Đại Nam (FIT-DNU)

### Thành viên nhóm:
| STT | Họ và tên | Mã sinh viên | Vai trò |
|:---:|:---|:---:|:---|
| 1 | **Nguyễn Văn An** | 1871020003 | Thành viên |
| 2 | **Lê Đình Huy** | 1871020307 | Thành viên |
| 3 | **Đào Thị Tươi** | 1871020639 | Trưởng nhóm |

---

## Danh sách bài thực hành (Labs)

| Bài lab | Tên bài | Trạng thái | Kiểm thử tự động |
|:---|:---|:---:|:---:|
| [Lab 01](lab1/) | Vận hành dự án trên Linux và viết shell script | **Hoàn thành** | `CHECK_ENV=PASS`<br>`SHELL_CASES=4 FAILED=0` |
| [Lab 02](lab2/) | Lập trình hướng đối tượng PHP & Xử lý chính sách đăng ký | **Hoàn thành** | `TESTS=5 FAILED=0`<br>`TESTS=8 FAILED=0` |
| [Lab 03](lab3/) | Xử lý Form, kiểm tra dữ liệu và Bộ lọc sự kiện đa điều kiện | **Hoàn thành** | `TESTS=7 FAILED=0`<br>`TESTS=8 FAILED=0` |
| [Lab 04](lab4/) | Quản lý phiên làm việc, Cookie và Xác thực | Khởi tạo | Đang phát triển |
| [Lab 05](lab5/) | Tích hợp cơ sở dữ liệu PostgreSQL | Khởi tạo | Đang phát triển |

---

## Kết quả thực hiện Lab 1, Lab 2

### 1. Lab 01: Quét cú pháp mã nguồn (`scripts/scan-source.sh`)
- Kiểm tra tính hợp lệ của thư mục và sự tồn tại của lệnh `php` (trả về mã 2 nếu không hợp lệ).
- Duyệt qua từng tệp `.php`, kiểm tra cú pháp bằng `php -l`.
- Đếm tổng số tệp, số tệp vượt qua (pass), số tệp lỗi cú pháp (fail).
- Xử lý thư mục rỗng trả về mã 2; có lỗi cú pháp trả về mã 1; tất cả tệp hợp lệ trả về mã 0.
- **Kết quả kiểm thử**:
  - `bash lab.sh test`: `CHECK_ENV=PASS`
  - `bash lab.sh extend`: `SHELL_CASES=4 FAILED=0`

---

### 2. Lab 02: Chính sách kiểm soát đăng ký (`RegistrationPolicy.php`)
- Hoàn thiện phương thức `decide(int $capacity, int $registered, bool $open, bool $waitingEnabled): string`.
- Kiểm tra tính hợp lệ: sức chứa `<= 0`, số đăng ký `< 0` hoặc `> sức chứa` -> trả về `'rejected'`.
- Kiểm tra trạng thái đóng: `!$open` -> trả về `'rejected'`.
- Kiểm tra còn chỗ: `$registered < $capacity` -> trả về `'confirmed'`.
- Trường hợp hết chỗ: `$waitingEnabled` là `true` -> trả về `'waiting'`, ngược lại trả về `'rejected'`.
- **Kết quả kiểm thử**:
  - `bash lab.sh test`: `TESTS=5 FAILED=0`
  - `bash lab.sh extend`: `TESTS=8 FAILED=0`

---
## 💻 Yêu cầu môi trường & Hướng dẫn chạy

### 1. Môi trường yêu cầu
- Hệ điều hành: Ubuntu / WSL2
- PHP: Phiên bản từ 8.1 trở lên (`php-cli`)
- Git

### 2. Lệnh kiểm tra và chạy từng bài lab

Di chuyển vào thư mục `Ma_nguon` của bài lab tương ứng:

```bash
# Ví dụ chạy Lab 1
cd lab1/Ma_nguon
bash lab.sh check    # Kiểm tra môi trường
bash lab.sh test     # Chạy bộ kiểm thử cơ bản
bash lab.sh extend   # Chạy bộ kiểm thử mở rộng
bash lab.sh run      # Khởi chạy web server (http://127.0.0.1:8101)
```

```bash
# Ví dụ chạy Lab 2
cd lab2/Ma_nguon
bash lab.sh check
bash lab.sh test
bash lab.sh extend
bash lab.sh run
```

```bash
# Ví dụ chạy Lab 3
cd lab3/Ma_nguon
bash lab.sh check
bash lab.sh test
bash lab.sh extend
bash lab.sh run      # Khởi chạy web server (http://127.0.0.1:8103)
```
