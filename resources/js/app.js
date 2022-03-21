import { Application } from '@hotwired/stimulus';
import { definitionsFromContext } from '@hotwired/stimulus-webpack-helpers';


require('bootstrap/dist/js/bootstrap.bundle')


const application = Application.start();
const context = require.context('./controllers', true, /\.js$/);
application.load(definitionsFromContext(context));

document.addEventListener('turbo:load', () => {
    document.querySelectorAll('img').forEach((element) => {
        element.addEventListener("error", function(event) {
            event.target.remove();
        })
    })
});
