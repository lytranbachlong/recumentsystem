<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
    <title>Create profile</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="robots" content="index,follow" />
    <link rel="shortcut icon" href="images/favicon.ico" />
    <link rel="stylesheet" href="css/style.css" type="text/css" />
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!--[if (gte IE 6)&(lte IE 8)]>
<script type="text/javascript" src="js/html5.js"></script>
<script type="text/javascript" src="js/selectivizr-min.js"></script>
<link rel="stylesheet" href="css/ie_7.css" type="text/css" />
<![endif]-->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="js/jquery-ui-1.8.16.custom.min.js"></script>
    <script type="text/javascript" src="js/all-in-one.js"></script>
    <script type="text/javascript" src="js/setup.js"></script>
    <script type="text/javascript" src="js/AddRow.js"></script>
</head>
<body>
    <!-- Header -->
    <header >
         <div class="center_box"  style="text-align:center ;">
           
            <div class="attention_box_header">
                  <table style="margin: 0 0 0 auto; width: 100%;">
                   <tbody>
                    <tr>
                        <td class="flexibleContainer3" style="padding-bottom: 0px; text-align: center;">
                            <a href="/tokyoschool/index.php">
                                <image src="./images/header/atm.png">
                            </a>
                        </td>
                        <td class="flexibleContainer1" style="color: #2b729f;padding-bottom: 0px;padding-right: 0px;font-weight: bold">
                             	
                    Actual Tokyo Max Co., Ltd 
                
                        </td>
                        <td class="flexibleContainer2" style="background-color: #049ddb;padding: 0px;border: 0px; text-align: left">
                            <image src="./images/header/tokyoschoolicon.png">
                        </td>
                        <td class="flexibleContainer" style="background-color: #049ddb; color: white;padding: 0px; padding-right: 100px">
                            <div class="login"><a href="login.php" class="button grey"style="width: 100px;margin-right: 8%">ログアウト</a></div>
                        </td>
                    </tr>
                </tbody>
            </table>
               
                </div>
        </div>
    </header>
    <!-- /Header -->
    <!-- START CONTENT -->
    <section class="container clearfix">
		
        <div class="clear padding30"></div>
                <div class="center_box"  style="text-align:center ;">
                    <div class="attention_box6">
                        <h3>個人情報編集</h3>
                    </div>
                </div>
           
        
            <div class="attention_box7">
                <table style="text-align: left; font-size: 18px; background: #ecf0f1">
                    <tr>
                        <td style="background: white;text-align:left ;color: #2490d8; font-weight: bold" colspan="2">
                           仕事関連情報
                        </td>
                        
                    </tr>
                    <tr>
                        <td style="background: white;padding-right: 0px;text-align: left; border-top: 1px solid #e8e8e8;"colspan="2">
                            <div class="requested_color" style="display: inline">*</div><div style="display: inline">は必須事項 </div>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 0px 1px 0px 0px;width: 60%">
                            <table style="width: 100%; margin: 0px;">
                               <!-- <tr>
                                    <td colspan="3" style="background: white; padding-left: 20px; border-top: 2px solid #e8e8e8;font-weight: bold; padding-top: 15px;padding-bottom: 15px;text-align: left">
                                        自己紹介
                                    </td>
                                </tr>-->
                                <tr class="columprofile">
                                    <td class="columprofile_td1">自己紹介
                                        <div class="requested_color">*</div>
                                    </td>
                                    <td class="columprofile_td2">
                                        <textarea class="inputtext_box" style="width: 300px"></textarea>
                                    </td>
                                </tr>
                                <!--<tr class="columprofile">
                                    <td class="columprofile_td1">ITスキル
                                        <div class="requested_color">*</div>
                                    </td>
                                    <td class="columprofile_td2">
                                          <input class="inputtext_box" style="width: 300px">
                                    </td>
                                </tr>
                                <tr class="columprofile">
                                    <td class="columprofile_td1">レベル
                                        <div class="requested_color">*</div>
                                    </td>
                                    <td class="columprofile_td2" >
                                          <input type="radio" name="sex" value="male" checked>１年以下
                                          <input type="radio" name="sex" value="female">２年
                                          <input type="radio" name="sex" value="female">３年
                                          <input type="radio" name="sex" value="female">４年
                                          <input type="radio" name="sex" value="female">５年以上
                                    </td>
                                </tr>-->
                                  <tr class="columprofile">
                                    <td colspan="3">
                                        <table id="myTable" style="text-align: left; font-size: 18px; background: #ecf0f1">
                                            <tr class="columprofile">
                                              <td class="columprofile_td1"></td>
                                              <td class="columprofile_td2"></td>
                                            </tr>                                           
                                         </table>
                                    </td>
                                    
                                </tr>
                                <tr class="columprofile">
                                    <td class="columprofile_td1">スキルを追加                                      
                                    </td>
                                   <td class="columprofile_td2" style="text-align: left;padding-left:  50px">
                                        <!--<div style=""><a class="inputtext_box" href="#openModal" style="width: 300px;" >追加 </a></div>-->                                        
                                        
                                        <button onclick="myCreateFunction()">Create row</button>
