// Codigo da api do google maps

// Cordenadas dos points

const objLocation = { 
  ecoPointEstacao : {lat: -19.917,lng: -43.934}, 
  ecoPointSoares : {lat: -19.922,lng: -43.945},
  Pointmunicipal: {lat: -19.924, lng: -43.935}, 
  PointHospitalar: {lat: -19.924, lng: -43.926}, 
  PointIgreja: {lat: -19.900, lng: -43.945}, 
  PointTeatro: {lat: -19.908, lng: -43.942}, 
  PointCoffe: {lat: -19.921, lng: -43.980}, 
  PointBufflet: {lat: -19.917, lng: -43.997}, 
  PointPadaria: {lat: -19.931, lng: -43.926}, 
  PointBonjuor: {lat: -19.928, lng: -43.943}, 
  PointPet: {lat: -19.936, lng: -43.937}, 
  PointFit: {lat: -19.899, lng: -43.923}, 
  PointSub: {lat: -19.887, lng: -43.936}, 
  PointPipi: {lat: -19.894, lng: -43.914}, 
  PointBundan: {lat: -19.869, lng: -43.985}, 
  PointClub: {lat: -19.875, lng: -43.977}, 
}

let map;

async function initMap() {
  // The location of Uluru
  const position = { lat: -19.917, lng: -43.934 };
  // Request needed libraries.
  //@ts-ignore
  const { Map } = await google.maps.importLibrary("maps");
  const { AdvancedMarkerElement } = await google.maps.importLibrary("marker");

  // The map, centered at Uluru
  map = new Map(document.getElementById("map"), {
    zoom: 13,
    center: position,
    mapId: "DEMO_MAP_ID",
  });

  let imagemMake = 'img/icones/point.svg';

  // The marker, positioned at Uluru
  for(let nome in objLocation){
    const marker = new google.maps.Marker({
      map: map,
      icon: imagemMake,
      position: objLocation[nome],
      title: "Eco Point",
    });
  }

  // new google.maps.Marker({
  //   position: map.getCenter(),
  //   icon: svgMarker,
  //   map: map,
  // });

}

initMap();



        
