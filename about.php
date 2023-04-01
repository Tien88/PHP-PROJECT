<?php  

include 'components/connect.php';

if(isset($_COOKIE['user_id'])){
   $user_id = $_COOKIE['user_id'];
}else{
   $user_id = '';
}
include 'components/save_send.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Về Chúng Tôi</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- header start -->
    <?php include 'components/user_header.php'; ?>
    <!-- header end -->


    <!-- about starts  -->

    <section class="about">

    <div class="row">
        <div class="image">
            <img src="images/about-img.svg" alt="">
        </div>
        <div class="content">
            <h3>Tại Sao Chọn Chúng Tôi ?</h3>
            <p> Trên thị trường bất động sản hiện nay có rất nhiều dự án đang triển khai xây dựng với nhiều phân khúc, thị phần khác nhau. Điều này giúp người mua nhà có nhiều sự lựa chọn, tuy nhiên lại khiến họ bối rối vì không phải dự án nào cũng “an toàn” về tính pháp lý, đảm bảo chất lượng, thẩm mỹ cũng như triển khai đúng tiến độ, đúng cam kết. Vì vậy, công việc thiết yếu đầu tiên đối với người mua nhà là phải tìm được chủ đầu tư uy tín. Với tiêu chí luôn cung cấp những sản phẩm chất lượng đối với khách hàng, KangLong luôn cố vươn lên những tầm cao mới, gắng nỗ lực hết mình để làm hài lòng khách hàng, đối tác. Với những thành công mà KangLong đã đạt được trong 10 năm qua, KangLong tự hào là một địa chỉ uy tín trên thị trường bất động sản. Sau đây là những lý do bạn nên chọn KangLong:

    - KangLong là công ty uy tín, là thương hiệu tin cậy.

    - KangLong là chủ đầu tư và tham gia hàng loạt các dự án lớn như: Dự án Hongkong Tower, Quy hoạch xây dựng mới tái định cư khu tập thể Hào Nam, dự án A12, Khách sạn Khang Long...

    - KangLong hợp tác với nhiều đơn vị phân phối bất động sản uy tín, phong cách làm việc chuyên nghiệp.

    - KangLong luôn hoàn thành tốt các thủ tục pháp lý liên quan đến các dự án.

    - KangLong luôn hoàn thành đúng tiến độ dự án, tạo sự tin tưởng cho khách hàng...

    Với trình độ và kinh nghiệm đầu tư, khai thác và quản lý dự án và khả năng huy động nguồn lực tài chính chúng tôi tin tưởng rằng luôn đem lại sự hài lòng cho Đối tác và Quý khách hàng.</p>
            <a href="contact.html" class="inline-btn">Liên Hệ Với Chúng Tôi</a>
        </div>
    </div>

    </section>

    <!-- about ends -->


    <!-- steps section starts  -->

    <section class="steps">

    <h1 class="heading">3 Bước Đơn Giản</h1>

    <div class="box-container">

    <div class="box">
        <img src="images/step-1.png" alt="">
        <h3>Tìm Kiếm Bất Động Sản</h3>
        <p>Đăng tin bất động sản miễn phí tại BatDongSan.com</p>
    </div>

    <div class="box">
        <img src="images/step-2.png" alt="">
        <h3>Liên Hệ Đại Lý</h3>
        <p>Liên Hệ Với Chúng Tôi để được hỗ trợ tốt nhất.</p>
    </div>

    <div class="box">
        <img src="images/step-3.png" alt="">
        <h3>Tìm Kiếm BĐS yêu thích</h3>
        <p>Hãy Tìm Kiếm Bất Động Sản mà bạn yêu thích</p>
    </div>

    </div>

    </section>

    <!-- steps section ends -->


    <!-- review section starts  -->

    <section class="reviews">

    <h1 class="heading">Nhận Xét Khách Hàng</h1>

    <div class="box-container">

    <div class="box">
        <div class="user">
            <img src="images/pic-1.png" alt="">
            <div>
                <h3>Trần Minh Tiến</h3>
                <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
                </div>
            </div>
        </div>
        <p>Tìm Kiếm Nhanh Chóng</p>
    </div>

    <div class="box">
        <div class="user">
            <img src="images/pic-2.png" alt="">
            <div>
                <h3>Lê Mai Vũ Hoàng</h3>
                <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
                </div>
            </div>
        </div>
        <p>Công tác viên hỗ trợ nhiệt tình</p>
    </div>

    <div class="box">
        <div class="user">
            <img src="images/pic-3.png" alt="">
            <div>
                <h3>Nguyễn Phước Sang</h3>
                <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
                </div>
            </div>
        </div>
        <p>Đăng Tin nhanh chóng, hỗ trợ tốt</p>
    </div>

    <div class="box">
        <div class="user">
            <img src="images/pic-4.png" alt="">
            <div>
                <h3>Đinh Trọng Sự</h3>
                <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
                </div>
            </div>
        </div>
        <p>Hỗ Trợ tốt</p>
    </div>

    <div class="box">
        <div class="user">
            <img src="images/pic-5.png" alt="">
            <div>
                <h3>Nguyễn Lê Đăng Khoa</h3>
                <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
                </div>
            </div>
        </div>
        <p>Truy cập nhanh chóng, kết nối với người cần mua</p>
    </div>

    <div class="box">
        <div class="user">
            <img src="images/pic-6.png" alt="">
            <div>
                <h3>Nguyễn Đức Tư</h3>
                <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
                </div>
            </div>
        </div>
        <p>Hỗ trợ nhiệt tình, nhanh chóng</p>
    </div>

    </div>

    </section>

    <!-- review section ends -->


    <!-- footer starts -->

    <?php include 'components/footer.php'; ?>

    <!-- footer ends -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>


    <!-- custom js file link  -->
    <script src="js/script.js"></script>

    <?php include 'components/message.php'; ?>


</body>

</html>
