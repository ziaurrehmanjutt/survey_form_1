<br />
<br />
<br />
<br />
<!-- Vendor -->
<script src="<?= base_url('assets/') ?>vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url('assets/') ?>vendor/jquery.appear/jquery.appear.min.js"></script>
<script src="<?= base_url('assets/') ?>vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="<?= base_url('assets/') ?>vendor/jquery.cookie/jquery.cookie.min.js"></script>
<script src="<?= base_url('assets/') ?>vendor/popper/umd/popper.min.js"></script>
<script src="<?= base_url('assets/') ?>vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="<?= base_url('assets/') ?>vendor/common/common.min.js"></script>
<script src="<?= base_url('assets/') ?>vendor/jquery.validation/jquery.validate.min.js"></script>
<script src="<?= base_url('assets/') ?>vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
<script src="<?= base_url('assets/') ?>vendor/jquery.gmap/jquery.gmap.min.js"></script>
<script src="<?= base_url('assets/') ?>vendor/jquery.lazyload/jquery.lazyload.min.js"></script>
<script src="<?= base_url('assets/') ?>vendor/isotope/jquery.isotope.min.js"></script>
<script src="<?= base_url('assets/') ?>vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="<?= base_url('assets/') ?>vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="<?= base_url('assets/') ?>vendor/vide/jquery.vide.min.js"></script>
<script src="<?= base_url('assets/') ?>vendor/vivus/vivus.min.js"></script>

<!-- Theme Base, Components and Settings -->
<script src="<?= base_url('assets/') ?>js/theme.js"></script>

<!-- Current Page Vendor and Views -->

<!-- Current Page Vendor and Views -->
<script src="<?= base_url('assets/') ?>js/views/view.contact.js"></script>

<!-- Demo -->
<script src="<?= base_url('assets/') ?>js/demos/demo-finance.js"></script>

<!-- Theme Custom -->
<script src="<?= base_url('assets/') ?>js/custom.js"></script>

<!-- Theme Initialization Files -->
<script src="<?= base_url('assets/') ?>js/theme.init.js"></script>

<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script>
    $(document).ready(function() {
        $("#form0").validate();
        $("#form1").validate();
    });
</script>

<script>
$('input[type="range"]').on("change mousemove", function () {
    var val = ($(this).val() - $(this).attr('min')) / ($(this).attr('max') - $(this).attr('min'));

    $(this).css('background-image',
                '-webkit-gradient(linear, left top, right top, '
                + 'color-stop(' + val + ', #2f466b), '
                + 'color-stop(' + val + ', #d3d3db)'
                + ')'
                );
});</script>


</body>

</html>