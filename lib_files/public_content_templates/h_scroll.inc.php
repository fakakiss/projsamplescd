<!-- site carousel -->
<h3>Websites created with Yola</h3>
<script type="text/javascript">
/*<![CDATA[*/
var yola_site_carousel_itemList = [
    {url: "images/h_scroll/1.jpg",  title: "Ming makes cupcakes",id: "..", siteUrl: ".."},
    {url: "images/h_scroll/2.jpg",  title: "Soccer Cinema",id: "..", siteUrl: ".."},
    {url: "images/h_scroll/3.jpg",  title: "Craveable Creations",id: "..", siteUrl: ".."},
    {url: "images/h_scroll/4.jpg",  title: "Cedees Soaps",id: "..", siteUrl: ".."},
    {url: "images/h_scroll/5.jpg",  title: "Digital Retouching",id: "..", siteUrl: ".."},
    {url: "images/h_scroll/6.jpg",  title: "Alpha dive center",id: "..", siteUrl: ".."},
    {url: "images/h_scroll/7.jpg",  title: "Green of mind",id: "..", siteUrl: ".."},
    {url: "images/h_scroll/8.jpg",  title: "Hanna and Alex",id: "..", siteUrl: ".."},
    {url: "images/h_scroll/9.jpg",  title: "Latitude 37 baroque",id: "..", siteUrl: ".."},
    {url: "images/h_scroll/10.jpg", title: "Northwood room",id: "..", siteUrl: ".."},
    {url: "images/h_scroll/11.jpg", title: "Palmaceia umc",id: "..", siteUrl: ".."},
    {url: "images/h_scroll/12.jpg", title: "Panovision Solariums",id: "..", siteUrl: ".."},
    {url: "images/h_scroll/13.jpg", title: "Rani's Recipes",id: "..", siteUrl: ".."}

];
function yola_site_itemVisibleInCallback(carousel, item, i, state, evt)
{
    // The index() method calculates the index from a
    // given index who is out of the actual item range.
    var idx = carousel.index(i, yola_site_carousel_itemList.length);
    var item = $(yola_site_getItemHTML(yola_site_carousel_itemList[idx - 1])).get(0);
    $(item).fancybox({
            'transitionIn'		: 'fade',
            'cyclic'                    : true,
            'transitionOut'		: 'fade',
            'titlePosition' 	: 'over',
            'titleFormat'		: function(title, currentArray, currentIndex, currentOpts) {
                    image_id = currentIndex + 1;
                    return '<span id="fancybox-title-over">Image ' + (currentIndex + 1) + ' / ' + currentArray.length + (title.length ? ' &nbsp; ' + title : '') + '</span>';
            },
            'onCleanup' : function(){
	} 
    });
    carousel.add(i, item);
};

function yola_site_itemVisibleOutCallback(carousel, item, i, state, evt)
{
    carousel.remove(i);
};

function yola_site_getItemHTML(item){
    var item_m = item.url.replace(".jpg","") + "_m.jpg";
    return '<a rel="example_group" href="' + item_m + '" title="' + item.title + '" class="jcarousel-item"><img src="' + item.url + '" width="161px" height="116px" border="0" alt="' + item.title + '" /></a>';
};
$(document).ready(function() {
    $('#yola_site_carousel').jcarousel({
        size: yola_site_carousel_itemList.length,
        wrap: 'circular',
        scroll: 5,
        itemVisibleInCallback: {onBeforeAnimation: yola_site_itemVisibleInCallback},
        itemVisibleOutCallback: {onAfterAnimation: yola_site_itemVisibleOutCallback}

    });

    

});
/*]]>*/
</script>
  <div class="jcarousel-skin-ie7" >
      <div class="jcarousel-container jcarousel-container-horizontal">
          <div class="jcarousel-clip jcarousel-clip-horizontal">
              <ul id="yola_site_carousel" class="jcarousel-list jcarousel-list-horizontal" >
                <!-- The content will be dynamically loaded in here -->
              </ul>
          </div>
      </div>
  </div>
