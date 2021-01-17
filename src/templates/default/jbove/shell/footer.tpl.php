<?php
if (isset($vars['object'])) {
    $object = $vars['object'];
}

if (isset($object) && !empty($object)) {
?>
<div class="blank-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- Testing Web Monetization -->
<div id="web-monetization" style="text-align:center;margin:2em;">This site is web monetization enabled. <a href="https://webmonetization.org/" rel="noopener noreferrer" style="text-decoration:underline">Learn more about Web Monetization</a>.</p></div>

<script>
    const adCode = '<p>My site is <a href="https://webmonetization.org/" rel="noopener noreferrer">web monetization</a> enabled. Please consider supporting me through <a href="https://coil.com" rel="noopener noreferrer" style="text-decoration:underline">Coil.com</a>.</p>'
    function showAds () {
      document.getElementById('web-monetization').innerHTML = adCode
    }

    function removeAds () {
      document.getElementById('web-monetization').innerHTML = '<p><strong>Thank you ❤️</strong> for your generous support using <a href="https://webmonetization.org/" rel="noopener noreferrer" style="text-decoration:underline">web monetization</a>! Welcome to the future of the web! 🤩 🤘</p>'
    }

    let hasPaid = false
    if (document.monetization) {
      document.monetization.addEventListener('monetizationstart', () => {
        hasPaid = true
        removeAds()
      })
    }

    window.addEventListener('load', () => {
      if (!document.monetization) {
        showAds()
      } else {
        setTimeout(() => {
          if (!hasPaid) {
            showAds()
          }
        }, 3000)
      }
    })
</script>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 u-webring">
                <p class="text-center">
                    <a href="https://xn--sr8hvo.ws/%F0%9F%94%B6%E2%80%BC%EF%B8%8F%F0%9F%94%9C/previous" rel="nofollow noreferrer noopener">←</a>
                    An IndieWeb Webring 🕸💍
                    <a href="https://xn--sr8hvo.ws/%F0%9F%94%B6%E2%80%BC%EF%B8%8F%F0%9F%94%9C/next" rel="nofollow noreferrer noopener">→</a>
                </p>
                <p class="text-center" style="max-width:500px;margin:auto auto 30px;font-style:italic;line-height:1"><small>The web ring leads to many interesting personal sites worth exploring,
                        but I am not in control of where the arrows will lead you. Click on your own risk.</small></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 u-server">
                <p class="text-center"><a href="https://withknown.com/?utm_source=footer&utm_medium=installation" class="u-platform" rel="noopener">Known v1.2.4</a></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 u-badges text-center">
                <a href="https://indieweb.org/" rel="noopener"><img src="https://johanbove.info/img/badges/indieweb.png" alt="IndieWebCamp" style="image-rendering: pixelated;"
                        width="80" height="15"></a>
                <a href="http://microformats.org/" rel="noopener"><img src="https://johanbove.info/img/badges/microformats.png" alt="Microformats"
                        style="image-rendering: pixelated;" width="80" height="15"></a>
                <a href="https://indieweb.org/Webmention" rel="noopener"><img src="https://johanbove.info/img/badges/webmention.png" alt="Webmention"
                        style="image-rendering: pixelated;" width="80" height="15"></a>
                <a href="https://www.w3.org/html/" rel="noopener"><img src="https://johanbove.info/img/badges/w3c-valid-html.png" alt="W3C HTML5"
                        style="image-rendering: pixelated;" width="80" height="15"></a>
                <a rel="license noopener" href="https://creativecommons.org/licenses/by-nc-sa/4.0/"><img alt="Creative Commons Licence" style="image-rendering: pixelated;"
                        src="<?php echo \Idno\Core\Idno::site()->config()->getStaticURL()?>gfx/other/cc_80x15.png"></a></a>
                

            </div>
        </div>
        <div class="row" style="margin-top:3rem;">
            <div class="col-md-12 u-green-bages text-center">
                <a href="https://www.thegreenwebfoundation.org/green-web-check/?url=http%3A%2F%2Fjohanbove.info" rel="noopener noreferrer">This website is hosted <strong style="color:#76c22d" title="aka green">eco-friendly</strong>.</a>                
            </div>
        </div>
    </div>
</div>
<?php
}
