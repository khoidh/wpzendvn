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
define('AUTH_KEY',         'qX`5FEakBMON1mC)l+}NF$OF1WF;^%;d) .[tmbvcv?!HO =MYfXv*6RxV9C-zYY');
define('SECURE_AUTH_KEY',  '1!nyD9r}WeJ=v+2/yX#mEsy(U>>F>k8WF>EuqE#^xdz+R9G:ve+TC>xhV17[Z5r ');
define('LOGGED_IN_KEY',    'b0&)Fvd,yP!$W`p8^~ZIta6Q gL>-5{@PX<[$?r/TOHU1Pbk$<-O!`^#f78uizdA');
define('NONCE_KEY',        'DR:7eyxI}5OXZ4c)|J_LEbGxwj$gij}iW#78}V|q=*[h|t4W0SLx,,sBs<f11W8A');
define('AUTH_SALT',        'de%G79^NZK[Xw)5oA8hm^@>N>0$KA++KIDk<[&#@dVe*w1hl>i&FXJmm!EVN?@)j');
define('SECURE_AUTH_SALT', '|ng5fF.xrMa^*#,wED5PP~?K7IrHS;vv{U(x|Yt*C=$SE>xYE(of;T~:8X5R?<{1');
define('LOGGED_IN_SALT',   '$IpUf|PIm#e#3zZV@7hY1,lYAxKX19&8wqWMXWoGdg[Aa7bd)XtzCD*3#czv<ZrS');
define('NONCE_SALT',       'gz.(0c9eebbC[P:y8IT3ay3.BxoqynG<FtX.4<EVX!I>a&]5/hZ .FY)P%Oasgs:');

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
