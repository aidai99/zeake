<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>文章详情</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" />
<meta name="msapplication-tap-highlight" content="no" />
<meta name="format-detection" content="telephone=no, email=no" />
<meta http-equiv="Cache-Control" content="no-transform" />
<meta http-equiv="Cache-Control" content="no-siteapp" /> 
<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
<meta http-equiv="Pragma" content="no-cache" />
<meta http-equiv="Expires" content="0" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
<link rel="shortcut icon" href="./images/favicon.ico?v=1.0" type="image/x-icon" />
<link rel="stylesheet" href="css/common.css?v=1.4" />
        <style type="text/css">
			body{
				font-family: PingFangSC-Medium;
			}
		</style>
   </head>
    
    
    <body>
 		
        <!--头部 start-->
    	<div class="header f_pr">
        	<div class="header_inner f_cf f_pr">
            	<h1 class="logo f_fl"><a href="index.php" class="f_full f_db f_two">知客网</a></h1>
                <div class="center_title f_tac f_fl"></div>
                <div class="nav_search f_fl">
                    <div class="search_box f_fr">
                    	<form action="search_result.php" class="f_full f_pr"><label class="for_text" for="keyword">想要找点什么</label><input type="text" class="keyword placeholder f_fl" id="keyword"/><input type="button" class="search_btn f_fr" value="搜索"/></form>
                    </div>
                	<ul class="f_fl">
                		<?php if(empty($pc_public_write)): if(is_array($column_nav)): $i = 0; $__LIST__ = $column_nav;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$nav): $mod = ($i % 2 );++$i;?><li class="f_fl"><a href="column_<?php echo ($nav["id"]); ?>.php" class="f_dib <?php if($column == $nav[id]): ?>on<?php endif; ?>"><?php echo ($nav["name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
<li class="f_fl"><a href="special_theme_page.php" class="f_dib <?php echo ($column0); ?>">知客专题</a></li>
<li class="f_fl"><a href="hall_of_fame.php" class="f_dib <?php echo ($column_1); ?>">名人堂</a></li><?php endif; ?>                     
                    </ul>
                </div>
                
                <?php if(!empty($pc_public_write)): ?><div class="pc_public_page f_pa">
                	<div class="pc_public_title f_tac">撰写文章</div>
                    <div class="fun_opera_btn f_pa f_cf">
                    	<a href="javascript:;" class="js_pc_update_article f_dn">更新</a>
                    	<a href="javascript:;" class="js_pc_public_article">发布</a>
                    	<a href="javascript:;" class="js_pc_public_preview">预览</a>
                        <a href="javascript:;" class="js_pc_public_save">保存</a>
                        <a href="javascript:;" class="js_pc_public_delete f_dn">删除</a>
                    </div>
                </div><?php endif; ?>
                
                
                <div class="l_r f_pa">
                	<div class="no_login "><a href="javascript:;" class="js_login_pop f_dib">登录</a><i class="f_dib"></i><a href="javascript:;" class="js_register_pop  f_dib">注册</a></div>
                    <div class="logined f_dn">
                    	<div class="f_dib f_vat name_man_head f_pr">
                    		<div class="man_head f_pr f_dib"><img src="images/weixin.png" class="f_vart"/><div class="head_mask f_pa"></div><div class="message_info f_pa"></div></div>
                        	<span class="f_dib f_toe name f_vat">xxxxxxxx</span>
                            <span class="f_dn f_toe name f_vat my_home_page_a" data-type="pc_home.php">我的主页</span>
                            <div class="pc_dropDown f_pa f_dn">
                            	<div class="pc_dropDown_inner">
                                    <a href="pc_home.php">个人中心</a>
                                    <a href="pc_message.php">消息通知<i class="f_dib message_num">76</i></a>
                                    <a href="pc_public.php">发表文章</a>
                                    <a href="pc_my_hall.php">我的名人堂</a>
                                    <a href="pc_personal_info.php">账户设置</a>
                                    <a href="javascript:;" class="js_logout">退出</a>
                                </div>
                            </div>
                        </div>
                    	<a href="javascript:;" class="js_logout f_dib logout">退出</a>
                    </div>
                </div>
                <div class="mobile_nav f_pa f_dn"><div class="mobile_ico f_pa"></div><div class="mobile_mask f_pa"></div></div>
            </div>
        </div>
        <!--头部   end-->
        
        
        <!--主内容  start-->
        <div class="main_content f_pr " data-type="article_page">
        	<div class="wbg">
        	<div class="main_contnet_inner f_pr ">
            
            	<!--封面图和头像昵称 start-->
            	<div class="cover_nickName_head">
                	<!--封面图 start-->
                    <div class="cover_unit"><img src="<?php echo ($data["data"]["img"]); ?>"  class="f_vat" width="100%"/></div>
                    <!--封面图      end-->
                    
                    <div class="head_name dn">
                    	<div class="head_unit f_ofh"><img src="images/head_sculpture.png" width="100%" class="f_vat"/></div>
                    	<div class="nickName_unit f_toe f_tac jump_personal_info"></div>
                    </div>
                    
                </div>
                <!--封面图和头像昵称   end-->
                
                <div class="article_detail">
                
                	<!--图文详情  start-->
                    <div class="article_detail_unit">
                    	<div class="title f_tac" id="title" ><?php echo ($data["data"]["title"]); ?></div>
                        
                        
                        <div class="a_author">
			               <span class="avatar fl"><img id="member_face" src="<?php echo ($data["data"]["member_info"]["img"]); ?>" width="100%" class="f_vat"/></span>
			                <span class="name fl" ><?php echo ($data["data"]["author"]); ?></span>
			                <span class="fr viewer"><?php echo ($data["data"]["pv"]); ?></span>
			                <!-- <span></span> -->
			                <span class="fr pub_time"><?php echo (date('Y.m.d',$data['data']['created'])); ?></span>
			                <!-- <span></span> -->
			            </div>
			            
            <div class="pulic_time f_tac"></div>

					<div class="article_detail_main">
						<div id="doc-content">
							<textarea style="display: none;"><?php echo ($data["data"]["content"]); ?></textarea>
						</div>
					</div>
				</div>
                    <!--图文详情    end-->
                    <div class="clearfix"></div>
                    <div class="article_tip_unit"></div>
                    <div class="clearfix"></div>
                    	<div class="detail">
                    			<div class="tabs w800 clearfix">
					                <?php if(is_array($data["data"]["tags"])): $i = 0; $__LIST__ = $data["data"]["tags"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$tags): $mod = ($i % 2 );++$i;?><span class="fl green_check pointer"><?php echo ($tags["name"]); ?></span><?php endforeach; endif; else: echo "" ;endif; ?>
					                <?php if(is_array($data["data"]["user_tags"])): $i = 0; $__LIST__ = $data["data"]["user_tags"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$tags): $mod = ($i % 2 );++$i;?><span class="fl pointer"><?php echo ($tags["name"]); ?></span><?php endforeach; endif; else: echo "" ;endif; ?>
					            </div>
                    	</div>
                    	<div class="clearfix"></div>
                    	<div class="detail">
                    	<p class="tc shenming">
			                <i class="">文章仅代表作者：<?php echo ($data["data"]["author"]); ?> 个人观点，与本站立场无关</i>
			            </p>
                    	</div>
                    	<div class="clearfix"></div>
                  <div class="detail">
                    
	                    <div class="share clearfix">
			                <span class="fl qq"></span>
			                <span class="fl weibo"></span>
			                <span class="fl weixin"></span>
			                <span class="fr collect tc collect_btn">收藏 | 0</span>
			                <span class="fr cool tc praise_btn">点赞 | 0</span>
			            </div>
		            </div>
            
            
                    <!--买和不买 start-->
                    <div class="buy_unit f_cf dn">
                        <div class="want_buy f_pa f_two">已选</div>
                        <div class="percent_unit f_pr">
                            <div class="percent_l f_pa" style="width:66.666666%"><b></b></div>
                            <div class="percent_r  f_pa" style="width:33.333333%"><b></b></div>
                        </div>
                        <div class="no_buy f_pa f_two">已选</div>
                    </div>
                    <!--买和不买   end-->
                    
                    <!--收藏、点赞、分享 start-->
                    <div class="collect_praise_share dn">
                        <div class="collect_btn f_dib f_vat"><b>0</b>收藏</div>
                        <div class="praise_btn f_dib f_vat"><b>0</b>点赞</div>
                        <div class="share_btn f_dib f_vat"><b>0</b>分享</div>
                    </div>
                    <!--收藏、点赞、分享   end-->
                    
                    <!-- //////////////////////////// start -->                    
                    <div class="detail dn">
                    <div class="atitude clearfix banxin">
				        <div class="want tc fl pointer">
				            想要 😍
				        </div>
				        <div class="proportion fl clearfix">
				            <div class="left fl">
				                <span>10248 人表示赞同 </span>
				            </div>
				            <div class="right fl clearfix">
				                <span class="fr">9248 人感到无聊</span>
				            </div>
				        </div>
				        <div class="boring tc fl pointer">
				            无聊 😑
				        </div>
				    </div>
    				</div>
                    <!-- ///////////////////////////// end  -->
                    
                    <!--QA列表   start-->
                    <div class="q_a_unit">
                        <dl id="question_answer">
                            <dt>Q&A </dt>


                        </dl>
                    </div>
                    <!--QA列表   end-->
                    
                    
                    <!--评论模块  start-->
                    <div class="comment_unit">
                        <!--输入评论 start-->
                        <div class="edit_comment">
                        	<div class="edit_comment_inner f_cf">
                                <div class="head_eidtInput f_cf">
                                    <div class="head_unit f_ofh f_fl"><img src="images/head_sculpture.png" width="100%" class="f_vat"/></div>
                                    <div class="editInput_box f_pr"><textarea id="replyContent" class="f_db" placeholder="|  我有话要说"></textarea></div>
                                </div>
                                <div class="public_comment_box">
                                    <div class="public_btn f_dib f_vat">发送</div>
                                </div>
                            </div>
                        </div>
                        <!--输入评论   end-->
                        
                        <div class="place_div f_dn"></div>
                        
                        <!--评论列表 start-->
                        <div class="comment_list_box">
                        
                        	<!--评论列表容器  start-->
                            <dl class="comment_list">
                                <dt>评论</dt>
                            </dl>
                            <!--评论列表容器    end-->
                            <div class="load_more_comment f_dn">查看更多评论（0）</div>
                        	<!--没有更多评论啦-->
                        
                        </div>
                        <!--评论列表   end-->
                        
                    </div>
                    <!--评论模块  start-->
                    
                    <!--相关阅读  start-->
                    <div class="relative_reading_box">
                    	<div class="title">相关阅读</div>
                        <dl class="relative_reading f_cf"></dl>
                    </div>
                    <!--相关阅读    end-->
                    
                </div>
                         
                <!--浮动挂件-->         
                <div class="float_unit f_pf f_dn">
                	<a href="" class="f_db qq_link f_two">QQ</a>
                    <a href="" class="f_db weibo_link f_two">微博</a>
                    <a href="" class="f_db weixin_link f_two">微信</a>
                    <a href="javascript:;" class="f_db toTop f_two">回到顶部</a>
                </div>
            	<!--浮动挂件-->
            
            </div>
        	</div>
        </div>
        <!--主内容    end-->
        
        <!--底部 start-->
        <div class="footer f_pr">
	<div class="footer_inner f_pr f_cf">
    	<div class="link_qrcode f_cf">
            <dl class="f_fl">
                <dt>ZAEKE</dt>
                <dd class="f_toe"><a href="">加入我们</a></dd>
                <dd class="f_toe"><a href="">商务合作</a></dd>
                <dd class="f_toe"><a href="">用户协议</a></dd>
            </dl>
            <dl class="f_fl">
                <dt>合作伙伴</dt>
                <dd class="f_toe"><a href="">速致</a></dd>
                <dd class="f_toe"><a href="">知客数码</a></dd>
            </dl>
            <dl class="f_fl">
                <dt>试用介绍</dt>
                <dd class="f_toe"><a href="">试用方式</a></dd>
                <dd class="f_toe"><a href="">试用流程</a></dd>
                <dd class="f_toe"><a href="">试用须知</a></dd>
            </dl>
            <dl class="f_fl">
                <dt>友情链接</dt>
                
                <?php if(is_array($link)): $i = 0; $__LIST__ = $link;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$link): $mod = ($i % 2 );++$i;?><dd class="f_toe"><a href="<?php echo ($link["url"]); ?>" target="_blank"><?php echo ($link["title"]); ?></a></dd><?php endforeach; endif; else: echo "" ;endif; ?>
            </dl>
            <ul class="f_fr">
                <li><p>知客、让数码更懂你</p></li>
                <li><img src="images/qrcode.png" class="f_vat"/></li>
            </ul>
        </div>
        <div class="web_info f_cf">
        	<div class="big_logo_us_info f_fl">
                <div class="big_logo f_fl"></div>
                <div class="about_us_info f_fr">
                    <p>关于我们</p>
                    <div class="des">知客数码致力于打造数码玩家一站式完美体验的平台。我们希望能给每一位热爱数码的玩家，提供一个展示自己的平台。</div>
                    <div class="email_tel">
                        <span class="f_dib f_vat mobile">13049894061</span>
                        <span class="f_dib f_vat email">chenwei@zaeke.com</span>
                    </div>
                </div>
            </div>
            <div class="other_platform f_fr">
            	<p>其他平台账号</p>
                <div class="other_platform_list">
            		<div class="l_qq f_dib"></div><div class="l_weixin f_dib"></div><div class="l_weibo f_dib"></div>
                </div>
            </div>
        </div>
    </div>
</div>
        <!--底部   end-->
        <script>var id=<?php echo ($id); ?>;</script>
        <script src="js/jquery.min.1.8.4.js?v=1.7"></script>
        <script src="js/common.js?v=1.3"></script>
		<script src="js/editormd/lib/marked.min.js"></script>
        <script src="js/editormd/lib/prettify.min.js"></script>
        <script src="js/editormd/lib/raphael.min.js"></script>
        <script src="js/editormd/lib/underscore.min.js"></script>
        <script src="js/editormd/lib/sequence-diagram.min.js"></script>
        <script src="js/editormd/lib/flowchart.min.js"></script>
        <script src="js/editormd/lib/jquery.flowchart.min.js"></script>
        <script src="js/editormd/editormd.min.js"></script>        
        <script src="js/article_detail.js?v=1.1"></script>
 		<script type="text/javascript">
 		$(function(){
 			if(<?php echo ($data["data"]["cid"]); ?>==8)$(".cover_unit img").addClass("dn");
 		});
 		</script>
    </body>
    
</html>