<button onclick="myDeleteFunction()">Delete row</button>

                                    </td>
                                </tr>
                              
                               
                                
                                <tr>
                                    <td colspan="3" style="background: white; padding-left: 20px; border-top: 2px solid #e8e8e8;font-weight: bold; padding-top: 15px;padding-bottom: 15px;text-align: left">
                                       学歴
                                    </td>
                                 </tr>
                                 <tr class="columprofile">
                                    <td class="columprofile_td1">学校名
                                        <div class="requested_color">*</div>
                                    </td>
                                    <td class="columprofile_td2">
                                          <input class="inputtext_box" style="width: 300px">
                                    </td>
                                </tr>
                                <tr class="columprofile">
                                    <td class="columprofile_td1">期間
                                        <div class="requested_color">*</div>
                                    </td>
                                    <td class="columprofile_td2">
                                          <!--<input class="inputtext_box" style="width: 260px">-->
                                        <tr class="columprofile">
                                    <td class="columprofile_td1">期間
                                        <div class="requested_color">*</div>
                                    </td>
                                    <td class="columprofile_td2">
                                          <!--<input class="inputtext_box" style="width: 260px">-->
                                        <select name="formGender"  class="select_box" style="width: 148px">
                                           <option value="M"></option>
                                            <option value="M">2000年</option>
                                            <option value="N">2001年</option>
                                            <option value="N">2002年</option>
                                            <option value="N">2003年</option>
                                            <option value="N">2004年</option>
                                            <option value="N">2005年</option>
                                            <option value="N">2006年</option>
                                            <option value="N">2007年</option>
                                            <option value="N">2008年</option>
                                            <option value="N">2009年</option>
                                            <option value="N">2010年</option>
                                            <option value="N">2011年</option>
                                            <option value="N">2012年</option>
                                            <option value="N">2013年</option>
                                            <option value="N">2014年</option>
                                            <option value="N">2015年</option>
                                        </select>
                                         <select name="formGender"  class="select_box"  style="width: 148px">                                      
                                           
                                           <option value="M"></option>
                                            <option value="M">1月</option>
                                            <option value="N">2月</option>
                                            <option value="N">3月</option>
                                            <option value="N">4月</option>
                                            <option value="N">5月</option>
                                            <option value="N">6月</option>
                                            <option value="N">7月</option>
                                            <option value="N">8月</option>                                            
                                            <option value="N">9月</option>
                                            <option value="N">10月</option>
                                            <option value="N">11月</option>
                                            <option value="N">12月</option>
                                        </select>                                         
                                    </td>
                                    <td class="columprofile_td3">
                                          <!--<input class="inputtext_box" style="width: 260px">-->
                                        <div style="display: inline;font-size: 30px;padding-right: 30px">~</div>
                                        <select name="formGender"  class="select_box" style="width: 148px">
                                           <option value="M"></option>  
                                            <option value="M">2000年</option>
                                            <option value="N">2001年</option>
                                            <option value="N">2002年</option>
                                            <option value="N">2003年</option>
                                            <option value="N">2004年</option>
                                            <option value="N">2005年</option>
                                            <option value="N">2006年</option>
                                            <option value="N">2007年</option>
                                            <option value="N">2008年</option>
                                            <option value="N">2009年</option>
                                            <option value="N">2010年</option>
                                            <option value="N">2011年</option>
                                            <option value="N">2012年</option>
                                            <option value="N">2013年</option>
                                            <option value="N">2014年</option>
                                            <option value="N">2015年</option>
                                        </select>
                                         <select name="formGender"  class="select_box"  style="width: 148px">   
                                           <option value="M"></option>
                                            <option value="M">1月</option>
                                            <option value="N">2月</option>
                                            <option value="N">3月</option>
                                            <option value="N">4月</option>
                                            <option value="N">5月</option>
                                            <option value="N">6月</option>
                                            <option value="N">7月</option>
                                            <option value="N">8月</option>                                            
                                            <option value="N">9月</option>
                                            <option value="N">10月</option>
                                            <option value="N">11月</option>
                                            <option value="N">12月</option>
                                        </select>                                         
                                    </td>
                                </tr>
                                    </td>
                                </tr>
                               
                                <tr class="columprofile">
                                    <td class="columprofile_td1">説明
                                       
                                    </td>
                                    <td class="columprofile_td2">
                                         <textarea class="inputtext_box" style="width: 300px"></textarea>
                                    </td>
                                </tr>
                                <tr class="columprofile">
                                    <td class="columprofile_td1">学歴を追加
                                       
                                    </td>
                                    <td class="columprofile_td2">
                                          <input class="inputtext_box" style="width: 300px">
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="3" style=" background: white;padding-left: 20px; border-top: 2px solid #e8e8e8;font-weight: bold; padding-top: 15px;padding-bottom: 15px;text-align: left">
                                      職歴
                                    </td>
                                 </tr>
                                
                                <tr class="columprofile">
                                    <td class="columprofile_td1">
                                        会社
                                        <div class="requested_color">*</div>
                                    </td>
                                    <td class="columprofile_td2">
                                          <input class="inputtext_box" style="width: 300px">
                                    </td>
                                </tr>
                                <tr class="columprofile">
                                    <td class="columprofile_td1">住所
                                        <div class="requested_color">*</div>
                                    </td>
                                    <td class="columprofile_td2">
                                          <input class="inputtext_box" style="width: 300px">
                                    </td>
                                </tr>
                                <tr class="columprofile">
                                    <td class="columprofile_td1">役職
                                        <div class="requested_color">*</div>
                                    </td>
                                    <td class="columprofile_td2">
                                         <select name="formGender"  class="select_box" style="width: 300px">
                                                <option value="V">社長</option>
                                                <option value="M"> 副社長</option>
                                                <option value="M">部長</option>
                                                <option value="M"> スタッフ</option>
                                            </select>
                                    </td>
                                </tr>
                                <tr class="columprofile">
                                    <td class="columprofile_td1">期間
                                        <div class="requested_color">*</div>
                                    </td>
                                    <!--<td class="columprofile_td2">
                                         <input class="inputtext_box" style="width: 260px">
                                          <image src="./images/icondate.png">
                                        
                                    </td>-->
                                    <td class="columprofile_td2">
                                          <!--<input class="inputtext_box" style="width: 260px">-->
                                        

                                        <select name="formGender"  class="select_box" style="width: 148px">
                                           <option value="M"></option>                                     
                                            <option value="M">2000年</option>
                                            <option value="N">2001年</option>
                                            <option value="N">2002年</option>
                                            <option value="N">2003年</option>
                                            <option value="N">2004年</option>
                                            <option value="N">2005年</option>
                                            <option value="N">2006年</option>
                                            <option value="N">2007年</option>
                                            <option value="N">2008年</option>
                                            <option value="N">2009年</option>
                                            <option value="N">2010年</option>
                                            <option value="N">2011年</option>
                                            <option value="N">2012年</option>
                                            <option value="N">2013年</option>
                                            <option value="N">2014年</option>
                                            <option value="N">2015年</option>
                                        </select>
                                         <select name="formGender"  class="select_box"  style="width: 148px">                                      
                                           <option value="M"></option>                                           
                                            <option value="M">1月</option>
                                            <option value="N">2月</option>
                                            <option value="N">3月</option>
                                            <option value="N">4月</option>
                                            <option value="N">5月</option>
                                            <option value="N">6月</option>
                                            <option value="N">7月</option>
                                            <option value="N">8月</option>                                            
                                            <option value="N">9月</option>
                                            <option value="N">10月</option>
                                            <option value="N">11月</option>
                                            <option value="N">12月</option>
                                        </select>   
                                      
                                    </td>
                                    <td class="columprofile_td3">
                                          <!--<input class="inputtext_box" style="width: 260px">-->
                                        <div style="display: inline;font-size: 30px;padding-right: 30px">~</div>
                                        <select name="formGender"  class="select_box" style="width: 148px">
                                           <option value="M"></option>
                                          
                                            <option value="M">2000年</option>
                                            <option value="N">2001年</option>
                                            <option value="N">2002年</option>
                                            <option value="N">2003年</option>
                                            <option value="N">2004年</option>
                                            <option value="N">2005年</option>
                                            <option value="N">2006年</option>
                                            <option value="N">2007年</option>
                                            <option value="N">2008年</option>
                                            <option value="N">2009年</option>
                                            <option value="N">2010年</option>
                                            <option value="N">2011年</option>
                                            <option value="N">2012年</option>
                                            <option value="N">2013年</option>
                                            <option value="N">2014年</option>
                                            <option value="N">2015年</option>
                                        </select>
                                         <select name="formGender"  class="select_box"  style="width: 148px">                                      
                                           <option value="M"></option>                                    
                                            <option value="M">1月</option>
                                            <option value="N">2月</option>
                                            <option value="N">3月</option>
                                            <option value="N">4月</option>
                                            <option value="N">5月</option>
                                            <option value="N">6月</option>
                                            <option value="N">7月</option>
                                            <option value="N">8月</option>                                            
                                            <option value="N">9月</option>
                                            <option value="N">10月</option>
                                            <option value="N">11月</option>
                                            <option value="N">12月</option>
                                        </select>                                         
                                    </td>
                                </tr>
                                <tr class="columprofile">
                                    <td class="columprofile_td1">説明
                                       
                                    </td>
                                    <td class="columprofile_td2">
                                        <textarea class="inputtext_box" style="width: 300px"></textarea>
                                </tr>
                                <tr class="columprofile">
                                    <td class="columprofile_td1">役職を追加
                                       
                                    </td>
                                    <td class="columprofile_td2">
                                          <input class="inputtext_box" style="width: 300px">
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="3" style=" background: white;padding-left: 20px; border-top: 2p solid #e8e8e8;font-weight: bold; padding-top: 15px;padding-bottom: 15px;text-align: left">
                                      プロジェクト
                                    </td>
                                 </tr>
                                <tr class="columprofile">
                                    <td class="columprofile_td1">プロジェクトタイトル
                                        <div class="requested_color">*</div>
                                    </td>
                                    <td class="columprofile_td2">
                                          <input class="inputtext_box" style="width: 300px">
                                    </td>
                                </tr>
                                <tr class="columprofile">
                                    <td class="columprofile_td1">説明
                                       
                                    </td>
                                    <td class="columprofile_td2">
                                        <textarea class="inputtext_box" style="width: 300px"></textarea>
                                </tr>
                                <tr class="columprofile">
                                    <td class="columprofile_td1">プロジェクトURL
                                       
                                    </td>
                                    <td class="columprofile_td2">
                                        <input class="inputtext_box" style="width: 300px">
                                </tr>
                                <tr class="columprofile">
                                    <td class="columprofile_td1">プロジェクトを追加
                                       
                                    </td>
                                    <td class="columprofile_td2">
                                        <input class="inputtext_box" style="width: 300px">
                                </tr>
                               <tr>
                                    <td colspan="3" style="background: white;padding-left: 20px; border-top: 2px solid  #e8e8e8;font-weight: bold; padding-top: 15px;padding-bottom: 15px;text-align: left">
                                      外国語
                                    </td>
                                </tr>
                                <tr class="columprofile">
                                    <td class="columprofile_td1">プロジェクトタイトル
                                        <div class="requested_color">*</div>
                                    </td>
                                    <td class="columprofile_td2">
                                          
                                          <select name="formGender"  class="select_box" style="width: 300px">
                                            <option value="V">英語</option>
                                            <option value="M">日本語</option>
                                            <option value="M">その他</option>
                                        </select>                                        
                                    </td>
                                </tr>
                                <tr class="columprofile">
                                    <td class="columprofile_td1">レベル
                                       
                                    </td>
                                    <td class="columprofile_td2">
                                        <!--<input class="inputtext_box" style="width: 300px">-->
                                         <div style="width:300px;margin-bottom: -10px">
                                          <input type="radio" name="sex" value="male" checked >初級者
                                          <input type="radio" name="sex" value="female">中級者
                                          <input type="radio" name="sex" value="female">上級者
                                          
                                        <div>
                                </tr>
                                <tr class="columprofile">
                                    <td class="columprofile_td1">外国語を追加                                    
                                    </td>
                                   <td class="columprofile_td2" style="text-align: left;padding-left:  50px">
                                        <div style=""><a class="inputtext_box" href="#openModal1" style="width: 300px;" >追加 </a></div>
                                        
                                       <!-- <input class="inputtext_box" style="width: 300px" onclick="popup('xxxxxxx')">-->
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="3" style=" background: white;padding-left: 20px; border-top: 1px solid #e8e8e8;font-weight: bold; padding-top: 15px;padding-bottom: 15px;text-align: left">
                                      
                                    </td>
                                </tr>
                                <tr class="columprofile">
                                    <td class="columprofile_td1">訪日経験
                                       
                                    </td>
                                    <td class="columprofile_td2">
                                        <textarea class="inputtext_box" style="width: 300px"></textarea>
                                </tr>
                                 <tr class="columprofile">
                                    <td class="columprofile_td1">日本語学習期間
                                       
                                    </td>
                                    <td class="columprofile_td2">
                                        <select name="formGender"  class="select_box" style="width: 148px">
                                            <option value="V">0年</option>
                                            <option value="M">1年</option>
                                            <option value="N">2年</option>
                                            <option value="N">3年</option>
                                            <option value="N">4年</option>
                                            <option value="N">5年</option>
                                            <option value="N">6年</option>
                                            <option value="N">7年</option>
                                            <option value="N">8年</option>                                            
                                            <option value="N">9年</option>
                                            <option value="N">10年</option>
                                            <option value="N"> > 10年</option>
                                        </select>
                                         <select name="formGender"  class="select_box"  style="width: 148px">
                                            <option value="V">0月</option>                                        
                                            <option value="M">1月</option>
                                            <option value="N">2月</option>
                                            <option value="N">3</option>
                                            <option value="N">4月</option>
                                            <option value="N">5月</option>
                                            <option value="N">6月</option>
                                            <option value="N">7月</option>
                                            <option value="N">8月</option>                                            
                                            <option value="N">9月</option>
                                            <option value="N">10月</option>
                                            <option value="N">11月</option>
                                            <option value="N">12月</option>
                                        </select>
                                         
                                </tr>
                                <tr class="columprofile">
                                    <td class="columprofile_td1"> 日本で働きたい目的 
                                       
                                    </td>
                                    <td class="columprofile_td2">
                                        <textarea class="inputtext_box" style="width: 300px"></textarea>
                                </tr>
                               <tr class="columprofile">
                                    <td class="columprofile_td1"> 働きたい場所
                                       
                                    </td>
                                    <td class="columprofile_td2">
                                       <div style="width:320px;margin-bottom: -10px">
                                         <input type="radio" name="country" value="male" checked>日本
                                          <input type="radio" name="country" value="female"   >ベトナム
                                          <input type="radio" name="country" value="female">ミャンマー
                                       </div>
                                      </td>
                                </tr>
                                </tr>
                            </table>
                        </td>
                        
                    </tr>
                        
                </table>
                
                           
		 
                <div style="text-align: center"><a href="profile.php" class="button green" style="display: inline">戻る</a>&nbsp;&nbsp;<a href="profile_1.php" class="button green"style="display: inline">次へ</a><div>
                         <div class="clear padding30"></div> 
	</section>
 <div id="dialog-box">
	<div class="dialog-content">
		<div id="dialog-message"></div>
		<a href="#" class="button">Close</a>
	</div>
