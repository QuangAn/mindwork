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
define( 'DB_NAME', 'mindwork' );

/** Username của database */
define( 'DB_USER', 'root' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', '' );

/** Hostname của database */
define( 'DB_HOST', 'localhost' );

/** Database charset sử dụng để tạo bảng database. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'zLG_]|X0DBu|fKP=3F,%#ZW]zxoK::oZT,>V#x,LO2GMp@^_QuC%4vNG}Ry;k~g]' );
define( 'SECURE_AUTH_KEY',  '3^VNur!2#urK{Aaz4qu*(&@>RZho0JH0Ok:*veV#.p[E:(PinvyMQt:h@F~=J+#D' );
define( 'LOGGED_IN_KEY',    '&er,{_<!ViTGnJ?P._7!*g:0{^r9XJN1/tfz$c)HB7,4$sM2hwo1@hMeJ9Vp J]>' );
define( 'NONCE_KEY',        '_vLO|29w<buH]2HaQPTC{vH|T_HbIA<tPN;_O~1!@;w;`[IDOPaR<$Bru$%6L3Q@' );
define( 'AUTH_SALT',        '|Gk.mV-Yp1`Vd}A:|wpD/niu0:]-Zv5x(mylhI+gweX^NCkslZ !sS,c<i&Xx/;n' );
define( 'SECURE_AUTH_SALT', '0DX]DESDF6kQ0yfT(RM%/jIlX~Tt&Y8f$|>^Eb Wj Ltw1Qec.v/zT3m2 &qlgY8' );
define( 'LOGGED_IN_SALT',   'f,F m?Zw0jFq;&=1%=ByR,1AMI[e(jx.Fl**oB/?p!efLxkXQow^%%I?#!==z Am' );
define( 'NONCE_SALT',       ';AgdO fT+e.LL)-c7qXz5[td#A9G W=8rBgreRD4`s*Kw2l<YRRZko~|W*x;0o$V' );

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
