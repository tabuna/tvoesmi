import { Controller } from '@hotwired/stimulus';
import { timeSince } from '../lib/format_date';

export default class extends Controller {
    initialize() {

        const event = new Date(this.element.innerText.trim());

        //this.element.innerHTML = timeSince(this.element.innerText.trim());
        this.element.innerHTML = event.toLocaleString(
            'default', {weekday: 'long', hour: '2-digit', minute:'2-digit'}
        );
    }
}
