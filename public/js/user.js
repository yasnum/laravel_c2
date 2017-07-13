var page = 1;
var current_page = 1;
var total_page = 0;
var is_ajax_fire = 0;

manageData();
/* manage data list */
function manageData() {
    $.ajax({
        dataType: 'json',
        url: url,
        data: {page:page}
    }).done(function(data){

    	total_page = data.last_page;
    	current_page = data.current_page;

    	$('#pagination').twbsPagination({
	        totalPages: total_page,
	        visiblePages: current_page,
	        onPageClick: function (event, pageL) {
	        	page = pageL;
                if(is_ajax_fire != 0){
	        	  getPageData();
                }
	        }
	    });

    	manageRow(data.data);
        is_ajax_fire = 1;
    });
}

$.ajaxSetup({
    headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
});

/* Get Page Data*/
function getPageData() {
	$.ajax({
    	dataType: 'json',
    	url: url,
    	data: {page:page}
	}).done(function(data){
		manageRow(data.data);
	});
}

/* Add new Item table row */
function manageRow(data) {
	var	rows = '';
	$.each( data, function( key, value ) {
	  	rows = rows + '<tr>';
	  	rows = rows + '<td>'+value.name+'</td>';
       	rows = rows + '<td>'+value.username+'</td>';  
        rows = rows + '<td>'+value.email+'</td>';  
        rows = rows + '<td>'+value.role.name+'</td>';    
	  	rows = rows + '<td data-id="'+value.id+'">';
        rows = rows + 
        '<button data-toggle="modal" data-target="#edit-iteme" class="btn btn-minier btn-primary ace-icon fa fa-pencil bigger-120"></button> ';
        rows = rows + 
        '<button class="btn btn-minier btn-danger remove-item ace-icon fa fa-trash-o bigger-120"></button>';
        rows = rows + '</td>';
	  	rows = rows + '</tr>';
	});

	$("tbody").html(rows);
}

/* Create new Item 
<li>*/
$(".crud-submit").click(function(e){
    e.preventDefault();
    var form_action = $("#create-item").find("form").attr("action");
    var active = $("#create-item").find("input[name='active']").val();
    var role_id = $("#create-item").find("input[name='role_id']").val();
    var name = $("#create-item").find("input[name='name']").val();
    var username = $("#create-item").find("input[name='username']").val();
    var email = $("#create-item").find("input[name='email']").val();
    var password = $("#create-item").find("input[name='password']").val();
    $.ajax({
        dataType:'json', 
        type:'POST',
      //  url: 'http://127.0.0.1:8000/usere',
        //url: $(this).attr('action'),
        url: form_action,
        data:{active:active, role_id:role_id, name:name,
            username:username, email:email, password:password}
    }).done(function(data){ 
       getPageData();
         toastr.success('Item Add Successfully.', 'Success Alert', {timeOut: 5000});
          $(".modal").modal('hide');  
    });    
});

/* Remove Item */
$("body").on("click",".remove-item",function(){
    var id = $(this).parent("td").data('id');
    var c_obj = $(this).parents("tr");
    $.ajax({
        dataType: 'json',
        type:'delete',
        url: url + '/' + id,
    }).done(function(data){
        c_obj.remove();
        toastr.success('Item Deleted Successfully.', 'Success Alert', {timeOut: 5000});
        getPageData();
    });
});

/* Edit Item */
$("body").on("click",".edit-iteme",function(){
    var id = $(this).parent("td").data('id');
    var name = $(this).parent("td").prev("td").prev("td").text();
    var username = $(this).parent("td").prev("td").text();    
    var email = $(this).parent("td").prev("td").text();
 $("#edit-iteme").find("input[name='name']").val(name);
    $("#edit-iteme").find("input[name='username']").val(username);
   $("#edit-iteme").find("input[name='email']").val(email);
    $("#edit-iteme").find("form").attr("action",url + '/' + id);
}); 

/* Updated new Item */
$(".crud-submit-edit").click(function(e){
    e.preventDefault();
    var form_action = $("#edit-item").find("form").attr("action");
    var email = $("#edit-item").find("input[name='email']").val();
    
    $.ajax({
        dataType:'json',
        type:'PUT',
        url: form_action,
        data:{email:email}
    }).done(function(data){
       getPageData();
        $(".modal").modal('hide');
       toastr.success('Item Updated Successfully.', 'Success Alert', {timeOut: 5000});
         
    });
});