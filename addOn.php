
</div>

<script src="js/gsap/gsap.min.js"></script>
<script src="js/gsap/ScrollToPlugin.min.js"></script>
<script src="js/gsap/ScrollTrigger.min.js"></script>
<script src="js/vendor.min.js"></script>
<script src="js/common.js"></script>

<script type="module">
// Import the functions you need from the SDKs you need
import {
    initializeApp
} from "https://www.gstatic.com/firebasejs/10.1.0/firebase-app.js";
import {
    getDatabase,
    ref,
    set,
    get,
    update,
    child,
    remove
} from "https://www.gstatic.com/firebasejs/10.1.0/firebase-database.js";
import {
    getStorage,
    getDownloadURL,
    ref as sRef,
    uploadBytes,
    deleteObject,
    list
    
} from "https://www.gstatic.com/firebasejs/10.1.0/firebase-storage.js";
import {
    getAnalytics
} from "https://www.gstatic.com/firebasejs/10.1.0/firebase-analytics.js";

// TODO: Add SDKs for Firebase products that you want to use
// https://firebase.google.com/docs/web/setup#available-libraries

// Your web app's Firebase configuration
// For Firebase JS SDK v7.20.0 and later, measurementId is optional
const firebaseConfig = {
    apiKey: "AIzaSyDWSAxHuX67UZ2cdum-Hf8w1ORY5oQBQP0",
    authDomain: "asinternational-35959.firebaseapp.com",
    databaseURL: "https://asinternational-35959-default-rtdb.asia-southeast1.firebasedatabase.app",
    projectId: "asinternational-35959",
    storageBucket: "asinternational-35959.appspot.com",
    messagingSenderId: "593646255077",
    appId: "1:593646255077:web:b75c6ed7b26ac3b0424d0c",
    measurementId: "G-2ZV1WG48D4"
};

// Initialize Firebase
const app = initializeApp(firebaseConfig);
window.db = getDatabase(app)
window.set = set;
window.ref = ref;
window.get = get;
window.update = update;
window.remove = remove;
window.child = child;
window.getDownloadURL = getDownloadURL;
window.sRef = sRef;
window.uploadBytes = uploadBytes;
window.storage = getStorage(app);
window.deleteObject = deleteObject;
window.list = list

</script>

<script src="./js/data.js"></script>