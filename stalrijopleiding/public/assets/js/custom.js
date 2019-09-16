$(document).ready(function() {
    var userFeed = new Instafeed({
        get: 'user',
        userId: '11304579437',
        limit: 3,
        resolution: 'standard_resolution',
        accessToken: '11304579437.1677ed0.70201c0d802f42da868c09702f2fc1b9',
        sortBy: 'most-recent',
        template: '<div class="insta"><a href="{{image}}" title="{{caption}}" target="_blank"><img src="{{image}}" alt="{{caption}}" class="img-fluid"/></a></div>',
    });
    userFeed.run();
});