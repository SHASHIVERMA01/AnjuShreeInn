
// // get menu
// $(document).ready(function(){
//     $.ajax({
//         url:'/home/admin/covent/menuget',
//         type:'get',
//         success:function(res){
//             $('#menu').append('<option value="">select menu</option>');
//             $.each(res,function(key,val){
//                 // console.log(val.id+val.name+val.menu_slug);
//                 $('#menu').append('<option value="'+val.id+'">'+val.name+'</option>');
//             });
//         },
//         error:function(res){
//             console.table('err',res);
//         }
//     });   
// });

// // product onchange menu bind submenu
// function getSelectVal(val){
//     console.log(val);
//       $('#menu_id').val(val);
//     // $(document).ready(function(){
//         $.ajax({
//             url:'/home/admin/covent/submenuget/'+val,
//             type:'get',
//             success:function(res){
//                 // submenu bind 
//                 console.log(res,'resssssssssss');
//                 $('#submenu').empty();
//                 $('#submenu').append('<option value="">select submenu</option>');
//                 $.each(res,function(key,val){     
//                     $('#submenu').append('<option value="'+val.id+'">'+val.name+'</option>');
//                 });
//             },
//             error:function(res){
//                 console.table('err',res);
//             }
//         });
//     // });
// }


// // (product) menu value get on change
// function getSelectValEdit(val){
//     var val_get = val.split('//');
//     var id = val_get[0];
//     console.log(id);
//     // $(document).ready(function(){
//         $.ajax({
//             url:'/home/admin/covent/submenuget/'+id,
//             type:'get',
//             success:function(res){
//                 $('#submenuedit').empty();
//                 $('#submenuedit').append('<option value="">select submenu</option>');
//                 $.each(res,function(key,val){     
//                     var mm = val.submenu.replace(/ /g,'-');      
//                     $('#submenu').append('<option value='+val.id+'//'+mm+'>'+val.submenu+'</option>');
//                 });
//             },
//             error:function(res){
//                 console.table('err',res);
//             }
//         });
//     // });
// }

// function getsubmenu_slug(slug){
//     document.getElementById('submenu_slug').value="";
//     var slug_get = slug.split('//')
//     document.getElementById('submenu_slug').value=slug_get[1].toLowerCase();
// }



//     $(document).ready(function(){
//         // get menu name form menu table  and bind into admin.slider.slider(page)
//         $.ajax({
//             url:'/api/sliderPageLink',
//             type:'get',
//             success:function(res){
//                 $('#pagelink').empty();
//                 $('#pagelink').append('<option value="">select pagelink</option>');
//                 $.each(res,function(key,val){         
//                     $('#pagelink').append('<option value='+val.submenu_slug+'>'+val.submenu+'</option>');
//                 });
//             },
//             error:function(res){
//                 console.table('err',res);
//             }
//         });
//     })

//         // get prodcut name form products table  and bind into admin.productDetials.productDetails(page)
//     function getSubSelectVal(val){
//         var val_get = val.split('//');
//         var id = val_get[0];
//         console.log(id,'submenu');
//         $.ajax({
//             url:'/api/productItemList/'+id,
//             type:'get',
//             success:function(res){
//                 $('#productList').empty();
//                 $('#productList').append('<option value="">select Item</option>');
//                 $.each(res,function(key,val){         
//                     $('#productList').append('<option value='+val.id+'//'+val.product_slug+'>'+val.product+'</option>');
//                 });
//             },
//             error:function(res){
//                 console.table('err',res);
//             }
//         });
//     }





// // var i=0;
// // function addfield(){
// //     ++i;
// //         $('#addform').append('<hr><div class="row" id="no'+i+'"><div class="col-md-4"><div class="form-group"><label for="exampleInputEmail1">Email address</label><input type="text" class="form-control"></div></div><div class="col-md-4"><div class="form-group"><label for="exampleInputEmail1">Email address</label><input type="text" class="form-control"></div></div><div class="col-md-4"><div class="form-group"><label for="exampleInputEmail1">Email address</label><input type="text" class="form-control"></div></div><div class="col-md-4"><div class="form-group"><label for="exampleInputEmail1">Email address</label><input type="text" class="form-control"></div></div><div class="col-md-3"><div class="form-group"><label for="exampleInputEmail1">Email address</label><input type="text" class="form-control"></div></div><div class="col-md-4"><div class="form-group"><label for="exampleInputEmail1">Email address</label><input type="text" class="form-control"></div></div><div class="col-md-1"><a class="fa fa-times" onclick="remfield('+i+')"></a></div></div>');
// //         console.log(i);
// // }
// // function remfield(id){
// //     $('#no'+id).remove();
// // }