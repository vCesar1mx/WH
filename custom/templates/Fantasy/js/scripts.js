// @license magnet:?xt=urn:btih:d3d9a9a6595521f9666a5e94cc830dab83b65699&dn=expat.txt Expat/MIT
function fixFooter() {
    var footerHeight = $("#footer").outerHeight() + "px";
    var wrapperHeight = "calc(100vh - " + footerHeight + ")";
    $("#wrapper").css({'min-height': wrapperHeight});
}

$(document).ready(fixFooter);
$(window).resize(fixFooter);
// @license-end

		$.get(`https://mc-api.net/v3/server/ping/${mc_ip}:${mc_port}/`, function (data) {
            document.getElementById('mc-online').innerHTML = data["players"]["online"];
    });
			

        $.get(`https://discordapp.com/api/guilds/${widget_id}/embed.json`, function (data) {
            document.getElementById('discord-online').innerHTML = data["presence_count"];
    });
	
	

$(function() {
        if(particles){
            particlesJS("particles-js", {"particles":{"number":{"value":400,"density":{"enable":true,"value_area":5000}},"color":{"value":"#fff"},"shape":{"type":"circle","stroke":{"width":0,"color":"#000000"},"polygon":{"nb_sides":5},"image":{"src":"img/github.svg","width":100,"height":100}},"opacity":{"value":0.31,"random":true,"anim":{"enable":false,"speed":1,"opacity_min":0.1,"sync":false}},"size":{"value":3,"random":true,"anim":{"enable":false,"speed":40,"size_min":0.1,"sync":false}},"line_linked":{"enable":false,"distance":500,"color":"#ffffff","opacity":0.4,"width":2},"move":{"enable":true,"speed":4,"direction":"top","random":true,"straight":false,"out_mode":"out","bounce":false,"attract":{"enable":false,"rotateX":600,"rotateY":1200}}},"interactivity":{"detect_on":"canvas","events":{"onhover":{"enable":false,"mode":"%%__USER__%%"},"onclick":{"enable":false,"mode":"repulse"},"resize":true},"modes":{"grab":{"distance":400,"line_linked":{"opacity":0.5}},"bubble":{"distance":400,"size":4,"duration":0.3,"opacity":1,"speed":3},"repulse":{"distance":200,"duration":0.4},"push":{"particles_nb":4},"remove":{"particles_nb":2}}},"retina_detect":true});
        }
    });
	
var clipboard = new ClipboardJS('#copy');

            function openMobile() {
                $(".dd-bg").addClass("active");
                $(".cyvers-nav #main-nav").addClass("open");
            }
            function closeMobile() {
                $(".dd-bg").removeClass("active");
                $(".cyvers-nav #main-nav").removeClass("open");
            }
			
    document.getElementById("text").textContent = game_online;
    document.getElementById('copy').textContent = mc_copy;
    document.getElementById('donline').textContent = d_online;
    document.getElementById('dclick').textContent = d_click;
    link = document.getElementById('invite');  link.href = invite_link;