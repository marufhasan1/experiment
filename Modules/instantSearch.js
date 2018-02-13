<script type="text/javascript">
  var $rows = $('#table .tb_row');
  $('#search').keyup(function(){
    
    var val = $(this).val(),
      reg = RegExp(val, 'i'),
      text;
    
    $rows.show().filter(function() {
      text = $(this).text().replace(/\s+/g, ' ');
      return !reg.test(text);
    }).hide();
  });
</script>