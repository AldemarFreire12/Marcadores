<h1> DIRECCION DE LA CIUDAD FRIAS EN ESPAÑA</h1>
<br>
<div id="mapa1" style="width:100%; height:300px; border:2px solid black"></div>
<script type="text/javascript">
   function initMap(){
    // Coordenadas de Frías
    var coordenadaFrias = new google.maps.LatLng(42.763267101853096, -3.294529375196755);

    // Creando el mapa
    var miMapa = new google.maps.Map(
        document.getElementById('mapa1'),
        {
            center: coordenadaFrias,
            zoom: 14,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        }
    );

    var marcadores = [
        { lat: 42.763267101853096, lng: -3.294529375196755, title: 'Frías' },
        { lat: 42.76284175648149, lng: -3.2925338117870524, title: 'Marcador 1' },
        { lat: 42.762447915570704, lng: -3.292169031378827, title: 'Marcador 2' },
        { lat: 42.76362943079225, lng: -3.2929200498663502, title: 'Marcador 3' },
        { lat: 42.76219585607389, lng: -3.2933492032877916, title: 'Marcador 4' },
        { lat: 42.76282600289315, lng: -3.291203436180584, title: 'Marcador 5' },
        { lat: 42.76355066381184, lng: -3.2909030287855754, title: 'Marcador 6' },
        { lat: 42.76282600289315, lng: -3.2901090949559086, title: 'Marcador 7' },
        { lat: 42.76181776490592, lng: -3.2907742827591426, title: 'Marcador 8' },
        { lat: 42.76096705134183, lng: -3.2910532324830797, title: 'Marcador 9' },
        { lat: 42.76073073994549, lng: -3.2931560842481424, title: 'Marcador 10' },
        { lat: 42.76079375640597, lng: -3.295666631763575, title: 'Marcador 11' },
        { lat: 42.76142391748574, lng: -3.297061380383259, title: 'Marcador 12' },
        { lat: 42.762227363567085, lng: -3.296567853948602, title: 'Marcador 13' },
        { lat: 42.76298353859651, lng: -3.2952374783421337, title: 'Marcador 14' },




        // Continúa añadiendo coordenadas según sea necesario
    ];

    for (var i = 0; i < marcadores.length; i++) {
        var marker = new google.maps.Marker({
            position: new google.maps.LatLng(marcadores[i].lat, marcadores[i].lng),
            map: miMapa,
            title: marcadores[i].title
        });
    }
}
</script>
