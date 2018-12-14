<?php
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define('DB_NAME', 'wpzendvn');

/** Username của database */
define('DB_USER', 'khoidh');

/** Mật khẩu của database */
define('DB_PASSWORD', '123456');

/** Hostname của database */
define('DB_HOST', 'localhost');

/** Database charset sử dụng để tạo bảng database. */
define('DB_CHARSET', 'utf8mb4');

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'iA t9[y)Q$4eav67?x1+`a6hh3Tkx5:7cVy[[9(`N3:y&n^`x}h8BQh7ss-np4,h');
define('SECURE_AUTH_KEY',  'ttH?zoPHE8Fwh;<:Lz=|7,!@Fy+4ZI1A^X_({]uwj`j!f9{Bygc73epn-(jz8i_-');
define('LOGGED_IN_KEY',    '=b^2L!}5P/Hj;6j?vKf0=R6BR!)5va)m+&AD/}b/PVXsITEJ8oSks~:,DIR@ZVB]');
define('NONCE_KEY',        'jzZ6oH=(CN`BG8{hJNEq+S1abK7LR6r2`&#,zOwhQ`{~=d]$]d;fT<6ZA8,!Y2>V');
define('AUTH_SALT',        '(T%rpnT0-4XY@C9ye>Xto#`$5-}i3y3IXKW&vvam=eGK^nR*j0-uQYw|$&$)uW.c');
define('SECURE_AUTH_SALT', 'Wg+[+aR?ZyBMOQIebf1]sZeJc(awHeda_tmnU|gTjWY.S0Be,}f<JD>_/kN:#qqh');
define('LOGGED_IN_SALT',   'Nq.p>}Z)~_Al~H;2Zj#GuS5nwmh*/r@90ys;gtf0al%% 1{dF&c!mnSaU1MK_F.}');
define('NONCE_SALT',       '-S(r*x%GC4`UMK3r/MLGU@BY)x6IN![}FSQObl/Wc3id[=}s?yb-c@BM*0l}h+3q');

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix  = 'wp_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
