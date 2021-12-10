import { Component, Input, OnInit } from "@angular/core";
@Component({
    selector: 'app-offer-card',
    templateUrl: './offer-card.component.html',
    styleUrls: ['./offer-card.component.scss']
})

export class OfferCardComponent implements OnInit {
    @Input() offer: any;

    constructor() {
        this.offer = [];
    }
    
    openModal = false;
    
    ngOnInit(): void {
        if (this.offer.accepted_order !== null) {
            let card = document.getElementsByClassName('list-offers-card');
            card[0].classList.add('accepted');
        }
    }

    seeOffers = (): void => {
        this.openModal = true;
    }
}
