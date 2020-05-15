

$('#AM').click(function(e){
                e.preventDefault();
                $('.content').hide();
                $('.kcard').hide();
                $('#sellerrequestbutton').hide();
                $('#amh').html('All users');
               showu(0);
              });
          $('#MA').click(function(e){
                e.preventDefault();
                $('.kcard').hide();
                $('.content').hide();
                $('#sellerrequestbutton').hide();
                $('#amh').html('All Admins');
               showu(1);
              });

          $('#MS').click(function(e){
              e.preventDefault();
               $('.content').hide();
               $('.kcard').hide();
               $('#sellerrequestbutton').show();
               $('#amh').html('All Sellers');
               showu(2);
             
              
            });

           $('#MC').click(function(e){
              e.preventDefault();
               $('.content').hide();
               $('.kcard').hide();
               $('#sellerrequestbutton').hide();
               $('#amh').html('All Customers');
                showu(3);
              
            });

           $('#sellerrequestbutton').click(function(e){
                 e.preventDefault();
                 $('.content').hide();
               $('.kcard').hide();
               $('#amh').html('All Seller Request');
                showu(4);

           })
           $(document).on("click",'#deletefromall',function(e){
            e.preventDefault();
            var id=$(this).val();
                 deleteuser(id,0);
                 
           });
           $(document).on("click",'#deletefromadmin',function(e){
                e.preventDefault();
                 var id=$(this).val();
                 deleteuser(id,1);
                 
           });
           $(document).on("click",'#deletefromseller',function(e){
                 e.preventDefault();
                 var id=$(this).val();
                 deleteuser(id,2);
                 
           });
           $(document).on("click",'#deletefromcustomer',function(e){
                 e.preventDefault();
                 var id=$(this).val();
                 deleteuser(id,3);
                 
           });

           $(document).on("click",'#makeseller0',function(e){
                 e.preventDefault();
                 var id=$(this).val();
                 makeseller(id,0);
                 
           });
           $(document).on("click",'#makeseller1',function(e){
                 e.preventDefault();
                 var id=$(this).val();
                 makeseller(id,1);
                 
           });
            $(document).on("click",'#makeseller3',function(e){
                 e.preventDefault();
                 var id=$(this).val();
                 makeseller(id,3);
                 
           });
            $(document).on("click",'#makeseller4',function(e){
                 e.preventDefault();
                 var id=$(this).val();
                 makeseller(id,4);
                 
           });

 $(document).on("click",'#makeadmin0',function(e){
                 e.preventDefault();
                 var id=$(this).val();
                 makeadmin(id,0);
                 
           });
 $(document).on("click",'#makeadmin2',function(e){
                 e.preventDefault();
                 var id=$(this).val();
                 makeadmin(id,2);
                 
           });
 $(document).on("click",'#makeadmin3',function(e){
                 e.preventDefault();
                 var id=$(this).val();
                 makeadmin(id,3);
                 
           });
 $(document).on("click",'#makeadmin4',function(e){
                 e.preventDefault();
                 var id=$(this).val();
                 makeadmin(id,4);
                 
           });

 $(document).on("click",'#makecustomer0',function(e){
                 e.preventDefault();
                 var id=$(this).val();
                 makecustomer(id,0);
                 
           });
 $(document).on("click",'#makecustomer1',function(e){
                 e.preventDefault();
                 var id=$(this).val();
                 makecustomer(id,1);
                 
           });
 $(document).on("click",'#makecustomer2',function(e){
                 e.preventDefault();
                 var id=$(this).val();
                 makecustomer(id,2);
                 
           });
