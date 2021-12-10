import { Component, Input } from "@angular/core";

import { OrdersService } from "../orders.service";

@Component({
    selector: 'app-new-order-modal',
    templateUrl: './new-order-modal.component.html',
    styleUrls: ['./new-order-modal.component.scss']
})

export class NewOrderModalComponent {
    @Input() order: [];

    modalClose = false;
    quantity = '';
    price = '';
    
    constructor(
        private ordersService: OrdersService
    ) {
        this.order = [];    
    }

    sendOrder = (quantity: string, price: string) => {
        this.order.quantity = quantity;
        this.order.price = price;

        this.ordersService
            .newOffer(this.order).subscribe((list) => {
    }

    closeModal = () => {
        this.modalClose = true;
    }
}