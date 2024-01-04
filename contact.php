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
$comment = "";

//Lấy giá trị POST từ form vừa submit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST["name"])) { $name = $_POST['name']; }
    if(isset($_POST["email"])) { $email = $_POST['email']; }
    if(isset($_POST["comment"])) { $comment = $_POST['comment']; }

    //Code xử lý, insert dữ liệu vào table
    
    $sql = "INSERT INTO users ( name, email, comment)
    VALUES ('$name', '$email', '$comment')";

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

    <div>
        <section class="pager-section">
            <div class="container">
                <div class="pager-content text-center  ">
                    <h2>
                        Liên hệ
                    </h2>
                    <ul>   
                            <a class="me-5 " href="/index.php">
                                Trang chủ
                            </a>

                            <a href="/introduces.php">
                                giới thiệu
                            </a>    
                    </ul>
                </div>
                <h2 class="page-titlee">
                    IT- CLUB
                </h2>
            </div>
        </section>
        <section class="page-content">
            <div class="container">
                <div class="mdp-contact">
                    <div class="row">
                        <div class="col-lg-8 col-md-7">
                            <div class="comment-area">
                                <h3>
                                    Đóng góp ý kiến
                                </h3>
                                <form id="contact-form" method="post" action="">
                                    <div class="response">

                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <input type="" name=" name" class="form-control rounded-pill " id="exampleFormControlInput1" placeholder="tên">
                                              </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <input type="email" name="email" class="form-control rounded-pill " id="exampleFormControlInput1" placeholder="email">
                                              </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="">
                                                <textarea class="form-control" name="comment"  id="validationTextarea" placeholder="lời nhắn" required></textarea>
                                          
                                              </div>
                                        </div>
                                        <div class="col-lg-12 my-5 col ">
                                            <div class=" text-center ">
                                                <button type="submit" class="btn btn-primary my-2  ">Gửi</button>
                                                    
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-5">
                            <div class="mdp-our-contacts">
                                <h3>
                                    Thông tin
                                </h3>
                                <ul>
                                    <li>
                                        <div class="d-flex flex-wrap">
                                            <div class="icon-v">
                                                <div style="display: inline-block; max-width: 100%; overflow: hidden; position: relative; box-sizing: border-box; margin: 0px;">
                                                    <div style="box-sizing: border-box; display: block; max-width: 100%;">
                                                        <img alt="" aria-hidden="true" src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDkiIGhlaWdodD0iNDkiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgdmVyc2lvbj0iMS4xIi8+" style="max-width: 100%; display: block; margin: 0px; border: none; padding: 0px;">
                                                    </div>
                                                    <img alt="" src="https://gdsc.vn/_next/image?url=%2Fassets%2Fimg%2Ficon15.png&w=64&q=75" decoding="async" data-nimg="intrinsic" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;" srcset="/_next/image?url=%2Fassets%2Fimg%2Ficon15.png&amp;w=64&amp;q=75 1x, /_next/image?url=%2Fassets%2Fimg%2Ficon15.png&amp;w=128&amp;q=75 2x">
                                                    <noscript>

                                                    </noscript>
                                                </div>
                                            </div>
                                            <address class="dd-cont">
                                                <h4>
                                                    Điện thoại
                                                </h4>
                                                <span>
                                                    +84 378 283 131
                                                </span>
                                            </address>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex flex-wrap">
                                            <div class="icon-v">
                                                <div style="display: inline-block; max-width: 100%; overflow: hidden; position: relative; box-sizing: border-box; margin: 0px;"><div style="box-sizing: border-box; display: block; max-width: 100%;"><img alt="" aria-hidden="true" src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDkiIGhlaWdodD0iNTAiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgdmVyc2lvbj0iMS4xIi8+" style="max-width: 100%; display: block; margin: 0px; border: none; padding: 0px;">
                                                </div>
                                                <img alt="" src="/_next/image?url=%2Fassets%2Fimg%2Ficon16.png&amp;w=128&amp;q=75" decoding="async" data-nimg="intrinsic" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;" srcset="/_next/image?url=%2Fassets%2Fimg%2Ficon16.png&amp;w=64&amp;q=75 1x, /_next/image?url=%2Fassets%2Fimg%2Ficon16.png&amp;w=128&amp;q=75 2x">
                                                <noscript>

                                                </noscript>
                                            </div>
                                        </div>
                                        <address class="dd-cont">
                                            <h4>
                                                Email
                                            </h4>
                                            <a href="mailto:dsc.hust.2020@gmail.com">
                                                  humgitclub@outlook.com
                                            </a>
                                        </address>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex flex-wrap">
                                        <div class="icon-v">
                                            <div style="display: inline-block; max-width: 100%; overflow: hidden; position: relative; box-sizing: border-box; margin: 0px;">
                                                <div style="box-sizing: border-box; display: block; max-width: 100%;">
                                                    <img alt="" aria-hidden="true" src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDkiIGhlaWdodD0iNTAiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgdmVyc2lvbj0iMS4xIi8+" style="max-width: 100%; display: block; margin: 0px; border: none; padding: 0px;">
                                                </div>
                                                <img alt="" src="/_next/image?url=%2Fassets%2Fimg%2Ficon17.png&amp;w=128&amp;q=75" decoding="async" data-nimg="intrinsic" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;" srcset="/_next/image?url=%2Fassets%2Fimg%2Ficon17.png&amp;w=64&amp;q=75 1x, /_next/image?url=%2Fassets%2Fimg%2Ficon17.png&amp;w=128&amp;q=75 2x">
                                                <noscript>

                                                </noscript>
                                            </div>
                                        </div>
                                        <div class="dd-cont">
                                            <h4>
                                                Địa chỉ
                                            </h4>
                                            <a href="https://maps.app.goo.gl/dHhN6TGyH86mQbNZ7" target="_blank" rel="noreferrer">
                                               Đại Học Mỏ Địa Chất Hà Nội
                                            </a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
                  liên hệ 
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