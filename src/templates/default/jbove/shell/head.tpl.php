<?php
if (empty($vars['user']) && !empty($vars['object'])) {
    $vars['user'] = $vars['object'];
}
?>
<!-- Microsub -->
<link rel="microsub" href="https://aperture.p3k.io/microsub/287">

<!-- Hardcoded me url -->
<link href="https://social.johanbove.info" rel="me" class="u-url">

<?php if (!\Idno\Core\Idno::site()->canWrite()) { ?>
<!-- Web Monetization active -->
<meta name="monetization" content="$ilp.uphold.com/b89bp2X8gWki">
<?php } ?>

<!-- fed.brid.gy -->
<link rel="alternate" type="application/atom+xml"
   href="https://granary.io/url?url=<?php echo \Idno\Core\Idno::site()->config()->getDisplayURL() ?>content/all/&input=html&output=atom&hub=https://bridgy-fed.superfeedr.com/" />
<!-- Styles -->
<link href="<?php echo \Idno\Core\Idno::site()->config()->getDisplayURL() ?>Themes/Jbove/css/default.min.css" rel="stylesheet">
<style>
/* Temp CSS hacks supposed to be moved to actual CSS stylesheet some time and day */
body {
    background-image: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEMAAABkCAYAAADdY439AAADnklEQVR4nOWcsZYCIQxFb209vfXW1tb+PDWc+DXbyB6WRR1HIG/cnGOzrnp9BBJCEJzNzM6enx9COJjZOcZ4JKV0SSmdYoxHDxgvMWKMx5TSqXz8esLMztfr9cvMlllQM8Wov2cI4bDqBSml06oXvGmjxTCz5TbA55sQrw90COFwE2boNBohRgjhUArQld3Mluxevd+8pxilV8cYj6O9uvs0eleMch3YPA16WPaYd4TZIka9DnhFwrsWYzxugVsrRrGGnSQFaFlrfXnkMc/EuF6vX1PXgRGWR9LMzo/yl5TSpf6bZ94zxe6t9NkzRkYsWSvnfvaaLJKZLbucBlutJUZ+/AtvgN/TIIfhvGPMzz9bX3Zta/YFrWhSes5uIwi084F3QmstTH/izvaqAKWtTbqyl8kK83J9oGGvpuP1Auy6vpQj1CMc9tioZZ4Z9Zc/2aTiFn4kY9MdR6guXdz5tLJfueiuqnfUCdG/LQh7b4w8jgpa0+jnqMDTvA+R8jZAIm/xFiMzSKT8KmJ4MwAaIAoMgAaIAgOgAaLAAGiAKDAAGiAKDIAGiAIDoAGiwABogCgwABogCgyABogCA6ABosAAaIAoMAAaIAoMgAaIAgOgAaLAAGiAKDAAGiAKDIAGiAIDoAGiwABogCgwABogCgwAKBzeuItRtjh5tyq5iJGP9coOn6Lfw+1G1FQx6k7he15QN+bPOgAfLoaZLVmELa0NMzv+hohRds/k0e31niOb6buJUXf4jBzFUdet3hZjRovTrM/fJIZnh88jW7tA37PVYuzpBlCLdc2APRSjzAcUkqItViZ1zzpz/ogxq9XRw6y62FN7y0/nzprO/0+yOrHL1zzMbEGmuWuylWE6OwK7vxm4wQrvuJQ3ooB2MvNpwjz6jnejydBL9ZOtlR23/m9VnuG1i3zHtkTFlzPQMjwpTqNn4fPJa7ftTVoFGi9hQgiH8mditk7pLrvWWpgZ06jOjq3DxeDu9YyRm7h6z9E7Ox5a6epR37hlhks9DfZyG6ppZZa3ZkQ9cp7p1fG6JFgudt5Jn+u5SRUGL9OuYd7n8T9RyztG75xFQgzQAFFgADRAFBgADRAFBkADRIEB0ABRYAA0QBQYAA0QBQZAA0SBAdAAUWAANEAUGAANEAUGQANEgQHQAFFgADRAFBgADRAFBkADRIEB0ABRYAA0QBQYAA0QBQZAA0SBAdAAUWAANEAUGAANEAUGQAMkM3wD/w3Oh7Pj72cAAAAASUVORK5CYII=');
    background-attachment: fixed;
}

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
   background: rgb(0,191,255);
   background: linear-gradient(0deg, rgba(0,191,255,0.5270308807116597) 0%, rgba(0,191,255,1) 100%);
   box-shadow: 5px 5px 50px rgba(255,255,255,0.3)
}

.page-pages .page-body,
.idno-content {
   box-shadow: 0px 0px 2px rgba(255,255,255,0.35);   
   background-color: rgba(17,17,17,0.85);
}

.page-pages .page-body {
    padding-top: 1.5em;
    padding-bottom: 2.5em;
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
