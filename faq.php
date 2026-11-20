<!doctype html>
<html lang="en">
  <!-- ===================================================================
  Assignment: Front-End Web Development Final Project
  Project Title: Hong Kong Computer Society (HKCS) Portal Rebuild
  Page Name: faq.html (Frequently Asked Questions)
  Author: WANGJIEYI (Student ID: s2553127) & Team
  Date: November 17, 2026
  Description: Responsive FAQ page for HKCS using Bootstrap Accordion.
=================================================================== -->
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FAQ - Hong Kong Computer Society (HKCS)</title>

    <!-- Bootstrap 5 CSS via CDN -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <!-- Bootstrap Icons via CDN -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
      rel="stylesheet"
    />

    <style>
      /* Global Theme Palette */
      :root {
        --hkcs-primary: #1e3a8a; /* Deep Navy Blue */
        --hkcs-secondary: #0a369d; /* Academic Blue */
        --hkcs-bg-light: #f8fafc; /* Soft Warm White */
      }

      body {
        background-color: var(--hkcs-bg-light);
        font-family:
          -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto,
          "Helvetica Neue", Arial, sans-serif;
        color: #334155;
      }

      .bg-hkcs-primary {
        background-color: var(--hkcs-primary) !important;
      }

      /* Category Card Hover Effect */
      .faq-cat-card {
        border: none;
        border-radius: 12px;
        transition: all 0.3s ease;
        cursor: pointer;
      }

      .faq-cat-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.08) !important;
      }

      /* Beautiful Accordion Styling */
      .accordion-item {
        border: none;
        margin-bottom: 12px;
        border-radius: 8px !important;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.04);
        overflow: hidden;
      }

      .accordion-button:not(.collapsed) {
        background-color: rgba(30, 58, 138, 0.08) !important;
        color: var(--hkcs-primary) !important;
        font-weight: 600;
      }

      .accordion-button:focus {
        box-shadow: none;
        border-color: rgba(30, 58, 138, 0.2);
      }
    </style>
  </head>
  <body>
    <!-- ========================================== -->
    <!-- START OF NAVIGATION BAR                     -->
    <!-- ========================================== -->
    <nav
      class="navbar navbar-expand-lg navbar-dark bg-hkcs-primary sticky-top shadow-sm"
    >
      <div class="container">
        <a
          class="navbar-brand fw-bold d-flex align-items-center"
          href="index.html"
        >
          <i class="bi bi-cpu-fill text-warning me-2 fs-3"></i>
          <span>HKCS Portal</span>
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#mainNavbar"
          aria-controls="mainNavbar"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="mainNavbar">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-lg-center">
            <li class="nav-item">
              <a class="nav-link" href="index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="events.html">Events</a>
            </li>
            <li class="nav-item">
              <a
                class="nav-link active fw-semibold"
                aria-current="page"
                href="faq.html"
                >FAQ</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html">Contact Us</a>
            </li>
            <li class="nav-item ms-lg-2">
              <a class="btn btn-outline-light btn-sm px-3" href="login.html"
                >Login</a
              >
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- ========================================== -->
    <!-- END OF NAVIGATION BAR                       -->
    <!-- ========================================== -->

    <!-- ========================================== -->
    <!-- START OF PAGE HEADER BANNER                 -->
    <!-- ========================================== -->
    <header class="py-5 bg-white border-bottom mb-5">
      <div class="container text-center">
        <span
          class="badge bg-primary-subtle text-primary fw-bold text-uppercase px-3 py-2 rounded-pill mb-2"
          >Help Center</span
        >
        <h1 class="fw-bold text-dark">Frequently Asked Questions</h1>
        <p class="lead text-muted mx-auto" style="max-width: 600px">
          Find quick answers to common questions about HKCS membership benefits,
          professional qualifications, and CPD policies.
        </p>
      </div>
    </header>
    <!-- ========================================== -->
    <!-- END OF PAGE HEADER BANNER                   -->
    <!-- ========================================== -->

    <!-- ========================================== -->
    <!-- START OF MAIN FAQ CONTENT                   -->
    <!-- ========================================== -->
    <main class="container mb-5">
      <!-- Quick Jump Category Section (Visual appeal) -->
      <div class="row g-4 mb-5 text-center">
        <div class="col-md-4">
          <div class="faq-cat-card card p-4 shadow-sm bg-white">
            <div class="text-primary fs-1 mb-2">
              <i class="bi bi-person-vcard-fill"></i>
            </div>
            <h5 class="fw-bold text-dark">Membership</h5>
            <p class="text-muted small mb-0">
              Learn about student, individual, and corporate criteria.
            </p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="faq-cat-card card p-4 shadow-sm bg-white">
            <div class="text-success fs-1 mb-2">
              <i class="bi bi-calendar-event-fill"></i>
            </div>
            <h5 class="fw-bold text-dark">Events & CPD</h5>
            <p class="text-muted small mb-0">
              Professional development credits and training sessions.
            </p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="faq-cat-card card p-4 shadow-sm bg-white">
            <div class="text-warning fs-1 mb-2">
              <i class="bi bi-shield-check"></i>
            </div>
            <h5 class="fw-bold text-dark">Professional Status</h5>
            <p class="text-muted small mb-0">
              Chartered IT Professional status and promotion tracks.
            </p>
          </div>
        </div>
      </div>

      <!-- Accordion Section -->
      <div class="row justify-content-center">
        <div class="col-lg-9">
          <!-- Accordion Container -->
          <div class="accordion" id="hkcsFaqAccordion">
            <!-- FAQ Item 1: Who can join? -->
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button
                  class="accordion-button"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#collapseOne"
                  aria-expanded="true"
                  aria-controls="collapseOne"
                >
                  Q1: Who is eligible to apply for HKCS Membership?
                </button>
              </h2>
              <div
                id="collapseOne"
                class="accordion-collapse collapse show"
                aria-labelledby="headingOne"
                data-bs-parent="#hkcsFaqAccordion"
              >
                <div class="accordion-body text-muted small lh-lg">
                  HKCS membership is open to anyone engaged in or interested in
                  the Information Technology sector. We offer various membership
                  grades including:
                  <ul class="mt-2 mb-0">
                    <li>
                      <strong>Student Member</strong>: For full-time tertiary
                      students in IT-related disciplines.
                    </li>
                    <li>
                      <strong>Associate Member</strong>: For individuals
                      entering the IT profession with less than 2 years
                      experience.
                    </li>
                    <li>
                      <strong>Full Member (MHKCS)</strong>: For experienced IT
                      professionals with degrees and recognized industry
                      practice.
                    </li>
                  </ul>
                </div>
              </div>
            </div>

            <!-- FAQ Item 2: Benefits -->
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingTwo">
                <button
                  class="accordion-button collapsed"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#collapseTwo"
                  aria-expanded="false"
                  aria-controls="collapseTwo"
                >
                  Q2: What are the key benefits of joining HKCS?
                </button>
              </h2>
              <div
                id="collapseTwo"
                class="accordion-collapse collapse"
                aria-labelledby="headingTwo"
                data-bs-parent="#hkcsFaqAccordion"
              >
                <div class="accordion-body text-muted small lh-lg">
                  As an HKCS member, you will gain access to premium networking
                  circles, discounted tickets to the annual Hong Kong
                  International Computer Conference (HKICC), and free monthly IT
                  career workshops. Furthermore, you will receive professional
                  recognition with post-nominal letters (e.g., MHKCS, FHKCS)
                  which enhance your resume within the Asian tech ecosystem.
                </div>
              </div>
            </div>

            <!-- FAQ Item 3: CPD Credits -->
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingThree">
                <button
                  class="accordion-button collapsed"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#collapseThree"
                  aria-expanded="false"
                  aria-controls="collapseThree"
                >
                  Q3: How do I earn and claim my Continuous Professional
                  Development (CPD) hours?
                </button>
              </h2>
              <div
                id="collapseThree"
                class="accordion-collapse collapse"
                aria-labelledby="headingThree"
                data-bs-parent="#hkcsFaqAccordion"
              >
                <div class="accordion-body text-muted small lh-lg">
                  You can earn CPD hours by attending qualified seminars,
                  workshops, and international conferences organized by HKCS or
                  our sister organizations. Upon successful attendance, a
                  digital certificate with marked CPD credits will be emailed to
                  you. You can upload these credentials directly into your User
                  Dashboard under the "CPD Tracker" tab.
                </div>
              </div>
            </div>

            <!-- FAQ Item 4: Payment -->
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingFour">
                <button
                  class="accordion-button collapsed"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#collapseFour"
                  aria-expanded="false"
                  aria-controls="collapseFour"
                >
                  Q4: What payment methods are accepted for the annual
                  membership subscription?
                </button>
              </h2>
              <div
                id="collapseFour"
                class="accordion-collapse collapse"
                aria-labelledby="headingFour"
                data-bs-parent="#hkcsFaqAccordion"
              >
                <div class="accordion-body text-muted small lh-lg">
                  We accept secure online credit card payments (VISA,
                  MasterCard, and UnionPay) through our online member portal.
                  For corporate memberships, offline payments via bank transfer
                  or bank draft are also accepted. Detailed invoicing and
                  receipt generation are managed automatically in our web
                  portal.
                </div>
              </div>
            </div>

            <!-- FAQ Item 5: Contacting support -->
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingFive">
                <button
                  class="accordion-button collapsed"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#collapseFive"
                  aria-expanded="false"
                  aria-controls="collapseFive"
                >
                  Q5: What should I do if my question is not listed here?
                </button>
              </h2>
              <div
                id="collapseFive"
                class="accordion-collapse collapse"
                aria-labelledby="headingFive"
                data-bs-parent="#hkcsFaqAccordion"
              >
                <div class="accordion-body text-muted small lh-lg">
                  If you have an urgent inquiry not covered in this FAQ panel,
                  please navigate to our
                  <a
                    href="contact.html"
                    class="text-decoration-none fw-bold text-primary"
                    >Contact Us</a
                  >
                  page. There, you can fill out our official secretariat inquiry
                  form, and our support staff will reach back out to you within
                  two business days.
                </div>
              </div>
            </div>
          </div>
          <!-- End of Accordion Container -->
        </div>
      </div>
    </main>
    <!-- ========================================== -->
    <!-- END OF MAIN FAQ CONTENT                     -->
    <!-- ========================================== -->

    <!-- ========================================== -->
    <!-- START OF FOOTER                             -->
    <!-- ========================================== -->
    <footer class="bg-dark text-white py-4 mt-auto">
      <div class="container text-center small text-secondary">
        <p class="mb-1">
          &copy; 2026 Hong Kong Computer Society. All rights reserved.
        </p>
        <p class="mb-0">
          Designed & Maintained for Academic Course Project 03CIT4053.
        </p>
      </div>
    </footer>
    <!-- ========================================== -->
    <!-- END OF FOOTER                               -->
    <!-- ========================================== -->

    <!-- Bootstrap 5 JavaScript Bundle via CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
