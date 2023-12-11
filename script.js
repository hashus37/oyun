 // Sahneyi oluştur
 var scene = new THREE.Scene();

 // Perspektif kamerasını oluştur
 var camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 1000);

 // WebGL renderer'ını oluştur
 var renderer = new THREE.WebGLRenderer();
 renderer.setSize(window.innerWidth, window.innerHeight);

 // Renderer'ı sayfaya ekle
 document.getElementById("threejs-container").appendChild(renderer.domElement);

 // Renkli topları depolamak için dizi
 var stars = [];

 // Renkli topları oluştur ve sahneye ekle
 for (var i = 0; i < 4000; i++) {
     var starSize = Math.random() * 0.5 + 0.1; // Rastgele boyut     
     var starColor = new THREE.Color(Math.random(), Math.random(), Math.random()); // Rastgele renk

     var star = new THREE.Mesh(
         new THREE.SphereGeometry(starSize, 32, 32),
         new THREE.MeshBasicMaterial({ color: starColor })
     );
     star.position.set(
         (Math.random() - 0.5) * 2000,
         (Math.random() - 0.5) * 2000,
         (Math.random() - 0.5) * 2000
     );
     scene.add(star);
     stars.push(star);
 }

 // Işıklı ortam ışığını ekle
 var ambientLight = new THREE.AmbientLight(0x404040);
 scene.add(ambientLight);

 // Kamerayı ayarla
 camera.position.z = 5;

 // Tarayıcı boyutlarını güncelleyen fonksiyon
 function updateWindowSize() {
     var newWidth = window.innerWidth;
     var newHeight = window.innerHeight;
     renderer.setSize(newWidth, newHeight);
     camera.aspect = newWidth / newHeight;
     camera.updateProjectionMatrix();
 }

 // Tarayıcı boyutları değiştiğinde çağrılan fonksiyonu ekle
 window.addEventListener('resize', updateWindowSize);

 // Animasyon döngüsü
 function animate() {
     requestAnimationFrame(animate);

     // Yıldızları yavaşça hareket ettir
     stars.forEach(function (star) {
         star.position.z += 2; // Hızı düşürdük
         if (star.position.z > 1000) {
             star.position.z = -1000;
         }
     });

     // Sahneyi render et
     renderer.render(scene, camera);
 }

 // Animasyon döngüsünü başlat
 animate();
 
