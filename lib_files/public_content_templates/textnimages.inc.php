<style type="text/css">

/*Modify attributes of #contentwrapper below as desired*/
#contentwrapper{
width: 300px;
height: 188px;
border: 0px solid black;
background-color: #EEEEEE;
padding: 5px;
}

.billcontent{
width: 100%;
display:block;
}

</style>

<script type="text/javascript">

/***********************************************
* DHTML Billboard script- © Dynamic Drive (www.dynamicdrive.com)
* This notice must stay intact for use
* Visit http://www.dynamicdrive.com/ for full source code
***********************************************/

//List of transitional effects to be randomly applied to billboard:
var billboardeffects=["GradientWipe(GradientSize=1.0 Duration=0.9)", "Inset", "Iris", "Pixelate(MaxSquare=5 enabled=false)", "RadialWipe", "RandomBars", "Slide(slideStyle='push')", "Spiral", "Stretch", "Strips", "Wheel", "ZigZag"]

//var billboardeffects=["Iris"] //Uncomment this line and input one of the effects above (ie: "Iris") for single effect.

var tickspeed=2000 //ticker speed in miliseconds (2000=2 seconds)
var effectduration=1000 //Transitional effect duration in miliseconds
var hidecontent_from_legacy=1 //Should content be hidden in legacy browsers- IE4/NS4 (0=no, 1=yes).

var filterid=Math.floor(Math.random()*billboardeffects.length)

document.write('<style type="text/css">\n')
if (document.getElementById)
document.write('.billcontent{display:none;\n'+'filter:progid:DXImageTransform.Microsoft.'+billboardeffects[filterid]+'}\n')
else if (hidecontent_from_legacy)
document.write('#contentwrapper{display:none;}')
document.write('</style>\n')

var selectedDiv=0
var totalDivs=0

function contractboard(){
var inc=0
while (document.getElementById("billboard"+inc)){
document.getElementById("billboard"+inc).style.display="none"
inc++
}
}

function expandboard(){
var selectedDivObj=document.getElementById("billboard"+selectedDiv)
contractboard()
if (selectedDivObj.filters){
if (billboardeffects.length>1){
filterid=Math.floor(Math.random()*billboardeffects.length)
selectedDivObj.style.filter="progid:DXImageTransform.Microsoft."+billboardeffects[filterid]
}
selectedDivObj.filters[0].duration=effectduration/1000
selectedDivObj.filters[0].Apply()
}
selectedDivObj.style.display="block"
if (selectedDivObj.filters)
selectedDivObj.filters[0].Play()
selectedDiv=(selectedDiv<totalDivs-1)? selectedDiv+1 : 0
setTimeout("expandboard()",tickspeed)
}

function startbill(){
while (document.getElementById("billboard"+totalDivs)!=null)
totalDivs++
if (document.getElementById("billboard0").filters)
tickspeed+=effectduration
expandboard()
}

if (window.addEventListener)
window.addEventListener("load", startbill, false)
else if (window.attachEvent)
window.attachEvent("onload", startbill)
else if (document.getElementById)
window.onload=startbill

</script>


<div id="contentwrapper"  align="left">


    <div id="billboard0" class="billcontent"  style="padding-right:10px; padding-left:5px">
    
    	<div style="padding-bottom:5px">
    		<strong>Get Professional IP CCTV</strong>
        </div>
        
        <div style="padding-bottom:5px">	
    		Great deals on CCTV Cameras DVR's and Network IP Cameras specialising in remote cctv.
        </div>
        
        <div style="padding-bottom:0px" align="center">
    		<a href="index.php?page_ren=36" ><img src="images/ip_cctv.png" width="250px" style="border:none"  /></a>
        </div>
        
    </div>
    
    
    
    <div id="billboard1" class="billcontent" style="padding:5px">
    	
        <div style="padding-bottom:5px">
    		<strong>Phone Bill Reduction By 50% and More ... </strong>
        </div>
        
        <div style="padding-bottom:5px">
    		Design, Implementation and Manangement to exceed all your communication needs and COST your Monthly <strong>BILLS</strong>. 
        </div>
        
        <div style="padding-bottom:0px" >
    		<a href="index.php?page_ren=36" ><img src="images/pabx-50.png" width="250px" style="border:none" /></a>
        </div>
        
    </div>
    
    
    
    <div id="billboard2" class="billcontent" style="padding:5px">
    	<div style="padding-bottom:10px">
        	<strong>Free!!! Quotes on CCTV, PABX n COPIERS</strong>
        </div>
         <div style="padding-bottom:10px">
    		Click Here to Get Quotes or Request an Appointment.
        </div>
        <div style="padding-bottom:0px" align="center">
    		<a href="index.php?page_ren=36" ><img src="images/quotes.jpg" width="290px" style="border:none" /></a>
        </div>
    </div>
    
    
    
    
    <div id="billboard3" class="billcontent" style="padding:5px">
    
    	<div style="padding-bottom:10px">
    		<strong>Cost Effective Vehicle n Worker Tracking Systems</strong>
        </div>
        
        <div style="padding-bottom:5px"> 
    		 Fleet management, GPS Tracking, Satellite Tracking or as a Satellite Tracker.
        </div>
    
        <div style="padding-bottom:0px" align="center" >
        	<a href="index.php?page_ren=36"  ><img src="images/tracking.jpg" width="250px" style="border:none" /></a>
        </div>
        
    </div>
    
</div>