<!-- Microsub -->
<link rel="microsub" href="https://aperture.p3k.io/microsub/287">
<!-- fed.brid.gy -->
<link rel="alternate" type="application/atom+xml"
   href="https://granary.io/url?url=<?php echo \Idno\Core\Idno::site()->config()->getDisplayURL() ?>&input=html&output=atom&hub=https://bridgy-fed.superfeedr.com/" />
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

.subscription {
    background-color: transparent;
    padding: 0.25em 0;
    margin: 0.25em 0;
}

.navbar-default {
   background-color: deepskyblue;
   box-shadow: 5px 5px 50px rgba(255,255,255,0.3)
}

.idno-content {
   box-shadow: -1px -1px 1px rgba(255,255,255,0.1);
}

.pager ul {
    padding: 0;
}

.pager li a {
   background-color: #4c93cb;
   color: #fff;
   border: 3px solid #73b2e3;
}

.page-body .row p a {
   text-decoration: underline;
}

.navbar-default .navbar-brand:focus,
.navbar-default .navbar-brand:hover,
.navbar-nav > li > .nav > li > a:focus,
.navbar-nav > li > .nav > li > a:hover,
.navbar-default .navbar-nav > li > a:focus,
.navbar-default .navbar-nav > li > a:hover,
.navbar-default .navbar-nav > .open > a,
.navbar-default .navbar-nav > .open > a:focus,
.navbar-default .navbar-nav > .open > a:hover {
   color: #fff;
   text-shadow: 1px 1px 1px slateblue;
}

.reply-text p a,
a {
    color: inherit;
    font-weight: 600;
}

@media (max-width: 767px) {
   .navbar-default .navbar-nav .open .dropdown-menu > li > a {
       color: #fff;
       text-shadow: 1px 1px 1px rgba(0,0,0,0.1);
   }
   .navbar-fixed-bottom, .navbar-fixed-top {
      /* fixes the menu not being scrollable */
      position: absolute;
   }
}

blockquote {
   border-left: 3px solid #fbfbfb;
}

.idno-body blockquote {
   font-style: oblique;
}

.idno-entry.row {
   margin-bottom: 30px;
}

.navbar-default .navbar-collapse,
.navbar-default .navbar-form {
    border-color: transparent;
}
</style>
