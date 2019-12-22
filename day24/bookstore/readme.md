tóm tắt dự án
- tên project bookstore ( bán sách )
- tên cơ sở dữ liệu : bookstore
các bảng trong cơ sở dữ liệu
bảng users ( để quản lý admins )
gồm các trường dữ liệu sau :
id ( khóa chính ) auto_increment
username ( tên đăng nhập )
avatar ( ảnh đại diện )
useremail ( email )
password ( mật khẩu )
created ( thời gian tạo ) TIMESTAMP
updated ( thời gian sửa lần gần nhất ) TIMESTAMP

bảng books ( bảng chứa sách )
id ( khóa chính )
book_name ( tên sách )
book_intro ( giới thiệu ngắn )
book_thumbnail ( ảnh đại diện )
book_images ( các ảnh của sách )
book_price ( giá niêm yết )
book_sell ( giá bán )
book_author ( tên tác giả )
book_publisher ( nhà xuất bản )
created ( thời gian tạo )
updated ( thời gian sửa )
book_hit ( số lần đọc )
book_buy ( số lượt bán thành công )

bảng buyer ( đơn hàng mua sách )
id ( khóa chính )

