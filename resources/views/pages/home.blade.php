@extends('layout.index')

@section('title') {{$setting->title}} @endsection
@section('description') {{$setting->description}} @endsection
@section('robots') index, follow @endsection
@section('url'){{asset('')}}@endsection
@section('img'){{asset('')}}{{'frontend/imgs/duhocduc.png'}}@endsection

@section('css')
<link rel="stylesheet" href="{{asset('')}}frontend/files/plugins/home-custom.css">
@endsection

@section('content')

<div class="header_banner">

    <video class="video-bg fill visible" preload="" playsinline="" autoplay="" muted="" loop="">
        <source src="data/home/introgls.mp4" type="video/mp4">
    </video>
    
</div>


<section class="main">
    <div class="main_hotel ">
        <div class="container hotel_container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="title"><span>CÔNG TY CỔ PHẦN GLS EDUCATION</span></h1>
                    <div>
                        <p>Công ty cổ phần GLS Education được thành lập và phát triển bởi đội ngũ Co-Founder là những du học sinh học tập và sinh sống tại các nước Châu  u hơn 10 năm với mục tiêu chung tay xây dựng đất nước và góp phần nâng cao giá trị người Việt.</p>
                        <p>Bắt đầu từ năm 2018, trải qua 5 năm hình thành và phát triển, cho đến nay GLS Education tự hào là đơn vị uy tín trong lĩnh vực du học nghề tại các quốc gia hàng đầu trên thế giới.</p>
                        <p>Sở hữu mạng lưới đối tác chiến lược rộng khắp toàn cầu cùng đội ngũ cố vấn làm việc với tinh thần “ Nhiệt tình - Trách nhiệm- Tâm huyết”, chúng tôi tin rằng có thể mang đến những cơ hội tuyệt vời nhất cho học viên trong việc chọn lựa chương trình học phù hợp và đạt được mục tiêu của mình.</p>

                    </div>
                    <div class="logo-home">
                        <img src="data/home/logogls.png">
                    </div>
                    <div class="carousel_lod--list owl-carousel">
                        <div class="row_itemw">
                            <i class="fa fa-thumbs-up" aria-hidden="true"></i>
                            <h3>UY TÍN HÀNG ĐẦU</h3>
                            <p>Chúng tôi cam kết mang đến sự hài lòng cao nhất cho học viên thông qua việc cung cấp các chương trình du học nghề, thực tập sinh chất lượng cao.</p>
                        </div>
                        <div class="row_itemw">
                            <i class="fa fa-recycle" aria-hidden="true"></i>
                            <h3>TÂM HUYẾT VÀ CHUYÊN NGHIỆP</h3>
                            <p>Chúng tôi không chỉ làm việc với niềm đam mê mà còn chú trọng đến sự chuyên nghiệp từ việc tư vấn cho học viên đến cung cấp các dịch vụ hỗ trợ và giáo dục.</p>
                        </div>
                        <div class="row_itemw">
                            <i class="fa fa-user-secret" aria-hidden="true"></i>
                            <h3>NGƯỜI BẠN ĐỒNG HÀNH</h3>
                            <p>GLS tự hào là người bạn đồng hành với từng học viên trên con đường hướng tới tương lai và chinh phục ước mơ.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-184293026 f8f8f8">
        <div class="container">
            <h2 class="title"><span>LỊCH SỬ HÌNH THÀNH</span></h2>
            <div class="row">
                <div class="col large-6 col-1842930263">
                    <div class="top">
                        <i class="fa fa-line-chart" aria-hidden="true"></i>
                        <h3>Năm 2018</h3>
                        <p>Thành lập công ty cổ phần GLS Education</p>
                    </div>
                    <div class="timeline-box">
                        <div class="line-vertical"></div>
                        <div class="cricle-blue"></div>
                        <div class="timeline-arrows"></div>
                    </div>
                </div>
                <div class="col large-6 col-1842930263">
                    <div class="top"></div>
                    <div class="timeline-box">
                        <div class="line-vertical"></div>
                        <div class="cricle-blue"></div>
                        <div class="timeline-arrows timeline-arrows2"></div>
                    </div>
                    <div>
                        <i class="fa fa-line-chart" aria-hidden="true"></i>
                        <h3>Năm 2019</h3>
                        <p>Xây dựng và phát triển chương trình thực tập sinh hưởng lương tại Đức</p>
                    </div>
                </div>
                <div class="col-1842930263">
                    <div class="top">
                        <i class="fa fa-line-chart" aria-hidden="true"></i>
                        <h3>Năm 2023</h3>
                        <p>Xây dựng và phát triển chương trình thực tập sinh hưởng lương tại Mỹ</p>
                    </div>
                    <div class="timeline-box">
                        <div class="line-vertical"></div>
                        <div class="cricle-blue"></div>
                        <div class="timeline-arrows timeline-arrows3"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="tamnhin ">
        <div class="container ">
            <div class="row">
                <div class="col-lg-6">
                    <h4 class="title"><span>TẦM NHÌN</span></h4>
                    <div class="iteam_row">
                        <img src="data/home/Group-1000005846.svg">
                        <div>
                            Trở thành điểm đến hàng đầu cho những người muốn khám phá và phát triển sự nghiệp của mình thông qua du học nghề
                        </div>
                    </div>
                    <div class="iteam_row">
                        <img src="data/home/Group-1000005847.svg">
                        <div>
                            Xây dựng niềm tin và trở thành đối tác chiến lược của các doanh nghiệp lớn để mang lại cơ hội và trải nghiệm giáo dục tuyệt vời nhất cho học viên tại các nước trên toàn thế giới.
                        </div>
                    </div>
                    <div class="iteam_row">
                        <img src="data/home/Group-1000005848.svg">
                        <div>
                            Trở thành một công ty chuyên nghiệp, uy tín với chất lượng dịch vụ hàng đầu Việt Nam trong lĩnh vực du học và định cư tại các nước lớn trên thế giới như Đức, Mỹ.
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="img"><img src="data/home/global-1-2.png"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="giatricotloi">
        <div class="container ">
            <div class="row">
                <div class="col-lg-5 left">
                    <div class="img"><img src="data/home/giatri.png"></div>
                </div>
                <div class="col-lg-7">
                    <h4 class="title"><span>Giá trị cốt lõi</span></h4>
                    <div class="a1211">
                        <div class="iteam_row">
                            <img src="data/home/icon-park-outline_customer.svg">
                            <div class="title"><span>Đối với cộng đồng</span></div>
                            <ul>
                                <li>Mang đến cho cộng đồng cơ hội được học tập, sinh sống, làm việc và định cư tại các quốc gia hàng đầu trên thế giới</li>
                                <li>Nâng cao và khẳng định giá trị của người Việt trên thị trường quốc tế</li>
                                <li>Cung cấp các chương trình du học nghề, thực tập uy tín, chất lượng, luôn lắng nghe và giải quyết nhanh chóng những thắc mắc và nhu cầu của học viên</li>
                            </ul>
                        </div>
                        <div class="iteam_row">
                            <img src="data/home/icon-park-outline_customer-1.svg">
                            <div class="title"><span>Đối với quốc gia</span></div>
                            <ul>
                                <li>Tuân thủ mọi quy định pháp luật và đạo đức kinh doanh, đóng góp tích cực vào sự phát triển của quốc gia</li>
                                <li>Tham gia vào các hoạt động hỗ trợ xã hội nhằm cải thiện chất lượng cuộc sống.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="lanhdao">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h4 class="title"><span>Ban lãnh đạo</span></h4>
                    <div class="owl-carousel lanhdao-slider">
                        <!-- <div class="row iteam_row">
                            <div class="col-lg-8">
                                <div class="info">
                                    <h3>Mr. Nguyễn Xuân Minh</h3>
                                    <h4><i class="fa fa-exclamation-circle" aria-hidden="true"></i>  Chủ tịch hội đồng quản trị công ty cổ phần GLS Education</h4>
                                    <img src="data/home/icon-before-custom.png">
                                    <p> Với vai trò là người lãnh đạo cao nhất của Hội đồng quản trị, anh Minh có vai trò quyết định chiến lược và mục tiêu của công ty. Anh cũng là người đại diện cho GLS Education trong các cuộc đàm phán với các đối tác chiến lược và các bên liên quan khác, đảm bảo sự phát triển bền vững và thành công của công ty.</p>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="img"><img src="data/home/giamdoc.png"></div>
                            </div>
                        </div> -->
                        <div class="row iteam_row">
                            <div class="col-lg-8">
                                <div class="info">
                                    <h3>Mr. Bùi Quang Dự</h3>
                                    <h4><i class="fa fa-exclamation-circle" aria-hidden="true"></i> Tổng Giám đốc công ty cổ phần GLS Education</h4>
                                    <img src="data/home/icon-before-custom.png">
                                    <p>Là người đóng vai trò chủ chốt trong việc thực thi chiến lược do Hội đồng quản trị đề ra và đảm bảo rằng mọi hoạt động diễn ra suôn sẻ và hiệu quả. Anh cũng đại diện cho công ty trong các mối quan hệ với đối tác và khách hàng, xây dựng và duy trì mối quan hệ hợp tác lâu dài.</p>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="img"><img src="data/home/giamdoc.png"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="chuongtrinhhoc f8f8f8">
        <div class="container">
            <div class="owl-carousel lanhdao-slider">
                <div class="row">
                    <div class="col-lg-6 info">
                        <h4 class="title"><span>Chương trình thực tập sinh MỸ</span></h4>
                        <p>Chương trình thực tập sinh tại Mỹ là chương trình cho phép công dân nước ngoài có đủ tư cách cư trú ngắn hạn tại Mỹ (diện visa J1) để tham gia các chương trình thực tập và đào tạo tại Hoa Kì. Bạn sẽ được làm việc trong một công ty tại Mỹ, có cơ hội để tìm hiểu văn hóa và môi trường làm việc tại Mỹ</p>
                    </div>
                    <div class="col-lg-6">
                        <div class="img"><img src="data/home/thuctapmy.jpg"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 info">
                        <h4 class="title"><span>Chương trình thực tập sinh ĐỨC</span></h4>
                        <p>Thực tập hưởng lương tại Đức là chương trình được nhiều bạn trẻ yêu thích. Không chỉ trải nghiệm môi trường làm việc tại Đức, thực tập sinh còn được khám phá văn hóa bản địa</p>
                        <p>Đức từ lâu được biết đến là một trong những nước phát triển nhất thế giới. Quốc gia này giữ vai trò quan trọng trong việc định hình nền kinh tế của Liên minh châu  u. Cùng với nền kinh tế phát triển, nhu cầu về nguồn nhân lực tại Đức luôn ở mức cao, đặc biệt trong những ngành mũi nhọn, có tiềm năng lớn như khách sạn, du lịch và nông nghiệp</p>
                    </div>
                    <div class="col-lg-6">
                        <div class="img"><img src="data/home/thuctapduc.jpg"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="column_inner section23489234">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="iteam">
                        <img class="icon" src="frontend/imgs/icon-down.png">
                        <div class="item_img">
                            <img src="frontend/imgs/fb.png">
                        </div>
                        <div class="info">
                            <p>Facebook</p>
                            <h6><a href="https://www.facebook.com/duhocgls.edu.vn/">Du học GLS</a></h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="iteam">
                        <img class="icon" src="frontend/imgs/icon-down.png">
                        <div class="item_img">
                            <img src="frontend/imgs/zalo.png">
                        </div>
                        <div class="info">
                            <p>Zalo</p>
                            <h6><a href="https://zalo.me/0967943945">0967.943.945</a></h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="iteam">
                        <img class="icon" src="frontend/imgs/icon-down.png">
                        <div class="item_img">
                            <img src="frontend/imgs/hotline.png">
                        </div>
                        <div class="info">
                            <p>Hotline</p>
                            <h6><a href="tel:0967943945">0967.943.945</a></h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="iteam">
                        <img class="icon" src="frontend/imgs/icon-down.png">
                        <div class="item_img">
                            <img src="frontend/imgs/email.jpg">
                        </div>
                        <div class="info">
                            <p>Email</p>
                            <h6><a href="mail:duhocgls@gmail.com">duhocgls@gmail.com</a></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <div class="maps-home">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14901.943022387779!2d105.7878974!3d20.9731568!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ad24981b983b%3A0x15407a1996506fd3!2zVFJVTkcgVMOCTSBUxq8gVuG6pE4gRFUgSOG7jEMgR0xTIEVEVUNBVElPTg!5e0!3m2!1svi!2s!4v1686717847230!5m2!1svi!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    

</section>

@endsection


@section('js')


@endsection