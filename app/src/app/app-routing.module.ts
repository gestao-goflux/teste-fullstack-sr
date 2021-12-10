import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import { ListOfOffersComponent } from './offers/list-offers/list-offers.component';
import { ListOrdersComponent } from './orders/list-orders/list-orders.component';
import { LoginComponent } from './shared/base/login/login.component';
import { NewOfferComponent } from './offers/new-offer/new-offer.component';
import { NotFoundComponent } from './errors/not-found/not-found.component';

const routes: Routes = [
  {path: '', component: LoginComponent},
  {path: 'lista-ofertas', component: ListOfOffersComponent},
  {path: 'nova-oferta', component: NewOfferComponent},
  {path: 'lista-cotacao', component: ListOrdersComponent},
  {path: '**', component: NotFoundComponent},
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
