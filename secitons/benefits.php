<section class="benefits">
    <div class="container">
        <div class="section-items">
            <div class="section-header">
                <h3 class=" h1 fw-semibold">Benefits</h3>
                <div class="section-btn">
                    <p class="small-size-p text-start">Lorem ipsum dolor sit amet consectetur. Tempus tincidunt etiam
                        eget
                        elit id
                        imperdiet et. Cras eu sit dignissim lorem nibh et. Ac cum eget habitasse in velit fringilla
                        feugiat
                        senectus in.</p>

                    <button type="button" class="transparent-btn">View All</button>
                </div>
            </div>
            <div class="card-items">
                <?php

                $benefitsCardItems = [
                    [
                        'number' => '01',
                        'cardName' => 'Flexible Learning Schedule',
                        'cardText' => 'Fit your coursework around your existing commitments and obligations.',
                    ],
                    [
                        'number' => '02',
                        'cardName' => 'Expert Instruction',
                        'cardText' => 'Learn from industry experts who have hands-on experience in design and development.',
                    ],
                    [
                        'number' => '03',
                        'cardName' => 'Diverse Course Offerings',
                        'cardText' => 'Explore a wide range of design and development courses covering various topics.',
                    ],
                    [
                        'number' => '04',
                        'cardName' => 'Updated Curriculum',
                        'cardText' => 'Access courses with up-to-date content reflecting the latest trends and industry practices.',
                    ],
                    [
                        'number' => '05',
                        'cardName' => 'Practical Projects and Assignments',
                        'cardText' => 'Develop a portfolio showcasing your skills and abilities to potential employers.',
                        'delete-class' => 'mobile-remove',
                    ],
                    [
                        'number' => '06',
                        'cardName' => 'Interactive Learning Environment',
                        'cardText' => 'Collaborate with fellow learners, exchanging ideas and feedback to enhance your understanding.',
                        'delete-class' => 'mobile-remove',
                    ],
                ];

                foreach ($benefitsCardItems as $benefitsCardItem) {
                    echo '                   <div class="card-item  ' . $benefitsCardItem['delete-class'] . '">
                                    <div class="card-number">
                                        <p class="fw-bold text-end">' . $benefitsCardItem['number'] . '</p>
                                    </div>
                                    <div class="card-description">
                                        <p class="fs-5 fw-semibold">' . $benefitsCardItem['cardName'] . '</p>
                                        <p class="small-size-p color-grey-one">' . $benefitsCardItem['cardText'] . '</p>
                                    </div>
                                    <div class="section-btn">
                                        <button type="button">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26"
                                                 fill="none">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                      d="M6.78557 19.2144C7.16633 19.5952 7.78367 19.5952 8.16443 19.2144L17.55 9.82886V17.225C17.55 17.7635 17.9865 18.2 18.525 18.2C19.0635 18.2 19.5 17.7635 19.5 17.225V7.475C19.5 6.93652 19.0635 6.5 18.525 6.5H8.775C8.23652 6.5 7.8 6.93652 7.8 7.475C7.8 8.01348 8.23652 8.45 8.775 8.45H16.1711L6.78557 17.8356C6.40481 18.2163 6.40481 18.8337 6.78557 19.2144Z"
                                                      fill="#FF9500"/>
                                            </svg>
                                        </button>
                                    </div>
                                </div>';
                }


                ?>
            </div>
        </div>
    </div>
</section>

