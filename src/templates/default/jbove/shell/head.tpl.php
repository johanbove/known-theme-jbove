<link rel="microsub" href="https://aperture.p3k.io/microsub/287">
<!-- Styles -->
<link href="https://fonts.googleapis.com/css?family=Asap:400,400i,700|Open+Sans:700" rel="stylesheet">
<link href="<?php echo \Idno\Core\Idno::site()->config()->getDisplayURL() ?>Themes/Jbove/css/default.min.css" rel="stylesheet">
<style>
/* Temp CSS hacks supposed to be moved to actual CSS stylesheet some time and day */

/* Tiny screen is for Nokia 8110 4G */
@media (max-width: 240px) {
   body {
      font-size: 12px;
      padding-top: 50px;
   }
   .navbar {
      margin-bottom: 25px;
   }
   .navbar-brand {
      font-size: 18px;
   }
   .navbar-fixed-bottom, .navbar-fixed-top {
      /* fixes the menu not being scrollable */
      position: absolute;
   }
}

.subscription,
.navbar-default {
   background-color: #1a2835;
}

.idno-content {
   box-shadow: -1px -1px 1px rgba(255,255,255,0.1);
}

.pager li a {
   background-color: #4c93cb;
   color: #fff;
   border: 3px solid #73b2e3;
}

.page-body .row p a {
   text-decoration: underline;
}

.navbar-nav > li > .nav > li >a:focus,
.navbar-nav > li > .nav > li > a:hover {
   color: #4c93cb;
}

.reply-text p a,
a {
    color: inherit;
    font-weight: 600;
}

@media (max-width: 767px) {
   .navbar-default .navbar-nav .open .dropdown-menu>li>a {
       color: #ddd;
   }
}

blockquote {
   border-left: 3px solid #fbfbfb;
}

.idno-body blockquote {
   font-style: oblique;
}
</style>
