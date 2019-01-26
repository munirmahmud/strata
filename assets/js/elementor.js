( function ( $, elementor ) {
    "use strict";

    var Strata = {

        init: function () {

            var widgets = {
                'tp-map.default': Strata.Map,
                //'xs-slider.default': Geobin.Slider,
            };

            $.each( widgets, function ( widget, callback ) {
                elementor.hooks.addAction( 'frontend/element_ready/' + widget, callback );
            } );

        },

        Map: function ( $scope ) {

            var $container = $scope.find( '.strata-maps' ),
                map,
                init,
                pins;
            if ( !window.google ) {
                return;
            }

            init = $container.data( 'init' );
            pins = $container.data( 'pins' );
            map = new google.maps.Map( $container[0], init );

            if ( pins ) {
                $.each( pins, function ( index, pin ) {

                    var marker,
                        infowindow,
                        pinData = {
                            position: pin.position,
                            map: map
                        };

                    if ( '' !== pin.image ) {
                        pinData.icon = pin.image;
                    }

                    marker = new google.maps.Marker( pinData );

                    if ( '' !== pin.desc ) {
                        infowindow = new google.maps.InfoWindow( {
                            content: pin.desc
                        } );
                    }

                    marker.addListener( 'click', function () {
                        infowindow.open( map, marker );
                    } );

                    if ( 'visible' === pin.state && '' !== pin.desc ) {
                        infowindow.open( map, marker );
                    }

                } );
            }
        },

    };

    $( window ).on( 'elementor/frontend/init', Strata.init );

}( jQuery, window.elementorFrontend ) );