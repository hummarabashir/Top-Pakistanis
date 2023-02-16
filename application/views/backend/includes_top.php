<link rel="stylesheet" href="<?php echo base_url() ?>assets/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css">
<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/font-icons/entypo/css/entypo.css">
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic">
<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.css">
<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/neon-core.css">
<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/neon-theme.css">
<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/neon-forms.css">
<!-- <link rel="stylesheet" href="<?php echo base_url() ?>vendor/css/style.css"> -->
<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/custom.css">


<?php
    $skin_colour = $this->db->get_where('settings' , array(
        'type' => 'skin_colour'
    ))->row()->description; 
    if ($skin_colour != ''):?>

    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/skins/<?php echo $skin_colour;?>.css">

<?php endif;?>

<?php if ($text_align == 'right-to-left') : ?>
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/neon-rtl.css">
<?php endif; ?>
<!-- <script src="<?php echo base_url();?>assets/js/jquery-1.11.0.min.js"></script> -->
<script src="<?php echo base_url();?>assets/js/jquery-3.2.1.min.js"></script>

        <!--[if lt IE 9]><script src="<?php echo base_url() ?>assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<link rel="shortcut icon" href="<?php echo base_url(); ?>vendor/images/content/logo-pk.png">
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/font-icons/font-awesome/css/font-awesome.min.css">

<link rel="stylesheet" href="<?php echo base_url();?>assets/js/vertical-timeline/css/component.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/js/datatables/responsive/css/datatables.responsive.css">


<!--Amcharts-->
<script src="<?php echo base_url();?>assets/js/amcharts/amcharts.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/js/amcharts/pie.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/js/amcharts/serial.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/js/amcharts/gauge.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/js/amcharts/funnel.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/js/amcharts/radar.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/js/amcharts/exporting/amexport.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/js/amcharts/exporting/rgbcolor.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/js/amcharts/exporting/canvg.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/js/amcharts/exporting/jspdf.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/js/amcharts/exporting/filesaver.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/js/amcharts/exporting/jspdf.plugin.addimage.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>vendor/js/ckeditor/ckeditor.js"></script>
<script>
    function checkDelete()
    {
        var chk=confirm("Are You Sure To Delete This !");
        if(chk)
        {
          return true;  
        }
        else{
            return false;
        }
    }
</script>
              <script>
           CKEDITOR.replace('editor3');
        </script>
        <script type="text/javascript">
    // Include this file AFTER both jQuery and bootstrap are loaded.
    $.fn.modal.Constructor.prototype.enforceFocus = function() {
      modal_this = this
      $(document).on('focusin.modal', function (e) {
        if (modal_this.$element[0] !== e.target && !modal_this.$element.has(e.target).length 
        && !$(e.target.parentNode).hasClass('cke_dialog_ui_input_select') 
        && !$(e.target.parentNode).hasClass('cke_dialog_ui_input_textarea')
        && !$(e.target.parentNode).hasClass('cke_dialog_ui_input_text')) {
          modal_this.$element.focus()
        }
      })
    };
</script>