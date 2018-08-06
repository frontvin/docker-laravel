@include('head')
@include('header')

<!--START OUR GELATO SECTION-->
<section class="gelato">
        <div class="row__cont">

            <div class="row__item__1">
                <div class="gelato__cont">
                    <h1>Our gelato</h1>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate</p>
                    <a class="typical__btn">Taste it</a>
                </div>
            </div>

            <div class="row__item__2">
                <img src="img/our_gelato.png" alt="">
            </div>

        </div>
    </section>
    <!--END OUR GELATO SECTION-->

<!--START ABOUT US SECTION-->
    <section class="about">
        <div class="row__cont">

            <div class="row__item__2">
                <img src="img/about_us.png" alt="">
            </div>

            <div class="row__item__1">
                <div class="gelato__cont">
                    <h1>About us</h1>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate</p>
                    <a class="typical__btn">More about us</a>
                </div>
            </div>

        </div>
    </section>
    <!--END ABOUT US SECTION-->

    <!--START DAY IN STORE SECTION-->
    <section class="day__sec">
        <div class="day__cont">

            <div class="day__part__1">
                <h1>A day in our store</h1>
            </div>

            <div class="day__part__2">

                <div class="day__item">
                    <h4 class="h4__day__item">Breakfast</h4>
                    <img src="img/item1.jpeg" alt="" class="img__day__item">
                </div>

                <div class="day__item">
                    <h4 class="h4__day__item">Lunch</h4>
                    <img src="img/item2.jpeg" alt="" class="img__day__item">
                </div>

                <div class="day__item">
                    <h4 class="h4__day__item">Snack</h4>
                    <img src="img/item3.jpeg" alt="" class="img__day__item">
                </div>

                <div class="day__item">
                    <h4 class="h4__day__item">Take away</h4>
                    <img src="img/item4.jpeg" alt="" class="img__day__item">
                </div>
            </div>

            <div class="day__part__3">
                <a href="#" class="typical__btn">Discover more</a>
            </div>

        </div>
    </section>
    <!--END DAY IN OUR STORE SECTION-->

    <!--START NEWS SECTION-->
    <section class="news">
        <div class="news__cont">

            <div class="news__item__1 bg__item">
                <div class="desc__wrapper">
                    <div class="news_btn_cont">
                        <a class="typical__btn">View all news</a>
                    </div>
                    <div class="news__desc">
                        <p class="em__p">Editorial</p>
                        <h1 class="uper__h">Chocolate at <br>Milano design <br>film festival</h1>
                        <p class="btm__p"><cite>"Design in a marvelous mission. Go out and spread the world"</cite></p>
                    </div>
            
                    <div class="news__date">
                        <p><span>20</span> Apr. 2015</p>
                    </div>
                        
                    <div id="arrow__cont">
                        <img src="" alt="">
                    </div>
                </div>
                
            </div>

            <div class="news__item__2">
                <div class="subrow__cont">
                    <div class="sub__img__cont">
                        <img src="img/news__bg.jpg" alt="">
                    </div>
                    <div class="sub__desc_cont">
                        <h1>20</h1>
                        <p>Apr. 2015</p>
                    </div>
                </div>

                <div class="subrow__cont">
                    <div class="sub__desc_cont">
                        <h1>20</h1>
                        <p>Apr. 2015</p>
                    </div>
                    <div class="sub__img__cont">
                        <img src="img/chocolat_hand_low.jpg" alt="">
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!--END NEWS SECTION-->

    <!--START JOIN US SECTION-->
    <section class="join__us">
        <div class="join__us__cont">

            <div class="join__us__img">
                <img src="img/chocolat_joinus.png" alt="">
            </div>

            <div class="join__us__desc">
                <h1>Join us</h1>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate</p>
                <a class="typical__btn">Contacs us</a>
            </div>

        </div>
    </section>
    <!--END JOIN US SECTION-->

    <!-- START FORM SECTION -->
    <section class="form__sec">
        <div class="form__container">
            
            <div class="name__cont">
                <label for="name" class="form__text">Name:</label>
                <input type="text" name="name" id="user_name" value="">
            </div>

            <div class="email__cont">
                <label for="email" class="form__text">Email:</label>
                <input type="email" name="email" id="user_email" value="">
            </div>    
            
            <div class="btn__cont">
                <button onclick="sendForm();" id="send_bnt">Send</button>
            </div>

        </div>
    </section>
    <!-- END FORM SECTION-->

@include('footer')
<?php phpinfo();?>
