// $tabs = jQuery.noConflict();
// $tabs(document).ready(function() {
//   $tabs(".tab_content").hide(); //Hide all content
//  $tabs("ul.tabs li:first").addClass("active").show(); //Activate first tab
//   $tabs(".tab_content:first").show(); //Show first tab content

//   $tabs("ul.tabs li").click(function() {
//    $tabs("ul.tabs li").removeClass("active"); //Remove any "active" class
//     $tabs(this).addClass("active"); //Add "active" class to selected tab
//     $tabs(".tab_content").hide(); //Hide all tab content
//     var activeTab = $tabs(this).find("a").attr("href"); //Find the rel attribute value to identify the active tab + content
//     $tabs(activeTab).fadeIn(); //Fade in the active content
//     return false;
//   });
// });