<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <style>
      #first_title{
        color:black;
        text-decoration:none;
        float:left;
      }
      #second_title{
        float:left;
        color:blue;
        padding-left:5px;
        font-style:nomal;
      }
      #search{
        float:left;
        border:blue 3px solid;
        weight:40px;
        padding:0px;
      }
      #search_input{
        
        height:20px;
        weight:40px;
        padding:0px;
        margin:0px;
      }
    </style>

  </head>
  <body>
    <a id="first_title" href="" >dcinside.com</a>
    <div id="second_title">마이너 갤러리</div>
    <div class="top_search clear">
			<div class="inner_search">
			  <input class="in_keyword" type="text" name="search" id="preSWord" title="검색어 입력" value="" placeholder="갤러리 &amp; 통합검색" accesskey="f" autocomplete="off">
			</div>
			<button type="submit" class="sp_img bnt_search" id="searchSubmit"><span class="blind">검색</span></button>
			<button type="button" class="btn_visit" onclick="openLately()">최근방문</button>
		  </div>
	  
  </body>
</html>
