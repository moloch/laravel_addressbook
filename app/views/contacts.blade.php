@extends('layout')

@section('content')
<script type=text/javascript>
  $(function() {
    var submit_form = function(e) {
      $.getJSON($SCRIPT_ROOT + '/get_contacts', {
        search_txt: $('input[name="search"]').val()
      }, function(data) {
       $('#contacts_table').empty();
        $.each(data,function(key,value){
         tr_html = '<td>'+value.first_name+'</td>';
         tr_html += '<td>'+value.last_name+'</td>';
         tr_html += '<td>'+value.phone_number+'</td>';
         tr_html += '<td><a href="edit/'+value.id+'">Edit</a></td>';
         $('#contacts_table').append('<tr>'+tr_html+'</tr>');
        });
      });
      return false;
    };

    $('input[type=text]').bind('keyup', function(e) {
      submit_form(e);
    });
  });
</script>
    <p><input type=text size=20 name=search></p>
    <table id="contacts_table"></table>
@stop
