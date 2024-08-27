<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Buoi2</title>
</head>
<body>
<?php 

//1. Viết một chương trình PHP để đếm số ký tự trong một chuỗi sử dụng hàm strlen(). ;
echo strlen("Le Phuong Thanh");
echo '<br>';

// 2.Viết một chương trình PHP để đếm số từ trong một chuỗi sử dụng hàm str_word_count().;
echo str_word_count("Phuong Thanh");
echo '<br>';

//3. Viết một chương trình PHP để đảo ngược một chuỗi sử dụng hàm strrev().
echo strrev("Phuong Thanh") ; 
echo '<br>';

//4. Viết một chương trình PHP để tìm kiếm một chuỗi con trong một chuỗi sử dụng hàm strpos().
echo strpos ("Black Pink", "Pink");
echo '<br>';

//5. Viết một chương trình PHP để thay thế một chuỗi con trong một chuỗi bằng một chuỗi khác sử dụng hàm str_replace().
echo str_replace (" vui", " khong vui", "Hoc vui");
echo '<br>';

//6. Viết một chương trình PHP để kiểm tra xem một chuỗi có bắt đầu bằng một chuỗi con khác không sử dụng hàm strncmp().
$x = "black, pink";
$y = "black";
$result = strncmp($x, $y, strlen($y));
if ($result === 0) {
    echo "Chuỗi bắt đầu bằng chuỗi con.";
} else {
    echo "Chuỗi không bắt đầu bằng chuỗi con.";
}
echo '<br>';

//7. Viết một chương trình PHP để chuyển đổi một chuỗi thành chữ hoa sử dụng hàm strtoupper().
echo strtoupper( "conan detective");
echo '<br>';

//8. Viết một chương trình PHP để chuyển đổi một chuỗi thành chữ thường sử dụng hàm strtolower().
echo strtolower("BEAUTY QUEEN");
echo '<br>';

//9. Viết một chương trình PHP để chuyển đổi một chuỗi thành chuỗi in hoa chữ cái đầu tiên của mỗi từ sử dụng hàm ucwords().
echo ucwords("le thi phuong thanh");
echo '<br>';

//10. Viết một chương trình PHP để loại bỏ khoảng trắng ở đầu và cuối chuỗi sử dụng hàm trim().

$str = "   CONAN   ";
$trimmed_str = trim($str);

echo "Chuỗi gốc: '$str'<br>";
echo "Chuỗi đã loại bỏ khoảng trắng ở đầu và cuối: '$trimmed_str' <br>";

//11. Viết một chương trình PHP để loại bỏ ký tự đầu tiên của một chuỗi sử dụng hàm ltrim().
$a= 'Black Pink';
$b = ltrim($a, $a[0]);
echo "Chuỗi gốc: '$a' <br>";
echo " Chuỗi đã loại bỏ ký tự đầu tiên: '$b'<br>";

//12. Viết một chương trình PHP để loại bỏ ký tự cuối cùng của một chuỗi sử dụng hàm rtrim().
$a = "Thanh1505";
echo rtrim($a, "5");
echo'<br>';

//13. Viết một chương trình PHP để tách một chuỗi thành một mảng các phần tử sử dụng hàm explode().

$chuoi = "an,ngu,dienthoai";
$mang = explode(",", $chuoi);
print_r($mang);
echo'<br>';


//14. Viết một chương trình PHP để nối các phần tử của một mảng thành một chuỗi sử dụng hàm implode().

$mang = array( "an" ,"ngu","dienthoai");
$chuoi = implode( " " , $mang);
echo $chuoi;
echo'<br>';

//15. Viết một chương trình PHP để thêm một chuỗi vào đầu hoặc cuối của một chuỗi sử dụng hàm str_pad().
$chuoi_goc=" TMU";
$chuoi_them=" University";
$ket_qua1= str_pad ($chuoi_goc, strlen($chuoi_goc)+  strlen($chuoi_them),$chuoi_them, STR_PAD_RIGHT);
echo "them chuoi vào cuoi: '$ket_qua1'"; echo'<br>';
$ket_qua2= str_pad ($chuoi_goc, strlen($chuoi_goc)+  strlen($chuoi_them),$chuoi_them, STR_PAD_LEFT);
echo "them chuoi vào đầu: '$ket_qua2'"; echo'<br>';


//16. Viết một chương trình PHP để kiểm tra xem một chuỗi có kết thúc bằng một chuỗi con khác không sử dụng hàm strrchr().
$chuoi_goc="Phương Thanh";
$chuoi_con="Thao";
$x= strrchr( $chuoi_goc, $chuoi_con );
if ($x=== $chuoi_con){
echo "chuoi '$chuoi_goc' thuc bang '$chuoi_con'";
}else {echo "chuoi '$chuoi_goc' k ket thuc bang '$chuoi_con'";
}
echo '<br>';

//17. Viết một chương trình PHP để kiểm tra xem một chuỗi có chứa một chuỗi con khác không sử dụng hàm strstr().
$chuoi_goc="Phương Thanh";
$chuoi_con="Tin tin";
$x= strstr( $chuoi_goc, $chuoi_con );
if ($x){
echo "chuoi '$chuoi_goc' chua '$chuoi_con'";
}else {echo "chuoi '$chuoi_goc' k chua '$chuoi_con'";
}
echo '<br>';


//18. Viết một chương trình PHP để thay thế tất cả các ký tự trong một chuỗi không phải là chữ cái hoặc số bằng một ký tự khác sử dụng hàm preg_replace().

$str1 = "Thanh,1505@gmail+_...";
$str2 = preg_replace('/[^a-zA-Z0-9]/', '*', $str1);
echo "Chuỗi gốc: $str1<br>";
echo "Chuỗi sau khi thay thế: $str2";
echo'<br>';

//19. Viết một chương trình PHP để kiểm tra xem một chuỗi có phải là một số nguyên hay không sử dụng hàm is_int().

$str = "12";
// Chuyển chuỗi thành số nguyên
$number = intval($str);
if ($str == strval($number)) {
    echo "Chuỗi '$str' là một số nguyên.";
} else {
    echo "Chuỗi '$str' không phải là một số nguyên.";
}
echo "<br>";

//20. Viết một chương trình PHP để kiểm tra xem một chuỗi có phải là một email hợp lệ hay không sử dụng hàm filter_var().

$email = "thanh@gmail.com";
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Đây là một địa chỉ email hợp lệ.";
} else {
    echo "Đây không phải là một địa chỉ email hợp lệ.";
}

?>
</body>
</html>
