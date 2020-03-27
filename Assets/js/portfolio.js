$(document).ready(function(){
    let src = "";
    let title = "";
    let $body = $('body');
    let $sitePrevImgWrapper = $('#big-image-preview');
    let $sitePrevTitle = $('#big-image-preview-title');
    let sitePrevImg = $sitePrevImgWrapper.find('img')[0];
    let $portfolio = $('#og-grid');
    let $portfolioItems = $portfolio.find('li');
    let $portfolioSinglePrevBtns = $('.fa-picture-o');
    let position = 1;
    let $visitWebsiteBtn = $('#visit-website-btn');
    let $prev = $('#navigation .left');
    let $next = $('#navigation .right');

    let replaceSitePrevImgSrc = function (src){
        sitePrevImg.src = src;
    }
    let replaceSiteBtnUrl = function (href){
        $visitWebsiteBtn[0].setAttribute('href',href);
    }
    let replaceTitle = function (title){
        $sitePrevTitle[0].innerHTML = title;
    }


    let $extractSiteSrcFromListEl = function (li){
        return $(li).find('.fa-picture-o')[0].getAttribute('data-src');
    }
    let $extractSiteUrlFromListEl = function (li){
        return $(li).find('.ui-link')[0].href;
    }
    let $extractTitleFromListEl = function (li){
        return $(li).find('p')[0].innerHTML;
    }

    $portfolioSinglePrevBtns.on('click',function(e){
        src = this.getAttribute('data-src');

        title = $(this).parent().prev()[0].innerHTML
        sitePrevImg.src = src;
        $sitePrevTitle[0].innerHTML = title;
        $sitePrevImgWrapper.show();
        $body.toggleClass('overflow');
        position = $(this).parent().parent()[0].id;
        replaceSiteBtnUrl($extractSiteUrlFromListEl($(this).parent().parent()[0]));

    });
    $sitePrevImgWrapper.on('click', function(e){
        $sitePrevImgWrapper.hide();
        $body.toggleClass('overflow');
    });
    $prev.on('click',function(e){
        e.stopPropagation(); // prevent the click from bubbling to the img wrapper above
        let li = "";
        if ( position == 1 ) {
            position = $portfolioItems.length;
            li = $portfolioItems[position-1];//$portfolio.find('li:last-child')[0];
        } else {
            position--;
            li = $portfolioItems[position-1];//$portfolio.find('li:nth-child('+position+')')[0];
        }
        replaceSitePrevImgSrc($extractSiteSrcFromListEl(li))
        replaceSiteBtnUrl($extractSiteUrlFromListEl(li));
        replaceTitle($extractTitleFromListEl(li));
        
    });
    $next.on('click',function(e){
        e.stopPropagation(); // prevent the click from bubbling to the img wrapper above
        var li = "";
        if ( position == 8 ) {
            position = 1;
            li = $portfolioItems[position-1];//$portfolio.find('li:first-child')[0];
        }  else {
            position++
            li = $portfolioItems[position-1];//$portfolio.find('li:nth-child('+position+')')[0];
        }
        replaceSitePrevImgSrc($extractSiteSrcFromListEl(li))
        replaceSiteBtnUrl($extractSiteUrlFromListEl(li));
        replaceTitle($extractTitleFromListEl(li));

    });

    
});