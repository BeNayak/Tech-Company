<?php include "header.php" ?>

<section class="job-details p_tb">
    <div class="job-details-container">
        <div class="job-info">
            <div class="job-feature">
                <div class="section_title">
                    <h6>Career</h6>
                    <div class="title mb-4">QA Engineer</div>
                </div>
                <p>No. of vacancies: 2</p>
                <p>Posted Date: 30 Sept, 2024</p>
                <p>Job Type: On site</p>
                <p>Experience: Fresher</p>
            </div>

            <div class="job-details-content">
                <h4 class="job-content-title">Requirements</h4>
                <ul class="special-list">
                    <li>Smoke Testing: Conduct smoke testing on ad hoc requirements to ensure the basic functionality of the application is intact before proceeding to more in-depth testing.</li>
                    <li>Automated Front-End Testing: Develop, maintain, and execute automated tests using a framework of choice (Selenium, Jest, Cypress, etc.) to ensure the quality and functionality of front-end components.</li>
                    <li>Visual Regression Testing: Create and implement automated visual regression tests to catch any unintended visual changes across a wide range of browsers and devices.</li>
                </ul>
            </div>
            <div class="job-details-content">
                <h4 class="job-content-title">Responsibilities</h4>
                <ul class="special-list">
                    <li>Smoke Testing: Conduct smoke testing on ad hoc requirements to ensure the basic functionality of the application is intact before proceeding to more in-depth testing.</li>
                    <li>Automated Front-End Testing: Develop, maintain, and execute automated tests using a framework of choice (Selenium, Jest, Cypress, etc.) to ensure the quality and functionality of front-end components.</li>
                    <li>Visual Regression Testing: Create and implement automated visual regression tests to catch any unintended visual changes across a wide range of browsers and devices.</li>
                </ul>
            </div>
            <p class="mt-2">Interested people can forward their resume to <a href="mailto:info@digisoft.com.np" style="color: black; font-weight:700">info@digisoft.com.np</a></p>
        </div>
        <div class="apply-form">
            <form action="forms/career_details.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
                <div class="row gy-4">
                    <div class="col-12">
                        <div class="title">Apply Now</div>
                    </div>

                    <div class="col-md-6">
                        <label for="name" class="pb-2">Full Name *</label>
                        <input type="text" name="name" id="name" class="form-control" required="">
                    </div>

                    <div class="col-md-6">
                        <label for="email" class="pb-2">Email *</label>
                        <input type="email" class="form-control" name="email" id="email" required="">
                    </div>

                    <div class="col-md-6">
                        <label for="number" class="pb-2">Phone Number</label>
                        <input type="text" class="form-control" name="subject" id="number" required="">
                    </div>
                    <div class="col-md-6">
                        <label for="experience" class="pb-2">Experience *</label>
                        <input type="text" class="form-control" name="subject" id="experience" required="">
                    </div>
                    <div class="col-md-6">
                        <label for="applied" class="pb-2">Applied Field *</label>
                        <input type="text" class="form-control" name="subject" id="applied" required="">
                    </div>
                    <div class="col-md-6">
                        <label for="CV" class="pb-2">Please Attach Your CV Here *</label>
                        <input type="file" class="form-control" name="subject" id="CV" required="">
                    </div>

                    <div class="col-md-12">
                        <label for="cover_letter" class="pb-2">Cover Letter</label>
                        <textarea class="form-control" name="cover_letter" rows="10" id="cover_letter" required=""></textarea>
                    </div>

                    <div class="col-md-12 text-center">
                        <button type="submit">Send Message</button>
                    </div>

                </div>
            </form>
        </div>
    </div>
</section>

<?php include "footer.php" ?>