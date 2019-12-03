<?php
if (isset($vars['object'])) {
    $object = $vars['object'];
}

if (isset($object) && !empty($object)) {
?>
<div class="blank-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12 u-webring">
                <p class="text-center">
                    <a href="https://xn--sr8hvo.ws/%F0%9F%94%B6%E2%80%BC%EF%B8%8F%F0%9F%94%9C/previous" rel="nofolllow noopener">←</a>
                    An IndieWeb Webring 🕸💍
                    <a href="https://xn--sr8hvo.ws/%F0%9F%94%B6%E2%80%BC%EF%B8%8F%F0%9F%94%9C/next" rel="nofollow noopener">→</a>
                </p>
                <p class="text-center" style="max-width:500px;margin:auto auto 30px;font-style:italic;line-height:1"><small>The web ring leads to many interesting personal sites worth exploring,
                        but I am not in control of where the arrows will lead you. Click on your own risk.</small></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 u-server">
                <p class="text-center"><a href="https://withknown.com/?utm_source=footer&utm_medium=installation" class="u-platform" rel="noopener">Known v1.0.0-rc.2.2-jbove</a></p>
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
    </div>
</div>
<?php
}
