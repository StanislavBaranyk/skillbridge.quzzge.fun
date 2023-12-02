<section class="our-courses">
    <div class="container">
        <div class="section-items">
            <div class="section-header">
                <h3 class="h3 text-start fw-semibold">Our Courses</h3>
                <div class="section-btn">
                    <p class="small-size-p text-start color-grey-two">Lorem ipsum dolor sit amet consectetur. Tempus
                        tincidunt etiam eget
                        elit id
                        imperdiet et. Cras eu sit dignissim lorem nibh et. Ac cum eget habitasse in velit fringilla feugiat
                        senectus in.</p>
                    <button type="button" class="transparent-btn">View All</button>
                </div>
            </div>
            <div class="card-items">
                <?php


                $ourCoursesItems = [

                    [
                        'cardPicture' => 'Image.png',
                        'time' => '4 Weeks',
                        'experience' => 'Beginner',
                        'personName' => 'By John Smith',
                        'category' => 'Web Design Fundamentals',
                        'description' => 'Learn the fundamentals of web design, including HTML, CSS, and responsive design principles. Develop the skills to create visually appealing and user-friendly websites.',
                    ],
                    [
                        'cardPicture' => 'Image1.png',
                        'time' => '6 Weeks',
                        'experience' => 'Intermediate',
                        'personName' => 'By Emily Johnson',
                        'category' => 'UI/UX Design',
                        'description' => 'Master the art of creating intuitive user interfaces (UI) and enhancing user experiences (UX). Learn design principles, wireframing, prototyping, and usability testing techniques.',
                    ],
                    [
                        'cardPicture' => 'Image2.png',
                        'time' => '8 Weeks',
                        'experience' => 'Intermediate',
                        'personName' => 'By David Brown',
                        'category' => 'Mobile App Development',
                        'description' => 'Dive into the world of mobile app development. Learn to build native iOS and Android applications using industry-leading frameworks like Swift and Kotlin.',
                    ],
                    [
                        'cardPicture' => 'Image2.png',
                        'time' => '8 Weeks',
                        'experience' => 'Intermediate',
                        'personName' => 'By David Brown',
                        'category' => 'Mobile App Development',
                        'description' => 'Dive into the world of mobile app development. Learn to build native iOS and Android applications using industry-leading frameworks like Swift and Kotlin.',
                        'delete-class' => 'delete-mobile',
                    ],
                    [
                        'cardPicture' => 'Image3.png',
                        'time' => '10 Weeks',
                        'experience' => 'Beginner',
                        'personName' => 'By Sarah Thompson',
                        'category' => 'Graphic Design for Beginners',
                        'description' => 'Discover the fundamentals of graphic design, including typography, color theory, layout design, and image manipulation techniques. Create visually stunning designs for print and digital media.',
                    ],
                    [
                        'cardPicture' => 'Image4.png',
                        'time' => '10 Weeks',
                        'experience' => 'Intermediate',
                        'personName' => 'By Michael Adams',
                        'category' => 'Front-End Web Development',
                        'description' => 'Become proficient in front-end web development. Learn HTML, CSS, JavaScript, and popular frameworks like Bootstrap and React. Build interactive and responsive websites.',
                    ],
                    [
                        'cardPicture' => 'Image5.png',
                        'time' => '6 Weeks',
                        'experience' => 'Advance',
                        'personName' => 'By Jennifer Wilson',
                        'category' => 'Advanced JavaScript',
                        'description' => 'Take your JavaScript skills to the next level. Explore advanced concepts like closures, prototypes, asynchronous programming, and ES6 features. Build complex applications with confidence.',
                    ],
                ];

                foreach ($ourCoursesItems as $coursesItem) {

                    echo '                 <div class="card-item ' . $coursesItem['delete-class'] . '">
                                    <div class="card-picture">
                                        <img src="images/our-courses/' . $coursesItem['cardPicture'] . '">
                                    </div>
                                    <div class="card-person">
                                        <div class="person-experience">
                                            <span class="transparent-btn">' . $coursesItem['time'] . '</span>
                                            <span class="transparent-btn">' . $coursesItem['experience'] . '</span>
                                        </div>
                                        <h5 class="h5 fw-medium">' . $coursesItem['personName'] . '</h5>
                                    </div>
                                    <div class="person-description">
                                        <h5 class=" text-start fw-semibold">' . $coursesItem['category'] . '</h5>
                                        <p class="small-size-p color-grey-one">' . $coursesItem['description'] . '</p>
                                    </div>
                                    <div class="section-btn">
                                        <button class="transparent-btn" type="button">Get it Now</button>
                                    </div>
                                </div>';
                }

                ?>
            </div>
        </div>
    </div>
</section>
