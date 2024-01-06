<?php
header("Content-type: text/css; charset: UTF-8");
$background_url = $_GET["bgImage"];
?>

<style>
  body {
    font-family: "Poppins", sans-serif;
  }

  .expanded {
    max-width: 1320px;
  }

  @media (min-width: 768px) {
    .expanded {
      width: 100%;
      overflow: hidden;
      max-width: 100%;
      padding: 0px 7%;
    }
  }

  .accordion-item {
    border: none;
  }

  img {
    width: 100%;
    overflow: hidden;
  }

  a {
    text-decoration: none;
  }

  ul {
    padding: 0;
    margin: 0;
    list-style: none;
  }

  ul li {
    display: inline-block;
  }

  p {
    font-size: 15px;
    line-height: 28px;
    color: #7a7a7a;
  }

  button.main-button {
    font-size: 14px;
    text-transform: capitalize;
    font-weight: 400;
    color: #ffffff;
    background-color: #ff565b;
    padding: 11px 25px;
    border-radius: 7.5px;
    display: inline-block;
    outline: none;
    border: none;
    -webkit-transition: all 0.5s;
    transition: all 0.5s;
  }

  button.main-button:hover {
    background-color: #2a2a2a;
  }

  .primary-button a {
    font-size: 14px;
    text-transform: capitalize;
    font-weight: 400;
    color: #ffffff;
    background-color: #ff565b;
    padding: 11px 25px;
    border-radius: 7.5px;
    display: inline-block;
    -webkit-transition: all 0.5s;
    transition: all 0.5s;
  }

  .primary-button a:hover {
    background-color: #2a2a2a;
  }

  .white-button a {
    font-size: 14px;
    text-transform: capitalize;
    font-weight: 400;
    color: #ff565b;
    background-color: #ffffff;
    padding: 11px 25px;
    border-radius: 7.5px;
    display: inline-block;
    -webkit-transition: all 0.5s;
    transition: all 0.5s;
  }

  .white-button a:hover {
    color: #ffffff;
    background-color: #ff565b;
  }

  section {
    margin-top: 00px;
    padding-top: 60px;
  }

  @media (min-width: 576px) {
    section {
      margin-top: 60px;
      padding-top: 60px;
    }
  }

  .section-heading {
    margin-bottom: 30px;
  }

  .section-heading h2 {
    font-size: 22px;
    font-weight: 700;
    text-transform: capitalize;
    color: #2a2a2a;
    line-height: 32px;
    letter-spacing: -0.5px;
  }

  @media (min-width: 576px) {
    .section-heading h2 {
      font-size: 34px;
      line-height: 48px;
      text-transform: uppercase;
      letter-spacing: auto;
    }
  }

  .section-heading h2 em {
    color: #ff565b;
    font-style: normal;
    padding-left: 100px;
    position: relative;
  }

  .section-heading h2 em::before {
    width: 80px;
    height: 2px;
    background-color: #ff565b;
    content: "";
    position: absolute;
    left: 0;
    top: 22px;
  }

  .loader {
    background-color: #2a2a2a;
    position: fixed;
    right: 0;
    left: 0;
    top: 0;
    bottom: 0;
    z-index: 222222;
  }

  .loader svg {
    position: absolute;
    left: 50%;
    top: 50%;
    -webkit-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
  }

  .loader svg path,
  .loader svg rect {
    fill: #ff565b;
  }

  .main-navigation {
    position: absolute;
    width: 100%;
    padding: 0px;
    -webkit-transition: all 0.3s;
    transition: all 0.3s;
  }

  .navbar-nav {
    background-color: #2a2a2a;
    border-radius: 7.5px;
    padding: 10px 20px;
    margin-top: 10px;
  }

  @media (min-width: 992px) {
    .navbar-nav {
      background-color: transparent;
      border-radius: 0px;
      padding: 0px;
      margin-top: 0px;
    }
  }

  header.nav-scrolled .main-navigation {
    padding: 10px 0px;
    position: fixed;
    z-index: 222;
    background-color: #2a2a2a;
    -webkit-box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
    box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
  }

  header.nav-scrolled .main-navigation .navbar-brand {
    padding: 0px;
  }

  header.nav-scrolled .main-navigation .navbar-nav {
    margin-top: 0px;
  }

  header.nav-scrolled .main-navigation .navbar-nav .nav-item .nav-link {
    border-top: none;
    padding: 8px 15px;
    font-weight: 300;
    letter-spacing: 0.5px;
  }

  @media (min-width: 576px) {
    header.nav-scrolled .main-navigation .navbar-nav .nav-item .nav-link {
      font-weight: 400;
    }
  }

  header.nav-scrolled .main-navigation .navbar-nav .nav-item .active {
    border-top: none;
    border-radius: 7px;
  }

  .navbar-expand-lg .navbar-collapse {
    -webkit-box-pack: end;
    -ms-flex-pack: end;
    justify-content: flex-end;
  }

  .navbar-light {
    padding: 10px 0px;
  }

  @media (min-width: 992px) {
    .navbar-light {
      padding: 0px;
    }
  }

  .navbar-light .navbar-brand {
    padding: 0px 0px 0px 0px;
  }

  @media (min-width: 992px) {
    .navbar-light .navbar-brand {
      padding: 14px 0px 0px 0px;
    }
  }

  .navbar-light .navbar-nav .nav-item {
    margin-left: 0px;
    text-align: center;
    border-bottom: 1px solid rgba(250, 250, 250, 0.1);
  }

  .navbar-light .navbar-nav .nav-item:last-child {
    border-bottom: none;
  }

  @media (min-width: 992px) {
    .navbar-light .navbar-nav .nav-item {
      margin-left: 20px;
      border-bottom: none;
    }
  }

  .navbar-light .navbar-nav .nav-item .nav-link {
    color: #ffffff;
    font-size: 15px;
    font-weight: 400;
    padding: 12px 20px;
    font-weight: 400;
    border-top: 2px solid transparent;
    -webkit-transition: all 0.5s;
    transition: all 0.5s;
  }

  .navbar-light .navbar-nav .nav-item .nav-link:hover {
    color: #ff565b;
  }

  .navbar-light .navbar-nav .nav-item .active {
    font-weight: 400;
    color: #ff565b;
    background-color: transparent;
    border-radius: 0px;
    border-top: none;
  }

  @media (min-width: 992px) {
    .navbar-light .navbar-nav .nav-item .active {
      background-color: #ffffff;
      border-bottom-left-radius: 7px;
      border-bottom-right-radius: 7px;
      border-top: 2px solid #ff565b;
    }
  }

  .navbar-light .navbar-toggler {
    background-color: #fff;
  }

  button:focus:not(:focus-visible) {
    -webkit-box-shadow: none;
    box-shadow: none;
  }

  .main-banner {
    background-color: #333;
    background-image: url(<?= $background_url ?>);
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center center;
    padding: 170px 0px 270px 0px;
    text-align: center;
  }

  @media (min-width: 576px) {
    .main-banner {
      padding: 270px 0px 400px 0px;
    }
  }

  .main-banner h6 {
    font-size: 20px;
    color: #ffffff;
    text-transform: uppercase;
    font-weight: 700;
    letter-spacing: 2.5px;
  }

  .main-banner h2 {
    color: #ffffff;
    font-size: 50px;
    font-weight: 700;
    text-transform: uppercase;
    margin-top: 15px;
    margin-bottom: 25px;
  }

  .main-banner h2 em {
    font-style: normal;
    color: #ff565b;
  }

  .search-form {
    margin-top: -150px;
  }

  .search-form #search-form {
    padding: 30px;
    background-color: #ffffff;
    -webkit-box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.15);
    box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.15);
    border-radius: 7.5px;
    margin-bottom: 0px;
  }

  @media (min-width: 576px) {
    .search-form #search-form {
      padding: 60px;
    }
  }

  .search-form #search-form label {
    font-size: 18px;
    font-weight: 700;
    margin-bottom: 10px;
  }

  @media (min-width: 576px) {
    .search-form #search-form label {
      margin-bottom: 20px;
    }
  }

  .search-form #search-form input,
  .search-form #search-form select {
    width: 100%;
    height: 44px;
    border-radius: 7.5px;
    border: 1px solid #eeeeee;
    font-size: 14px;
    padding: 0px 15px;
    margin-bottom: 30px;
  }

  .search-form #search-form button.main-button {
    width: 100%;
  }

  section.explore-work .left-image img {
    border-radius: 7.5px;
  }

  section.explore-work .right-content {
    margin-left: 0;
    margin-top: 30px;
  }

  @media (min-width: 992px) {
    section.explore-work .right-content {
      margin-left: 45px;
      margin-top: 0px;
    }
  }

  section.explore-work .right-content ul li {
    display: block;
    margin-bottom: 60px;
  }

  section.explore-work .right-content ul li:last-child {
    margin-bottom: 0px;
  }

  section.explore-work .right-content ul li h4 {
    font-size: 20px;
    color: #2a2a2a;
    font-weight: 700;
    margin-bottom: 30px;
    padding-bottom: 10px;
    border-bottom: 2px solid #eeeeee;
  }

  section.explore-work .right-content ul li ul.info li {
    margin-bottom: 30px;
    width: 100%;
  }

  section.explore-work .right-content ul li ul.info li span {
    font-size: 15px;
    color: #7a7a7a;
    display: block;
    width: 250px;
    height: 50px;
    float: none !important;
  }

  @media (min-width: 576px) {
    section.explore-work .right-content ul li ul.info li span {
      display: inline-block;
      float: left !important;
    }
  }

  section.explore-work .right-content ul li ul.info li span svg {
    margin-right: 8px;
  }

  section.explore-work .right-content ul li ul.info li h6 {
    display: inline-block;
  }

  section.explore-work .right-content ul li ul.info li h6 a {
    font-size: 17px;
    font-weight: 700;
    color: #2a2a2a;
    -webkit-transition: all 0.5s;
    transition: all 0.5s;
  }

  section.explore-work .right-content ul li ul.info li h6 a:hover {
    color: #ff565b;
  }

  section.explore-work .right-content ul li ul.info li em {
    font-size: 15px;
    line-height: 28px;
    color: #7a7a7a;
    font-style: normal;
    display: block;
  }

  @media (min-width: 576px) {
    section.explore-work .right-content ul li ul.info li em {
      display: inline;
    }
  }

  section.whats-trending .section-heading,
  section.whats-trending .left-content {
    margin-right: 0px;
  }

  @media (min-width: 992px) {

    section.whats-trending .section-heading,
    section.whats-trending .left-content {
      margin-right: 100px;
    }
  }

  section.whats-trending .section-heading p,
  section.whats-trending .left-content p {
    margin-bottom: 30px;
  }

  section.whats-trending .right-image {
    position: relative;
    display: none;
  }

  @media (min-width: 992px) {
    section.whats-trending .right-image {
      display: inline-block;
    }
  }

  section.whats-trending .right-image .thumb {
    position: relative;
  }

  section.whats-trending .right-image .thumb .hover-effect {
    position: absolute;
    left: 0;
    right: 0;
    top: 0;
    bottom: 0;
    background-color: rgba(255, 86, 91, 0.9);
    border-radius: 7.5px;
    opacity: 0;
    visibility: hidden;
    -webkit-transition: all 0.5s;
    transition: all 0.5s;
  }

  section.whats-trending .right-image .thumb .hover-effect .inner-content {
    position: absolute;
    width: 100%;
    text-align: center;
    top: 50%;
    -webkit-transform: translateY(-50%);
    transform: translateY(-50%);
  }

  section.whats-trending .right-image .thumb .hover-effect .inner-content h4 {
    margin-bottom: 10px;
    -webkit-transform: translateX(-30px);
    transform: translateX(-30px);
    opacity: 0;
    -webkit-transition: all 0.5s;
    transition: all 0.5s;
  }

  section.whats-trending .right-image .thumb .hover-effect .inner-content h4 a {
    font-size: 20px;
    font-weight: 700;
    color: #ffffff;
    text-transform: uppercase;
    letter-spacing: 0.5px;
  }

  section.whats-trending .right-image .thumb .hover-effect .inner-content span {
    font-size: 15px;
    color: #ffffff;
    display: inline-block;
    -webkit-transform: translateX(30px);
    transform: translateX(30px);
    opacity: 0;
    -webkit-transition: all 0.5s;
    transition: all 0.5s;
  }

  section.whats-trending .right-image .thumb:hover .hover-effect {
    opacity: 1;
    visibility: visible;
  }

  section.whats-trending .right-image .thumb:hover .hover-effect .inner-content h4 {
    opacity: 1;
    -webkit-transform: translateX(0px);
    transform: translateX(0px);
  }

  section.whats-trending .right-image .thumb:hover .hover-effect .inner-content span {
    -webkit-transform: translateX(0px);
    transform: translateX(0px);
    opacity: 1;
  }

  section.whats-trending .right-image .thumb img {
    border-radius: 7.5px;
  }

  section.whats-trending .right-image::after {
    width: 440px;
    height: 300px;
    right: -440px;
    top: 50%;
    -webkit-transform: translateY(-50%);
    transform: translateY(-50%);
    position: absolute;
    background: url(../images/whats-trending-right-image.png);
    content: "";
  }

  section.contact-us {
    margin-top: 60px;
    padding: 60px 0px;
    background-image: url(../images/contact-us-bg.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center center;
  }

  @media (min-width: 992px) {
    section.contact-us {
      margin-top: 120px;
      padding: 120px 0px;
    }
  }

  section.contact-us .left-form {
    padding-right: 15px;
  }

  @media (min-width: 992px) {
    section.contact-us .left-form {
      padding-right: 0px;
    }
  }

  section.contact-us .right-map {
    padding-left: 15px;
  }

  @media (min-width: 992px) {
    section.contact-us .right-map {
      padding-left: 0px;
    }
  }

  section.contact-us form {
    padding: 30px;
    border-top-right-radius: 7.5px;
    border-bottom-right-radius: 7.5px;
    background-color: #ffffff;
    border-top-left-radius: 7.5px;
    border-bottom-left-radius: 7.5px;
    margin-bottom: 0px;
  }

  @media (min-width: 992px) {
    section.contact-us form {
      padding: 60px;
      border-top-right-radius: 0px;
      border-bottom-right-radius: 0px;
    }
  }

  section.contact-us form input {
    width: 100%;
    height: 44px;
    border-radius: 7.5px;
    border: 1px solid #eeeeee;
    font-size: 14px;
    padding: 0px 15px;
    margin-bottom: 15px;
  }

  section.contact-us form textarea {
    width: 100%;
    max-width: 100%;
    min-width: 100%;
    min-height: 120px;
    height: 120px;
    max-height: 120px;
    border-radius: 7.5px;
    border: 1px solid #eeeeee;
    font-size: 14px;
    padding: 10px 15px;
    margin-bottom: 15px;
  }

  section.contact-us form button.main-button {
    width: 100%;
  }

  section.contact-us #map iframe {
    border-top-right-radius: 7.5px;
    border-bottom-right-radius: 7.5px;
    border-top-left-radius: 7.5px;
    border-bottom-left-radius: 7.5px;
    margin-top: 30px;
  }

  @media (min-width: 992px) {
    section.contact-us #map iframe {
      margin-top: 0px;
      border-top-left-radius: 0px;
      border-bottom-left-radius: 0px;
    }
  }

  footer.no-margin-footer {
    margin-top: 60px;
  }

  footer {
    margin-top: 80px;
    text-align: center;
  }

  @media (min-width: 992px) {
    footer {
      text-align: left;
      margin-top: 120px;
    }
  }

  footer .about-widget img {
    max-width: 273px;
    margin-bottom: 45px;
  }

  footer h4 {
    font-size: 17px;
    font-weight: 700;
    text-transform: capitalize;
    color: #2a2a2a;
    margin-bottom: 30px;
    margin-top: 45px;
  }

  @media (min-width: 992px) {
    footer h4 {
      margin-top: 0px;
    }
  }

  footer ul.info li {
    display: block;
    margin-bottom: 20px;
  }

  footer ul.info li a {
    font-size: 15px;
    color: #7a7a7a;
    -webkit-transition: all 0.5s;
    transition: all 0.5s;
  }

  footer ul.info li a:hover {
    color: #ff565b;
  }

  footer ul.info li:last-child {
    margin-bottom: 0px;
  }

  footer ul.social-links li {
    display: block;
    margin-bottom: 20px;
  }

  footer ul.social-links li a {
    font-size: 15px;
    color: #7a7a7a;
    -webkit-transition: all 0.5s;
    transition: all 0.5s;
  }

  footer ul.social-links li a svg {
    margin-right: 3px;
  }

  footer ul.social-links li a:hover {
    color: #ff565b;
  }

  footer ul.social-links li:last-child {
    margin-bottom: 0px;
  }

  footer form#subscribe {
    position: relative;
    margin-bottom: 0px;
  }

  footer form#subscribe input {
    width: 100%;
    border-bottom: 1px solid #eeeeee;
    -webkit-box-shadow: none;
    box-shadow: none;
    border-top: none;
    border-left: none;
    border-right: none;
    font-size: 14px;
    height: 40px;
    position: relative;
    padding: 0px 10px;
  }

  footer form#subscribe button {
    position: absolute;
    right: 10px;
    top: 10px;
    background-color: transparent;
    border: none;
    font-size: 14px;
    color: #7a7a7a;
    -webkit-transition: all 0.5s;
    transition: all 0.5s;
  }

  footer form#subscribe button:hover {
    color: #ff565b;
  }

  footer .sub-footer {
    margin-top: 60px;
    padding-bottom: 20px;
  }

  footer .sub-footer p a {
    color: #ff565b;
  }

  footer .sub-footer a.scroll-to-top {
    text-align: center;
    width: 100%;
    display: inline-block;
    font-size: 15px;
    color: #ff565b;
    -webkit-transition: all 0.5s;
    transition: all 0.5s;
  }

  @media (min-width: 992px) {
    footer .sub-footer a.scroll-to-top {
      text-align: right;
      color: #7a7a7a;
    }
  }

  footer .sub-footer a.scroll-to-top svg {
    margin-left: 3px;
  }

  footer .sub-footer a.scroll-to-top:hover {
    color: #ff565b;
  }

  .page-banner {
    background-color: #333;
    background-image: url(../images/page-banner-bg.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center center;
    padding: 100px 0px 90px 0px;
    text-align: center;
  }

  @media (min-width: 768px) {
    .page-banner {
      padding: 180px 0px;
    }
  }

  .page-banner h2 {
    color: #ffffff;
    font-size: 36px;
    font-weight: 700;
    text-transform: uppercase;
    margin-top: 15px;
    margin-bottom: 25px;
  }

  @media (min-width: 768px) {
    .page-banner h2 {
      font-size: 50px;
    }
  }

  .page-banner h2 em {
    font-style: normal;
    color: #ff565b;
  }

  .page-banner p {
    color: #ffffff;
  }

  .services {
    margin-top: -85px;
  }

  .services .service-item {
    padding: 30px;
    text-align: center;
    background-color: #ffffff;
    -webkit-box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.15);
    box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.15);
    border-radius: 7.5px;
    margin-bottom: 15px;
  }

  @media (min-width: 992px) {
    .services .service-item {
      margin-bottom: 0px;
    }
  }

  .services .service-item .icon {
    fill: #ff565b;
  }

  .services .service-item h4 {
    margin-top: 15px;
    font-size: 20px;
    font-weight: 700;
    color: #2a2a2a;
  }

  section.interior-design .left-image {
    margin-right: 0;
  }

  @media (min-width: 992px) {
    section.interior-design .left-image {
      margin-right: 50px;
    }
  }

  section.interior-design .left-image img {
    border-radius: 7.5px;
  }

  section.interior-design .right-content {
    margin-left: 0;
    margin-top: 30px;
  }

  @media (min-width: 992px) {
    section.interior-design .right-content {
      margin-left: 50px;
      margin-top: 0px;
    }
  }

  section.interior-design .right-content h4 {
    margin-top: 50px;
    margin-bottom: 0px;
    font-size: 20px;
    font-weight: 700;
    color: #2a2a2a;
  }

  section.interior-design .right-content .accordion-button {
    padding: 30px 0px;
    border-bottom: 1px solid #eeeeee;
    border-left: none;
    border-right: none;
    border-top: none;
    width: 100%;
    outline: none;
    text-align: left;
    font-size: 17px;
    background-color: transparent;
    color: #2a2a2a;
  }

  section.interior-design .right-content .accordion-button:not(.collapsed) {
    color: #2a2a2a;
    border-bottom: none;
    background-color: transparent;
  }

  section.interior-design .right-content .accordion-button:focus {
    border: none;
    z-index: 0;
    -webkit-box-shadow: none;
    box-shadow: none;
  }

  section.interior-design .right-content .accordion-button:not(.collapsed)::after {
    background-image: auto !important;
  }

  section.interior-design .right-content .accordion-button::after {
    color: #2a2a2a;
  }

  section.interior-design .right-content .accordion-collapse {
    border: none;
  }

  section.interior-design .right-content .accordion-body {
    padding: 0px 0px 30px 0px;
    border-bottom: 1px solid #eeeeee;
    border-left: none;
    border-right: none;
    border-top: none;
  }

  .what-they-say .testimonials {
    background-image: url(../images/testimonial-bg.png);
    background-repeat: no-repeat;
    background-size: 815px 560px;
    background-position: center center;
    border-radius: 7.5px;
  }

  @media (min-width: 992px) {
    .what-they-say .testimonials {
      background-position: center right;
    }
  }

  .what-they-say .col-lg-6 {
    padding: 0px;
  }

  .what-they-say .carousel {
    padding: 100px 0px;
  }

  .what-they-say .testimonial-item {
    padding: 60px;
    margin: 20px;
    z-index: 1;
    -webkit-box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.15);
    box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.15);
    background-color: #ffffff;
    border-radius: 7.5px;
    border-bottom-right-radius: 0px;
    position: relative;
  }

  .what-they-say .testimonial-item img {
    max-width: 80px;
    border-radius: 50%;
    margin-right: 20px;
    float: left !important;
  }

  .what-they-say .testimonial-item .icon {
    position: absolute;
    left: 30px;
    top: -20px;
    fill: #ff565b;
  }

  .what-they-say .testimonial-item h4 {
    font-size: 18px;
    font-weight: 700;
    color: #2a2a2a;
  }

  .what-they-say .testimonial-item span {
    font-size: 14px;
    color: #7a7a7a;
    display: block;
    margin-bottom: 8px;
  }

  .what-they-say .testimonial-item p {
    margin-top: 25px;
    margin-bottom: 0px;
  }

  .what-they-say .testimonial-item:after {
    content: "";
    position: absolute;
    right: -10px;
    bottom: -10px;
    width: 100%;
    height: 10px;
    border-bottom-left-radius: 7.5px;
    border-bottom-right-radius: 7.5px;
    z-index: -2;
    background-color: #f6c5c6;
  }

  .what-they-say .testimonial-item:before {
    content: "";
    position: absolute;
    right: -10px;
    bottom: -5px;
    width: 10px;
    height: 100%;
    border-top-right-radius: 7.5px;
    border-bottom-right-radius: 7.5px;
    z-index: -2;
    background-color: #f6c5c6;
  }

  .what-they-say .carousel-indicators {
    bottom: 40px;
  }

  .what-they-say .carousel-indicators button {
    width: 10px;
    height: 10px;
    background-color: #7a7a7a;
    -webkit-box-shadow: none;
    box-shadow: none;
    border: none;
    outline: none;
    opacity: 0.5;
    margin: 0px 5px;
    padding: 0px;
    border-radius: 50%;
  }

  .what-they-say .carousel-indicators .active {
    opacity: 1;
    background-color: #ff565b;
  }

  .call-to-action {
    background-color: #2a2a2a;
    margin-top: 120px;
    padding: 45px 0px;
  }

  .call-to-action h2 {
    font-size: 24px;
    font-weight: 700;
    text-transform: uppercase;
    color: #ffffff;
    margin: 0px 0px 20px 0px;
    text-align: center;
  }

  @media (min-width: 992px) {
    .call-to-action h2 {
      text-align: left;
      margin: 0px;
      font-size: 35px;
    }
  }

  .call-to-action .white-button {
    text-align: center;
  }

  @media (min-width: 992px) {
    .call-to-action .white-button {
      text-align: right;
    }
  }

  section.explore-item h2 {
    font-size: 34px;
    font-weight: 700;
    color: #2a2a2a;
    text-align: center;
    text-transform: uppercase;
  }

  section.explore-item .main-image img {
    border-radius: 7.5px;
  }

  section.explore-item .project-info {
    background-color: #fafafa;
    -webkit-box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.15);
    box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.15);
    margin: 15px 0px 30px 0px;
    border-radius: 7.5px;
    position: relative;
    padding: 30px;
  }

  @media (min-width: 992px) {
    section.explore-item .project-info {
      margin: -140px 30px 80px 30px;
      background-color: rgba(250, 250, 250, 0.9);
      -webkit-box-shadow: none;
      box-shadow: none;
    }
  }

  section.explore-item .project-info .info-item {
    margin: 10px auto;
    text-align: center;
  }

  @media (min-width: 992px) {
    section.explore-item .project-info .info-item {
      margin: 0 auto;
    }
  }

  section.explore-item .project-info .info-item h6 {
    font-size: 17px;
    color: #2a2a2a;
  }

  section.explore-item .project-info .info-item span {
    font-size: 15px;
    color: #7a7a7a;
  }

  section.explore-item p {
    margin-bottom: 60px;
  }

  section.explore-item img {
    border-radius: 7.5px;
    margin-bottom: 15px;
  }

  @media (min-width: 992px) {
    section.explore-item img {
      margin-bottom: 0px;
    }
  }

  section.explore-item .down-content h4 {
    margin-top: 50px;
    margin-bottom: 20px;
    font-size: 34px;
    font-weight: 700;
    color: #2a2a2a;
    text-align: left;
    text-transform: uppercase;
  }

  section.explore-item .projects-pagination {
    border-top: 1px solid #eeeeee;
    padding-top: 60px;
  }

  section.explore-item .projects-pagination img {
    max-width: 60px;
  }

  @media (min-width: 992px) {
    section.explore-item .projects-pagination img {
      max-width: 115px;
    }
  }

  section.explore-item .projects-pagination .right-pagination {
    margin-top: 15px;
    padding-top: 30px;
    border-top: 1px solid #eeeeee;
    text-align: right;
  }

  @media (min-width: 992px) {
    section.explore-item .projects-pagination .right-pagination {
      margin-top: 0px;
      padding-top: 0px;
      border-top: none;
    }
  }

  section.explore-item .projects-pagination .right-pagination img {
    float: right;
  }

  section.explore-item .projects-pagination .left-pagination img {
    float: left;
  }

  section.explore-item .projects-pagination .right-content {
    display: inline-block;
    margin-left: 15px;
  }

  @media (min-width: 992px) {
    section.explore-item .projects-pagination .right-content {
      margin-left: 25px;
    }
  }

  section.explore-item .projects-pagination .right-content h6 {
    margin-top: 8px;
    font-size: 18px;
    font-weight: 700;
    color: #2a2a2a;
    text-transform: capitalize;
    -webkit-transition: all 0.5s;
    transition: all 0.5s;
  }

  @media (min-width: 992px) {
    section.explore-item .projects-pagination .right-content h6 {
      margin-top: 28px;
    }
  }

  section.explore-item .projects-pagination .right-content h6:hover {
    color: #ff565b;
  }

  section.explore-item .projects-pagination .right-content span {
    font-size: 15px;
    color: #7a7a7a;
  }

  section.explore-item .projects-pagination .left-content {
    margin-right: 15px;
    display: inline-block;
    text-align: right;
  }

  @media (min-width: 992px) {
    section.explore-item .projects-pagination .left-content {
      margin-right: 25px;
    }
  }

  section.explore-item .projects-pagination .left-content h6 {
    margin-top: 8px;
    font-size: 18px;
    font-weight: 700;
    color: #2a2a2a;
    text-transform: capitalize;
    -webkit-transition: all 0.5s;
    transition: all 0.5s;
    text-align: right;
  }

  @media (min-width: 992px) {
    section.explore-item .projects-pagination .left-content h6 {
      padding-top: 20px;
    }
  }

  section.explore-item .projects-pagination .left-content h6:hover {
    color: #ff565b;
  }

  section.explore-item .projects-pagination .left-content span {
    text-align: right;
    font-size: 15px;
    color: #7a7a7a;
  }

  section.trending-page .card {
    border: none;
  }

  @media (min-width: 650px) {
    section.trending-page .grid-item {
      width: 100%;
    }
  }

  @media (min-width: 850px) {
    section.trending-page .grid-item {
      width: 50%;
    }
  }

  @media (min-width: 1200px) {
    section.trending-page .grid-item {
      width: 33%;
    }
  }

  @media (min-width: 1400px) {
    section.trending-page .grid-item {
      width: 25%;
    }
  }

  section.trending-page .trending-item {
    margin-bottom: 20px;
  }

  @media (min-width: 1200px) {
    section.trending-page .trending-item {
      margin-bottom: 30px;
    }
  }

  section.trending-page .trending-item .thumb {
    border-radius: 7.5px;
    position: relative;
    overflow: hidden;
  }

  section.trending-page .trending-item .thumb span.banner {
    background-color: #ff565b;
    color: #ffffff;
    font-size: 14px;
    padding: 10px 16px;
    display: inline-block;
    border-bottom-right-radius: 7.5px;
    border-top-left-radius: 7.5px;
    position: absolute;
    left: 0;
    top: 0;
    z-index: 2;
  }

  section.trending-page .trending-item .thumb .hover-effect {
    position: absolute;
    z-index: 2;
    width: 100%;
    bottom: -100%;
    -webkit-transition: all 0.5s;
    transition: all 0.5s;
  }

  section.trending-page .trending-item .thumb .hover-effect .inner-content {
    padding: 20px 30px;
    border-bottom-left-radius: 7.5px;
    border-bottom-right-radius: 7.5px;
    background-color: #ff565b;
  }

  section.trending-page .trending-item .thumb .hover-effect .inner-content h4 {
    font-size: 18px;
    font-weight: 700;
    text-transform: capitalize;
    color: #ffffff;
    margin: 0px;
    margin-right: 20px;
  }

  section.trending-page .trending-item .thumb .hover-effect .inner-content a.icon {
    color: #ffffff;
    right: 30px;
    bottom: 18px;
    position: absolute;
  }

  section.trending-page .trending-item .thumb img {
    border-radius: 7.5px;
    -webkit-transition: all 1s;
    transition: all 1s;
    z-index: 1;
  }

  section.trending-page .trending-item .thumb:hover img {
    -webkit-transform: scale(1.1);
    transform: scale(1.1);
  }

  section.trending-page .trending-item .thumb:hover .hover-effect {
    bottom: 0;
  }

  section.contact-page-map #map iframe {
    border-radius: 7.5px;
  }

  section.contact-us-page {
    margin-top: -60px;
    padding-top: 0px;
    z-index: 2;
    position: relative;
  }

  section.contact-us-page .contact-page-form {
    padding: 30px;
    background-color: #ffffff;
    -webkit-box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.15);
    box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.15);
    border-radius: 7.5px;
  }

  @media (min-width: 992px) {
    section.contact-us-page .contact-page-form {
      padding: 60px;
    }
  }

  section.contact-us-page .contact-page-form form {
    margin-bottom: 0px;
    margin-right: 0px;
  }

  @media (min-width: 992px) {
    section.contact-us-page .contact-page-form form {
      margin-right: 45px;
    }
  }

  section.contact-us-page .contact-page-form form input {
    width: 100%;
    height: 44px;
    border-radius: 7.5px;
    border: 1px solid #eeeeee;
    font-size: 14px;
    padding: 0px 15px;
    margin-bottom: 15px;
  }

  section.contact-us-page .contact-page-form form textarea {
    width: 100%;
    max-width: 100%;
    min-width: 100%;
    min-height: 120px;
    height: 120px;
    max-height: 120px;
    border-radius: 7.5px;
    border: 1px solid #eeeeee;
    font-size: 14px;
    padding: 10px 15px;
    margin-bottom: 15px;
  }

  section.contact-us-page .contact-page-form form button.main-button {
    width: 100%;
  }

  section.contact-us-page .right-info ul {
    margin-top: 30px;
    padding-top: 30px;
    border-top: 1px solid #eeeeee;
  }

  @media (min-width: 992px) {
    section.contact-us-page .right-info ul {
      margin-top: 0px;
      padding-top: 0px;
      border-top: none;
    }
  }

  section.contact-us-page .right-info ul li {
    display: block;
    width: 100%;
    padding: 30px;
    border-radius: 7.5px;
    background-color: #ff565b;
    text-align: center;
    margin-bottom: 30px;
  }

  section.contact-us-page .right-info ul li:last-child {
    margin-bottom: 0px;
  }

  section.contact-us-page .right-info ul li .icon {
    fill: #ffffff;
  }

  section.contact-us-page .right-info ul li h6 {
    margin-top: 15px;
    font-size: 18px;
    text-transform: capitalize;
    font-weight: 700;
    color: #ffffff;
  }

  section.contact-us-page .right-info ul li span {
    font-size: 15px;
    color: #ffffff;
  }

  .logo {
    opacity: 0.5;
    width: 166px;
    height: 128px;
  }

  /*# sourceMappingURL=style.css.map */
</style>