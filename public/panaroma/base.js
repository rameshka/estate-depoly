
/**
 * Created by Pasindu on 3/26/2017.
 */

var PSV = new PhotoSphereViewer({
    panorama: '/houseviews/Bryce-Canyon-National-Park-Mark-Doliner.jpg',
    container: 'photosphere',
    //loading_img: 'photosphere-logo.gif',

    navbar: [
        'autorotate', 'zoom', 'download', 'markers',
        'spacer-1',

        {

            title: 'Change image',
            className: 'custom-button',
            content: '↻',
            onClick: (function() {
                var i = false;

                return function() {
                    i = !i;
                    PSV.clearMarkers();

                    PSV.setPanorama(i ? 'houseviews/Bryce-Canyon-By-Jess-Beauchemin.jpg' : 'houseviews/Bryce-Canyon-National-Park-Mark-Doliner.jpg', {
                        longitude: i ? 3.7153696451829257 : 3.8484510006474992,
                        latitude: i ? 0.57417649320975916 : -0.24434609527920628
                    }, true)
                        .then(function() {
                            PSV.setCaption(i ? 'Bryce Canyon National Park <b>&copy; Jess Beauchemin</b>' : 'Bryce Canyon National Park <b>&copy; Mark Doliner</b>');
                        });
                }
            }())
        },
        {
            id: 'disabled',
            title: 'This button is disabled',
            content: '❌',
            enabled: false
        },
        'caption',
        'gyroscope',
        'fullscreen'
    ],

    caption: 'Bryce Canyon National Park <b>&copy; Mark Doliner</b>',
    longitude_range: [-7*Math.PI/8, 7*Math.PI/8],
    latitude_range: [-3*Math.PI/4, 3*Math.PI/4],
    anim_speed: '-2rpm',
    default_fov: 50,
    fisheye: true,
    move_speed: 1.1,
    time_anim: false,
    gyroscope: true,
    webgl: true,
    transition: {
        duration: 1000,
        loader: true,
        blur: true
    },

});

$(document).ready(function(){
    $('#360').click(function(){
        PSV.clearMarkers();
        var i ;
        PSV.setPanorama(i ? 'houseviews/Bryce-Canyon-By-Jess-Beauchemin.jpg' : 'houseviews/Bryce-Canyon-National-Park-Mark-Doliner.jpg', {
            longitude: i ? 3.7153696451829257 : 3.8484510006474992,
            latitude: i ? 0.57417649320975916 : -0.24434609527920628
        }, true)
            .then(function() {
                PSV.setCaption(i ? 'Bryce Canyon National Park <b>&copy; Jess Beauchemin</b>' : 'Bryce Canyon National Park <b>&copy; Mark Doliner</b>');
            });
    });
});
