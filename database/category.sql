
CREATE TABLE `category` (
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `title` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL,
  `meta_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `meta_keywords` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `meta_description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `title`, `slug`, `parent_id`, `meta_title`, `meta_keywords`, `meta_description`, `created_at`, `updated_at`) VALUES
(1, 'Thư viện Ảnh', 'thu-vien-anh', 0, '', '', '', '2019-08-02 13:52:58', NULL),
(3, 'Chương trình đào tạo', 'chuong-trinh-dao-tao', 71, '', '', '', '2019-08-02 13:52:58', NULL),
(4, 'Chương trình đào tạo dài hạn', 'chuong-trinh-dao-tao-dai-han', 3, '', '', '', '2019-08-02 13:52:58', NULL),
(5, 'Chương trình đào tạo ngắn hạn lập trình viên', 'chuong-trinh-dao-tao-ngan-han-lap-trinh-vien', 3, '', '', '', '2019-08-02 13:52:58', NULL),
(6, 'Thi chứng chỉ quốc tế', 'thi-chung-chi-quoc-te', 3, '', '', '', '2019-08-02 13:52:58', NULL),
(20, 'Tin tức- Video', 'tin-tuc-video', 0, '', '', '', '2019-08-02 13:52:58', NULL),
(21, 'Tin Nội Bộ', 'tin-noi-bo', 20, '', '', '', '2019-08-02 13:52:59', NULL),
(26, 'Giới thiệu', 'gioi-thieu', 0, '', '', '', '2019-08-02 13:52:59', NULL),
(62, 'Sự kiện', 'su-kien', 20, '', '', '', '2019-08-02 13:52:59', NULL),
(63, 'Góc học viên', 'goc-hoc-vien', 0, '', '', '', '2019-08-02 13:52:59', NULL),
(65, 'Ấn tượng học viên', 'an-tuong-hoc-vien', 63, '', '', '', '2019-08-02 13:52:59', NULL),
(66, 'Câu chuyện thành công', 'cau-chuyen-thanh-cong', 63, '', '', '', '2019-08-02 13:52:59', NULL),
(67, 'Việc làm học viên', 'viec-lam-hoc-vien', 63, '', '', '', '2019-08-02 13:52:59', NULL),
(68, 'Lịch sử hình thành', 'lich-su-hinh-thanh', 26, '', '', '', '2019-08-02 13:52:59', NULL),
(69, 'Thông điệp của Giám đốc', 'thong-diep-cua-giam-doc', 26, '', '', '', '2019-08-02 13:52:59', NULL),
(70, 'Cơ sở vật chất', 'co-so-vat-chat', 26, '', '', '', '2019-08-02 13:52:59', NULL),
(71, 'Đào tạo', 'dao-tao', 0, '', '', '', '2019-08-02 13:52:59', NULL),
(72, 'Giảng viên', 'giang-vien', 71, '', '', '', '2019-08-02 13:52:59', NULL),
(73, 'Làm trước học sau', 'lam-truoc-hoc-sau', 71, '', '', '', '2019-08-02 13:52:59', NULL),
(74, 'Lịch đào tạo', 'lich-dao-tao', 71, '', '', '', '2019-08-02 13:52:59', NULL),
(75, 'Thông báo', 'thong-bao', 71, '', '', '', '2019-08-02 13:52:59', NULL),
(76, 'Tâm sự giảng viên', 'tam-su-giang-vien', 71, '', '', '', '2019-08-02 13:52:59', NULL),
(77, 'Biểu mẫu – Văn bản', 'bieu-mau-van-ban', 71, '', '', '', '2019-08-02 13:52:59', NULL),
(78, 'Thi đua – Khen thưởng', 'thi-dua-khen-thuong', 71, '', '', '', '2019-08-02 13:52:59', NULL),
(161, 'Sản phẩm học viên', 'san-pham-hoc-vien', 63, '', '', '', '2019-08-02 13:52:59', NULL),
(208, 'Hệ thống', 'he-thong', 0, '', '', '', '2019-08-02 13:52:59', NULL),
(342, '[THÔNG BÁO] “ ENGLISH SEMINAR 2017” - DÂN IT NGẠI GÌ TIẾNG ANH !!!', 'thong-bao-english-seminar-2017-dan-it-ngai-gi-tieng-anh', 62, '', '', '', '2019-08-02 13:52:59', NULL),
(384, 'LÀM TRƯỚC HỌC SAU - MÔ HÌNH ĐÀO TẠO CNTT NGƯỢC NĂM 2018', 'lam-truoc-hoc-sau-mo-hinh-dao-tao-cntt-nguoc-nam-2018', 0, '', '', '', '2019-08-02 13:52:59', NULL),
(544, 'Các Khóa Học Khác', 'cac-khoa-hoc-khac', 3, '', '', '', '2019-08-02 13:52:59', NULL);
