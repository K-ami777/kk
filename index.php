<?php get_header(); ?>
    <div class="about" id="about" style="  background: url(<?= CFS()->get('backgraund_white'); ?>)center 100% repeat-x,
                url(<?= CFS()->get('backgraund_black'); ?>) center 100% repeat-x,
                #1d1d1d;">
        <div class="container">
            <div class="about__inner">
            <div class="container">
                    <?php 
                    $loop = CFS()->get('car');
                    foreach ($loop as $row) {
                        ?>
                        <div class="about__item">
                            <div class="about__year"><?= $row['car_year'] ?></div>
                            
                        </div>
                        <?php
                    }
                    ?>
                    <div class="container">
  <div class="progress">
    <div class="progress__label">
       HTML5/CSS3
      <span class="progress__label-progress">10%</span>
    </div>

    <div class="progress__bar">
      <div class="progress__bar-progress"></div>
    </div>
  </div>
</div>

<div class="progress1">
    <div class="progress__label1">
      React.js/JQuery
      <span class="progress__label-progress1">10%</span>
    </div>

    <div class="progress__bar1">
      <div class="progress__bar-progress1"></div>
    </div>
  </div>
</div>
JavaScript/TypeScript
<div class="progress2">
    <div class="progress__label2">
      
      <span class="progress__label-progress2">10%</span>
    </div>

    <div class="progress__bar">
      <div class="progress__bar-progress2"></div>
    </div>
  </div>
</div>

<div class="progress3">
    <div class="progress__label3">
      PHP/CMS Wordpress
      <span class="progress__label-progress3">10%</span>
    </div>

    <div class="progress__bar3">
      <div class="progress__bar-progress3"></div>
    </div>
  </div>
</div>
            </div> 
        </div>
    </div>
    <div class="team" id="team">
        <div class="container">
            <div class="block__head">
                <h2 class="block__title">This is our team</h2>
                <p class="block__text">We are small but effective and ...</p>
            </div>
            <div class="team__inner">
                <div class="team__item">
                    <img class="team__item-img" src="img/team1.png" alt="">
                    <h3 class="team__item-title">Mark Once</h3>
                    <p class="team__item-text">Designer & Front-End Developer</p>
                    <div class="team__icon-box">
                        <a href="#"><i class="icon-twitter"></i></a>
                        <a href="#"><i class="icon-instagram"></i></a>
                    </div>
                </div>
                <div class="team__item">
                    <img class="team__item-img" src="img/team2.png" alt="">
                    <h3 class="team__item-title">Justin Twice</h3>
                    <p class="team__item-text">Founder & CEO</p>
                    <div class="team__icon-box">
                        <a href="#"><i class="icon-twitter"></i></a>
                        <a href="#"><i class="icon-instagram"></i></a>
                    </div>
                </div>
                <div class="team__item">
                    <img class="team__item-img" src="img/team3.png" alt="">
                    <h3 class="team__item-title">Antonio Never</h3>
                    <p class="team__item-text">Someone & Somewhere</p>
                    <div class="team__icon-box">
                        <a href="#"><i class="icon-twitter"></i></a>
                        <a href="#"><i class="icon-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="provide" id="provide">
        <div class="container">
            <div class="block__head inverse">
                <h2 class="block__title">We provide you everything</h2>
                <p class="block__text">Maybe not everything, but we provide you some stuff.</p>
            </div>
            <div class="provide__inner">
                <div class="provide__item">
                    <i class="icon-chart-line"></i>
                    <h3 class="provide__item-title">Some Analytics</h3>
                    <p class="provide__item-text">Aenean nisi lectus, convallis non lorem sit amet, rhoncus malesuada justo</p>
                </div>
                <div class="provide__item">
                    <i class="icon-heart"></i>
                    <h3 class="provide__item-title">We provide you love</h3>
                    <p class="provide__item-text">Aenean nisi lectus, convallis non lorem sit amet, rhoncus malesuada justo</p>
                </div>
                <div class="provide__item">
                    <i class="icon-upload-cloud-outline"></i>
                    <h3 class="provide__item-title">And Some Cloud</h3>
                    <p class="provide__item-text">Aenean nisi lectus, convallis non lorem sit amet, rhoncus malesuada justo</p>
                </div>
            </div>
        </div>
    </div> 
    <div class="contact" id="contact">
        <div class="container">
            <div class="block__head">
                <h2 class="block__title">Contac Us</h2>
                <p class="block__text">We know what we need to do</p>
            </div>
            <div class="contact__inner">
                <div class="contact__icon-box">
                    <div class="contact__item">
                        <i class="icon-phone"></i>
                        <div class="contact__text"><a href="tel:555222333">555-222-333</a></div>
                    </div>
                    <div class="contact__item">
                        <i class="icon-location"></i> 
                        <div class="contact__text"><a href="https://goo.gl/maps/ot9BCyYtQbSXoJYRA" target="_blank">Here is some address</a></div>
                    </div>
                    <div class="contact__item">
                        <i class="icon-mail-alt"></i>
                        <div class="contact__text"><a href="mailto:somemail@hotmail.com">somemail@hotmail.com</a></div>
                    </div>
                </div>
                <form action="" class="contact__form">
                    <input class="contact__name" type="text" placeholder="Full Name">
                    <input class="contact__email" type="email" placeholder="Email">
                    <input class="contact__number" type="number" placeholder="Number">
                    <textarea class="contact__textarea" placeholder="Write your Message here..."></textarea>
                    <input type="submit" class="contact__button" value="Submit">
                </form>
            </div>
        </div>
    </div>
    <p>hello</p>
    <?php get_footer(); ?>