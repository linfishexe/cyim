import * as THREE from 'three'
import { OrbitControls } from 'OrbitControls'
import { GLTFLoader } from 'GLTFLoader'
import { EffectComposer } from 'EffectComposer'
import { RenderPass } from 'RenderPass'
import { UnrealBloomPass } from 'UnrealBloomPass'
import { FontLoader } from 'FontLoader'

let enable_glare = true; // 是否啟用眩光效果
let enable_floor = true;  // 是否啟用地板
let enable_cameraPan = false;  // 是否啟用鏡頭平移
let enable_cameraZoom = false; // 是否啟用鏡頭縮放
let enable_cameraDamping = true; // 是否啟用鏡頭旋轉後滑順減速的效果(阻尼效果)
let enable_cameraRotate = true; // 是否啟用鏡頭旋轉
let enable_cameraAutoRotate = true; // 是否啟用鏡頭自動旋轉
const model_path = './file/logo_gltf/'; // 模型的資料夾路徑
const model_name = 'CYIM.gltf'; // 模型的檔案名稱
let model_emissive = 7.5; // 模型發光亮度
let scene, renderer, camera, cameraControl, effectComposer;
let f_scene, f_renderer, f_camera, f_cameraControl, f_effectComposer;
const banner = document.getElementById("banner");
const footer_logo = document.getElementById("footer_logo");

