<style type="text/css">
#menu {
	width: 643px;
	background: #ffffff;
	border-bottom: 0px #D0DADB solid;
	padding-left: 0px;
	height: 33px;
}

#menu  ul {
	display: block;
	margin: 0;
	padding: 0;
	line-height: 1em;
	list-style: none;
	z-index: 90
}

#menu  ul li {
	float: left;
	margin: 0 1px 0 0;
	padding: 0;
	font-size: 10px;
	line-height: 1, 5em;
	list-style-type: none;
}

#menu ul li a {
	float: left;
	display: block;
	width: auto;
	font-weight: normal;
	background: transparent;
	text-decoration: none;
	color: #213480;
	margin: 0;
	padding: 0.0px 0.0px 0.0px 0px;
}

#menu  ul li a:hover {
	color: #213480;
	text-decoration: none;
}

#menu  ul li.sep {
	color: #213480;
	padding: 0.0px 0px 0.0px 0px;
}

/* Commented Backslash Hack hides rule from IE5-Mac \*/
#menu  ul li a {
	float: none;
}

/* End IE5-Mac hack */
#menu  ul.level2, #menu ul.level3 {
	position: absolute;
	top: 0px;
	left: 0px;
	visibility: hidden;
	border-left: 1px solid #fff;
	border-top: 1px solid #fff;
	border-right: 1px solid #fff;
	background: #eeeeee;
}

#menu  ul.level2 li, #menu ul.level3 li {
	border-bottom: 1px solid #fff;
	float: none;
	margin: 0;
	padding: 0;
	width: 200px;
}

#menu  ul.level2 li a, #menu ul.level3 li a {
	padding: 5px 9px 5px 5px;
}

#menu  ul.level2 li a:hover,#menu  ul.level3 li a:hover {
	font-weight: normal;
	background-color: #ec1f27;
	background-image: none;
}
</style>


<script type="text/javascript" src="../js_fns/sandp/prototype.js"></script> 
<script type="text/javascript" src="../js_fns/sandp/scriptaculous.js"></script> 
<script type="text/javascript" src="../js_fns/sandp/menu.js" ></script> 




<div id="menu" style="position:absolute;top:10px; z-index:100 "> 
    
	<ul class="level1" id="root"> 
    	<li><a  href="index.php<?php if($log==md5(YES)){echo "?xl1=$log";}?>">Home</a></li>
         
      	<li class="sep">|</li>
         
      	<li>
        
        	<a href="index.php?page_ren=47<?php if($log==md5(YES)){echo "&&xl1=$log";}?>">About Us</a>
            
            <ul class="level2">
                <li><a href="index.php?page_ren=56<?php if($log==md5(YES)){echo "&&xl1=$log";}?>">Our Vision</a></li> 
                <li><a href="index.php?page_ren=56<?php if($log==md5(YES)){echo "&&xl1=$log";}?>">Our Mision</a></li>
                <li><a href="index.php?page_ren=57<?php if($log==md5(YES)){echo "&&xl1=$log";}?>">Our Values & Qualities</a></li>
                <li><a href="index.php?page_ren=58<?php if($log==md5(YES)){echo "&&xl1=$log";}?>">Our History</a></li>   
                <li><a href="index.php?page_ren=44<?php if($log==md5(YES)){echo "&&xl1=$log";}?>">Our Board of Directors</a></li> 
                <li><a href="index.php?page_ren=45<?php if($log==md5(YES)){echo "&&xl1=$log";}?>">Our People</a></li> 
        	</ul>
             
      	</li> 
        
      	<li class="sep">|</li> 
      
      	<li>
        
        	<a href="index.php?page_ren=34<?php if($log==md5(YES)){echo "&&xl1=$log";}?>">PRODUCTS & SERVICES</a>
            
          	<ul class="level2"> 
          		<li>
                
          			<a href="index.php?page_ren=39<?php if($log==md5(YES)){echo "&&xl1=$log";}?>">Finance</a>
                
          				<ul class="level3"> 
                          <li><a href="index.php?page_ren=46<?php if($log==md5(YES)){echo "&&xl1=$log";}?>">SME Financing </a></li> 
                          <li><a href="index.php?page_ren=50<?php if($log==md5(YES)){echo "&&xl1=$log";}?>">Home Completion Loan</a></li> 
                          <li><a href="index.php?page_ren=49<?php if($log==md5(YES)){echo "&&xl1=$log";}?>">Church Growth Loan</a></li> 
                          <li><a href="index.php?page_ren=35<?php if($log==md5(YES)){echo "&&xl1=$log";}?>">School Expansion Loan</a></li>
            			</ul>           
          		</li> 

		<li>
         
            <a href="index.php?page_ren=40<?php if($log==md5(YES)){echo "&&xl1=$log";}?>">Leasing</a>
             
            <ul class="level3"> 
            	<li><a href="index.php?page_ren=42<?php if($log==md5(YES)){echo "&&xl1=$log";}?>">Finance Leasing</a></li> 
              	<li><a href="index.php?page_ren=51<?php if($log==md5(YES)){echo "&&xl1=$log";}?>">Operating Lease</a></li> 
              	<li><a href="index.php?page_ren=54<?php if($log==md5(YES)){echo "&&xl1=$log";}?>">Fleet Management</a></li>
            </ul> 
		</li>
         
        <li>
        
          	<a href="index.php?page_ren=41<?php if($log==md5(YES)){echo "&&xl1=$log";}?>">Microfinance</a>
          
          	<ul class="level3"> 
              	<li><a href="index.php?page_ren=59<?php if($log==md5(YES)){echo "&&xl1=$log";}?>">Employee Scheme loans</a></li> 
              	<li><a href="index.php?page_ren=48<?php if($log==md5(YES)){echo "&&xl1=$log";}?>">Growth Loans</a></li>  
            </ul> 
        </li>

	</ul>

	</li>
       
      <li class="sep">|</li> 
      <li><a href="index.php?page_ren=36<?php if($log==md5(YES)){echo "&&xl1=$log";}?>">NEWS & EVENTS</a></li> 
      <li class="sep">|</li> 
      <li><a href="index.php?page_ren=38<?php if($log==md5(YES)){echo "&&xl1=$log";}?>">FAQ</a></li> 
      <li class="sep">|</li>  
      <li><a href="index.php?page_ren=52<?php if($log==md5(YES)){echo "&&xl1=$log";}?>">CONTACT US</a></li> 
      
    </ul>
     
</div>