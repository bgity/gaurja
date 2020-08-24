<?php include 'header.php'; ?>
<div class="content">
          <div class="container-fluid">
                <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div >
                    
                    <!--  <a href="javascript:void(0)"   id="addproduct"> <i class="material-icons">add</i><span style="font-size: 18px">Add Product</span> </a> -->
                    <button class="card-header card-header-icon btn btn-primary" data-background-color="rose" id="addvideos">+ Add Videos</button>
                    <!--  <a href="javascript:void(0)"   id="addproduct"> <i class="material-icons">add</i><span style="font-size: 18px">Add Product</span> </a> -->
                </div>  


               <div class="card-content">
                    <h3 class="card-title">Video Galley  </h3>

                    <div class="table-responsive">
                        <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                            <thead>
                                <tr>

               
                                    <th>#</th>
                                    <th >Videos Title</th>
                                    <th>Youtube Link</th>
                                    <th>Image</th>
                                    <th  class="text-center">Action</th>

                                    
                                </tr>
                            </thead>
                            <tbody id="tdbl">
                                
                            </tbody>
                        </table>
                    </div>
                </div>
        </div>
    </div>
    </div>            
</div>
</div>

<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Videos</h4>
        </div>
  <form action="action.php" method="post" id="editformid" enctype="multipart/form-data">     
        
        <div class="modal-body">

           <div class="form-group">
               <label>Videos Title:</label>
             <input type="text" class="form-control" name="videos_title" id="videos_title" placeholder="Enter videos Title" required="">
           </div>

           <div class="form-group">
               <label>Videos Link:</label>
             <input type="text" class="form-control" name="videos_link" id="videos_link" placeholder="Enter videos Link" required="">
           </div>

           <div class="form-group">
               <label>Videos Author:</label>
             <input type="text" class="form-control" name="videos_author" id="videos_author" placeholder="Enter Videos Author" required="">
           </div>

           <div class="form-group">
                <label>Videos Content:</label>
             <textarea class="form-control" name="videos_content" id="videos_content" required=""></textarea>
           </div>
                <script>
                    CKEDITOR.replace('videos_content');

                </script> 
         
        <div class="form-group">
          <span id="preimage"></span>
             <input type="hidden" name="preimag" id="pimage">
             <input type="hidden" name="action" id="action" value="editsubmit">
             <input type="hidden" name="bid" id="bid">
             <input type="file" class="form-control" name="videos_image" id="videos_image" required="">
           </div>
            <div class="form-group">
             <input type="submit" class="btn btn-primary" name="edit-btn" id="idbtn" value="">
           </div>
           <div id="loading" style="display:none"><img src="images/giphy.gif" alt="processing..." style="width:100px;" /></div>
         </div>

   </form> 
         
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>



</div>

<script type="text/javascript">
   $(document).ready(function(){
         load_data();
$("#addvideos").click(function(){
   $('#editformid')[0].reset();
   CKEDITOR.instances.videos_content.setData('');
    $('#preimage').html("");
  $("#action").val('Insert');
  $("#idbtn").val('Add');
  $("#myModal").modal('show');
});

       });

  function load_data()
  {
      

     $.ajax({
            url:"videos/action.php",
            method:"post",
            data:{action:'selectall'},
            success:function(response)
            {
               
               $("#tdbl").html(response);
             
              
            }
          });
  } 
function editvideos(productid)
{
   $.ajax({
            url:"videos/action.php",
            method:"post",
            data:{eid:productid,action:'edit'},
            success:function(response)
            {
               var object1 = JSON.parse(response);
               $("#videos_title").val(object1.video_title);
               $("#videos_link").val(object1.youtube_link);
               $("#bid").val(object1.id);
               // $("#videos_content").val(object1.videos_content);
               CKEDITOR.instances.videos_content.setData(object1.video_content);
                $('#videos_image').prop('required',false);
               $("#action").val('editsubmit');
               $("#videos_author").val(object1.video_author); 
               $("#pimage").val(object1.video_image);
               $("#preimage").html( "<img src='../"+object1.video_image+"' style='width:100px;'>" );
               $("#idbtn").val('Save Changes');
               $("#myModal").modal('show');
          
              
            }
          });
  
}

$(function(){
  $("#editformid").on('submit', function(event){
       event.preventDefault();
         
       var name = $("#videos_title").val(); 
       var details = CKEDITOR.instances.videos_content.getData();
       var pid = $("#proid").val();
  
       if ($("#videos_image").val()=='') 
       {
        var image = $("#pimage").val();
       }
       else
       {
          var extension = $("#videos_image").val().split('.').pop().toLowerCase();
          if (jQuery.inArray(extension,['png','jpg','jpeg'])==-1) 
          {
            alert("Invalid Image file");
           
          }  
          else
          {
            var image = $("#videos_image").val();
            
          }
       }
           CKEDITOR.instances.videos_content.updateElement();
            var action = 'editsubmit';
           var formData1 = new FormData(editformid);
            $.ajax({
              url:"videos/action.php",
              method:"post",
              data:formData1,
              cache:false,
            contentType: false,
            processData: false, 
             beforeSend:function(){                                                                                         
                $('#loading').show();  
               $("#idbtn").prop("disabled",true);
                    },                                                                                                             
                    complete:function(){                                                                                           
                   $("#loading").hide();
     $("#idbtn").prop("disabled",false);                         
                    },
              success:function(data1)
              {
                 
                 if($.trim(data1)=='Updeted')
                 {
                    swal("Video Updeted Successfully!");
                 }
                 else if($.trim(data1)=='Inserted')
                 {
                     swal("Video Posted Successfully!");
                 }
                 else
                 {
                     swal("Error", "Something went wrong", "error", {
  button: "Aww yiss!",
});
                 }
                  $("#myModal").modal('toggle');
                  load_data();
                
              }
            });
        
          
     });
});
  

  function deleteservice(sid)
{
 if(confirm("Are you sure to Delete this video?"))
 {
    $.ajax({
            url:"videos/action.php",
            method:"post",
            data:{sid:sid,action:'delete'},
             beforeSend:function(){                                                                                         
                $('#'+sid+'dltebtn').val('...');                                                                                
                    },                                                                                                             
                    complete:function(){                                                                                           
                        $('#'+sid+'dltebtn').val('Delete');                                                                    
                    },
            success:function(response)
            {
              
         if($.trim(response)=='Deleted')
                 {
                     
                    swal("Video Deleted Successfully!");
                     
                 }
                 
                 else
                 {
                     swal("Error", "Something went wrong", "error", {
  button: "Aww yiss!",
});
                 }
               load_data(); 
            }
          }); 
 }
 else
 {
     return false;
 }
    
}
 </script>



    <?php
include 'footer.php';




?>