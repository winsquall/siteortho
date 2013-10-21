$(window).load(function(){

    // ieCheck
    var ie = false;
    var aniButtonDuration = 300;
    
    
    if($.browser.msie && $.browser.version<9)
    {
        aniButtonDuration = 0;
        ie = true;
    }
    
    
    //resize
   	var mainDIV = $('.main');
    
    var minW = parseInt($('body').css("min-width"));
    var minH = parseInt($('body').css("min-height"));
    
    mainDIV_H = 600;
    
    var window_W = $(document).width();
    var window_H = $(document).height();
      

    $(window).resize(function()
    {
       resizeContent(500);
    });
    
    
    function resizeContent(_animationSpeed)
    {
        window_W = $(document).width();
        window_H = $(document).height();
        
        mainDIV_H = 860;
        
        if (window_H > mainDIV_H) {
			mainDIV.stop().animate({marginTop:~~((window_H - mainDIV_H)/2)}, _animationSpeed, 'easeOutCubic');	
        } else {
			mainDIV.stop().animate({marginTop:0}, _animationSpeed, 'easeOutCubic');	
		}	
    }
    
    resizeContent(0);
    
    $('#icon1, #icon2').sprites({
		method:'simple',
		duration:400,
		easing:'easeOutQuint',
		hover:true
	})
    
 
    
    
    /////////////////////////////////////////////////////////////////////////// 
    //                           content switch                              //
    ///////////////////////////////////////////////////////////////////////////
    
    var content=$('#content'),
        nav=$('.menu'),
        menuItems = $('#menu li'),
        logo = $('h1'),
        contentList = $('#content > ul');
    
   
    $('#menu > li a > span').each(function(){
	   $(this).stop().animate({opacity:0}, 0);
	})
    
    var menuItemsWidth = new Array();
    var menuItemsWidthSplash = new Array();
    var menuItemsColors = new Array();
    var logoContent = new Object({top:0, left:435});
    var logoSplash = new Object({top:370, left:852});
    
    
    menuItemsWidth[0] = 840;
    menuItemsWidth[1] = 955;
    menuItemsWidth[2] = 850;
    menuItemsWidth[3] = 915;
    menuItemsWidth[4] = 880;
    menuItemsWidth[5] = 835;
    menuItemsWidth[6] = 885;
    
    menuItemsWidthSplash[0] = 140;
    menuItemsWidthSplash[1] = 260;
    menuItemsWidthSplash[2] = 355;
    menuItemsWidthSplash[3] = 235;
    menuItemsWidthSplash[4] = 240;
    menuItemsWidthSplash[5] = 340;
    menuItemsWidthSplash[6] = 100;
    
    menuItemsColors[0] = '#8542a0';
    menuItemsColors[1] = '#d13c8c';
    menuItemsColors[2] = '#15b7ff';
    menuItemsColors[3] = '#afbf44';
    menuItemsColors[4] = '#f9cd07';
    menuItemsColors[5] = '#ff971d';
    menuItemsColors[6] = '#e0191c';
    
    logo.css({top:logoSplash.top, left:logoSplash.left});
    
    for(i=0; i<menuItems.length; i++){
        menuItems.eq(i).find('>span').stop().delay(100).animate({width:menuItemsWidthSplash[i]}, 500, 'easeOutCubic')
    }
    
    nav.navs({
		useHash:true,
        defHash:'#!/',
		hoverIn:function(li){
		    $('>a',li).stop().animate({color:'#757575'}, 250,'easeOutSine');
		},
		hoverOut:function(li){
		    $('>a',li).stop().animate({color:menuItemsColors[li.index()]}, 250,'easeOutSine');
		}				
    })
    
    
     content.tabs({
		preFu:function(_)
        {
            _.li.css({display:'none', left:'711px'});
            content.css({left:getOutsideLeft(), display:'none'})
		}
		,actFu:function(_)
        {
            
            if( _.pren == undefined || _.n==-1){
                aniDelay = 0;
            } else {
                aniDelay = 400;
            }
            
            
            if(_.n == -1){
                logo.stop().delay(450).animate({top:logoSplash.top, left:logoSplash.left}, 800, 'easeOutQuint');
                for(i=0; i<menuItems.length; i++){
                    menuItems.eq(i).find('>span').stop().delay((Math.random()*350)+100).animate({width:menuItemsWidthSplash[i]}, 550, 'easeOutCubic')
                }
                content.stop().animate({left:getOutsideLeft()}, 500,'easeInSine', function(){
                    content.css({display:'none'});
                });
                $('footer').stop().animate({left:'112px'}, 800, 'easeOutCubic');
            } else {
                if( _.pren == undefined || _.pren==-1){
                    logo.stop().animate({top:logoContent.top, left:logoContent.left}, 800, 'easeOutQuint');
                    for(i=0; i<menuItems.length; i++){
                        menuItems.eq(i).find('>span').stop().delay(Math.random()*350).animate({width:menuItemsWidth[i]}, 550, 'easeOutCubic')
                    }
                    content.css({display:'block'});
                    content.stop().delay(aniDelay).css({left:getOutsideLeft()}).animate({left:'171px'}, 900,'easeOutQuint');
                    
                    _.li.css({display:'none', left:'711px'});
                    $('footer').stop().animate({left:'0px'}, 800, 'easeOutCubic');
                }
                
                if(_.n > _.pren)
                {
                    if(_.curr){
                	   _.curr 
                	       .css({display:'block', left:'711px'})
                           .stop()
                                .animate({left:'0px'}, 800, 'easeOutCubic');
        			
                    }
        
        			if(_.prev){
        			   _.prev 
                	       .stop()
                                .animate({left:'-711px'}, 800, 'easeOutCubic', function(){
                                    $(this).css({display:'none'});
                                });
                    }
                
                } else {
                    
                    if(_.curr){
                	   _.curr 
                	       .css({display:'block', left:'-711px'})
                           .stop()
                                .animate({left:'0px'}, 800, 'easeOutCubic');
        			
                    }
        
        			if(_.prev){
        			   _.prev 
                	       .stop()
                                .animate({left:'711px'}, 800, 'easeOutCubic', function(){
                                    $(this).css({display:'none'});
                                });
                    }
                    
                }
                
            }

        }
		
	})
       
    nav.navs(function(n, _)
    {
		content.tabs(n);
	})
    
    
    function getOutsideLeft()
    {
        var outsideLeftCor;
        
        if(window_W > 1220){
            outsideLeftCor = window_W;
        } else {
            outsideLeftCor = 1220;
        }

        return outsideLeftCor;
    }
 
})