import { Component, OnInit } from "@angular/core";

import { OrdersService } from "../orders.service";

@Component({
    selector: 'app-list-orders',
    templateUrl: './list-orders.component.html',
    styleUrls: ['./list-orders.component.scss']
})

export class ListOrdersComponent implements OnInit {
    listOfOrders = [];

    constructor(
        private ordersService: OrdersService
    ) {}

    ngOnInit(): void {
        this.listOrders();
    }
    
    listOrders = () => {
        this.ordersService
        .getOrders().subscribe((list) => {
          this.listOfOrders = list.data.filter((item: []) => !item.accepted);
        })
      }
}