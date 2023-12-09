<?php
$class = ($_SERVER['PHP_SELF'] === '/pricing-page.php' ? 'pricing-page' : '');
?>

    <section class="pricing <?php echo $class; ?>">
        <div class="container">
            <div class="section-items">

                <div class="section-header">
                    <div class="section-description">
                        <h3 class="h3 fw-semibold text-start section-item">Our Pricing</h3>

                        <?php


                        $sectionHeaderDescription = ['Lorem ipsum dolor sit amet consectetur. Tempus
                        tincidunt etiam
                        eget elit id imperdiet et. Cras eu sit dignissim lorem nibh et. Ac cum eget habitasse in velit
                        fringilla feugiat senectus in.', "Welcome to SkillBridge's Pricing Plan page, where we offer two comprehensive options to cater to your needs:
                         Free and Pro . We believe in providing flexible and affordable pricing options for our services . Whether you're an individual looking to enhance your skills
                         or a business seeking professional development solutions, we have a plan that suits you. Explore our pricing options below and choose the 
                         one that best fits your requirements."];

                        if ($_SERVER['PHP_SELF'] === '/index.php') {
                            echo '<p class="small-size-p text-start color-grey-two section-item">' . $sectionHeaderDescription[0] . '</p>';
                        } else if ($_SERVER['PHP_SELF'] === '/pricing-page.php') {
                            echo '<p class="small-size-p text-start color-grey-two section-item">' . $sectionHeaderDescription[1] . '</p>';
                        }
                        ?>
                    </div>
                    <div class="section-btn">
                        <button class="orange-btn" type="button">Monthly</button>
                        <button class="transparent-btn" type="button">Yearly</button>
                    </div>
                </div>
                <div class="card-items">

                    <?php

                    $availableFeaturesContentItems = [['textBanner' => 'Free Plan',
                        'price' => '$0',
                        'availableFeatures' => [['icons' => '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
  <path fill-rule="evenodd" clip-rule="evenodd" d="M13.364 3.32297C13.6276 3.52379 13.6785 3.90027 13.4777 4.16385L7.07765 12.5639C6.97272 12.7016 6.81341 12.7873 6.64066 12.7989C6.46791 12.8105 6.29856 12.7469 6.17613 12.6245L2.57613 9.02449C2.34181 8.79018 2.34181 8.41028 2.57613 8.17596C2.81044 7.94165 3.19034 7.94165 3.42465 8.17596L6.5392 11.2905L12.5231 3.4366C12.724 3.17302 13.1004 3.12214 13.364 3.32297Z" fill="#262626"/>
</svg>',
                            'text' => 'Access to selected free courses.',
                            'class' => 'gray',],
                            ['icons' => '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
  <path fill-rule="evenodd" clip-rule="evenodd" d="M13.364 3.32297C13.6276 3.52379 13.6785 3.90027 13.4777 4.16385L7.07765 12.5639C6.97272 12.7016 6.81341 12.7873 6.64066 12.7989C6.46791 12.8105 6.29856 12.7469 6.17613 12.6245L2.57613 9.02449C2.34181 8.79018 2.34181 8.41028 2.57613 8.17596C2.81044 7.94165 3.19034 7.94165 3.42465 8.17596L6.5392 11.2905L12.5231 3.4366C12.724 3.17302 13.1004 3.12214 13.364 3.32297Z" fill="#262626"/>
</svg>',
                                'text' => 'Limited course materials and resources.',
                                'class' => 'gray',],
                            ['icons' => '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
  <path fill-rule="evenodd" clip-rule="evenodd" d="M13.364 3.32297C13.6276 3.52379 13.6785 3.90027 13.4777 4.16385L7.07765 12.5639C6.97272 12.7016 6.81341 12.7873 6.64066 12.7989C6.46791 12.8105 6.29856 12.7469 6.17613 12.6245L2.57613 9.02449C2.34181 8.79018 2.34181 8.41028 2.57613 8.17596C2.81044 7.94165 3.19034 7.94165 3.42465 8.17596L6.5392 11.2905L12.5231 3.4366C12.724 3.17302 13.1004 3.12214 13.364 3.32297Z" fill="#262626"/>
</svg>',
                                'text' => 'Basic community support.',
                                'class' => 'gray',],
                            ['icons' => '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
  <path fill-rule="evenodd" clip-rule="evenodd" d="M13.364 3.32297C13.6276 3.52379 13.6785 3.90027 13.4777 4.16385L7.07765 12.5639C6.97272 12.7016 6.81341 12.7873 6.64066 12.7989C6.46791 12.8105 6.29856 12.7469 6.17613 12.6245L2.57613 9.02449C2.34181 8.79018 2.34181 8.41028 2.57613 8.17596C2.81044 7.94165 3.19034 7.94165 3.42465 8.17596L6.5392 11.2905L12.5231 3.4366C12.724 3.17302 13.1004 3.12214 13.364 3.32297Z" fill="#262626"/>
</svg>',
                                'text' => 'No certification upon completion.',
                                'class' => 'gray',],
                            ['icons' => '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
  <path fill-rule="evenodd" clip-rule="evenodd" d="M13.364 3.32297C13.6276 3.52379 13.6785 3.90027 13.4777 4.16385L7.07765 12.5639C6.97272 12.7016 6.81341 12.7873 6.64066 12.7989C6.46791 12.8105 6.29856 12.7469 6.17613 12.6245L2.57613 9.02449C2.34181 8.79018 2.34181 8.41028 2.57613 8.17596C2.81044 7.94165 3.19034 7.94165 3.42465 8.17596L6.5392 11.2905L12.5231 3.4366C12.724 3.17302 13.1004 3.12214 13.364 3.32297Z" fill="#262626"/>
</svg>',
                                'text' => 'Ad-supported platform.',
                                'class' => 'gray',],
                            ['icons' => '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
  <path d="M5.02426 4.17574C4.78995 3.94142 4.41005 3.94142 4.17574 4.17574C3.94142 4.41005 3.94142 4.78995 4.17574 5.02426L7.15147 8L4.17574 10.9757C3.94142 11.2101 3.94142 11.59 4.17574 11.8243C4.41005 12.0586 4.78995 12.0586 5.02426 11.8243L8 8.84853L10.9757 11.8243C11.2101 12.0586 11.59 12.0586 11.8243 11.8243C12.0586 11.59 12.0586 11.2101 11.8243 10.9757L8.84853 8L11.8243 5.02426C12.0586 4.78995 12.0586 4.41005 11.8243 4.17574C11.59 3.94142 11.2101 3.94142 10.9757 4.17574L8 7.15147L5.02426 4.17574Z" fill="#262626"/>
</svg>',
                                'text' => 'Access to exclusive Pro Plan community forums.',
                                'class' => 'white',],
                            ['icons' => '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
  <path d="M5.02426 4.17574C4.78995 3.94142 4.41005 3.94142 4.17574 4.17574C3.94142 4.41005 3.94142 4.78995 4.17574 5.02426L7.15147 8L4.17574 10.9757C3.94142 11.2101 3.94142 11.59 4.17574 11.8243C4.41005 12.0586 4.78995 12.0586 5.02426 11.8243L8 8.84853L10.9757 11.8243C11.2101 12.0586 11.59 12.0586 11.8243 11.8243C12.0586 11.59 12.0586 11.2101 11.8243 10.9757L8.84853 8L11.8243 5.02426C12.0586 4.78995 12.0586 4.41005 11.8243 4.17574C11.59 3.94142 11.2101 3.94142 10.9757 4.17574L8 7.15147L5.02426 4.17574Z" fill="#262626"/>
</svg>',
                                'text' => 'Early access to new courses and updates.',
                                'class' => 'white',],],],
                        ['textBanner' => 'Pro Plan',
                            'price' => '$79',
                            'availableFeatures' => [['icons' => '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
  <path fill-rule="evenodd" clip-rule="evenodd" d="M13.364 3.32297C13.6276 3.52379 13.6785 3.90027 13.4777 4.16385L7.07765 12.5639C6.97272 12.7016 6.81341 12.7873 6.64066 12.7989C6.46791 12.8105 6.29856 12.7469 6.17613 12.6245L2.57613 9.02449C2.34181 8.79018 2.34181 8.41028 2.57613 8.17596C2.81044 7.94165 3.19034 7.94165 3.42465 8.17596L6.5392 11.2905L12.5231 3.4366C12.724 3.17302 13.1004 3.12214 13.364 3.32297Z" fill="#262626"/>
</svg>',
                                'text' => 'Unlimited access to all courses.',
                                'class' => 'orange',],
                                ['icons' => '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
  <path fill-rule="evenodd" clip-rule="evenodd" d="M13.364 3.32297C13.6276 3.52379 13.6785 3.90027 13.4777 4.16385L7.07765 12.5639C6.97272 12.7016 6.81341 12.7873 6.64066 12.7989C6.46791 12.8105 6.29856 12.7469 6.17613 12.6245L2.57613 9.02449C2.34181 8.79018 2.34181 8.41028 2.57613 8.17596C2.81044 7.94165 3.19034 7.94165 3.42465 8.17596L6.5392 11.2905L12.5231 3.4366C12.724 3.17302 13.1004 3.12214 13.364 3.32297Z" fill="#262626"/>
</svg>',
                                    'text' => 'Unlimited course materials and resources.',
                                    'class' => 'orange',],
                                ['icons' => '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
  <path fill-rule="evenodd" clip-rule="evenodd" d="M13.364 3.32297C13.6276 3.52379 13.6785 3.90027 13.4777 4.16385L7.07765 12.5639C6.97272 12.7016 6.81341 12.7873 6.64066 12.7989C6.46791 12.8105 6.29856 12.7469 6.17613 12.6245L2.57613 9.02449C2.34181 8.79018 2.34181 8.41028 2.57613 8.17596C2.81044 7.94165 3.19034 7.94165 3.42465 8.17596L6.5392 11.2905L12.5231 3.4366C12.724 3.17302 13.1004 3.12214 13.364 3.32297Z" fill="#262626"/>
</svg>',
                                    'text' => 'Priority support from instructors.',
                                    'class' => 'orange',],
                                ['icons' => '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
  <path fill-rule="evenodd" clip-rule="evenodd" d="M13.364 3.32297C13.6276 3.52379 13.6785 3.90027 13.4777 4.16385L7.07765 12.5639C6.97272 12.7016 6.81341 12.7873 6.64066 12.7989C6.46791 12.8105 6.29856 12.7469 6.17613 12.6245L2.57613 9.02449C2.34181 8.79018 2.34181 8.41028 2.57613 8.17596C2.81044 7.94165 3.19034 7.94165 3.42465 8.17596L6.5392 11.2905L12.5231 3.4366C12.724 3.17302 13.1004 3.12214 13.364 3.32297Z" fill="#262626"/>
</svg>',
                                    'text' => 'Course completion certificates.',
                                    'class' => 'orange',],
                                ['icons' => '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
  <path fill-rule="evenodd" clip-rule="evenodd" d="M13.364 3.32297C13.6276 3.52379 13.6785 3.90027 13.4777 4.16385L7.07765 12.5639C6.97272 12.7016 6.81341 12.7873 6.64066 12.7989C6.46791 12.8105 6.29856 12.7469 6.17613 12.6245L2.57613 9.02449C2.34181 8.79018 2.34181 8.41028 2.57613 8.17596C2.81044 7.94165 3.19034 7.94165 3.42465 8.17596L6.5392 11.2905L12.5231 3.4366C12.724 3.17302 13.1004 3.12214 13.364 3.32297Z" fill="#262626"/>
</svg>',
                                    'text' => 'Ad-free experience.',
                                    'class' => 'orange',],
                                ['icons' => '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
  <path fill-rule="evenodd" clip-rule="evenodd" d="M13.364 3.32297C13.6276 3.52379 13.6785 3.90027 13.4777 4.16385L7.07765 12.5639C6.97272 12.7016 6.81341 12.7873 6.64066 12.7989C6.46791 12.8105 6.29856 12.7469 6.17613 12.6245L2.57613 9.02449C2.34181 8.79018 2.34181 8.41028 2.57613 8.17596C2.81044 7.94165 3.19034 7.94165 3.42465 8.17596L6.5392 11.2905L12.5231 3.4366C12.724 3.17302 13.1004 3.12214 13.364 3.32297Z" fill="#262626"/>
</svg>',
                                    'text' => 'Access to exclusive Pro Plan community forums.',
                                    'class' => 'orange',],
                                ['icons' => '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
  <path fill-rule="evenodd" clip-rule="evenodd" d="M13.364 3.32297C13.6276 3.52379 13.6785 3.90027 13.4777 4.16385L7.07765 12.5639C6.97272 12.7016 6.81341 12.7873 6.64066 12.7989C6.46791 12.8105 6.29856 12.7469 6.17613 12.6245L2.57613 9.02449C2.34181 8.79018 2.34181 8.41028 2.57613 8.17596C2.81044 7.94165 3.19034 7.94165 3.42465 8.17596L6.5392 11.2905L12.5231 3.4366C12.724 3.17302 13.1004 3.12214 13.364 3.32297Z" fill="#262626"/>
</svg>',
                                    'text' => 'Early access to new courses and updates.',
                                    'class' => 'orange',],],],];


                    foreach ($availableFeaturesContentItems as $availableFeaturesContentItem) {

                        echo ' <div class="card-item">
                    <div class="card-header">
                        <div class="header-top-banner">
                            <button type="button" class="plan">' . $availableFeaturesContentItem['textBanner'] . '</button>
                        </div>
                        <div class="plan-price">
                            <h2 class="fw-semibold">' . $availableFeaturesContentItem['price'] . '</h2><span class="small-size-p fw-medium">/month</span>
                        </div>
                    </div>
                    <div class="available-features">
                        <h5>Available Features</h5>
                        <ul class="list-items">
                        ';
                        foreach ($availableFeaturesContentItem['availableFeatures'] as $availableFeatures) {
                            echo '
                            <li class="li-item">
                                <span class="' . $availableFeatures['class'] . '">' . $availableFeatures['icons'] . '</span>
                                <p class="small-size-p">' . $availableFeatures['text'] . '</p>
                            </li>';

                        };
                        echo '   </ul>
                        <div class="section-btn">
                            <button type="button" class="orange-btn">Get Started</button>
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