</div>
    



<div id="openModal" class="modalDialog">
	<div>
		<a href="#close" title="Close" class="close">X</a>
		<h2>スキルを追加 </h2>
                <div>
                
                <table style="width: 100%; margin: 0px;">                              
                    <tr>
                        <td class="columprofile_td1">スキル

                        </td>
                        <td class="columprofile_td2">
                              <input class="inputtext_box" style="width: 300px">
                        </td>
                    </tr>
                    <tr >
                        <td class="columprofile_td1">経験

                        </td>
                        <td class="columprofile_td2">
                             <div style="width:320px;margin-bottom: -10px">
                                          <input type="radio" name="sex" value="male" checked>１年以下
                                          <input type="radio" name="sex" value="female">２年
                                          <input type="radio" name="sex" value="female">３年
                                          <input type="radio" name="sex" value="female">４年
                                          <input type="radio" name="sex" value="female">５年以上
                              </div>
                        </td>
                        
                    </tr>
                  
                    </tr>
             
                </table>
                </div>
                <div class="clear padding30"></div> 
                <div style="text-align: center"><a href="#close" class="button green" style="width: 100px;display: inline">キャンセル</a>&nbsp;&nbsp;<a href="#close" class="button green" style=";display: inline">保存</a> </div>
                <div class="clear padding30"></div> 
                <div>
        <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>スキル </th>
                <th>経験</th>                        
                <th></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>IT</td>
                <td>１年以下</td>
                <td><a href="#" class="btn btn-primary">削除</a></td>

              </tr>
              <tr>
                <td>Developer</td>
                <td>2年</td>
                <td><a href="#" class="btn btn-primary">削除</a></td>

              </tr>
            </tbody>
      </table>
    </div>
	</div>
    
