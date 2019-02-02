
<footer class="footer">
    <div class="container">
        <div class="row row-grid align-items-center">
            <div class="col-lg-12 text-lg-center btn-wrapper justify-content-center">
                <a href="https://wpa.qq.com/msgrd?v=3&amp;uin=512742539&amp;site=qq&amp;menu=yes" target="_blank" class="btn btn-neutral btn-icon-only btn-qq btn-round btn-lg wow fadeInUpBig" data-toggle="tooltip" data-original-title="QQ群512742539"><i class="fa fa-qq"></i></a>
                <a href="http://mail.qq.com/cgi-bin/qm_share?t=qm_mailme&email=meow@lolita.blue" target="_blank" class="btn btn-neutral btn-icon-only btn-mail btn-round btn-lg wow fadeInUpBig" data-toggle="tooltip" data-original-title="Email：tamen2009@163.com"><i class="fa fa-envelope"></i></a>
            </div>
        </div>
        <hr>
        <div class="row align-items-center justify-content-md-between">
            <div class="col-md-12">
                <div class="copyright text-center">
                    © 2019 <a href="https://mkm.st" target="_blank" ><?php $this->options->title(); ?> </a>. Theme by <a href="https://mkm.st"  target="_blank" >Firewood Cutter
                    </a> | CatLee
                    <div style="display:none;"><script type="text/javascript" src="//js.users.51.la/19786753.js"></script>			</div>
                </div>
            </div>
        </div>
    </div>
</footer>
<div id="lovexin0" style="position:fixed;bottom:40px;right: 15px;width:60px;height:60px;z-index:999;">
    <img src="https://moguos.oss-cn-shenzhen.aliyuncs.com/lolimeow/assets/images/F2hW7Q.gif" style="max-width: 100%!important;"></div>
<script language="javascript">
    lastScrollY=0;
    function heartBeat0(){
        diffY=document.body.scrollTop;
        percent=.1*(diffY-lastScrollY);
        if(percent>0)percent=Math.ceil  (percent);
        else percent=Math.floor(percent);
        document.all.lovexin0.style.pixelTop+=percent;
        lastScrollY=lastScrollY+percent;}
    window.setInterval("heartBeat0()",1);
</script>
<script src="<?php $this->options->themeUrl('assets/vendor/popper/popper.min.js'); ?>"></script>
<script src="<?php $this->options->themeUrl('assets/vendor/bootstrap/bootstrap.min.js'); ?>"></script>
<script src="<?php $this->options->themeUrl('assets/vendor/headroom/headroom.min.js'); ?>"></script>
<script src="<?php $this->options->themeUrl('assets/js/wow.min.js'); ?>"></script>
<script src="<?php $this->options->themeUrl('assets/js/theme.js'); ?>"></script>
</body>
</html>