function toRad( degrees ) { 
    return THREE.MathUtils.degToRad(degrees); 
}
function init_scene(){ 
    const scene = new THREE.Scene();
    return scene; 
}
function init_camera(targetElement, cameraPos){ // 鏡頭
    const camera = new THREE.PerspectiveCamera(45, targetElement.clientWidth / targetElement.clientHeight, 0.01,1000);
    camera.position.set(cameraPos.x, cameraPos.y, cameraPos.z)
    return camera;
}
function init_renderer(targetElement, clearColor){ // 渲染器
    const  renderer = new THREE.WebGLRenderer();
    renderer.setSize(targetElement.clientWidth, targetElement.clientHeight); // 畫布寬高
    renderer.setClearColor(clearColor.color, clearColor.opacity); // 畫布底色
    renderer.shadowMap.enabled = true; // 是否渲染陰影
    renderer.shadowMap.type = THREE.VSMShadowMap; // 陰影種類
    renderer.toneMapping = THREE.ReinhardToneMapping;
    renderer.toneMappingExposure = 2.3; // 曝光度
    targetElement.appendChild(renderer.domElement);
    return renderer;
}
function init_effects(targetScene, targetCamera, targetRenderer, targetElement) { // 眩光特效
    const effectComposer = new EffectComposer(targetRenderer);
    const renderPass = new RenderPass(targetScene, targetCamera);
    effectComposer.addPass(renderPass);
    const bloomPass = new UnrealBloomPass(new THREE.Vector2(targetElement.clientWidth, targetElement.clientHeight),0.6, 0.1, 0.454);
    effectComposer.addPass(bloomPass);
    return effectComposer;
}
function init_cameraControl(targetCamera, targetRenderer, controlSetting){ //鏡頭控制器
    const cameraControl = new OrbitControls(targetCamera, targetRenderer.domElement);
    cameraControl.enablePan = controlSetting.pan; // 平移
    cameraControl.enableZoom = controlSetting.zoom; // 縮放
    cameraControl.enableDamping = controlSetting.damping; // 阻尼效果
    cameraControl.enableRotate = controlSetting.rotate; // 旋轉
    cameraControl.autoRotate = controlSetting.autoRotate;   // 自動旋轉 
    cameraControl.maxPolarAngle = Math.PI * 0.51;
    return cameraControl;
}
function init_light(targetScene, onlyAmbientLight = false){ // 光源
    targetScene.add( new THREE.AmbientLight( 0x111122, 1 ) );
    if(!onlyAmbientLight){
        const rectLight1 = new THREE.RectAreaLight( 0xffffff, 0.36, 4, 10 )
        const rectLight2 = new THREE.RectAreaLight( 0x00ff00, 5, 4, 10 )
        const rectLight3 = new THREE.RectAreaLight( 0x0000ff, 5, 4, 10 )
        rectLight1.position.set( - 5, 5, 8 );
        rectLight2.position.set( 0, 5, 8 );
        rectLight3.position.set( 5, 5, 8 );
        targetScene.add( rectLight1 );
        targetScene.add( rectLight2 );
        targetScene.add( rectLight3 );
    }
}
function init_floor(targetScene){ // 地板
    const geoFloor = new THREE.BoxGeometry( 500, 0.1, 500 );
    const matStdFloor = new THREE.MeshStandardMaterial( { 
        color: 0x808080, 
        roughness: 0.7, 
        metalness: 0,
        transparent: true,
        opacity: 0.4
    } );
    const mshStdFloor = new THREE.Mesh( geoFloor, matStdFloor );
    // mshStdFloor.receiveShadow = true;
    mshStdFloor.position.set(0,-5,0);
    targetScene.add( mshStdFloor );
}
function init_model(targetScene, modelPos){ // 模型
    const GLTFloader = new GLTFLoader();
    GLTFloader.setPath(model_path).load(model_name, 
        function(gltf){
            const model = gltf.scene;
            model.traverse(function(object) {
                if(object.isMesh) {
                    // object.castShadow = true; // 啟用陰影投射(會產生陰影)
                    // object.receiveShadow = true;  // 啟用陰影接收(讓陰影可以投射在此模型上)
                    if ( object.material.emissiveIntensity ) {
                        object.material.emissiveIntensity = model_emissive;
                    }
                }
            })
            model.children[0].position.set(modelPos.x, modelPos.y, modelPos.z);
            model.children[0].rotation.set(0, toRad(0), 0);
            targetScene.add(model);
        }, undefined, (error)=>{console.log(error)}
    )
}
function init_ball_model(targetScene){ // 粒子
    const geometry = new THREE.SphereGeometry()
    const material = new THREE.PointsMaterial({
      size: 1,
      blending: THREE.AdditiveBlending,
      transparent: true,
      opacity: 0.3
    })
    const vertices = []
  
    const range = 30
    const ballCount = 250
    for (let i = 0; i < ballCount; i++) {
        const x = THREE.MathUtils.randInt(-range, range)
        const y = THREE.MathUtils.randInt(-range, range)
        const z = THREE.MathUtils.randInt(-range, range)

        vertices.push(x, y, z)
    }
    geometry.setAttribute('position', new THREE.Float32BufferAttribute(vertices, 3))
  
    const ball = new THREE.Points(geometry, material)
    targetScene.add(ball)
}
function init_fonts(targetScene){
    const loader = new FontLoader();
	loader.load( './file/Microsoft JhengHei_Regular.json', function ( font ) {
		const color = 0xffffff;
		const matDark = new THREE.LineBasicMaterial( {
			color: color,
			side: THREE.DoubleSide
		} );
		const matLite = new THREE.MeshBasicMaterial( {
			color: color,
			transparent: true,
			opacity: 1,
			side: THREE.DoubleSide
		} );

		const message = '風起資管';
		const shapes = font.generateShapes( message, 2 );
		const geometry = new THREE.ShapeGeometry( shapes );
		geometry.computeBoundingBox();
		const xMid = - 0.5 * ( geometry.boundingBox.max.x - geometry.boundingBox.min.x );
		geometry.translate( xMid, 0, 0 );

		const text = new THREE.Mesh( geometry, matLite );
        text.position.y = 10
        text.rotation.y = toRad(180);
		targetScene.add( text );

		// 描邊-------------------------
		// const holeShapes = [];
		// for ( let i = 0; i < shapes.length; i ++ ) {
		// 	const shape = shapes[ i ];
		// 	if ( shape.holes && shape.holes.length > 0 ) {
		// 		for ( let j = 0; j < shape.holes.length; j ++ ) {
		// 			const hole = shape.holes[ j ];
		// 			holeShapes.push( hole );
		// 		}
		// 	}
		// }

		// shapes.push.apply( shapes, holeShapes );
		// const lineText = new THREE.Object3D();

		// for ( let i = 0; i < shapes.length; i ++ ) {
		// 	const shape = shapes[ i ];
		// 	const points = shape.getPoints();
		// 	const geometry = new THREE.BufferGeometry().setFromPoints( points );
		// 	geometry.translate( xMid, 0, 0 );
		// 	const lineMesh = new THREE.Line( geometry, matDark );
        //     lineMesh.position.z = -0.5;
        //     lineMesh.position.y = 10;
        //     lineMesh.rotation.y = toRad(180);
		// 	lineText.add( lineMesh );
		// }
		// targetScene.add( lineText );
	} );
}
function init_fonts2(targetScene){
    const loader = new FontLoader();
	loader.load( './file/Microsoft JhengHei_Regular.json', function ( font ) {
		const color = 0xffffff;
		const matLite = new THREE.MeshBasicMaterial( {
			color: color,
			transparent: true,
			opacity: 1,
			side: THREE.DoubleSide
		} );

		const message = '風起資管 所向披靡';
		const shapes = font.generateShapes( message, 3 );
		let geometry = new THREE.ShapeGeometry( shapes );
        geometry.parameters.shapes = geometry.parameters.shapes.splice(5, geometry.parameters.shapes.length - 5);
		geometry.computeBoundingBox();
		const xMid = - 0.5 * ( geometry.boundingBox.max.x - geometry.boundingBox.min.x );
		geometry.translate( xMid, 0, 0 );

		const text = new THREE.Mesh( geometry, matLite );
        text.position.z = 10;
        text.position.y = -3;
        text.rotation.x = toRad(-90);
        text.rotation.z = toRad(180);
		targetScene.add( text );
	} );
}
function init_fonts3(targetScene){
    const loader = new FontLoader();
	loader.load( './file/Microsoft JhengHei_Regular.json', function ( font ) {
		const color = 0xffffff;
		const matLite = new THREE.MeshBasicMaterial( {
			color: color,
			transparent: true,
			opacity: 1,
			side: THREE.DoubleSide
		} );

		const message = `朝陽資管 一定會贏`;
        const shapes = font.generateShapes( message, 3 );
		const geometry = new THREE.ShapeGeometry( shapes );
		geometry.computeBoundingBox();
		const xMid = - 0.5 * ( geometry.boundingBox.max.x - geometry.boundingBox.min.x );
		geometry.translate( xMid, 0, 0 );

		const text = new THREE.Mesh( geometry, matLite );
		text.position.z = 3;
        text.position.y = -3
        text.rotation.x = toRad(-90);
        text.rotation.z = toRad(180);
		targetScene.add( text );

	} );
}
function render(targetScene, targetCamera, targetRenderer,targetCameraControl, targetEffectComposer){ // 渲染
    let ts = targetScene, tc = targetCamera, tr = targetRenderer, tcControl = targetCameraControl, tec = targetEffectComposer;
    requestAnimationFrame(function(){render(ts, tc, tr, tcControl, tec);});
    targetRenderer.render(targetScene, targetCamera);
    targetCameraControl.update();
    if(enable_glare) targetEffectComposer.render();
}
function onWindowResize() { // RWD
	camera.aspect = banner.clientWidth / banner.clientHeight;
	camera.updateProjectionMatrix();
	renderer.setSize( banner.clientWidth, banner.clientHeight );
}
function init(){ // 初始化
    scene = init_scene();
    camera = init_camera(banner, {x: -50, y: 10, z: 0})
    renderer = init_renderer(banner, {color: 0x111111, opacity: 1.0});
    cameraControl = init_cameraControl(camera, renderer, {
        pan: enable_cameraPan,
        zoom: enable_cameraZoom,
        damping: enable_cameraDamping,
        rotate: enable_cameraRotate,
        autoRotate: enable_cameraAutoRotate
    });
    effectComposer = init_effects(scene, camera, renderer, banner);
    init_light(scene, true);
    if(enable_floor) init_floor(scene);
    init_model(scene, {x: 0, y: 0, z: 0});
    init_ball_model(scene);
    init_fonts(scene);
    init_fonts2(scene);
    init_fonts3(scene);
    render(scene, camera, renderer, cameraControl, effectComposer);
    window.addEventListener( 'resize', onWindowResize );
}
function init_footer(){ // 初始化
    f_scene = init_scene();
    f_camera = init_camera(footer_logo, {x: 0, y: 0, z: 18})
    f_renderer = init_renderer(footer_logo, {color: 0x04040e, opacity: 1.0});
    f_cameraControl = init_cameraControl(f_camera, f_renderer, {
        pan: false,
        zoom: false,
        damping: true,
        rotate: true,
        autoRotate: false
    });
    f_effectComposer = init_effects(f_scene, f_camera, f_renderer, footer_logo);
    init_light(f_scene, true);
    init_model(f_scene, {x: 0, y: -5, z: 0});
    render(f_scene, f_camera, f_renderer, f_cameraControl, f_effectComposer);
}

init();

init_footer();