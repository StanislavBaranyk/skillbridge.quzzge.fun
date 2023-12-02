<section class="testimonials">
    <div class="container">
        <div class="section-items">
            <div class="section-header">
                <div class="header-description">
                    <h3 class="h3 fw-semibold">Our Testimonials</h3>
                    <p class="small-size-p color-grey-two">Lorem ipsum dolor sit amet consectetur. Tempus tincidunt
                        etiam eget elit id
                        imperdiet et. Cras eu sit dignissim lorem nibh et. Ac cum eget habitasse in velit fringilla
                        feugiat
                        senectus in.</p>
                </div>
                <div class="section-btn">
                    <button type="button" class="transparent-btn">View All</button>
                </div>
            </div>
            <div class="card-items">

                <?php

                $testimonialsCardItems = [

                    [
                        'personDescription' => 'The web design course provided a solid foundation for me. The instructors were knowledgeable and supportive, and the interactive learning environment was engaging. I highly recommend it!',
                        'personImage' => 'testimonials1.png',
                        'personName' => 'Sarah L',
                    ],
                    [
                        'personDescription' => "The UI/UX design course exceeded my expectations. The instructor's expertise and practical assignments helped me improve my design skills. I feel more confident in my career now. Thank you!',",
                        'personImage' => 'testimonials2.png',
                        'personName' => 'Jason M',
                    ],
                    [
                        'personDescription' => "The mobile app development course was fantastic! The step-by-step tutorials and hands-on projects helped me grasp the concepts easily. I'm now building my own app. Great course!",
                        'personImage' => 'testimonials3.png',
                        'personName' => 'Emily R',
                    ],
                    [
                        'personDescription' => "I enrolled in the graphic design course as a beginner, and it was the perfect starting point. The instructor's guidance and feedback improved my design abilities significantly. I'm grateful for this course!",
                        'personImage' => 'testimonials4.png',
                        'personName' => 'Michael K',
                    ],
                ];

                foreach ($testimonialsCardItems as $testimonialsCardItem) {

                    echo '     <div class="card-item">
                    <div class="person-description">
                        <p class="text-start small-size-p color-grey-one">' . $testimonialsCardItem['personDescription'] . '</p>
                    </div>
                    <div class="card-person">
                        <div class="person">
                            <img src="images/testimonials/' . $testimonialsCardItem['personImage'] . '">
                            <p class="h5 fw-semibold m-0">' . $testimonialsCardItem['personName'] . '</p>
                        </div>
                        <div class="section-btn">
                            <button class="transparent-btn" type="button">Read Full Story</button>
                        </div>
                    </div>
                </div>';
                }

                ?>
            </div>
        </div>
    </div>
</section>
<?php
