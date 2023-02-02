export default {
    init() {
        const google = window.google;

        /**
         * initMap
         *
         * Renders a Google Map onto the selected jQuery element
         *
         * @date    22/10/19
         * @since   5.8.6
         *
         * @param   jQuery $el The jQuery element.
         * @return  object The map instance.
         */
        function initMap($el) {
            const styledMapType = new google.maps.StyledMapType(
                [
                    {
                        "featureType": "administrative",
                        "elementType": "all",
                        "stylers": [
                            {
                                "hue": "#616161"
                            },
                            {
                                "lightness": -80
                            },
                            {
                                "visibility": "off"
                            }
                        ]
                    },
                    {
                        "featureType": "administrative.locality",
                        "elementType": "all",
                        "stylers": [
                            {
                                "visibility": "on"
                            },
                            {
                                "saturation": "-3"
                            },
                            {
                                "gamma": "1.81"
                            },
                            {
                                "weight": "0.01"
                            },
                            {
                                "hue": "#ff0000"
                            },
                            {
                                "lightness": "17"
                            }
                        ]
                    },
                    {
                        "featureType": "administrative.land_parcel",
                        "elementType": "all",
                        "stylers": [
                            {
                                "visibility": "off"
                            }
                        ]
                    },
                    {
                        "featureType": "landscape",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "hue": "#dddddd"
                            },
                            {
                                "saturation": -100
                            },
                            {
                                "lightness": -3
                            },
                            {
                                "visibility": "on"
                            }
                        ]
                    },
                    {
                        "featureType": "landscape",
                        "elementType": "labels",
                        "stylers": [
                            {
                                "hue": "#616161"
                            },
                            {
                                "saturation": -100
                            },
                            {
                                "lightness": -100
                            },
                            {
                                "visibility": "off"
                            }
                        ]
                    },
                    {
                        "featureType": "poi",
                        "elementType": "all",
                        "stylers": [
                            {
                                "hue": "#000000"
                            },
                            {
                                "saturation": -100
                            },
                            {
                                "lightness": -100
                            },
                            {
                                "visibility": "off"
                            }
                        ]
                    },
                    {
                        "featureType": "road",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "hue": "#bbbbbb"
                            },
                            {
                                "saturation": -100
                            },
                            {
                                "lightness": 26
                            },
                            {
                                "visibility": "on"
                            }
                        ]
                    },
                    {
                        "featureType": "road",
                        "elementType": "labels",
                        "stylers": [
                            {
                                "hue": "#ffffff"
                            },
                            {
                                "saturation": -100
                            },
                            {
                                "lightness": 100
                            },
                            {
                                "visibility": "off"
                            }
                        ]
                    },
                    {
                        "featureType": "road.arterial",
                        "elementType": "labels.text",
                        "stylers": [
                            {
                                "visibility": "on"
                            },
                            {
                                "color": "#797979"
                            }
                        ]
                    },
                    {
                        "featureType": "road.arterial",
                        "elementType": "labels.text.fill",
                        "stylers": [
                            {
                                "color": "#868686"
                            }
                        ]
                    },
                    {
                        "featureType": "road.arterial",
                        "elementType": "labels.text.stroke",
                        "stylers": [
                            {
                                "color": "#ffffff"
                            }
                        ]
                    },
                    {
                        "featureType": "road.local",
                        "elementType": "all",
                        "stylers": [
                            {
                                "hue": "#ff0000"
                            },
                            {
                                "saturation": -100
                            },
                            {
                                "lightness": 100
                            },
                            {
                                "visibility": "on"
                            }
                        ]
                    },
                    {
                        "featureType": "road.local",
                        "elementType": "labels.text",
                        "stylers": [
                            {
                                "visibility": "on"
                            }
                        ]
                    },
                    {
                        "featureType": "road.local",
                        "elementType": "labels.text.fill",
                        "stylers": [
                            {
                                "color": "#b6b2b2"
                            }
                        ]
                    },
                    {
                        "featureType": "transit",
                        "elementType": "labels",
                        "stylers": [
                            {
                                "hue": "#ff0000"
                            },
                            {
                                "lightness": -100
                            },
                            {
                                "visibility": "off"
                            }
                        ]
                    },
                    {
                        "featureType": "water",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "hue": "#ff0000"
                            },
                            {
                                "saturation": -100
                            },
                            {
                                "lightness": 100
                            },
                            {
                                "visibility": "on"
                            }
                        ]
                    },
                    {
                        "featureType": "water",
                        "elementType": "labels",
                        "stylers": [
                            {
                                "hue": "#000000"
                            },
                            {
                                "saturation": -100
                            },
                            {
                                "lightness": -100
                            },
                            {
                                "visibility": "off"
                            }
                        ]
                    }
                ],
                { name: 'Styled Map' }
            );

            // Find marker elements within map.
            var $markers = $el.find('.marker');
            var lat = $el.data('lat');
            var lng = $el.data('lng');
            // Create gerenic map.
            var mapArgs = {
                center: { lat, lng },
                zoom: $el.data('zoom') || 16,
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                zoomControl: false,
                scaleControl: true,
                mapTypeControl: false,
                streetViewControl: false,
            };
            var map = new google.maps.Map($el[0], mapArgs);

            // Add markers.
            map.markers = [];
            $markers.each(function () {
                initMarker($(this), map);
            });

            //Associate the styled map with the MapTypeId and set it to display.
            map.mapTypes.set('styled_map', styledMapType);
            map.setMapTypeId('styled_map');

            // Return map instance.
            return map;
        }

        /**
         * initMarker
         *
         * Creates a marker for the given jQuery element and map.
         *
         * @date    22/10/19
         * @since   5.8.6
         *
         * @param   jQuery $el The jQuery element.
         * @param   object The map instance.
         * @return  object The marker instance.
         */
        function initMarker($el, map) {
            // Get position from marker.
            var lat = $el.data('lat');
            var lng = $el.data('lng');
            var latLng = {
                lat: parseFloat(lat),
                lng: parseFloat(lng),
            };

            // Create marker instance.
            var marker = new google.maps.Marker({
                position: latLng,
                map: map,
            });
            console.log(marker, ';qqq');

            // Append to reference for later use.
            map.markers.push(marker);
        }


        // Render maps on page load.

        $('.js-map').each(function () {
            initMap($(this));
        });
    },
};
