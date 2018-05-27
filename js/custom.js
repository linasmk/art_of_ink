$(document).ready(function() {


    var userFeed = new Instafeed({
        get: 'user',
        userId: '6630985',
        limit: 12,
        resolution: 'standard_resolution',
        accessToken: '6630985.a54185f.bc84369dddc041e684a26d99a4f8a1b6',
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