</div>

    
    <div id="openModal1" class="modalDialog">
	<div>
		<a href="#close" title="Close" class="close">X</a>
		<h2>外国語を追加</h2>
                <div>
                
                <table style="width: 100%; margin: 0px;">                              
                    <tr>
                        <td class="columprofile_td1" style="font-size: 13px">プロジェクトタイトル

                        </td>
                        <td class="columprofile_td2">
                              <input class="inputtext_box" style="width: 250px">
                        </td>
                    </tr>
                    <tr >
                        <td class="columprofile_td1">レベル

                        </td>
                        <td class="columprofile_td2">
                             <div style="width:320px;margin-bottom: -10px">
                                          <input type="radio" name="sex" value="male" checked>初級者
                                          <input type="radio" name="sex" value="female">中級者
                                          <input type="radio" name="sex" value="female">上級者                                          
                              </div>
                        </td>
                        
                    </tr>
                  
                        
                        
                    </tr>
             
                </table>
                </div>
                <br>
                <div style="text-align: center"><a href="#close" class="button green" style="width: 100px;display: inline">キャンセル</a>&nbsp;&nbsp;<a href="#close" class="button green" style=";display: inline">保存</a> </div>
	</div>
</div>
     
   <!-- END CONTENT -->
    <!-- footer -->
    <footer>
		
		<div class="center_box"  style="text-align:center ;background-color: #ecf0f1">
                    
                        
                    <div class="attention_box_foodter">
			<table>
                           
                                <tr>
                                    <td class="flexiblefooterleft" style="padding-top: 10px">
                                         Copyright © 2015 ATM Co.,I.td. Allrights reserved
                                    </td>
                                    <td class="flexiblefooterright">                                        
                                        <a href="abount.php">会社概要</a>&nbsp;&nbsp;
                                        <a href="operations.php">ポリシー</a>&nbsp;&nbsp;
                                        <a href="contact.php">お問い合わせ</a>
                                  
                                        
                                    </td>

                                </tr>
                                <tr>
                                    
                                    <td class="flexiblefooterright" colspan="2">                                        
                                        <div style="font-size: 15px">
                                            
                                            <a href="http://facebook.com/"><img src="images/twitter.png" width="24" height="24" alt="Twitter">
                                            <a href="https://twitter.com/"><img src="images/facebook.png" alt="Facebook"></a>
                                        言語
                                        <select name="formGender"  class="select_langue">
                                            <option value="M">日本語</option>
                                            <option value="F">English</option>
                                            <option value="F">Tiếng Việt</option>
                                            <option value="F">Myanma</option>
                                        </select>
                                        </div>
                                    </td>

                                </tr>
                            </table>
			</div>
                </div>
	</footer>
    <!-- /footer -->
</body>
</html>
