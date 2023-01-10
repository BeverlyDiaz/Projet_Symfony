/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.css in this case)
import './styles/Partie_2.css';

// start the Stimulus application
import './bootstrap';

document.querySelector('#btn').addEventListener('click', function () {
 
  document.querySelector("#err").innerHTML = ""
  document.querySelectorAll("img[id='image']")[0].style.display = "inline"

  try {
    
    const q = document.querySelector('#Search').value

    fetch(`https://images-api.nasa.gov/search?q=${q}&media_type=image`)
      .then(res => res.json())
      .then(data => {


        const Resp = data.collection.items.map(items => items.data[0].nasa_id);

        const numbers = data.collection.items.length
        var min = 0;
        var max = numbers;
        var i = Math.floor(Math.random() * (max - min)) + min;

        try {
          fetch(`https://images-api.nasa.gov/asset/${Resp[i]}`)
            .then(res => res.json())
            .then(data => {
              document.querySelector("#image").src = data.collection.items[1].href;
              return data.collection.items[1].href;

            })
        } catch (error) { 
        }

      })
  } catch (error) {
  }
})
