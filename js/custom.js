$(document).ready(function() {


    var userFeed = new Instafeed({
        get: 'user',
        userId: '6112814657',
        limit: 12,
        resolution: 'standard_resolution',
        accessToken: '6112814657.b9c53fa.67348c6a279346a9b517e1b839d98428',
        sortBy: 'most-recent',
        template: '<div class="profiles__instagram"><a href="{{image}}" title="{{caption}}" target="_blank"><img src="{{image}}" alt="{{caption}}" class="img-fluid"/></a></div>',
    });


    userFeed.run();

    
    // This will create a single gallery from all elements that have class "gallery-item"
    $('.gallery').magnificPopup({
        type: 'image',
        delegate: 'a',
        gallery: {
            enabled: true
        }
    });


});