

    <!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://aframe.io/releases/0.8.0/aframe.min.js"></script>
    <script src="https://jeromeetienne.github.io/AR.js/aframe/build/aframe-ar.js"></script>
</head>
<body>
    <a-scene embedded arjs>
        <a-entity scale=" .2 .2 2">
            <a-entity gltf-model="../img/este.glb" scale="1 1 1" crossOrigin="anonymous">
             <a-animation attribute="rotation" to="360 0 0" dur="3000" easing="linear" repeat="indefinite"></a-animation>   
            </a-entity>
        

       <a-marker-camera type='panaderia' pattenUrl='../controllers/pattern-bon.patt'></a-marker-camera>
      
            <a-marker type='panaderia' pattenUrl='../controllers/pattern-bon.patt'></a-marker>


        </a-entity>


    </a-scene>
</body>
</html>