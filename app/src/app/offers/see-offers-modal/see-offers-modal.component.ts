import { Component, Input, OnInit } from "@angular/core";

@Component({
    selector: 'app-see-offers-modal',
    templateUrl: './see-offers-modal.component.html',
    styleUrls: ['./see-offers-modal.component.scss']
})

export class SeeOffersModalComponent implements OnInit {
    @Input() openModal: boolean;
    // @Output() openModal: boolean;

    modalClose = false;
    
    constructor() {
        this.openModal = true;    
    }

    ngOnInit() {}

    closeModal = () => {
        this.modalClose = true;
        this.openModal = false;
    }
}