<footer class="footer-two">
    <!-- footer-top area start -->
    <div class="footer-top section-padding">
        <div class="footer-dsc">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="single-text">
                            <div class="footer-title">
                                <h4>Liên hệ</h4>
                            </div>
                            <div class="footer-text">
                                <ul>
                                    <li>
                                        <i class="mdi mdi-map-marker"></i>
                                        <p>470 Trần Đại Nghĩa,</p>
                                        <p>Trường Đại học Công Nghệ Thông tin và Truyền Thông Việt Hàn</p>
                                    </li>
                                    <li>
                                        <i class="mdi mdi-phone"></i>
                                        <p>(+84) 785648067</p>
                                    </li>
                                    <li>
                                        <i class="mdi mdi-email"></i>
                                        <p>tdxuan.20it10@vku.udn.vn</p>
                                        <p>vku.udn.vn</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-3 col-md-3 wide-mobile">
                        <div class="single-text">
                            <div class="footer-title">
                                <h4>Tài khoản</h4>
                            </div>
                            <div class="footer-menu">
                                <ul>
                                    <?php  if ((isset($_SESSION['isLogin']) && $_SESSION['isLogin'] == true) ||
                                        (isset($_SESSION['isLogin_Admin']) && $_SESSION['isLogin_Admin'] == true) || (isset($_SESSION['isLogin_Nhanvien']) && $_SESSION['isLogin_Nhanvien'] == true)) { ?>
                                        <li><a href="?act=taikhoan&xuli=account"><i class="mdi mdi-menu-right"></i>Tài Khoản</a></li>
                                    <?php }else { ?>
                                        <li><a href="?act=taikhoan&xuli=login"><i class="mdi mdi-menu-right"></i>Đăng Nhập</a></li>
                                    <?php } ?>
                                    <li><a href="?act=cart"><i class="mdi mdi-menu-right"></i>Giỏ Hàng</a></li>
                                    <li><a href="?act=checkout"><i class="mdi mdi-menu-right"></i>Thanh Toán</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-3 col-md-3 wide-mobile">
                        <div class="single-text">
                            <div class="footer-title">
                                <h4>Danh mục</h4>
                            </div>
                            <div class="footer-menu">
                                <ul>
                                    <?php foreach ($data_danhmuc as $row) { ?>
                                    <li><a href="?act=shop&sp=<?=$row['MaDM']?>"><i class="mdi mdi-menu-right"></i><?=$row['TenDM']?></a></li>
                                    <?php  } ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-3 r-margin-top wide-mobile">
                        <div class="single-text">
                            <div class="footer-title">
                                <h4>Mạng xã hội</h4>
                            </div>
                            <div class="clearfix instagram">
                                <ul>
                                    <li><a href="#"><img src="public/img/footer/in1.png" alt="Instagram" /></a></li>
                                    <li><a href="#"><img src="public/img/footer/in2.png" alt="Instagram" /></a></li>
                                    <li><a href="#"><img src="public/img/footer/in3.png" alt="Instagram" /></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer-top area end -->
    <!-- footer-bottom area start -->
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6">
                    <p>&copy; DXTPhone 2024. All Rights Reserved.</p>
                </div>
                <div class="col-xs-12 col-sm-6 text-right">
                    <a href="https://www.nganluong.vn/vn/home.html" target="_blank"><img src="public/img/footer/payment.png" alt="" /></a>
                </div>
            </div>
        </div>
    </div>
    <!-- footer-bottom area end -->
</footer>