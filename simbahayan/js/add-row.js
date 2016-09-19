$(document).ready(function(){
      var i=1;
     $("#add_ppf").click(function(){
      $('#ppf'+i).html("<td>"+ (i+1) +"</td><td><input name='name"+i+"' type='text' placeholder='Time' class='form-control input-md'  /> </td><td><input  name='mail"+i+"' type='text' placeholder='Description'  class='form-control input-md'></td><td><input  name='mobile"+i+"' type='text' placeholder='Name of Person/Group'  class='form-control input-md'></td>");

      $('#prog_flow').append('<tr id="ppf'+(i+1)+'"></tr>');
      i++; 
  });
     $("#delete_ppf").click(function(){
    	 if(i>1){
		 $("#ppf"+(i-1)).html('');
		 i--;
		 }
	 });

});

/*Personnel*/
$(document).ready(function(){
      var i=1;
     $("#add_per").click(function(){
      $('#per'+i).html("<td>"+ (i+1) +"</td><td><input name='name"+i+"' type='text' placeholder='Item' class='form-control input-md'  /> </td><td><input  name='mail"+i+"' type='text' placeholder='Description'  class='form-control input-md'></td><td><input  name='mobile"+i+"' type='text' placeholder='CSF'  class='form-control input-md'></td> <td><input  name='mobile"+i+"' type='text' placeholder='Organization Counterpart'  class='form-control input-md'></td> <td><input  name='mobile"+i+"' type='text' placeholder='Community Counterpart'  class='form-control input-md'></td>");

      $('#personnel').append('<tr id="per'+(i+1)+'"></tr>');
      i++; 
  });
     $("#delete_per").click(function(){
       if(i>1){
     $("#per"+(i-1)).html('');
     i--;
     }
   });

});


/*Operations and Logistics*/
$(document).ready(function(){
      var i=1;
     $("#add_opslog").click(function(){
      $('#opslog'+i).html("<td>"+ (i+1) +"</td><td><input name='name"+i+"' type='text' placeholder='Item' class='form-control input-md'  /> </td><td><input  name='mail"+i+"' type='text' placeholder='Description'  class='form-control input-md'></td><td><input  name='mobile"+i+"' type='text' placeholder='CSF'  class='form-control input-md'></td> <td><input  name='mobile"+i+"' type='text' placeholder='Organization Counterpart'  class='form-control input-md'></td> <td><input  name='mobile"+i+"' type='text' placeholder='Community Counterpart'  class='form-control input-md'></td>");

      $('#operationslog').append('<tr id="opslog'+(i+1)+'"></tr>');
      i++; 
  });
     $("#delete_opslog").click(function(){
       if(i>1){
     $("#opslog"+(i-1)).html('');
     i--;
     }
   });

});


/*Materials and Supplies*/
$(document).ready(function(){
      var i=1;
     $("#add_mat").click(function(){
      $('#materials'+i).html("<td>"+ (i+1) +"</td><td><input name='name"+i+"' type='text' placeholder='Item' class='form-control input-md'  /> </td><td><input  name='mail"+i+"' type='text' placeholder='Description'  class='form-control input-md'></td><td><input  name='mobile"+i+"' type='text' placeholder='CSF'  class='form-control input-md'></td> <td><input  name='mobile"+i+"' type='text' placeholder='Organization Counterpart'  class='form-control input-md'></td> <td><input  name='mobile"+i+"' type='text' placeholder='Community Counterpart'  class='form-control input-md'></td>");

      $('#materials').append('<tr id="materials'+(i+1)+'"></tr>');
      i++; 
  });
     $("#delete_mat").click(function(){
       if(i>1){
     $("#materials"+(i-1)).html('');
     i--;
     }
   });

});

/*Others*/
$(document).ready(function(){
      var i=1;
     $("#add_others").click(function(){
      $('#others'+i).html("<td>"+ (i+1) +"</td><td><input name='name"+i+"' type='text' placeholder='Item' class='form-control input-md'  /> </td><td><input  name='mail"+i+"' type='text' placeholder='Description'  class='form-control input-md'></td><td><input  name='mobile"+i+"' type='text' placeholder='CSF'  class='form-control input-md'></td> <td><input  name='mobile"+i+"' type='text' placeholder='Organization Counterpart'  class='form-control input-md'></td> <td><input  name='mobile"+i+"' type='text' placeholder='Community Counterpart'  class='form-control input-md'></td>");

      $('#others').append('<tr id="others'+(i+1)+'"></tr>');
      i++; 
  });
     $("#delete_others").click(function(){
       if(i>1){
     $("#others"+(i-1)).html('');
     i--;
     }
   });

});