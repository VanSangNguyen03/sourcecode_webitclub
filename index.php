<?php			
        $dbhost = "localhost";
        $dbuser = "root";
        $dbpass = "";
        $dbname = "database-itclub";
        
        // Kết nối database 
        $connect = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
        
        //Nếu kết nối bị lỗi thì xuất báo lỗi và thoát.
        if ($connect->connect_error) {
            die("Không kết nối :" . $conn->connect_error);
            exit();
        }
        
        //Khai báo giá trị ban đầu, nếu không có thì khi chưa submit câu lệnh insert sẽ báo lỗi
        $name = "";
        $email = "";
        $facebook = "";
        $comment = "";
        
        //Lấy giá trị POST từ form vừa submit
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if(isset($_POST["name"])) { $name = $_POST['name']; }
            if(isset($_POST["email"])) { $email = $_POST['email']; }
            if(isset($_POST["facebook"])) { $facebook = $_POST['facebook']; }
            if(isset($_POST["comment"])) { $comment = $_POST['comment']; }
        
            //Code xử lý, insert dữ liệu vào table
            
            $sql = "INSERT INTO users ( name, email, facebook, comment)
            VALUES ('$name', '$email', '$facebook', '$comment')";
        
            if ($connect->query($sql) === TRUE) {
                echo "Thêm dữ liệu thành công";
            } else {
                echo "Error: " . $sql . "<br>" . $connect->error;
            }
        }
        //Đóng database
        $connect->close();


