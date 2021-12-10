import { Component, Input } from "@angular/core";

@Component({
    selector: 'app-order-card',
    templateUrl: './order-card.component.html',
    styleUrls: ['./order-card.component.scss']
})

export class OrderCardComponent {
    @Input() order = [];
    openModalOrder = false;
    
    newOrder = (): void => {
        this.openModalOrder = true;
    }
}