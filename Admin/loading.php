<script type="text/javascript" src="http://jqueryjs.googlecode.com/files/jquery-1.3.2.min.js"></script>
<script type="text/javascript">
var executed = false;
var loaded = function () {
    if (!executed) {
        $(".sk-rotating-plane").fadeOut("slow");
        setTimeout(function () {
            $('body').addClass('loaded');
        }, 10);
        executed = true;
    }
};
$(window).on('load', loaded);
setTimeout(loaded, 5000);
</script>
<!-- <script type="text/javascript">
$(document).ready(function()
{
    $("#loading").hide();
});
</script>
<style type="text/css">
	#loading{position:fixed;top:50%;left:50%;z-index:1104;}
</style>

<img id="loading" alt="" src="tenor (3).gif"/> -->

<!-- protected void Page_Load(object sender, EventArgs e)
{
        if (this.IsPostBack)
        {

        }
        else
        {
            Response.Write("<div id=\"loading\" style=\" text-align:center; top:100px;\"><p> Please Wait...</p><br/><img src=\"../Your Animation .gif file path\" \"width:400px\"></div>");
            Response.Flush();
            System.Threading.Thread.Sleep(5000);//You may increase Or decrees Thread Sleep time 
            Response.Write("<script>document.getElementById('loading').style.display='none';</script>");
        }
} -->


<!-- <script type="text/javascript">

    function pageLoad(sender, args) {
        var prm = Sys.WebForms.PageRequestManager.getInstance();
        prm.add_beginRequest(BeginRequestHandler);
        prm.add_endRequest(EndRequestHandler);
    }

    function BeginRequestHandler(sender, args) {
        document.getElementById("mainDiv").style.visibility = 'hidden';
        document.getElementById("loading").style.visibility = 'visible';
    }

    function EndRequestHandler(sender, args) {
       document.getElementById("mainDiv").style.visibility = 'visible';
       document.getElementById("loading").style.visibility = 'hidden';
    }
 </script> -->


 <div id="sk-rotating-plane" class="sk-rotating-plane">
   <p> wme;kmde;,mijiudeikckdkdkdkdkdkdkdlklds,cx,clkdlkdldlldldldldldlm
</p></div>

<div id="loading" style="visibility: hidden;text-align: center;">
    <img src="images1/loading.gif" id="Img5" data-transition="slide" />
</div>