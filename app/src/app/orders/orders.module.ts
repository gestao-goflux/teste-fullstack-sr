import { CommonModule } from '@angular/common';
import { HttpClientModule } from '@angular/common/http';
import { NgModule } from '@angular/core';
import { RouterModule } from '@angular/router';

import { ListOrdersComponent } from './list-orders/list-orders.component';
import { NewOrderModalComponent } from './new-order-modal/new-order-modal.component';
import { OrderCardComponent } from './order-card/order-card.component';


@NgModule({
  declarations: [
    ListOrdersComponent,
    NewOrderModalComponent,
    OrderCardComponent

  ],
  exports: [
    ListOrdersComponent,
    NewOrderModalComponent,
    OrderCardComponent
  ],
  imports: [
    CommonModule,
    HttpClientModule,
    RouterModule
  ],
  providers: [],
  bootstrap: []
})
export class OrdersModule { }
