<?php
/*Template Name: Main*/
?>

<?php get_header()?>

<section class="main-block" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/main-banner.webp)">
    <!--<img src="<?php echo get_template_directory_uri() ?>/img/main-banner.webp" alt="Cetus Consultancy background">-->
    <div class="container-block">
        <div class="main-block-text">
            <h1 class="main-title"><?php echo the_title() ?></h1>
            <span class="main-subtitle">We help new technology startups grow fast and effectively</span>
            <p class="main-descr">
                Financial and marketing strategies, investment relations, strategy and building SAAS,
                international Biz.Dev, financial technology for management, consulting for payment
                systems, fraud prevention expertise.
            </p>
        </div>
    </div>
</section>
<section class="content-block">
    <div class="container-block">
        <div class="expertise-block">
            <div class="expertise-title">
                <h2 id="we" class="expertise-h2">Expertise</h2>
                <p class="expertise-descr">
                    Our specialists have unique experience in corporate finance, creating
                    financial strategy, development of financial structures and teams.
                </p>
            </div>
            <div class="cards">
                <div class="card-item">
                    <div class="card-icon international" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/cards/international.svg)"></div>
                    <span class="card-title">International <br> Accounting</span>
                </div>
                <div class="card-item">
                    <div class="card-icon managerial" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/cards/ledger.svg)"></div>
                    <span class="card-title">Managerial <br> Accounting</span>
                </div>
                <div class="card-item">
                    <div class="card-icon federal" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/cards/federal.svg)"></div>
                    <span class="card-title">Federal Taxes and Management Decisions</span>
                </div>
                <div class="card-item">
                    <div class="card-icon finance" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/cards/finance.svg)"></div>
                    <span class="card-title">Managerial <br> Finance</span>
                </div>
                <div class="card-item">
                    <div class="card-icon auditing" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/cards/auditing.svg)"></div>
                    <span class="card-title">Auditing</span>
                </div>
                <div class="card-item">
                    <div class="card-icon accounting" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/cards/accounting.svg)"></div>
                    <span class="card-title">Financial Accounting and Reporting</span>
                </div>
                <div class="card-item">
                    <div class="card-icon management" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/cards/management.svg)"></div>
                    <span class="card-title">Financial <br> Management</span>
                </div>
                <div class="card-item">
                    <div class="card-icon risk" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/cards/risk.svg)"></div>
                    <span class="card-title">Risk <br> Management</span>
                </div>
                <div class="card-item">
                    <div class="card-icon investment" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/cards/investment.svg)"></div>
                    <span class="card-title">Investment and Portfolio Management Corporate Finance Decisions</span>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="consult-block">
    <div class="container-block">
        <div class="consult-block-text">
            <h2 class="consult-h2">Cetus Consultancy</h2>
            <p class="consult-descr">is an implementation of unique knowledge
               and expertise accumulated during previous years.
            </p>
        </div>
    </div>
</section>
<section class="about-us">
    <div class="container-block">
        <div class="about-block">
            <div class="about-title">
                <h2 id="about" class="about-h2">About Us</h2>
            </div>
            <div class="about-content">
                <ul>
                    <li>
                        Cetus Consultancy FZE is headquartered in Ajman, UAE.
                    </li>
                    <li>
                        We are expanding our presence in the Middle East, Europe & USA markets and targeting all segments
                        of consulting, establishing and managing new IT projects for international and local customers.
                    </li>
                    <li>
                        Our team works closely with IT product and service companies, e-commerce, investment funds,
                        and innovation centers.
                    </li>
                    <li>
                        Most of our clients’ projects are large-scale IT long-cycle projects with an average implementation
                        period  of 1 to 2 years each. Such projects have several stages of testing before providing new
                        IT products and services to the final customers.
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="form-block">
    <div class="container">
        <div class="form-title">
            <h2 id="contacts" class="form-h2">READY TO GROW? — CONTACT US</h2>
        </div>
        <?php echo do_shortcode('[ninja_form id=1]') ?>
    </div>
</section>

<?php get_footer()?>





