# PHP-Interface-Comparator

## [Thực hành] Triển khai interface 'Comparator' để so sánh các lớp hình học

#### Mục tiêu
Luyện tập thiết kế và triển khai interface.

#### Điều kiện
Biết cách thiết kế và triển khai interface.

#### Mô tả
Ở bài thực hành trước đã tiến hành cho các lớp hình học triển khai interface Comparable để hỗ trợ so sánh “hơn, kém, bằng”.

Phương án này không phù hợp khi mà vì lý do gì đó, không thể thay đổi các lớp đã có sẵn, cũng như không thể tùy ý tạo ra và sử dụng các lớp kế thừa mới.

Trong trường hợp đó, ta có thể sử dụng những đối tượng thuộc những lớp mà có triển khai interface Comparator và phương thức compare() của nó, để phục phụ việc so sánh, như hướng dẫn dưới đây.

