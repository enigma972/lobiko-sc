import './../styles/map.css';
import { Loader } from "@googlemaps/js-api-loader"

const loader = new Loader({
    apiKey: "API_KEY",
});

let $map = document.querySelector('#map');
let map = null;
let bounds = null;

loader.load()
    .then(() => {
        map = new google.maps.Map($map);
    })
    .then(() => {
        bounds = new google.maps.LatLngBounds();
    })
    .then(() => {
        Array.from(document.querySelectorAll('.item')).forEach(item => {
            let point = new google.maps.LatLng(item.dataset.lat, item.dataset.lng);
            let marker = new google.maps.Marker({
                position: point,
                map: map
            });
            bounds.extend(point);
        });
        map.panToBounds(bounds);
        map.fitBounds(bounds);
    });