?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>web clb itclub</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
   <style>
    .border-danger{
      color: rgb(6, 6, 158);
    }
   </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary ">
      <div class="container-fluid">
        <a class="navbar-brand " href="#"> <img src="https://scontent.fhan2-4.fna.fbcdn.net/v/t1.6435-9/167733517_177179670915532_7803402482290258454_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=7a1959&_nc_ohc=aQ8bksIwcyQAX_z_8Lt&_nc_ht=scontent.fhan2-4.fna&cb_e2o_trans=t&oh=00_AfBcn6N0Dwhe1LNcV8Ec-baA-5Lo8ozYTy-qUU8APam7Qw&oe=6598B849" alt="Logo" width="30" height="30" class="d-inline-block align-text-top"> IT CLUB</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link btn btn-outline-secondary" aria-current="page" href="/index.php">trang chủ</a>
            <a class="nav-link btn btn-outline-secondary" href="/introduces.php">giới thiệu</a>
            <a class="nav-link btn btn-outline-secondary" href="/events.php">hoạt động</a>
            <a class="nav-link btn btn-outline-secondary" href="#">dự án</a>
            <a class="nav-link btn btn-outline-secondary" href="/contact.php">liên hệ</a>
            <a class="nav-link btn btn-outline-success" href="#">đăng nhập</a>
            <a class="nav-link btn btn-outline-success" href="#">đăng kí</a>
          </div>
        </div>
      </div>
    </nav>

  <div class="row justify-content-center align-items-center my-5">
   
    <div class="col-lg-6 col-md-7 col-4">
    <background src="https://scr.vn/wp-content/uploads/2020/07/%E1%BA%A3nh-n%E1%BB%81n-nh%E1%BB%AFng-%C4%91%C3%A1m-m%C3%A2y-cute.jpg" height="400px" width="max">
      <h2>
        <div>
          <ul class="list-unstyled">
             <li> We are in together</li>
             <li><u class="text-primary link-offset-2 link-underline"> IT-CLUB-HUMG</u></li>  
            
          </div>
      </h2>
      <div>
        <p> 
          Ha Noi University of Mining and Geology
        </p>
      </div>
    </div>
    <div class="text-center col-4">
      <img src="/core team.png" height="400px" width="300px" class="rounded" alt="...">
    </div>
  </div>

    <div class=" section-title text-center d-flex flex-column align-items-center">
      <h2>
        Welcome to 
        <span class="text-primary">
          IT-CLUB-HUMG
        </span>
      </h2>
      <div data-aos="fade-up" class="aos-init aos-animate">
        <p>
          infomation techlonogy Club
        </p>
      </div>
    </div>

    <div class="about-sec">
      <div class="container">
        <div class="row ">
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="abt-col shadow p-3 mb-5 bg-body-tertiary rounded">
              <div data-aos="fade-down-right" class="aos-init aos-animate">
                <img src="https://gdsc.vn/assets/img/icon5.png" width="56" height="39" alt="">
                <h3>
                  Community
                </h3>
                <p>
                  Chia sẻ công nghệ trong cộng đồng sinh viên HUMG
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="abt-col shadow p-3 mb-5 bg-body-tertiary rounded">
              <div data-aos="fade-down-right" class="aos-init aos-animate">
                <img src="https://gdsc.vn/assets/img/icon7.png" width="39" height="39" alt="">
                <h3>
                  Events
                </h3>
                <p>
                  Tổ chức các buổi workshop, hackathon cho sinh viên
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="abt-col shadow p-3 mb-5 bg-body-tertiary rounded">
              <div data-aos="fade-down-left" class="aos-init aos-animate">
                <img src="https://gdsc.vn/assets/img/icon8.png" width="35" height="39" alt="">
                <h3>
                  Technology
                </h3>
                <p>
                  Tiếp thu sự tiến bộ công nghệ
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="abt-col shadow p-3 mb-5 bg-body-tertiary rounded">
              <div data-aos="fade-down-left" class="aos-init aos-animate">
                <img src="https://gdsc.vn/assets/img/icon9.png" width="40" height="39" alt="">
                <h3>
                  Activities
                </h3>
                <p>
                  Tổ chức các hoạt động vui chơi, gắn bó trong câu lạc bộ
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="container overflow-hidden form-control m-black-3 text-info bg-dark my-5">
      <div class="row align-items-center ">
        <div class="col-lg-4">
          <div class="text-center fs-1">
            <h2>
              Tham gia 
              <br>
              Cùng chúng mình
            </h2>
          </div>
        </div>
        <div class="col-lg-8">
          <form class=" "  method="post">
            <div class="row my-5">
              <div class="col-md-4">
                <div class="mb-3">
                  <input  name="name" class="form-control rounded-pill border-info bg-info" id="exampleFormControlInput1" placeholder="tên">
                </div>
              </div>
              <div class="col-md-4">
                <div class="mb-3">
                  <input name="email" class="form-control rounded-pill border-info bg-info" id="exampleFormControlInput1" placeholder="email">
                </div>
              </div>
              <div class="col-md-4">
                <div class="mb-5">
                  <input type="" name="facebook" class="form-control rounded-pill border-info bg-info " id="exampleFormControlInput1" placeholder="facebook">
                </div>
              </div>
              <div class="col-md-12 ">
                <div class="">
                  <textarea class="form-control border-info bg-info " name="comment" id="validationTextarea" placeholder="lời nhắn" required></textarea>
            
                </div>
              </div>
            </div>
            <div class="text-center">
              <button type="submit" name="submit" class="btn btn-primary my-2 text-dark bg-info ">Submit</button>
            </div>
              
          </form>
        </div>
      </div>
    </div>

    <div class="row justify-content-center mx-5 border-bottom border-dark ">
      <div class="row">
        <div class="col-lg-3 col-md-5 col-sm-6">
          <div class="widget widget-about">
            <p style="text-align:justify">
               It Club HUMG là một câu lạc bộ trực thuộc trường đại học Mỏ Địa Chất với sự ra đời từ khá sớm và được biết đến là một trong  những câu lạc bộ có truyền thống lâu đời. CÙng với sự phát triển của công nghệ ngày càng nhanh chúng tôi cũng đang ngày càng phát triển học tập và tìm hiểu công nghệ mới.
            </p>
          </div>
        </div>
        <div class="col-lg-3 col-md-5 col-sm-6">
          <div class="widget widget-contact">
            <ul class="contact-add">
              <li>
                <div class="contact-info">
                  <div class="contact-tt">
                    <h4>Liên hệ</h4>
                    <span>
                      037 828 3131
                    </span>
                  </div>
                </div>
              </li>
              <li>
                <div class="contact-info">
                  <div class="contact-tt">
                    <h4>
                      hời gian hoạt động
                    </h4>
                    <span>
                      Thứ Hai - Thứ Sáu 8 AM - 11 PM
                    </span>
                  </div>
                </div>
              </li>
              <li>
                <div class="contact-info">
                  <div class="contact-tt">
                    <h4>
                      Địa chỉ
                    </h4>
                    <span>
                      Số 18 Phố Viên, Phường Đức Thắng, Q. Bắc Từ Liêm, Hà Nội
                   </span>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="widget widget-links">
          <h3 class="widget-title">
            Truy cập nhanh
          </h3>
          <ul>
            <li>
              <a href="/index.php">
                trang chủ
              </a>
            </li>
            <li>
              <a href="/introduces.php">
                giới thiệu
              </a>
            </li>
            <li>
              <a href="/events.php">
                hoạt động</a>
              </li>
              <li>
                <a href="/blogs">
                  dự án 
                </a>
              </li>
              <li>
                <a href="/contact.php">
                  Liên hệ 
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-2 col-md-6 col-sm-6 ">
          <div class="widget widget-iframe">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.0148204388106!2d105.77135407503265!3d21.072070280588136!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3134552defbed8e9%3A0x1584f79c805eb017!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBN4buPIC0gxJDhu4thIGNo4bqldA!5e0!3m2!1svi!2s!4v1702651356626!5m2!1svi!2s" title="Address map" width="200" height="180" style="border:0" allowfullscreen="" loading="lazy">
            </iframe>
            
          </div>
        </div>
      </div>
    </div>

    <div class="bottom-footer mx-4">
      <div class="row align-items-center">
        <div class="col-lg-4 col-md-6 col-sm-6 mx-5">
          <p>
            © Copyrights 2023 IT CLUB HUMG All rights reserved
          </p>
        </div>
      </div>
    </div>

    

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
  </body>
</html>