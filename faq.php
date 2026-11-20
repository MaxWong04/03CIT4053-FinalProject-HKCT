<?php
/* =========================================================================
   Group Number: Group 7
   Group Members: S24810493 WONG Lai Man (Max), YULIN LIAO, JIEYI WANG (s2553127)
   Date: 2026-11-20
   Assignment Title: Final Project Part I - Hong Kong Computer Society (HKCS) Website Rebuild
   File Description: Page 7 of 8 - Refined FAQ Page (faq.php) using Bootstrap 5 Accordion
   Contributor for Content & Refinement: JIEYI WANG (s2553127)
   ========================================================================= */

$pageTitle = "Frequently Asked Questions (FAQ) | Hong Kong Computer Society (HKCS)";
require_once __DIR__ . '/includes/header.php';
?>

<!-- Start of Sub-Page Grey Title Banner: Matches official HKCS light-grey inner page header -->
<section class="py-4" style="background-color: #e2e2e2;">
    <div class="container">
        <h1 class="h3 fw-normal mb-0 text-dark">Frequently Asked Questions (FAQ)</h1>
    </div>
</section>
<!-- End of Sub-Page Grey Title Banner -->

<!-- Start of FAQ Accordion Section: Structured Q&A for Membership, iAM Smart, Events, and Account Support -->
<section class="py-5 bg-white">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="mb-4">
                    <h2 class="h5 fw-bold text-dark mb-2">Membership, Events &amp; Portal Support</h2>
                    <p class="text-secondary small">Find quick answers to common questions regarding HKCT Computer Society student privileges, Github collaboration, and event registration. (Refined by JIEYI WANG)</p>
                </div>

                <!-- Official Bootstrap 5 Accordion Component -->
                <div class="accordion" id="hkcsFaqAccordion">
                    
                    <!-- FAQ Item 1: Who can join? -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faqHeadingOne">
                            <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseOne" aria-expanded="true" aria-controls="faqCollapseOne">
                                1. Who is eligible to join the HKCT Computer Society?
                            </button>
                        </h2>
                        <div id="faqCollapseOne" class="accordion-collapse collapse show" aria-labelledby="faqHeadingOne" data-bs-parent="#hkcsFaqAccordion">
                            <div class="accordion-body small text-secondary" style="line-height: 1.7;">
                                All full-time and part-time HKCT students, especially those enrolled in Information Technology, Web Development, or Computer Science courses, are welcome to join us. Non-IT students who are passionate about learning coding, AI, and cybersecurity can also register as general student members!
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Item 2: Fee? -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faqHeadingTwo">
                            <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseTwo" aria-expanded="false" aria-controls="faqCollapseTwo">
                                2. Is there a membership fee for joining?
                            </button>
                        </h2>
                        <div id="faqCollapseTwo" class="accordion-collapse collapse" aria-labelledby="faqHeadingTwo" data-bs-parent="#hkcsFaqAccordion">
                            <div class="accordion-body small text-secondary" style="line-height: 1.7;">
                                No! Registration and membership for the <strong>HKCT Computer Society</strong> are completely 100% free of charge for active students. All our programming bootcamps and sharing sessions are fully sponsored.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Item 3: GitHub & Collaboration -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faqHeadingThree">
                            <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseThree" aria-expanded="false" aria-controls="faqCollapseThree">
                                3. How do we collaborate on projects using GitHub?
                            </button>
                        </h2>
                        <div id="faqCollapseThree" class="accordion-collapse collapse" aria-labelledby="faqHeadingThree" data-bs-parent="#hkcsFaqAccordion">
                            <div class="accordion-body small text-secondary" style="line-height: 1.7;">
                                We utilize GitHub as our primary version control platform. Each team member is responsible for their assigned pages (such as FAQ and Contact pages). All code changes must be committed and pushed to the official repository. For details, please check our collaborative guidelines on the portal.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Item 4: CPD Hours -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faqHeadingFour">
                            <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseFour" aria-expanded="false" aria-controls="faqCollapseFour">
                                4. How are Continuing Professional Development (CPD) hours recorded?
                            </button>
                        </h2>
                        <div id="faqCollapseFour" class="accordion-collapse collapse" aria-labelledby="faqHeadingFour" data-bs-parent="#hkcsFaqAccordion">
                            <div class="accordion-body small text-secondary" style="line-height: 1.7;">
                                When you register and check in at eligible HKCS seminars, summits, or Specialist Group workshops listed on our <a href="events.php" class="fw-bold text-decoration-none" style="color: #10069f;">Events &amp; Programmes Page</a>, your attendance is automatically logged into your annual CPD transcript.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Item 5: Forget Password -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faqHeadingFive">
                            <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseFive" aria-expanded="false" aria-controls="faqCollapseFive">
                                5. What should I do if I encounter technical issues with my portal account?
                            </button>
                        </h2>
                        <div id="faqCollapseFive" class="accordion-collapse collapse" aria-labelledby="faqHeadingFive" data-bs-parent="#hkcsFaqAccordion">
                            <div class="accordion-body small text-secondary" style="line-height: 1.7;">
                                If you encounter any issues logging in or registering, please navigate directly to our <a href="contact.php" class="fw-bold text-decoration-none" style="color: #10069f;">Contact Us</a> page and submit your query. Our administrative team will get in touch with you to assist.
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Support Callout Box linking to Contact Page -->
                <div class="mt-5 p-4 border bg-light d-flex flex-wrap justify-content-between align-items-center gap-3">
                    <div>
                        <h5 class="h6 fw-bold text-dark mb-1">Still have questions?</h5>
                        <p class="small text-muted mb-0">Our Secretariat team is happy to assist with your student membership or event inquiries.</p>
                    </div>
                    <a href="contact.php" class="btn btn-primary rounded-0 px-4" style="background-color: #10069f; border-color: #10069f;">Contact Secretariat</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of FAQ Accordion Section -->

<?php
require_once __DIR__ . '/includes/footer.php';
?>
