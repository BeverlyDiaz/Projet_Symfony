/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.css in this case)
import './styles/app.css';

// start the Stimulus application
import './bootstrap';

document.querySelector('#btn').addEventListener('click', function () {
    document.querySelector("#err").innerHTML = ""
    document.querySelectorAll("img[id='image']")[0].style.display = "inline"
    try {
      const date = document.querySelector('#Date').value
      fetch(`https://api.nasa.gov/mars-photos/api/v1/rovers/curiosity/photos?earth_date=${date}&camera=NAVCAM&api_key=fNbR28wf3xDXmZLFFLO0hKXfnGDOXzWBdf0f3HuK`)
        .then(res => res.json())
        .then(data => {
  
          const Date = JSON.stringify(data.photos.map(photos => photos.earth_date));
          const jsonToString = JSON.stringify(data.photos.map(photos => photos.img_src));
  
          const numbers = data.photos.length //detect all [x] in array photo
          var min = 0;
          var max = numbers;
          var i = Math.floor(Math.random() * (max - min)) + min;
          try {
            document.querySelector("#image").src = data.photos[i].img_src;
            return data.photos[i].img_src;
          } catch (error) {
            document.querySelector("#err").innerHTML = "Pas de photo Trouvée à la date suivante : " + date;
            document.querySelectorAll("img[id='image']")[0].style.display = "none"
          }
        })
    } catch (error) {
    }
  })
  
  