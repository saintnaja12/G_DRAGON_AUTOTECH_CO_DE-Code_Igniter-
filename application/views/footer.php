<!--   Core JS Files   -->
 <!-- Core -->
 <script src="<?php echo base_url(); ?>assets argon/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>assets argon/vendor/popper/popper.min.js"></script>
  <script src="<?php echo base_url(); ?>assets argon/vendor/bootstrap/bootstrap.min.js"></script>
  <script src="<?php echo base_url(); ?>assets argon/vendor/headroom/headroom.min.js"></script>
  <!-- Argon JS -->
  <script src="<?php echo base_url(); ?>assets argon/js/argon.js?v=1.1.0"></script>
  <!--Datepicker -->
  <script src="<?php echo base_url('/assets argon/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js'); ?>"></script>

  <script src="<?php echo base_url('/EZview/EZView.js'); ?>"></script>
  <script src="<?php echo base_url('/EZview/draggable.js'); ?>"></script>

  
  </body>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>game/css/jquery.datetimepicker.min.css"/>
<script type='text/javascript' src="<?php echo base_url(); ?>game/js/jquery.datetimepicker.js"></script>


<script type="text/javascript">
    $(document).ready(function() {
        $('#datetimepicker').datetimepicker();
    });
    $('#datetimepicker').datetimepicker({
     format:'Y-m-d',
     timepicker:false,
     minDate:'-1970/01/01', //yesterday is minimum date
     maxDate:'+1970/01/03' //tomorrow is maximum date
});
jQuery(function(){
 jQuery('#datetimepickerstart').datetimepicker({
  format:'Y/m/d',
  onShow:function( ct ){
   this.setOptions({
    maxDate:jQuery('#datetimepickerend').val()?jQuery('#datetimepickerend').val():false
   })
  },
  timepicker:false
 });
 jQuery('#datetimepickerend').datetimepicker({
  format:'Y/m/d',
  maxDate:'+1970/01/05',
  onShow:function( ct ){
   this.setOptions({
    minDate:jQuery('#datetimepickerstart').val()?jQuery('#datetimepickerstart').val():false
   })
  },
  timepicker:false
 });
});
</script>




<script type="text/javascript">

      function Change_Brand()
      {
          var val = $("#Brand1").val()
          
          $.get("<?=base_url('Owner/select/')?>"+val, 
              function (data) {
                  
                $("#gen1").html(data)

              }
          );
      }
      function Change_Gen()
      {
          var val = $("#gen1").val()
          
          $.get("<?=base_url('Owner/selectseat/')?>"+val, 
              function (data) {
                  
                $("#seat1").html(data)

              }
          );

          var val = $("#gen1").val()

          $.get("<?=base_url('Owner/selectfuel/')?>"+val, 
              function (data) {
                  
                $("#fuel1").html(data)

              }
          );

          var val = $("#gen1").val()

          $.get("<?=base_url('Owner/selectfuel/')?>"+val, 
              function (data) {
                  
                $("#fuel3").html(data)

              }
          );

      }
      function Change_Fuel()
      {
          var val = $("#fuel1").val()
          
          $.get("<?=base_url('Owner/selectfuel2/')?>"+val, 
              function (data) {
                  
                $("#fuel2").html(data)

              }
          );
      }
     

      // Year Picker 
    
       $(".toggle-password").click(function() {

        $(this).toggleClass("fa-eye fa-eye-slash");
        var input = $($(this).attr("toggle"));
        if (input.attr("type") == "password") {
        input.attr("type", "text");
        } else {
        input.attr("type", "password");
}
});
  </script>
  <script>
  $(function(){

  $('img').EZView();
});
</script>

<!-- <script type='text/javascript'>
$('input:radio[name="ins"]').change(
    function(){
        if ($(this).is(':checked') && $(this).val() == 'Yes') {
            // append goes here
            alert("Allot Thai Gayo Bhai");
        }
    });
</script> -->
<script type='text/javascript'>
$("input:radio[name='ins']").change(function(){
    
    if(this.value =='0.25'){
      console.log('0.25');
        //$('#select-table > .roomNumber').attr('enabled',false);
    }else
    {
      console.log('0.3');
    }
});
</script>

<script>
  $("input[name='end']").change(function(){
         var x = document.getElementById("datetimepickerstart").value; 
         var y = document.getElementById("datetimepickerend").value;
         var dateFirst = moment(x, 'YYYY/MM/DD');
         var dateSecond = moment(y, 'YYYY/MM/DD');
         var ngo = moment.duration(dateSecond.diff(dateFirst)).add(1,'days').asDays();
        console.log(ngo);
        console.log(x,y);
        console.log(<?php echo $idc ?>);
        var id = <?php echo $idc ?>;
  $.get("<?=base_url('Rentnext/selectdate/')?>"+id, 
              function (data) {
                  
                $("#total").text(data * ngo + " บาท")
                console.log(data);
              }
          );
  })
</script>
 
 <script>
 function Change_date()
      {
          var val = $("#datetimepickerend").val()
          
          $.get("<?=base_url('Rentnext/selectdate/')?>"+val, 
              function (data) {
                  
                $("#price").html(data)

              }
          );
      }</script>
