<?php  

include 'components/connect.php';

if(isset($_COOKIE['user_id'])){
   $user_id = $_COOKIE['user_id'];
}else{
   $user_id = '';
}

if(isset($_POST['send'])){

    $msg_id = create_unique_id();
    $name = $_POST['name'];
    $name = filter_var($name, FILTER_SANITIZE_STRING);
    $email = $_POST['email'];
    $email = filter_var($email, FILTER_SANITIZE_STRING);
    $number = $_POST['number'];
    $number = filter_var($number, FILTER_SANITIZE_STRING);
    $message = $_POST['message'];
    $message = filter_var($message, FILTER_SANITIZE_STRING);
 
    $verify_contact = $conn->prepare("SELECT * FROM `messages` WHERE name = ? AND email = ? AND number = ? AND message = ?");
    $verify_contact->execute([$name, $email, $number, $message]);
 
    if($verify_contact->rowCount() > 0){
       $warning_msg[] = 'message sent already!';
    }else{
       $send_message = $conn->prepare("INSERT INTO `messages`(id, name, email, number, message) VALUES(?,?,?,?,?)");
       $send_message->execute([$msg_id, $name, $email, $number, $message]);
       $success_msg[] = 'message send successfully!';
    }

}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liên Hệ Với Chúng Tôi</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- header start -->
    <?php include 'components/user_header.php'; ?>
    <!-- header end -->


<!-- contact starts  -->

<section class="contact">

    <div class="row">
        <div class="image">
            <img src="images/contact-img.svg" alt="">
        </div>
        <form action="" method="post">
            <h3>Để lại Thông Tin Liên Lạc</h3>
            <input type="text" name="name" required maxlength="50" placeholder="Nhập tên của bạn" class="box">
            <input type="email" name="email" required maxlength="50" placeholder="Nhập Email của bạn" class="box">
            <input type="number" name="number" required maxlength="10" max="9999999999" min="0" placeholder="Nhập Số Điện Thoại Của Bạn" class="box">
            <textarea name="message" placeholder="Nhập Thông Tin Cần Hỗ Trợ" required maxlength="1000" cols="30" rows="10" class="box"></textarea>
            <input type="submit" value="Gửi Tin" name="send" class="btn">
        </form>
    </div>

</section>

<!-- contact ends -->

<!-- faq starts  -->

<section class="faq" id="faq">

   <h1 class="heading">FAQ</h1>

   <div class="box-container">

        <div class="box active">
            <h3><span>Làm thế nào để hủy đặt cọc ?</span><i class="fas fa-angle-down"></i></h3>
            <p>hợp đồng đặt cọc không có hiệu lực, các bên không phải thực hiện nghĩa vụ đã thỏa thuận để giao kết hợp đồng chuyển nhượng.</p>
        </div>

        <div class="box active">
            <h3><span>Khi nào tôi nhận được tài sản ?</span><i class="fas fa-angle-down"></i></h3>
            <p>Hội đồng thanh lý tài sản có nhiệm vụ thống kê, phân loại, số lượng, thu nhập hồ sơ kỹ thuật, các giấy tờ liên quan đến tài sản. Hội đồng thanh lý tài sản cũng đồng thời kiểm tra, đánh giá chất lượng tài sản và xác định tài sản tương xứng là bao nhiêu.</p>
        </div>

        <div class="box">
            <h3><span>Tôi sẽ trả tiền thuê nhà ở đâu ?</span><i class="fas fa-angle-down"></i></h3>
            <p>Bạn có thể trực tiếp thanh toán tiền thuê nhà bằng cách sử dụng khe cắm trả tiền thuê nhà tại văn phòng người quản lý tài sản của bạn. </p>
        </div>

        <div class="box">
            <h3><span>Làm thế nào để liên hệ với người mua?</span><i class="fas fa-angle-down"></i></h3>
            <p>Vậy bạn đã biết cách để liên hệ với họ nhanh chóng và thuận tiện nhất chưa?</p>
        </div>

        <div class="box">
            <h3><span>Tại Sao Danh Sách Của tôi không hiển thị</span><i class="fas fa-angle-down"></i></h3>
            <p>Bạn Hãy làm theo hướng dẫn Sau đây.</p>
        </div>

        <div class="box">
            <h3><span>Làm Sao để điều khiển danh sách của tôi ?</span><i class="fas fa-angle-down"></i></h3>
            <p>Bạn Hãy nhấn vào mục danh mục của tôi để quản lí danh mục của mình</p>
        </div>

    </div>

</section>

<!-- faq ends -->









    <!-- footer starts -->

    <?php include 'components/footer.php'; ?>

    <!-- footer ends -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>


    <!-- custom js file link  -->
    <script src="js/script.js"></script>

    <?php include 'components/message.php'; ?>


</body>

</html>