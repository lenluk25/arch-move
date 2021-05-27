<?php get_header(); ?>

        <!--------- main -------->

        <section class="main">
            <div class="container">
                <h1 class="main__title"><?php the_field('main__title') ?><!--Build Your<br> Dream <mark class="title--accent">House</mark>--></h1>
                <div class="main__inner">
                    <div class="main__wrapper">
                        <p class="main__text text"><?php the_field('main__text') ?></p>
                        <button class="main__btn btn">Free Consultation</button>
                    </div> 
                    <img class="main__img" src="<?php the_field('main__img') ?>" alt="img-1">   
                </div>    
            </div>
        </section> 

        <!--------- gallery ----------->

        <section class="gallery">
            <div class="container">
                <h2 class="gallery__title title"><?php the_field('gallery__title') ?></h2>
                <div class="gallery__wrapper">
                    <a class="gallery__link" href="<?php echo IMG_DIR; ?>/img-01.png" title="kitchen-1">
                        <img class="gallery__img" src="<?php the_field('gallery__img-1') ?>" alt="kitchen-1"></a>
                    <a class="gallery__link" href="<?php echo IMG_DIR; ?>/img-02.png" title="bedroom">
                        <img class="gallery__img" src="<?php the_field('gallery__img-2') ?>"  alt="bedroom"></a>
                    <a class="gallery__link" href="<?php echo IMG_DIR; ?>/img-03.png"  title="hall">
                        <img class="gallery__img" src="<?php the_field('gallery__img-3') ?>" alt="hall"></a>
                    <a class="gallery__link" href="<?php echo IMG_DIR; ?>/img-04.png" title="kitchen-2">
                        <img class="gallery__img" src="<?php the_field('gallery__img-4') ?>"  alt="kitchen-2"></a>
                    <a class="gallery__link" href="<?php echo IMG_DIR; ?>/img-01.png" title="kitchen-1">
                        <img class="gallery__img" src="<?php the_field('gallery__img-5') ?>" alt="kitchen-1"></a>
                    <a class="gallery__link" href="<?php echo IMG_DIR; ?>/img-02.png" title="bedroom">
                        <img class="gallery__img" src="<?php the_field('gallery__img-6') ?>"  alt="bedroom"></a>
                </div>
            </div>    
        </section>

        <!--------- benefits ----------->

        <section class="benefits">
            <div class="container">
                <h2 class="benefits__title title"><?php the_field('benefits__title') ?></h2>
                <div class="benefits__wrapper">
                    <img class="benefits__img" src="<?php the_field('benefits__img') ?>" alt="img">
                    <div class="benefits__inner">
                        <div class="benefits__box">
                            <img class="benefits__box-icon" src="<?php echo IMG_DIR; ?>/icon-1.svg" alt="icon-1">
                            <div class="benefits__box-content">
                                <h6 class="benefits__box-title" >100% guaranteed project completion</h6>
                                <p class="benefits__text text" >Build safe, comfortable and transparent with a project management application with a joint account.</p>
                            </div>
                        </div>
                        <div class="benefits__box" >
                            <img class="benefits__box-icon" src="<?php echo IMG_DIR; ?>/icon-2.svg" alt="icon-2">
                            <div class="benefits__box-content">
                                <h6 class="benefits__box-title" >No additional fees</h6>
                                <p class="benefits__text text" >There are no hidden costs. The value of the offer you get is the value you paid.</p>
                            </div>
                        </div>
                        <div class="benefits__box" >
                            <img class="benefits__box-icon" src="<?php echo IMG_DIR; ?>/icon-3.svg" alt="icon-3">
                            <div class="benefits__box-content">
                                <h6 class="benefits__box-title" >Get escort from the Team</h6>
                                <p class="benefits__text text" >Monitor reports from the Arsitag team who check directly in the field.</p>
                            </div>
                        </div>
                        <button class="benefits__btn btn">CONSULTATION</button>
                    </div>
                </div>
            </div>
        </section>

        <!--------- testimonials ----------->

        <section class="testimonials" >
            <div class="container">
                <h2 class="testimonials__title title"><?php the_field('benefits__title') ?></h2>
                    <div class="testimonials__slider">
                        <div class="testimonials__slide" >
                            <q class="testimonials__quote">We just wanted to thank you for this fantastic website!
                                We are so grateful for being able to advertise our Petite cabin and receive feedback 
                                from people from all over the U.S. and even further.
                                <cite class="testimonials__cite"><span class="testimonials--bold">Adam Morph</span> — CEO A lfatech</cite>
                            </q>
                        </div>
                        <div class="testimonials__slide" >
                            <q class="testimonials__quote">We just wanted to thank you for this fantastic website!
                                We are so grateful for being able to advertise our Petite cabin and receive feedback 
                                from people from all over the U.S. and even further.
                                <cite class="testimonials__cite"><span class="testimonials--bold">Adam Morph</span> — CEO A lfatech</cite>
                            </q>
                        </div>
                        <div class="testimonials__slide" >
                            <q class="testimonials__quote">We just wanted to thank you for this fantastic website!
                                We are so grateful for being able to advertise our Petite cabin and receive feedback 
                                from people from all over the U.S. and even further.
                                <cite class="testimonials__cite">A<span class="testimonials--bold">Adam Morph</span> — CEO A lfatech</cite>
                            </q>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--------- realize ----------->

        <section class="realize" >
            <div class="container">
                <div class="realize__inner">
                    <img class="realize__img" src="<?php echo IMG_DIR; ?>/house-img.png" alt="">
                    <div class="realize__wrapper">
                        <h2 class="realize__title title">Realize your dream<br> project with<mark class="title--accent"> Archmove</mark></h2>
                        <button class="realize__btn btn">FREE CONSULTATION</button>
                    </div>
                </div>
            </div>
        </section>

        <!--------- pertners ----------->

        <section class="partners" >
            <div class="container">
                <h2 class="partners__title title">Our Partners</h2>
                <div class="partners__wrapper">
                    <img class="parners__img" src="<?php echo IMG_DIR; ?>/logo-1.png" alt="">
                    <img class="parners__img" src="<?php echo IMG_DIR; ?>/logo-2.png" alt="">
                    <img class="parners__img" src="<?php echo IMG_DIR; ?>/logo-3.png" alt="">
                    <img class="parners__img" src="<?php echo IMG_DIR; ?>/logo-4.png" alt="">
                    <img class="parners__img" src="<?php echo IMG_DIR; ?>/logo-5.png" alt="">
                </div>
            </div>
        </section>

        <!--------- footer ----------->

        <?php get_footer(); ?>

