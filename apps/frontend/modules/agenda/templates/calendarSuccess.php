<h1>Calendario de Sala:<?php echo $sf_request->getParameter('slug')?></h1>


<!--<?php echo link_to('Volver', 'agenda/index')?> -->
<!--<?php use_stylesheet('/css/global/prueba.css') ?>-->
<link rel="stylesheet" type="text/css" media="screen" href="/css/global/prueba.css" /> 

<ul id="navTabs">
<div>
      <div id="calhead" style="padding-left:1px;padding-right:1px;">          
            <div class="cHead"><div class="ftitle">My Calendar2</div>
            <div id="loadingpannel" class="ptogtitle loadicon" style="display: none;">Loading data...</div>
             <div id="errorpannel" class="ptogtitle loaderror" style="display: none;">Sorry, could not load your data, please try again later</div>
            </div>          
            
            <div id="caltoolbar" class="ctoolbar">
              <div id="faddbtn" class="fbutton">
                <div><span title='Click to Create New Event' class="addcal">
                New Event                
                </span></div>
            </div>
            <div class="btnseparator"></div>
             <div id="showtodaybtn" class="fbutton">
                <div><span title='Click to back to today ' class="showtoday">
                Today</span></div>
            </div>
              <div class="btnseparator"></div>
            <div id="showdaybtn" class="fbutton">
                <div><span title='Day' class="showdayview">Day</span></div>
            </div>
              <div  id="showweekbtn" class="fbutton fcurrent">
                <div><span title='Week' class="showweekview">Week</span></div>
            </div>
              <div  id="showmonthbtn" class="fbutton">
                <div><span title='Month' class="showmonthview">Month</span></div>
            </div>
            <div class="btnseparator"></div>
              <div  id="showreflashbtn" class="fbutton">
                <div><span title='Refresh view' class="showdayflash">Refresh</span></div>
                </div>
             <div class="btnseparator"></div>
            <div id="sfprevbtn" title="Prev"  class="fbutton">
              <span class="fprev"></span>
            </div>
            <div id="sfnextbtn" title="Next" class="fbutton">
                <span class="fnext"></span>
            </div>
            <div class="fshowdatep fbutton">
                    <div>
                        <input type="hidden" name="txtshow" id="hdtxtshow" />
                        <span id="txtdatetimeshow">Loading</span>
                    </div>
            </div>
            
            <div class="clear"></div>
            </div>
      </div>
      <div style="padding:1px;">
        <div class="t1 chromeColor">
            &nbsp;</div>
        <div class="t2 chromeColor">
            &nbsp;</div>
        <div id="dvCalMain" class="calmain printborder">
            <div id="gridcontainer" style="overflow-y: visible;">
            </div>
        </div>
        <div class="t2 chromeColor">
            &nbsp;</div>
        <div class="t1 chromeColor">
            &nbsp;
        </div>   
        </div>
     
  </div>
  <!--<li class="tab active"><a href="/quirofano/todas/1">Todos</a></li>-->
  <!-- <li class="tab "><a href="/quirofano/activo/1">Activos</a></li>
  <li class="tab "><a href="/quirofano/ambulatorio/1">Ambulatorios</a></li> -->
</ul>

