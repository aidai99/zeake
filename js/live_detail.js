var user_type = null;
var autoRefreshTimes ;
$(function(){
	
	if($.cookie('bz')!==undefined || $.trim($.cookie('bz'))!=="") { 
		userinfo();
	}
	
	if($.cookie('autoRefresh')==="true") { 
		autoRefreshTimes = setTimeout(function(){window.location.reload(true);},30000);//一分钟刷一次
		$("#auto_refresh").addClass("on"); 
	}
	
	$(".refresh_now").click(function(){
		window.location.reload(true);
	});
	
	$("#auto_refresh").click(function(){
		$(this).toggleClass("on");
		if($(this).hasClass("on")){
			$.cookie('autoRefresh',"true",{ expires:365 });
			autoRefreshTimes = setTimeout(function(){window.location.reload(true);},30000);//一分钟刷一次
		}else{
			$.cookie('autoRefresh',"false",{ expires:365 });
			window.clearTimeout(autoRefreshTimes); 
		}
	});
});

function live_comment(id){
	$.ajax({
		url : golbalIp+"/main/live_comment",
		type:"get",dataType:"json",
		data:{skipnum:0,length:100,id:id},
		success:function(data){
			
			var list = data.data.list;
			if(list == null)return ;
			var img="/images/head_sculpture.png";
			
			$.each(list,function(k,v){
				var dn = k > 4 ? "dn" : "";
				var face = v.member.img;
				if(face == null)face = img;
				var html='<dd k="'+k+'" class="f_cf '+dn+'">';
				html+='<div class="head f_pr f_fl"><img src="'+face+'" width="100%" class="f_vat face"/></div>';
				html+='<div class="f_pr name_time_content">';
				html+='<div class="name_time">';
				html+='<div class="f_dib name f_toe f_vat  jump_personal_info" data-author_id="'+v.id+'">'+v.member.nickname+'</div>';
				html+='<div class="f_dib time">'+variable_obj.formatTimeBefore(v.created*1000)+'</div></div>';
				html+='</div>';
				html+='<div class="content">'+v.content+'</div>';
				html+='</dd>';
				$(".comment_list_"+id).append(html);
			});
			
			if(list.length > 5){
				$(".comment_list_"+id).append("<dd class='dd_more'><a href='javascript:;' onclick='show_dd("+id+");'>查看更多(" + ( list.length - 5 ) + ")</a></dd>");
			}
					
		}
	});
}

function show_dd(id){
	$(".comment_list_"+id+" dd").removeClass("dn");
	$(".comment_list_"+id+" dd.dd_more").addClass("dn");
}

function userinfo(){
	$.ajax({
		url:golbalIp+"/user/info",
		type:"get",
		dataType:"json",
		data:{"account":JSON.parse($.cookie('bz')).account,"token":JSON.parse($.cookie('bz')).token},
		beforeSend:function() { },
		success:function(data) { 
			if(data.code!=1){
				alert(data.message);return ;
			}
			user_type = data.data.type;
			
			if(user_type == 3){
				$(".edit_detail,.e_refresh").removeClass("dn");
				$("body").removeClass("user_type").addClass("admin_type");
			}
		}
	});
}